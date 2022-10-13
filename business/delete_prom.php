<?php
    require '../data-access/promotionManager.php';
    require '../data-access/promotion.php';
    if(isset($_GET["delete_id"])){
        $obj = new PromotionManager();
        $prom = new promotion();
        $prom->set_id($_GET["delete_id"]);
        $obj->delete($prom);
    }
    header("location: ../presentation/index.php");
?>