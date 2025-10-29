<?php
$termino = "Ningún término introducido";

if (isset($_GET['termino_busqueda'])) {
    $valor = trim($_GET['termino_busqueda']);
    $termino = $valor === '' ? $termino : htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de la búsqueda</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; background-color: #f1f5f9; }
        h1 { color: #0f172a; }
        p { font-size: 1.1rem; color: #1e293b; }
        a { display: inline-block; margin-top: 1rem; color: #1d4ed8; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Resultado de la búsqueda</h1>
    <p>Has buscado: <strong><?php echo $termino; ?></strong></p>
    <a href="busqueda_get.html">Volver al formulario</a>
</body>
</html>
