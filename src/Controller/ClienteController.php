<?php

namespace App\Controller;

use App\Entity\Cliente;
use App\Entity\DadosVeiculo;
use App\Form\ClienteType;
use App\Form\DadosMedicosType;
use App\Form\DadosVeiculoType;
use App\Repository\ClienteRepository;
use App\Security\ClienteLoginFormAuthenticator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

/**
 * @Route("/cliente")
 */
class ClienteController extends AbstractController
{

    /**
     * @Route("/", name="cliente_index", methods={"GET"})
     */
    public function index(ClienteRepository $clienteRepository): Response
    {
        return $this->render('cliente/index.html.twig', [
            'clientes' => $clienteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="cliente_new", methods={"GET","POST"})
     */
    public function new(Request $request, ClienteLoginFormAuthenticator $authenticator, GuardAuthenticatorHandler $guardHandler, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $cliente = new Cliente();
        $form = $this->createForm(ClienteType::class, $cliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $passwordEncoder->encodePassword($cliente, $cliente->getPassword());
            $cliente->setPassword($password);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cliente);
            $entityManager->flush();

            return $guardHandler->authenticateUserAndHandleSuccess(
                $cliente,
                $request,
                $authenticator,
                'main'
            );
        }

        return $this->render('cliente/new.html.twig', [
            'cliente' => $cliente,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="cliente_show", methods={"GET"})
     */
    public function show(Cliente $cliente): Response
    {
        return $this->render('cliente/show.html.twig', [
            'cliente' => $cliente,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="cliente_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Cliente $cliente): Response
    {
        $form = $this->createForm(ClienteType::class, $cliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $route = $request->getSession()->get('_security.main.target_path')
                ?? $this->generateUrl('cliente_edit_dados_medico', ['id' => $cliente->getId()]);
            return $this->redirect($route);
        }

        return $this->render('cliente/edit.html.twig', [
            'cliente' => $cliente,
            'form' => $form->createView(),
            'titulo' => 'Dados'
        ]);
    }

    /**
     * @Route("/{id}/edit/dados-medico", name="cliente_edit_dados_medico", methods={"GET","POST"})
     */
    public function editDadosMedico(Request $request, Cliente $cliente): Response
    {
        $form = $this->createForm(DadosMedicosType::class, $cliente->getDadosMedicos());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cliente->setDadosMedicos($form->getData());
            $this->getDoctrine()->getManager()->flush();

            $route = $request->getSession()->get('_security.main.target_path')
                ?? $this->generateUrl('cliente_edit_dados_veiculo', ['id' => $cliente->getId()]);
            return $this->redirect($route);
        }

        return $this->render('cliente/edit.html.twig', [
            'cliente' => $cliente,
            'form' => $form->createView(),
            'titulo' => 'Dados médico'
        ]);
    }

    /**
     * @Route("/{id}/edit/dados-veiculo", name="cliente_edit_dados_veiculo", methods={"GET","POST"})
     */
    public function editDadosVeiculo(Request $request, Cliente $cliente): Response
    {
        $form = $this->createForm(DadosVeiculoType::class, $cliente->getDadosVeiculo());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cliente->setDadosVeiculo($form->getData());
            $this->getDoctrine()->getManager()->flush();

            $route = $request->getSession()->get('_security.main.target_path')
                ?? $this->generateUrl('site');
            return $this->redirect($route);
        }

        return $this->render('cliente/edit.html.twig', [
            'cliente' => $cliente,
            'form' => $form->createView(),
            'titulo' => 'Dados do veículo'
        ]);
    }
}
