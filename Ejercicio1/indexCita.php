<?php

require_once __DIR__ . "/controller/ControladorEjercicio1.php";

$controladorCita = new ControladorCita();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $numero = (int) $_POST["numero"];
    $tipo = (int) $_POST["tipo"];
    $tarifa = (float) $_POST["tarifa"];

    $cita = $controladorCita->procesarCita( $numero, $tipo, $tarifa);

    echo "<h1>Resultado de la cita</h1>";
    echo "El número de la cita es: " . $cita->getNumero() . "<br>";
    echo "Esta cita es de tipo: " . $cita->getTipo() . "<br>";
    echo "Su tarifa normal es de: $" . $cita->getTarifa() . "<br>";
    echo "Pero por ser de tipo " . $cita->getTipo() . " ";

    echo "queda con un valor final de $" . $cita->calcularValorFinal() ."<br><br>";

    echo '<a href="indexCita.php">Crear otra cita</a>';

} else {

    require_once __DIR__ . "/view/VistaEjercicioNumero1.php";
    exit;
}