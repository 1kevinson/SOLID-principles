<?php 

class Employee {
  private $name;

  // Getters and Setters
  function __call($method,$parameter) {
          $variable = strtolower(substr($method,3));
          if (!strncasecmp($method,'get',3) && !in_array($variable,$this->private)) return $this->$variable;
          if (!strncasecmp($method,'set',3) && !in_array($variable,$this->private)) $this->$variable = $parameter[0];
  }
}

class TimeSheetReport{
    function printReport(Employee $employee) {
      
    }
}

?>