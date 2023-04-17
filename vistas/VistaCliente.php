
<?php



require_once "./configuracion/Conexion.php";

$sql = "SELECT  Nombre_P, Descripcion_P, Precio_P , imagen FROM plato";
$resultado = ejecutarConsulta($sql);

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Página de Inicio</title>

  
    <!-- Archivos CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" >
    <link rel="stylesheet" href="reservas.css">

    <!-- Archivos JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" ></script>
    <script src="./reservas.js" ></script>

    
    
  
    <style>

      .modal-header{
        background-color:  red;
        color: white;
      }
    .contenedor {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
        }

        .card {
          width: 100%;
          max-width: 200px;
          border: 1px solid #ccc;
          margin: 10px;
          padding: 10px;
          box-sizing: border-box;
        }

        .card-header {
          text-align: center;
        }

        .card-title {
          margin: 0;
          font-size: 16px;
        }

        .card-body {
          text-align: center;
        }

        .card-price {
          font-weight: bold;
          font-size: 18px;
          margin-bottom: 10px;
        }

        .card-img {
          width: 100px;
          height: 100px;
          object-fit: cover;
          margin-bottom: 10px;
        }

        .card-description {
          font-size: 14px;
        }

        .card-footer {
          text-align: center;
          margin-top: 10px;
        }

        @media screen and (max-width: 480px) {
          .card {
            max-width: 100%;
          }
          
          .card-body {
            display: flex;
            flex-direction: column;
          }

          .card-img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
          }
          
          .card-description {
            font-size: 12px;
          }
          
          .card-footer {
            margin-top: 20px;
          }
        }

        /* .card {
          width: 200px;
          margin: 20px;
          padding: 20px;
          justify-content: center;
          align-items: center;
          background-color: #fff;
          box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
          border-radius: 5px;
        }
        .card img {
          
          width: 100px;
          height: 100px;
          object-fit: cover;
          margin-bottom: 10px;
        }

        .card h2 {
          font-size: 1.5rem;
          margin: 0;
        }

        .card p {
          font-size: 1rem;
          margin: 10px 0;
        }

        .card span {
          font-size: 1.2rem;
          font-weight: bold;
          color: #ff8c00;
        }

        .card button {
          padding: 10px 20px;
          background-color: #ff8c00;
          color: #fff;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          transition: all 0.3s ease;
        }

        .card button:hover {
          background-color: #f70;
        } */
  </style>
  <link rel="stylesheet" href="menu.css">
  
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
                <a class="nav-link" href="../index.php">Ir a Admin</a>
                </li>
            </ul>
            </div>
        </nav>
      </div>
          <div>
            <h1 class="text-center">Bienvenidos a Shangri la</h1>
          </div>

          <!-- Modal de reserva -->
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

          <div class="contenedor">
                        <?php
                          // Mostrar los productos
                          while ($producto = mysqli_fetch_assoc($resultado)) {
                            ?>

                                <div class="card">
                                  <div class="card-header">
                                    <h2 class="card-title"><?php echo $producto['Nombre_P']; ?></h2>
                                  </div>
                                  <div class="card-body">
                                  <img src="<?php echo 'files/platos/'.$producto['imagen'].''; ?>"  alt="Imagen del plato" class="card-img">
                                    <p class="card-description"><?php echo $producto['Descripcion_P']; ?></p>
                                    <div class="card-price">$<?php echo $producto['Precio_P']; ?></div>
                                  </div>
                                  <div class="card-footer">
                                    <button class="btn btn-primary">Agregar al carrito</button>
                                  </div>
                                </div>
                            
                                <!-- <div class="card">
                                  <h2><?php echo $producto['Nombre_P']; ?></h2>
                                  <img src="<?php echo 'files/platos/'.$producto['imagen'].''; ?>" >
                                  <p><?php echo $producto['Descripcion_P']; ?></p>
                                  <span>$<?php echo $producto['Precio_P']; ?></span>
                                  <button>Agregar al carrito</button>
                                </div>        -->
                              
                            <?php
                            }
                            ?>
          </div>

    


        <!-- CDN de jQuery y Popper.js requeridos por Bootstrap -->

        
        <!-- CDN de Bootstrap -->

      <footer>
            <p>Derechos reservados &copy; 2023</p>
      </footer>

  
</body>
</html>

