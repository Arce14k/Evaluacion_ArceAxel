<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arreglo Empleados</title>
	<style type="text/css">
		body{
			background-color: rgb(255, 89, 90);
		}
	</style>
</head>
<body>
<?php

$nombres = [
    ['nombre' => 'Pancho', 'sueldo' => 1200],
    ['nombre' => 'Juana', 'sueldo' => 580],
    ['nombre' => 'Rihanna', 'sueldo' => 3600],
    ['nombre' => 'Martha', 'sueldo' => 4500],
    ['nombre' => 'Luisito', 'sueldo' => 1800],
];

// Ordenar el arreglo por sueldo
uasort($nombres, function($a, $b) {
    return $a['sueldo'] <=> $b['sueldo'];
});

// Imprimir sueldos originales
echo "Sueldos de empleados: <br>";
foreach ($nombres as $empleado) {
    echo "El sueldo de " . $empleado['nombre'] . " es: $" . $empleado['sueldo'] . "<br>";
}

echo "<p>";

// Agregar 2 empleados más
array_push($nombres, ['nombre' => 'Dulce', 'sueldo' => 2300]);
array_push($nombres, ['nombre' => 'Irmita', 'sueldo' => 8000]);

// Re-ordenar después de agregar nuevos empleados
uasort($nombres, function($a, $b) {
    return $a['sueldo'] <=> $b['sueldo'];
});

// Imprimir sueldos ampliados
echo "Sueldos ampliados: <br>";
foreach ($nombres as $empleado) {
    echo "El sueldo de " . $empleado['nombre'] . " es: $" . $empleado['sueldo'] . "<br>";
}

?>

</body>
</html>