<?php
 
 if($_POST)
  {
   // Correo al que queremos que llegue
    $destinatario = "pelleranogiovanni@hotmail.com";
   // Asunto
   $asunto = "Email de prueba del Tutorial PHP 7";
   // Mensaje
    $mensaje = "Hola, este email es una prueba del Tutorial PHP 7. Los datos anexos al email son: <br><br> 
         Nombre: ".$_POST['form-name']."<br>
          email: ".$_POST['form-email']."<br>
          Asunto: ".$_POST['form-subject']."<br>
          Teléfono: ".$_POST['form-phone']."<br>
          Mensaje: ".$_POST['form-message']."<br><br>

          Saludos!";
    // Cabeceras
    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
     $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
     $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     // Cabeceras adicionales
      $cabeceras .= 'To: TU NOMBRE <TU_CORREO_AQUI@gmail.com>' . "\r\n";
      $cabeceras .= 'From: Tutorial PHP 7 <tutorial@tutorialphp.net>' . "\r\n";
   // Enviamos el email




    if(@mail($destinatario, $asunto, $mensaje, $cabeceras))
   {
    //    echo "El email se envió correctamente a ".$destinatario.".";
        header('Location:mensaje.html');
    }
   else{
       echo "El email no se pudo enviar.";
   }


  }

?>