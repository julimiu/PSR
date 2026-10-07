<?php

use Ejercicio3\Empresa;
use Ejercicio3\Persona;

require_once __DIR__ . '/controller/ControladorEjercicio3.php';
require_once __DIR__ . '/model/Persona.php';
require_once __DIR__ . '/model/Empresa.php';
// require_once __DIR__ . '/view/VistaEjercicio3.php';

$controlador = new ControladorBanco();

$banco = $controlador->crearBanco();

$clientes = $banco->obtClientes();

//nombres
echo "<h2>1. Todos los nombres de los clientes</h2>";

foreach ($clientes as $cliente) {
    echo $cliente->obtNombre() . "<br>";
}

//nombres y cedulas de personas
echo "<h2>2. Nombres y cédulas de las personas</h2>";

foreach ($clientes as $cliente) {
    if ($cliente instanceof Persona) {
        echo "Nombre: " . $cliente->obtNombre() . " - Cédula: " . $cliente->obtIdentificacion() . "<br>";
    }
}

//empresas y representantes
echo "<h2>3. Empresas y representantes</h2>";

foreach ($clientes as $cliente) {
    if ($cliente instanceof Empresa) {
        echo "Empresa: " . $cliente->obtNombre() . " - Representante: " . $cliente->obtRepresentante() . "<br>";
    }
}


//clientes menores de edad
echo "<h2>4. Clientes menores de edad</h2>";

foreach ($clientes as $cliente) {
    if ($cliente instanceof Persona && $cliente->obtEdad() < 18)

        echo $cliente->obtNombre() . " - Edad: " . $cliente->obtEdad() . "<br>";
}

//cliente mas joven
$masJoven = null;

foreach ($clientes as $cliente) {
    if ($cliente instanceof Persona) {
        if ($masJoven === null || $cliente->obtEdad() < $masJoven->obtEdad()) {
            $masJoven = $cliente;
        }
    }
}

echo "<h2>5. Cliente más joven</h2>";

echo "Nombre: " . $masJoven->obtNombre() . " - Edad: " . $masJoven->obtEdad() . "<br>";


//cliente mas viejo
$masViejo = null;

foreach ($clientes as $cliente) {
    if ($cliente instanceof Persona) {
        if ($masViejo === null || $cliente->obtEdad() > $masViejo->obtEdad()) {
            $masViejo = $cliente;
        }
    }
}

echo "<h2>6. Cliente más viejo</h2>";

echo "Nombre: " . $masViejo->obtNombre() . " - Edad: " . $masViejo->obtEdad() . "<br>";

