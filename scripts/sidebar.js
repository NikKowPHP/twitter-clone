const sidebar_profile = document.querySelector("#sidebar_profile");
const sidebar_profile_tooltip = document.querySelector("#sidebar_profile_tooltip");


sidebar_profile.addEventListener("click", function(event) {
    if(sidebar_profile.contains(event.target)) {
        sidebar_profile_tooltip.style.opacity = 1;
    }
});
document.onclick = function(event) {
    if(event.target !== sidebar_profile && event.target !== sidebar_profile_tooltip && !sidebar_profile.contains(event.target)) {
        sidebar_profile_tooltip.style.opacity= 0;
    }
}