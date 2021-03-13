<?php
    $destinatario= 'bprogram2000@gmail.com';
    $nombre =$_POST['nombre'];
    $email =$_POST['email'];
    $telefono =$_POST['telefono'];

    $profesor =$_POST['nombreProf'];
    $comentario =$_POST['mensaje'];

    $header="Enviado desde la pagina Critica UNMSM";
    
    $mensajeCompleto=$comentario."\n De parte: ".$nombre."\n Email: ".$email."\n telefono: ".$telefono;
    $asunto="Comentario sobre el profesor(a): ".$profesor;
    mail($destinatario,$asunto,$mensajeCompleto, $header);

    echo"<script>alert('Enviado exitosamente')</script>";
    echo"<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>
    
    