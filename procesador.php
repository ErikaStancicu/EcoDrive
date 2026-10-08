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

/**
 * Calcula el importe total de las reservas de vehículos.
 *
 * @param array $reservas Lista de vehículos, días y precios por día.
 * @return float Importe total del alquiler.
 * @throws InvalidArgumentException Si la lista de reservas está vacía.
 */
function calcularTotalAlquiler(array $reservas): float {

    if (empty($reservas)) {
    throw new InvalidArgumentException("La lista de reservas está vacía.");
    }

    $total = 0;

    foreach ($reservas as $reserva) {
        $total += $reserva["dias"] * $reserva["precioDia"];
    }

    return $total;
}

$reservas = [
  
];

try {
    $total = calcularTotalAlquiler($reservas);

    $descuento = match (true) { 
        $total >= 500 => "Descuento del 10%",
        $total >= 200 => "Descuento del 5%",
        default => "Sin descuento"
    };

    echo "Total del alquiler: " . $total . " €";
    echo "<p>Categoría: " . $descuento . "</p>";

} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}