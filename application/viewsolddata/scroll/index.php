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
                <h4 class="card-title">Scroll Details</h4>
                <!-- <p class="card-description"> Add class <code>.table</code>
                </p> -->
                <div class="content">
                    <div class="table-full-width">
                        <table class="table">
                            <th>S.no</th>
                            <th>Scroll Name</th>
                            <th>Action</th>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="" class="btn btn-xs btn-success">1</a>
                                    </td>
                                    <td><?php echo $scroll['scroll_name'];?></td>
                                    <td><button title="Quick view" class="btn btn-xs btn-info btn-xs" data-toggle="modal" data-target="#productModal"  style="padding: 5px;"><i class="mdi mdi-pencil"></i></button></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>

                    <div class="modal fade" id="productModal">
              <div class="modal-dialog">
                <div class="modal-content photo-modal" style="height: 285px;">
                
                  <div class="modal-header">
                    <h4 class="modal-title">Update Scroll</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div>
                  
                  <div class="modal-body">
                    <div class="add-photo">
                       <form action="<?=base_url()?>time/updatescroll/<?php echo $scroll['scroll_id'];?>" role="form" id="userForm2" name="userForm" method="post" enctype="multipart/form-data" class="image-modal-form">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-gruop">
                                <!-- <input type="text" name="declaration" class="form-control" placeholder="Enter Declaration" > -->
                                 <input type="text" name="scroll_name" class="form-control" placeholder="Enter Answer" value="<?php echo $scroll['scroll_name'];?>" id="time">
                               <!--  <textarea class="form-control" name="about_me" size="100" placeholder="About Me"></textarea> -->
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

</style>