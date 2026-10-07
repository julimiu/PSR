<?php

use Ejercicio4\Pelicula;

require_once __DIR__ . '/../../vendor/autoload.php';

class ControladorPelicula {
     public function registrarPeliculas(array $datos): array {
        $peliculas = [];

        foreach ($datos as $dato) {
            $pelicula = new Pelicula($dato["titulo"], $dato["genero"], $dato["duracion"], $dato["clasificacion"], $dato["calificacion"]);

            $peliculas[] = $pelicula;
        }

        return $peliculas;
    }

    public function calcularPromedio(array $peliculas): float {
        $suma = 0;

        foreach ($peliculas as $pelicula) {
            $suma += $pelicula->getCalificacion();
        }

        return $suma / count($peliculas);
    }
}