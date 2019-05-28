 <?php 
include 'db.php';
require 'session.php';
Session::start();

$selectP = $db->query("SELECT id_project, title, des, source, img FROM projects");
$project = $selectP->fetchAll();

?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title>Houria|Admin panel</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Favicons -->
  <link href="../img/Hlogo.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/admin.css" rel="stylesheet">

</head>
<body>
  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-light navbar-expand-md fixed-top e navbar-reduce" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll" href="#"><img src="../img/Hlogo.png" width="50px" alt=""> HOURIA</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
          aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link js-scroll" href="../index.php"><i class="fa fa-power-off"></i> Logout</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
<!-- Sidebar -->
  
      <div class="w3-sidebar w3-bar-block w3-card" style="display:none" id="mySidebar" style="width:190px;">
          <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
          <a href="#" class="w3-bar-item w3-button py-5"><i class="fa fa-home"></i> Home</a>
          <a href="allpro.php" class="w3-bar-item w3-button py-5"><i class="fa fa-th-list"></i> All Projects</a>
          <a href="addpro.php" class="w3-bar-item w3-button py-5"><i class="fa fa-plus-circle"></i> Add Projects</a>
          <a href="deletpro.php" class="w3-bar-item w3-button py-5"><i class="fa fa-trash"></i> Delete Projects</a>
          <a href="editpro.php" class="w3-bar-item w3-button py-5"><i class="fa fa-cogs"></i> Edite projects</a>
      </div>  

<!-- Page Content -->

<section class="page-content">
    <button class="w3-button w3-xlarge position-fixed" onclick="w3_open()">☰</button>
<header class="row d-flex justify-content-around mx-5">
  <div class="pro-card">
      <div class="card text-dark mb-3 shadow rounded" id="pro" style="max-width: 40rem;">
          <div class="card-header">Projects</div>
          <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
  </div>
  <div class="skil-card">
      <div class="card text-dark mb-3 shadow rounded" id="skil" style="max-width: 40rem;">
          <div class="card-header">Skills</div>
          <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
  </div>
</header>

    <!-- / projects / -->

  <div class="projects shadow rounded p-2 m-5">
    <div class="title">
      <h1>My All Projects</h1>
    </div>
    <div class="w3-container" style="overflow-x:auto;">
        <table class="table">
            <thead class="thead">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Source</th>
                <th scope="col">Image</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($project as $project):?>
              <tr>
                <th scope="row"><?= $project['id_project'];?></th>
                <td><?= $project['title'];?></td>
                <td><?= $project['des'];?></td>
                <td><?= $project['source'];?></td>
                <td><img src="../img/portfolio/<?= $project['img'];?>" alt="" width="200px"></td>
              </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
  </div>

  <!-- / skills / -->

  <div class="skills shadow rounded px-4 p-2 m-5">
      <div class="title">
          <h1>My Skills</h1>
        </div>
      <div class="my-3">
      <span>HTML</span> <span class="pull-right">90%</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
      </div>

      <div class="my-3">
          <span>CSS</span> <span class="pull-right">85%</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
      </div>
      <div class="my-3">
          <span>JavaScript</span> <span class="pull-right">50%</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
      </div>
      <div class="my-3">
          <span>Bootstrap</span> <span class="pull-right">55%</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
      </div>
      <div class="my-3">
          <span>MySQL</span> <span class="pull-right">70%</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
      </div>
      <div class="">
          <span>PHP</span> <span class="pull-right">40%</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
      </div>
      <div class="my-3">
          <span>PhotoShop</span> <span class="pull-right">40%</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
      </div>
      
      <div class="my-3">
          <span>Illustrator</span> <span class="pull-right">45%</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
      </div>
  </div>
</div>

</section>     
    <!-- JavaScript Libraries -->
   <script src="../lib/jquery/jquery.min.js"></script>
   <script src="../lib/jquery/jquery-migrate.min.js"></script>
   <script src="../lib/popper/popper.min.js"></script>
   <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
   <script src="../lib/easing/easing.min.js"></script>
   <script src="../lib/counterup/jquery.waypoints.min.js"></script>
   <script src="../lib/counterup/jquery.counterup.js"></script>
   <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
   <script src="../lib/lightbox/js/lightbox.min.js"></script>
   <script src="../lib/typed/typed.min.js"></script>
   <!-- Contact Form JavaScript File -->
   <script src="../contactform/contactform.js"></script>
 
   <!-- Template Main Javascript File -->
   <script src="../js/admin.js"></script>
</body>
</html>

