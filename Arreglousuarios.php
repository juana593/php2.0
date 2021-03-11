<?php
 require "arreglousuario.html";

$arr = array ('Juana', 'Juan', 'Jacksel', 'Yelsin', 'Maycol');
echo json_encode($arr);
echo "<br>";
//echo 'Juana';
if ("$arr"){

    echo "imprimir nombre", @$arr;
}
else{
    echo"no exite";
}

$registro['uraccan'] = "1234";
$registro=$_POST['nombre'];
//$registro['direccion'] = "posolera";
$registro=$_POST['nombre'];
$registro  ($arr);





/*$nombre= "Anner";
$array = array("Juana,Yelsin,Jacksel,Juan,Maycol")
//echo "Juan"
$nombre;
// saco el numero de los elementos 
$longitud = count($array);

//recorro todos los elementos
for ($i=0; $i<longitud; $i++)
{
    //saco el valor de cada lemento
    echo $array[$i];
    echo "br";

}*/

?>