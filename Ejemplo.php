<?php    
class Persona{
    // Atributos
    // public private protected
    public string $Nombre;
    public string $Apellido;
    public int $Edad;
    public string $Sexo;
    protected string $Direccion;
    private string $Telefono;

    // Constructor

    //Metodo Especial
    public function __construct(string $Nombre, string $Apellido, int $Edad, string $Sexo, string $Direccion, string $Telefono){
        $this->Nombre=$Nombre;
        $this->Apellido=$Apellido;
        $this->Edad=$Edad;
        $this->Sexo=$Sexo;
        $this->Direccion=$Direccion;
        $this->Telefono=$Telefono;
    }

    //Metodos
    public function Saludar(){
        $respuesta="Hola, como estas? mi nombre es ".$this->Nombre;
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
    
    //getter y setter
    public function getDireccion(){
        return $this->Direccion;
    }

    public function setDireccion($direccion){
        $this->Direccion=$direccion;
    }

    public function getTelefono(){
        return $this->Telefono;
    }

    public function setTelefono($telefono){
        $this->Telefono=$telefono;
    }

}
$persona = new Persona("Juan", "Perez", 25, "Masculino", "Calle Falsa 123", "1234567890");
echo $persona->Saludar()."\n";
