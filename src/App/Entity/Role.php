<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="Role")
 * @ORM\Entity
 */
class Role {

    /**
     * @var integer
     *
     * @ORM\Column(name="idRole", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrole;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="ativo", type="string", length=1, nullable=true)
     */
    private $ativo = '1';

    function getIdrole() {
        return $this->idrole;
    }

    function getNome() {
        return $this->nome;
    }

    function getAtivo() {
        return $this->ativo;
    }

    function setIdrole($idrole) {
        $this->idrole = $idrole;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

}
