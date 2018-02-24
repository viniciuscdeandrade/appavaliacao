<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of avaliacaoController
 *
 * @author hackathon
 */
include 'avaliacaoModel.php';
class avaliacaoController {
    private $model;
    
    public function __construct() {
        $this->model = new avaliacaoModel();
        
    }
    
    public function inserirAvaliacao($hash,$id_avaliado,$asas,$fala,$garra,$inquietacao,$performance,$protagonista,
     $relacao,$feedback,$data_registro){
         return $this->model->inserirAvaliacao();        
    }
}
