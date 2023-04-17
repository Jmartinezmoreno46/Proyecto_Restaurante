<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login | Shangri La</title>
   <link rel="stylesheet" href="./login.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="reservas.css">
    <link rel="stylesheet" href="menu.css">

    <!-- Archivos JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
  </head>
  <body>  

  <nav class="navbar navbar-expand-md  navbar-dark">
            <a class="navbar-brand" href="#">Shan Grila</a>
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

      <div class="Todo">
        <div class="login-contenedor">
            <form id="logueo">
                <h1>INICIO DE SESIÓN</h1>
                <div class="logo"><img src="./dragon.png" alt=""></div>
                <label for="username">Usuario</label>
                <input type="text" id="usuario" name="usuario" placeholder="@ " required>
                <label for="password">Password</label>
                <input type="password" class="input" id="Pass" name="Pass" required>
                <button  type="button" onclick="guardarU()">Login</button>
            </form>
        </div>
    </div>

    <script src="./usuario.js"></script>

  </body>
</html>