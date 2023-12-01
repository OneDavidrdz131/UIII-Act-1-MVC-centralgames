<?php
    require_once("c://xampp/htdocs/CentralGamesDrj1/view/head/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
    <div class="row">
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Id_Cliente</label>
        <input type="number" min="1" name="id_proveedor" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Id_Producto</label>
        <input type="number" min="1" name="id_producto" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Tipo_Comprobante</label>
        <input type="text" min="1" name="id_pintura" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Serie_Comprobante</label>
        <input type="number" min="1" name="id_empleado" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    </div>

    <div class="row">
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Num_Comprobante</label>
        <input type="number" name="nombre_proveedor" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Fecha</label>
        <input type="date" name="fecha_llegada" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Impuesto</label>
        <input type="number" min="1" name="cantidad" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-3 mb-3">
        <label for="exampleInputEmail1" class="form-label">Total a Pagar</label>
        <input type="number" min="0" name="existencias" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/CentralGamesDrj1/view/head/footer.php");
?>