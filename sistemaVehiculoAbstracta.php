<?php
// polimorfismo
// El polimorfismo es un concepto de programación orientada a objetos que permite que diferentes clases respondan al mismo mensaje (o método) de manera específica para cada clase.
// Esto significa que puedes tratar objetos de diferentes clases de manera uniforme, lo que facilita la extensibilidad y el mantenimiento del código.
// En PHP, el polimorfismo se logra a través de la herencia y la sobrescritura de métodos.

// En este ejemplo, se muestra cómo se puede implementar el polimorfismo utilizando una clase abstracta y clases derivadas.
// Las clases derivadas implementan métodos específicos que son llamados de manera uniforme a través de la clase base.

// que es una clase abstracta?
// Una clase abstracta es una clase que no puede ser instanciada directamente y está destinada a ser extendida por otras clases.
// Las clases abstractas pueden contener métodos abstractos (sin implementación) y métodos concretos (con implementación).

// 1 Sistema de Vehículos
//     - Crea una clase base Vehiculo Abstracta con propiedades como marca, modelo y velocidadMaxima.
//     - Define métodos abstractos como acelerar() y frenar().
//     - Crea clases derivadas Auto y Moto que sobrescriban el método acelerar() y frenar(). con diferentes implementaciones.
//     - Implementa un método abstracto mostrarInformacion() que muestre detalles específicos de cada tipo de vehículo.
//     - Crea instancias de Auto y Moto y demuestra el uso de los métodos definidos en  las clases derivadas.

abstract class VehiculoAbstracto {
    protected string $marca;
    protected string $modelo;
    protected int $velocidadMaxima;
    protected int $velocidadActual = 0;

    public function __construct(string $marca, string $modelo, int $velocidadMaxima) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidadMaxima = $velocidadMaxima;
    }

    //nota: si definimos un metodo abstracto en la clase padre, no podemos definirlo en la clase hija
    // solo podemos definir en la clase padre y no en la hija
    // las clases hijas deben implementar los metodos abstractos de la clase padre
    // si no lo hacen, la clase hija sera abstracta y no podra ser instanciada

    // Definición de métodos abstractos
    // Estos métodos deben ser implementados por las clases hijas
    abstract public function acelerar(int $valor): void;

    abstract public function frenar(int $valor): void;

    abstract public function mostrarInformacion(): void;


}
// 2 Clase Auto
class Auto extends VehiculoAbstracto {
    private int $numeroPuertas;

    public function __construct(string $marca, string $modelo, int $velocidadMaxima, int $numeroPuertas) {
        parent::__construct($marca, $modelo, $velocidadMaxima);
        $this->numeroPuertas = $numeroPuertas;
    }
    // Implementación del método acelerar
    public function acelerar(int $valor): void {
        $this->velocidadActual += $valor;
        if ($this->velocidadActual > $this->velocidadMaxima) {
            $this->velocidadActual = $this->velocidadMaxima;
            echo "El auto ha alcanzado su velocidad máxima de " . $this->velocidadMaxima . " km/h.\n";
        } else {
            echo "El auto está acelerando a " . $this->velocidadActual . " km/h.\n";
        }
    }
    // Implementación del método frenar
    // El auto puede frenar de manera diferente a una moto, por lo que se implementa aquí
    public function frenar(int $valor): void {
        $this->velocidadActual -= $valor;
        if ($this->velocidadActual < 0) {
            $this->velocidadActual = 0;
            echo "El auto ha detenido su movimiento.\n";
        } else {
            echo "El auto está frenando a " . $this->velocidadActual . " km/h.\n";
        }
    }
    // Implementación del método mostrarInformacion
    // Este método muestra información específica del auto
    public function mostrarInformacion(): void {
        echo "Auto - Marca: {$this->marca}, Modelo: {$this->modelo}, Velocidad Máxima: {$this->velocidadMaxima} km/h, Número de Puertas: {$this->numeroPuertas}\n";
    }
}
// 3 Clase Moto
class Moto extends VehiculoAbstracto {
    private bool $tieneSidecar;

    public function __construct(string $marca, string $modelo, int $velocidadMaxima, bool $tieneSidecar) {
        parent::__construct($marca, $modelo, $velocidadMaxima);
        $this->tieneSidecar = $tieneSidecar;
    }
    // Implementación del método acelerar
    // La moto puede acelerar de manera diferente a un auto, por lo que se implementa aquí
    public function acelerar(int $valor): void {
        $this->velocidadActual += $valor;
        if ($this->velocidadActual > $this->velocidadMaxima) {
            $this->velocidadActual = $this->velocidadMaxima;
            echo "La moto ha alcanzado su velocidad máxima de " . $this->velocidadMaxima . " km/h.\n";
        } else {
            echo "La moto está acelerando a " . $this->velocidadActual . " km/h.\n";
        }
    }
    // Implementación del método frenar
    // La moto puede frenar de manera diferente a un auto, por lo que se implementa aquí
    public function frenar(int $valor): void {
        $this->velocidadActual -= $valor;
        if ($this->velocidadActual < 0) {
            $this->velocidadActual = 0;
            echo "La moto ha detenido su movimiento.\n";
        } else {
            echo "La moto está frenando a " . $this->velocidadActual . " km/h.\n";
        }
    }
    // Implementación del método mostrarInformacion
    // Este método muestra información específica de la moto
    public function mostrarInformacion(): void {
        echo "Moto - Marca: {$this->marca}, Modelo: {$this->modelo}, Velocidad Máxima: {$this->velocidadMaxima} km/h, Tiene Sidecar: " . ($this->tieneSidecar ? 'Sí' : 'No') . "\n";
    }
}
// Ejemplo de uso
$auto = new Auto("Toyota", "Corolla", 180, 4);
$auto->acelerar(50);
$auto->frenar(20);
$auto->mostrarInformacion();
$moto = new Moto("Honda", "CB500", 160, false);
$moto->acelerar(70);
$moto->frenar(30);
$moto->mostrarInformacion();

// Salida esperada:
// El auto está acelerando a 50 km/h.
// El auto está frenando a 30 km/h.
// Auto - Marca: Toyota, Modelo: Corolla, Velocidad Máxima: 180 km/h, Número de Puertas: 4
// La moto está acelerando a 70 km/h.
// La moto está frenando a 40 km/h.
// Moto - Marca: Honda, Modelo: CB500, Velocidad Máxima: 160 km/h, Tiene Sidecar: No
