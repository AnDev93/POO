<?php
    // pilares: abstracion, herencia encapsulamiento y polimorfismo 
    // clase persona

    class Persona{
        //Atributo
        public $Nombre = "Anderso";
        public $Apellido = "Sanchez";
        public $Edad = 30;
        public $Sexo = "Masculino";

        //Metodo

        public function Saludar(){
            $Saludo = "Hola mi nombre es ".$this->Nombre." tengo ".$this->Edad." años de sexo ".$this->Sexo;
            return $Saludo;
        }
        
    }
    