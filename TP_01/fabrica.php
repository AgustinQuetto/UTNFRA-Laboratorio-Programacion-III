<?php

require_once 'empleado.php';

class Fabrica {

  private $_cantidadMaxima;
  private $_empleados = [];
  private $_razonSocial;

  public function __construct($razonSocial) {
    $this->_razonSocial = $razonSocial;
    $this->_cantidadMaxima = 5;
    $this->_empleados = array();
  }

  public function AgregarEmpleado($empleado) {
    if(count($this->_empleados) < $this->_cantidadMaxima) {
      array_push($this->_empleados, $empleado);
    } else {
      return 'Imposible añadir nuevo empleado. Cantidad máxima superada.';
    }
    return 'Empleado añadido.';
  }

  public function CalcularSueldos(){
    $sueldoAcumulado = 0;
    foreach ($this->_empleados as $empleado) {
      $sueldoAcumulado += $empleado->GetSueldo();
    }

    return $sueldoAcumulado;
  }

  public function EliminarEmpleado($empleado) {
    $array = array_diff($this->_empleados, $empleado);
    if(count($array) < count($this->_empleados)) {
      $this->_empleados = $array;
      return 'Empleado eliminado.';
    } else {
      return 'No hubo coincidencias para eliminar el empleado.';
    }
  }

  private function EliminarEmpleadosRepetidos(){
    if(count($this->_empleados) > 1){
        $this->_empleados = array_unique($this->_empleados);
    }
  }

  public function __toString(){
    $auxRetorno = $this->_razonSocial;
    foreach($this->_empleados as $empleado){
        $auxRetorno = $auxRetorno."<br>".$empleado->__toString();
    }
    return $auxRetorno;
  }

}