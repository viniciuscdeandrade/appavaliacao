<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pessoaModel
 *
 * @author hackathon
 */
include '../core/connect.php';
include 'pessoa.php';
class pessoaModel {
    //put your code here
    private $conexao;
    
    function __construct() {
 
        $this->conexao = mysqli_connect('localhost', 'feedback', '123456', 'feedback'); 
    }
    
    public function getAvaliador($hash){
        $result = $this->conexao->query("select id_pessoa,nome_pessoa,hash from pessoas where hash = '{$hash}'");
      
        return mysqli_num_rows($result) >0 ? true: false;
        
    }
}
