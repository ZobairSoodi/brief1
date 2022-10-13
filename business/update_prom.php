<?php
    require '../data-access/promotionManager.php';
    require '../data-access/promotion.php';
    if(isset($_POST["update_prom"])){
        $obj = new PromotionManager();
        $prom = new promotion();
        $prom->set_id($_POST["id"]);
        $prom->set_nom($_POST["nom"]);
        $obj->update($prom);
    }
    header("location: ../presentation/index.php");
?>