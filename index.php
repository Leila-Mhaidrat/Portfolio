<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?php echo $lang["title"]; ?></title>

  <!-- google fonts links -->
  <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- bootstrap links -->
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
  <!-- index stylesheet and javascript-->
  <link rel="stylesheet" href="css/style.css">
  <!-- portfolio cards stylesheet links -->
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
<!-- skills progress bars stylesheet and javascriprt  links because its a lib and it has its own js-->
  <link rel="stylesheet" href="css/bars.css">
  <script src="js/bars.js"></script>
  <link href="css/ionicons/css/ionicons.min.css" rel="stylesheet">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  
</head>
<body>

  <!--HEADER / Logo and Navigation-->

  <header>
    <div class="container-fluid navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a id="brand" href="#welcome" class="navbar-brand .sliding-u-r-l">Leila M'haidrat</a>
          <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <nav>
          <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="myCollapsible">
            <li><a href="#A"><?php echo $lang["about"]; ?></a></li>
            <li><a href="#B"><?php echo $lang["skills"]; ?></a></li>
            <li><a href="#C"><?php echo $lang["services"]; ?></a></li>
            <li><a href="#D"><?php echo $lang["portfolio"]; ?></a></li>
            <li><a href="#E"><?php echo $lang["awards"]; ?></a></li>
            <li><a href="#F"><?php echo $lang["contact"]; ?></a></li>
            <li>
          
          <!-- flags to switch languages between french end english no arabic yet :p -->
            <div class="language text-center">
              
                 <form id="language">
                    <input type="hidden" name="lang" id="lang">
                    <button id="chooseLang" type="submit" style="display:none;"></button>
                  </form>
                  <a onclick="getElementById('lang').value = 'en'; getElementById('chooseLang').click();"><img src="img/uka.png" id="img1" alt="" width="28px" height="15px"></a>
                 <a onclick="getElementById('lang').value = 'fr'; getElementById('chooseLang').click();"><img src="img/france.jpg" id="img2" alt="" width="28px" height="15px"></a>
          </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="container-fluid welcome" id="welcome">
      <h1 class="text-center " data-aos="fade-down"><?php echo $lang["welcome"]; ?></h1>
      <div class="arrow-down text-center">
        <a href="#about"><i class="fa fa-angle-down fa-2x"></i></a>
      </div>
    </div>
  </header>

   <!--ASIDE / About informations-->

   <aside class="about" id="about">
    <div class="container">
      <h2 id="A"><span><?php echo $lang["about"]; ?></span></h2>
      <div class="row" id="abouta"> 
        <div class="col-xs-12 col-sm-12 col-md-6 profile-pic-container">
          <div class="profile-picture  pull-right wow fadeInUpLeft ">
            <img src=" img/about.jpg" class="img-responsive img-circle" alt="profile-picture">
            <div id="me"><h3 class="text-center" data-aos="fade-up" > <?php echo $lang["me"]; ?></h3></div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 description">
          <h3><?php echo $lang["something"]; ?></h3>
          <p class="text-justify"><?php echo $lang["hi"]; ?><br><?php echo $lang["iam"]; ?><br>
            <?php echo $lang["born"]; ?><br>
            <?php echo $lang["curiousity"]; ?><br>
            <?php echo $lang["after"]; ?><br>
            <?php echo $lang["since"]; ?><br>
            <?php echo $lang["botton"]; ?>

          </p>
          <!-- download cv botton -->
          <center>
            <a href="img/Resume.pdf" target="blank" download="Leila M'HAIDRAT"> <?php echo $lang["cv"]; ?></a>
            <!-- <a href=""> <?php echo $lang["cv video"]; ?></a> -->
          </center>
        </div>
      </div>
    </div>
  </aside>
  <!--SKILLS / skiils informations-->

  <div class="container">
      <section id="skills" style="padding-bottom:60px;">
          <h2 id="B"><span><?php echo $lang["skills"]; ?></span></h2>
          <!-- <div class="text-center"> <h4><?php echo $lang["experience"]; ?></h4></div> -->
     </section>
   </div> 
   <!-- brogress bars -->

<section class='bar'>
  <section class='wrap'>
    <div class='bar_group' max='600'>
        <div class='bar_group__bar thin elastic' label='HTML' value='450' style="background:#91C3CC"></div>
        <div class='bar_group__bar thin elastic' label='CSS' value='400' style="background:#91C3CC"></div>
        <div class='bar_group__bar thin elastic' label='JAVASCRIPT' value='250' style="background:#91C3CC"></div>
        <div class='bar_group__bar thin elastic' label='SQL' value='370' style="background:#91C3CC"></div>
        <div class='bar_group__bar thin elastic' label='PHP' value='200' style="background:#91C3CC"></div>
    </div>
    <div class='clear'></div>
  </section>
