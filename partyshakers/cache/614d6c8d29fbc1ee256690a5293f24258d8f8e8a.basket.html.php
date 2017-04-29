<?php
/* Smarty version 3.1.30, created on 2017-04-29 14:01:02
  from "C:\xampp\htdocs\ecommerce\PartyShakers\Version4\partyshakers\templates\basket.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5904807e953de9_14434079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34631b9ecd1847b12db2f68e46a20809aff24e81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ecommerce\\PartyShakers\\Version4\\partyshakers\\templates\\basket.html',
      1 => 1492806576,
      2 => 'file',
    ),
    '424622e207a164a5011b2c22ff94a5bb0cf5df33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ecommerce\\PartyShakers\\Version4\\partyshakers\\templates\\header.tpl',
      1 => 1492795253,
      2 => 'file',
    ),
    '2dca3d2a73fc8d8bcf06ef12ff40dddc71d3b212' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ecommerce\\PartyShakers\\Version4\\partyshakers\\templates\\footer.tpl',
      1 => 1492817977,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5904807e953de9_14434079 (Smarty_Internal_Template $_smarty_tpl) {
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


    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/respond.min.js"></script>
    
     <script type="text/javascript">
        
        
        function login_modal(){
                var email =$('#email-modal').val();
                var password =$('#password-modal').val();
                var ajaxPageUrl="userajax.php?cmd=1&email="+email+"&password="+password;
                
                $.ajax(ajaxPageUrl, 
                       {async:true, complete:logincomplete});
                        
        
            }
        
        

            function logincomplete(xhr,status){

                if(status!="success"){

                     $('#divStatus').html("Error while logging in");

                     return;        
                }

                    
                    var obj=$.parseJSON(xhr.responseText);
                    console.log(obj.result);

                    if(obj.result==0){
                        
                        $('#divStatus').html("Wrong Username or Password");
                        return;

                    }

                    else{
                        
                        window.location.href ="index.php?cmd=1"
                     }
            }
    </script>
    
    
    <link rel="shortcut icon" href="favicon.png">
    


</head>

<body>

    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="index.php?cmd=3" data-animate-hover="shake" >Party Shakers</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                     
                     <li ><div><a href="#" data-toggle="modal" data-target="#login-modal">login</a></div>
                      
                    </li>
                    <li><a href="index.php?cmd=2">Register</a>
                    </li>
                    <li><a href="contact.html">Contact</a>
                    </li>
                    <li><a href="#">Recently viewed</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- logout modal -->
        <div class="modal fade" id="logout-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">

                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Leaving so soon?</h4>
                    </div>

                    <p class="text-center">
                        <a class="btn btn-primary" href="index.php?cmd=6" name="logout"><i class="fa fa-sign-in"></i>Log out</a>
                    </p>

                </div>
            </div>
        </div>

        <!-- login modal -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <div id="divStatus"></div>
        
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password" name="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary" onclick="login_modal()" name="login"><i class="fa fa-sign-in"></i>Log in</button>
                            </p>
                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>
                        <p><center><a href="#" data-toggle="modal" data-target="#login-modal">Employee Login</a></center></p>
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
                    <img src="" alt="" class="hidden-xs">
                    <img src="" alt="" class="visible-xs"><span class="sr-only">Party Shakers - go to homepage</span>
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
                    <a class="btn btn-default navbar-toggle" href="index.php?cmd=7">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">Cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php?cmd=3">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Categories <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                 <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5><a href="index.php?cmd=5&category=Decorations">Decorations</a></h5>
                                            <ul>
                                                <li>Balloons
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
                                            <h5><a href="index.php?cmd=5&category=Food">Food</a></h5>
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
                                            <h5><a href="index.php?cmd=5&category=Utensils">Utensils</a></h5>
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
                                            <h5><a href="index.php?cmd=5&category=Costume">Costumes</a></h5>
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
                    <a href="index.php?cmd=7" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Cart</span></a>
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
                        <li><a href="index.html">Home</a>
                        </li>
                        <li>Shopping cart</li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">
                            <h1>Shopping cart</h1>
                            <p class="text-muted">You currently have 
                               <!--  /*%%SmartyNocache:90755904807d33bc47_21269379%%*/<?php echo '<?php'; ?>
 echo '<?php echo '<?php'; ?>

                                    ';<?php echo '?>'; ?>
/*/%%SmartyNocache:90755904807d33bc47_21269379%%*/include_once("orders.php");
                                    $obj=new orders(); 
                                    $s=$obj->countItems($_SESSION['cno']);
                                    echo $s;
                                /*%%SmartyNocache:90755904807d33bc47_21269379%%*/<?php echo '<?php'; ?>
 echo '<?php echo '?>'; ?>
';<?php echo '?>'; ?>
/*/%%SmartyNocache:90755904807d33bc47_21269379%%*/ --> 
                                item(s) in your cart.</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit price</th>
                                            <th>Total Amount</th>
                                            <th>Remove Item</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody> 
                                     
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2"></th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="category.html" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-default"><i class="fa fa-refresh"></i> Update basket</button>
                                    
                                    <a href='addorder.php'  class='btn btn-primary'>Place Order <i class='fa fa-chevron-right'></i>                                        
                                    </a>
                                </div>
                            </div>

                    </div>
                    <!-- /.box -->

                    </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>Shipping and handling</td>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <th></th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>


                    <div class="box">
                        <div class="box-header">
                            <h4>Coupon code</h4>
                        </div>
                        <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

                    <button class="btn btn-primary" type="button"><i class="fa fa-gift"></i></button>

                    </span>
                            </div>
                            <!-- /input-group -->
                        </form>
                    </div>

                </div>
                <!-- /.col-md-3 -->

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
                            <li><a href="category.html">Decorations</a>
                            </li>
                            <li><a href="category.html">Food</a>
                            </li>
                            <li><a href="category.html">Costumes</a>
                            </li>
                            <li><a href="category.html">Utensils</a>
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

    <script>

         $('#add-modal').on('show.bs.modal', function(e) {

            var pname = $(e.relatedTarget).data('pname');
            var price = $(e.relatedTarget).data('price');
            var pno = $(e.relatedTarget).data('pno');

            $(e.currentTarget).find('input[name="pname"]').val(pname);
            $(e.currentTarget).find('input[name="price"]').val(price);
            $(e.currentTarget).find('input[name="pno"]').val(pno);
         });


         function addtocart(){
             var pno = $('#pno').val();
             var qty = $('#qty').val();


             var ajaxPageUrl="cartajax.php?cmd=1&pno="+pno+"&qty="+qty;
                
                $.ajax(ajaxPageUrl, 
                       {async:true, complete: addtocartcomplete});
                        
            // alert("Added to cart");
         }


         function addtocartcomplete(xhr,status){

                if(status!="success"){

                     $('#divStatus').html("Error while adding item");

                     return;        
                }

                    
                    var obj=$.parseJSON(xhr.responseText);
                    console.log(obj.result);


                    if(obj.result==0){
                        alert('Item was not added');
                        // $('#divStatus').html("Item was not added");
                        return;

                    }

                    else{
                        // $('#divStatus').html("Item added");
                        alert("Item added to cart");
                     }
         }

         function deleteitem(){
           
         }

       // function subtotal(){
       //  var price =  ;
       //  var qty = ;

       //  var subtotal = price*qty;

       //  $('.subtotal').append
       //         (subtotal);

       // }
</script>
     
   
</body>

</html> 
<?php }
}
