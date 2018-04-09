<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body {
        background-color: <?php echo $_POST['color']; ?>;
    }
    </style>
</head>
<body>
    <form method="post">
    <label>Color de fondo</label>
        <select name="color">
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="yellow">Amarillo</option>
        </select>
        <button>Enviar</button>
    </form>
</body>
</html>