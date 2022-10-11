let search_inp = document.querySelector("#search_inp");
let data_div = document.querySelector(".data_div")

search_inp.addEventListener("keyup", ()=>{
    let nom = search_inp.value;
    let form = new FormData();
    form.append("nom", nom);
    form.append("search_prom", "post");
    fetch("../business/search_prom.php", {
        method: "POST",
        body: form
    }).then((res)=>{
        return res.json();
    }).then((data)=>{
        console.log(data);
        data_div.innerHTML = "";
        data.forEach(el => {
            let data_el = document.createElement("div");
            data_el.classList.add("data");
            let nom_el = document.createElement("div");
            nom_el.innerHTML = el["nom"];
            data_el.appendChild(nom_el);

            let edit_el = document.createElement("div");
            edit_el.innerHTML = `<a href="edit_prom.php?edit_id=${el["id"]}">Edit</a>`;
            edit_el.classList.add("edit_btn");
            data_el.appendChild(edit_el);

            let delete_el = document.createElement("div");
            delete_el.innerHTML = `<a href="../business/delete_prom.php?delete_id=${el["id"]}">Delete</a>`;
            delete_el.classList.add("delete_btn");
            data_el.appendChild(delete_el);

            data_div.appendChild(data_el);
        });
    })
})