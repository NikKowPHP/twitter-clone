const modal_login = document.querySelector("#modal-login");

const modal = document.querySelector("#modal");
const register_btn = document.querySelector("#register_modal");
const login_btn = document.querySelector("#login-btn-modal");


const close_btn = document.querySelector(".close");

const registration_modal = document.querySelector("#modal-register");
const create_acc_btn = document.querySelector("#create_account_btn");


const register_username_input = document.querySelector("#register_username");
const register_email_input = document.querySelector("#register_email");
const register_password_input = document.querySelector("#register_password");

const register_username_label = document.querySelector("#register_username_label")

login_btn.addEventListener('click', () => {
    modal_login.style.display = 'block';
});





create_acc_btn.addEventListener('click', () => {
    registration_modal.style.display = 'block';
    modal.style.display = 'none';
})

register_btn.addEventListener('click', () => {
    modal.style.display = 'block';
});

close_btn.addEventListener('click', () => {
    modal.style.display = 'none';
});

window.addEventListener('click', (event) => {
    if(event.target === modal) {
        modal.style.display = 'none';
    }
    if(event.target === registration_modal) {
        registration_modal.style.display = 'none';
    }
})