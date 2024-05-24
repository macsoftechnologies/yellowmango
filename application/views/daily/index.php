<?php echo validation_errors();?>
    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>
    <?php if($this->session->flashdata('success_msg')){   
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>

            <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Time Details</h4>
                <!-- <p class="card-description"> Add class <code>.table</code>
                </p> -->
                <div class="content">
                    <div class="table-full-width">
                        <table class="table">
                            <th>S.no</th>
                            <th>Time</th>
                            <th>Actions</th>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="" class="btn btn-xs btn-success">1</a>
                                    </td>
                                    <td><?php echo $time['time'];?></td>
                                    <td><button title="Quick view" class="btn btn-xs btn-info btn-xs" data-toggle="modal" data-target="#productModal"  style="padding: 5px;"><i class="mdi mdi-pencil"></i></button></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>

                    <!-- <div class="footer">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated 3 minutes ago
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>


     <div class="modal fade" id="productModal">
              <div class="modal-dialog">
                <div class="modal-content photo-modal" style="height: 285px;">
                
                  <div class="modal-header">
                    <h4 class="modal-title">Update Time</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div>
                  
                  <div class="modal-body">
                    <div class="add-photo">
                       <form action="<?=base_url()?>time/update/<?php echo $time['time_id'];?>" role="form" id="userForm2" name="userForm" method="post" enctype="multipart/form-data" class="image-modal-form">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-gruop">
                                <!-- <input type="text" name="declaration" class="form-control" placeholder="Enter Declaration" > -->
                                 <input type="text" name="time" class="form-control" placeholder="Enter Answer" value="<?php echo $time['time'];?>" id="time">
                               <!--  <textarea class="form-control" name="about_me" size="100" placeholder="About Me"></textarea> -->
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-md-12" style="margin-top: 10px;">
                              <input type="submit" class="btn btn-success" value="Submit">
                              <!--  <a href="#" name="submit" class="edit-button declarationUpdate btn btn-primary"  >Submit</a> -->
                            </div>
                          </div>
                        </div>
                   </form>
                      <!-- <button type="submit" class="edit-button">submit</button> -->
                    </div>
                  </div>
                  
                </div>
              </div>
      </div>

        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Daily Cities Details</h4>
                <!-- <p class="card-description"> Add class <code>.table</code>
                </p> -->

                <div class="pull-right">
                   <a href="<?=base_url()?>dailycities/create" class="btn btn-success btn-xs"  data-toggle="tooltip" data-placement="left" title="Create User" style="margin-left: 850px; margin-top: -50px;"><i class="mdi mdi-plus"></i> Create</a>
                </div>
                <div class="content">
                    <div class="table-full-width">
                        <table class="table">
                            <th>S.no</th>
                            <th>Daily City Name</th>
                            <th>Actions</th>
                            <tbody>
                                <?php if($daily->num_rows() > 0) { 
                                    foreach ($daily->result() as $key => $dd) { ?>
                                <tr>
                                    <td><span class="btn btn-success btn-xs"><?php echo $key+1;?></span></td>
                                    <td><?php echo $dd->daily_city_name;?></td>
                                   
                                    <td class="td-actions">
                                        <a href="<?=base_url();?>dailycities/edit/<?php echo $dd->daily_city_id;?>" rel="tooltip" title="Edit Task" class="btn btn-success btn-simple btn-sm" style="padding: 5px;">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <a href="<?=base_url();?>dailycities/delete/<?php echo $dd->daily_city_id;?>" rel="tooltip" onclick="return deleteItem();" title="Remove" class="btn btn-primary btn-simple btn-sm" style="padding: 5px;">
                                            <i class="mdi mdi-close"></i>
                                        </a>
                                    </td>
                                </tr>

                            <?php }
                        } ?>
                                
                            </tbody>
                        </table>
                    </div>

                    <!-- <div class="footer">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated 3 minutes ago
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function deleteItem() {
    if (confirm("Are you sure you want to remove ?")) {
        return true;
    }
    return false;
}
</script>

<style type="text/css">
    .table td {
    vertical-align: middle;
    font-size: 0.800rem;
    line-height: 1;
    white-space: nowrap;
}

</style>