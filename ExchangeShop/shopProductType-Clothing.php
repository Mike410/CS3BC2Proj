<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: ../index.php");
}

if(isset($_SESSION['user'])!="")
{
    $res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
    $userRow=mysql_fetch_array($res);
}
// if(isset($_POST['btn-login']))
// {
//  $email = mysql_real_escape_string($_POST['email']);
//  $upass = mysql_real_escape_string($_POST['pass']);
//  $res=mysql_query("SELECT * FROM users WHERE email='$email'");
//  $row=mysql_fetch_array($res);
//  if($row['password']==md5($upass))
//  {
//   $_SESSION['user'] = $row['user_id'];
//   header("Location: ../index.php");
//  }
//  else
//  {
//   That script alert goes here.
//  }
 
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>4 Col Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles1.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
                        <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        
                        <div id="wrap">
                        <div id="regbar">
                        <div id="navthing">
                         <h2><a href="userProfile.html">Hi <?php echo $userRow['username']; ?></> | <a href="signout.php">Logout</a></h2>   
                        <div class="login">
                        <div class="arrow-up"></div>
                        <div class="formholder">
                         <div class="randompad">
                             <fieldset>
                                  <input type="text" name='email' placeholder="Your Email" />
                                 <input type="password" name= 'pass' placeholder= 'your password' />
                                 <button type="submit" name="btn-login">Sign In</button>
                                       </fieldset>
                                    </div>
                                  </div>
                                </div>
                                </div>
                              </div>
                            </div>
                <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

                    <script src="js/index.js"></script>
                    
    </nav>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Clothing
                </h1>
                <a class="back-button" href="shopLanding.php">Back</a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href="shopProductList.php">
                    <img class="img-responsive" src="pants.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="scarves.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->


        <hr>

        <!-- Pagination -->
        <!-- /.row -->


        <!-- Footer -->
        <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-3 column">
                    <h4>Information</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Products</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Benefits</a></li>
                        <li><a href="">Developers</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3 column">
                    <h4>About</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 text-right">
                    <h4>Follow</h4>
                    <ul class="list-inline">
                      <li><a rel="nofollow" href="" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                      <li><a rel="nofollow" href="" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a>&nbsp;</li>
                      <li><a rel="nofollow" href="" title="Dribble"><i class="icon-lg ion-social-dribbble-outline"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
