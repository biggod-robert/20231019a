<?php

//aqui se incluye el archivo de funciones
include('funciones.php');

//invoca la funcion consulta
echo consultas();
echo "<br>";
//se invoca la funcion viajar
echo viajar();
echo "<br>";//hace un salto de linea

echo unnuevoregistro();//se invoca la funcion unnuevoregistro
echo "<br>";
echo unnuevocalculo();
echo "<br>";

echo calculo_edad();
echo "<br>";
echo contar_usuario();
echo "<br>";
echo insertar_usuario('78321', 'dayana', 'maria', '2003-11-15', '18', 'dayis@gmail.com', 'deyi4532', 'youtube');
echo borrarUsuario('90564');
echo "<br>";
echo actualizar('https://www.mercadolibre.com.co/','12345');
echo "<br>";
echo mostrar_sitio('41212');
echo cambiar_sitio('varvaro', '11209');

?>