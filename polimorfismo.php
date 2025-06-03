<?php
// clase abtract
abstract class Animal {
    protected string $nombre;
    
    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }
    
    abstract public function hacerSonido(): string;
    
    public function mostrarNombre(): string {
        return "El nombre del animal es: " . $this->nombre;
    }
}
// clase hija

class Perro extends Animal {

    public function hacerSonido(): string {
        return "Guau Guau";
    }
}
// clase hija
class Gato extends Animal {
    public function hacerSonido(): string {
        return "Miau Miau";
    }
}   
// clase hija
class Vaca extends Animal {
    public function hacerSonido(): string {
        return "Muuu Muuu";
    }
}

$perro = new Perro("Firulais");
$gato = new Gato("karencio");
$vaca = new Vaca("Betsy");

echo $perro->mostrarNombre() . " hace el sonido: " . $perro->hacerSonido() . "\n";
echo $gato->mostrarNombre() . " hace el sonido: " . $gato->hacerSonido() . "\n";
echo $vaca->mostrarNombre() . " hace el sonido: " . $vaca->hacerSonido() . "\n";
// Salida esperada: