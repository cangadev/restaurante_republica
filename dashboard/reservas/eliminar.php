<?php
$conn = new mysqli("localhost", "root", "", "republica");
$id = $_GET['id'];
$conn->query("DELETE FROM reserva WHERE id=$id");
header("Location: ./resultado/index.html");
?>
