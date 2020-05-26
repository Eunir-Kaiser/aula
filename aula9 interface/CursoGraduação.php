<?php

/**
 * Description of CursoGraduação
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class CursoGraduação implements ICcurso {

    public $NomeDisciplina;
    public $NomeProfessor;

    public function disciplina($NomeDisciplina) {
        $this->NomeDisciplina = $NomeDisciplina;
        return "Disciplina: {$this->NomeDisciplina}<br>";
    }

    public function professor($NomeProfessor) {
        $this->NomeProfessor = $NomeProfessor;
        return "Nome do professor: {$this->NomeProfessor}";
    }

}
