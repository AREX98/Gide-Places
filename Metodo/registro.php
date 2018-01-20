<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(3);
$nitCliente= $_POST['clien-nit'];
$nameCliente= $_POST['clien-name'];
$fullnameCliente= $_POST['clien-fullname'];
$apeCliente= $_POST['clien-lastname'];
$passCliente= md5($_POST['clien-pass']);
$dirCliente= $_POST['clien-dir'];
$phoneCliente= $_POST['clien-phone'];
$emailCliente= $_POST['clien-email'];

if(!$nitCliente=="" && !$nameCliente=="" && !$apeCliente=="" && !$dirCliente=="" && !$phoneCliente=="" && !$emailCliente=="" && !$fullnameCliente==""){
    $verificar=  ejecutarSQL::consultar("select * from hoteles where IDHOTEL='".$nitCliente."'");
    $verificaltotal = mysql_num_rows($verificar);
    if($verificaltotal<=0){
        if(consultasSQL::InsertSQL("hoteles", "IDHOTELE, NOMBRE,DIRECCION, PAIS, CIUDAD, TELEFONO, CORREO, NESTRELLAS", "'$nitCliente','$nameCliente','$fullnameCliente','$apeCliente','$dirCliente', '$passCliente','$phoneCliente','$emailCliente'")){
            echo '<br>El registro se completo con éxito';
        }else{
           echo '<br>Ha ocurrido un error.<br>Por favor intente nuevamente'; 
        }
    }else{
        echo '<br>El NIT que ha ingresado ya esta registrado.<br>Por favor ingrese otro número de NIT';
    }
}else {
    echo '<br>Error los campos no deben de estar vacíos';
}

