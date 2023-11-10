<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $sec_name = $_POST["sec-name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Dirección de correo de destino
    $to = "agusfrench2018@gmail.com";

    // Asunto del correo
    $subject = "Mensaje de contacto de $name $sec_name";

    // Contenido del correo
    $message_body = "Nombre: $name $sec_name\n";
    $message_body .= "Teléfono: $phone\n";
    $message_body .= "Correo Electrónico: $email\n";
    $message_body .= "Mensaje:\n$message";

    // Encabezados del correo
    $headers = "From: $email";

    // Envía el correo
    mail($to, $subject, $message_body, $headers);

    // Redirige a una página de confirmación
    header("Location: confirmacion.html");
} else {
    // Si se accede directamente al archivo PHP, redirige a la página de contacto
    header("Location: contacto.html");
}
?>
