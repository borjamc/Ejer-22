<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar sesion</title>
  </head>
  <body>
    <form method="post" action="seguridad.php">
      Usuario:
      <input type="text" name="usuario" value=""><br>
      Contraseña:
      <input type="password" name="contrasenya" value=""><br>

      <input type="hidden" name="accion" value="login">

      <input type="submit" value="Login">
      <form/>
  </body>
</html>
