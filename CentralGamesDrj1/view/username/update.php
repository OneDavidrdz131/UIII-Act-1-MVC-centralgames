<?php
    require_once("c://xampp/htdocs/CentralGamesDrj1/controller/usernameController.php");
    $obj = new usernameController();
    $obj->update($_POST['id'],$_POST['id_proveedor'],$_POST['id_producto'],$_POST['id_pintura'],$_POST['id_empleado'],$_POST['nombre_proveedor'],$_POST['fecha_llegada'],$_POST['cantidad'],$_POST['existencias']);
    ?>
