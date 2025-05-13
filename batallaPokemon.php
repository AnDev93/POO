<?php
class Pokemon {
    // Atributos
    public string $nombre;
    public string $tipo;
    public int $hp;
    public int $poderDeAtaque;

    // Constructor
    public function __construct(string $nombre, string $tipo, int $hp, int $poderDeAtaque) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->hp = $hp;
        $this->poderDeAtaque = $poderDeAtaque;
    }
    //getters y setters
    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    // Métodos
    public function mostrarInformacion() {
        echo "Pokemon: {$this->nombre}\n";
        echo "Tipo: {$this->tipo}\n"; 
        echo "HP: {$this->hp}\n"; 
        echo "Poder de Ataque: {$this->poderDeAtaque}\n";
        echo "------------------------\n";
    }

    public function ataque(Pokemon $oponente) {
        echo "{$this->nombre} ataca a {$oponente->nombre} y causa {$this->poderDeAtaque} de daño!\n";
        $oponente->recibirDaño($this->poderDeAtaque);
    }

    public function recibirDaño($daño) {
        $critico = rand(0, 1);
        if($critico){
            $daño *= 2;
            echo "¡Golpe crítico!\n";
        }
        $this->hp -= $daño;
        if ($this->hp <= 0) {
            $this->hp = 0;
            echo "{$this->nombre} ha sido derrotado!\n";
        } else {
            echo "{$this->nombre} ahora tiene {$this->hp} HP restantes.\n";
        }
    }

    public function estaDerrotado() {
        return $this->hp <= 0;
    }

}

// Crear los Pokémon combatientes
$pikachu = new Pokemon("Pikachu", "Eléctrico", 100, 26);
$charmander = new Pokemon("Charmander", "Fuego", 100, 25);

// Simulación de batalla
function iniciarBatalla($pokemon1, $pokemon2) {
    echo "¡La batalla entre {$pokemon1->nombre} y {$pokemon2->nombre} ha comenzado!\n";
    echo "{$pokemon1->nombre} tiene {$pokemon1->hp} HP y {$pokemon2->nombre} tiene {$pokemon2->hp} HP.\n";
    echo "¡Que comience la batalla!\n"; 
    sleep(2);
    $turno = 0;
    while (!$pokemon1->estaDerrotado() && !$pokemon2->estaDerrotado()) {
        echo "Turno " . ($turno + 1) . "\n";
        $pokemon1->ataque($pokemon2);
        sleep(2);
        if (!$pokemon2->estaDerrotado()) {
            $pokemon2->ataque($pokemon1);
            sleep(2);
        }
        $turno++;
    }
    echo "¡La batalla ha terminado!\n";
    if ($pokemon1->estaDerrotado()) {
        echo "{$pokemon2->nombre} ha ganado el combate.\n";
    } else {
        echo "{$pokemon1->nombre} ha ganado el combate.\n";
    }
    echo "¡Gracias por jugar!\n";
}
// Iniciar la batalla
 
$pikachu->mostrarInformacion();
$charmander->mostrarInformacion(); 

$charmander->ataque($pikachu);
$pikachu->ataque($charmander);

