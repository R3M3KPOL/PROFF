


const btn = document.querySelector('.burger-btn__tools');
const mainMenu = document.querySelector('.header');
const AllNavItems = document.querySelectorAll('.header__item')

const showMenu = () => {
    mainMenu.classList.toggle('header--active')

AllNavItems.forEach(item => {
item.addEventListener('click', () => {
    mainMenu.classList.remove('header--active')
})
})
}
     btn.addEventListener('click', showMenu)
    // btn.addEventListener('click', () =>{
    //     mainMenu.classList.toggle('header--active');
    // });