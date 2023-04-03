<?php
include("connection.php");

$con = connection();
$sql = "SELECT * FROM datos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="insert.php" method="POST">

        <h1>CRUD MYSQL</h1>
            
            <input type="text" name="nombre">
            <input type="text" name="apellido">
            <input type="text" name="telefono">

            <input type="submit" value="Agregar">
        </form>
    </div>

    <div>
        <h1>Usuarios regsitrados</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefonos</th>
                    <th></th>
                <th></th>
                </tr>
            </thead>
            <?php while($row = mysqli_fetch_array($query)):?>

            <tbody>
            <tr>
                <th><?= $row['id'] ?></th>
                <th><?= $row['nombre'] ?></th>
                <th><?= $row['apellido'] ?></th>
                <th><?= $row['telefono'] ?></th>
                

                <th><a href="updatepagina.php?id=<?= $row['id'] ?>">Editar</a></th>
                <th><a href="eliminar.php?id=<?= $row['id'] ?>">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>

        </table>
    </div>
</body>
</html>