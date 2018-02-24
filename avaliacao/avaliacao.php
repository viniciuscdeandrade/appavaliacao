<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of avaliacao
 *
 * @author hackathon
 */
class avaliacao {
    
    private $id_avaliacao;
    private $id_avaliador;
    private $id_avaliado;
    private $asas;
    private $fala;
    private $garra;
    private $inquietacao;
    private $performance;
    private $protagonista;
    private $relacao;
    private $feedback;
    private $data_registro;
    
    function __construct($id_avaliacao, $id_avaliador, $id_avaliado, $asas, $fala, $garra, $inquietacao, $performance, $protagonista, $relacao, $feedback, $data_registro) {
        $this->id_avaliacao = $id_avaliacao;
        $this->id_avaliador = $id_avaliador;
        $this->id_avaliado = $id_avaliado;
        $this->asas = $asas;
        $this->fala = $fala;
        $this->garra = $garra;
        $this->inquietacao = $inquietacao;
        $this->performance = $performance;
        $this->protagonista = $protagonista;
        $this->relacao = $relacao;
        $this->feedback = $feedback;
        $this->data_registro = $data_registro;
    }

    
    function getId_avaliacao() {
        return $this->id_avaliacao;
    }

    function getId_avaliador() {
        return $this->id_avaliador;
    }

    function getId_avaliado() {
        return $this->id_avaliado;
    }

    function getAsas() {
        return $this->asas;
    }

    function getFala() {
        return $this->fala;
    }

    function getGarra() {
        return $this->garra;
    }

    function getInquietacao() {
        return $this->inquietacao;
    }

    function getPerformance() {
        return $this->performance;
    }

    function getProtagonista() {
        return $this->protagonista;
    }

    function getRelacao() {
        return $this->relacao;
    }

    function getFeedback() {
        return $this->feedback;
    }

    function getData_registro() {
        return $this->data_registro;
    }

    function setId_avaliacao($id_avaliacao) {
        $this->id_avaliacao = $id_avaliacao;
    }

    function setId_avaliador($id_avaliador) {
        $this->id_avaliador = $id_avaliador;
    }

    function setId_avaliado($id_avaliado) {
        $this->id_avaliado = $id_avaliado;
    }

    function setAsas($asas) {
        $this->asas = $asas;
    }

    function setFala($fala) {
        $this->fala = $fala;
    }

    function setGarra($garra) {
        $this->garra = $garra;
    }

    function setInquietacao($inquietacao) {
        $this->inquietacao = $inquietacao;
    }

    function setPerformance($performance) {
        $this->performance = $performance;
    }

    function setProtagonista($protagonista) {
        $this->protagonista = $protagonista;
    }

    function setRelacao($relacao) {
        $this->relacao = $relacao;
    }

    function setFeedback($feedback) {
        $this->feedback = $feedback;
    }

    function setData_registro($data_registro) {
        $this->data_registro = $data_registro;
    }


}
