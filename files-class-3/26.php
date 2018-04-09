<?php
if(!is_null($_POST['fileName'])) {
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $date = date('Y_m_d_h_i_s', time());
    $fileName = $_POST['fileName'];
    $extension = explode('.', $fileName);
    $nuevo_fichero = './backup/'.$date.'.'.$extension[1];

    if (!copy($fileName, $nuevo_fichero)) {
        echo "Error al copiar $fichero...\n";
    } else {
        echo "Copiado en ".$nuevo_fichero;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Nombre de archivo</label>
        <input type="text" name="fileName" placeholder="Ingrese el nombre del achivo a copiar"/>
        <button>Enviar</button>
    </form>
</body>
</html>