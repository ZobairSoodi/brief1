<?php
    require '../data-access/promotionClass.php';
    if(isset($_GET["delete_id"])){
        $obj = new promotion($_GET["delete_id"], NULL);
        $obj->delete();
    }
    header("location: ../presentation/index.php");
?>