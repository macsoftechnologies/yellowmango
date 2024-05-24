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
                <h4 class="card-title">Working Days Details</h4>
                <!-- <p class="card-description"> Add class <code>.table</code>
                </p> -->
                <div class="content">
                    <div class="table-full-width">
                      <form id="frm-example" action="<?=base_url()?>time/insertAttendance" method="POST">
                        <table class="table">
                            <th><input type="checkbox" class="checkAll" name="checkAll" /></th>
                            <th>S.no</th>
                            <th>Day</th>
                            <th>Actions</th>
                            <tbody>
                              <?php if($days->num_rows() > 0) {
                                foreach ($days->result() as $key => $dd) {?>
                                <tr>
                                   <td><input type="checkbox" name="day_id[]" value="<?php echo $dd->day_id;?>"></td>
                                    <td>
                                        <a href="" class="btn btn-xs btn-success"><?php echo $key+1?></a>
                                    </td>
                                    <td><?php echo $dd->day;?></td>
                                    <td>
                                      <?php if($dd->status == 1) {?>
                                      <a href="#" class="btn btn-xs btn-gradient-success" >Active</a>
                                      <?php } else { ?>
                                        <a  href="<?=base_url();?>time/changeStatus/<?php echo $dd->day_id;?>" onclick="return statusItem();" class="btn btn-xs btn-gradient-danger" >De-Active</a>
                                        <?php } ?> </td>
                                </tr>
                              <?php } 
                            } ?>
                                
                            </tbody>
                        </table>

                         <input type="submit" name="submit" class="btn btn-gradient-primary btn-sm" value="De-Active">
                      </form>
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