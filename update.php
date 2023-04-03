<?php

include("connection.php");
$con = connection();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];

$sql = "UPDATE datos SET nombre='$nombre', apellido='$apellido', telefono='$telefono' WHERE id='$id' ";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index.php");
}else{

}


?>