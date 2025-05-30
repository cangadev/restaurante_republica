<?php
$conn = new mysqli("localhost", "root", "", "republica");
$id = $_GET['id'];
$conn->query("DELETE FROM producto WHERE id=$id");
header("Location: cadastrar.php");
?>
