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

    <title>Shop Item - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">
    <link href="css/styles2.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
     <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
         <h1>
                        <a class="ethnic-exchange" href="shopLanding.php">The Ethnic Exchange</a>
                    </h1>
                    <h6>
                        <a class="back-button" href="shopProductType-Clothing.php">Back</a>
                    </h6>
        
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


        <div class="row">
    <div class="well well-sm">
        <div id="heading2">
        <h1> <b>Pants</b></h1>
    </div>
    </div>

            <div class="col-md-3">
                <h2 class="lead">Other Products by Ashon</h2>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="SpecificPants1Description.jpg" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right">€25.00</h4>
                        <h4><a href="#">Print Harem Pants</a>
                        </h4>
                        <p> These colourful harem pants are hand-made by Ashon in Kenya.</p>
                        <p> No two pairs are the same!.</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>

                

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

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
