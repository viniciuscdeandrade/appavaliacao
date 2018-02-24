<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of demandaController
 *
 * @author hackathon
 */
include 'demandaModel.php';
class demandaController {
    
    private $model;
    
    public function __construct() {
        $this->model = new demandaModel();
        
    }
    
    public function listarTodos(){
         return $this->model->listarTodos();        
    }
    
    public function listarPorId($id_demanda){
        return $this->model->listarPorId($id_demanda);        
    }
 }
