<?php

    $destinatario = 'josegorm@hotmail.com';

    $nombre =$_POST['nombre'];
    $email= $_POST['email'];
    $mensaje=$_POST['mensaje'];

    $header = "Enviado desde la pagina Peluqueria Natural Look";
    $mensajeCompleto = $mensaje. "\nAtentamente: " . $nombre;

    mail($destinatario, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    


?>