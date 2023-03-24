const modal_login = document.querySelector("#modal-login");
const registration_modal = document.querySelector("#modal-register");
const modal = document.querySelector("#modal");
const modal_edit_profile = document.querySelector("#modal-edit-profile");

const register_btn = document.querySelector("#register_modal");
const login_btn = document.querySelector("#login-btn-modal");
const create_acc_btn = document.querySelector("#create_account_btn");
const edit_profile_btn = document.querySelector("#edit_profile_open");

const close_btns = document.querySelectorAll(".close");

close_btns.forEach(function(close_btn) {
    close_btn.addEventListener('click', closeModal);
});


function showModalEditProfile() {
    modal_edit_profile.style.display = 'block';
}
function showModalLogin() {
    modal_login.style.display = 'block';
}
function showModalJoin() {
    modal.style.display = 'block';
}
function showModalRegister() {
    registration_modal.style.display = 'block';
    modal.style.display = 'none';
}
function closeModal() {
    modal.style.display = 'none';
    modal_login.style.display = 'none';
    registration_modal.style.display = 'none';

}

edit_profile_btn.addEventListener('click', showModalEditProfile)
login_btn.addEventListener('click', showModalLogin);
create_acc_btn.addEventListener('click', showModalRegister)
register_btn.addEventListener('click', showModalJoin);


window.addEventListener('click', (event) => {
    if(event.target === modal) {
        modal.style.display = 'none';
    }
    if(event.target === registration_modal) {
        registration_modal.style.display = 'none';
    }
    if(event.target === modal_login) {
        modal_login.style.display = 'none';
    }
    if(event.target === modal_edit_profile) {
        modal_edit_profile.style.display = 'none';
    }
})