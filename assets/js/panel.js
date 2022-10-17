//Ejecutar funcion en el evento click
document.getElementById("btn_open").addEventListener("click", open_close_menu);

let menuid = document.getElementById("menuid");
let btn_open = document.getElementById("btn_open");
let body = document.getElementById("body");

function open_close_menu(){
    body.classList.toggle("body_move");
    menuid.classList.toggle("menu_move");
}

if (window.innerWidth < 760){
    body.classList.add("body_move");
    menuid.classList.toggle("menu_move");
}

window.addEventListener("resize", function(){
    if (window.innerWidth < 760){
        body.classList.remove("body_move");
        menuid.classList.remove("menu_move");
    }

    if (window.innerWidth < 760){
        body.classList.add("body_move");
        menuid.classList.add("menu_move");
    }
});