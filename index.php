<?php
$connection=mysqli_connect('localhost', 'root', 'root', 'COMENTARIOS')or die("mysql muere");
$resultado=$connection->query("SELECT texto FROM comentario");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Comentarios</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <meta charset="UTF-8">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</head>

<body>
<div id="contenido">
<header><h1>Comentarios</h1></header>
<textarea placeholder="aqui se escribe" id="comentarios"></textarea>
<button id="enviar">enviar</button>


<div id="comentarios-escritos">
    <?php

    while($arrayResultado=mysqli_fetch_array($resultado));
    echo "<div class='comentario-enviado'>
<span class='fecha'>".date("H:i:s")."</span>
<span class='texto'> $arrayResultado[0]</span>
<img src='http://www.aryan.es/img/boton_borrar_soluciones.jpg' class='eliminar-comentario'>
</div>";
    ?>
</div>
</div>
</body>
</html>
