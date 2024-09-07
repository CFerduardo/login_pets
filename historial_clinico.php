<?php 
    include "cabecera.php"

?>

    <br/>
    <div class="card">
        <div class="card-header">
            Ficha
        </div>
        <div class="card-body">
        <form action="historial_clinico.php" method="post">
            Nombre de la Mascota: <input class="form-control" type="text" name="nombre" id="">
            <br/>
            Imagen de la Mascota: <input class="form-control" type="file" name="archivo" id="">
            <br/>
    
            <input class="btn btn-success" type="submit" value="Cargar Ficha">
        </form>    
        </div>
    </div>

<?php include "pie.php"?>