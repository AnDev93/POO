<?php    
class Persona{
    // Atributos
    // public private protected
    public string $Nombre = "Anderso";
    public string $Apellido = "Sanchez";
    public int $Edad = 30;
    public string $Sexo = "Masculino";
    protected string $Direccion = "Calle 123";
    private string $Telefono = "0414-1234567";

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