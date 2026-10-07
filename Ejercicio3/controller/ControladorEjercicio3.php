<?php

use Ejercicio3\Banco;
use Ejercicio3\Empresa;
use Ejercicio3\Persona;


require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../vendor/autoload.php';

class ControladorBanco {
    public function crearBanco(): Banco {

        $banco = new Banco("Banco Nacional");

        $persona1 = new Persona("1001", "Carlos", 25);
        $persona2 = new Persona("1002", "Juliana", 17);
        $persona3 = new Persona("1003", "Andrés", 15);
        $persona4 = new Persona("1004", "Sofia", 30);

        $empresa1 = new Empresa("900001", "Tech Solutions", "Pedro");
        $empresa2 = new Empresa("90002", "Comercial ABC", "María");

        $banco->adicionarCliente($persona1);
        $banco->adicionarCliente($persona2);
        $banco->adicionarCliente($persona3);
        $banco->adicionarCliente($persona4);

        $banco->adicionarCliente($empresa1);
        $banco->adicionarCliente($empresa2);

        return $banco;
    }
}