function showHeartset(){
    //document.getElementById("heartset").style.display = "none";
   /// document.getElementById("heartset").src = "images/1.jpeg";
    
}
function hideHeartset(){
    //console.log("Hello");
    
    //document.getElementById("heartset").src = "images/heartset.png";
                        
}
jQuery(document).ready(function($) {
  var alterClass = function() {
    var ww = document.body.clientWidth;
     if (ww < 501) {
      $('#deck').addClass('d-block');
      $('#deck').addClass('mx-auto');
      
    }
    if (ww >= 501) {
      $('.deck').removeClass('d-block');
      $('.deck').removeClass('mx-auto');
    }
  };
  $(window).resize(function(){
    alterClass();
  });
  //Fire it when the page first loads:
  alterClass();
});