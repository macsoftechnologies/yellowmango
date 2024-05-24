  <script type="text/javascript">
            var baseurl = "<?php echo base_url();?>";
        </script>

 <style type="text/css">
     .closedd { 
        text-align: center;
        font-size: 30px;
        font-weight: bold;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: 0.4;
      }

      .add-cart h3 {
          color: red;
       }

       .para h3 {
          color: red;
       }

       .login-form {
        display: flex;
        flex-wrap: wrap;
       }

       .guest-modall {
        max-width: 550px;
        margin: auto;
       }

       .guest-modall input {
        text-align: left;
       }
 </style>       
  <script type="text/javascript">
            var baseurl = "<?php echo base_url();?>";
        </script>
        <style>
        .col-md-7 {
            max-width: 700px !important;
        }

        .col-md-5 {
            max-width: 500px !important;
        }

        @media (max-width: 768px) {
            .col-md-7 {
                padding: 0px
            }

            .col-md-5 {
                padding: 0px
            }
        }

    .payment { 
        font-size: 20px;
     }
     .radios { 
        width: 15px;
      }
    }

    @media (max-width: 468px) {
      .page-login form .remember {
        display: flex !important;
        flex-wrap: wrap !important;
      }
    }

    </style>


          <div class="banner-header banner-lbook3 main-bannerr1">
            <!-- <img src="<?=base_url();?>assets2/images/banner_images/small-banner.jpg" alt="Banner-header"> -->
                <div class="overlayy-main"></div>
                <div class="text">
                    <h3>Login</h3>
                    <!-- <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Product Details</a><i class="fa fa-caret-right"></i>Daisy Coffee Table</p> -->
                </div>
            </div>
        
         <?php echo validation_errors();?>
    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>
    <?php if($this->session->flashdata('success_msg')){   
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>
        <div class="container container-ver2">
            <div class="page-login box space-50 login-ress">
                <div class="row">
                    <div class="col-md-12 sign-in space-30">
                        <div class="login-form">
                            <h3>Login</h3>
                            
                            <form class="form-horizontal"action="<?=base_url()?>userlogin/login" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
                                <div class="group box space-20 login-inputs-res">
                                    <label class="control-label" for="inputemail">EMAIL ADDRESS *</label>
                                    <input class="form-control" type="text" placeholder="Your email" id="inputemail" name="email" required>
                                    <input type="hidden" name="product_id" class="form-control" value="<?php echo $product_id;?>">
                                    <input type="hidden" name="price" class="form-control" value="<?php echo $price;?>">
                                    <input type="hidden" name="quantity" class="form-control" value="<?php echo $quantity;?>">
                                </div>
                                <div class="group box login-inputs-res">
                                    <label class="control-label" for="inputemail">PASSWORD *</label>
                                    <input class="form-control" type="password" placeholder="Password" id="inputpass" name="password" required>
                                </div>
                                <div class="remember userlogin-button logg">
                                    <!-- <input id="remeber" type="checkbox" name="check" value="remeber">
                                    <label for="remeber" class="label-check">remember me!</label> -->

                                    <div>
                                      <button type="submit" class="link-v1 rt">LOGIN NOW</button>
                                      <button type="button" class="link-v1 rt" data-toggle="modal" data-target="#exampleModal1">
                              Guest Login
                            </button>
                                    </div>

                                    <div class="signupps">
                                        <a class="help" href="<?=base_url();?>home/register" title="help ?">Signup Now&nbsp;|&nbsp;</a>
                                        <a class="help" href="<?=base_url();?>home/changepassword" title="help ?">Fogot your password?</a>                                    
                                    </div>

                                    
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog delivery-modal " role="document">
            <div class="modal-content guest-modall">
              <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="daily-delivery-section">
                            <div class="daily-deliver-heading">
                                <h3>Guest Login</h3>
                            </div>

                            <div class="daily-content">
                              <form class="form-horizontal"action="<?=base_url()?>userlogin/guestlogin" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
                                        <div class="group box space-20 login-inputs-res">
                                            <label class="control-label" for="inputemail">EMAIL ADDRESS *</label>
                                            <input class="form-control" type="email" placeholder="Your email" id="inputemail" name="email" required>
                                            <input type="hidden" name="product_id" class="form-control" value="<?php echo $product_id;?>">
                                            <input type="hidden" name="price" class="form-control" value="<?php echo $price;?>">
                                            <input type="hidden" name="quantity" class="form-control" value="<?php echo $quantity;?>">
                                            <input type="hidden" name="role_id" class="form-control" value="2">
                                        </div>
                                        <div class="remember userlogin-button logg">
                                            <!-- <input id="remeber" type="checkbox" name="check" value="remeber">
                                            <label for="remeber" class="label-check">remember me!</label> -->

                                            <div>
                                              <button type="submit" class="link-v1 rt">LOGIN NOW</button>
                                            </div>

                                            
                                        </div>

                                            
                                        
                                    </form>

                            </div>
                        </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="daily-delivery-section Weekly-delivery-section">
                            <div class="daily-deliver-heading">
                                <!-- <h3>Weekly Delivery</h3> -->
                            </div>

                            <div class="daily-content">
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
              
            </div>
          </div>
        </div>
      
          <script type="text/javascript">
    $(document).ready(function(){
        $('.quantity').change(function(){
            $('#product_pricee').empty();
             $('#productsssss').empty();
            // var qty = $(this).attr('id');
            // var aa = qty.split("_");
            var price2 = $('#priced2').val();
            var price3 = $('#priced3').val();
            var price4 = $('#priced4').val();
            var quantity = $('#quantity').val();

           if(parseFloat(quantity) == 1 || parseFloat(quantity) == 2) {
               var tot_amount = parseFloat(price2) * parseFloat(quantity);
               // $('#product_pricee').show();
               $('#product_pricee').val(price2);
               $('#productsssss').show();
               $('#dollar').show();
               $('#productsssss').append(tot_amount);
               $('#productppr').hide();
           }else if(parseFloat(quantity) == 3 || parseFloat(quantity) == 4) {
               var tot_amount = parseFloat(price3) * parseFloat(quantity);
               // $('#product_pricee').show();
               $('#product_pricee').val(price3);
               $('#productsssss').show();
               $('#dollar').show();
               $('#productsssss').append(tot_amount);
               $('#productppr').hide();
            }else {
               var tot_amount = parseFloat(price4) * parseFloat(quantity);
               // $('#product_pricee').show();
               $('#product_pricee').val(price4);
               $('#productsssss').show();
               $('#dollar').show();
               $('#productsssss').append(tot_amount);
               $('#productppr').hide();
            }
            
        });
      });
    </script>

    <script type="text/javascript">
    var baseurl = "<?php echo base_url();?>";
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
<script type="text/javascript">
//     $(document).ready(function(){
//         $('body').on('click', '.cart_id', function(){
//           var id = $(this).attr('id');
//           var url = baseurl+'home/deleteCart';
//           location.reload();
//           $.ajax({
//               url: url,
//               type: 'POST',
//               dataType: 'json',
//               data:{cart_id:id},
//               success: function (res) {
//                   if(res['status'] == "pass")
//                   {
//                     location.reload();
//                   }
//                   else
//                   {
//                      alert("somethig went wrong");
//                      location.reload();
//                   }
//               }
//           });
//       })
//     });
// </script>


<script>
    window.onscroll = function() {myFunction()};
    var headerTop = document.getElementById("header-top");
    function myFunction() {
        if(window.innerWidth > 1200) {
            if (window.scrollY > 100) {
    headerTop.classList.add("fixed-header");
  } else {
    headerTop.classList.remove("fixed-header");
  }
        }
  
}
</script>