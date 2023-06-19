import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// ヘッダーメニュー
const headerMenu = document.getElementById("headerMenu");
const userName = document.getElementById("userName");

userName.addEventListener("click", function () {
    let style = window.getComputedStyle(headerMenu);
    let value = style.getPropertyValue("display");

    if (value == "none") {
        headerMenu.style.display = "block";
    } else if (value == "block") {
        headerMenu.style.display = "none";
    }
});
