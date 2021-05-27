<!DOCTYPE html>
<html lang='es'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
  <link rel="stylesheet" href="./librerias/css/bootstrap.css">
  <link rel="stylesheet" href="./librerias/fontawesome/css/all.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Colores</title>
</head>

<body>

  <div class="container mt-4">
    <div class="row justify-content-center mt-4">


      <div class="col col-sm-4 p-4 shadow">

        <div class="alert alert-light" role="alert">
          <form class="form-control">
            <div>
              <h1 class="mt-3 text-center" style="font-family: monospace;">Traductor de Colores <i class="fa fa-palette"></i></h1>
            </div>

            <hr>
            <div class="form-group ">
              <label for="color">Escribe un color:</label>
              <input type="text" class="form-control" name="color" id="color" aria-describedby="helpId" placeholder="" autocomplete="off">
            </div>
          </form>
          <div class="container">
            <div class="row">
              <div class="col">

                <div class="text-center mt-3" style="font-family: monospace;">
                  <span class="btn btn-info w-100" id="btn_traducir">Traducir</span>
                </div>

              </div>
              <div class="col">
                <div class="text-center mt-3" style="font-family: monospace;">
                  <span class="btn btn-dark w-100" id="btn_limpiar">Limpiar</span>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-2 justify-content-center">
      <div class="col col-sm-4 p-4">
        <div id="mostrar_color">
        </div>
      </div>
    </div>
  </div>

</body>

</html>
<script src="./librerias/js/jquery/jquery.js"></script>
<script src="./librerias/js/b4/bootstrap.js"></script>
<script src="./manager/control_colores.js"></script>
<script src="./librerias/swal/sw.js"></script>