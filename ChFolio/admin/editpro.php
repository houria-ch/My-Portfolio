<?php 
include 'db.php';
require 'session.php';
Session::start();
$select = $db->query('SELECT `id_project`, `title`, `des`, `source`, `img` FROM `projects`');
$project = $select->fetchAll();
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/admin.css" rel="stylesheet">

  <style>
  .input{
  background-color: white;
  border: none;
}


  </style>

</head>
<body>
  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top e navbar-reduce" id="mainNav">
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
          <a href="index.php" class="w3-bar-item w3-button py-5"><i class="fa fa-home"></i> Home</a>
          <a href="allpro.php" class="w3-bar-item w3-button py-5"><i class="fa fa-th-list"></i> All Projects</a>
          <a href="addpro.php" class="w3-bar-item w3-button py-5"><i class="fa fa-plus-circle"></i> Add Projects</a>
          <a href="deletpro.php" class="w3-bar-item w3-button py-5"><i class="fa fa-trash"></i> Delete Projects</a>
          <a href="#" class="w3-bar-item w3-button py-5"><i class="fa fa-cogs"></i> Edite projects</a>
      </div>  
<!-- Page Content -->

<section class="page-content2">
    <button class="w3-button w3-xlarge position-fixed" onclick="w3_open()">☰</button>
    <div class="p-2 m-5">
    <div class="title">
      <h1>Edite Projects</h1>
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
                <th scope="col">Edite</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($project as $project):?>
                  <tr>
                    <th scope="row"><input class="input" name="id_project" disabled value="<?=$project['id_project']; ?>"></th>
                    <td><?= $project['title'];?></td>
                    <td><?= $project['des'];?></td>
                    <td><?= $project['source'];?></td>
                    <td><img src="../img/portfolio/<?= $project['img'];?>" width="200px"></td>
                    <td><a href="editpage.php?id_project=<?= $project['id_project'];?>"><i class="fas fa-edit"></i></a></td>
                  </tr>
                <?php endforeach;?>
            </tbody>
        </table>
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
   <!-- Template Main Javascript File -->
   <script src="../js/admin.js"></script>
</body>
</html>

