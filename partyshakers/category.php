<?php
session_start();

$cno = $_SESSION['cno'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
       Party Shakers
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get flat 35% off on orders over GHs50!</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="register.html">Register</a>
                    </li>
                    <li><a href="contact.html">Contact</a>
                    </li>
                    <li><a href="#">Recently viewed</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

     <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                    <img src="" alt=" logo" class="hidden-xs">
                    <img src="" alt=" logo" class="visible-xs"><span class="sr-only">Party Shakers - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="basket.html">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs"> Cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">
                                <?php
                                    if(isset($_REQUEST['category'])){
                                        $category = $_REQUEST['category'];
                                        include_once("parts.php");
                                        $obj = new parts();
                                        $result = $obj->getPart($category);
                                        $row = $obj->fetch();

                                    }else{
                                        echo "Category not given";
                                    }


                                ?>

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Categories <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5><a href="category.php?category=Decorations">Decorations</a></h5>
                                            <ul>
                                                <li>Ballons
                                                </li>
                                                <li>Confetti
                                                </li>
                                                <li>Streamers
                                                </li>
                                                <li>Accessories
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5><a href="category.php?category=Food">Food</a></h5>
                                            <ul>
                                                <li>Chips
                                                </li>
                                                <li>Drinks
                                                </li>
                                                <li>Candy
                                                </li>
                                                <li>Biscuits
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5><a href="category.php?category=Utensils">Utensils</a></h5>
                                            <ul>
                                                <li>Plates
                                                </li>
                                                <li>Cups
                                                </li>
                                                <li>Cutlery
                                                </li>
                                                <li>Napkins
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5><a href="category.php?category=Costume">Costumes</a></h5>
                                            <ul>
                                                <li>Children
                                                </li>
                                                <li>Women
                                                </li>
                                                <li>Men
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Account <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>User</h5>
                                            <ul>
                                                <li><a href="register.html">Register / login</a>
                                                </li>
                                                <li><a href="customer-orders.html">Orders history</a>
                                                </li>
                                                <li><a href="customer-order.html">Order history detail</a>
                                                </li>
                                                <li><a href="customer-wishlist.html">Wishlist</a>
                                                </li>
                                                <li><a href="customer-account.html">Customer account / change password</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="basket.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Cart</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

            </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li><?php echo "{$row['category']}"; ?></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    <a href="category.php?category=Decorations">Decorations</a>
                                </li>
                                <li>
                                    <a href="category.php?category=Costume">Costumes</a>
                                </li>
                                <li>
                                    <a href="category.php?category=Food">Food & Drinks</a>
                                </li>
                                <li>
                                    <a href="category.php?category=Utensils">Tableware</a>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <!-- *** MENUS AND FILTERS END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <h1><?php echo "{$row['category']}"; ?></h1>
                        <p>In this category we offer wide selection of the best products we have found and carefully selected worldwide.</p>
                    </div>

                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>12</strong> of <strong>25</strong> products
                            </div>

                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">12</a>  <a href="#" class="btn btn-default btn-sm">24</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" class="form-control">
                                                    <option>Price</option>
                                                    <option>Name</option>
                                                    <option>Sales first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row products">
                        <?php
                            while($row=$obj->fetch()){
                                if(!$row){
                                    echo "Nothing to show in this category";
                                }
                                echo "
                                <div class='col-md-4 col-sm-6'>
                                    <div class='product'>
                                        <div class='flip-container'>
                                        <div class='flipper'>
                                            <div class='front'>
                                                <a href='detail.php?pno={$row['pno']}'>
                                                    <img src='{$row['image']}' alt='' class='img-responsive'>
                                                </a>
                                            </div>
                                            <div class='back'>
                                                <a href='detail.php?pno={$row['pno']}'>
                                                    <img src='{$row['image']}' alt='' class='img-responsive'>
                                                </a>
                                            </div>
                                        </div>
                                </div>
                                <a href='detail.php?pno={$row['pno']}' class='invisible'>
                                    <img src='{$row['image']}' alt='' class='img-responsive'>
                                </a>
                                <div class='text'>
                                    <h3>
                                    <a href='detail.php?pno={$row['pno']}'>{$row['pname']}</a></h3>
                                    <p class='price'>¢{$row['price']}</p>
                                    <p class='buttons'>
                                    <a href='detail.php?pno={$row['pno']}' class='btn btn-default'>View detail</a>
                                    
                                    <a  href='additem.php?cno=$cno&pno={$row['pno']}&qty=1' data-toggle='modal' data-target='#add-modal' class='btn btn-primary'><i class='fa fa-shopping-cart' ></i>Add to cart</a>
                                    
                                    

                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>";
                            }
                        ?>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                    <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="Add" aria-hidden="true">
                        <div class="modal-dialog modal-sm">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                   <h4 class="modal-title" id="Login"> <p class="text-center">One Item Added To Cart</h4>
                                </div>
                                <div class="modal-body">
                                        <p class="text-center">
                                            <button class="btn btn-primary" href="basket.php" name="login"><i class="fa fa-sign-in"></i>View Cart</button>
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    
                    
                        </div> -->

                    </div>
                    <!-- /.products -->


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->
         <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>

                        <ul>
                            <li><a href="text.html">About us</a>
                            </li>
                            <li><a href="text.html">Terms and conditions</a>
                            </li>
                            <li><a href="faq.html">FAQ</a>
                            </li>
                            <li><a href="contact.html">Contact us</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="register.html">Regiter</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Top categories</h4>


                        <ul>
                            <li><a href="category.php?category=Decorations">Decorations</a>
                            </li>
                            <li><a href="category.php?category=Food">Food</a>
                            </li>
                            <li><a href="category.php?category=Costume">Costumes</a>
                            </li>
                            <li><a href="category.php?category=Utensils">Utensils</a>
                            </li>

                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>Party Shakers Ltd.</strong>
                            <br>Ashesi University College
                            <br>Berekuso
                            <br>PMB CT3
                            <br>
                            <strong>Ghana</strong>
                        </p>

                        <a href="contact.html">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Get the news</h4>

                        <p class="text-muted">Recieve updates on our deals and new offers</p>

                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

                <button class="btn btn-default" type="button">Subscribe!</button>

            </span>

                            </div>
                            <!-- /input-group -->
                        </form>

                        <hr>

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2015 Party Shakers.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious.com</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>

    <script type="text/javascript">
        
        
        function additem(){
                var email =$('#email-modal').val();
                var password =$('#password-modal').val();
                var ajaxPageUrl="userajax.php?cmd=1&email="+email+"&password="+password;
                
                $.ajax(ajaxPageUrl, {literal}
                       {async:true, complete:additemcomplete});
                       {/literal} 
            alert("Logged in");
            }
        
        

            function additemcomplete(xhr,status){

                if(status!="success"){

                     $('#divStatus').html("Error while logging in");

                     return;        
                }

                    
                    var obj=$.parseJSON(xhr.responseText);
                    console.log(obj.result);

                    if(obj.result==0){
                        alert('here');
                        $('#divStatus').html("Wrong Username or Password");
                        return;

                    }

                    else{
                       $('#loginStatus').html("Logout");
                        alert("Hey");
                        
                        
                        window.location.href ="index.php?cmd=1"
                     }
            }
    </script>
    

</body>

</html>