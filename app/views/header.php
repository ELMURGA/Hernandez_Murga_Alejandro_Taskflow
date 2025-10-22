<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow - Gestor de Tareas</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        header {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            color: white;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 30px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.5em;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        main {
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 1.8em;
            border-bottom: 3px solid #667eea;
            padding-bottom: 10px;
        }

        ul {
            list-style: none;
        }

        .task-item {
            display: flex;
            align-items: center;
            padding: 15px;
            margin-bottom: 10px;
            border-left: 4px solid #ccc;
            background-color: #f9f9f9;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .task-item:hover {
            transform: translateX(5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .task-item.priority-alta {
            border-left-color: #e74c3c;
            background-color: #fadbd8;
        }

        .task-item.priority-media {
            border-left-color: #f39c12;
            background-color: #fdebd0;
        }

        .task-item.priority-baja {
            border-left-color: #27ae60;
            background-color: #d5f4e6;
        }

        .task-item.completed {
            opacity: 0.6;
            text-decoration: line-through;
            color: #999;
        }

        .task-item.completed.priority-alta {
            background-color: #f5b7b1;
        }

        .task-item.completed.priority-media {
            background-color: #f8c471;
        }

        .task-item.completed.priority-baja {
            background-color: #a9dfbf;
        }
    </style>
</head>
<body>
    <header>
        <h1>TaskFlow</h1>
    </header>
    <main>
