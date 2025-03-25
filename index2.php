<?php   

    class Persona {
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

        // getter y setter
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

    class Empleado {
        private object $Persona;
        private float $Salario;
        private string $FechaIngreso;
        private string $Area;
        private string $Cargo;
        public function __construct(Persona $Persona, float $salario, string $fechaIngreso, string $area, string $cargo){
            $this->Persona=$Persona;
            $this->Salario=$salario;
            $this->FechaIngreso=$fechaIngreso;
            $this->Area=$area;
            $this->Cargo=$cargo;
            
        }

        public function MostrarInformacion(){
            $respuesta=$this->Persona->MostrarInformacion();
            $respuesta.="Salario: ".$this->Salario."\n";
            $respuesta.="Fecha Ingreso: ".$this->FechaIngreso."\n";
            $respuesta.="Area: ".$this->Area."\n";
            $respuesta.="Cargo: ".$this->Cargo."\n";
            return $respuesta;
        }
        
    }

    // Creamos un objeto de la clase Persona
    $persona1 = new Persona("Anderso", "Sanchez", 30, "Masculino", "Calle 123", "1234567");
    // Creamos un objeto de la clase Empleado 
    $empleado1 = new Empleado($persona1, 1000.0, "01/01/2021", "Sistemas", "Programador");
    echo $empleado1->MostrarInformacion();  