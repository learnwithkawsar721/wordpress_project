$('nav-link').hover(
    function(){ 
      $("a.active").addClass('inactive').removeClass('active');
    },
    function(){ 
      $("a.inactive").addClass('active').removeClass('inactive'); 
    }
  );


