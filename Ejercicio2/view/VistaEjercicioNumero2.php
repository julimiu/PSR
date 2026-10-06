<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Bus</title>
</head>
<body>
    <h1>Registro del Bus</h1>

    <form action="indexBus.php" method="POST">

        <label>Placa del bus:</label>
        <input type="text" name="placa" value="0" min="6" required>

        <br><br>

        <label>Capacidad del bus: </label>
        <input type="number" name="capacidad" value="0" min="1" required>

        <br><br>

        <label>Precio del pasaje: </label>
        <input type="number" name="precio" value="0" min="1" required>

        <br><br>

        <label>Pasajeros que subieron: </label>
        <input type="number" name="suben" value="0" min="1" required>

        <br><br>

        <label>Pasajeros que bajaron: </label>
        <input type="number" name="bajan" value="0" min="1" required>
        
        <br><br>

        <button type="submit">Crear Bus</button>

    </form>
</body>
</html>