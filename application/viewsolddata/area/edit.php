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
                    <span><a href="javascript:window.history.back();" class="btn btn-success btn-xs pull-left" data-toggle="tooltip" data-placement="top" title="Back" style="margin-right: 5px;"><i class="mdi mdi-arrow-left"></i></a></span>
                    <h4 class="card-title" style="margin-left: 50px; margin-top: -30px;">Area Update</h4>
                    <br>
                    <form action="<?=base_url()?>area/update/<?php echo $areas['shipping_charge_id'];?>" role="form" id="userForm" name="userForm" method="post" class="forms-sample" enctype="multipart/form-data">
                      <div class="col-md-12">
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail3">Area</label>
                              <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Enter Area..." name="area" value="<?php echo $areas['area'];?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail3">Pincode</label>
                              <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Enter Pincode ..." name="pincode" value="<?php echo $areas['pincode'];?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail3">Charge</label>
                              <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Enter Price ..." name="charge" value="<?php echo $areas['charge'];?>">
                            </div>
                          </div>

                        </div>
                      </div>

                      
                      
                      
                      
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
