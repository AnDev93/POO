<?php
class Pokemon{
    //Atributos
    protected string $Nombre;
    protected string $Tipo;
    protected int $Nivel;

    //Constructor
    public function __construct(string $nombre, string $tipo, int $nivel){
        $this->Nombre=$nombre;
        $this->Tipo=$tipo;
        $this->Nivel=$nivel;
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
        echo "Pokemon: ".$this->Nombre." Tipo: ".$this->Tipo." Nivel: ".$this->Nivel." /n";
    }

}

class Pikachu extends Pokemon{
    public function __construct($nivel)
    {
        parent::__construct("Pikachu","Electrico",$nivel);
    }

    public function atacar(){
        echo $this->Nombre." usa Impactrueno \n";
    }

}