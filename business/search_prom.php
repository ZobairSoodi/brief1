<?php
    require '../data-access/promotionClass.php';
    if(isset($_POST["search_prom"])){
        $obj = new promotion(NULL, $_POST["nom"]);
        echo json_encode($obj->search());
    }
?>