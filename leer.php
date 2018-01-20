<?php
//$q =  $_REQUEST["caja_busqueda"];
function enviar() {
$enlace = mysqli_connect('sql107.byethost10.com','b10_21343515','Armandotelmo123','b10_21343515_Registro');
$asig = $enlace->query( "SELECT nombres FROM Personas;");
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$array= [];
    	while($row = mysqli_fetch_array($asig,MYSQLI_ASSOC)){
      		$array[]=$row;
   	}
   
   return '{"results":'.json_encode($array).'}';
   mysqli_close($enlace);
}
echo enviar();
?>
