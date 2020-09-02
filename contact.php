<? php
if (isset($_POST['submit'])) {
    //ini_set( 'display_errors', 1 ); # REMOVE // FOR DEBUG
    //error_reporting( E_ALL ); # REMOVE // FOR DEBUG
    $from = "wliz2726@gmail.com"; // Email con el dominio del Hosting para evitar SPAM
    $fromName = "Webstore"; // Nombre que saldrá en el email recibido
    $to = "info@westore.do"; // Dirección donde se enviará el formulario
    $subject = "Solicitud de Cliente"; // Asunto del Formulario

    /* Componemos el mensaje */
    $fullMessage = "Hola! " . $to . "\r\n";
    $fullMessage .= $_POST['validarNombre'] . " " . " te ha enviado un mensaje:\r\n";
    $fullMessage .= "\r\n";
    $fullMessage .= "Nombre: " . $_POST['validarNombre'] . "\r\n";
    $fullMessage .= "E-Mail: " . $_POST['validarEmail'] . "\r\n";
    $fullMessage .= "Teléfono: " . $_POST['validarTelefono'] . "\r\n";
    $fullMessage .= "Asunto: " . "Solicitud de Cliente" . "\r\n";
    $fullMessage .= "Mensaje: " . $_POST['validationMensaje'] . "\r\n";
    $fullMessage .= "Enviado el " . date('d/m/Y', time());
    $fullMessage .= "\r\n";
    $fullMessage .= "Saludos!\r\n";

    /* Creamos las cabeceras del Email */
    $headers = "Organization: Webstore\r\n";
    $headers .= "From: " . $fromName . "<" . $from . ">\r\n";
    $headers .= "Reply-To: " . $_POST['validarEmail'] . "\r\n";
    $headers .= "Return-Path: " . $to . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

    

    
}
?>