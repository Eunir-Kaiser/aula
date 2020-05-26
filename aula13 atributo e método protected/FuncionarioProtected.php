<?php

/**
 * Description of Funcionario
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class FuncionarioProtected {

    //put your code here
    public $Nome;
    private $Salario;
    protected $bonus;

    function setBonus($bonus) {
        $this->bonus = $bonus;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setSalario($Salario) {
        $this->Salario = $Salario;
    }

    public function verSalario() {
        $this->Salario = $this->validarSalario($this->Salario);
        return"O funcionário {$this->Nome} tem o salario de RS {$this->Salario} e um bonus de R$ {$this->Bonus} ";
    }

    private function validarSalario($Salario) {
        if (is_numeric($Salario) and ( $Salario > 0)):
            return $this->Salario = number_format($Salario, '2', ',', '.');
        else:
            die('Salário Inválido');
        endif;
    }
    
    protected function bonus($bonus){
        $this->Bonus = $bonus;
    }
    

}
