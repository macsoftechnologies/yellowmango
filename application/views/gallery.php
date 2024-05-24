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
                <div class="banner-header banner-lbook3 banner-background1">
                  <div class="overlay"></div>
                   <!--<img src="<?=base_url();?>assets2/images/banner_images/small-banner.jpg" alt="Banner-header"> -->
                  <div class="text">
                      <h3>Gallery</h3>
                      <!-- <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Product Details</a><i class="fa fa-caret-right"></i>Daisy Coffee Table</p> -->
                  </div>
              </div>
            </div>


            <div class="container gallery-container">
              <div class="row">
                <div class="col-md-6">
                  <div class="gallery_video">
					<iframe height="315" src="https://www.youtube.com/embed/y5DQ2iKoa5E?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="gallery_video">
                  	<iframe height="315" src="https://www.youtube.com/embed/yDai_PStQmw?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>




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