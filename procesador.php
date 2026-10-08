<?php

declare(strict_types=1);

ini_set('display_errors', '1');
error_reporting(E_ALL);

//Recibir los días de alquiler mediante GET
$dias = $_GET["dias"] ?? null;

$diasValidos = filter_var($dias, FILTER_VALIDATE_INT);

if ($diasValidos === false || $diasValidos <= 0) {
    http_response_code(400);
    die("Error: los días de alquiler deben ser un número entero positivo.");
}

$dias = $diasValidos;

//http://localhost:8000/procesador.php?dias=5

//Mostrar el valor y tipo de los días recibidos
echo "<pre>";
var_dump($dias);
echo "</pre>";