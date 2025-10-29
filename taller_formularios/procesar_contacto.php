<?php
$nombre = 'Nombre no proporcionado';
$email = 'Email no proporcionado';
$mensaje = 'Mensaje no proporcionado';

if (isset($_POST['nombre_contacto'])) {
    $valor = trim($_POST['nombre_contacto']);
    $nombre = $valor === '' ? $nombre : htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
}

if (isset($_POST['email_contacto'])) {
    $valor = trim($_POST['email_contacto']);
    $email = $valor === '' ? $email : htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
}

if (isset($_POST['mensaje_contacto'])) {
    $valor = trim($_POST['mensaje_contacto']);
    $mensaje = $valor === '' ? $mensaje : htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto recibido</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; background-color: #f1f5f9; }
        h1 { color: #0f172a; }
        p { font-size: 1.1rem; color: #1e293b; }
        .mensaje { margin-top: 1.5rem; padding: 1rem; border-radius: 6px; background-color: #e2e8f0; color: #1f2937; }
        a { display: inline-block; margin-top: 1rem; color: #1d4ed8; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>¡Gracias por contactar con TaskFlow!</h1>
    <p>Gracias por tu mensaje, <strong><?php echo $nombre; ?></strong> (<strong><?php echo $email; ?></strong>). Lo procesaremos pronto.</p>
    <div class="mensaje">
        <p>Hemos recibido tu mensaje correctamente. Nuestro equipo se pondrá en contacto contigo si es necesario.</p>
    </div>
    <a href="contacto_post.html">Volver al formulario</a>
</body>
</html>
