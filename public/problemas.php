<?php
// problemas.php
// Batería de Problemas - Fundamentos de PHP
// Autor: Alejandro Hernández Murga

echo "<h1>Batería de Problemas - Fundamentos de PHP</h1>";
echo "<p>Autor: Alejandro Hernández Murga</p>";
echo "<hr>";

// ---------------------------
// Problema 1.1: Perfil de Usuario
// ---------------------------
echo "<h2>Problema 1.1: Perfil de Usuario</h2>";
$nombre = "Alejandro";
$apellidos = "Hernández Murga";
$edad = 20;
$altura = 1.70; // metros
$esEstudiante = true;

echo "Nombre: $nombre<br>";
echo "Apellidos: $apellidos<br>";
echo "Edad: $edad<br>";
echo "Altura: {$altura}m<br>";
echo "¿Es estudiante?: " . ($esEstudiante ? "Sí" : "No") . "<br>";
echo "<hr>";

// ---------------------------
// Problema 1.2: Información de un Producto
// ---------------------------
echo "<h2>Problema 1.2: Información de un Producto</h2>";
$productoNombre = "Camiseta";
$productoPrecio = 19.99;
$productoStock = 50;
$productoEnOferta = true;

echo "Producto: $productoNombre<br>";
echo "Precio: {$productoPrecio} €<br>";
echo "Stock disponible: $productoStock<br>";
echo "¿En oferta?: " . ($productoEnOferta ? "Sí" : "No") . "<br>";
echo "<hr>";

// ---------------------------
// Problema 1.3: Constantes de la Aplicación
// ---------------------------
echo "<h2>Problema 1.3: Constantes de la Aplicación</h2>";
define("NOMBRE_SITIO", "Mi Tienda Online");
define("VERSION_APP", 1.0);

echo "Nombre del sitio: " . NOMBRE_SITIO . "<br>";
echo "Versión app: " . VERSION_APP . "<br>";
echo "<hr>";

// ---------------------------
// Problema 2.1: Calculadora Básica
// ---------------------------
echo "<h2>Problema 2.1: Calculadora Básica</h2>";
$num1 = 10;
$num2 = 5;

echo "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
echo "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
echo "$num1 * $num2 = " . ($num1 * $num2) . "<br>";
echo "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
echo "<hr>";

// ---------------------------
// Problema 2.2: Actualización de Stock
// ---------------------------
echo "<h2>Problema 2.2: Actualización de Stock</h2>";
$stock = 100;
echo "Stock inicial: $stock<br>";

$stock -= 25; // venta de 25 unidades
echo "Después de vender 25 unidades: $stock<br>";

$stock += 50; // llegada de pedido de 50 unidades
echo "Después de recibir 50 unidades: $stock<br>";
echo "<hr>";

// ---------------------------
// Problema 2.3: Concatenación de Textos
// ---------------------------
echo "<h2>Problema 2.3: Concatenación de Textos</h2>";
$nombreP = "Oskar";
$apellidoP = "Calvo";
$curso = "Desarrollo Web en Entorno Servidor";

$fraseCompleta = "El profesor $nombreP $apellidoP imparte el curso de $curso";
echo $fraseCompleta . "<br>";
echo "<hr>";

// ---------------------------
// Problema 2.4: Comparaciones Simples (usar var_dump)
// ---------------------------
echo "<h2>Problema 2.4: Comparaciones Simples</h2>";
$edad = 20;
$edadMinima = 18;
echo "¿Edad ($edad) >= Edad mínima ($edadMinima)? ";
var_dump($edad >= $edadMinima); // mostrará bool(true/false)

$contraseñaGuardada = "1234";
$contraseñaUsuario = "123";
echo "¿Contraseña guardada === contraseña introducida? ";
var_dump($contraseñaGuardada === $contraseñaUsuario); // strict comparison
echo "<hr>";

// ---------------------------
// Problema 2.5: ¿Par o Impar?
// ---------------------------
echo "<h2>Problema 2.5: ¿Par o Impar?</h2>";
$numero = 7;
if ($numero % 2 == 0) {
    echo "El número $numero es par<br>";
} else {
    echo "El número $numero es impar<br>";
}
echo "<hr>";

// ---------------------------
// Problema 3.1: Control de Acceso
// ---------------------------
echo "<h2>Problema 3.1: Control de Acceso</h2>";
$edadAcceso = 17;
if ($edadAcceso >= 18) {
    echo "Puedes pasar<br>";
} else {
    echo "No puedes pasar<br>";
}
echo "<hr>";

// ---------------------------
// Problema 3.2: Calificación de Examen
// ---------------------------
echo "<h2>Problema 3.2: Calificación de Examen</h2>";
$nota = 7.5;
if ($nota >= 9) {
    echo "Sobresaliente<br>";
} elseif ($nota >= 7) {
    echo "Notable<br>";
} elseif ($nota >= 5) {
    echo "Aprobado<br>";
} else {
    echo "Suspenso<br>";
}
echo "<hr>";

