<?php

//Associação simples

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

$jesus = new Professor("Jesus");
$salomao = new Professor("Salomão");
$david = new Professor("David");

$ingles = new Disciplina();
$electronica = new Disciplina();
$poo = new Disciplina();

$ingles->setNomeDaDisciplina("Ingles");  
$ingles->adicionarProfessor($jesus);
$ingles->adicionarProfessor($salomao);

$electronica->adicionarProfessor($david);
$electronica->adicionarProfessor($jesus);

echo "<pre>";
    print_r($ingles);
echo "</pre>";