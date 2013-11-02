$(document).ready(function(){

    $("#enviar").on('click',function(){
        var texto=$("#comentarios").val();
        var fecha= new Date();
        var fechaComentario="<span class='fecha'>"+fecha.getHours()+":"+fecha.getMinutes()+":"+fecha.getSeconds()+"</span>";

        var divComentariosEscritos="<div class='comentario-enviado'>";
        var divCompleto=divComentariosEscritos+fechaComentario+" "+texto+"</div>";
        $("#comentarios-escritos").append(divCompleto);





    });








});