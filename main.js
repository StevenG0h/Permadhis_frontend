setInterval(ezScroll,100);  
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

var topY = 0;
var viewportheight = window.innerHeight;
function ezScroll(){
    
    var scr = window.scrollY;
    
    if(scr > topY){
        window.scrollTo(0,viewportheight);
        topY = viewportheight;
        viewportheight = viewportheight + viewportheight;
        alert(viewportheight);
    }else if(scr < topY){
        
    }
}