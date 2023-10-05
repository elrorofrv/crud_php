<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud en php y mysql </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/100a9990f2.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center p-3">FORMULARIO </h1>
    <div class="containe-fluid row">

    <form class="col-4 p-3" method="POST" action="" >
        <h3 class="text-center text secondary">Registro de persona</h3>
        <?php 
        include "modelo/conexion.php";
        include "controlador/registro_persona.php";
        
        ?>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
        <input type="text" class="form-control" name="nombre">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">apellido de la persona</label>
        <input type="text" class="form-control" name="apellido">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
        <input type="text" class="form-control" name="dni">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">fecha de nacimiento</label>
        <input type="date" class="form-control" name="fecha_nac">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> correo </label>
        <input type="text" class="form-control" name="correo">
    </div>

    <button type="submit" class="btn btn-primary"name= "btnregistrar" value="ok">registrar</button>
    </form>
    <div class="col-8 p-4">
    <table class="table">
      <thead class="bg-info"> 
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombres </th>
          <th scope="col">Apellidos</th>
          <th scope="col">DNI</th>
          <th scope="col">Fecha de nacimiento</th>
          <th scope="col">Correo</th>
          <th scope="col"></th>
        </tr>
      </thead>
  <tbody>
    <?php
      include "modelo/conexion.php";
      $sql=$conexion->query(" select * from persona");
      while($datos=$sql->fetch_object()){ ?>
        <tr>
            <td><?= $datos->id_persona ?></td>
            <td><?= $datos->nombre ?></td>
            <td><?= $datos->apellido ?></td>
            <td><?= $datos->dni ?></td>
            <td><?= $datos->fecha_nac ?></td>
            <td><?= $datos->correo ?></td>
            
            <td>
              <a href="modificar_persona.php?id=<?= $datos->id_persona ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
              <a href="" class="btn-btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
    <?php }
    ?>
                     
  </tbody>
  </table>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>-->
</body>
</html>