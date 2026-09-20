<?php
include "conexion.php";

if (!isset($_POST["id"])) {
    echo "error";
    exit;
}

$id = intval($_POST["id"]);

$sql = "DELETE FROM productos WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id);

echo $stmt->execute() ? "ok" : "error";

$stmt->close();
$conexion->close();
?>