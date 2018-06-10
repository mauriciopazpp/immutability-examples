<?php
class Jedi {

    public $name;
    const CLASSNAME = 'Sentinela';

    function getClass()
    {
        return Jedi::CLASSNAME;
    }

    function setName($name) {
        $this->name = $name;
    }

    // function setClassName($className) {
    //     $this->className = $className;
    // }
}

class Training {
    function make($jedi) {
        /*$jedi->fight()*/
        return $jedi;
    }

    function fight()
}

$jedi = new Jedi;
$jedi->setName('Obi-Wan');
//$jedi->setClassName('Guardião'); //É uma constante pequeno padawan...

$training = new Training();
$jedi = $training->make($jedi);


echo ("O método jedi.getClass() retorna:" . $jedi->getClass());

/**
 * Immutável, pois mesmo nao sabendo o que o código $jedi->fight() faz, sabemos que a classe não irá ser alterada, pois é uma constante!
*/
