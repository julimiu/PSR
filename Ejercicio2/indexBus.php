<?php

require_once __DIR__ . '/controller/ControladorEjercicio2.php';

$controladorBus = new ControladorBus();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $placa = $_POST["placa"];
    $capacidad = (int) $_POST["capacidad"];
    $precioPasaje = (float) $_POST["precio"];
    $suben = (int) $_POST["suben"];
    $bajan = (int) $_POST["bajan"];

    //procesar el bus

    $bus = $controladorBus->crearBus($placa, $capacidad, $precioPasaje, $suben, $bajan);
    $subieron = $bus->subirPasajeros($suben);
    $bajaron = false;

    if ($subieron) {
        $bajaron = $bus->bajarPasajeros($bajan);
    }

    echo "<h1>Resultado del Bus</h1>";
    echo "Placa del bus: " . $bus->getPlaca() . "<br>";
    echo "Capacidad del bus: " . $bus->getCapacidad() . " pasajeros<br>";
    echo "Precio del pasaje: $" . $bus->getPrecioPasaje() ."<br><br>";


    //mensaje de subida
    if ($subieron) {
        echo "Subieron correctamente: " . $suben . " pasajeros.<br>";
    } else {
        echo "Error: No pueden subir " . $suben . " pasajeros porque supera la capacidad del bus.<br>";
    }

    //mensaje de bajada
    if ($subieron) {
        if ($bajaron) {
            echo "Bajaron correctamente: " . $bajan . " pasajeros.<br>";
        } else {
            echo "Error: No pueden bajar " . $bajan . " pasajeros porque solo hay " . $bus->getPasajerosActuales() . " pasajeros disponibles.<br>";
        }
    } else {
        echo "No se puede realizar la bajada porque los pasajeros no pudieron subir.<br>";
    } 

    //Estado final

    echo "<h2>Estado final del bus</h2>";

    echo "Pasajeros actuales: " . $bus->getPasajerosActuales() . "<br>";
    echo "Total de pasajeros que han subido: " . $bus->getTotalPasajeros() . "<br>";
    echo "Dinero acumulado: $" . $bus->getDineroAcumulado() . "<br><br>";

    echo  '<a href="indexBus.php">Crear otro Bus</a>';
} else {
    require_once __DIR__ . '/view/VistaEjercicioNumero2.php';
}
