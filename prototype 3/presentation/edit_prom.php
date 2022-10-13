<?php include '../data-access/promotionManager.php' ?>
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
        <h1>Modifier promotion</h1>
        <div class="form_div">
            <form action="../business/update_prom.php" method="POST">
                <label>nom:
                    <?php
                    $select_query = "SELECT * FROM promotion WHERE id = " . $_GET["edit_id"];
                    $select_res = $conn->query($select_query);
                    if ($select_res->num_rows > 0) {
                        while ($row = $select_res->fetch_assoc()) {
                    ?>
                            <input type="text" name="nom" value="<?php echo $row["nom"]; ?>">
                </label>
                <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                <input type="submit" value="Submit" name="update_prom">
        <?php
                        }
                    }
        ?>
        <p id="message"></p>

            </form>
        </div>
    </div>
    <script>
        let inp = document.getElementsByName("nom")[0];
        let submit = document.getElementsByName("update_prom")[0];
        let form = document.querySelector("form");
        let message = document.querySelector("#message");
        form.addEventListener("submit", (e) => {
            if (inp.value == "") {
                message.innerHTML = "field required";
                e.preventDefault();
            } else if (!isNaN(inp.value)) {
                message.innerHTML = "letters only";
                e.preventDefault();
            } else if (inp.value.length < 4) {
                message.innerHTML = "field must be longer then 3 characters";
                e.preventDefault();
            } else {
                message.innerHTML = "success";
            }
        })
    </script>
</body>

</html>