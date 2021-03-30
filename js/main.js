


const btn = document.querySelector('.burger-btn__tools');

const allNavItems = document.querySelectorAll('.header__item');
const stepsBtn = document.querySelectorAll('[data-tab-target]');
const tabContents = document.querySelectorAll('[data-tab-content]')
const mainMenu = document.querySelector('.header');
const bgcContainerVideo = document.querySelector('.main__container');
// const mediaQuery = window.matchMedia ('(min-width:765px)');

const showMenu = () => {
    mainMenu.classList.toggle('header--active')

allNavItems.forEach (item => {
item.addEventListener('click', () => {
    mainMenu.classList.remove('header--active')

  })
})
};
btn.addEventListener('click', showMenu)
  
const onOneOptions = {rootMargin: "-85px 0px 0px 0px"};

const observer = new IntersectionObserver(function(entries )
{
entries.forEach(entry =>{
// console.log(entry.target);
if(!entry.isIntersecting) {
    mainMenu.classList.add('header--activeBgc')
} else {
    mainMenu.classList.remove('header--activeBgc')
}
});
},
);
observer.observe(bgcContainerVideo)





















// const HandleObserver = () => {

//     if (window.scrollY > 0 && mediaQuery.matches )
//     {mainMenu.style.cssText = 
//     `
//    background-color: #5fbeb7;
//    color:#004759; 
//     `}
// else
// {mainMenu.style.cssText = 
//     `
//    background-color: transparent;
//    color:#FFFFFF; 
//     `}

// }

// window.addEventListener('scroll', HandleObserver);





// const HandleObserver = () => {

// const scrollSection = window.scrollY;

// allSection.forEach(section => {

// if(section.classList.contains('wrapper') && section.offsetTop <= scrollSection  && mediaQuery.matches)
// {mainMenu.style.cssText = 
//     `
//    background-color: #5fbeb7;
//    color:#004759; 
//     `}
//     else(
//         ! ( section.classList.contains('wrapper') && section.offsetTop <= scrollSection && mediaQuery.matches))
// {
//   mainMenu.style.cssText =
//   `
//    background-color:transparent;
//    color:#FFFFFF;     
//    `
// }
// })

// } 
// window.addEventListener('scroll', HandleObserver )


stepsBtn.forEach(tab =>{
tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget);
    tabContents.forEach(tabContent =>{
        tabContent.classList.remove('steps__word--active')
    })
    target.classList.add('steps__word--active')
// if (target == 'steps__word--active') {
//     console.log(`hello`);
   
// }

})

})


// stepsBtn.forEach((element) => {
//   element.addEventListener('click', (e) => {
//     if (e.target.className == 'steps__word') {
//       const stepsItem = e.target.nextElementSibling;
//       if(stepsItem.classList.contains('steps__word--active')){
//         stepsItem.classList.remove('steps__word--active');
//         return;
//       }
//       const active = document.querySelectorAll('.steps__word--active');
//       active.forEach((items) => {
//         items.classList.remove('steps__word--active');
//       });
//       stepsItem.classList.add('steps__word--active');
//     }
//   });
// });
