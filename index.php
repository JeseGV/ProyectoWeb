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
        <section>
          <div class="titulo">
          </div>
          <div class="texto">
          <table>
			<tr><th >Id Contacto</th><th>Nombre</th><th>Numero</th></tr>
                <?php
					$mysqli = new mysqli('localhost', 'root', '', 'contactos');
					$mysqli->set_charset("utf8");
					$query = $mysqli->query("SELECT * FROM personas");
					while($dat = $query -> fetch_object()){
						echo "<tr><td>".$dat->id_Contacto."</td><td>".$dat->Nombre.
						"</td><td>".$dat->Número."</td></tr>";
					}
			    ?>
            </table>    
          </div>
        </section>
    </div>
  </body>
</html>