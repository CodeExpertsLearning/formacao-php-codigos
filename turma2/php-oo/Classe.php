<?php

class ClasseObjetos
{

    var $Classe;

    var $Funcao;

    function getclass($Classe, $Funcao){

        echo "<p> A classe {$Classe} serve para{$Funcao}";
    }

    function verclass(){

        echo "<pre>";
        print_r($this);
        echo "</pre>";

    }
}

$test = new ClasseObjetos();
$test->Classe = 'de introdução';
$test->Funcao = 'mostrar uma classe';
$test->getclass();
