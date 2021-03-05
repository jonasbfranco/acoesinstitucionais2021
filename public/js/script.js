console.log("Esta funcionando");

// Select the button
const btn = document.querySelector("#switch");

// Listen for a click on the button
btn.addEventListener("click", function () {
    // Toggle the .dark-theme class on the body
    document.body.classList.toggle("dark");
    btn.classList.toggle("active");

    // Let's say the theme is equal to light
    let theme = "light";
    let btntoggle = "active";
    // If the body contains the .dark-theme class...
    if (document.body.classList.contains("dark")) {
        // ...then let's make the theme dark
        theme = "dark";
        btntoggle = "";
    }
    // Then save the choice in a cookie
    document.cookie = "theme=" + theme;
    document.cookie = "btntoggle=" + btntoggle;
});
