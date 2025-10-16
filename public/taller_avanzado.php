<?php
// taller_avanzado.php
// Taller Avanzado: Funciones y Lógica de Programación en PHP
// UD3 - Estructuración y Funciones
// Autor: Alejandro Hernández Murga

header('Content-Type: text/html; charset=utf-8');
echo "<meta charset=\"utf-8\">";
echo "<h1>Taller Avanzado: Funciones y Lógica de Programación</h1>";
echo "<p><strong>Unidad:</strong> UD3 - Estructuración y Funciones</p>";
echo "<hr>";

// ========================================
// NIVEL 1: LÓGICA CON FUNCIONES
// ========================================

// ---------------------------
// Problema 1: Calculadora de Descuentos
// ---------------------------
echo "<h2>Problema 1: Calculadora de Descuentos</h2>";

function calcularDescuento($precio, $categoria) {
    if ($categoria == 'electronica') {
        return $precio - ($precio * 0.15);
    } elseif ($categoria == 'ropa') {
        return $precio - ($precio * 0.10);
    } elseif ($categoria == 'alimentacion') {
        return $precio - ($precio * 0.05);
    } else {
        return $precio;
    }
}

// Pruebas
$precioElectronica = calcularDescuento(100, 'electronica');
$precioRopa = calcularDescuento(50, 'ropa');
$precioAlimentacion = calcularDescuento(20, 'alimentacion');

echo "Precio con descuento (electrónica): {$precioElectronica} €<br>";
echo "Precio con descuento (ropa): {$precioRopa} €<br>";
echo "Precio con descuento (alimentación): {$precioAlimentacion} €<br>";
echo "<hr>";

// ---------------------------
// Problema 2: El Juego "FizzBuzz"
// ---------------------------
echo "<h2>Problema 2: FizzBuzz</h2>";

function fizzBuzz($numero) {
    if ($numero % 3 == 0 && $numero % 5 == 0) {
        return "FizzBuzz";
    } elseif ($numero % 3 == 0) {
        return "Fizz";
    } elseif ($numero % 5 == 0) {
        return "Buzz";
    } else {
        return $numero;
    }
}

// Pruebas
echo "FizzBuzz para números del 1 al 20:<br>";
for ($i = 1; $i <= 20; $i++) {
    echo "$i: " . fizzBuzz($i) . "<br>";
}
echo "<hr>";

// ---------------------------
// Problema 3: Validador de Contraseña
// ---------------------------
echo "<h2>Problema 3: Validador de Contraseña</h2>";

function validarContraseña($pass) {
    $longitud = strlen($pass);
    
    // Verificar si tiene mayúscula
    $tieneMayuscula = false;
    if ($pass !== strtolower($pass)) {
        $tieneMayuscula = true;
    }
    
    // Verificar si tiene número
    $tieneNumero = false;
    for ($i = 0; $i < $longitud; $i++) {
        if ($pass[$i] >= '0' && $pass[$i] <= '9') {
            $tieneNumero = true;
            break;
        }
    }
    
    if ($longitud > 8 && $tieneMayuscula && $tieneNumero) {
        return "FUERTE";
    } elseif ($longitud > 8) {
        return "MEDIA";
    } else {
        return "DEBIL";
    }
}

// Pruebas
$password1 = "MiPass123";
$password2 = "contraseña123";
$password3 = "Pass1";
$password4 = "MICONTRASEÑA";

echo "Contraseña '$password1': " . validarContraseña($password1) . "<br>";
echo "Contraseña '$password2': " . validarContraseña($password2) . "<br>";
echo "Contraseña '$password3': " . validarContraseña($password3) . "<br>";
echo "Contraseña '$password4': " . validarContraseña($password4) . "<br>";
echo "<hr>";

// ========================================
// NIVEL 2: MANIPULACIÓN AVANZADA DE ARRAYS
// ========================================

// ---------------------------
// Problema 4: Encontrar el Valor Máximo
// ---------------------------
echo "<h2>Problema 4: Encontrar el Valor Máximo</h2>";

function encontrarMaximo($array) {
    $maximo = $array[0];
    
    foreach ($array as $numero) {
        if ($numero > $maximo) {
            $maximo = $numero;
        }
    }
    
    return $maximo;
}

// Pruebas
$numeros = [5, 23, 8, 42, 15, 16, 4];
$numerosNegativos = [-5, -23, -8, -1];

echo "Máximo de [5, 23, 8, 42, 15, 16, 4]: " . encontrarMaximo($numeros) . "<br>";
echo "Máximo de [-5, -23, -8, -1]: " . encontrarMaximo($numerosNegativos) . "<br>";
echo "<hr>";

// ---------------------------
// Problema 5: Filtrar Usuarios por Criterio
// ---------------------------
echo "<h2>Problema 5: Filtrar Usuarios por Criterio</h2>";

$usuarios = [
    ['nombre' => 'Ana', 'edad' => 25, 'activo' => true],
    ['nombre' => 'Juan', 'edad' => 17, 'activo' => true],
    ['nombre' => 'Pedro', 'edad' => 35, 'activo' => false],
    ['nombre' => 'Sofía', 'edad' => 22, 'activo' => true]
];

function filtrarUsuariosActivos($usuarios) {
    $usuariosActivos = [];
    
    foreach ($usuarios as $usuario) {
        if ($usuario['activo'] == true && $usuario['edad'] >= 18) {
            $usuariosActivos[] = $usuario;
        }
    }
    
    return $usuariosActivos;
}

// Pruebas
$usuariosFiltrados = filtrarUsuariosActivos($usuarios);

echo "Usuarios activos y mayores de 18 años:<br>";
foreach ($usuariosFiltrados as $usuario) {
    echo "- {$usuario['nombre']} ({$usuario['edad']} años)<br>";
}
echo "<hr>";

// ---------------------------
// EXTRA: Función adicional para mostrar dominio
// ---------------------------
echo "<h2>Función Extra: Contar Vocales</h2>";

function contarVocales($texto) {
    $vocales = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $contador = 0;
    
    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array($texto[$i], $vocales)) {
            $contador++;
        }
    }
    
    return $contador;
}

$frase = "Programación en PHP es interesante";
echo "La frase '$frase' tiene " . contarVocales($frase) . " vocales.<br>";
echo "<hr>";

echo "<p><em>Fin del taller avanzado.</em></p>";
?>
