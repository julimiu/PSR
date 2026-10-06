<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CinePlus</title>
</head>
<body>
    
<h1>CinePlus</h1>

<h2>Registro de películas</h2>

<form action="indexCine.php" method="post">
    <label>¿Cuántas películas desea registrar?</label>
    <input type="number" name="cantidad" min="1" required>

    <button type="submit" name="crear"> Crear películas</button>

</form>
</body>
</html>