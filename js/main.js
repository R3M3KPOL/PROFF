


const btn = document.querySelector('.burger-btn__tools');

const allNavItems = document.querySelectorAll('.header__item');
const stepsBtn = document.querySelectorAll('[data-tab-target]');
const tabContents = document.querySelectorAll('[data-tab-content]')
const mainMenu = document.querySelector('.header');
const bgcContainerVideo = document.querySelector('.main__container');
const footerYear = document.querySelector('.box-author__copy')
const onOneOptions = {rootMargin: "-125px 0px 0px 0px"};

// for gallery
const filterItem = document.querySelector('.gallery__nav-box');
const  filterImg = document.querySelectorAll('.gallery__items');

const previewBox = document.querySelector(".previewBox"),
previewImg = previewBox.querySelector(".previewBox__img"),
categoryName = previewBox.querySelector(".previewBox__title"),
closeIcon = previewBox.querySelector(".previewBox__icon");


const showMenu = () => {
    mainMenu.classList.toggle('header--active')

allNavItems.forEach (item => {
item.addEventListener('click', () => {
    mainMenu.classList.remove('header--active')

  })
})
};
btn.addEventListener('click', showMenu)
  




const observer = new IntersectionObserver(function(entries )
{
entries.forEach(entry =>{
if(!entry.isIntersecting) {
    mainMenu.classList.add('header--activeBgc')
} else {
    mainMenu.classList.remove('header--activeBgc')
}
});
},
onOneOptions);
observer.observe(bgcContainerVideo)



stepsBtn.forEach(tab =>{
tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget);
    tabContents.forEach(tabContent =>{
        tabContent.classList.remove('steps__word--active')
    })
stepsBtn.forEach(tab =>{
    tab.classList.remove('steps__timeline-icon--active')
})
tab.classList.add('steps__timeline-icon--active')
    target.classList.add('steps__word--active')

})

})


const appearOptions = {
    threshold:0.5,
    rootMargin: "0px 0px 0px 0px "
};
const faders = document.querySelectorAll('.fade-in')


const appearOnScroll = new IntersectionObserver (function (Entries, appearOnScroll)
 {
Entries.forEach(entry => {
    // console.log('scroll')
if (! entry.isIntersecting){
    return;
}else {
    entry.target.classList.add('appear')
    appearOnScroll.unobserve(entry.target);
    // console.log('good scroll')
}
})
}, appearOptions)

faders.forEach(fader => {
    appearOnScroll.observe(fader);
});




const handleCurrentYear = () => {
    const year = (new Date).getFullYear();
    footerYear.innerText = year ;
}
handleCurrentYear();


// gallery!!!

window.onload = () => { 

    filterItem.addEventListener('click', (e) => {

        if(e.target.classList.contains("gallery__nav-item"))
      {filterItem.querySelector(".gallery__nav-item--active").classList.remove("gallery__nav-item--active")
      e.target.classList.add("gallery__nav-item--active");}
      let filterName = e.target.getAttribute("data-name");
    //   console.log(filterName);

filterImg.forEach((image) => {
    let filterImages = image.getAttribute("data-name");
    // console.log(filterImages);
    if((filterImages == filterName ) || filterName == "all") {
        image.classList.remove("gallery__items--show");
        image.classList.add("gallery__items--show");
    }else {
        image.classList.add("gallery__items--hide");
        image.classList.remove("gallery__items--show");}
    })
    })


filterImg.forEach(elem => {

    elem.addEventListener('click', () => {
        previewBox.classList.add('previewBox--show');

        const originalSrc = elem.getAttribute("data-original")
    previewImg.src = `./img/photo/full/${originalSrc}`;
    const imgCategoryName = elem.getAttribute("data-name")
        categoryName.textContent = imgCategoryName ;

    
})
    closeIcon.addEventListener('click', () => {
        previewBox.classList.remove('previewBox--show');
    })

})

}
