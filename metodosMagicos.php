<?php

    class Endereco {
        
        private $logradouro;
        private $numero;
        private $cidade;

        public function __construct($a, $b, $c) { // Não é necessário que os argumentos tenham o mesmo nome das variáveis.
            $this->logradouro = $a;
            $this->numero = $b;
            $this->cidade = $c;
        }

        public function __destruct() {
            var_dump("Destruir");
        }

        public function __toString() {
            return $this->logradouro . ", " . $this->numero . ", " . $this->cidade;
        }

    }
    
    $meuEndereco = new Endereco("Rua","999","São Paulo");
    var_dump($meuEndereco);
    echo "<br><br>" . $meuEndereco . "<br><br>";
    unset($meuEndereco);