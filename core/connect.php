<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of connect
 *
 * @author hackathon
 */
class connect {
    //put your code here
   private $conexao; 
    
  function __construct() {
      $this->conexao = mysqli_connect('localhost', 'feedback', '123456', 'feedback'); 
//      var_dump($this->conexao->query("select * from demandas"));
      
  }
  
  function close($conexao){
      mysqli_close($conexao);
  }
}
