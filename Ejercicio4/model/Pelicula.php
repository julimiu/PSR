<?php

class Pelicula {
    private string $titulo;
    private string $genero;
    private int $duracionMinutos;
    private string $clasificacion;
    private float $calificacion;

    // private int $totalPeliculas = 0;

    public function __construct(string $titulo, string $genero, int $duracionHoras, string $clasificacion, float $calificacion) {
        
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracionMinutos = $this->convertirHaM($duracionHoras);
        $this->clasificacion = $clasificacion;
        $this->calificacion = $calificacion;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getGenero(): string {
        return $this->genero;
    }

    public function getDuracionMinutos(): int {
        return $this->duracionMinutos;
    }

    public function getClasificacion(): string {
        return $this->clasificacion;
    }

    public function getCalificacion(): float {
        return $this->calificacion;
    }

    //determinar si es recomendada
    public function esRecomendada(): bool {
        return $this->calificacion >=4;
    }

    public function setCalificacion(float $calificacion) {
        if ($calificacion >=1 && $calificacion <=5) {
            $this->calificacion = $calificacion;
        } 
    }

    //convertir horas a minutos
    public function convertirHaM(float $horas): int {
        return $horas * 60;
    }

    //obtener total de peliculas creadas
    // public function getTotalPeliculas(): int {
    //     return $totalPeliculas;
    // }

    // //mostrar info de peli
    // public function mostrarInfo(): string {
    //     return "Título: " . $this->titulo . " | Género: " . $this->genero . " | Duración: " . $this->duracion . " minutos" . 
    //     " | Clasificación: " . $this->clasificacion . " | Calificación: " . $this->calificacion;
    // }
}