<?php

/**
 * Description of CursoPosGraduacao
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class CursoPosGraduacao implements ICcurso {

    //put your code here
    public $NomeDisciplina;
    public $NomeProfssor;

    public function disciplina($NomeDisciplina) {
        $this->NomeDisciplina = $NomeDisciplina;
        return "Disciplina: {$this->NomeDisciplina}<br>";
    }

    public function professor($NomeProfessor) {
        $this->NomeProfessor = $NomeProfessor;
        return "Nome do professor: {$this->NomeProfessor}";
    }

}
