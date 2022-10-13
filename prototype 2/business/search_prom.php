<?php
    require '../data-access/promotionManager.php';
    require '../data-access/promotion.php';
    if(isset($_POST["search_prom"])){
        $obj = new PromotionManager();
        $prom = new promotion();
        $prom->set_nom($_POST["nom"]);
        echo json_encode($obj->search($prom));
    }
?>