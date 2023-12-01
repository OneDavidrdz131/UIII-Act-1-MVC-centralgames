<?php
    require_once("c://xampp/htdocs/CentralGamesDrj1/view/head/head.php");
    require_once("c://xampp/htdocs/CentralGamesDrj1/controller/usernameController.php");
    $obj = new usernameController();
    $date = $obj->show($_GET['id']);
?>
<h2 class="text-center">Detalles del registro</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date[8]?>" class="btn btn-success">Actualizar</a>
    
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Una vez eliminado no se podra recuperar el registro
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?id=<?= $date[8]?>" class="btn btn-danger">Eliminar</a>
            <!-- <button type="button" >Eliminar</button> -->
        </div>
        </div>
    </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">ID_Cliente</th>
            <th scope="col">ID_Producto</th>
            <th scope="col">Tipo Comprobante</th>
            <th scope="col">Serie Comprobante</th>
            <th scope="col">Num Comprobante</th>
            <th scope="col">Fecha y Hora</th>
            <th scope="col">Impuesto</th>
            <th scope="col">Total a Pagar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["id_cliente"]?></td>
            <td scope="col"><?= $date["id_producto"]?></td>
            <td scope="col"><?= $date["tipo_comprobante"]?></td>
            <td scope="col"><?= $date["serie_comprobante"]?></td>
            <td scope="col"><?= $date["num_comprobante"]?></td>
            <td scope="col"><?= $date["fecha_y_hora"]?></td>
            <td scope="col"><?= $date["impuesto"]?></td>
            <td scope="col"><?= $date["total_a_pagar"]?></td>
        </tr>
    </tbody>
</table>



<?php
    require_once("c://xampp/htdocs/CentralGamesDrj1/view/head/footer.php");
?>