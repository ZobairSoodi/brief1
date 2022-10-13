<?php include '../data-access/promotionManager.php'; ?>
<?php include '../data-access/promotion.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="cont">
        <div class="input_div">
            <a href="add_prom.php">Ajouter promotion</a>
        </div>
        <div class="data_div">
            <?php
            $obj = new PromotionManager();
            $prom = new promotion();
            $prom->set_nom("");
            $select = $obj->search($prom);
            if (count($select) > 0) {
                for ($i = 0; $i < count($select); $i++) {
            ?>
                    <div class="data">
                        <div><?php echo $select[$i]["nom"]; ?></div>
                        <div class="edit_btn"><a href="edit_prom.php?edit_id=<?php echo $select[$i]["id"]; ?>">Edit</a></div>
                        <div class="delete_btn"><a href="../business/delete_prom.php?delete_id=<?php echo $select[$i]["id"]; ?>">Delete</a></div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <script src="src/js/main.js"></script>
</body>

</html>