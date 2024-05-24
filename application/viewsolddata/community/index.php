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
                <h4 class="card-title">Community Details</h4>
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
                            <th>City</th>
                            <th>Appartment</th>
                            <th>Discount %</th>
                            <th>Consignment Date</th>
                            <th>Action</th>
                            <tbody>

                              <?php if($community->num_rows() > 0) {
                                foreach ($community->result() as $key => $pi) { ?>
                                <tr>
                                    <td>
                                        <a href="" class="btn btn-xs btn-success"><?php echo $key+1;?></a>
                                    </td>
                                    <td><?php echo $pi->city_name;?></td>
                                    <td><?php echo $pi->appartment;?></td>
                                    <td><?php echo $pi->discount;?></td>
                                    <td><?php echo $pi->consignment_date;?></td>
                                    <td><button title="Quick view" class="btn btn-xs btn-info btn-xs" data-toggle="modal" data-target="#productModal<?php echo $key+1;?>"  style="padding: 5px;"><i class="mdi mdi-pencil"></i></button>
									<a href="<?=base_url();?>community/delete/<?php echo $pi->community_id;?>" rel="tooltip" onclick="return deleteCommunity();" title="Remove" class="btn btn-danger btn-simple btn-sm" style="padding: 5px;">
                                            <i class="mdi mdi-close"></i>
                                        </a>
										
									</td>
                                </tr>
                              <?php }
                            } ?>
                                
                            </tbody>
                        </table>
                    </div>
            <?php if($community->num_rows() > 0) {
                        foreach ($community->result() as $key => $pi) { ?>

            <div class="modal fade" id="productModal<?php echo $key+1;?>">
              <div class="modal-dialog">
                <div class="modal-content photo-modal" style="height: 285px;">
                
                  <div class="modal-header">
                    <h4 class="modal-title">Update Community</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div>
                  
                  <div class="modal-body">
                    <div class="add-photo">
                      <form action="<?=base_url()?>community/update/<?php echo $pi->community_id;?>" role="form" id="userForm2" name="userForm" method="post" enctype="multipart/form-data" class="image-modal-form">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
									<input type="text" name="city" class="form-control" placeholder="Enter City" value="<?php echo $pi->city_name;?>" id="city">
									
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="text" name="appartment" class="form-control" placeholder="Enter Appartment" value="<?php echo $pi->appartment;?>" id="appartment">
                                  </div>
                                </div>
								
								<div class="col-md-6">
                                  <div class="form-group">
                                    <input type="text" name="discount" class="form-control" placeholder="Enter Discount" value="<?php echo $pi->discount;?>" id="discount">
                                  </div>
                                </div>
								
								<div class="col-md-6">
                                  <div class="form-group">
                                    <input type="date" name="consignment_date" class="form-control" placeholder="Enter Consignment Date" value="<?php echo $pi->consignment_date;?>" id="discount">
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
                    <h4 class="modal-title">Create Community</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div>
                  
                  <div class="modal-body">
                    <div class="add-photo">
                      <form action="<?=base_url()?>community/insert" role="form" id="userForm2" name="userForm" method="post" enctype="multipart/form-data" class="image-modal-form">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-6">
								  <div class="form-group">
									<input type="text" name="city" class="form-control" placeholder="Enter City" value="" id="city">
                                  </div>
								  
                                </div>
								
								
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="text" name="appartment" class="form-control" placeholder="Enter Appartment">
                                  </div>
                                </div>
								
								<div class="col-md-6">
                                  <div class="form-group">
                                    <input type="text" name="discount" class="form-control" placeholder="Enter Discount">
                                  </div>
                                </div>
								
								<div class="col-md-6">
                                  <div class="form-group">
                                    <input type="date" name="consignment_date" class="form-control" placeholder="Enter Date">
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

 function deleteCommunity() {
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