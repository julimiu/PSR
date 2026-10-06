<?php

require_once __DIR__ . '/Cliente.php';

class Banco {
    private string $nombre;
    private array $clientes;
    private int $numeroClientes;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
        $this->clientes = [];
        $this->numeroClientes = 0;
    }

    public function obtNombre(): string {
        return $this->nombre;
    }

    public function cambiarNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    public function adicionarCliente(Cliente $cliente) {
        $this->clientes[] = $cliente;
        $this->numeroClientes++;
    }

    public function obtNumeroClientes(): int {
        return $this->numeroClientes;
    }

    public function obtUnCliente(int $posicion): Cliente {
        return $this->clientes[$posicion];
    }

    public function obtClientes(): array {
        return $this->clientes;
    }
}