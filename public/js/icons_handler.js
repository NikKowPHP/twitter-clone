
// GET HIDDEN IMAGE INPUTS
const edit_profile_background_image = document.querySelector("#edit-profile-background-image");
const edit_profile_user_image = document.querySelector("#edit-profile-user-image");

// GET SVG ICONS
const edit_profile_background_image_btn = document.querySelector("#edit-profile-background-image-btn")
const edit_profile_user_image_btn = document.querySelector("#edit-profile-user-image-btn")

function open_background_image_selection() {
    edit_profile_background_image.click();
}
function open_user_image_selection() {
    edit_profile_user_image.click();
}

edit_profile_background_image_btn.addEventListener('click', open_background_image_selection);
edit_profile_user_image_btn.addEventListener('click', open_user_image_selection);
