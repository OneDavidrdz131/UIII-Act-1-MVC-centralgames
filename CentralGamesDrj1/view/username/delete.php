<?php
    require_once("c://xampp/htdocs/CentralGamesDrj1/controller/usernameController.php");
    $obj = new usernameController();
    $obj->delete($_GET['id']);

?>