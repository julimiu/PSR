<?php

namespace Ejercicio3;

// require_once __DIR__ . '/Cliente.php';

class Empresa extends Cliente {
    private string $nit;
    private string $representante;

    public function __construct(int $nit, string $nombre, string $representante) {
        parent::__construct($nombre);

        $this->nit = $nit;
        $this->representante = $representante;
    }

    public function obtIdentificacion(): string {
        return $this->nit;
    }

    public function obtRepresentante(): string {
        return $this->representante;
    }

    public function cambiarRepres(string $representante) {
        $this->representante = $representante;
    }

}