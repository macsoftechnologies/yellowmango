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
                <h4 class="card-title">Pincodes Details</h4>
                <!-- <p class="card-description"> Add class <code>.table</code>
                </p> -->
                <div class="pull-right">
                  <!--  <a class="btn btn-success btn-xs"  data-toggle="tooltip" data-placement="left" title="Create Pincode" style="margin-left: 850px; margin-top: -50px;"><i class="mdi mdi-plus"></i> Create</a> -->
                   <button title="Quick view" class="btn btn-success btn-xs" data-toggle="modal" data-target="#product"  style="margin-left: 850px; margin-top: -50px;">Create</button>
                </div>
                <div class="content">
                    <div class="table-full-width">
                        <table class="table">
                            <th>S.no</th>
                            <th>Pincode 1</th>
                            <th>Pincode 2</th>
                            <th>Price</th>
                            <th>Pay on Delivery</th>
                            <th>Action</th>
                            <tbody>

                              <?php if($pincodes->num_rows() > 0) {
                                foreach ($pincodes->result() as $key => $pi) { ?>
                                <tr>
                                    <td>
                                        <a href="" class="btn btn-xs btn-success"><?php echo $key+1;?></a>
                                    </td>
                                    <td><?php echo $pi->pincode;?></td>
                                    <td><?php echo $pi->range;?></td>
                                    <td><?php echo $pi->price;?></td>
                                    <td><?php if($pi->payondelivery == 1) {?>
                                    <a href="<?=base_url();?>pincodes/enableupdate/<?php echo $pi->range;?>" title="Disable" class="btn btn-xs btn-success btn-xs"  style="padding: 5px; margin: 5px;"><i class="mdi mdi-thumb-up"></i></a>
                                    <?php } else { ?>
                                    <a href="<?=base_url();?>pincodes/disableupdate/<?php echo $pi->range;?>" title="Enable" class="btn btn-xs btn-warning btn-xs"  style="padding: 5px; margin: 5px;"><i class="mdi mdi-thumb-down"></i></a>
                                    <?php } ?></td>
                                    <td><button title="Quick view" class="btn btn-xs btn-info btn-xs" data-toggle="modal" data-target="#productModal<?php echo $key+1;?>"  style="padding: 5px;"><i class="mdi mdi-pencil"></i></button><a href="<?=base_url();?>pincodes/delete/<?php echo $pi->range;?>" title="Delete" class="btn btn-xs btn-danger btn-xs"  style="padding: 5px; margin: 5px;"><i class="mdi mdi-close"></i></button></td>
                                </tr>
                              <?php }
                            } ?>
                                
                            </tbody>
                        </table>
                    </div>
            <?php if($pincodes->num_rows() > 0) {
                        foreach ($pincodes->result() as $key => $pi) { ?>

            <div class="modal fade" id="productModal<?php echo $key+1;?>">
              <div class="modal-dialog">
                <div class="modal-content photo-modal" style="height: 285px;">
                
                  <div class="modal-header">
                    <h4 class="modal-title">Update Pincode Price</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div>
                  
                  <div class="modal-body">
                    <div class="add-photo">
                      <form action="<?=base_url()?>pincodes/update/<?php echo $pi->range;?>" role="form" id="userForm2" name="userForm" method="post" enctype="multipart/form-data" class="image-modal-form">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="text" name="pincode" class="form-control" placeholder="Enter Pincode 1" value="<?php echo $pi->pincode;?>" id="time">
                                  </div>
                                </div>
                                
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="text" name="pincode2" class="form-control" placeholder="Enter Pincode 2" value="<?php echo $pi->range;?>" maxlength="6">
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="number" name="price" class="form-control" placeholder="Enter Percentage" value="<?php echo $pi->price;?>" min="0" id="time">
                                  </div>
                                </div>
                                
                                </div>
                              </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-md-12" style="margin-top: 10px;">
                              <input type="submit" class="btn btn-gradient-success" value="Submit">
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
          <?php } 
        } ?>


        <div class="modal fade" id="product">
              <div class="modal-dialog">
                <div class="modal-content photo-modal" style="height: 285px;">
                
                  <div class="modal-header">
                    <h4 class="modal-title">Create Pincode Price</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div>
                  
                  <div class="modal-body">
                    <div class="add-photo">
                      <form action="<?=base_url()?>pincodes/insert" role="form" id="userForm2" name="userForm" method="post" enctype="multipart/form-data" class="image-modal-form">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="text" name="pincode" class="form-control" placeholder="Enter Pincode 1" maxlength="6">
                                  </div>
                                </div>
                                
                                
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="text" name="pincode2" class="form-control" placeholder="Enter Pincode 2" maxlength="6">
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="number" name="price" class="form-control" min="0" placeholder="Enter Percentage">
                                  </div>
                                </div>
                                
                                </div>
                              </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-md-12" style="margin-top: 10px;">
                              <input type="submit" class="btn btn-gradient-success" value="Submit">
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
                </div>
            </div>
        </div>
    </div>
</div>

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
    function deleteItem() {
    if (confirm("Are you sure you want to remove ?")) {
        return true;
    }
    return false;
}
</script>

<script type="text/javascript">
    function statusItem() {
    if (confirm("Are you sure you want to change status ?")) {
        return true;
    }
    return false;
}
</script>

<script type="text/javascript">
  $(document).ready(function() {
  $(".checkAll").on("click", function() {
    $(this)
      .closest("table")
      .find("tbody :checkbox")
      .prop("checked", this.checked)
      .closest("tr")
      .toggleClass("selected", this.checked);
  });

  $("tbody :checkbox").on("click", function() {
    // toggle selected class to the checkbox in a row
    $(this)
      .closest("tr")
      .toggleClass("selected", this.checked);

    // add selected class on check all
    $(this).closest("table")
      .find(".checkAll")
      .prop("checked",
        $(this)
          .closest("table")
          .find("tbody :checkbox:checked").length ==
          $(this)
            .closest("table")
            .find("tbody :checkbox").length
      );
  });
});

</script>

<style type="text/css">
    .table td {
    vertical-align: middle;
    font-size: 0.800rem;
    line-height: 1;
    white-space: nowrap;
}
.content-wrapper {
    padding: 4.75rem 0 !important;
}
@media (min-width: 360px) and (max-width: 480px) {
.content-wrapper {
    padding: 4.75rem 0 !important;
}
.card .card-body {
    padding: 15px;
    
}

.card .card-title {
        text-align: center;
        text-transform: uppercase;
        font-size: 20px;
       }
       .table th, .table td {
        font-size: 12px;
      }
      .table th, .table td {
        padding: 12px;
      }

}




</style>