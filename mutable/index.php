<?php

class Jedi {

    public $name;
    public $className;

    function getClass()
    {
        return $this->className;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setClassName($className) {
        $this->className = $className;
    }
}

class Training {
    function make($jedi) {
        /*$jedi->fight()*/
        return $jedi;
    }
}

$jedi = new Jedi;
$jedi->setName('Obi-Wan');
$jedi->setClassName('Guardião');

$training = new Training();
$jedi = $training->make($jedi); //jedi.getClass() retorna Consular? Sentinela? Depende!


echo ("jedi.getClass(): " . $jedi->getClass());


/**
 * Mutável, pois se não pudermos ver o código $jedi->fight(), não sabemos se a classe do jedi sofrerá alterações ou não!
 *
*/
