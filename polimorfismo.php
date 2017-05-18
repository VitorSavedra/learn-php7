<?php

    // Polimorfismo. 
    abstract class Animal {
        public function comunicar() {
            return "Som";
        }

        public function mover() {
            return "Anda";
        }

    }

    class Cachorro extends Animal {
        public function comunicar() {
            return "Late";
        }

        public function mover() { 
            return "Corre";
        }
    }

    class Gato extends Animal {
        public function comunicar() {
            return "Mia";
        }

        public function mover() {
            return "Dorme";
        }
    }

    class Passaro extends Animal {
        public function comunicar() {
            return "Canta";
        }

        public function mover() {
            return "Voa e " . parent::mover();
        }
    }

    $mutley = new Cachorro();
    echo $mutley->comunicar() . "<br>";
    echo $mutley->mover() . "<br>";

    echo "-----------------------<br>";
    $garfield = new Gato();
    echo $garfield->comunicar() . "<br>";
    echo $garfield->mover() . "<br>";

    echo "-----------------------<br>";
    $lourojose = new Passaro();
    echo $lourojose->comunicar() . "<br>";
    echo $lourojose->mover() . "<br>";