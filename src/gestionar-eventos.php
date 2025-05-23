<?php
include 'config.php';

$mensaje = '';

// Crear evento
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['accion'] === 'crear') {
    $title = $mysqli->real_escape_string($_POST['title']);
    $description = $mysqli->real_escape_string($_POST['description']);
    $start = $_POST['start'];
    $end = $_POST['end'];

    $mysqli->query("INSERT INTO event_calendar (start, end, title, description) VALUES ('$start', '$end', '$title', '$description')");
    $mensaje = "Evento creado exitosamente.";
}

// Editar evento
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['accion'] === 'editar') {
    $id = intval($_POST['id']);
    $title = $mysqli->real_escape_string($_POST['title']);
    $description = $mysqli->real_escape_string($_POST['description']);
    $start = $_POST['start'];
    $end = $_POST['end'];

    $mysqli->query("UPDATE event_calendar SET start='$start', end='$end', title='$title', description='$description' WHERE id=$id");
    $mensaje = "Evento editado exitosamente.";
}

// Eliminar evento
if (isset($_GET['eliminar'])) {
    $id = intval($_GET['eliminar']);
    $mysqli->query("DELETE FROM event_calendar WHERE id=$id");
    $mensaje = "Evento eliminado exitosamente.";
}

// Listar eventos
$eventos = $mysqli->query("SELECT * FROM event_calendar ORDER BY start ASC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Eventos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Gestión de Eventos</h1>
        <a href="admin_dashboard.php" class="underline">← Volver atrás</a>
        <!-- Formulario para crear evento -->
        <div class="bg-white p-6 rounded shadow mb-8 mt-4">
            <h2 class="text-xl font-semibold mb-4">Nuevo Evento</h2>
            <form method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input type="hidden" name="accion" value="crear">
                <input type="text" name="title" placeholder="Título" class="p-2 border rounded" required>
                <input type="text" name="description" placeholder="Descripción" class="p-2 border rounded">
                <input type="datetime-local" name="start" class="p-2 border rounded" required>
                <input type="datetime-local" name="end" class="p-2 border rounded" required>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 col-span-1 md:col-span-2">Agregar Evento</button>
            </form>
        </div>

        <!-- Tabla de eventos -->
        <div class="bg-white shadow-md rounded-lg overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 text-left">Título</th>
                        <th class="py-3 px-4 text-left">Descripción</th>
                        <th class="py-3 px-4 text-left">Inicio</th>
                        <th class="py-3 px-4 text-left">Fin</th>
                        <th class="py-3 px-4 text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $eventos->fetch_assoc()): ?>
                        <?php if (isset($_GET['editar']) && $_GET['editar'] == $row['id']): ?>
                            <!-- Edición en línea -->
                            <tr class="bg-yellow-100">
                                <form method="POST">
                                    <input type="hidden" name="accion" value="editar">
                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                    <td class="py-2 px-4"><input type="text" name="title" value="<?= htmlspecialchars($row['title']) ?>" class="p-1 border rounded w-full" required></td>
                                    <td class="py-2 px-4"><input type="text" name="description" value="<?= htmlspecialchars($row['description']) ?>" class="p-1 border rounded w-full"></td>
                                    <td class="py-2 px-4"><input type="datetime-local" name="start" value="<?= date('Y-m-d\TH:i', strtotime($row['start'])) ?>" class="p-1 border rounded w-full" required></td>
                                    <td class="py-2 px-4"><input type="datetime-local" name="end" value="<?= date('Y-m-d\TH:i', strtotime($row['end'])) ?>" class="p-1 border rounded w-full" required></td>
                                    <td class="py-2 px-4 flex gap-2">
                                        <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Guardar</button>
                                        <a href="gestionar-eventos.php" class="bg-gray-400 text-white px-3 py-1 rounded hover:bg-gray-500">Cancelar</a>
                                    </td>
                                </form>
                            </tr>
                        <?php else: ?>
                            <!-- Vista normal -->
                            <tr class="border-b">
                                <td class="py-2 px-4"><?= htmlspecialchars($row['title']) ?></td>
                                <td class="py-2 px-4"><?= htmlspecialchars($row['description']) ?></td>
                                <td class="py-2 px-4"><?= $row['start'] ?></td>
                                <td class="py-2 px-4"><?= $row['end'] ?></td>
                                <td class="py-2 px-4 flex gap-2">
                                    <a href="?editar=<?= $row['id'] ?>" class="text-blue-600 hover:underline">Editar</a>
                                    <a href="?eliminar=<?= $row['id'] ?>" class="text-red-600 hover:underline" onclick="return confirm('¿Eliminar este evento?')">Eliminar</a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal de confirmación -->
    <?php if ($mensaje): ?>
        <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded-xl p-6 shadow-lg max-w-sm text-center">
                <h2 class="text-xl font-semibold mb-2">¡Acción completada!</h2>
                <p class="text-gray-700"><?= htmlspecialchars($mensaje) ?></p>
            </div>
        </div>
        <script>
            setTimeout(() => {
                window.location.href = "test.php";
            }, 1000);
        </script>
    <?php endif; ?>
</body>
</html>
