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
   die(json_encode(array("mensagem" => "Avaliador nao cadastrado no sistema"))); 
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
        
        break;
}
        

?>