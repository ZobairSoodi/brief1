<?php
    require '../data-access/promotionClass.php';
    if(isset($_POST["add_prom"])){
        $obj = new promotion(NULL, $_POST["nom"]);
        $obj->insert();
    }
    header("location: ../presentation/index.php")
?>