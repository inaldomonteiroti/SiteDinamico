  $(document).ready(function(){
    $('.sidenav').sidenav();
    $('.slider').slider({full_width: true});
    $(".dropdown-trigger").dropdown(); 
    $('select').material_select();        
  });   

  $(document).ready(function(){
    $('select').formSelect();
  });

  
  
  function sliderPrev(){
    $('.slider').slider('pause');
    $('.slider').slider('prev');
  }
  
  function sliderNext(){
    $('.slider').slider('pause');
    $('.slider').slider('next');
  }