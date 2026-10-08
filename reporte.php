<?php
declare(strict_types=1);

$flota = [
    [
        "modelo" => "Renault Mégane E-Tech",
        "categoria" => "eléctrico compacto",
        "autonomia" => 450,
        "precioDia" => 50,
        "descuento" => null
    ],
    [
        "modelo" => "Citroën ë-C4",
        "categoria" => "eléctrico urbano",
        "autonomia" => 420,
        "precioDia" => 45,
        "descuento" => 10
    ],
    [
        "modelo" => "Tesla Model 3",
        "categoria" => "berlina eléctrica",
        "autonomia" => 550,
        "precioDia" => 70,
        "descuento" => null
    ]
];

usort($flota, function ($a, $b) {
    return $b["autonomia"] <=> $a["autonomia"];
})
?>

<h2>Catálogo de vehículos EcoDrive</h2>

<table border="1">
    <tr>
        <th>Modelo</th>
        <th>Categoría</th>
        <th>Autonomía</th>
        <th>Precio por día</th>
        <th>N.º de caracteres</th>
        <th>Descuento</th>
    </tr>

<?php foreach ($flota as $vehiculo): ?>
    <tr>
        <td><?= mb_strtoupper($vehiculo["modelo"], "UTF-8") ?></td> <!--Convierte el modelo a MAYÚSCULAS, respetando las tildes-->

        <td><?= mb_convert_case($vehiculo["categoria"], MB_CASE_TITLE, "UTF-8") ?></td> <!--Pone la primera letra en mayúscula de cada palabra-->

        <td><?= $vehiculo["autonomia"] ?> km</td>

        <td><?= $vehiculo["precioDia"] ?> €</td>

        <td><?= mb_strlen($vehiculo["modelo"], "UTF-8") ?></td> <!--Cuenta cuántos caracteres tiene, incluidas las tildes-->

        <td>
            <?php
            if (isset($vehiculo["descuento"])) {
                echo $vehiculo["descuento"] . "%";
            } elseif (array_key_exists("descuento", $vehiculo)) {
                echo "Descuento nulo";
            } else {
                echo "Sin descuento registrado";
            }
            ?>
        </td>
    </tr>
<?php endforeach; ?>

</table>