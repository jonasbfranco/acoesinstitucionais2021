console.log("Esta funcionando");

const btnSwitch = document.querySelector("#switch");

btnSwitch.addEventListener("click", () => {
    document.body.classList.toggle("dark");
    btnSwitch.classList.toggle("active");

    //Guardamos o modo em localstorage.
    if (document.body.classList.constains("dark")) {
        localStorage.setItem("dark-mode", "true");
    } else {
        localStorage.setItem("dark-mode", "false");
    }
});

//Obter o modo atual dark ou clear
if (localStorage.getItem("dark-mode") === "true") {
    document.body.classList.add("dark");
    btnSwitch.classList.add("active");
} else {
    document.body.classList.remove("dark");
    btnSwitch.classList.remove("active");
}
