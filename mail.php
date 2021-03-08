<?php
  $destino="valenciaruben@gmail.com";
  $asunto="Enviado desde https://keen-kilby-f47203.netlify.app";
  $nombre=$_POST['nombre'];
  $correo=$_POST['email'];
  $mensaje=$_POST['mensaje'];
  $contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
  if(mail($destino,$asunto,$contenido)){
    echo "Correo enviado... ";
  }else{
    echo "No enviado. Intente más tarde... ";
  }
  //echo "<a onclick='javascript:mywindow.close();' href='https://guadalupanolasalle.edu.co'>Regresar</a>";
?>
