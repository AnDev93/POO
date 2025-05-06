<?php
class Pokemon {
    protected $nombre;
    protected $tipo;
    protected $hp;
    protected $poderDeAtaque;

    public function __construct($nombre, $tipo, $hp, $poderDeAtaque) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->hp = $hp;
        $this->poderDeAtaque = $poderDeAtaque;
    }

    public function ataque(Pokemon $oponente) {
        echo "{$this->nombre} ataca a {$oponente->nombre} y causa {$this->poderDeAtaque} de daño!\n";
        $oponente->recibirDaño($this->poderDeAtaque);
    }

    public function recibirDaño($daño) {
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
$pikachu = new Pokemon("Pikachu", "Eléctrico", 100, 20);
$charmander = new Pokemon("Charmander", "Fuego", 100, 25);

// Simulación de batalla
while (!$pikachu->estaDerrotado() && !$charmander->estaDerrotado()) {
    $pikachu->ataque($charmander);
    sleep(2);
    if (!$charmander->estaDerrotado()) {
        $charmander->ataque($pikachu);
        sleep(2);
    }
}

echo "¡La batalla ha terminado!";

