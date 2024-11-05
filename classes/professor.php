<?php

class Professor
{
    protected $nome;

    protected $lista_de_disciplinas_do_professor = [];
    protected $numero_de_displinas;

    function __construct($nome)
    {
        $this->setNome($nome);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNumeroDeDisciplinas() 
    {
        return $this->numero_de_displinas;
    }

    public function setNumeroDeDisciplinas()
    {
        $this->numero_de_displinas = count($this->lista_de_disciplinas_do_professor);
    }

    public function setListaDeDisciplinasDoProfessor($disciplina)
    {
        $this->lista_de_disciplinas_do_professor[] = $disciplina;         
    }
}