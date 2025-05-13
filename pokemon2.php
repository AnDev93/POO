<?php 

class pokemon{
    //Atributos
    protected string $Nombre;  
    protected string $Tipo;
    protected int $vida;
    protected int $poderDeAtaque;
    protected int $Nivel;
    

    //Constructor
    public function __construct(string $nombre, string $tipo, int $vida,  int $poderDeAtaque, int $nivel){
        $this->Nombre=$nombre;
        $this->Tipo=$tipo;
        $this->vida=$vida;
        $this->poderDeAtaque=$poderDeAtaque;
        $this->Nivel=$nivel;
    }

    //getters y setters
    public function getNombre(){
        return $this->Nombre;
    }

    public function setNombre($nombre){
        $this->Nombre=$nombre;
    }

    //Metodos
    public function atacar(){
        echo $this->Nombre." usa ataque \n";
    }

    public function subirNivel(){
        $this->Nivel++;
        echo $this->Nombre." subio al nivel: ".$this->Nivel."! \n";
    }

    public function mostrarInformacion(){
        echo "Pokemon: ".$this->Nombre." Tipo: ".$this->Tipo." Nivel: ".$this->Nivel." \n";
    }
}