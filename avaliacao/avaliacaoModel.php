<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of avaliacaoModel
 *
 * @author hackathon
 */
include '../core/connect.php';
class avaliacaoModel {
    
    private $conexao;
    
    function __construct() {
        $this->conexao = mysqli_connect('localhost', 'feedback', '123456', 'feedback'); 
    }
    
     public function inserirAvaliacao($hash,$id_avaliado,$asas,$fala,$garra,$inquietacao,$performance,$protagonista,
     $relacao,$feedback,$data_registro){
     
         mysqli_execute("insert into avaliacoes values("
                 . "(select id_pessoa from pessoas where hash = '{$hash}'),"
                 . "{$id_avaliado},"
                 . "{$assas},"    
                 . "{$fala},"
                 . "{$garra},"
                 . "{$inquietacao},"
                 . "{$performance},"
                 . "{$protagonista},"
                 . "null,"
                 . "current_timestamp())");
         
     }
}
