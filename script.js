$(document).ready(function(){

    $("#enviar").on('click',function(){
        var texto=$("#comentarios").val();
        var fecha= new Date();
        var fechaComentario="<span class='fecha'>"+fecha.getHours()+":"+fecha.getMinutes()+":"+fecha.getSeconds()+"</span>";
        var Eliminar="<img src='http://www.aryan.es/img/boton_borrar_soluciones.jpg' class='eliminar-comentario'>"
        var divComentariosEscritos="<div class='comentario-enviado'>";
        var divCompleto=divComentariosEscritos+fechaComentario+" "+texto+Eliminar+"</div>";
        $("#comentarios-escritos").append(divCompleto);
    });

    $("#comentarios-escritos").on('click', '.eliminar-comentario', function() {
        $(this).parent().remove();
    });








});