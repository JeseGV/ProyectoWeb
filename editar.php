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
      <aside>
        <ul>
          <li><h2><a href="index.php">Contactos</a></h2></li>
          <li><h2><a href="agregar.php">Agregar</a></h2></li>
          <li><h2><a href="quitar.php">Eliminar</a></h2></li>
          <li><h2><a href="editar.php">Editar</a></h2></li>
        </ul>
      </aside>
      
        <div class="texto">
            <section>
                <form action="editarsql.php" method="POST">
                <table align="center">
			    <?php
			    $id = $_GET['id'];
			    $mysqli = new mysqli('localhost', 'root', '', 'contactos');
			    $mysqli->set_charset("utf8");
		    	$query = $mysqli->query("SELECT * FROM personas WHERE id_Contacto='".$id."'");
		    	$dat = $query->fetch_object();
		    	echo "<tr><td>Contacto</td><td>
				<input name='idcontacto' type='text' value='".$dat->id_Contacto."' readonly></td></tr> 
				<tr><td>Nombre</td><td><input type='text' name='nombre' value='".$dat->Nombre."'></td></tr>
				<tr><td>Teléfono</td><td><input type='tel' name='telefono' value='".$dat->Número."'></td></tr>
				<tr><td><input type='submit'></td><td><input type='reset'></td></tr>";
		    	?>
			    </table>
                </form>  
            </section>
        </div>
    <marquee>
		    <h2>INSTITUTO TECNOLÓGICO DE CHIHUAHUA II</h2>
    </marquee>
  </body>
</html>