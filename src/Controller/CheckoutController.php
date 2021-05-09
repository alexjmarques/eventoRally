<?php

namespace App\Controller;

use App\Entity\Cliente;
use App\Entity\Evento;
use App\Entity\UsuarioEvento;
use App\Form\PagSeguroBoletoType;
use App\Form\PagSeguroCartaoCreditoType;
use App\Payment\PagSeguro\Dto\DadosCompradorDto;
use App\Payment\PagSeguro\Dto\DadosPagamentoDto;
use App\Payment\PagSeguro\Dto\EnderecoCompradorDto;
use App\Payment\PagSeguro\Dto\ItemDto;
use App\Payment\PagSeguro\MetodoPagamento\MetodoPagamentoEnum;
use App\Payment\PagSeguro\MetodoPagamento\StatusPagamentoEnum;
use App\Payment\PagSeguro\PagSeguroService;
use App\Repository\EventoRepository;
use App\Repository\UsuarioEventoRepository;
use DomainException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Throwable;

class CheckoutController extends AbstractController
{
    /**
     * @Route("/checkout/{id}", name="checkout_index", methods={"GET", "POST"})
     *
     * @param Evento $evento
     * @return Response
     */
    public function index(
        Evento $evento,
        Request $request,
        PagSeguroService $pagSeguroService,
        \Swift_Mailer $mailer
    ): Response
    {
        /**
         * @var Cliente $usuario
         */
        $usuario = $this->getUser();

        $itemDto = new ItemDto();
        $itemDto->setId($evento->getId());
        $itemDto->setNome($evento->getTitulo());
        $itemDto->setQuantidade(1);
        $itemDto->setPreco($evento->getValor());

        $dadosComprador = new DadosCompradorDto();
        $dadosComprador->setNome($usuario->getNome());
        $dadosComprador->setSobrenome($usuario->getSobrenome());
        $dadosComprador->setCpf($usuario->getCpf());
        $dadosComprador->setDdd($usuario->getTelefoneResidencial());
        $dadosComprador->setTelefone($usuario->getTelefoneResidencial());
        $dadosComprador->setEmail($usuario->getEmail());
        $dadosComprador->setIp($request->getClientIp());

        $enderecoComprador = new EnderecoCompradorDto();
        $enderecoComprador->setRua($usuario->getEndereco());
        $enderecoComprador->setNumero($usuario->getNumero());
        $enderecoComprador->setComplemento($usuario->getComplemento());
        $enderecoComprador->setBairro($usuario->getBairro());
        $enderecoComprador->setCep($usuario->getCep());
        $enderecoComprador->setEstado($usuario->getEstado());
        $enderecoComprador->setCidade($usuario->getCidade());

        $dadosComprador->setEnderecoComprador($enderecoComprador);

        $dadosPagamentoBoletoDto = new DadosPagamentoDto();
        $dadosPagamentoBoletoDto->setDadosComprador($dadosComprador);
        $dadosPagamentoBoletoDto->setUrlRetorno($this->getParameter('PAGSEGURO_URL_RETORNO'));
        $dadosPagamentoBoletoDto->setMetodoPagamento(MetodoPagamentoEnum::BOLETO);
        $dadosPagamentoBoletoDto->setDadosComprador($dadosComprador);
        $dadosPagamentoBoletoDto->addItem($itemDto);
        $dadosPagamentoBoletoDto->getValorTotal();

        $pagSeguroBoletoForm= $this->createForm(PagSeguroBoletoType::class, $dadosPagamentoBoletoDto);
        $pagSeguroBoletoForm->handleRequest($request);

        if ($pagSeguroBoletoForm->isSubmitted() && $pagSeguroBoletoForm->isValid()) {
            /**
             * @var DadosPagamentoDto $data
             */
            $data = $pagSeguroBoletoForm->getData();

            try {
                $response = $pagSeguroService->processPayment($data);
                $status = StatusPagamentoEnum::getStatus($response->getStatus());
                $code = $response->getCode();

                $usuarioEvento = new UsuarioEvento();
                $usuarioEvento->setEvento($evento);
                $usuarioEvento->setDataPagamento(new \DateTime());
                $usuarioEvento->setStatusPagamento($status);
                $usuarioEvento->setCodePagamento($code);
                $usuarioEvento->setObjetoPagamento(serialize($response));

                $usuario->addUsuarioEvento($usuarioEvento);
                $this->getDoctrine()->getManager()->persist($usuarioEvento);
                $this->getDoctrine()->getManager()->flush();

                $this->enviarEmail($mailer, $evento);
            } catch (Throwable $e) {
                dump($e);exit;
            }


            return $this->redirectToRoute('checkout_resultado', [
                'id' => $usuarioEvento->getId()
            ]);
        }

        $dadosPagamentoCartaoCreditoDto = new DadosPagamentoDto();
        $dadosPagamentoCartaoCreditoDto->setMetodoPagamento(MetodoPagamentoEnum::CARTAO_CREDITO);
        $dadosPagamentoCartaoCreditoDto->setUrlRetorno($this->getParameter('PAGSEGURO_URL_RETORNO'));
        $dadosPagamentoCartaoCreditoDto->setDadosComprador($dadosComprador);
        $dadosPagamentoCartaoCreditoDto->addItem($itemDto);
        $dadosPagamentoCartaoCreditoDto->getValorTotal();

        $pagSeguroCartaoCreditoForm= $this->createForm(PagSeguroCartaoCreditoType::class, $dadosPagamentoCartaoCreditoDto);
        $pagSeguroCartaoCreditoForm->handleRequest($request);

        if ($pagSeguroCartaoCreditoForm->isSubmitted() && $pagSeguroCartaoCreditoForm->isValid()) {
            /**
             * @var DadosPagamentoDto $data
             */
            $data = $pagSeguroCartaoCreditoForm->getData();

            $response = $pagSeguroService->processPayment($data);
            $status = StatusPagamentoEnum::getStatus($response->getStatus());
            $code = $response->getCode();

            $usuarioEvento = new UsuarioEvento();
            $usuarioEvento->setEvento($evento);
            $usuarioEvento->setDataPagamento(new \DateTime());
            $usuarioEvento->setStatusPagamento($status);
            $usuarioEvento->setCodePagamento($code);
            $usuarioEvento->setObjetoPagamento(serialize($response));

            $usuario->addUsuarioEvento($usuarioEvento);
            $this->getDoctrine()->getManager()->persist($usuarioEvento);
            $this->getDoctrine()->getManager()->flush();

            $this->enviarEmail($mailer, $evento);

            return $this->redirectToRoute('checkout_resultado', [
                'id' => $usuarioEvento->getId()
            ]);
        }

        return $this->render('checkout/index.html.twig', [
            'evento' => $evento,
            'pagSeguroBoletoForm' => $pagSeguroBoletoForm->createView(),
            'pagSeguroCartaoCreditoForm' => $pagSeguroCartaoCreditoForm->createView(),
            'metodoPagamentoBoleto' => MetodoPagamentoEnum::BOLETO,
            'metodoPagamentoCartaoCredito' => MetodoPagamentoEnum::CARTAO_CREDITO
        ]);
    }

