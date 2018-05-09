
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
   <link href="https://fonts.googleapis.com/css?family=Righteous|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <script type="text/javaScript" src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.0.2/less.min.js"></script>
  </head>

  <body>
<div id="sidenav" class="sidenav">
  <a class="hamburger"></a>
  <a  href="index.php"><li><p class="li-active"><span>Home.</span></p></li></a>
  <a href="about.php"><li>About Us.</li></a>
  <a href="contact.php"><li>Contact.</li></a>
</div>
   <?php include ("components/menu.php"); ?>

    <section class="contact">

        <div class="container">
                
            <div class="row contact-map">
                  
                <div class="col-md-4 wow fadeInLeft" >
                  <h1 class="text-map">Let's Chat</h1>

                  <div class="line-separator"></div>
                  <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe cupiditate corrupti, nostrum quia! 
                    </p>
                    <br>
                    <h1 class="heading-3"><span><a class="btn btn-dark" href="" >Leave a Message</a></span></h1>
                </div>

                <div class="col-md-8">
                    <div id="map" class="wow fadeInUp" ></div>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvGznT0AwtcCy_8yosOf6ip86suVT8DD0&callback=initMap"
    async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <script src="assets/js/map.js"></script>
    <script src="assets/js/menu-effect.js"></script>
  
    <script src="assets/js/nav-mobile.js"></script>
  
    
  </body>
</html>