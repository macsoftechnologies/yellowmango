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
                    <span><a href="javascript:window.history.back();" class="btn btn-danger btn-xs pull-left" data-toggle="tooltip" data-placement="top" title="Back" style="margin-right: 5px;"><i class="mdi mdi-arrow-left"></i></a></span>
                    <h4 class="card-title" style="margin-left: 50px; margin-top: -30px;">Users</h4>
                    <p class="card-description"> Users Create </p>
                    <form action="<?=base_url()?>subadmin/insert" role="form" id="userForm" name="userForm" method="post" class="forms-sample" enctype="multipart/form-data">
                      <div class="col-md-12">
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail3">User Name</label>
                              <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Enter User Name..." name="admin_name" value="<?php echo $this->input->post('admin_name');?>">
                            </div>
                          </div>

                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputName1">Email</label>
                              <input type="email" class="form-control" id="exampleInputName1" placeholder="Enter Email..." name="email" value="<?php echo $this->input->post('email');?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputName1">Mobile Number</label>
                              <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter Mobile Number..." name="mobile_number" value="<?php echo $this->input->post('mobile_number');?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail3">Password</label>
                              <input type="password" class="form-control" id="exampleInputEmail3" placeholder="Enter Password..." name="password">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputPassword4">Confirm Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Enter Confirm Password ..." name="confirmpassword">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputPassword4">Address</label>
                              <textarea class="form-control" id="exampleInputPassword4" placeholder="Enter Address ..." name="address"></textarea>
                              <!-- <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Enter Confirm Password ..." name="confirmpassword"> -->
                            </div>
                          </div>


                        </div>
                      </div>

                      
                      
                      
                      
                      <button type="submit" class="btn btn-gradient-danger mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
