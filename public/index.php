<?php
// Bloque de configuración principal

// Paso 3: Creación de Variables y Constantes

// Constante para el nombre del sitio
define("SITE_NAME", "TaskFlow");

// Variable para el título de la página actual
$pageTitle = SITE_NAME . " - Página de Inicio";

// Variables para simular los datos de un perfil de usuario
$userName = "Alejandro Murga";  // Tipo String - personalizado con tu nombre
$userAge = 20;                  // Tipo Integer
$isPremiumUser = true;          // Tipo Boolean
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
    <header>
        <h1>Bienvenido a <?php echo SITE_NAME; ?></h1>
    </header>

    <main>
        <h2>Perfil del Usuario</h2>
        <p><strong>Nombre:</strong> <?php echo $userName; ?></p>
        <p><strong>Edad:</strong> <?php echo $userAge; ?> años</p>
        <p><strong>Estado de la cuenta:</strong> Usuario <?php echo $isPremiumUser ? "Premium" : "Estándar"; ?></p>

        <!-- Enlaces rápidos a las páginas de ejercicios -->
        <section style="margin-top:1em;">
            <h3>Ejercicios</h3>
            <ul>
                <li><a href="/public/problemas.php">Batería de Problemas (problemas.php)</a></li>
                <li><a href="/public/desafios.php">Desafíos (desafios.php)</a></li>
            </ul>
        </section>
    </main>
</body>
</html>
