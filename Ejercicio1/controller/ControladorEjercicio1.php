<?php

use Ejercicio1\Cita;

require_once __DIR__ . '/../../vendor/autoload.php';

// require_once __DIR__ . '/../model/Cita.php';

// require_once __DIR__ . '/../view/VistaEjercicioNumero1.php';

class ControladorCita {
    public function procesarCita (int $numero, int $tipo, float $tarifa): Cita {
        $cita = new Cita($numero, $tipo, $tarifa);

        return $cita;
        // return [
        //     "numero" => $cita->getNumero(),
        //     "tipo" => $cita->getTipo(),
        //     "tarifa" =>$cita->getTarifa(),
        //     "ValorFinal" =>$cita->calcularValorFinal()
        // ];
    }
}



