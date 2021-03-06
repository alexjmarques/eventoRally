<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\AdminSecurityController::login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
    'App\\Controller\\CheckoutController::generateSession' => ['privates', '.service_locator.O_TlQTA', 'get_ServiceLocator_OTlQTAService.php', true],
    'App\\Controller\\CheckoutController::index' => ['privates', '.service_locator.HmaUIT1', 'get_ServiceLocator_HmaUIT1Service.php', true],
    'App\\Controller\\CheckoutController::notification' => ['privates', '.service_locator.owo64J_', 'get_ServiceLocator_Owo64JService.php', true],
    'App\\Controller\\CheckoutController::resultado' => ['privates', '.service_locator.JBB4Uey', 'get_ServiceLocator_JBB4UeyService.php', true],
    'App\\Controller\\ClienteController::edit' => ['privates', '.service_locator.gIC.p93', 'get_ServiceLocator_GIC_P93Service.php', true],
    'App\\Controller\\ClienteController::editDadosMedico' => ['privates', '.service_locator.gIC.p93', 'get_ServiceLocator_GIC_P93Service.php', true],
    'App\\Controller\\ClienteController::editDadosVeiculo' => ['privates', '.service_locator.gIC.p93', 'get_ServiceLocator_GIC_P93Service.php', true],
    'App\\Controller\\ClienteController::index' => ['privates', '.service_locator.Cfg9RmJ', 'get_ServiceLocator_Cfg9RmJService.php', true],
    'App\\Controller\\ClienteController::new' => ['privates', '.service_locator.0F5jKwI', 'get_ServiceLocator_0F5jKwIService.php', true],
    'App\\Controller\\ClienteController::show' => ['privates', '.service_locator.gIC.p93', 'get_ServiceLocator_GIC_P93Service.php', true],
    'App\\Controller\\ClienteSecurityController::login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
    'App\\Controller\\EventoController::delete' => ['privates', '.service_locator.D2ZDN6M', 'get_ServiceLocator_D2ZDN6MService.php', true],
    'App\\Controller\\EventoController::deleteImagem' => ['privates', '.service_locator.D2ZDN6M', 'get_ServiceLocator_D2ZDN6MService.php', true],
    'App\\Controller\\EventoController::edit' => ['privates', '.service_locator.D2ZDN6M', 'get_ServiceLocator_D2ZDN6MService.php', true],
    'App\\Controller\\EventoController::index' => ['privates', '.service_locator.mADAc.M', 'get_ServiceLocator_MADAc_MService.php', true],
    'App\\Controller\\EventoController::show' => ['privates', '.service_locator.D2ZDN6M', 'get_ServiceLocator_D2ZDN6MService.php', true],
    'App\\Controller\\SiteController::comprar' => ['privates', '.service_locator.Xbtqf3a', 'get_ServiceLocator_Xbtqf3aService.php', true],
    'App\\Controller\\SiteController::index' => ['privates', '.service_locator.mADAc.M', 'get_ServiceLocator_MADAc_MService.php', true],
    'App\\Controller\\SiteController::listagem' => ['privates', '.service_locator.D2ZDN6M', 'get_ServiceLocator_D2ZDN6MService.php', true],
    'App\\Controller\\SiteController::show' => ['privates', '.service_locator.D2ZDN6M', 'get_ServiceLocator_D2ZDN6MService.php', true],
    'App\\Controller\\SiteController::showpagamento' => ['privates', '.service_locator.D2ZDN6M', 'get_ServiceLocator_D2ZDN6MService.php', true],
    'App\\Controller\\SiteController::showresumo' => ['privates', '.service_locator.D2ZDN6M', 'get_ServiceLocator_D2ZDN6MService.php', true],
    'App\\Controller\\AdminSecurityController:login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
    'App\\Controller\\CheckoutController:generateSession' => ['privates', '.service_locator.O_TlQTA', 'get_ServiceLocator_OTlQTAService.php', true],
    'App\\Controller\\CheckoutController:index' => ['privates', '.service_locator.HmaUIT1', 'get_ServiceLocator_HmaUIT1Service.php', true],
    'App\\Controller\\CheckoutController:notification' => ['privates', '.service_locator.owo64J_', 'get_ServiceLocator_Owo64JService.php', true],
    'App\\Controller\\CheckoutController:resultado' => ['privates', '.service_locator.JBB4Uey', 'get_ServiceLocator_JBB4UeyService.php', true],
    'App\\Controller\\ClienteController:edit' => ['privates', '.service_locator.gIC.p93', 'get_ServiceLocator_GIC_P93Service.php', true],
    'App\\Controller\\ClienteController:editDadosMedico' => ['privates', '.service_locator.gIC.p93', 'get_ServiceLocator_GIC_P93Service.php', true],
    'App\\Controller\\ClienteController:editDadosVeiculo' => ['privates', '.service_locator.gIC.p93', 'get_ServiceLocator_GIC_P93Service.php', true],
    'App\\Controller\\ClienteController:index' => ['privates', '.service_locator.Cfg9RmJ', 'get_ServiceLocator_Cfg9RmJService.php', true],
    'App\\Controller\\ClienteController:new' => ['privates', '.service_locator.0F5jKwI', 'get_ServiceLocator_0F5jKwIService.php', true],
    'App\\Controller\\ClienteController:show' => ['privates', '.service_locator.gIC.p93', 'get_ServiceLocator_GIC_P93Service.php', true],
    'App\\Controller\\ClienteSecurityController:login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
    'App\\Controller\\EventoController:delete' => ['privates', '.service_locator.D2ZDN6M', 'get_ServiceLocator_D2ZDN6MService.php', true],
    'App\\Controller\\EventoController:deleteImagem' => ['privates', '.service_locator.D2ZDN6M', 'get_ServiceLocator_D2ZDN6MService.php', true],
    'App\\Controller\\EventoController:edit' => ['privates', '.service_locator.D2ZDN6M', 'get_ServiceLocator_D2ZDN6MService.php', true],
    'App\\Controller\\EventoController:index' => ['privates', '.service_locator.mADAc.M', 'get_ServiceLocator_MADAc_MService.php', true],
    'App\\Controller\\EventoController:show' => ['privates', '.service_locator.D2ZDN6M', 'get_ServiceLocator_D2ZDN6MService.php', true],
    'App\\Controller\\SiteController:comprar' => ['privates', '.service_locator.Xbtqf3a', 'get_ServiceLocator_Xbtqf3aService.php', true],
    'App\\Controller\\SiteController:index' => ['privates', '.service_locator.mADAc.M', 'get_ServiceLocator_MADAc_MService.php', true],
    'App\\Controller\\SiteController:listagem' => ['privates', '.service_locator.D2ZDN6M', 'get_ServiceLocator_D2ZDN6MService.php', true],
    'App\\Controller\\SiteController:show' => ['privates', '.service_locator.D2ZDN6M', 'get_ServiceLocator_D2ZDN6MService.php', true],
    'App\\Controller\\SiteController:showpagamento' => ['privates', '.service_locator.D2ZDN6M', 'get_ServiceLocator_D2ZDN6MService.php', true],
    'App\\Controller\\SiteController:showresumo' => ['privates', '.service_locator.D2ZDN6M', 'get_ServiceLocator_D2ZDN6MService.php', true],
])), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
