<?php

/**
 * Description of Usuario
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class Usuario {
    public $Nome;
    public $Email;
    public $Prova;
    public $Trabalho;
            
    function setUsuario($Nome, $Email){
        $this->Nome = $Nome;
        $this->Email = $Email;
        
    }
    function getUsuario(){
        return "Nome: {$this->Nome} <br> Email: {$this->Email}<br>";
        
    }
    function setNota($Prova, $Trabalho){
        $this->Prova = $Prova;
        $this->Trabalho = $Trabalho;
    }
    function getNota(){
        return "Nota:" . ($this->Prova + $this->Trabalho);
    }
}
