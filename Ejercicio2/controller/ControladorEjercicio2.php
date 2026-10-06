<?php

require_once __DIR__ . '/../model/Bus.php';

class ControladorBus {

public function crearBus(string $placa, int $capacidad, float $precioPasaje, int $suben, int $bajan): Bus {
    $bus = new Bus($placa, $capacidad, $precioPasaje);

    return $bus;
}
    
}