


const btn = document.querySelector('.burger-btn__tools');
const mainMenu = document.getElementsByName('.header');
const AllNavItems = document.querySelector('.header__item');

const stepsBtn = document.querySelector('.steps__icon');
const stepsItem = document.querySelector('.steps__text-icon');

const showMenu = () => {
    mainMenu.classList.toggle('header--active')

AllNavItems.forEach(item => {
item.addEventListener('click', () => {
    mainMenu.classList.remove('header--active')
})
})
}
     btn.addEventListener('click', showMenu)
  
const showSteps = () => {
    stepsItem.classList.toggle('steps__text-icon--active')
}
stepsBtn.addEventListener('click', showSteps)
