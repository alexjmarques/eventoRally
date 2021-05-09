<?php

namespace App\EventSubscriber;

use App\Entity\Admin;
use App\Entity\Cliente;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;

class CadastroSubscriber implements EventSubscriberInterface
{
    private $urlGenerator;

    private $security;

    public function __construct(UrlGeneratorInterface $urlGenerator, Security $security)
    {
        $this->security = $security;
        $this->urlGenerator = $urlGenerator;
    }
    public function onKernelRequest(GetResponseEvent $event)
    {
        $usuario = $this->security->getUser();

        if ($usuario instanceof Admin) {
            return;
        }

        $routeName = $event->getRequest()->get('_route');

        if ($routeName === 'cliente_edit_dados_veiculo' || $routeName === 'cliente_edit_dados_medico') {
            return;
        }

        if ($usuario && !$usuario->getDadosMedicos()) {
            $url = $this->urlGenerator->generate('cliente_edit_dados_medico', ['id' => $usuario->getId()]);
            $event->setResponse(new RedirectResponse($url));
            return;
        }

        if ($usuario && !$usuario->getDadosVeiculo()) {
            $url = $this->urlGenerator->generate('cliente_edit_dados_veiculo', ['id' => $usuario->getId()]);
            $event->setResponse(new RedirectResponse($url));
            return;
        }
    }

    public static function getSubscribedEvents()
    {
        return [
           'kernel.request' => 'onKernelRequest',
        ];
    }
}
