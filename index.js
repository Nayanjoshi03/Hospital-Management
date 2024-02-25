const box = document.getElementById("box");
const imgc = document.getElementById("click");
let show = false;
imgc.addEventListener("click", () => {
    if (!show) {
        box.style.display = "flex";
        show = true;
    }
    else {
        box.style.display = "none";
        show = false;
    }
})
