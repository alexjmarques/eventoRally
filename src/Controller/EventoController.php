<?php

namespace App\Controller;

use App\Entity\Evento;
use App\Form\EventoType;
use App\Repository\EventoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Exception\FormException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

/**
 * @Route("/admin/expedicao")
 */
class EventoController extends AbstractController
{
    /**
     * @Route("/", name="evento_index", methods={"GET"})
     */
    public function index(EventoRepository $eventoRepository): Response
    {
        return $this->render('evento/index.html.twig', [
            'eventos' => $eventoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/novo", name="evento_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $evento = new Evento();
        $form = $this->createForm(EventoType::class, $evento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($evento);
            $entityManager->flush();


            /** @var UploadedFile $imagem */
            $imagem = $form['imagem']->getData();

            if (!$imagem) {
                throw new FormException('imagem', 'Campo obrigatório');
            }

            $nomeDaImagem = 'evento-' . uniqid() . '.' .$imagem->guessExtension();

            $this->getDoctrine()->getConnection()->beginTransaction();
            $evento->setImagem($nomeDaImagem);

            $imagem->move(
                $this->getParameter('evento_dir'),
                $nomeDaImagem
            );

            $this->getDoctrine()->getManager()->flush();

            $this->getDoctrine()->getConnection()->commit();

            return $this->redirectToRoute('evento_index');
        }

        return $this->render('evento/new.html.twig', [
            'evento' => $evento,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="evento_show", methods={"GET"})
     */
    public function show(Evento $evento): Response
    {
        return $this->render('evento/show.html.twig', [
            'evento' => $evento,
        ]);
    }

    /**
     * @Route("/{id}/editar", name="evento_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Evento $evento): Response
    {
        $form = $this->createForm(EventoType::class, $evento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imagem */
            $imagem = $form['imagem']->getData();

            $this->getDoctrine()->getConnection()->beginTransaction();

            if ($imagem) {
                $nomeDaImagem = 'evento-' . uniqid() . '.' .$imagem->guessExtension();

                $imagem->move(
                    $this->getParameter('evento_dir'),
                    $nomeDaImagem
                );

                (new Filesystem())->remove($this->getParameter('evento_dir') . '/' . $evento->getImagem());
                $evento->setImagem($nomeDaImagem);
            }

            $this->getDoctrine()->getManager()->flush();

            $this->getDoctrine()->getConnection()->commit();

            return $this->redirectToRoute('evento_index', [
                'id' => $evento->getId(),
            ]);
        }

        return $this->render('evento/edit.html.twig', [
            'evento' => $evento,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="evento_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Evento $evento): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evento->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($evento);
            $entityManager->flush();
        }
        return $this->redirectToRoute('evento_index');
    }


    /**
     * @Route("/deletar-imagem/{id}", name="evento_imagem_delete", methods={"DELETE"})
     */
    public function deleteImagem(Request $request, Evento $evento): Response
    {

        if ($this->isCsrfTokenValid('delete'. $imagem->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($imagem);
            $fs = (new Filesystem());
            $file = $this->getParameter('evento_dir') . '/' . $imagem->getCaminho();

            if ($fs->exists($file)) {
                $fs->remove($file);
                $entityManager->flush();
            }
        }

        return $this->redirectToRoute('evento_edit', [
            'id' => $imagem->getEvento()->getId()
        ]);
    }
}
