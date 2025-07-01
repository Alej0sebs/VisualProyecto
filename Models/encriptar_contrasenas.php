<?php
require 'db.php';
$result = $conn->query("SELECT id, contraseña FROM usuarios");
while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $hash = password_hash($row['contraseña'], PASSWORD_DEFAULT);
    $conn->query("UPDATE usuarios SET contraseña='$hash' WHERE id=$id");
}
echo "Contraseñas encriptadas";
?>