<?php

require_once "professor.php";
require_once "disciplina.php";

//Associação simples
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