<?php
// Paso 2: Crear el Conjunto de Datos
// Array multidimensional que simula las tareas de la base de datos
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
    <?php
    // Paso 3: Renderizar la Lista de Tareas con Lógica Condicional
    foreach ($tasks as $task) {
        // Inicializar la variable con la clase base
        $taskClasses = 'task-item';
        
        // Condicional: comprobar si la tarea está completada
        if ($task['completed']) {
            $taskClasses .= ' completed';
        }
        
        // Switch: evaluar la prioridad y añadir la clase correspondiente
        switch ($task['priority']) {
            case 'alta':
                $taskClasses .= ' priority-alta';
                break;
            case 'media':
                $taskClasses .= ' priority-media';
                break;
            case 'baja':
                $taskClasses .= ' priority-baja';
                break;
        }
        
        // Imprimir el elemento de lista con las clases dinámicas
        echo '<li class="' . $taskClasses . '">' . htmlspecialchars($task['title']) . '</li>';
    }
    ?>
</ul>

<?php
// Incluir el footer
include '../app/views/footer.php';
?>
