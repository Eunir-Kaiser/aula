<?php

/**
 * Description of ChequeComum
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class ChequeComum extends cheque {

    function calcularJuros() {
        $this->Valor = $this->Valor * 1.25;
        $this->Valor = parent::real($this->Valor);
        return "Valor do cheque {$this->Tipo}: R$ {$this->Valor}<hr>";
    }

}
