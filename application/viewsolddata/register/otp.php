<section class="content-header">
    <h1>
        Business Customers
        <small>Create Business Customers</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_url()?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?=base_url()?>Employee">Business Customers</a></li>
        <li class="active">Create Business Customers</li>
    </ol>
    <?php echo validation_errors();?>
    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>
</section>

<section class="content">
	<div class="box box-default">
		<div class="box-header with-border">
			<a href="javascript:window.history.back();" class="btn btn-primary btn-xs pull-left"  data-toggle="tooltip" data-placement="top" title="Back" style="margin-right: 5px;"><i class="fa fa-arrow-left"></i></a>
		  	<h3 class="box-title">Create Business Customers</h3>
		</div>

		<div class="box-body">
          	<div class="row">
          		<form action="<?=base_url()?>registration/verifyOtp/<?php echo $admin['admin_id'];?>" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
          			<div class="form-row">
          				<div class="col-md-6">
          					<div class="form-group">
          						<label for="otp">OTP</label>
          						<input type="text" name="otp" id="otp" class="form-control" placeholder="Enter OTP">
          					</div>
          				</div>
          				<div class="col-md-12">
          					<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit">
          				</div>
          			</div>
          		</form>
          	</div>
        </div>
	</div>
</section>