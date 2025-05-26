<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Estrenos más recientes en el cine</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Cine mgarleo1202</h1>
  <div class="cartelera">
    <?php
      $peliculas = json_decode(file_get_contents("peliculas.json"), true);
      foreach ($peliculas as $index => $peli) {
        // Extraer ID de YouTube
        preg_match('/v=([a-zA-Z0-9_-]+)/', $peli["trailer"], $matches);
        $embedId = $matches[1] ?? '';

        echo "<div class='pelicula'>";
        echo "<h2>{$peli["titulo"]}</h2>";
        echo "<img src='{$peli["imagen"]}' alt='{$peli["titulo"]}' />";

        echo "<p>{$peli["descripcion"]}</p>";
        echo "<button onclick=\"mostrarTrailer('$embedId')\">Ver trailer</button>";
        echo "</div>";
      }
    ?>
  </div>

  <!-- Modal -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <span class="cerrar" onclick="cerrarModal()">&times;</span>
      <iframe id="trailerFrame" width="100%" height="400" src="" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
