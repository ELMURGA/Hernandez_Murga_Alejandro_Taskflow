<?php
// Incluir la biblioteca de funciones
require_once '../app/functions.php';

// Datos de las tareas (simulando una base de datos)
$tasks = [
    [
        'title' => 'Completar la práctica de PHP',
        'completed' => false,
        'priority' => 'alta'
    ],
    [
        'title' => 'Revisar el código del compañero',
        'completed' => true,
        'priority' => 'media'
    ],
    [
        'title' => 'Estudiar los conceptos de arrays',
        'completed' => false,
        'priority' => 'media'
    ],
    [
        'title' => 'Hacer un commit en Git',
        'completed' => true,
        'priority' => 'baja'
    ],
    [
        'title' => 'Documentar el proyecto',
        'completed' => false,
        'priority' => 'alta'
    ],
    [
        'title' => 'Optimizar el rendimiento del sitio',
        'completed' => false,
        'priority' => 'baja'
    ]
];

// Incluir el header
include '../app/views/header.php';
?>

<h2>Tareas Pendientes</h2>

<ul>
    <?php foreach ($tasks as $task) : ?>
        <?php echo renderizarTarea($task); ?>
    <?php endforeach; ?>
</ul>

<?php
// Incluir el footer
include '../app/views/footer.php';
?>
