const modal = document.querySelector("#modal");
const register_btn = document.querySelector("#register_modal");
const close_btn = document.querySelector(".close");

const registration_modal = document.querySelector("#modal-register");
const create_acc_btn = document.querySelector("#create_account_btn");


const register_username_input = document.querySelector("#register_username");
const register_email_input = document.querySelector("#register_email");
const register_password_input = document.querySelector("#register_password");

const register_username_label = document.querySelector("#register_username_label")

register_username_input.addEventListener('input', () => {
    if(input.value) {
        console.log(input.value);
        register_username_label.classList.add('active');
    } else {
        label.classList.remove('active');
    }
})
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