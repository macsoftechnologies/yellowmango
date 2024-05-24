<section class="content-header">
    <?php echo validation_errors();?>
    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>

    <?php if($this->session->flashdata('success_msg')){   
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>
</section>

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
    </style>

     
        <div class="">
            <div class="banner-header check_banner banner-lbook3  banner-background2">
                <div class="overlay"></div>
                <!-- <img src="<?=base_url();?>assets2/images/banner_images/small-banner.jpg" alt="Banner-header"> -->
                <div class="text">
                    <h3>HELP YOU RESET YOUR PASSWORD</h3>
                    <!-- <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Product Details</a><i class="fa fa-caret-right"></i>Daisy Coffee Table</p> -->
                </div>
            </div>
        </div>
        <!-- End banner -->
        
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
                            <h5>HELP YOU RESET YOUR PASSWORD</h5>

                        <form class="form-horizontal"action="<?=base_url()?>home/forgotpassword" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
                                <div class="group box login-inputs-res">
                                    <label class="control-label" for="inputemail">Email Address *</label>
                                    <input class="form-control" type="email" placeholder="Enter Email..." id="inputpass" name="email" required>
                                </div>
                                <div class="remember userlogin-button">
                                    <!-- <input id="remeber" type="checkbox" name="check" value="remeber">
                                    <label for="remeber" class="label-check">remember me!</label> -->

                                    <div>
                                      <button type="submit" class="link-v1 rt">Submit</button>
                                    </div>

                                    
                                </div>
                                
                            </form>
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
// <script type="text/javascript">
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
