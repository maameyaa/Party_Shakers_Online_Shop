<?php
/* Smarty version 3.1.30, created on 2017-04-29 19:34:45
  from "C:\xampp\htdocs\ecommerce\PartyShakers\Version4\partyshakers\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5904ceb5760101_16010356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dca3d2a73fc8d8bcf06ef12ff40dddc71d3b212' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ecommerce\\PartyShakers\\Version4\\partyshakers\\templates\\footer.tpl',
      1 => 1492817977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5904ceb5760101_16010356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '317625904ceb571d7b4_82864545';
?>
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
    <?php echo '<script'; ?>
 src="js/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/waypoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/modernizr.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap-hover-dropdown.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/owl.carousel.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/front.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>

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
<?php echo '</script'; ?>
>
     
   
</body>

</html><?php }
}
