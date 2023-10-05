<?php 



if (!empty($_POST["btnregistrar"])) {
     // Agrega var_dump para verificar los datos recibidos por POST
    //var_dump($_POST);
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha_nac"]) and !empty($_POST["correo"])){

    
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha_nac=$_POST["fecha_nac"];
        $correo=$_POST["correo"];

        $sql = $conexion->query("INSERT INTO persona(nombre,apellido,dni,fecha_nac,correo) VALUES ('$nombre','$apellido','$dni','$fecha_nac','$correo')");

        if ($sql==1) {
            echo '<div class="alert alert-success">Persona registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar persona: ' . $conexion->error . '</div>';
        }
        
    }else{ echo '<div class="alert alert-warning">Algunos de los campos están vacios</div>';
    }
}

?>