<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Burger Shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="css/style1.css"/>      
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css"/>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/Footer-with-button-logo.css">


        <script type="text/javascript" src="ordeing_system/js/main.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/animate.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script type="text/javascript" src="js/script2.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                <!--        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
                        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
                        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
                        <script type="text/javascript" src="js/modernizr.js"></script>-->

        <script type="text/javascript">
            $(window).load(function () {
                $(".loader").fadeOut("slow");
            });

            function show(){

alert ("Please Login first !!");
}
        </script>

        <style>
            #Box{
                background-color:white;
                width: 100%;
                height: 200px;
                padding-bottom: 10px;
                padding-top: 10px;
                padding-left: 10px;
                padding-right: 10px;
                text-align: center;
                

            }
            #img{
                width: 70px;
                height: 70px;

            }
            #Box h5{
                font-family: fantasy;
            }
            #Box h6{
                font-family: cursive;
            }
            #Box button {
                border-radius: 5px;
                outline: 0;
                padding: 12px;
                color: white;
                background-color:darkslategray;
                text-align: center;
                cursor: pointer;
                width: 40%;
                font-size: 14px;
            }
            #Box button:hover {
                opacity: 0.7;
            }


        </style>
    </head>
    <body>


       <div class="loader"></div>

        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <img src="images/logo.png" class="rounded" width="150" height="150">
                    </div>

                    <div class="col-sm-4">
                        <h4 style="margin:50px 10px 10px 160px;color: #660066 "><img src="images/phone.png" height="25px" width="25px"> 077 6660666 </h4>

                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-sm bg-dark">
                <div class="col-sm-9">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="show()">Cart</a>
                        </li>
                        <a class="navbar-brand" href="#">
                            <img src="images/cart-logo.png" onclick="show()" alt="logo" style="width:35px;">
                        </a>
                    </ul>
                </div>
              <!--  <form class="form-inline" action="/action_page.php">
                    <input class="form-control mr-sm-1" type="text" placeholder="Search Burger">
                    <button class="btn btn-success" type="submit" align="right">Search</button>
                </form>-->
            </nav>

            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/burger1.jpg" alt="img1" width="100%" height="370">
                    </div>
                    <div class="carousel-item">
                        <img src="images/burger2.jpg" alt="img2" width="100%" height="370">
                    </div>
                    <div class="carousel-item">
                        <img src="images/burger3.jpg" alt="img3" width="100%" height="370">
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>

            <!--<h2 style="font-family: cursive ;text-align:center ;margin-top: 50px;font-weight: bold;margin-bottom:20px">Ordering food was never so easy</h2>-->
            <!--            
                            <h1 style="text-align:center">
              <a  href="" class="typewrite" data-period="2000" data-type='[ "Hi, Im VipulM.", "I am Creative.", "I Love Design.", "I Love to Develop." ]'>
                <span class="wrap"></span>
              </a>
            </h1>-->

            <h1 id="anim" class="typewrite" data-period="1000" data-type='[ "Ordering food was never so easy", "Its Just 3 step way"]'>
                <span class="wrap"></span>

            </h1>   
            <div class="row" style="margin-bottom: 20px">
                <div class="col-sm-2">

                </div>
                <div class="col-sm-2">
                    <figure class="step os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.50s">  <img src="images/step1.png" alt="">
                    </figure>
                </div>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-2">
                    <figure class="step os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="1.50s">
                        <img src="images/step2.png" alt=""></figure>
                </div>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-2">
                    <figure class="step os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="2.50s"><img src="images/step3.png" alt="">
                    </figure>

                </div>
            </div>

            <div class="row" style="background-image: url(images/burger-background-1.jpg);background-repeat:repeat">
                <div class="col-sm-12"><center><img class="img clearfix" src="images/hotdeals.png" style="margin-bottom: 0"></center> </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div style="background-color:#ffffff ;height: 170px;width:400px;  margin:10px 0 5px 0 ;border-radius:5px; box-shadow: 10px 10px 5px grey; ">
                        <div class="img clearfix" style="float: left"> <img width="150px" height="150px" src="images/offer1.jpg" alt=""/> </div>
                        <div class="title">
                            <h3 style="color:brown">King Deals</h3>
                            <p style="font-family: serif"><b>Large Crispy Chicken Burger + French Fries + Pepsi </b></p>
                            <p> Valid till Jan 25 <b>Rs.580 only</b>
                            </p>
                            <a href="#" onclick="show()">GRAB IT &#10152;</a> </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div style="background-color:#ffffff ;height: 170px;width:400px; margin:10px 0 5px 0 ;border-radius:5px;box-shadow: 10px 10px 5px grey; ">
                        <div class="img clearfix" style="float: left"> <img width="150px" height="150px" src="images/offer2.jpg" alt=""/> </div>
                        <div class="title">
                            <h3 style="color: brown">Value Deals</h3>
                            <p style="font-family: serif"><b>Bacon and Cheese Burger + French Fries + Coke </b></p>
                            <p> Valid till Jan 25 <b>Rs.420 only</b>
                            </p>
                            <a href="#" onclick="show()">GRAB IT &#10152;</a> </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div style="background-color:#ffffff ; height: 170px;width:400px; margin:10px 0 5px 0 ;border-radius:5px;box-shadow: 10px 10px 5px grey; ">
                        <div class="img clearfix" style="float: left"> <img width="150px" height="150px" src="images/offer3.jpg" alt=""/> </div>
                        <div class="title">
                            <h3 style="color:brown">Budget Pack</h3>
                                <p style="font-family: serif"><b>Buy 1 Bacon 3 way Get 1 Free</b></p>
                            <p style="margin-top: 14px;">Valid till Jan 25 <b>Rs.480 only</b><br/>
                                <br>

                            </p>
                            <a href="#" onclick="show()">GRAB IT &#10152;</a> </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div id="Box">
                    <img id="img" src="images/img-9.jpg">
                    <h5>Super BBQ Cheeseburger</h5>

                    <h6>Rs.790</h6>
                    <p></p>
                     <p><button>See more</button></p>


                </div>
            </div>
            <div class="col-sm-3">  <div id="Box">
                    <img id="img" src="images/b1.png">
                    <h5>veggie burger</h5>
                    <h6>Rs.350</h6>
                
                     <p><button>See more</button></p>

                </div>
            </div>
            <div class="col-sm-3">  <div id="Box">
                    <img id="img" src="images/b2.jpg">
                    <h5>Whopper beef burger</h5>
                    <h6>Rs.550</h6>
                     <p><button>See more</button></p>

                </div></div>
            <div class="col-sm-3">  <div id="Box">
                    <img id="img" src="images/img-11.jpg">
                    <h5>Big king beef burger</h5>
                    <h6>Rs.670</h6>
                     <p><button>See more</button></p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div id="Box">
                    <img id="img" src="images/img-10.jpg">
                    <h5>Chilli chicken cheese burger</h5>
                    <h6>Rs.920</h6>
                     <p><button>See more</button></p>



                </div>
            </div>
            <div class="col-sm-3">  <div id="Box">
                    <img id="img" src="images/img-7.jpg">
                    <h5>Double whopper burger</h5>
                    <h6>Rs.1050</h6>
                     <p><button>See more</button></p>
                </div>
            </div>
            <div class="col-sm-3">  <div id="Box">
                    <img id="img" src="images/img-8.jpg">
                    <h5>Beef burger</h5>
                    <h6>Rs.850</h6>
 <p><button>See more</button></p>
                </div></div>
            <div class="col-sm-3">  <div id="Box">
                    <img id="img" src="images/img-6.jpg">
                    <h5>Spicy chicken burger</h5>
                    <h6>Rs.790</h6>
 <p><button>See more</button></p>
                </div>
            </div>
        </div>
        <footer id="myFooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <!--                        <h2 class="logo"><a href="#"> LOGO </a></h2>-->
                        <img src="images/logo.png" class="rounded" width="150" height="150">
                    </div>
                    <div class="col-sm-2">
                        <h5>Get started</h5>
                        <ul>
                            <li><a href="index1.php">Home</a></li>
                            <li><a href="register.php">Sign up</a></li>
                           
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h5>About us</h5>
                        <ul>
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Contact us</a></li>
            
                        </ul>
                    </div>
                 
                    <div class="col-sm-3">
                        <div class="social-networks">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <button type="button" class="btn btn-default">Login</button>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>� 2019 Copyright Text </p>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>