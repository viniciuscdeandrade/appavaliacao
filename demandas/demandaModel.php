<?php


include '../core/connect.php';
include 'demanda.php';
class demandaModel {
    //put your code here
    private $conexao;
    
    function __construct() {
        $this->conexao = mysqli_connect('localhost', 'feedback', '123456', 'feedback'); 
    }
    
    public function listarTodos(){
        $result = $this->conexao->query("select id_demanda,descricao_demanda from demandas");
        $demandas = array();
        while ($row = $result->fetch_assoc()) {
            $d  = new demanda($row['id_demanda'],$row['descricao_demanda']);              
            $d->setPessoas_demanda($this->listarPessoasDemanda($d->getId()));
            $d->setAvaliado($this->DemandaFoiAvaliada($d->getId()));
            $demandas[] = $d->toJson();            
        }
        return json_encode($demandas);
    }
    
    private function listarPessoasDemanda($id_demanda){
        $result = $this->conexao->query("select distinct id_pessoa from demandas_pessoas "
                . "join pessoas using(id_pessoa) where id_demanda = {$id_demanda}");
        return json_encode(mysqli_fetch_all($result,MYSQLI_ASSOC));
        
    }
    
    private function DemandaFoiAvaliada($id_demanda){
        $result = $this->conexao->query("select id_avaliacao from demandas_avaliacoes where id_demanda = {$id_demanda}");
//        return mysqli_num_rows($result) >0 ? true: false;
        return json_encode(mysqli_fetch_all($result,MYSQLI_ASSOC));
    }
    
    public function listarPorId($id_demanda){
        $result = $this->conexao->query("select id_demanda,descricao_demanda from demandas where id_demanda = {$id_demanda}");
        $demandas = array();
        while ($row = $result->fetch_assoc()) {
            $d  = new demanda($row['id_demanda'],$row['descricao_demanda']);              
            $d->setPessoas_demanda($this->listarPessoasDemanda($d->getId()));
            $d->setAvaliado($this->DemandaFoiAvaliada($d->getId()));
            $demandas[] = $d->toJson();            
        }
//        return json_encode(mysqli_fetch_all($result,MYSQLI_ASSOC));
        return json_encode($demandas);
    }
}
?>