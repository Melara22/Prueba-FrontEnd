
jQuery(document).ready(function($){
  // Encontrar Link
  var path = window.location.pathname.split("/").pop();
  
  // Index principal
  if ( path == '' ) {
    path = 'index.php';
  }
      
  var target = $('nav a[href="'+path+'"]');
  // Add active class to target link
  target.addClass('active');
});
