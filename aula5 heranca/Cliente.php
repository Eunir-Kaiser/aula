<?php

/**
 * Description of Cliente
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class Cliente {
    public $Endereco;
    public  $Bairo;
    
    function setEndereco($Endereco) {
        $this->Endereco = $Endereco;
    }

    function setBairo($Bairo) {
        $this->Bairo = $Bairo;
    }
    
    function verEndereco(){
        return "<p>Endereço: {$this->Endereco}<br> Bairro: {$this->Bairo}<hr></p>";
    }


}
