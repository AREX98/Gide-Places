<?php
//clase para ejecutar las funciones
class Funciones{

//creando la funcion para generar el for

public static function serie(){
    $n1=1;
    $n2=0;
    $numeros = array();
    for($i=0; $i<=42; $i++){
        $suma=$n1+$n2;
        $n1=$n2;
        $n2=$suma;
        
        array_push($numeros, $suma);
    }

// print_r("TODO EL ARREGLO COMPLETO");

 //print_r($numeros); 
 
 print_r(" IMPRIMIENDO LOS TERMINOS DEL 21 AL 42   ----  ");
 print_r($numeros[21]. " - ");
 print_r($numeros[22]. " - ");
 print_r($numeros[23]. " - ");
 print_r($numeros[24]. " - ");
 print_r($numeros[25]. " - ");
 print_r($numeros[26]. " - "); 
 print_r($numeros[27]. " - ");
 print_r($numeros[28]. " - ");
 print_r($numeros[29]. " - ");
 print_r($numeros[30]. " - ");
 print_r($numeros[31]. " - ");
 print_r($numeros[32]. " - ");
 print_r($numeros[33]. " - ");
 print_r($numeros[34]. " - ");
 print_r($numeros[35]. " - ");
 print_r($numeros[36]. " - ");
 print_r($numeros[37]. " - ");
 print_r($numeros[38]. " - ");
 print_r($numeros[39]. " - ");
 print_r($numeros[40]. " - ");
 print_r($numeros[41]. " - ");
 print_r($numeros[42]. " - "); 
return ;
}    
};?>
