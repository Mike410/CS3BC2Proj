<?php
session_start();
include_once '../db/dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: ../index.php");
}

if(isset($_SESSION['user'])!="")
{
    $res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
    $userRow=mysql_fetch_array($res);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Michael Burns">

    <title>Product listing</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
    <link href="css/4-col-portfolio.css" rel="stylesheet">
    <link href="css/styles1.css" rel="stylesheet">
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
        <div id="wrap">
        <div id="regbar">
          <div id="navthing">
           <h2><a href="#" id="loginform">Login</a> | <a href="#">Register</a></h2>
                <div class="login">
                    <div class="arrow-up"></div>
                        <div class="formholder">
                         <div class="randompad">
                             <fieldset>
                                 <label name="email">Email</label>
                                 <input type="email" value="example@example.com" />
                                 <label name="password">Password</label>
                                 <input type="password" />
                                 <input type="submit" value="Login" />
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
        <?php
                include "../db/dbConstants.php";
                $con = new mysqli(SERVER, USER, PASS, DB) or die("Unable to connect, please try again later.");

                $id = $_GET["id"];
                $small = $_GET["small"];
                $medium = $_GET["medium"];
                $large = $_GET["large"];

                $sql = "SELECT * FROM products";
                $sql2 = "SELECT * FROM supplier";

                $result = $con->query($sql);
                $result2 = $con->query($sql2);

                echo '<div class="row">
                        <div id="heading">
                        <div class="col-lg-12">
                            <h1 class="page-header"> <b>Order Confirmation</b></h1>
                        </div>
                    </div>
                    </div>';

                echo '<div id="products" class="row list-group">';
                echo '<div class="row">';

                //order confirmation and amount
            if(($result->num_rows > 0)){
                while($row = mysqli_fetch_array($result))
                {
                    if ($row['id']== $id){
                        
                        echo '<div class="item  col-xs-12 col-md-9">
                                <div class="thumbnail">';
                        if ($small >0){
                             echo '<p>You have ordered '.$small.' x small '.$row["name"].'s </p><br>';
                               }
                        if ($medium >0){
                           echo '<p>You have ordered '.$medium.' x medium '.$row["name"].'s </p><br>';
                       }
                        if ($large >0){
                           echo '<p>You have ordered '.$large.' x large '.$row["name"].'s </p><br>';
                        }
                        echo '</div>
                            </div>';

                        echo '<div class="col-md-3">
                        <h2>Order Total</h2><br>
                        €'.($row["price"]*($small+$medium+$large)).'
                        <a class="btn btn-success" href = "complete.php">Confirm!</a>
                        </div>';
                    }
                }
            }
            else {
                    echo "<br>No categories found";
                }

            //supplier info
            if(($result2->num_rows > 0)){
                while($row = mysqli_fetch_array($result))
                {
                    if ($row['id']== $id){
                        
                        echo '<div class="item  col-xs-12 col-md-9">
                                <div class="thumbnail">';
                        if ($small >0){
                             echo 'You have ordered '.$small.' x '.$row["name"].'<br>';
                               }
                        if ($medium >0){
                           echo 'You have ordered '.$medium.' x '.$row["name"].'<br>';
                       }
                        if ($large >0){
                           echo 'You have ordered '.$large.' x '.$row["name"].'<br>';
                        }
                        echo '</div>
                            </div>';

                        echo '<div class="col-md-3">
                        <h2>Order Total</h2><br>
                        €'.($row["price"]*($small+$medium+$large)).'
                        <a class="btn btn-success" href = "complete.php">Order!</a>
                        </div>';
                    }
                }
            }
            else {
                    echo "<br>No categories found";
                }
                
            

                mysqli_close($con);


            ?>
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