</section>

<!-- Bars JavaScript -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/bars.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

   </script>

<!-- services cards -->
<div class="container">
      <section id="services">
          <h2 id="C" ><span> <?php echo $lang["services"]; ?></span></h2>
     </section>
   </div> 
<section  id="SERVICES" class="section pad-bot5 bg-white">
    <div class="container">
      <div class="row mar-bot40">
        <div class="col-lg-4 wow bounceInUp">
          <div class="box">
            <div class="align-center">
              <div class="wow rotateIn">
                <div class="service-col">
                  <div class="service-icon">
                    <figure><i class="fas fa-project-diagram"></i></figure>
                  </div>
                  <h3><a href="#"><?php echo $lang["conception"]; ?></a></h3>
                  <p><?php echo $lang["details"]; ?></p>
                </div>
              </div>
            </div>
        </div>
      </div>
        <div class="col-lg-4 wow bounceInUp">
         <div class="box">
          <div class="align-center">
              <div class="wow rotateIn">
                <div class="service-col">
                  <div class="service-icon">
                    <figure><i class="fas fa-comments"></i></figure>
                  </div>
                  <h3><a href="#"><?php echo $lang["communication"]; ?></a></h3>
                  <p><?php echo $lang["communicate"]; ?></p>
                </div>
              </div>
          </div>
         </div>
        </div>
        <div class="col-lg-4 wow bounceInUp">
         <div class="box">
          <div class="align-center">
            <div class="wow rotateIn">
              <div class="service-col">
                <div class="service-icon">
                  <figure><i class="fas fa-book-open"></i></figure>
                </div>
                <h3><a href="#"><?php echo $lang["documentation"]; ?></a></h3>
                <p><?php echo $lang["informations"]; ?></p>
              </div>
            </div>
        </div>
      </div>
      </div>
    </div>
    </div>
</section>
  <!--MAIN / Portfolio cards-->

