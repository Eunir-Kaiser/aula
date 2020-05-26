<?php

/**
 * Description of cheque
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
abstract class cheque {

    public $Valor;
    public $Tipo;

    function __construct($Valor, $Tipo) {
       $this->Valor = $Valor ;
       $this->Tipo = $Tipo;
    }
    
    function verValor() {
        return"Valor do Cheque {$this->Tipo}: {$this->real($this->Valor)}<hr>";
    }
    
    function real($Valor) {
        return number_format($Valor, '2',',','.');
    }
}
