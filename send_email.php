<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  $destinatario = "info@edgehub.tech";
  $asunto = "Nuevo mensaje de tu sitio web";
  $cuerpo = "Correo electrónico: " . $email . "\n\nMensaje: " . $mensaje;
  $cabeceras = "From: " . $email . "\r\n" .
              "Reply-To: " . $email . "\r\n" .
              "X-Mailer: PHP/" . phpversion();

  if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
    echo "Correo enviado con éxito.";
  } else {
    echo "Error al enviar el correo.";
  }
}
?>