<?php 
include 'admin/db.php';
require 'admin/session.php';
Session::start();

$selectP = $db->query("SELECT id_project, title, des, source, img FROM projects");
$project = $selectP->fetchAll();

?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Houria | Portfolio</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/Hlogo.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style-red.css" rel="stylesheet">
  <style>
  .overlay-mf {
  position: absolute;
  top: 0;
  left: 0px;
  padding: 0;
  height: 100%;
  width: 100%;
  
 }
 </style>
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top"><img src="img/Hlogo.png" width="50px" alt=""> HOURIA</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
              <a class="nav-link js-scroll" href="login.php">Log in</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/about1.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="intro-title mb-4">I am Houria CHAFIQ</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Web Developer,Web Designer,Frontend Developer,Graphic Designer</span><strong class="text-slider"></strong></p>
          <a href="cv.html"><button type="button" id="cvbtn" class="button button-a button-big button-rouded mt-5">Curriculum Vita</button></a>
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <!-- / section about start / -->
  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row mt-5 pt-5">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="img/about2.jpg" width="150" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Name: </span> <span>Houria CHAFIQ</span></p>
                      <p><span class="title-s">Profile: </span> <span>full stack developer</span></p>
                      <p><span class="title-s">Email: </span> <span>houriachafiq@gmail.com</span></p>
                      <p><span class="title-s">Phone: </span> <span>(+212) 603463013</span></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About me
                    </h5>
                  </div>
                  <p class="lead">
                    My name is HOURIA CHAFIQ, I 'm 22 years old, I have a bachelor in low, and currently I 'm
                    learner developer at YouCode. <br>
                    So I'm learning web development and graphic design. Till now, I can create a frontend of site
                    web with HTML, CSS, JavaScript and the framework Bootstrap. I can also create the graphic
                    design of an application or a site web with adobe XD software.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / about section end / --> 

  <!-- skills section start/ -->
<section class="pb-5">
  <div id="skills" class="container">
      <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Skills
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
      </div>
      <div class="skill-mf">
          <span>HTML</span> <span class="pull-right">90%</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
      </div>
      <div class="skill-mf">
          <span>CSS</span> <span class="pull-right">85%</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
      </div>
      <div class="skill-mf">
          <span>JavaScript</span> <span class="pull-right">50%</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
      </div>
      <div class="skill-mf">
          <span>Bootstrap</span> <span class="pull-right">55%</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
      </div>
      <div class="skill-mf">
          <span>MySQL</span> <span class="pull-right">70%</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
      </div>
      <div class="skill-mf">
          <span>PHP</span> <span class="pull-right">40%</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
      </div>
      <div class="skill-mf">
          <span>PhotoShop</span> <span class="pull-right">40%</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
      </div>
      <div class="skill-mf">
          <span>Illustrator</span> <span class="pull-right">45%</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
      </div>
  </div>
</section>
  <!-- skills section end / -->

  <!--/ Section Portfolio Star /-->
  <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Portfolio
            </h3>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
      <?php foreach($project as $project):?>
          <div class="col-md-4">
              <div class="service-box">
                <div class="service-ico">
                  <img src="img/portfolio/<?= $project['img'];?>" alt="" class="img-fluid">
                </div>
                <div class="service-content">
                  <h2 class="s-title"><?= $project['title'];?></h2>
                  <p class="s-description text-center">
                  <?= $project['des'];?>
                  </p>
                  <div class="col-md-12 ml-5">
                      <a href="<?= $project['source'];?>"><button type="submit" class="button button-a button-big button-rouded">Go to source</button></a>
                  </div>
                </div>
              </div>
          </div>
          <?php endforeach;?>
      </div>
    </div>
  </section>
  <!--/ Section Portfolio End /-->

  <!--/ Section Contact-Footer Start /-->
  <section id="contact" class="paralax-mf footer-paralax sect-mt4 route">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Contact
            </h3>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf" data-aos="zoom-in">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Send Message
                    </h5>
                  </div>
                  <div>
                      <form action="contactform/contact.php" method="post" role="form" class="contactForm">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      If you want to know more about me, this is my contact informations below.<br>
                      Or You can send me a message from the formula on the left.
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span> Quartier SMARA Rue 35 N°3 Youssoufia</li>
                      <li><span class="ion-ios-telephone"></span> (+212) 603463013</li>
                      <li><span class="ion-email"></span> houriachafiq@gmail.com</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="https://www.facebook.com/profile.php?id=100005262966388"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href="https://github.com/houria-ch"><span class="ico-circle"><i class="ion-social-github"></i></span></a></li>
                      <li><a href="https://twitter.com/search?q=houria-ch&src=typd&lang=fr"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href="https://ma.linkedin.com/in/houria-chafiq-4646b5173"><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>Houria</strong>.</p>
              <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade <br> Modified by Houria</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
   AOS.init();
  </script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
