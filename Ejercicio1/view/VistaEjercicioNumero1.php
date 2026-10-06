
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cita</title>
</head>
<body>
    <h1>Registro de Cita</h1>
    
    <form action="indexCita.php" method="POST">
        <label>Número de la cita: </label>
        <input type="number" name="numero" value="0" min="1" required>

        <br><br>

        <label>Tipo de cita (1 a 5): </label>
        <input type="number" name="tipo" value="0" min="1" max="5" required>

        <br><br>

        <label>Tarifa: </label>
        <input type="number" name="tarifa" value="0" min="1" required>

        <br><br>

        <button type="submit">Calcular cita</button>
    </form>
</body>
</html>