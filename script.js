

boxs = document.querySelectorAll(".box");

boxs.forEach(box => {
    box.addEventListener("click", function() {
        suprCenter();
        box.classList.toggle("center")

    })
})

function suprCenter() {

    boxs.forEach(box => {
            box.classList.remove("center")
    })
}



