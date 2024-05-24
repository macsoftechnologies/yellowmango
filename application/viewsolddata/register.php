  <style>
  .is_community_gated_div
		{
			display:none;
		}
	</style>
  <script type="text/javascript">
            var baseurl = "<?php echo base_url();?>";
        </script>

 
       <div class="banner-header banner-lbook3 main-bannerr">
          <!-- <img src="<?=base_url();?>assets2/images/banner_images/small-banner.jpg" alt="Banner-header"> -->
              <div class="overlayy-main"></div>
              <div class="text">
                  <h3>Register</h3>
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
        <!-- End banner -->
        <div class="container container-ver2">
            <div class="page-login box space-50">
                <div class="row">
                    <div class="col-md-12 sign-in space-30">
                        <div class="login-form">
                            <h3>Create A New Account</h3>
                            <form class="form-horizontal"action="<?=base_url()?>home/insert" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
								<div class="">
									<input type="checkbox" name="is_gated_community" id="is_gated_community" class="" >
									<label>Gated Community</label>
								</div>
								
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="group box">
                                                <label class="control-label" for="inputemailres">First Name *</label>
                                                <input class="form-control" type="text" placeholder="Your First Name"
                                                    id="inputemailres" name="customer_name" value="<?php echo $this->input->post('cusstomer_name');?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="group box">
                                                <label class="control-label" for="inputemailres">Last Name *</label>
                                                <input class="form-control" type="text" placeholder="Your Last Name"
                                                    id="inputemailres" name="last_name" value="<?php echo $this->input->post('last_name');?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="group box">
                                                <label class="control-label" for="inputemailres">E-Mail *</label>
                                                <input class="form-control" type="text" placeholder="Your email"
                                                    id="inputemailres" name="email" value="<?php echo $this->input->post('email');?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="group box">
                                                <label class="control-label" for="inputemailres">Phone *</label>
                                                <input class="form-control" type="text" placeholder="Your Phone No"
                                                    id="inputemailres" name="mobile_number" value="<?php echo $this->input->post('mobile_number');?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="">
                                                <label class="control-label" for="inputemailres">Password *</label>
                                                <input class="form-control" type="password" placeholder="Your Password"
                                                    id="inputemailres" name="password" required>
                                            </div>
                                        </div>
                                        
										<div class="col-md-6 not_gated_community">
											<label for="inputemail" class=" control-label">STATE<span class="color">*</span></label>
											<select class="form-control" name="state" id="state1" required>
												<option value="">Select State</option>
												<option value="Andhra Pradesh">Andhra Pradesh</option>
												<option value="Telangana">Telangana</option>
												<option value="Tamilnadu">Tamilnadu</option>
												<option value="Karnataka">Karnataka</option>
											</select>
										</div>
										
										<div class="col-md-6 is_community_gated_div">
											<label for="inputemail" class=" control-label">CITY<span
													class="color">*</span></label>
											<select class="form-control" name="city" id="cityChange">
												<option value="">Select City </option>
												<?php 
												if(count($cities)!=0)
												{
													for($i=0;$i<count($cities);$i++)
													{
														echo '<option value="'.$cities[$i]['city_name'].'">'.$cities[$i]['city_name'].'</option>';
													}
												}
												?>
											</select>
										</div>
										
										
										
										<div class="col-md-6 is_community_gated_div">
											<label for="inputphone" class=" control-label">Appartment<span
													class="color">*</span></label>
											<select class="form-control" name="appartment" id="appartment1">
												<option value="">Select Appartment </option>
											</select>
										</div>
										
										<div class="col-md-6 is_community_gated_div">
											<label for="inputphone" class=" control-label">Block<span
													class="color">*</span></label>
											<input type="text" placeholder="Enter your Block ..." id="block-input"
												class="form-control" name="block" value="<?php echo $this->input->post('block');?>"> <br/>
										</div>
										
										<div class="col-md-6 is_community_gated_div">
											<label for="inputphone" class=" control-label">Flat no.<span
													class="color">*</span></label>
											<input type="text" placeholder="Enter your Flat No. ..." id="flat-input"
												class="form-control" name="flat_no" value="<?php echo $this->input->post('flat_no');?>">
										</div>
										
										
										<div class="col-md-6 not_gated_community">
											<label for="inputemail" class=" control-label">ADDRESS 1<span
													class="color">*</span></label>
											<input type="text" placeholder="Enter your Address 1..." id="add1"
												class="form-control" name="address1" value="<?php echo $this->input->post('address1');?>" required>
										</div>
										<div class=" col-md-6 not_gated_community">
											<label for="inputemail" class=" control-label">ADDRESS 2<span
													class="color">*</span></label>
											<input type="text" placeholder="Enter your Address 2..." id="add2"
												class="form-control" name="address2" value="<?php echo $this->input->post('address2');?>" required>
										</div>

										<div class="col-md-6 not_gated_community">
											<label for="inputemail" class=" control-label">TOWN/MANDAL<span
													class="color">*</span></label>
											<input type="text" placeholder="Enter your Town/Mandal..." id="town1"
												class="form-control" name="town_mandal" value="<?php echo $this->input->post('town_mandal');?>" required>
										</div>
										

										<div class="col-md-6 not_gated_community">
											<label for="inputemail" class=" control-label">DISTRICT<span
													class="color">*</span></label>
											<input type="text" placeholder="Enter your District..." id="district1"
												class="form-control" name="district" value="<?php echo $this->input->post('district');?>" required>
										</div>
										
										<div class="col-md-6" >
											<label for="inputpostcode" class=" control-label">PIN<span
													class="color">*</span></label>
											<input type="text" placeholder="Enter your Pincode..." class="pincode form-control zip" name="postal_code" maxlength="7" id="value1" required>
										</div>
										
										
                                    </div>
                                </div>
                                <div>	
									<br/>
                                    <button type="submit" class="link-v1 rt" style="margin-top:20px;">Sign Up</button>
                                </div>

                                <div style="text-align: end">
                                    <p>Already Have a account?&nbsp;<a href="<?=base_url()?>userlogin/index/0/0/0">Login</a></p>
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

