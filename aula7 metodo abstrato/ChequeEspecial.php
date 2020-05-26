<?php

/**
 * Description of ChequeEspecial
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class ChequeEspecial extends cheque {

    function calcularJuros() {
        $this->Valor = $this->Valor * 1.10;
        $this->Valor = parent::real($this->Valor);
        return "Valor do cheque {$this->Tipo}: R$ {$this->Valor}<hr>";
    }

}
