  <script type="text/javascript">
            var baseurl = "<?php echo base_url();?>";
        </script>
  <style>

    @media (max-width:  992px) {
      #header .header-top .logo-mobile img {
        display: block !important;
      }
    }

    .banner-header.banner-lbook3 img {
      width: 100%;
      height: 100%;
    }

    .banner-header .text {

      margin-top: -78px;

    }

    .panel {
      box-shadow: 0 0px 4px -1px rgb(0 0 0 / 38%);
    }

    p.box.center.space-10 {
      text-align: center;
    }

    .icon img {
      height: 120px;
    }

    .space-10 {
      margin-bottom: 30px !important;
    }

    .order-text h2 {
      text-transform: uppercase;
      font-size: 24px;
      margin-bottom: 15px;
    }

    .a {
      display: flex;
    }

    .a img {
      padding: 4px 10px 0px 0px;
      display: inline-block;
      height: 15px;
    }

    .order-complete p {
      font-size: 17px;
      margin-bottom: 14px;
      display: inline-block;
      text-align: start;
      line-height: 19px;
      letter-spacing: 0.5px;
    }




    @media only screen and (max-width: 1200px) {
      #header .header-top .logo-mobile img {
        display: none;
      }

      .order {
        margin: auto;
        width: 60%;
      }

      .space-padding-tb-30 {
        padding-bottom: 30px !important;
        padding-top: 30px !important;
      }
    }

    @media only screen and (max-width: 990px) {
      .banner-header.banner-lbook3 .text h3 {
        font-size: 55px;
      }

      .banner-header .text {
        margin-top: -72px;
      }

      #header .header-top .logo-mobile img {
        display: none;
      }

      .space-padding-tb-30 {
        padding-bottom: 30px !important;
        padding-top: 0px !important;
      }

      .banner-header.banner-lbook3 img {
        height: 100%;
      }

      .icon img {
        height: 120px;
      }

      .order-text h2 {
        font-size: 24px;
      }

      .order-complete p {
        font-size: 16px;
      }

      .order {
        margin: auto;
        width: 60%;
      }

      .link-v1.lh-50 {
        padding: 0 10px;
      }

      .link-v1.rt {
        font-size: 12px;
      }
    }

    @media only screen and (max-width: 767px) {
      .banner-header.banner-lbook3 img {
        height: 100%;
      }

      .banner-header.banner-lbook3 .text h3 {
        font-size: 40px;
      }

      .mega-menu+div {
        margin-top: -38px !important;
      }

      .banner-header.banner-lbook3 .text {
        height: 100px;
        margin-top: -54px;
      }

      .space-padding-tb-30 {
        padding-bottom: 30px !important;
        padding-top: 0px !important;
      }

      .icon img {
        height: 100px;
      }

      .order-text h2 {
        font-size: 16px !important;
      }

      .order-complete p {
        font-size: 14px;
      }

      .order {
        margin: auto;
        width: 60%;
      }

      .link-v1.lh-50 {
        padding: 0 10px;
      }

      .link-v1.rt {
        font-size: 12px;
      }
    }

    /* @media only screen and (max-width: 467px) {
        .banner-header.banner-lbook3 img{
          height: 100%;
        }
        .banner-header.banner-lbook3 .text {
          margin-top: -22px;
        }
        .space-padding-tb-30 {
          padding-bottom: 10px !important;
          padding-top: 0px !important;
        }
        
        .banner-header.banner-lbook3 .text h3{
          font-size: 20px;
        }
        .icon img {
    height: 100px;
}
.order-text h2{
  font-size: 16px !important;
}
.order-complete p{
  font-size: 14px ;
}
.link-v1.rt{font-size: 12px;}
      } */
    @media only screen and (max-width: 467px) {
      .banner-header.banner-lbook3 .text {
        margin-top: -22px;
      }

      .banner-header.banner-lbook3 img {
        height: 100%;
      }

      .banner-header.banner-lbook3 .text h3 {
        font-size: 20px;
      }

      .space-padding-tb-30 {
        padding-bottom: 30px !important;
        padding-top: 0px !important;
      }

      .icon img {
        height: 80px;
      }

      .order-text h2 {
        font-size: 14px !important;
      }

      .order-complete p {
        font-size: 12px;
      }

      .link-v1.lh-50 {
        padding: 0 10px;
      }

      .link-v1.rt {
        font-size: 10px;
      }

      .order {
        margin: auto;
        width: 90%;
      }

    }
  </style>
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

        <?php if($this->session->flashdata('success_msg')){ 
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>

    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>
        <div class="main-content">
      <div class="">
        <div class="banner-header banner-lbook3 main-bannerr1">
                <!-- <img src="<?=base_url();?>assets2/images/banner_images/small-banner.jpg" alt="Banner-header"> -->
                <div class="overlayy-main"></div>
                <div class="text">
                    <h3>Confirm Order</h3>
                    <!-- <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Product Details</a><i class="fa fa-caret-right"></i>Daisy Coffee Table</p> -->
                </div>
            </div>
      </div>

       <div class="container container-ver2 space-padding-tb-30"></div>

      <div class="container container-ver2">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6 order">
            <div class="box float-left order-complete center space-10">
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="icon space-20">
                    <img src="<?=base_url();?>assets2/images/check-out.gif" alt="icon" />
                  </div>
                  <div class="order-text">
                    <h2>ORDER ID : <?php echo $orderlist['order_txn'];?></h2>
                    <p class="box center space-10">
                      Thank you for shopping with us, your order is complete!
                    </p>
                    <div class="a">
                      <img src="<?=base_url();?>assets2/images/icon-deslist.jpg" />
                      <p>
                        Do not Store Fresh fruits in the refrigerator and keep
                        away from sunlight.
                      </p>
                    </div>
                    <div class="a">
                      <img src="<?=base_url();?>assets2/images/icon-deslist.jpg" />
                      <p>
                        Once received the parcel, please check the quality of
                        the mangoes and feel free to contact us in 24 hrs if
                        there is any issue.
                      </p>
                    </div>
                    <div class="a">
                      <img src="<?=base_url();?>assets2/images/icon-deslist.jpg" />
                      <p>
                        If you really like the mangoes, please follow and like
                        our pages on Facebook and Instagram and do give your
                        valuable reviews.
                      </p>
                    </div>
                  </div>
                  <div class="box">
                    <!-- <a
                        class="link-v1 lh-50 margin-right-20 space-20 color-brand"
                        href="#"
                        title="HOME PAGE"
                        >HOME PAGE</a
                      > -->
                   <a class="link-v1 lh-50 rt space-20" href="<?=base_url();?>home" title="CONTINUE SHOPPING">CONTINUE SHOPPING</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3"></div>
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