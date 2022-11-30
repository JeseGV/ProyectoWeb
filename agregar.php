<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="style-musica.css" />
    <header align="center">
      <h1 class="head"><tt>CONTACTOS</tt></h1>
    </header>
    <title>Contactos</title>
  </head>
  <body class="infogra">
    <div>
      <aside>
        <ul>
          <li><h2><a href="index.php">Contactos</a></h2></li>
          <li><h2><a href="agregar.php">Agregar</a></h2></li>
          <li><h2><a href="eliminar.php">Eliminar</a></h2></li>
          <li><h2><a href="editar.php">Editar</a></h2></li>
        </ul>
      </aside>
      <div class="contenido">
          <div class="titulo">
          </div>
          <div class="texto">
          <section>
            <form action="agregarsql.php" method="POST">
                <table>
                <tr><td>Nombre</td><td><input type="text" name"nombre"></td></tr>
			    <tr><td>Número</td><td><input type="tel" name"telefono"></td></tr>
			    <tr><td><input type="submit"></td><td><input type="reset"></td></tr>
                </table>
            </form>   
        </section>
        </div>
    </div>
  </body>
</html>