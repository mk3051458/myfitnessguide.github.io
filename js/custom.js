function showHeartset(){
    //document.getElementById("heartset").style.display = "none";
   /// document.getElementById("heartset").src = "images/1.jpeg";
    
}
function hideHeartset(){
    //console.log("Hello");
    
    //document.getElementById("heartset").src = "images/heartset.png";
                        
}
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");
console.log(navbar);


// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
