<?php
include_once "empleado.php";
include_once "fabrica.php";

$Empleado1 = new Empleado("Juan","Pérez",38172055,'Masculino',1,32000,"Mañana");
$Empleado2 = new Empleado("Pedro","Sarmiento",38593544,'Masculino',2,22000,"Tarde");
$Empleado3 = new Empleado("Ricardo","Rivadavia",28495044,'Masculino',3,24000,"Mañana");
$Empleado4 = new Empleado("Ramon","Alvear",18304855,'Masculino',4,13000,"Mañana");
$Empleado5 = new Empleado("Patrick","Rothfuss",58493021,'Masculino',5,15000,"Noche");
$Empleado6 = new Empleado("Julia","Mónaco",14235643,'Femenino',6,11000,"Noche");

echo "<-----Test Empleado-----><br>";
echo $Empleado1->__toString();
echo "<br>";
echo $Empleado1->Hablar(array("Español"));
echo "<br>";
echo $Empleado1->Hablar(array("Español", "Inglés"));
echo "<br>";
echo $Empleado1->Hablar(array("Francés"));
echo "<br>";
echo $Empleado1->Hablar(array("Portugués"));
echo "<br>";

echo "<-----Test Cargar Empleados y Empleado Duplicado-----><br>";
$unaFabrica = new Fabrica("Materia Prima SRL");
echo $unaFabrica->AgregarEmpleado($Empleado1);
echo $unaFabrica->AgregarEmpleado($Empleado2);
echo $unaFabrica->AgregarEmpleado($Empleado3);
echo $unaFabrica->AgregarEmpleado($Empleado4);
echo $unaFabrica->AgregarEmpleado($Empleado5);
echo $unaFabrica->AgregarEmpleado($Empleado6);
echo $unaFabrica->AgregarEmpleado($Empleado6);
echo "<br>";
echo "<br>";

echo "<-----Test Sueldos-----><br>";
echo $unaFabrica->CalcularSueldos();
echo "<br>";
echo "<br>";

echo "<-----Test Eliminar-----><br>";
echo $unaFabrica->EliminarEmpleado(array($Empleado3));
echo $unaFabrica->__toString();
echo "<br>";
echo "<br>";

echo "<-----Test Sueldos Después de Eliminar-----><br>";
echo $unaFabrica->CalcularSueldos();
