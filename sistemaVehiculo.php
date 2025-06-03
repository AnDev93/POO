<?php
// 1 Sistema de Vehículos
//     - Crea una clase base Vehiculo con propiedades como marca, modelo y velocidadMaxima.
//     - Define métodos Como acelerar() y frenar().
//     - Crea clases derivadas Auto y Moto que sobrescriban el método acelerar() y frenar(). con diferentes implementaciones.
//     - Implementa un método mostrarInformacion() que muestre detalles específicos de cada tipo de vehículo.
//     - Crea instancias de Auto y Moto y demuestra el uso de los métodos definidos en  las clases derivadas.
class Vehiculo {
    protected $marca;
    protected $modelo;
    protected $velocidadMaxima;
    protected $velocidadActual;

    public function __construct($marca, $modelo, $velocidadMaxima) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidadMaxima = $velocidadMaxima;
        $this->velocidadActual = 0;
    }

    public function acelerar($valor) {
        $this->velocidadActual += $valor;
        if ($this->velocidadActual > $this->velocidadMaxima) {
            $this->velocidadActual = $this->velocidadMaxima;
            echo "El vehículo ha alcanzado su velocidad máxima de " . $this->velocidadMaxima . " km/h.\n";
            exit();
        }
        echo "El vehículo está acelerando a " . $this->velocidadActual . " km/h.\n";
    }

    public function frenar($valor) {
        $this->velocidadActual -= $valor;
        if ($this->velocidadActual < 0) {
            $this->velocidadActual = 0;
            echo "El vehículo ha detenido su movimiento.\n";
            exit();
        }
        echo "El vehículo está frenando a " . $this->velocidadActual . " km/h.\n";
    }

    public function mostrarInformacion() {
        echo "Marca: " . $this->marca . "\n";
        echo "Modelo: " . $this->modelo . "\n";
        echo "Velocidad Máxima: " . $this->velocidadMaxima . " km/h\n";
        echo "Velocidad Actual: " . $this->velocidadActual . " km/h\n";
    }
} 
// 2 Clase Auto
class Auto extends Vehiculo {
    private $numeroPuertas;

    public function __construct($marca, $modelo, $velocidadMaxima, $numeroPuertas) {
        parent::__construct($marca, $modelo, $velocidadMaxima);
        $this->numeroPuertas = $numeroPuertas;
    }

    public function acelerar($valor) {
        $this->velocidadActual += $valor;
        
        if ($this->velocidadActual > $this->velocidadMaxima) {
            $this->velocidadActual = $this->velocidadMaxima;
            echo "El auto ha alcanzado su velocidad máxima de " . $this->velocidadMaxima . " km/h.\n";
            exit();
        }
        echo "El auto está acelerando a " . $this->velocidadActual . " km/h.\n";
    }
    

    public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "Número de Puertas: " . $this->numeroPuertas . "\n";
    }
}
// 3 Clase Moto
class Moto extends Vehiculo {
    private $tipoManillar;

    public function __construct($marca, $modelo, $velocidadMaxima, $tipoManillar) {
        parent::__construct($marca, $modelo, $velocidadMaxima);
        $this->tipoManillar = $tipoManillar;
    }

    public function acelerar($valor) {
        $this->velocidadActual += $valor;
        
        if ($this->velocidadActual > $this->velocidadMaxima) {
            $this->velocidadActual = $this->velocidadMaxima;
            echo "La moto ha alcanzado su velocidad máxima de " . $this->velocidadMaxima . " km/h.\n";
            exit();
        }
        echo "La moto está acelerando a " . $this->velocidadActual . " km/h.\n";
        
    }

    public function frenar($valor) {
        $this->velocidadActual -= $valor;
        
        if ($this->velocidadActual < 0) {
            $this->velocidadActual = 0;
            echo "La moto ha detenido su movimiento.\n";
            exit();
        }
        echo "La moto está frenando a " . $valor . " km/h.\n";
    }

    public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "Tipo de Manillar: " . $this->tipoManillar . "\n";
    }
}
// 4 Crear instancias de Auto y Moto
$auto = new Auto("Toyota", "Corolla", 180, 4);
$auto->acelerar(50);
$auto->frenar(20);
$auto->mostrarInformacion();
echo "\n";
$moto = new Moto("Yamaha", "MT-07", 200, "Deportivo");
$moto->acelerar(70);
$moto->frenar(30);
$moto->mostrarInformacion();
echo "\n";

?>  
