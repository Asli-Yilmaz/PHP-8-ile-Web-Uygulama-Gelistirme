<?php
    class Person{
        public string $name;
        public string $surname;

        public function Speak(){
            echo "{$this->name} {$this->surname} konuşuyor.";
            echo "<br>";
        }
    }
?>