<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pessoa
 *
 * @author hackathon
 */
class pessoa {
    //put your code here
    private $id_pessoa;
    private $nome_pessoa;
    private $hash;
    
    function __construct($id_pessoa, $nome_pessoa, $hash) {
        $this->id_pessoa = $id_pessoa;
        $this->nome_pessoa = $nome_pessoa;
        $this->hash = $hash;
    }

    
    function getId_pessoa() {
        return $this->id_pessoa;
    }

    function getNome_pessoa() {
        return $this->nome_pessoa;
    }

    function getHash() {
        return $this->hash;
    }

    function setId_pessoa($id_pessoa) {
        $this->id_pessoa = $id_pessoa;
    }

    function setNome_pessoa($nome_pessoa) {
        $this->nome_pessoa = $nome_pessoa;
    }

    function setHash($hash) {
        $this->hash = $hash;
    }
    function toJson(){
        return array(
            "id_pessoa" => $this->getId_pessoa(),
            'nome_pessoa' => $this->getNome_pessoa(),
            'hash' => $this->getHash()           
        );
    }

}
