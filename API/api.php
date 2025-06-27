<?php
header("Content-Type: application/json");

// Simulación de datos
$datos = [
    ["id" => 1, "nombre" => "Manzana"],
    ["id" => 2, "nombre" => "Naranja"]
];

// Validar el método HTTP
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    echo json_encode($datos);
} else {
    http_response_code(405);
    echo json_encode(["error" => "Método no permitido 100"]);
}

