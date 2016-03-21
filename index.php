<?php
session_start();
include_once 'ExchangeShop/dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 $res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
}
if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $upass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM users WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: index.php");

 }
 else
 {
  ?>
        <script>alert('The e-mail or password you entered was incorrect! Please try again.');</script>
        <?php
 }
 
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The Ethnic Exchange</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
    <link rel="stylesheet" href="css/mainStyle.css"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/loginStyle.css">
  </head>
  
  <body>
    <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="#one">The Ethnic Exchange</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#two">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#three">About Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#last">Contact</a>
                    </li>
                    <li>
                        <div id="wrap">
                        <div id="regbar">
                        <div id="navthing">
                        <?php if(isset($_SESSION['user'])!="") : ?>
                            <h2><a href="ExchangeShop/userProfile.html">Hi <?php echo $userRow['username']; ?></> | <a href="ExchangeShop/signout.php">Logout</a></h2>
                        <?php else : ?>

                 
                         <h2><a href="#" id="loginform">Login</a> | <a href="ExchangeShop/register.php">Register</a></h2>
                        <?php endif; ?>
                        <div class="login">
                        <div class="arrow-up"></div>
                        <div class="formholder">
                         <div class="randompad">
                         <form method="post">
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
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--VIDEO BACKGROUND -->
    <header id="first">
        <div class="header-content">
            <div class="inner">
                <h1 class="cursive">The Ethnic Exchange</h1>
                <h4>Connecting You to The Wider World.</h4>
                <hr><!--HERES THE VIDEO-->
                <?php if(isset($_SESSION['user'])!="") : ?>
                            <a href="ExchangeShop/shopLanding.php" class="btn btn-primary btn-xl page-scroll">Go To The Exchange</a>
                        <?php else : ?>

                 
                         <a href="ExchangeShop/register.php" class="btn btn-primary btn-xl page-scroll">Register For The Exchange</a>
                        <?php endif; ?>
            </div>
        </div>
        <video autoplay="" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="MarketVideo.jpg" id="video-background">
            <source src="MarketVideo.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
    </header>

    <!--ABOUT CLOTHING -->
        <section id="one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="margin-top-0 text-primary">Connecting The Four Corners of The World</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <i class="icon-lg ion-ios-star-outline wow fadeIn" data-wow-delay=".3s"></i>
                        <h3>A Quality Link</h3>
                        <p>We source quality vendors so you dont have to.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <i class="icon-lg ion-ios-star-outline wow fadeIn" data-wow-delay=".2s"></i>
                        <h3>Ethical</h3>
                        <p>Buying ethical clothing for a fair price helps the local communites</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <i class="icon-lg ion-ios-star-outline wow fadeIn" data-wow-delay=".3s"></i>
                        <h3>Easy</h3>
                        <p>It has never been easier to buy original ethnic clothing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--GALLERY-->
    <section id="two" class="no-padding">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="PersonOne.jpg">
                        <img src="PersonOneCropped.jpg" alt="Image 1">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="Bangles.jpg">
                        <img src="BanglesCropped.jpg" alt="Image 1">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="KikoyBro.jpg">
                        <img src="KikoyBroCropped.jpg" alt="Image 1">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="MarketSouthAfrica.jpg">
                        <img src="MarketSouthAfricaCropped.jpg" alt="Image 1">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="CraftsmanIndia.jpg">
                        <img src="CraftsmanIndiaCropped.jpg" alt="Image 1">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="IndianBags.jpg">
                        <img src="IndianBagsCropped.jpg" alt="Image 1">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                

    <!--THIRD DIV , MAYBE PEOPLE HERE?-->
    <section class="bg-primary" id="three">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-5 text-primary">Who We Are And What We Do.</h2>
                    <br>
                    <p class="text-faded">
                    The Ethnic Exchange is an idea to bring the amazing talents and craftmanship of artists and designers in developing countries to people in the developed world, while bypassing all the corporate roadblocks that only serve to leave the original craftsmen and women at a disadvantage.
                    <br>
                    <br>
                    Our system works based on a profile system. Setting up a buyer profile is easy, just sign up on our website here! While the suppliers set up a seller profile; which needs to be pre-approved by us here at the ethnic exchange (to ensure that all suppliers on the site are genuine). Following this, buyers can search for either a specific buyer or just general products that are being sold by the suppliers. After finding something you like, we put you directly in touch with the supplier so you can order ethnic products knowing that nearly all of your money is going straight to the man or woman who created it rather than some multiinational corporation!
                    </p>
                    <a href="#three" class="btn btn-default btn-xl page-scroll">Learn More</a>
                </div>
            </div>
        </div>
    </section>


    <!--CONTACT US -->
    <section id="last">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="margin-top-0 wow fadeIn">Get in Touch</h2>
                    <hr class="primary">
                    <h3> support@theethnicexhange.com</h3>
                    <br>
                    <h3> www.facebook.com/theethnicexchange</h3>
                    <br>
                    <h3> Twitter: @theEthnicEthnicExhange</h3>
                </div>
                
            </div>
        </div>
    </section>

    <!--FOOTER-->
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

    <!--MODAL FOR IMAGES -->
    <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        	<div class="modal-body">
        		<img src="//placehold.it/1200x700/222?text=..." id="galleryImage" class="img-responsive" />
        		<p>
        		    <br/>
        		    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
        		</p>
        	</div>
        </div>
        </div>
    </div>

    <div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
        	<div class="modal-body">
        		<h2 class="text-center">Nice Job!</h2>
        		<p class="text-center">You clicked the button, but it doesn't actually go anywhere because this is only a demo.</p>
        		<p class="text-center"><a href="http://www.bootstrapzero.com">Learn more at BootstrapZero</a></p>
        		<br/>
        		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
        	</div>
        </div>
        </div>
    </div>

    <!--scripts loaded here from cdn for performance -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>