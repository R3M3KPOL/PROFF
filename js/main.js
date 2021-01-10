const showMenu = () => {
const btn = document.querySelector('.fa-tools');
const mainMenu = document.querySelector('.main-menu');


btn.addEventListener('click', () =>{
    mainMenu.classList.toggle('active');
});
}
showMenu();

