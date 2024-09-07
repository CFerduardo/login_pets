<?php
    if ($_POST){
        if ($_POST["nombre"]=="pancho" && [$_POST["especie"]=="gato"] && [$_POST["sexo"]=="masculino"] && [$_POST["raza"]=="gato"] && [$_POST["edad"]=="5"] && [$_POST["peso"]=="10"] [$_POST["color"]=="negro"]){
            header("location:index.php");
        }else{
          echo "<script> alert('no encontrado)</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
      <link rel="sohrtcut icon" href="./img/IMG-20240905-WA0018.jpg">
      <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/> -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
  </head>
  <body>
      <!--Sección: Bloque de Diseño-->
      <section class="">
          <!-- Jumbotron -->
          <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container">
            <div class="row gx-lg-5 align-items-center">
              <div class="col-lg-6 mb-5 mb-lg-0">
                <h1 class="my-5 display-3 fw-bold ls-tight">Ofrecemos los mejores servicios
                  <br />
                  <span class="text-primary">Para tu mascota 🐾</span>
                </h1>
                <p style="color: hsl(217, 10%, 50.8%)">Registra tu mascota para saber su historial, si no estas registrado ingresa y goza del mejor servicio</p>
              </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
              <div class="card">
              <div class="card-header">Datos de la mascota</div> 
              <div class="card-body py-5 px-md-5">

                <form><!-- 1 diseño de cuadrícula de columnas con entradas de texto para el nombre y apellido -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" name="nombre" required/>
                          <label class="form-label" for="form3Example1">Nombre</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example2" class="form-control" name="especie" required/>
                          <label class="form-label" for="form3Example2">Especie</label>
                      </div>
                    </div>
                  </div>

                  <!-- 2 diseño de cuadrícula de columnas con entradas de texto para el sexo y raza -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" name="sexo" required/>
                        <label class="form-label" for="form3Example1">Sexo</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example2" class="form-control" name="raza" required/>
                        <label class="form-label" for="form3Example2">Raza</label>
                      </div>
                    </div>
                  </div>

                  <!-- 3 diseño de cuadrícula de columnas con entradas de texto para la edad y color de pelo -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" name="edad" required/>
                        <label class="form-label" for="form3Example1">Edad</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example2" class="form-control" name="color" required/>
                        <label class="form-label" for="form3Example2">Color de Pelo</label>
                      </div>
                    </div>
                  </div>

                  <!-- 4 diseño de cuadrícula de columnas con entradas de texto para el color de pelo -->
                  <!-- <div class="col-md-6 mb-4">
                    <input type="text" id="form3Example2" class="form-control" name="peso" required/>
                    <label class="form-label" for="form2Example2">Peso</label>
                  </div> -->

                  <!-- Submit button -->
                  <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-block justify-content-center mb-4">
                    Enviar
                  </button>

                  <!-- Register buttons -->
                  <div class="text-center">
                    <p>Síguenos o Comunícate con nosotros en:</p>
                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                        <i class="ins in-instagram -i">
                          <a href="https://www.instagram.com/mascoti.ve?igsh=MWh5bm84YWhxOHVhZA==">#</a>
                        </i>
                      </button>

                      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google">b</i>
                      </button>

                      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter">c</i>
                      </button>

                      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github">d</i>
                      </button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-muted">Footer</div>
              </div>
            </div>
            </div>
            </div>
          </div>
      </section>
  <!-- Section: Design Block -->
  </body>
</html>