<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Cuidador</title>
</head>
<body>
    <h2>Agregar Cuidador</h2>
    <form action="procesar_cuidador.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido1">Apellido 1:</label>
        <input type="text" id="apellido1" name="apellido1" required><br><br>

        <label for="apellido2">Apellido 2:</label>
        <input type="text" id="apellido2" name="apellido2"><br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>

        <label for="num_tel">Número de Teléfono:</label>
        <input type="text" id="num_tel" name="num_tel" required><br><br>

        <label for="parentesco">Parentesco:</label>
        <input type="text" id="parentesco" name="parentesco" required><br><br>

        <input type="submit" value="Agregar Cuidador">
    </form>
</body>
</html>
