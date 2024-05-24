<section class="content-header">
    <h1>
      Change Password
      <small>Password</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url()?>addashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Change Password</li>
    </ol>
    <?php echo validation_errors();?>
    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>
    <?php if($this->session->flashdata('success_msg')){   
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>
</section>
<section>
	<div class="content">
		<div class="box box-primary">
            <form action="<?=base_url()?>addashboard/update/<?php echo $adminId;?>" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
              	<div class="box-body">
	              	<div class="col-md-6">
	              		<div class="form-group">
	                  		<label for="password">Password</label>
	                  		<input type="password" class="form-control"  placeholder="Enter Password" name="password">
	                	</div>
	              	</div>
	              	<div class="col-md-6">
	              		<div class="form-group">
	                  		<label for="new_pasword">Confirm Password</label>
	                  		<input type="password" class="form-control"  placeholder="Enter Confirm Password" name="new_pasword">
	                	</div>
	              	</div>
              	</div>
				<div class="box-footer">
                <button type="submit" class="btn btn-danger">Update Password</button>
              </div>
            </form>
          </div>
      </div>
</section>