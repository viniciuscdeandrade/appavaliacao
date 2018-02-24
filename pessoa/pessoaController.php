<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of avaliadorController
 *
 * @author hackathon
 */

include 'pessoaModel.php';
class pessoaController {
    private $model;
    
    public function __construct() {
        $this->model = new pessoaModel();
        
    }
    
//    public function listarTodos(){
////         return $this->model->listarTodos();        
//    }
//    
    public function getAvaliador($hash){
        return $this->model->getAvaliador($hash);        
    }
}
