<?php
    // pilares: abstracion, herencia encapsulamiento y polimorfismo 

    class Persona{
        //Atributo
        public string $Nombre;
        public string $Apellido;
        public int $Edad;
        public string $Sexo;
        protected string $Direccion;
        private string $Telefono;
        //Metodo
        public function __construct(string $nombre, string $apellido, int $edad, string $sexo, string $direccion, string $telefono){
           $this->Nombre=$nombre;
           $this->Apellido=$apellido;
           $this->Edad=$edad;
           $this->Sexo=$sexo;
           $this->Direccion=$direccion;
           $this->Telefono=$telefono;

        }
        public function Saludar(){
            $respuesta="hola mi nombre es ".$this->Nombre." tengo ".$this->Edad." año de sexo ".$this->Sexo;
            return $respuesta;
        }

        public function MostrarInformacion(){
            $respuesta="Nombre: ".$this->Nombre."\n";
            $respuesta.="Apellido: ".$this->Apellido."\n";
            $respuesta.="Edad: ".$this->Edad."\n";
            $respuesta.="Sexo: ".$this->Sexo."\n";
            $respuesta.="Direccion: ".$this->Direccion."\n";
            $respuesta.="Telefono: ".$this->Telefono."\n";
            return $respuesta;
        }

        //
        //get
        public function getDireccion(){
            return $this->Direccion;
        }
        //set
        public function setDireccion($direccion){
            $this->Direccion=$direccion;
        }
        //get
        public function getTelefono(){
            return $this->Telefono;
        }
        //set
        public function setTelefono($telefono){
            $this->Telefono=$telefono;
        }
    } 

    // Herencia 
    class Empleado extends Persona{
        public float $Salario;
        public string $FechaIngreso;
        public string $Area;
        public string $Cargo;

        public function __construct(string $nombre, string $apellido, int $edad, string $sexo, string $direccion, string $telefono, float $salario, string $fechaIngreso, string $area, string $cargo){
            parent::__construct($nombre, $apellido, $edad, $sexo, $direccion, $telefono);
            $this->Salario=$salario;
            $this->FechaIngreso=$fechaIngreso;
            $this->Area=$area;
            $this->Cargo=$cargo;
        }

        public function MostrarInformacion(){
            $respuesta=parent::MostrarInformacion();
            $respuesta.="Salario: ".$this->Salario."\n";
            $respuesta.="Fecha Ingreso: ".$this->FechaIngreso."\n";
            $respuesta.="Area: ".$this->Area."\n";
            $respuesta.="Cargo: ".$this->Cargo."\n";
            return $respuesta;
        }
    }

    //instancia
    $persona1 = new Persona("Anderso","Sanchez",30,"Masculino", "Villa Bruzual, Turén", "0424-5538669");
    // Instancia de la clase Empleado
    $empleado1 = new Empleado("Anderso","Sanchez",30,"Masculino", "Villa Bruzual, Turén", "0424-5538669", 1000, "01/01/2021", "Sistemas", "Programador");
   



