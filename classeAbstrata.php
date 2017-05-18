<?php

    // Classe abstrata. 
    interface Veiculo {
        public function acelerar($velocidade);
        public function frenar($freiar);
        public function trocarMarcha($marcha);
    }

    abstract class Automovel implements Veiculo {
        public function acelerar($velocidade) {
            echo "O veículo acelerou até: " . $velocidade . " Km/h.";
        }

        public function frenar($velocidade) {
            echo "O veículo frenou até: " . $velocidade . " Km/h.";
        }

        public function trocarMarcha($marcha) {
            echo "O veículo engatou a marcha: " . $marcha;
        }
    }

    class DelRey extends Automovel {
        public function empurrar(){

        }
    }

    $carro = new DelRey();
    $carro->acelerar(200);

    /* Não é possível instanciar classes abstratas:
    $carro = new Automovel();
    # Fatal error: Uncaught Error: Cannot instantiate abstract class Automovel [...]. */