// ---------------------------
// Problema 3.3: Menú del Día con switch
// ---------------------------
echo "<h2>Problema 3.3: Menú del Día</h2>";
$diaSemana = "lunes";
switch ($diaSemana) {
    case "lunes":
        echo "Lentejas<br>";
        break;
    case "miércoles":
        echo "Paella<br>";
        break;
    case "viernes":
        echo "Pescado al horno<br>";
        break;
    default:
        echo "Hoy no hay menú especial<br>";
        break;
}
echo "<hr>";

// ---------------------------
// Problema 3.4: Verificación de Usuario Avanzada
// ---------------------------
echo "<h2>Problema 3.4: Verificación de Usuario Avanzada</h2>";
$rolUsuario = "admin";
$usuarioActivo = true;

if ($rolUsuario === "admin" && $usuarioActivo) {
    echo "Acceso concedido<br>";
} else {
    echo "Acceso denegado<br>";
}
echo "<hr>";

// ---------------------------
// Problema 4.1: Tabla de Multiplicar del 7
// ---------------------------
echo "<h2>Problema 4.1: Tabla del 7</h2>";
for ($i = 1; $i <= 10; $i++) {
    echo "7 x $i = " . (7 * $i) . "<br>";
}
echo "<hr>";

// ---------------------------
// Problema 4.2: Cuenta Atrás para Año Nuevo
// ---------------------------
echo "<h2>Problema 4.2: Cuenta Atrás</h2>";
$contador = 10;
while ($contador >= 1) {
    echo $contador . "<br>";
    $contador--;
}
echo "¡Feliz Año Nuevo!<br>";
echo "<hr>";

// ---------------------------
// Problema 4.3: Recorrer Nombres
// ---------------------------
echo "<h2>Problema 4.3: Recorrer Nombres</h2>";
$alumnos = ["Ana", "Juan", "Pedro", "Sofía"];
foreach ($alumnos as $alumno) {
    echo "Hola, $alumno<br>";
}
echo "<hr>";

// ---------------------------
// Problema 4.4: Listado de Productos
// ---------------------------
echo "<h2>Problema 4.4: Listado de Productos</h2>";
$productos = [
    ["nombre" => "Teclado", "precio" => 50],
    ["nombre" => "Ratón", "precio" => 25],
    ["nombre" => "Monitor", "precio" => 200]
];

foreach ($productos as $p) {
    echo "Producto: " . $p["nombre"] . ", Precio: " . $p["precio"] . " €<br>";
}
echo "<hr>";

// ---------------------------
// Problema 5.1: Ficha de Usuario
// ---------------------------
echo "<h2>Problema 5.1: Ficha de Usuario</h2>";
$usuario = [
    "nombre" => "Alejandro Hernández Murga",
    "edad" => 20,
    "email" => "alejandromurga@gmail.com",
    "estudiante" => true
];

echo "Nombre: " . $usuario["nombre"] . "<br>";
echo "Edad: " . $usuario["edad"] . "<br>";
echo "Email: " . $usuario["email"] . "<br>";
echo "Estudiante: " . ($usuario["estudiante"] ? "Sí" : "No") . "<br>";
echo "<hr>";

// ---------------------------
// Problema 5.2: Filtrado de Notas
// ---------------------------
echo "<h2>Problema 5.2: Filtrado de Notas</h2>";
$notas = [8.5, 4.2, 7.0, 9.8, 5.5, 3.9];
foreach ($notas as $n) {
    if ($n >= 5) {
        echo "Nota aprobada: $n<br>";
    }
}
echo "<hr>";

// ---------------------------
// Problema 5.3: Lista de la Compra Avanzada
// ---------------------------
echo "<h2>Problema 5.3: Lista de la Compra</h2>";
$listaCompra = [
    "Frutas" => ["Manzanas", "Plátanos", "Naranjas"],
    "Lácteos" => ["Leche", "Queso"],
    "Limpieza" => ["Detergente", "Lejía"]
];

foreach ($listaCompra as $categoria => $items) {
    echo "<strong>$categoria</strong><br>";
    foreach ($items as $item) {
        echo "- $item<br>";
    }
}
echo "<hr>";

// ---------------------------
// Problema 5.4: Calculando el Total del Carrito
// ---------------------------
echo "<h2>Problema 5.4: Total del Carrito</h2>";
$total = 0;
foreach ($productos as $p) {
    $total += $p["precio"];
}
echo "Total carrito: $total €<br>";
echo "<hr>";

echo "<p>Fin de la batería de problemas.</p>";
?>
