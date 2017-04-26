<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="./css/estilos.css">
  </head>
  <body>
    <div>
      <h2>Login</h2>
      <form method="post" action="seguridad.php">
        <label for="user">Usuario</label>
        <input type="text" id="user" name="usuario" placeholder="Tu usuario..">

        <label for="pass0">Contraseña</label>
        <input type="password" id="pass0" name="pass0" placeholder="Contraseña..">

        <input type="hidden" name="accion" value="login">

        <input type="submit" value="Login">
      </form>
    </div>
  </body>
</html>
