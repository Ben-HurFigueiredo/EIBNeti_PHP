<?php 

    #inclui as classes


include_once("Aluno.class.php");
include_once("Curso.class.php");



#instanciar cursos


$c1 = new Curso();
$c2 = new Curso();
$c3 = new Curso();
$c4 = new Curso();

$c1->setCurso("JEE","Java Enterprise Edition",80,1500);
$c2->setCurso("SQL","Structure Query Language",60,1100);
$c3->setCurso("JSE","Java Standard Edition",70,1300);
$c4->setCurso("JME","Java Micro Edition",60,1200);




#instancia alunos

$a1 = new Aluno;
$a2 = new Aluno;

#Atribui valores


$a1->setAluno("M-001","Carla Soares",18);
$a2->setAluno("M-002","Paulo Mendes",21);



#agregando cursos


$a1->adicionaCurso($c1);
$a1->adicionaCurso($c3);
$a2->adicionaCurso($c2);
$a2->adicionaCurso($c4);



echo "Cursos do Aluno(a) {$a1->Nome} <hr>";
echo $a1->exibeCursos();
echo $a1->calculaTotal();
echo "<br><br>";
echo "Cursos do Aluno(a) {$a2->Nome} <hr>";
echo $a2->exibeCursos();
echo $a2->calculaTotal();

