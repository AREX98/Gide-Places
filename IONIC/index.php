<?php
include 'server/datos.php';
include 'server/conectar.php';
$consulta= ejecutarSQL::consultar("select * from Usuarios");
$totalproductos = mysql_num_rows($consulta);
if($totalproductos>0){
    while($fila=mysql_fetch_array($consulta)){
 echo '
 <div class="container-fluid">
 <div class="row">
     <div class="col-md-12">
         <div class="row">
             <div class="col-md-4">
             </div>
             <div class="col-md-4">
             <h3>'.$fila['idUsuario'].'</h3>
<h3>'.$fila['nombreUsuario'].'</h3>
<h3>'.$fila['apellidoUsuario'].'</h3>
<p>'.$fila['edadUsuario'].'</p>
<p>'.$fila['emailUsuario'].'</p>
             </div>
             <div class="col-md-4">
             </div>
         </div>
     </div>
 </div>
</div>    
';
 }   
 }else{
 echo '<h2>No hay productos registrados en la tienda</h2>';
 }  
 ?>  
 