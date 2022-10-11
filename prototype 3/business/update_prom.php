<?php
    require '../data-access/promotionClass.php';
    if(isset($_POST["update_prom"])){
        $obj = new promotion($_POST["id"], $_POST["nom"]);
        $obj->update();
    }
    header("location: ../presentation/index.php");
?>