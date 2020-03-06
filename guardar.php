<?php
include 'conexion.php';
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$direccion= $_POST['direccion'];
$telefono= $_POST['telefono']
$nuevo=$pdo->query("INSERT INTO tbl_cliente(nom_cliente, ape_cliente, tel_cliente, dir_cliente)VALUES('$nombre', '$apellido', '$direccion', '$telefono')");
//var_dump($nuevo);
//print_r($pdo-->errorInfo());
if($nuevo){
echo "2";
}else{
    echo "1";

}

?>