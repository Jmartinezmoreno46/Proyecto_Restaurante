<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagina de Contacto</title>
    <!--Icon-Font-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="./menu.css">
    <link rel="stylesheet" href="./reservas.css">
    <link rel="stylesheet" href="./contacto.css">

    <!-- Archivos JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
   
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script src="./reservas.js"></script>

    
</head>
<body>

<div class="container">
            <nav class="navbar navbar-expand-md  navbar-dark">
            <a class="navbar-brand" href="#">Shangri la</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link" href="./VistaCliente.php">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./contacto.php">Contacto</a>
                </li>
                <li class="nav-item">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reservaModal">
                  Reservar mesa
                </button>                
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./login.php">Admin</a>
                </li>
            </ul>
            </div>
        </nav>
      </div>

      <div class="contenedor">
            <div class="container-form">
                <div class="info-form">
                    <h2>Contáctanos</h2>
                    <p>Shangri La es un restaurante que se caracteriza por escuchar a sus clientes quienes son su motivo de ser.
                    Déjanos saber tu opinión y contáctanos cualquier inquietud sobre nuestros servicios </p>
                    <a href="#"><i class="fa fa-phone"></i> 123-456-789</a>
                    <a href="#"><i class="fa fa-envelope"></i> shangril64@gmail.com</a>
                    <a href="#"><i class="fa fa-map-marked"></i> Monteria, Colombia</a>
                </div>
                <form action="#" autocomplete="off">
                    <input type="text" name="nombre" placeholder="Tu Nombre" class="campo">
                    <input type="email" name="email" placeholder="Tu Email" class="campo">
                    <textarea name="mensaje" placeholder="Tu Mensaje..."></textarea>
                    <input type="submit" name="enviar" value="Enviar Mensaje" class="btn-enviar">
                </form>
            </div>
        </div>

    <div class="modal fade" id="reservaModal" tabindex="-1" role="dialog" aria-labelledby="reservaModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="reservaModalLabel">Reservar mesa</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form id="reservaform">
                    <div class="form-group">
                      <label for="nombre">Nombre:</label>
                      <input type="text" class="form-control" id="nombre" name="nombre_cliente" placeholder="Ingrese su nombre">
                    </div>
                    <div class="form-group">
                      <label for="telefono">Teléfono:</label>
                      <input type="tel" class="form-control" id="telefono" name="telefono_cliente" placeholder="Ingrese su teléfono">
                    </div>
                    <div class="form-group">
                      <label for="fecha">Fecha:</label>
                      <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Ingrese la fecha de reserva">
                    </div>
                    <div class="form-group">
                      <label for="hora">Hora:</label>
                      <input type="time" class="form-control" id="hora" name="hora" placeholder="Ingrese la hora de reserva">
                    </div>

                    <div class="form-group">
                      <label for="cantidad_personas">Cantidad de personas:</label>
                      <input type="number" class="form-control" id="cantidad_p" name="cantidad_p" required>
                    </div>


                    <div class="form-group">
                      <label for="mesa">Mesa:</label>

                      <select class="form-control" name="mesa_id">
                        <option value="1">Mesa 1</option>
                        <option value="2">Mesa 2</option>
                        <option value="3">Mesa 3</option>
                        <option value="4">Mesa 4</option>
                        <option value="5">Mesa 5</option>
                      </select>
                    </div>

                    
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary" onclick="guardar()">Reservar</button>
                </div>
                </form>
              </div>
            </div>
          </div>
</div>
    <footer>
            <p>Derechos reservados &copy; 2023</p>
      </footer>
</body>

</body>
</html>