<?php echo validation_errors();?>
    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>
    <?php if($this->session->flashdata('success_msg')){   
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>

            <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <span><a href="javascript:window.history.back();" class="btn btn-primary btn-xs pull-left" data-toggle="tooltip" data-placement="top" title="Back" style="margin-right: 5px;"><i class="mdi mdi-arrow-left"></i></a></span>
                <h4 class="card-title" style="margin-left: 50px; margin-top: -30px;">Change Password</h4>
                <p class="card-description"> Change Password </p>
            <form action="<?=base_url()?>changepassword/update/<?php echo $user['user_id'];?>" role="form" id="userForm" name="userForm" method="post" enctype="multipart/form-data">
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
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
