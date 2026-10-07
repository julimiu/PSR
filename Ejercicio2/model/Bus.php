<?php

namespace Ejercicio2;

class Bus {
    private String $placa;
    private int $capacidadPasajeros;
    private float $precioPasaje;
    private int $pasajerosActuales;
    private int $totalPasajeros;

    public function __construct($placa, $capacidadPasajeros, $precioPasaje) {
        $this->placa = $placa;
        $this->capacidadPasajeros = $capacidadPasajeros;
        $this->precioPasaje = $precioPasaje;
        $this->pasajerosActuales = 0;
        $this->totalPasajeros = 0;
    }

    //GETTERS
    public function getPlaca(): string {
        return $this->placa;
    }

    public function getCapacidad(): int {
        return $this->capacidadPasajeros;
    }

    public function getPrecioPasaje(): float {
        return $this->precioPasaje;
    }

    public function getPasajerosActuales(): int {
        return $this->pasajerosActuales;
    }

    public function getTotalPasajeros(): int {
        return $this->totalPasajeros;
    }

    public function subirPasajeros(int $cantidad): string {

        if($this->pasajerosActuales + $cantidad <= $this->capacidadPasajeros) {
            $this->pasajerosActuales += $cantidad;
            $this->totalPasajeros += $cantidad;

            return true;
        } else {
            return false;
        }
    }

    public function bajarPasajeros(int $cantidad){
        if ($cantidad <= $this->pasajerosActuales) {
            $this->pasajerosActuales -= $cantidad;

            return true;
        } else {
            return false;
        }
    }   

    public function getDineroAcumulado(): float {
        return $this->totalPasajeros * $this->precioPasaje;
    }
}