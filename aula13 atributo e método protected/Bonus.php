<?php

/**
 * Description of Bonus
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class Bonus extends FuncionarioProtected{
    //put your code here
    public function verSalario()
    {
        parent::bonus(2500);
        return parent::verSalario();
    }
}