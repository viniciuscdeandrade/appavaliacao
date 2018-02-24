<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$metodo = $_GET['metodo'];

include './demandas/demandaController.php';
include './pessoa/pessoaController.php';

$hash = $_GET['hash_id_avaliador'];

$autenticador =  new pessoaController();

$avaliador = $autenticador->getAvaliador($hash);
if(!$avaliador){
   die(json_encode(array("erro" => "Avaliador nao cadastrado no sistema"))); 
};
switch ($metodo){
    case 'lista_demandas':
        $controller =  new demandaController();
        $id_demanda = isset($_GET['id_demanda']) ? $_GET['id_demanda']: false;
        if(!$id_demanda){
            $json = $controller->listarTodos();
        }else{
            $json = $controller->listarPorId($id_demanda);
        }
        echo $json;
        break;
    case 'insere_avaliacao':
        $id_pessoa = isset($_GET['id_pessoa']) ? $_GET['id_pessoa'] : null;         
        $id_demanda = isset($_GET['id_demanda']) ? $_GET['id_demanda'] : null;  
        $asas = isset($_GET['assas']) ?  $_GET['assas'] : null;
        $fala = isset( $_GET['fala'] ) ? $_GET['fala'] : null;
        $garra = isset( $_GET['garra']) ?  $_GET['garra'] : null;
        $inquietacao = isset( $_GET['inquietacao']) ? $_GET['inquietacao'] : null;
        $relacao = isset($_GET['relacao']) ? $_GET['relacao'] : null;
        $performance = isset($_GET['peformance']) ? $_GET['peformance'] : null;
        $protagonista = isset($_GET['protagonista']) ? $_GET['protagonista'] : null;
        
        break;
}
        

?>