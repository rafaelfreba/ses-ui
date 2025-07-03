/** Este script JavaScript é responsável por alternar entre os formulários de login e recuperação de senha */

const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

function isMobile() {
    return window.innerWidth <= 768;
}

registerBtn.addEventListener('click', (e) => {
    e.preventDefault();

    if (isMobile()) {
        container.classList.remove('form-mobile-login');
        container.classList.add('form-mobile-recovery');
    } else {
        container.classList.add("active");
    }
});

loginBtn.addEventListener('click', (e) => {
    e.preventDefault();

    if (isMobile()) {
        container.classList.remove('form-mobile-recovery');
        container.classList.add('form-mobile-login');
    } else {
        container.classList.remove("active");
    }
});
