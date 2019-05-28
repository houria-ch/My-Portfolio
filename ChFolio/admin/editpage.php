<?php 
include 'db.php';
require 'session.php';
Session::start();
Session::set('id_project_edit',$_GET['id_project']);
if($_SERVER['REQUEST_METHOD'] == "POST"){ 

        try{
            if(isset($_POST['title']) && isset($_POST['des']) && isset($_POST['source']) && isset($_POST['img'])){
                $id_project = Session::get('id_project_edit');
                $title = $db->quote($_POST['title']);
                $img = $db->quote($_POST['img']);
                $des = $db->quote($_POST['des']);
                $source = $db->quote($_POST['source']);
                if(!empty($img)){
                    $query = "UPDATE `projects` SET `id_project`=$id_project,`title`=$title,`des`=$des,`source`=$source,`img`=$img WHERE id_project=$id_project";

                }else{
                    $query = "UPDATE `projects` SET `id_project`=$id_project,`title`=$title,`des`=$des,`source`=$source WHERE id_project=$id_project";

                }
                $msg=$query;
                $select = $db->query($query);
                if(!empty($select)){
                    header('Location:editpro.php');                
                } else {
                    $msg="Error Work";
                }
            }
        }catch(Exception $e){
            $msg ='Exception Work';
        }


        
       
}else{
    $msg ='Erreur POST';
}
$select = $db->query('SELECT id_project, title, des, source, img FROM projects where id_project = '.Session::get('id_project_edit'));
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
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/admin.css" rel="stylesheet">

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
          <a href="editpro.php" class="w3-bar-item w3-button py-5"><i class="fa fa-cogs"></i> Edite projects</a>
          
      </div>   
<!-- Page Content -->

<section class="page-content2">
    <button class="w3-button w3-xlarge position-fixed" onclick="w3_open()">☰</button>
    <div class="p-2 m-5">
    <div class="title">
      <h1>Add Projects</h1>
    </div>
    <div class="w3-container">
        <!-- / insert projects form / -->
        <?php foreach($project as $project):?>
        <form method="POST" action="" class="add-form container">
                <div class="form-group">
                    <label>Ptoject title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title" value="<?= $project['title'];?>">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="des" class="form-control" id="" cols="50" rows="5" value="<?= $project['des'];?>"></textarea>
                </div>
                <div class="form-group">
                        <label>Source</label>
                        <input type="text" class="form-control" name="source" placeholder="Enter source" value="<?= $project['source'];?>">
                </div>
                <div class="form-group">
                        <p>Image</p>
                        <input type="file" id="import" name="img" placeholder="Import an image">
                </div>
                
                <button type="submit" class="btn">Save</button>
    
            </form>
            <?php endforeach;?>
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

