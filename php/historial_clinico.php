<?php 
    include "cabecera.php";
    include "conexion.php";

    if ($_POST) {
        //Capturar datos
        $cedula = $_POST['cedula'];
        $propietario = $_POST['propietario'];
        $mascota = $_POST['mascota'];
        $imagen = $_FILES['imagen']['name'];
        $historial = $_POST['historial'];

        // No sobrescribir si es la misma imagen 
        $fecha = new DateTime();

        $imagen = $fecha->getTimestamp()."_".$_FILES['imagen']['name'];

        $imagen_temporal = $_FILES['imagen']['tmp_name'];
        move_uploaded_file($imagen_temporal,"img/".$imagen);
        //////////////////////////////////////////

        $obj_conexion = new Conexion();
        $sql = "INSERT INTO `historial` (`id`, `cedula`, `propietario`, `mascota`, `imagen`, `historial`) VALUES (NULL, '$cedula', '$propietario', '$mascota', '$imagen', '$historial');";
        $obj_conexion->ejecutar($sql);
        header("location:historial_clinico.php");
    }

    if ($_GET) {
        //Pasar el ID
        $id = $_GET['borrar'];
        $obj_conexion = new Conexion();

        //Borrar la img
        $imagen = $obj_conexion->consultar("SELECT imagen FROM `historial` WHERE id= $id"); 
        unlink("img/".$imagen[0]['imagen']);

        //Borrado en la base de datos 
        $sql = "DELETE FROM historial WHERE `historial`.`id` = $id";
        $obj_conexion->ejecutar($sql);
        header("location:historial_clinico.php");
    }

    $obj_conexion = new Conexion();                                                 //Instanciado
    $resultado = $obj_conexion->consultar("SELECT * FROM `historial`");             //Ejecuta el metodo resultado, y returna resultado


?>

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!--ficha-->
                <div class="card">
                    <div class="card-header">
                        Ficha
                    </div>
                    <div class="card-body">
                    <form action="historial_clinico.php" method="post" enctype="multipart/form-data">
                        Cédula: <input class="form-control" type="text" name="cedula" id="" required>
                        <br/>
                        Nombre del Propietario: <input class="form-control" type="text" name="propietario" id="" required>
                        <br/>
                        Nombre de la Mascota: <input class="form-control" type="text" name="mascota" id="" required>
                        <br/>
                        Imagen: <input class="form-control" type="file" name="imagen" id="" required>
                        <br/>
                        Historial: <textarea class="form-control" name="historial" id="" rows="3" required></textarea>
                        <br/>
                        <input class="btn btn-success" type="submit" value="Cargar Ficha">
                    </form>
                </div>
                <div class="card-footer text-muted">Footer</div>    
                </div>
            </div>
            <div class="col-md-7"> 
                <!--tabla del historial-->
                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Cédula</th>
                                <th scope="col">Nombre del Propietario</th>
                                <th scope="col">Nombre de la Mascota</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Historial</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($resultado as $consulta):?>
                            <tr>
                                <td><?=$consulta['id'] ?></td>
                                <td><?=$consulta['cedula']?></td>
                                <td><?=$consulta['propietario']?></td>
                                <td><?=$consulta['mascota']?></td>
                                <td>
                                    <img width="100" src="img/<?=$consulta['imagen']?>" alt="">    
                                </td>
                                <td><?=$consulta['historial']?></td>
                                <td><a class="btn btn-danger" href="?borrar=<?=$consulta['id']?>">Eliminar</a></td>
                            </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



<?php include "pie.php"?>