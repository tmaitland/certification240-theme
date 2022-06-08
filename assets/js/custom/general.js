//Handle navbar collapse
const togglerBtn = document.querySelector(".navbar-toggler");
const collapsednav = document.querySelector(".navbar-collapse");

togglerBtn.addEventListener("click", (e) => {
    collapsednav.classList.toggle("hide");
})