const nav = document.querySelector('.nav');
const intro = document.querySelector('.intro2');


const introOptions = {};
const introObserver = new IntersectionObserver(function(entries,introObserver){
entries.forEach(entry =>{
    if(entry.isIntersecting){
        nav.classList.remove('nav2');
        nav.classList.add('nav');
        
    }
    else{
        nav.classList.remove('nav');
        nav.classList.add('nav2');
    }
})
}, introOptions);

introObserver.observe(intro);

