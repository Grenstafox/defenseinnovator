<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $Genero = $_POST["genero"];
    $mensaje = $_POST["mensaje"];
    $para = "siltuzardo@gufum.com"; // Reemplaza con la dirección de correo de destino
    $asunto = "Mensaje de contacto de $nombre";

    $cabeceras = "From: $email\r\n";
    $cabeceras .= "Reply-To: $email\r\n";
    $cabeceras .= "X-Mailer: PHP/" . phpversion();

    if (mail($para, $asunto, $mensaje, $cabeceras)) {
        echo "El correo se ha enviado con éxito.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>