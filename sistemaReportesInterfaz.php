<?php
// polimorfismo
// El polimorfismo es un concepto de programación orientada a objetos que permite que diferentes clases respondan al mismo mensaje (o método) de manera específica para cada clase.
// Esto significa que puedes tratar objetos de diferentes clases de manera uniforme, lo que facilita la extensibilidad y el mantenimiento del código.
// En PHP, el polimorfismo se logra a través de la herencia y la sobrescritura de métodos.

// otra forma de hacer polimorfismo es aplicando interfaces.

//que son las interfaces?
// Las interfaces son un tipo de contrato en programación orientada a objetos que define un conjunto de métodos que una clase debe implementar.
// Las interfaces no pueden contener implementación de métodos, solo la firma de los métodos.
// Las clases que implementan una interfaz deben proporcionar la implementación de todos los métodos definidos en la interfaz.
// Esto permite que diferentes clases puedan ser tratadas de manera uniforme si implementan la misma interfaz.
// Las interfaces son útiles para definir un comportamiento común que puede ser compartido por diferentes clases, sin necesidad de heredar de una clase base común.

// En este ejemplo, se muestra cómo se puede implementar el polimorfismo utilizando interfaces.
// Las clases que implementan la interfaz Reporte deben proporcionar la implementación del método generar().

// Sistema de Reportes
// - Define una interfaz Reporte con un método generar().
// - Implementa Reporte en clases ReportePDF, ReporteExcel y ReporteHTML, cada una con su propia lógica de generación.
// - Crea una función que reciba un objeto Reporte y llame a generar()..

interface Reporte {
    public function generar();
}

// Implementación de la interfaz Reporte en ReportePDF
class ReportePDF implements Reporte {
    public function generar() {
        echo "Generando reporte en formato PDF.\n";
    }
}

// Implementación de la interfaz Reporte en ReporteExcel
class ReporteExcel implements Reporte {
    public function generar() {
        echo "Generando reporte en formato Excel.\n";
    }
}

// Implementación de la interfaz Reporte en ReporteHTML
class ReporteHTML implements Reporte {
    public function generar() {
        echo "Generando reporte en formato HTML.\n";
    }
}

// Función que recibe un objeto Reporte y llama a generar()
function generarReporte(Reporte $reporte) {
    $reporte->generar();
}

// Ejemplo de uso
$reportePDF = new ReportePDF();
$reporteExcel = new ReporteExcel();
$reporteHTML = new ReporteHTML();
// Generar reportes
generarReporte($reportePDF);   // Generando reporte en formato PDF.
generarReporte($reporteExcel);  // Generando reporte en formato Excel.
generarReporte($reporteHTML);  // Generando reporte en formato HTML.





