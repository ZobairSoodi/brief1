<?php include '../data-access/conn.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../business/update_prom.php" method="POST">
        <?php
        $select_query = "SELECT * FROM promotion WHERE id = " . $_GET["edit_id"];
        $select_res = $conn->query($select_query);
        if ($select_res->num_rows > 0) {
            while ($row = $select_res->fetch_assoc()) {
        ?>
                <input type="text" name="nom" value="<?php echo $row["nom"]; ?>">
                <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                <input type="submit" value="Submit" name="update_prom"> 
        <?php
            }
        }
        ?>

    </form>
</body>

</html>