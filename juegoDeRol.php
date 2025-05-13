<?php
class personaje {
    // Atributos
    public $nombre;
    public $fuerza;
    public $inteligencia;
    public $destreza;
    public $defensa;
    public $vida;

    public function __construct($nombre, $fuerza, $inteligencia, $destreza, $defensa, $vida) {
        $this->nombre = $nombre;
        $this->fuerza = $fuerza;
        $this->inteligencia = $inteligencia;
        $this->destreza = $destreza;
        $this->defensa = $defensa;
        $this->vida = $vida;
    }

    public function atributos() {
        echo "------------------------\n";
        echo "Nombre: {$this->nombre}\n";
        echo "Fuerza: {$this->fuerza}\n";
        echo "Inteligencia: {$this->inteligencia}\n";
        echo "Destreza: {$this->destreza}\n";
        echo "Defensa: {$this->defensa}\n";
        echo "Vida: {$this->vida}\n";
       

    }

    public function ataque($oponente) {
        $daño = $this->fuerza - $oponente->defensa;
        if ($daño < 0) {
            $daño = 0;
        }
        echo "{$this->nombre} ataca a {$oponente->nombre} y causa {$daño} de daño!\n";
        $oponente->recibirDaño($daño);
    }

    public function recibirDaño($daño) {
        $critico = rand(0, 1);
        if ($critico) {
            $daño *= 2;
            echo "¡Golpe crítico!\n";
        }
        $this->vida -= $daño;
        if ($this->vida <= 0) {
            $this->vida = 0;
            echo "{$this->nombre} ha sido derrotado!\n";
        } else {
            echo "{$this->nombre} ahora tiene {$this->vida} de vida restantes.\n";
        }
    }
    public function estaDerrotado() {
        return $this->vida <= 0;
    }


    
}

class Guerrero extends personaje {
    public $espada;
    public function __construct($nombre, $fuerza, $inteligencia, $destreza, $defensa, $vida, $espada) {
        parent::__construct($nombre, $fuerza, $inteligencia, $destreza, $defensa, $vida);
        $this->espada = $espada;
    }
    
    public function atributos() {
        parent::atributos();
        echo "Espada: {$this->espada}\n";
        echo "------------------------\n";
    }

    public function ataque($oponente) {
        $daño = $this->fuerza * $this->espada - $oponente->defensa;
        if ($daño < 0) {
            $daño = 0;
        }
        echo "{$this->nombre} ataca a {$oponente->nombre} con su espada y causa {$daño} de daño!\n";
        $oponente->recibirDaño($daño);
    }
}

class Mago extends personaje {
    public $varita;
    public function __construct($nombre, $fuerza, $inteligencia, $destreza, $defensa, $vida, $varita) {
        parent::__construct($nombre, $fuerza, $inteligencia, $destreza, $defensa, $vida);
        $this->varita = $varita;
    }
    
    public function atributos() {
        parent::atributos();
        echo "Varita: {$this->varita}\n";
        echo "------------------------\n";
    }

    public function ataque($oponente) {
        $daño = ($this->inteligencia * $this->varita) - $oponente->defensa;
        if ($daño < 0) {
            $daño = 0;
        }
        echo "{$this->nombre} lanza un hechizo a {$oponente->nombre} y causa {$daño} de daño!\n";
        $oponente->recibirDaño($daño);
    }
}

class Arquero extends personaje {
    public $arco;
    public function __construct($nombre, $fuerza, $inteligencia, $destreza, $defensa, $vida, $arco) {
        parent::__construct($nombre, $fuerza, $inteligencia, $destreza, $defensa, $vida);
        $this->arco = $arco;
    }
    
    public function atributos() {
        parent::atributos();
        echo "Arco: {$this->arco}\n";
        echo "------------------------\n";
    }

    public function ataque($oponente) {
        $daño = ($this->destreza * $this->arco) - $oponente->defensa;
        if ($daño < 0) {
            $daño = 0;
        }
        echo "{$this->nombre} dispara una flecha a {$oponente->nombre} y causa {$daño} de daño!\n";
        $oponente->recibirDaño($daño);
    }
}


// Crear los personajes
$guerrero = new Guerrero("Thorin", 10, 5, 3, 2, 100, 3);
$magico = new Mago("Galliard", 3, 10, 5, 2, 80, 3);
$arquero = new Arquero("Legolas", 5, 3, 10, 2, 90, 4);
// Mostrar atributos de los personajes
$guerrero->atributos();
$magico->atributos();
$arquero->atributos();
// Crear un array con los personajes

$personajes = [$guerrero, $magico, $arquero];

// Función para iniciar la batalla
function iniciarBatalla($personaje1, $personaje2) {
    echo "¡La batalla entre {$personaje1->nombre} y {$personaje2->nombre} ha comenzado!\n";
    echo "{$personaje1->nombre} tiene {$personaje1->vida} de vida y {$personaje2->nombre} tiene {$personaje2->vida} de vida.\n";
    echo "¡Que comience la batalla!\n"; 
    sleep(2);
    $turno = 0;
    while (!$personaje1->estaDerrotado() && !$personaje2->estaDerrotado()) {
        echo "Turno " . ($turno + 1) . "\n";
        $personaje1->ataque($personaje2);
        sleep(2);
        if (!$personaje2->estaDerrotado()) {
            $personaje2->ataque($personaje1);
            sleep(2);
        }
        $turno++;
    }
    echo "¡La batalla ha terminado!\n";
    if ($personaje1->estaDerrotado()) {
        echo "{$personaje2->nombre} ha ganado el combate.\n";
    } else {
        echo "{$personaje1->nombre} ha ganado el combate.\n";
    }
}

// Iniciar la batalla entre dos personajes aleatorios
$personaje1 = $personajes[array_rand($personajes)];
$personaje2 = $personajes[array_rand($personajes)]; 

while ($personaje1 === $personaje2) {
    $personaje2 = $personajes[array_rand($personajes)];
}
// Iniciar la batalla

iniciarBatalla($personaje1, $personaje2);
