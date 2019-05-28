<?php include 'admin/db.php'; ?>
<?php 
    require 'admin/session.php';
    Session::start();
    /**Traitement du formulaire */
     
   
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {   
        try{
            if(isset($_POST['username']) && isset($_POST['password'])){
                $username = $db->quote($_POST['username']);
                $password = $db->quote($_POST['password']);
                $select = $db->query("select * from users where username = $username and password = $password");
                
                if($select->rowCount() > 0){
                    Session::set('auth',$select->fetch());
                    header('Location:admin/index.php');
                    die;
                }
            }
        }catch(Exception $e){
            // echo('Exception');
        }
       
    }  
    else{
        // echo('Erreur GET');
    }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Houria | Portfolio</title>
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
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/login.css" rel="stylesheet">

</head>

<body id="login">

    <!--/ Nav Star /-->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top e navbar-reduce" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll" href="#page-top">HOURIA</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll active" href="index.php#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="index.php#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="index.php#work">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="index.php#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#login">Log in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/ Nav End /-->

    <!--/ Section login Star /-->
    <section class="contact">
        <form class="container" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" method="POST"
            action="admin/index.php">
            <div class="">
                <div class="login">
                    <h1>LOG IN</h1>
                    <div class="line-mf"></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Password">
                </div>
                <button type="submit" class="btn">Login</button>

        </form>
    </section>
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

    <!-- Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>