<?php
include("connection.php");
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO datos VALUES('$id', '$nombre', '$apellido', '$telefono')";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index.php");
};

?>