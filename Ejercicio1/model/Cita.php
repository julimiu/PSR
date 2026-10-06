<?php

class Cita {
    private int $numero;
    private int $tipo;
    private float $tarifa;
    private float $valorFinal;

    public function __construct(int $numero, int $tipo, float $tarifa) {
        $this->numero = $numero;
        $this->tipo = $tipo;
        $this->tarifa = $tarifa;
        $this->valorFinal = 0;
    }

    //GETTERS
    public function getNumero(): int {
        return $this->numero;
    }

    public function getTipo(): string {
        if ($this->tipo >= 1 && $this->tipo <= 3) {
            return "General";
        } elseif ($this->tipo >= 4 && $this->tipo <= 5) {
            return "Especialista";
        } else {
            return "Tipo no válido";
        }
    }

    public function getTarifa(): float {
        return $this->tarifa;
    }

    public function calcularValorFinal(): float {
        if ($this->getTipo() == "Especialista") {
            $this->valorFinal = $this->tarifa * 1.50;
        } elseif ($this->getTipo() == "General") {
            $this->valorFinal = $this->tarifa * 0.50;
        } else {
            $this->valorFinal = 0;
        } return $this->valorFinal;
    }
}