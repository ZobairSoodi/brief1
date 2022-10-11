<?php include '../crud/conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="cont">
        <div class="input_div">
            <input type="text" value="Ajouter promotion">
        </div>
        <div class="data_div">
            <?php
            $select_query = "SELECT * FROM promotion";
            $select_res = $conn->query($select_query);
            if ($select_res->num_rows > 0) {
                while ($row = $select_res->fetch_assoc()) {
            ?>
                    <div class="data">
                        <span><? echo $row["nom"]; ?></span>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</body>

</html>