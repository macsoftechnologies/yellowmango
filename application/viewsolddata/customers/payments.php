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
                <!-- <p class="card-description"> Add class <code>.table</code>
                </p> -->

                <h4 class="card-title">Subject Payment Details</h4>

                <div class="pull-right">
                   <!-- <a href="<?=base_url()?>users/create" class="btn btn-primary btn-xs"  data-toggle="tooltip" data-placement="left" title="Create User" style="margin-left: 850px; margin-top: -50px;"><i class="mdi mdi-plus"></i> Create</a> -->
                </div>
                <div class="content">
                    <div class="table-full-width">
                        <table class="table">
                            <th>S.no</th>
                            <th>Student Name</th>
                            <th>Father/Mother/Guardian Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <tbody>
                                <?php if(count($bProducts) > 0){
                                    for ($i=0; $i < count($bProducts); $i++) { ?>
	                                <tr>
	                                    <td>
	                                        <a href="" class="btn btn-xs" style="color: green;"><?php echo $i+1;?></a>
	                                    </td>
	                                    <td><?php echo $bProducts[$i]['student_name']; ?></td>
	                                    <td><?php echo $bProducts[$i]['father_mother']; ?></td>
	                                    <td><?php echo $bProducts[$i]['email']; ?></td>
	                                    <td><?php echo $bProducts[$i]['phone_number']; ?></td>
	                                </tr>
	                                <?php  $products = $bProducts[$i]['products'];
	                                ?>
	                                <?php if(count($products) == 0) { ?>
	                                <?php } else { ?>

                                    <table class="table-bordered dataTable">
                            <thead>
                                <tr>
                                  <th style="padding: 10px 10px 10px 10px; font-size: 13px;"></th>
                                    <th style="padding: 10px 10px 10px 10px; font-size: 13px;">S.no</th>
                                    <th style="padding: 10px 10px 10px 10px; font-size: 13px;">Subject</th>
                                    <th style="padding: 10px 10px 10px 10px; font-size: 13px;">Month</th>
                                    <th style="padding: 10px 10px 10px 10px; font-size: 13px;">Payment</th>
                                    <th style="padding: 10px 10px 10px 10px; font-size: 13px;">Receipt&nbsp;No</th>
                                    <th style="padding: 10px 10px 10px 10px; font-size: 13px;">Bank&nbsp;Name</th>
                                    <th style="padding: 10px 10px 10px 10px; font-size: 13px;">TXN&nbsp;Id</th>
                                    <th style="padding: 10px 10px 10px 10px; font-size: 13px;">TXN&nbsp;Date</th>
                                    <th style="padding: 10px 10px 10px 10px; font-size: 13px;">Amount</th>
                                    <th style="padding: 10px 10px 10px 10px; font-size: 13px;">Status</th>
                                </tr>
                            </thead>

                                <?php } ?>
                    
                                    <?php 
                                        $products = $bProducts[$i]['products'];
                                        if(count($products) > 0){
                                        for ($j=0; $j < count($products); $j++) {?>
                                        <tr>
                                     <td style="padding: 10px 10px 10px 10px; font-size: 13px;"></td>
                                            <td style="padding: 10px 10px 10px 10px; font-size: 13px;"><?php echo $j+1;?></td>
                                            <td style="padding: 10px 10px 10px 10px; font-size: 13px;"><?php echo $products[$j]['subject_name'];?></td>
                                            <td style="padding: 10px 10px 10px 10px; font-size: 13px;"><?php echo $products[$j]['month'];?></td>
                                            <td style="padding: 10px 10px 10px 10px; font-size: 13px;"><?php echo $products[$j]['payment_type'];?></td>
                                            <td style="padding: 10px 10px 10px 10px; font-size: 13px;"><?php echo $products[$j]['receipt_no'];?></td>
                                            <td style="padding: 10px 10px 10px 10px; font-size: 13px;"><?php echo $products[$j]['bank_name'];?></td>
                                            <td style="padding: 10px 10px 10px 10px; font-size: 13px;"><?php echo $products[$j]['txn_id'];?></td>
                                            <td style="padding: 10px 10px 10px 10px; font-size: 13px;"><?php echo $products[$j]['txn_date'];?></td>
                                            <td style="padding: 10px 10px 10px 10px; font-size: 13px;"><?php if($products[$j]['amount'] == '') {?>
                                                      <?php echo "0.00";?>
                                              
                                              
                                            <?php }else {  ?>
                                              
                                              <?php echo number_format($products[$j]['amount'], 2);?>
                                            <?php } ?>

                                              </td>
                                            <td style="padding: 5px 5px 5px 5px; font-size: 13px;">
                                              <?php if($products[$j]['amount'] == '') {?>
                                              <button class="btn btn-xs btn-danger">Not Paid</button>
                                              
                                              
                                            <?php }else {  ?>
                                              
                                              <button class="btn btn-xs btn-success">Paid</button>
                                            <?php } ?></td>
                                        </tr>
                                    <?php }
                                }?>
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

<script type="text/javascript">
  var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
</script>