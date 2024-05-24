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

       .contact-num p {
        padding-bottom: 10px;
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
<!-- /header -->
        <div class="contact-map">
            <!-- <iframe style="width: 100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.6210683882164!2d103.89829941475404!3d1.4036689989762818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da15e2fd7b1d2b%3A0xa9d0d193b0e283e7!2s271A%20Punggol%20Walk%2C%20Singapore%20821271!5e0!3m2!1sen!2sin!4v1616763817822!5m2!1sen!2sin" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3853.11878908881!2d79.87095961484553!3d15.041544489522868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4b6eff980b1ea1%3A0xcd1d5cda7dd86798!2sMogullur%2C%20Andhra%20Pradesh%20523115!5e0!3m2!1sen!2sin!4v1619685265638!5m2!1sen!2sin" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- End google map -->
        <div class="container container-ver2">
            <div class="page-contact">
                <div class="head">
                    <div class="item">
                        <!-- <div class="icon">
                            <span class="pe-7s-map-marker"></span>
                        </div> -->
                        <div class="text">
                            <p><span><i class="fa fa-home"></i></span><span>Mogullur,Gudlur[M],Prakasam[Dt],
                            <br/>Andhra Pradesh,India - 523115</p>
                        </div>
                    </div>
                    <!-- End item -->
                    <div class="item">
                        <!-- <div class="icon">
                            <span class="pe-7s-global"></span>
                        </div> -->
                        <div class="text">
                            <p><span><i class="fa fa-globe" aria-hidden="true"></i></span><a href="">www.yellowmango.com</a></p>
                        </div>
                    </div>
                    <!-- End item -->

                    <div class="item">
                        <!-- <div class="icon">
                            <span class="pe-7s-call"></span>
                        </div> -->
                        <div class="text contact-num">
                            <!--<a href="tel:9848421988"><p><span><i class="fa fa-phone"></i></span> +91 9848421988</p></a>-->

                            <!-- <a href="tel:6591878970"><p><span><i class="fa fa-phone"></i></span> 91878970</p></a> -->
                            <!-- <p>Fax:            (+1) 866-540-3229</p> -->
                        </div>
                    </div>
                    <!-- End item -->
                </div>
                <!-- End head -->
                <div class="content-text center">
                    <h3>Give us a Feedback</h3>
                    <p>Leave A Message</p>
                    <form class="form-horizontal space-50">
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="Name*" id="inputName" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="Email*" id="inputsumary" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="number" placeholder="Mobile" id="inputemail" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Comment" name="Comment" id="message" class="form-control"></textarea>
                        </div>
                        <div class="box align-left">
                            <a title="add tags" href="#" class="link-v1 rt">Send message</a>
                        </div>
                    </form>
                </div>
                <!-- End content-text -->
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