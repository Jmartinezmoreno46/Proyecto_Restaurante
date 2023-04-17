<?php
session_start();
session_destroy();
header("Location: VistaCliente.php");
?>