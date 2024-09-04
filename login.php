<?php ?>

<!doctype html>
<html lang="en">
    <head>
        <title>Login_Pets</title>
        <!-- Required meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta charset="utf-8" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
        <link rel="sohrtcut icon" href="./img/images.png">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <br/>
                    <div class="card">
                        <div class="card-header">Datos de la Mascota</div>
                        <div class="card-body">
                            <form action="login.php" method="post">
                                Nombre: <input class="form-control" type="text" name="nombre">
                                <br/>
                                Sexo: <input class="form-control" type="text" name="sexo">
                                <br/>
                                Especie: <input class="form-control" type="text" name="especie">
                                <br/>
                                Raza: <input class="form-control" type="text" name="raza">
                                <br/>
                                Edad: <input class="form-control" type="number" name="edad">
                                <br/>
                                Color de Pelo: <input class="form-control" type="text" name="color">
                                <br/>
                                Peso: <input class="form-control" type="text" name="peso">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 offset-md-4">
                    <br/>
                    <div class="card">
                        <div class="card-header">Datos del Representante</div>
                        <div class="card-body">
                            <form action="login.php" method="post">
                                Nombre y Apellido: <input class="form-control" type="text" name="usuario">
                                <br/>
                                Cédula: <input class="form-control" type="number" name="cedula">
                                <br/>
                                teléfono: <input class="form-control" type="text" name="telefono">
                                <br/>
                                Dirección: <input class="form-control" type="text" name="direccion">
                                <br/>
                                <button class="btn btn-success" type="submit">Ingresar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
