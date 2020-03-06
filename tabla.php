<?php
 include 'conexion.php';

 $consulta=$pdo->query("SELECT * FROM tbl_cliente");
?>
<table class="table table-hover thead-dark mt-5 col-12 table-bordered">
            <thead class='thead-dark'>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>DIRECCION</th>
                    <th>TELEFONO</th>
                    <th>ACCION</th>
                    
                </tr>
            </thead>
        <tbody>
<?php
    while($fila= $consulta->fetch()){
?>
    <tr>
        <td><?= $fila['idx_cliente']?></td>
        <td><?= $fila['nom_cliente']?></td>
        <td><?= $fila['ape_cliente']?></td>
        <td><?= $fila['dir_cliente']?></td>
        <td><?= $fila['tel_cliente']?></td>
        <td><button class="btn btn-dark">X</button></td>
    </tr>
<?php
     }
?>
    </tbody>
    </table>