


const btn = document.querySelector('.burger-btn__tools');
const mainMenu = document.querySelector('.header');
const stepsItem = document.querySelector('.steps__text-icon');
const allNavItems = document.querySelectorAll('.header__item');
const stepsBtn = document.querySelectorAll('.steps__timeline-item');


const showMenu = () => {
    mainMenu.classList.toggle('header--active')

allNavItems.forEach (item => {
item.addEventListener('click', () => {
    mainMenu.classList.remove('header--active')

  })
})
};
btn.addEventListener('click', showMenu)
  
stepsBtn.forEach((element) => {
  element.addEventListener('click', (e) => {
    if (e.target.className == 'steps__timeline-icon') {
      const stepsItem = e.target.nextElementSibling;
      if(stepsItem.classList.contains('steps__subtitle--active')){
        stepsItem.classList.remove('steps__subtitle--active');
        return;
      }
      const active = document.querySelectorAll('.steps__subtitle--active');
      active.forEach((items) => {
        items.classList.remove('steps__subtitle--active');
      });
      stepsItem.classList.add('steps__subtitle--active');
    }
  });
});


