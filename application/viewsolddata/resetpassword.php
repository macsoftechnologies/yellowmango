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

      .rt {
        width: 235px;
      }
}
    </style>

     
        <div class="">
            <div class="banner-header check_banner banner-lbook3  banner-background2">
                <div class="overlay"></div>
                <!-- <img src="<?=base_url();?>assets2/images/banner_images/small-banner.jpg" alt="Banner-header"> -->
                <div class="text">
                    <h3>Forgot Password !</h3>
                    <!-- <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Product Details</a><i class="fa fa-caret-right"></i>Daisy Coffee Table</p> -->
                </div>
            </div>
        </div>
        <!-- End banner -->

        <div class="container container-ver2">
            <div class="page-login box space-50 login-ress">
                <div class="row">
                    <div class="col-md-12 sign-in space-30">
                        <div class="login-form">
                            <h5>Change the Password for your Veeramango account</h5>

                        <form class="form-horizontal"action="<?=base_url()?>home/reset/<?php echo $customers['customer_id'];?>" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
                                <div class="group box login-inputs-res">
                                    <label class="control-label" for="inputemail">Password *</label>
                                    <input class="form-control" type="password" placeholder="Enter Password..." id="inputpass" name="password" required>
                                    <input type="hidden" name="customer_id" value="<?php echo $customers['customer_id'];?>">
                                </div>

                                <div class="group box login-inputs-res">
                                    <label class="control-label" for="inputemail">Confirm Password *</label>
                                    <input class="form-control" type="password" placeholder="Enter Confirm Password..." id="inputpass" name="confirmpassword" required>
                                </div>
                                <div class="remember userlogin-button">
                                    <!-- <input id="remeber" type="checkbox" name="check" value="remeber">
                                    <label for="remeber" class="label-check">remember me!</label> -->

                                    <div>
                                      <button type="submit" class="link-v1 rt">Change My Password!</button>
                                    </div>

                                    
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- ends: .contact-area -->