
<!DOCTYPE html>
<html lang="es">

<head>
<link rel="apple-touch-icon" sizes="76x76" href="../Resource/img/UDG- VectorR.png">
 <link rel="icon" type="image/png" href="../Resource/img/UDG- VectorR.png">
    <meta charset="utf-8">

    <title>Sistema Acceso De Estudiantes</title>

    <link href="../Resource/css/login.css"  rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../Resource/css/demo/relojestilo.css">
  </head>

<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../Resource/img/LogoUni4.png"  alt="User Icon" style="width: 400px;"/>

      <h3></h3>
      <h3>Sistema Acceso Visitantes</h3>

      <!-- INICIO RELOJ -->
    <div class="container-clock" style="height: 72px;margin-bottom: 10px;">
      <h1 id="time">00:00:00</h1>
      <p id="date">date</p>
    </div>
    <script src="../Resource/js/plugins/clock.js"></script>
      <!-- FIN RELOJ -->

    </div>

    <!-- Login Form -->
    <?php require_once '../../Asistencia/Asistencia.php'?>
    <form action="#" method="POST">
      <input type="text" id="IngreseINE" class="fadeIn second" name="IngreseINE" required placeholder="Ingrese su INE">
      <input type="text" id="IngreseNombre" class="fadeIn second" name="IngreseNombre" placeholder="Nombres">
      <input type="text" id="IngreseApellidos" class="fadeIn second" name="IngreseApellidos" placeholder="Apellidos">
      <input type="text" id="IngreseEmail" class="fadeIn second" name="IngreseEmail" placeholder="E-mail">
      <input type="number" id="IngreseTele" class="fadeIn second" name="IngreseTele" placeholder="Teléfono">
      <select name="ATrabajo" id="ATrabajo" class="form-control " aria-label="Área de trabajo a la que va">
      <input type="submit" class="fadeIn fourth" value="Ingresar" name="enviar">
      
    </form>

    <!-- Remind Passowrd -->
    <label> ¿Eres administrador? </label>
    <div id="formFooter">
      <a class="underlineHover" href="loginAdmin.php">Iniciar sesión</a>
    </div>

  </div>
</div>

</body>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>