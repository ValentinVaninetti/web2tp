document.addEventListener("DOMContentLoaded", function() {

let ButtonAdd = document.querySelector("#btn_Add");
ButtonAdd.addEventListener("click", showAddDiv);

function showAddDiv(){
    let AddProductDiv = document.querySelector(".divAdd");
    AddProductDiv.classList.remove(".divAdd");
}

})
