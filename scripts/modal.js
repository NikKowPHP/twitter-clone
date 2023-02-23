const modal = document.querySelector("#modal");
const register_btn = document.querySelector("#register_modal");
const close_btn = document.querySelector(".close");


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
})