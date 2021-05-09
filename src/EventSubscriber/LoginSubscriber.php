<?php

namespace App\EventSubscriber;

use App\Entity\Cliente;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;

class LoginSubscriber implements EventSubscriberInterface
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
        $routeName = $event->getRequest()->get('_route');

        $usuario = $this->security->getUser();

        if ($usuario && in_array($routeName, ['cliente_new', 'cliente_login'])) {
            $event->setResponse(new RedirectResponse($this->urlGenerator->generate('site')));
            return;
        }

        if ($usuario && $routeName === 'admin_login') {
            $event->setResponse(new RedirectResponse($this->urlGenerator->generate('evento_index')));
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
