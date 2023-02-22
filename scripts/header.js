const header_links = document.querySelectorAll(".header-button-link");
header_links.forEach(link => {
    link.addEventListener('click', function() {
        header_links.forEach(l => l.classList.remove("active-home-link"));
        this.classList.add("active-home-link");
    })
})