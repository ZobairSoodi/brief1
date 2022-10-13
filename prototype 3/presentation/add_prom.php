<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../business/insert_prom.php" method="POST">
        <label for="">Nom: <input type="text" name="nom"></label>
        <input type="submit" name="add_prom" id="">
        <p id="message"></p>
    </form>
    <script>
        let inp = document.getElementsByName("nom")[0];
        let submit = document.getElementsByName("add_prom")[0];
        let form = document.querySelector("form");
        let message = document.querySelector("#message");
        form.addEventListener("submit", (e)=>{
            if(inp.value == ""){
                message.innerHTML = "field required";
                e.preventDefault();
            }
            else if(!isNaN(inp.value)){
                message.innerHTML = "letters only";
                e.preventDefault();
            }
            else if(inp.value.length < 4){
                message.innerHTML = "field must be longer then 3 characters";
                e.preventDefault();
            }
            else{
                message.innerHTML = "success";
            }
        })
    </script>
</body>

</html>