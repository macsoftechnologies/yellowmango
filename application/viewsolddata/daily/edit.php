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
                    <h4 class="card-title" style="margin-left: 50px; margin-top: -30px;">Daily Cities Update</h4>
                    <br>
                    <form action="<?=base_url()?>dailycities/update/<?php echo $daily['daily_city_id'];?>" role="form" id="userForm" name="userForm" method="post" class="forms-sample" enctype="multipart/form-data">
                      <div class="col-md-12">
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail3">Daily City Name</label>
                              <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Enter Daily City Name..." name="daily_city_name" value="<?php echo $daily['daily_city_name'];?>">
                            </div>
                          </div>
                        </div>
                      </div>

                      
                      
                      
                      
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <a href="<?=base_url();?>dailycities/edit/<?php echo $daily['daily_city_id'];?>" class="btn btn-light">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>




<style type="text/css">
  .multiselect {
  width: 200px;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}
</style>

