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

    $conexion->close();//cierra la conexion
    return $exit;//retorna

    

    
}

function unnuevocalculo(){

    $exit = 0;// se inicializa la variable
    //se hace la conexion con la base de datos
    $conexion= new mysqli('localhost', 'root', 'root', 'tour_people');

    $sql = "select 10 as n1, 20 as n2";
    $resultado = $conexion->query($sql);

    //recorre el recordset
    while($fila = mysqli_fetch_assoc($resultado))
    {
        //incluye o acumula
        $exit = $fila['n1'] + $fila['n2'];

    }

    $conexion->close();//cierra la conexion
    return $exit;//retorna

    

    
}

function calculo_edad(){

    $edad = "eres mayor de edad";//se inicializa la variable de texto
    $edad2 = "eres menor de edad";
    $exit = 0;// se inicializa la variable
    //se hace la conexion con la base de datos
    $conexion= new mysqli('localhost', 'root', 'root', 'tour_people');

    $sql = "select 21 as edad";
    $resultado = $conexion->query($sql);

    //recorre el recordset
    while($fila = mysqli_fetch_assoc($resultado))
    {
        //incluye o acumula
        $exit = $fila['edad'];

        if($exit >= 18){
            $exit = $exit. ' '. $edad;//imprime la edad si es mayor
            
        }else{
            $exit = $exit. ' '. $edad2;//imprime la edad si es menor
        }
        

    }

    $conexion->close();//cierra la conexion
    return $exit;//retorna



 
}

function contar_usuario(){

    $exit = 0;// se inicializa la variable
    //se hace la conexion con la base de datos
    $conexion= new mysqli('localhost', 'root', 'root', 'tour_people');

    $sql = "select count(nombre) from registro";
    $resultado = $conexion->query($sql);

    //recorre el recordset
    while($fila = mysqli_fetch_assoc($resultado))
    {
        //incluye o acumula
        $exit = $fila['edad'];

        if($exit >= 18){
            $exit = $exit. ' '. $edad;//imprime la edad si es mayor
            
        }else{
            $exit = $exit. ' '. $edad2;//imprime la edad si es menor
        }
        

    }

    $conexion->close();//cierra la conexion
    return $exit;//retorna



 
}


?>