    /**
     * @Route("/checkout/resultado/{id}", name="checkout_resultado", methods={"GET"})
     *
     * @param $dados
     * @return Response
     */
    public function resultado(UsuarioEvento $usuarioEvento)
    {
        $objetoPagamento = unserialize($usuarioEvento->getObjetoPagamento());

        return $this->render('checkout/resultado.html.twig', [
            'evento' => $usuarioEvento->getEvento(),
            'objetoPagamento' => $objetoPagamento
        ]);
    }

    /**
     * @Route("/checkout/gerar/sessao", name="checkout_gerar_sessao", methods={"POST"})
     *
     * @param PagSeguroService $pagSeguroService
     * @return JsonResponse
     */
    public function generateSession(PagSeguroService $pagSeguroService)
    {
        try {
            $response = $pagSeguroService->generateSession();

            return new JsonResponse([
                'token' => $response->getResult()
            ]);
        } catch (Throwable $exception) {
            return new JsonResponse([
                'message' => 'Ocorreu um erro na geração da sessão do pagseguro'
            ], 400);
        }

    }

    /**
     * @Route("/checkout/notification/retorno", name="checkout_notification", methods={"POST", "GET"})
     *
     * @param UsuarioEventoRepository $usuarioEventoRepository
     * @param PagSeguroService $seguroService
     * @return JsonResponse
     */
    public function notification(UsuarioEventoRepository $usuarioEventoRepository, PagSeguroService $seguroService)
    {
        try {
            $response = $seguroService->check();

            $usuarioEvento = $usuarioEventoRepository->findOneBy([
                'codePagamento' => $response->getCode()
            ]);

            $usuarioEvento->setStatusPagamento($response->getStatus());
            $this->getDoctrine()->getManager()->flush();

            return new JsonResponse(['status' => '200']);
        } catch (Throwable $exception) {
            return new JsonResponse(['status' => '500']);
        }
    }

    private function enviarEmail($mailer, $evento)
    {
        $message = (new \Swift_Message('Expedição 4x4 Aventura'))
            ->setFrom('contato@4x4aventura.com.br')
            ->setTo($this->getUser()->getEmail())
            ->setBody(
                $this->renderView(
                    'emails/registration.html.twig',
                    ['evento' => $evento]
                ),
                'text/html'
            )
        ;

        $mailer->send($message);
    }
}
