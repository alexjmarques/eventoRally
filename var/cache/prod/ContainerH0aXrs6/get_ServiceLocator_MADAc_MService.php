<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.mADAc.M' shared service.

return $this->privates['.service_locator.mADAc.M'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'eventoRepository' => ['privates', 'App\\Repository\\EventoRepository', 'getEventoRepositoryService.php', true],
]);