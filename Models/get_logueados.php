<?php
include 'db.php';
$result = $conn->query("SELECT id, nombre, contraseña, rol FROM usuarios");
$rows = [];
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
echo json_encode(['rows' => $rows]);
?>