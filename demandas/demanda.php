<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of demanda
 *
 * @author hackathon
 */
class demanda {
    private $id;
    private $descricao;
    private $pessoas_demanda;
    private $avaliado;
    function __construct($id, $descricao, $pessoas_demanda, $avaliado) {
        $this->id = $id;
        $this->descricao = $descricao;
    }

    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getPessoas_demanda() {
        return $this->pessoas_demanda;
    }

    function getAvaliado() {
        return $this->avaliado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setPessoas_demanda($pessoas_demanda) {
        $this->pessoas_demanda = $pessoas_demanda;
    }

    function setAvaliado($avaliado) {
        $this->avaliado = $avaliado;
    }

    function toJson(){
        return array(
            "id_demanda" => $this->getId(),
            'descricao_demanda' => $this->getDescricao(),
            'pessoas' => $this->getPessoas_demanda(),
            'avaliacoes' => $this->getAvaliado()
        );
    }

}
