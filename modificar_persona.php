<?php 

include"modelo/conexion.php";

$id=$_GET["id"];
$sql=$conexion->query("select * from persona where id_persona=$id")


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/100a9990f2.js" crossorigin="anonymous"></script>
</head> 
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST" >
    <h3 class="text-center text secondary">Modificar registro de persona</h3>
    <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
    <?php 
    include "controlador/modificar_persona.php";
    while($datos=$sql->fetch_object()) { ?> 

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
        <input type="text" class="form-control" name="nombre"value="<?= $datos->nombre ?>">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">apellido de la persona</label>
        <input type="text" class="form-control" name="apellido"value="<?= $datos->apellido ?>">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
        <input type="number" class="form-control" name="dni"value="<?= $datos->dni ?>">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">fecha de nacimiento</label>
        <input type="date" class="form-control" name="fecha_nac"value="<?= $datos->fecha_nac ?>">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> correo </label>
        <input type="text" class="form-control" name="correo"value="<?= $datos->correo ?>">
    </div>
        
    <?php }
    ?>


    <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar persona </button>
    </form>
</body>
</html>