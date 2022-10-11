<?php include '../data-access/conn.php'; ?>
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
            <input type="text" id="search_inp" placeholder="chercher">
        </div>
        <div class="data_div">
            <?php
            $select_query = "SELECT * FROM promotion";
            $select_res = $conn->query($select_query);
            if ($select_res->num_rows > 0) {
                while ($row = $select_res->fetch_assoc()) {
            ?>
                    <div class="data">
                        <div><?php echo $row["nom"]; ?></div>
                        <div class="edit_btn"><a href="edit_prom.php?edit_id=<?php echo $row["id"]; ?>">Edit</a></div>
                        <div class="delete_btn"><a href="../business/delete_prom.php?delete_id=<?php echo $row["id"]; ?>">Delete</a></div>
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