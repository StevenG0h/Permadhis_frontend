
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
    if(event.offsetTop - 20 <= window.pageYOffset){
        navLinkActive(2);
    }else if(about.offsetTop -20 <= window.pageYOffset){
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
var carouselButton = document.querySelectorAll('.event-image-carousel-button-wrapper');
var carouselIndex = [];
var carouselButtonIndex = [];
for (let i = 0; i < carouselWrapper.length; i++) {
    carouselIndex[i] = 0;
    carouselButtonIndex[i] = 0;
}
function carousel(index,carousel) {
    carouselWrapper[carousel].style.transform = "translateX("+index*-20+"%)";
    carouselButton[carousel].children[carouselButtonIndex[carousel]].classList.remove('button-active');
    carouselIndex[carousel] = index;
    carouselButtonIndex[carousel] = carouselIndex[carousel];
    carouselButton[carousel].children[carouselButtonIndex[carousel]].classList.add('button-active');
}
function nextCarousel(){
    for (let i = 0; i < carouselIndex.length; i++) {
        let carousel = carouselIndex[i];
        if(carousel == 4){
            carousel =-1;
        }
        this.carousel(carousel+1,i);
        
    }   
}
setInterval(nextCarousel,4000);