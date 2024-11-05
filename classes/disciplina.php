<?php

class Disciplina
{
    protected $nome_da_disciplina;
    protected $lista_de_professores = [];

    public function getNomeDaDisciplina()
    {
        return $this->nome_da_disciplina;
    }

    public function setNomeDaDisciplina($nome)
    {
        $this->nome_da_disciplina = $nome;
    }

    public function getListaDeProfessores()
    {
        return $this->lista_de_professores;
    }

    public function adicionarProfessor($professor)
    {
        if (in_array( $professor, $this->lista_de_professores)):

            return;

        endif;

        $this->lista_de_professores[] = $professor;
        $professor->setListaDeDisciplinasDoProfessor($this->nome_da_disciplina);
        $professor->setNumeroDeDisciplinas();
    }
}