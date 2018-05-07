
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>FrontEnd Test</title>

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet/less" type="text/css" href="assets/css/intro.less" />
    <link href="https://fonts.googleapis.com/css?family=Arvo:bold|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <script type="text/javaScript" src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.0.2/less.min.js"></script>
  </head>

  <body>
<div id="sidenav" class="sidenav">
  <a href="#" class="hamburger"></a>
  <a href=""><li class="active">Homre</li></a>
  <a href=""><li>Link</li></a>
</div>
   <nav class="navbar navbar-expand navbar-dark fixed-top">
      <a class="navbar-brand" href="#">Front end</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          
        </form>
      </div>
    </nav>
  <section class="intro-about">
    <div class="container">
      <div class="row">
        <div class="about-header">
            <i class="fas fa-quote-right"></i>
          
        </div>
        
      </div>
      
    </div>
    
  </section>

      <section class="sign-up">
        <div class="container" align="center">
          <h1 class="head-section">Sign up for our newsletter
         to recieve offert</h1><br>
         <div class="vertical-separator"> </div>
         <br>
          <div class="row ">
              
           
              <div class="col-md form-sign" >
                    <div class="input-group">
                <input type="email" class="form-control" placeholder="Enter your email">
                <span class="input-group-btn">
                  <button class="btn btn-send" type="button">OK</button>
                </span>
              </div>
            </div>
                
              </div>
            
          </div>
          
        
         
        
      </section>
     
     <footer class="footer">
      <div class="container">
        <div class="row">
            <div class="col-md">
              <h5>Office</h5>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div class="col-md">
              <h5>Get it touch</h5>
              <p>melara2396@gmail.com</p>

            </div>
            <div class="col-md">
              <h5>Social</h5>
              <p>Conec with my email and facebook</p>
            </div>
          
        </div>
      </div>
    </footer>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/menu-effect.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script type="text/javaScript">
      // Initializations
var sidenav = new Sidenav("sidenav");
document.getElementById("sidenav").addEventListener("click", function () {
  sidenav.openClose();
})

/**
 * Sidenav
 */
function Sidenav(ob) {
  var navId = (ob !== null && typeof ob === 'object') ? ob.id : ob;
  var opt = ob || {};

  this.isOpen = opt.isOpen || false;
  this.sidenav = document.getElementById(navId);
}

// True is open, false is close and no option is toggle
Sidenav.prototype.openClose = function (open) {
  var self = this;

  self.isOpen = open || !self.isOpen;
  if (self.isOpen) {
    self.sidenav.classList.add("open");
  } else {
    self.sidenav.classList.remove("open");
  }
}
    </script>
  
    
  </body>
</html>