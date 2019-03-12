<?php
  $mail="comercial@pineapp.co";
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $mensaje = $_POST["mensaje"];
  $thank="index-3.html";
  $message = "
  nombre:".$nombre."
  email:".$email."
  phone:".$phone."
  mensaje:".$mensaje."";
  if (mail ($mail,"contactenos",$message)) Header ("location: $thank" );
  ?>
