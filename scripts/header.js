const border_line = document.createElement("div");
const home_elements_container = document.getElementById("header-buttons");
const home_elements = document.getElementsByClassName("header-button-container");

for(var i = 0; i < home_elements.length; i++) {
    home_elements[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("header-button active");
        var child = this.querySelector(".header-button")
        current[0].className = current[0].className.replace(" active", "");

        // this.className += " active";
        child.className += " active";
    })
}