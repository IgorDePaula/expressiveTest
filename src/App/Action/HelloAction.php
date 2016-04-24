<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template\TemplateRendererInterface;
use Doctrine\ORM\EntityManager;

class HelloAction {

    private $renderer;
    private $em;

    public function __construct(EntityManager $em, TemplateRendererInterface $renderer) {
        $this->em = $em;
        $this->renderer = $renderer;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next) {
        $query = $request->getAttribute('target');
        $target = isset($query) ? $query : 'World';
        $roleRepository = $this->em->getRepository('App\Entity\Role');
        $role = $roleRepository->findAll();

        return new HtmlResponse(
                $this->renderer->render('app::hello-world', ['target' => $target,'role'=>$role])
        );
    }

}
