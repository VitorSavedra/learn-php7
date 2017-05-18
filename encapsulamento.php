<?php

    //Encapsulamento. 
    class Pessoa {
        public $nome = "Vitor Savedra"; // Visível por todos. 
        protected $idade = "22"; // Vísivel pela classe e por classe extendida. 
        private $senha = "123456"; // Visível apenas pela classe. 

        public function verDados() {
            echo $this->nome . "<br>";
            echo $this->idade . "<br>";
            echo $this->senha . "<br>";
        }
    }

    /* $objeto = new Pessoa();
    echo $objeto->nome . "<br><br>";
    $objeto->verDados(); */

    class Programador extends Pessoa {
        public function verDados() {
            echo get_class($this) . "<br>"; // Identifica a classe. 
            echo $this->nome . "<br>";
            echo $this->idade . "<br>";
            echo $this->senha . "<br>";
        }
    }

    $objeto = new Programador();
    $objeto->verDados();