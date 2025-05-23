<?php
session_start();

if (isset($_POST["destroy"])) {
    session_destroy();
    header("location: admin.php");
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-gray-100 p-6 min-h-screen flex items-center justify-center">

    <div class="max-w-2xl w-full bg-white p-8 rounded-md shadow-md text-center">

        <h2 class="text-3xl font-bold mb-8 text-gray-800">Bienvenido, admin</h2>

        <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-6">
            <a href="gestionar-eventos.php" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-8 rounded-md shadow-md transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Gestionar eventos
            </a>
        </div>
        <br>
        <a href="index.php" class="underline">← Volver a inicio</a>
    </div>


</body>

</html>