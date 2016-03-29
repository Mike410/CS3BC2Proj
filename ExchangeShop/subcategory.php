<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Michael Burns">

    <title>Subcategory Listing</title>

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

        <?php
            include "../db/dbConstants.php";
            $con = new mysqli(SERVER, USER, PASS, DB) or die("Unable to connect, please try again later.");

            $catID = $_GET["id"];
            $catname = $_GET["name"];
            $sql = "SELECT * FROM subCategory";
            $result = $con->query($sql);

            //Page Heading
            echo '<div class="container">
                    <div class="well well-sm">
                        <div id="heading2">
                            <h1> <b>'.$catname.'</b></h1>
                        </div>
                    </div>';

            echo '<div class="row">';

        if(($result->num_rows > 0)){
            while($row = mysqli_fetch_array($result))
            {
                if ($row['categoryID']== $catID){
                    $id = $row['id'];
                    echo '<div class="col-md-3 portfolio-item">
                            <a href=productList.php?id='.$id.'&name='.$row["name"].'>
                                <img class="img-responsive" src="'.$row["name"].'.jpg" alt="need a pic">
                            </a>'
                            .$row["name"].'
                        </div>';
                }
            }
            echo "</div></form>";
        }
        else {
                echo "<br>No categories found";
            }

            mysqli_close($con);
        ?>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href="shopProductList.html">
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
