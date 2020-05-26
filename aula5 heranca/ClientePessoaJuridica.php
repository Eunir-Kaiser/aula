<?php

/**
 * Description of ClientePessoaJuridica
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class ClientePessoaJuridica extends Cliente{
    public $CNPJ;
    public $NomeFantasia;
    
    function setCNPJ($CNPJ) {
        $this->CNPJ = $CNPJ;
    }

    function setNomeFantasia($NomeFantasia) {
        $this->NomeFantasia = $NomeFantasia;
    }

    function verEndereco(){
        return "<p>Endereço: {$this->Endereco}<br> Bairro: {$this->Bairo}Nome Fantasia: {$this->NomeFantasia}<br>CNPJ: {$this->CNPJ}<hr></p>";
    }

}