<script type="text/javascript">
    $(document).ready(function () {

         $('#email').change(function(){
            $('#sponsor_name').empty();
            var email = this.value;
            // if(#sponsor_name == null){
            var url = baseurl + "home/getEmail";
                $.ajax({
                type: 'POST',
                url: url,
                data:{email: email},
                dataType: 'json',
                success: function (result) {
                    //console.log(result);
                   if(result['res'] == "pass"){
                    $('#sponsor_name').show();
                    $('#sponsor_name').css('color','red');
                    $('#sponsor_name').append("Sorry! Email Already Exit");
                   }else{
                    $('#sponsor_name').show();
                    $('#sponsor_name').css('color','green');
                    $('#sponsor_name').append("");
                   }
                }
            });

        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {

         $('#mobile_number').change(function(){
            $('#phone').empty();
            var mobile_number = this.value;
            // if(#sponsor_name == null){
            var url = baseurl + "home/getMobileNumber";
                $.ajax({
                type: 'POST',
                url: url,
                data:{mobile_number: mobile_number},
                dataType: 'json',
                success: function (result) {
                    //console.log(result);
                   if(result['res'] == "pass"){
                    $('#phone').show();
                    $('#phone').css('color','red');
                    $('#phone').append("Sorry! Mobile Number Already Exit");
                   }else{
                    $('#phone').show();
                    $('#phone').css('color','green');
                    $('#phone').append("");
                   }
                }
            });

        });
    });
</script>

 <script type="text/javascript">
    function yesnoCheck(that) {
    if (that.value == "OTHERS") {
            document.getElementById("templates1").style.display = "block";
            document.getElementById("templates2").style.display = "none";
            
        } else {
        }
    }
</script>


<script type="text/javascript">
 

$("#cityChange").on("change",function()
{
	var v = $(this).val();
	$.ajax({
		type: 'POST',
		url: baseurl + "home/getCommunityCity",
		data:{'city_name':v},
		dataType: 'json',
		success: function (result) 
		{	
			if(result.status!=0)
			{
				var l = result.record.length;
				
				var content ="<option value='' style='display:none' selected>Select Appartment</option>";
				for(var i=0;i<l;i++)
				{
					content+='<option value="'+result.record[i].community_id+'-'+result.record[i].appartment+'">'+result.record[i].appartment+'</option>';
				}

				$("#appartment1").html(content);
			}
			else
			{
				alert("Sorry! We have no appartment in this city yet");
				return false;
			}
			
			recalculateTotal();
		}
	});	
	
});



$("#is_gated_community").on("change",function()
{
	if($(this).is(':checked'))
	{
		$(".is_community_gated_div").css("display","block");
		$(".not_gated_community").css("display","none");
		
		
		$("#cityChange").attr("required",true);
		$("#appartment1").attr("required",true);
		$("#appartment1").attr("required",true);
		$("#block-input").attr("required",true);
		$("#flat-input").attr("required",true);
		$("#add1").removeAttr("required");
		$("#add2").removeAttr("required");
		$("#town1").removeAttr("required");
		$("#district1").removeAttr("required");
		$("#state1").removeAttr("required");
		
	}
	else
	{	
		$(".is_community_gated_div").css("display","none");
		
		$(".not_gated_community").css("display","block");
		
		$('#cityChange').prop('selectedIndex',0);
		$('#appartment1').prop('selectedIndex',0);
		
		$("#cityChange").removeAttr("required");
		$("#appartment1").removeAttr("required");
		$("#appartment1").removeAttr("required");
		$("#block-input").removeAttr("required");
		$("#flat-input").removeAttr("required");
		$("#add1").attr("required",true);
		$("#add2").attr("required",true);
		$("#town1").attr("required",true);
		$("#district1").attr("required",true);
		$("#state1").attr("required",true);
	}		
});

</script>