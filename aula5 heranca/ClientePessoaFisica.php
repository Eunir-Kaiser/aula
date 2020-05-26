<?php

/**
 * Description of ClientePessoaFisica
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class ClientePessoaFisica extends Cliente {
    public $CPF;
    public $Nome;
    
    function setCPF($CPF) {
        $this->CPF = $CPF;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

     function verEndereco(){
        return "<p>Endereço: {$this->Endereco}<br> Bairro: {$this->Bairo}Nome: {$this->Nome}<br>CPF: {$this->CPF}<hr></p>";
    }

}
