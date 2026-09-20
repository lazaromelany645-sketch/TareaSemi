<?php
header("Content-Type: application/json; charset=UTF-8");
include "conexion.php";

$sql = "SELECT * FROM productos ORDER BY id DESC";
$resultado = $conexion->query($sql);

$productos = array();

while ($fila = $resultado->fetch_assoc()) {
    $productos[] = $fila;
}

echo json_encode($productos, JSON_UNESCAPED_UNICODE);
$conexion->close();
?>