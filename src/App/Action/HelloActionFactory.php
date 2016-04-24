<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Action;

use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use Doctrine\ORM\EntityManager;
class HelloActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new HelloAction(
            $container->get(EntityManager::class),
            $container->get(TemplateRendererInterface::class)
        );
    }
}