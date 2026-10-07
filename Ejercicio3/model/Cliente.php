<?php

namespace Ejercicio3;

abstract class Cliente {
    private string $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function obtNombre(): string {
        return $this->nombre;
    }

    abstract public function obtIdentificacion(): string;
}