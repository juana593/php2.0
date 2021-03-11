<?php
//impuestos
require "indexH.html";
class Empleado {  
        private $campoN;
        private $dinero;
       // private $i = 0;
    public function pagar($campoN,$dinero){
        $this->nombre=$campoN;
        $this->salario=$dinero;
    }
    public function pagarImpuestos(){
        echo $this->nombre;
        echo ' ';
        if ($this->salario> 3000){
            echo 'Debe pagar impuestos';
    
        }else{
            echo'No paga impuestos';
            echo '<br>';
        }
    }
    
}
$nom = $_POST['txtnombre'];
$sala =$_POST['txtsalario'];
$empleado1= new Empleado();
$empleado1->pagar($nom,$sala);
$empleado1->pagarImpuestos();
//$empleado1->pagarImpuestos();

