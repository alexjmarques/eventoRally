<?php

namespace App\Controller;

use App\Entity\Cliente;
use App\Entity\Evento;
use App\Form\EventoType;
use App\Repository\EventoRepository;
use App\Entity\UsuarioEvento;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/", name="site", methods={"GET"})
     */
    public function index(EventoRepository $eventoRepository): Response
    {
        return $this->render('site/index.html.twig', [
            'eventos' => $eventoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/expedicao/{slug}", name="evento_listagem", methods={"GET"})
     */
    public function listagem(Evento $evento): Response
    {
        return $this->render('site/show.html.twig', [
            'evento' => $evento,
        ]);
    }

    /**
     * @Route("/comprar/{slug}", name="evento_show_site", methods={"GET"})
     */
    public function show(Evento $evento): Response
    {
        return $this->render('site/show.html.twig', [
            'evento' => $evento,
        ]);
    }

    /**
     * @Route("/comprar/{slug}/resumo", name="evento_showresumo_site", methods={"GET"})
     */
    public function showresumo(Evento $evento): Response
    {
        return $this->render('site/resumo.html.twig', [
            'evento' => $evento,
        ]);
    }

    /**
     * @Route("/comprar/{slug}/pagamento", name="evento_showpagamento_site", methods={"GET"})
     */
    public function showpagamento(Evento $evento): Response
    {
        return $this->render('site/pagamento.html.twig', [
            'evento' => $evento,
        ]);
    }

    /**
     * ToDo: Adicionado só para simular uma compra
     * @Route("/comprar/{evento}/{situacao}", name="comprar", defaults={"situacao"=0})
     */
    public function comprar(Evento $evento, int $situacao, \Swift_Mailer $mailer)
    {
        /** @var Cliente $cliente */
        $cliente = $this->getUser();
        $usuarioEvento = new UsuarioEvento();
        $usuarioEvento->setEvento($evento);
        if (!$situacao) {
            $usuarioEvento->setDataPagamento(new \DateTime());
        }
        $cliente->addUsuarioEvento($usuarioEvento);
        $this->getDoctrine()->getManager()->persist($usuarioEvento);
        $this->getDoctrine()->getManager()->flush();

        $this->enviarEmail($mailer, $evento);

        return $this->render('site/comprafinalizada.html.twig', ['evento' => $evento]);
    }

    // private function enviarEmail($mailer, $evento)
    // {
    //     $message = (new \Swift_Message('Expedição 4x4 Aventura'))
    //         ->setFrom('suporte@22vb.com.br')
    //         ->setTo($this->getUser()->getEmail())
    //         ->setBody(
    //             $this->renderView(
    //                 'emails/registration.html.twig',
    //                 ['evento' => $evento]
    //             ),
    //             'text/html'
    //         )
    //     ;

    //     $mailer->send($message);
    // }
}
