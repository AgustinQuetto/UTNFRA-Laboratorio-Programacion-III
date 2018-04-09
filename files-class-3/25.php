<?php
error_reporting(0);
/*
Aplicación Nº 25 (Contar letras)
Se quiere realizar una aplicación que lea un archivo (../misArchivos/palabras.txt) y ofrezca
estadísticas sobre cuantas palabras de 1, 2, 3, 4 y más de 4 letras hay en el texto. No tener en
cuenta los espacios en blanco ni saltos de líneas como palabras.
Los resultados mostrarlos en una tabla.
*/

$local_file = './palabras.txt';

$file = fopen($local_file, "r");
$readed = fread($file, filesize($local_file));
fclose($file);

$trimText = trim($readed, "\t\n\r\0\x0B");
$splitText = explode(' ', $trimText);

$conteo = [0,0,0,0,0];

foreach ($splitText as $value) {
    $exten = strlen($value);

    if($exten < 5)
    {
        $conteo[$exten-1]++;
    } else {
        $conteo[4]++;
    }
}

?>

<table>
    <thead>
        <tr>
            <th>Una</th>
            <th>Dos</th>
            <th>Tres</th>
            <th>Cuatro</th>
            <th>+Cuatro</th>
        <tr>
    </thead>
    <tbody>
        <tr>
        <?php
            foreach($conteo as $key => $value) {
                echo "<td>{$value}</td>";
            }
        ?>
    </tr>
</tbody>
</table>