<main role="main" id="portfolio">
  <div class="container">
    <div class="projects">
        <h2 id="D"><span><?php echo $lang["portfolio"]; ?></span></h2>
        <!-- <h4 class="text-center"><?php echo $lang["bellow"]; ?></h4> -->
    </div>
      <section id="courses" class="section-padding">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4 col-sm-6 padleft-right">
                      <figure class="imghvr-fold-up">
                        <img src="img/project-1.png" class="img-responsive">
                        <figcaption>
                          <h3>EPOCKET</h3>
                          <p><span><?php echo $lang["bank"]; ?></p>
                        </figcaption>
                        <a href="#"></a>
                      </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 padleft-right">
                      <figure class="imghvr-fold-up">
                        <img src="img/project-2.png" class="img-responsive">
                        <figcaption>
                          <h3>YOUCODE WEB SITE</h3>
                          <p><?php echo $lang["makesite"]; ?></p>
                        </figcaption>
                        <a href="#"></a>
                      </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 padleft-right">
                      <figure class="imghvr-fold-up">
                        <img src="img/project-3.png" class="img-responsive">
                        <figcaption>
                          <h3>ADMIN PANNEL</h3>
                          <p><?php echo $lang["store"]; ?></p>
                        </figcaption>
                        <a href="#"></a>
                      </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 padleft-right">
                      <figure class="imghvr-fold-up">
                        <img src="img/project-4.png" class="img-responsive">
                        <figcaption>
                          <h3>YOUCODE WORKSHOPS</h3>
                          <p><?php echo $lang["workshops"]; ?></p>
                        </figcaption>
                        <a href="#"></a>
                      </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 padleft-right">
                      <figure class="imghvr-fold-up">
                        <img src="img/project-5.png" class="img-responsive">
                        <figcaption>
                          <h3>CARAVANE YOUCODE</h3>
                          <p><?php echo $lang["caravane"]; ?></p>
                        </figcaption>
                        <a href="#"></a>
                      </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 padleft-right">
                      <figure class="imghvr-fold-up">
                        <img src="img/project-3.png" class="img-responsive">
                        <figcaption>
                          <h3>SAVE THE FOREST</h3>
                          <p><?php echo $lang["forest"]; ?></p>
                        </figcaption>
                        <a href="#"></a>
                      </figure>
                    </div>
                  </div>
                </div>
              </section>
    </div>
  </main>

 <!-- awards cards -->
 <div class="container">
      <section id="awards">
          <h2 id="E"><span> <?php echo $lang["awards"]; ?></span></h2>
          <h4></h4>
     </section>
   </div> 
   <section id="prices" class="section-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon wow rotateIn" style="background: #fceef3;"><i class="ion-trophy" style="color: #ff689b;"></i></div>
            <h3 class="title text-center"><a href=""><?php echo $lang["agadir"]; ?></a></h3>
            <p class="description"><?php echo $lang["devfest"]; ?></p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon wow rotateIn" style="background: #e6fdfc;"><i class="ion-trophy" style="color: #3fcdc7;"></i></div>
            <h3 class="title text-center"><a href=""><?php echo $lang["refonte"]; ?></a></h3>
            <p class="description"><?php echo $lang["remake"]; ?></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon wow rotateIn" style="background:#fff0da ;"><i class="ion-trophy" style="color:#e98e06 ;"></i></div>
            <h3 class="title text-center"><a href=""><?php echo $lang["safi"]; ?></a></h3>
            <p class="description"><?php echo $lang["digithon"]; ?></a></p>
          </div>
        </div> 
      </div>

    </div>
  </section>

  <!--FOOTER / Contact form  -->

  <footer id="contact">
    <div class="container" id="footer">
      <div class="row text-center social">
        <h2 id="F"> <span><?php echo $lang["contact"]; ?></span></h2>
      </div>
      <div class="row text-center social">
        <h4><?php echo $lang["want"]; ?></h4>
          <form id="contacts" method="post" >
               <input name="name" type="text" calss="form-control" placeholder="<?php echo $lang["name"]; ?>" required><br>
              <input name="number" type="text" calss="form-control" placeholder="<?php echo $lang["number"]; ?>" required><br>
              <input name="email" type="text" calss="form-control" placeholder="<?php echo $lang["email"]; ?>" required><br>
              <textarea name="message" calss="form-control" id="" placeholder="<?php echo $lang["message"]; ?>" rows="4" required></textarea><br>
              <input  class="submit" name="submit" type="submit" id="submit" class="form-control" value="<?php echo $lang["send"]; ?>">
          </form>

  <!-- sending mail PHP code -->
  <?php

  if (isset($_POST['submit'])) {

    if (mail("leila.mhaidrat@gmail.com", $_POST['name'], $_POST['number'], $_POST['email'] . " , " . $_POST['message'])) {
      $SM = <<<prod
                    <div id='alert' class="alert alert-info " role="alert text-center" >
                      Message envoyé!
                    </div>
prod;
      
      echo $SM;
    }
  }
  ?>
        </div>
      </div>
    


    <!-- my socila media icons and links -->

    <div class="row text-center social">
      <ul class="list-unstyled list-inline">
        <li>
              <a href="https://twitter.com/leilaMhaidrat" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
        </li>
        <li>
             <a href="https://www.facebook.com/leila.mhaidrat" target="_blank"><i class="fa fa-facebook-official fa-2x"></i></a>
        </li>
        <li>
             <a href="https://github.com/Leila-Mhaidrat" target="_blank"><i class="fa fa-github fa-2x"></i></a>
        </li>
        <li>
              <a href="https://www.instagram.com/leila_mhrt/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
        </li>
        <li>
          <a href="https://www.linkedin.com/in/leilaMhaidrat" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
        </li>
      </ul>
    </div>
  
    </div>
  </footer>

  
  <!-- index javascriprt links -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/holder/2.8.1/holder.min.js'></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/wow/wow.min.js"></script>
  <script src="js/main.js"></script>

  <script>
  AOS.init();
</script>

  <script>
    $(document).ready(function() {
  $('a[href^="#"]').on('click', function(e) {
    e.preventDefault();

    var target = this.hash;
    var $target = $(target);

    $('html, body').stop().animate({
      'scrollTop': $target.offset().top
    }, 900, 'swing', function() {
      window.location.hash = target;
    });
  });
  $("button").hover(function() {
      $(".icon-bar").css("background-color", "#91C3CC");
      $(".navbar-default .navbar-toggle").css({
        "border": "1px solid #91C3CC",
        "background-color": "transparent"
      });
    },
    function() {
      $(".icon-bar").css("background-color", "#666");
      $(".navbar-default .navbar-toggle").css({
        "border": "1px solid #666",
        "background-color": "transparent"
      });
    });

});

//////////////////////////////////////////////////////////////
//  message sent alert fade after sending it
$( document ).scroll(function(){
    $('#alert').fadeIn('slow', function(){
        $('#alert').delay(5000).fadeOut(); 
    });
});

  </script>
</body>
</html>