
function navLinkActive(target) {
    var nav = document.getElementsByClassName("nav-link");
    for (let index = 0; index < nav.length; index++) {
        nav[index].classList.remove("active");
    }
    nav[target].classList.add("active");
    
}
function detectSection() {
    var about = document.getElementById("about");
    var event = document.getElementById("event");
    if(event.offsetTop <= window.pageYOffset){
        navLinkActive(2);
    }else if(about.offsetTop <= window.pageYOffset){
        navLinkActive(1);
    }else{
        navLinkActive(0);
    }
}


var page = document.getElementsByClassName('event-main');
function revealPage() {
    var viewport = window.innerHeight;
    var pageLoc = page[0].getBoundingClientRect().top;
    var pageNum = 0;
    if(pageLoc <= 0){
        pageLoc = Math.abs(pageLoc);
        var pageNum = Math.floor( pageLoc / viewport);
        var reveal = (pageLoc / viewport) - pageNum ;
        page[pageNum+1].style.opacity = ''+ reveal +'';
    }else{
        var reveal = 1- (pageLoc / viewport) - pageNum ;
        page[pageNum].style.opacity = ''+ reveal +'';
    }
    
    
}


var carouselWrapper = document.querySelectorAll('.event-image-carousel-wrapper');
var carouselIndex = [];
for (let i = 0; i < carouselWrapper.length; i++) {
    carouselIndex[i] = 0;
}
function carousel(index,carousel) {
    carouselWrapper[carousel].style.transform = "translateX("+index*-20+"%)";
    carouselIndex[carousel] = index;
}
function nextCarousel(){
    for (let index = 0; index < carouselIndex.length; index++) {
        let carousel = carouselIndex[index];
        if(carousel == 4){
            carousel =-1;
        }
        this.carousel(carousel+1,index);
        
    }   
}
setInterval(nextCarousel,4000);