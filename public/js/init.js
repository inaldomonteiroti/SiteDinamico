// document.addEventListener('DOMContentLoaded', function() {
//     var elems = document.querySelectorAll('.sidenav');
//     var instances = M.Sidenav.init(elems, options);
//   });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
    $('.slider').slider({full_width: true});
  });   

  
  
  function sliderPrev(){
    $('.slider').slider('pause');
    $('.slider').slider('prev');
  }
  
  function sliderNext(){
    $('.slider').slider('pause');
    $('.slider').slider('next');
  }