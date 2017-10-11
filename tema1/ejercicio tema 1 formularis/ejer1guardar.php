
<?php  if (! isset($_POST['submit'])) { ?>
  <!DOCTYPE html>
  <form action="ejer1guardar.php" method="post">
     <p> nombre Completo: <input type="text" name="nombre" /></p>
     <p>edad: <input type="text" name="edad" /></p>
     <p>email: <input type="text" name="email" /></p>
     <p><input type="radio" name="gender" value="hombre">hombre</input></p>
     <p><input type="radio" name="gender" value="mujer">mujer</input></p>
     <h2>Aficiones</h2>
     <p><input type="checkbox" name="deporte" value="| DEPORTE">DEPORTE </input>
     <p><input type="checkbox" name="aficio" value="| CINE">CINE </input></p>
     <p><input type="checkbox" name="musica" value="| MUSICA ">MUSICA</input></p>
     <p><input type="checkbox" name="tv" value="| TV "> TV </input></p>
     <p><input type="checkbox" name="video_juegos" value="| VIDEO JUEGOS">VIDEO JUEGOS </input></p>
     <p><input type="submit" value="Submit" name="submit"  /></p>
  </form>
    <p>
  <?php } ?>
      <?php  else { ?>
              <html>
                <head>
                  <meta charset="utf-8">
                  <title>Ejer1</title>
                </head>
                <body>
                    <table>
                      <tr>
                        <th>Nombre</th>
                        <th>edad</th>
                        <th>Email</th>
                        <th>Sexe</th>
                        <th>Aficiones</th>
                      </tr>
                      <tr>
                        <td><?php echo $_POST[nombre]; ?></td>
                        <td><?php echo $_POST[edad]; ?></td>
                        <td><?php echo $_POST[email]; ?></td>
                        <td><?php echo $_POST[gender]; ?></td>
                        <td><?php echo $_POST[aficio];
                            echo $_POST[deporte];
                            echo $_POST[musica];
                            echo $_POST[tv];
                            echo $_POST[video_ juegos]; ?></td>
                      </tr>
                    </table>
              <style media="screen">
              	table, th, td {
              	  border: 1px solid black;
              	  border-collapse: collapse;
              	}
              	</style>

                </body>
              </html>


      <?php } ?>
