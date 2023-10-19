<?php

//se crea funcion para una consulta
function consultas(){

    $salida= "";//incializa la variable
    $salida= 10*2/2; //calcula la operacion del area de un triangulo
    

    return $salida;//retorna la operacion
    
}
//esta es una nueva funcion
function viajar(){

    $exit= 0;// se inicializa la variable

    $exit= 4**4+10**2;//se realiza el calculo del perimetro de un rectangulo

    return $exit;//retorna el calculo
}

function unnuevoregistro(){

    $exit = 0;// se inicializa la variable
    //se hace la conexion con la base de datos
    $conexion= new mysqli('localhost', 'root', 'root', 'tour_people');

    $sql = "select 2+1 ";
    $sql .= "as suma";//
    $resultado = $conexion->query($sql);

    //recorre el recordset
    while($fila = mysqli_fetch_assoc($resultado))
    {
        //incluye o acumula
        $exit += $fila['suma'];
    }
    return $exit;//retorna 

    
}


?>
