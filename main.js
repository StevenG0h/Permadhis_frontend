
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
var viewport = window.innerHeight;
var page = document.getElementsByClassName('event-main');
page[0].style.opacity = '1';
function revealPage() {
    
    var pageNum = Math.floor(window.scrollY / viewport);
    var reveal = (window.scrollY / viewport) - pageNum ;
    page[pageNum-1].style.opacity = ''+ reveal +''
}