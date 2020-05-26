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
    
    abstract function calcularJuros();
        
            function verValor() {
        return"Valor do Cheque {$this->Tipo}: {$this->real($this->Valor)}<hr>";
    }
    
    final function real($Valor) {
        return number_format($Valor, '2',',','.');
    }
}
