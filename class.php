<?php

    // Atributos e métodos. 
    class Pessoa {
        // Atributo. 
        public $nome = "Vitor";

        // Método. 
        public function falar() {
            return "O meu nomé é: " . $this->nome;
        }
    }

    $vitor = new Pessoa();
    $vitor->nome = "Vitor Savedra";
    echo $vitor->falar();

    class Carro {
        // Atributos.
        private $modelo;
        private $motor;
        private $ano;

        // Métodos. 
        public function getModelo() {
            return $this->modelo;
        }

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        public function getMotor():float {
            return $this->motor;
        }

        public function setMotor($motor) {
            $this->motor = $motor;
        }

        public function getAno():int {
            return $this->ano;
        }

        public function setAno($ano) {
            $this->ano = $ano;
        }

        public function exibir() {
            return array(
                'modelo'=>$this->getModelo(),
                'motor'=>$this->getMotor(),
                'ano'=>$this->getAno()
            );
        }

    }

    // Instâncias/Objetos. 
    echo "<br>";
    $gol = new Carro();
    $gol->setModelo("Gol GT");
    $gol->setMotor("1.6");
    $gol->setAno("2017");
    var_dump($gol->exibir());
    echo "<br><br>";