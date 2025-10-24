<?php
/**
 * Biblioteca de funciones para TaskFlow
 * Contiene funciones reutilizables para la gestión y renderizado de tareas
 */

/**
 * Obtiene la clase CSS correspondiente según la prioridad de la tarea
 * 
 * @param string $prioridad La prioridad de la tarea ('alta', 'media' o 'baja')
 * @return string La clase CSS correspondiente
 */
function obtenerClasePrioridad($prioridad) {
    switch ($prioridad) {
        case 'alta':
            return 'priority-alta';
        case 'media':
            return 'priority-media';
        case 'baja':
            return 'priority-baja';
        default:
            return '';
    }
}

/**
 * Renderiza el HTML de una tarea individual
 * 
 * @param array $tarea Array asociativo con los datos de la tarea
 *                     - title: Título de la tarea
 *                     - completed: Boolean indicando si está completada
 *                     - priority: Prioridad ('alta', 'media' o 'baja')
 * @return string HTML del elemento <li> de la tarea
 */
function renderizarTarea($tarea) {
    // Inicializar la clase base
    $clasesTarea = 'task-item';
    
    // Añadir clase si está completada
    if ($tarea['completed']) {
        $clasesTarea .= ' completed';
    }
    
    // Añadir clase de prioridad
    $clasePrioridad = obtenerClasePrioridad($tarea['priority']);
    if ($clasePrioridad) {
        $clasesTarea .= ' ' . $clasePrioridad;
    }
    
    // Construir y devolver el HTML del <li>
    return '<li class="' . $clasesTarea . '">' . htmlspecialchars($tarea['title']) . '</li>';
}
