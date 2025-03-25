<?php
    class Pokemon {
        protected string $nombre;
        protected string $tipo;
        protected int $nivel;

        public function __construct($nombre, $tipo, $nivel) {
            $this->nombre = $nombre;
            $this->tipo = $tipo;
            $this->nivel = $nivel;
        }

        public function atacar() {
            echo $this->nombre . " ataca!\n";
        }

        public function subirNivel() {
            $this->nivel++;
            
            echo $this->nombre . " sube al nivel " . $this->nivel . "!\n";
        }

        public function mostrarInformacion() {
            echo "Nombre: " . $this->nombre . ", Tipo: " . $this->tipo . ", Nivel: " . $this->nivel . "\n";
        }
    }
?>
<?php
    // Herencia:
    // Permite que una clase (llamada clase hija o derivada) herede atributos y métodos de otra clase (llamada clase padre o base).
    // Esto fomenta la reutilización de código y la creación de una jerarquía de clases. 

    class Pikachu extends Pokemon {
        public function __construct($nivel) {
            parent::__construct("Pikachu", "Eléctrico", $nivel);
        }
        // Polimorfismo: 
        // Permite que objetos de diferentes clases respondan al mismo mensaje (o método) de manera específica para cada clase.
        // Esto significa que puedes tratar objetos de diferentes clases de manera uniforme.
        
        public function atacar() {

            if ($this->nivel<=10) :
                echo $this->nombre . " usa Impactrueno!\n";
            elseif($this->nivel>10):
                echo $this->nombre . " usa Rayo!\n";
            endif;
 
        }

        public function subirNivel() {
            $this->nivel++;
            
            echo $this->nombre . " sube al nivel " . $this->nivel . "!\n";
            if($this->nivel==15):
                $this->nombre = "Raichu";
                echo "Pikachu evoluciono a ".$this->nombre ."!\n";
            endif;
        }
    }

    class Charmander extends Pokemon {
        public function __construct($nivel) {
            parent::__construct("Charmander", "Fuego", $nivel);
        }
    
        public function atacar() {
            echo $this->nombre . " usa Llamarada!\n";
        }
    }