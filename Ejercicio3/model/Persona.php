<?php

require_once __DIR__ . '/Cliente.php';

class Persona extends Cliente {
    private string $cedula;
    private int $edad;

    public function __construct(string $cedula, string $nombre, int $edad) {
      parent::__construct($nombre);

      $this->cedula = $cedula;
      $this->edad = $edad;
    }

    public function obtIdentificacion(): string {
        return $this->cedula;
    }

    public function obtEdad(): string {
        return $this->edad;
    }

    public function cumplirAños() {
        $this->edad++;
    }
}