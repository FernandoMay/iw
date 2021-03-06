<?php
    $server = "localhost";
    $username = "root";
    $database = "iwdatos";
    $password = "";

    $enlace = mysqli_connect($server,$username,$password,$database);

    if(!$enlace){
        // echo("Connection failed: "mysqli_connect_error());
        echo("Error al conectar a la db");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Formulario 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="p6.css">
</head>

<body>
    <header>
        <div class="container text-center">
            <h1 class="display-3">Déjanos tus datos de contacto</h1>
        </div>
    </header>
    <div class="color2 container">
        <br>
        <form role="form">
            <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico: </label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono: </label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            <input type="submit" class="btn btn-primary btn-lg active" name="registro" value="Registro">
            <br>
        </form>
        <br>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
</body>
</html>

<?php
    if(isset($_POST['registro'])){
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];

        $insertardatos = "INSERT INTO iwdatos VALUES ('$nombre','$email,'$telefono')";
        $ejecutar = mysqli_query($enlace,$insertardatos);
        if(!$ejecutar){ echo "Error en sql"; }
        //mysqli_close($ejecutar);
    }
?>

