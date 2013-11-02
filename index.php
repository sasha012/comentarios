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
<h1>Comentarios</h1>
<textarea placeholder="aqui se escribe" id="comentarios"></textarea>
<button id="enviar">enviar</button>
<?php
$arrayResultado=mysqli_fetch_array($resultado);
?>
<div id="comentarios-escritos"></div>
</body>
</html>
