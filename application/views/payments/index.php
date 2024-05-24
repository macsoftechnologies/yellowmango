    <?php echo validation_errors();?>
    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>
    <?php if($this->session->flashdata('success_msg')){   
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>

        <div class="row" style="background-color: white;">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Assign Subjects</h4>



                <form action="<?=base_url()?>payments/insertsubjects" method="post" name="" class="forms-sample" style="border-bottom: 1px solid gray;">
                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="exampleInputPassword4">Select User</label>
                                  <select class="form-control" name="user_id">
                                      <option>Select User</option>
                                      <?php if($users->num_rows() > 0 ) {
                                        foreach ($users->result() as $key => $us) { ?>
                                            <option value="<?php echo $us->user_id;?>"><?php echo $us->student_name;?> - <?php echo $us->phone_number;?></option>
                                        <?php } 
                                    } ?>
                                  </select>
                              </div>
                          </div>

                            <div class="col-md-3">
                            <div class="form-group">
                              <label for="exampleInputPassword4">Select Subjects</label>
                              <!-- <div class="multiselect"> -->
                              <!-- <div class="selectBox" onclick="showCheckboxes()"> -->
                                <select class="form-control" name="subjects">
                                  <option>Select Subjects</option>
                                  <?php if($subjects->num_rows() > 0) {
                                  foreach ($subjects->result() as $key => $sb) { ?>
                                    <option value="<?php echo $sb->subject;?>"><?php echo $sb->subject;?></option>
                                  <?php } 
                                } ?>
                                </select>
                              </div>
                          </div>

                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="exampleInputPassword4">Select Month</label>
                              <!-- <div class="multiselect"> -->
                              <div class="selectBox" onclick="showCheckboxes()">
                                <select class="form-control">
                                  <option>Select&nbsp;Month&nbsp;One&nbsp;(or)&nbsp;Multiple</option>
                                </select>
                                <div class="overSelect"></div>
                              </div>
                              <div id="checkboxes">
                                <?php if($months->num_rows() > 0) {
                                  foreach ($months->result() as $key => $mb) { ?>
                                    <label for="<?php echo $key+1;?>"><input type="checkbox" id="<?php echo $key+1;?>" name="month[]" value="<?php echo $mb->month;?>" /><?php echo $mb->month;?></label>
                                  <?php }
                                }?>
                              </div>
                              </div>
                          </div>

                          <div class="col-md-3">
                              <div class="form-group">
                                <label for="exampleInputUsername1">Payment Type</label>
                                    <select class="form-control select2 type_id" name="payment_type" onchange="yesnoCheck(this);">
                                      <option>Select Payment Type</option>
                                      <option value="Cash">Cash</option>
                                      <option value="Bank">Bank</option>
                                    </select>
                                  </div>
                                </div>


                                <div class="col-md-3" id="templates1" style="display: none;">
                                  <div class="form-group">
                                    <label for="exampleInputUsername1">Receipt No</label>
                                    <input type="text" name="receipt_no" class="form-control" placeholder="Enter Receipt No...">
                                  </div>
                                </div>


                                <div class="col-md-3" id="templates2" style="display: none;">
                                  <div class="form-group">
                                    <label for="exampleInputUsername1">Bank Name</label>
                                    <input type="text" name="bank_name" class="form-control" placeholder="Enter Bank Name...">
                                  </div>
                                </div>

                                <div class="col-md-3" id="templates3" style="display: none;">
                                  <div class="form-group">
                                    <label for="exampleInputUsername1">Transaction Id</label>
                                    <input type="text" name="txn_id" class="form-control" placeholder="Enter Transaction Id...">
                                  </div>
                                </div>



                          

                          <div class="col-md-3">
                              <div class="form-group">
                                <label for="exampleInputUsername1">Transaction Date</label>
                                <input type="text" name="txn_date" class="form-control" placeholder="dd-mm-yyyy">
                              </div>
                                     
                          </div>

                          <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Amount</label>
                                <input type="text" name="amount" class="form-control" placeholder="0" id="exampleInputUsername1">
                              </div>
                          </div>
                          <div class="col-md-12" style="margin-bottom: 30px;">
                          <button type="submit" class="btn btn-gradient-primary mr-2">Assign subject & Transaction</button >
                          </div>
                        </div>
                    </div>


            

                </form>
                <br><br>
                <!-- <p class="card-description"> Add class <code>.table</code>
                </p> -->

                <h4 class="card-title">Subject Payment Details</h4>

                <!-- <div class="pull-right"> -->
                   <!-- <a href="<?=base_url()?>users/create" class="btn btn-primary btn-xs"  data-toggle="tooltip" data-placement="left" title="Create User" style="margin-left: 850px; margin-top: -50px;"><i class="mdi mdi-plus"></i> Create</a> -->
                <!-- </div> -->
                <div class="content">
                    <div class="table-full-width">
                        <!-- <table class="table"> -->
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-1"><b>S.no</b></div>
                              <div class="col-md-3"><b>Student Name</b></div>
                              <div class="col-md-4"><b>Father/Mother/Guardian Name</b></div>
                              <div class="col-md-2"><b>Email</b></div>
                              <div class="col-md-2"><b>Phone Number</b></div>
                            </div>
                            <br>
                           <?php if(count($bProducts) > 0){
                              for ($i=0; $i < count($bProducts); $i++) { ?>
                            <div class="row">
                              <div class="col-md-1" style="font-size: 15px;"><?php echo $i+1;?></div>
                              <div class="col-md-3" style="font-size: 15px;"><?php echo $bProducts[$i]['student_name']; ?></div>
                              <div class="col-md-3" style="font-size: 15px;"><?php echo $bProducts[$i]['father_mother']; ?></div>
                              <div class="col-md-3" style="font-size: 15px;"><?php echo $bProducts[$i]['email']; ?></div>
                              <div class="col-md-2" style="font-size: 15px;"><?php echo $bProducts[$i]['phone_number']; ?></div>
                            </div>
                            <br>

                          </div>
                         <!--  <tr>
                            <th>S.no</th>
                            <th>Student Name</th>
                            <th>Father/Mother/Guardian Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            </tr> -->


                            <div class="col-md-12">
                                <div class="row">
                                  <div class="col-md-1" style="font-size: 12px;"><b>S.no</b></div>
                                  <div class="col-md-2" style="font-size: 12px;"><b>Subject</b></div>
                                  <div class="col-md-1" style="font-size: 12px;"><b>Month</b></div>
                                  <div class="col-md-2" style="font-size: 12px;"><b>Receipt&nbsp;No</b></div>
                                  <div class="col-md-2" style="font-size: 12px;"><b>TXN&nbsp;Id</b></div>
                                  <div class="col-md-2" style="font-size: 12px;"><b>TXN&nbsp;Date</b></div>
                                  <div class="col-md-1" style="font-size: 12px;"><b>Price</b></div>
                                  <div class="col-md-1" style="font-size: 12px;"><b>Status</b></div>
                                </div>
                                <br>
                                
                                <?php 
                                    $products = $bProducts[$i]['products'];
                                    if(count($products) > 0){
                                    for ($j=0; $j < count($products); $j++) {?>

                                  <div class="row">

                                  <div class="col-md-1" style="font-size: 12px;"><?php echo $j+1;?></div>
                                  <div class="col-md-3" style="font-size: 12px;"><?php echo $products[$j]['subject_name'];?></div>
                                  <div class="col-md-1" style="font-size: 12px;"><?php echo $products[$j]['month'];?></div>
                                  <div class="col-md-1" style="font-size: 12px;"><?php echo $products[$j]['receipt_no'];?></div>
                                  <div class="col-md-2" style="font-size: 12px;"><?php echo $products[$j]['txn_id'];?></div>
                                  <div class="col-md-2" style="font-size: 12px;"><?php echo $products[$j]['txn_date'];?></div>
                                  <div class="col-md-1" style="font-size: 12px;">
                                   <?php if($products[$j]['amount'] == '') {?>
                                                      <a class="btn btn-xs btn-primary" data-toggle="modal" data-target="#visible<?php echo $products[$j]['subject_id'];?>">Pay</a>
                                              
                                              
                                            <?php }else {  ?>
                                              
                                              <?php echo number_format($products[$j]['amount'], 2);?>
                                            <?php } ?>
                                  </div>
                                  <div class="col-md-1" style="font-size: 12px;">
                                     <?php if($products[$j]['amount'] == '') {?>
                                              <button class="btn btn-xs btn-danger">Not Paid</button>
                                              
                                              
                                            <?php }else {  ?>
                                              
                                              <button class="btn btn-xs btn-success">Paid</button>
                                            <?php } ?>
                                  </div>
                              </div>
                              <br>
                            <?php }
                          } ?>
                        </div>
                      </tr>
                                   <?php 
                                        $products = $bProducts[$i]['products'];
                                        if(count($products) > 0){
                                        for ($j=0; $j < count($products); $j++) {?>

                                        <div class="modal fade insu-modal" id="visible<?php echo $products[$j]['subject_id'];?>">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                              
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Payment</h4>
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                            <div class="modal-body">
                                            <form action="<?=base_url()?>payments/payment" method="post" name="" class="forms-sample">
                                              <div class="col-md-12">
                                                <div class="row">

                                                  <div class="col-md-6">
                                                    <p>Select Month</p>
                                                   <div class="form-group" style="margin-top: -15px;">

                                                      <button onclick="dropDown(event);" class="form-control menu-btn" type="button">
                                                          Select Month &#9013;
                                                      </button>
                                                      <div class="d-none shadow rounded menu">
                                                        <?php if($months->num_rows() > 0) {
                                                            foreach ($months->result() as $key => $mb) { ?>
                                                          <span class="d-block menu-option"><label><input type="checkbox" name="month[]" value="<?php echo $mb->month;?>">&nbsp;<?php echo $mb->month;?></label></span>
                                                                <?php } 
                                                              } ?>
                                                      </div>
                                                  </div>

                                                  <div class="d-none" id="overlay" onclick="hide(event)"></div>
                                              </div>


                                              <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label for="exampleInputUsername1">Payment Type</label>
                                                          <select class="form-control select2 type_id" name="payment_type" onchange="yesnoCheckbutton(this);">
                                                            <option>Select Payment Type</option>
                                                            <option value="Cash">Cash</option>
                                                            <option value="Bank">Bank</option>
                                                          </select>
                                                        </div>
                                                  </div>


                                                  <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label for="exampleInputUsername1">Transaction Date</label>
                                                    <input type="hidden" name="subject_id" class="form-control" value="<?php echo $products[$j]['subject_id'];?>" id="exampleInputUsername1">

                                                    <input type="hidden" name="user_id" class="form-control" value="<?php echo $products[$j]['user_id'];?>" id="exampleInputUsername1">

                                                     <input type="hidden" name="subject_name" class="form-control" value="<?php echo $products[$j]['subject_name'];?>" id="exampleInputUsername1">

                                                    <input type="text" name="txn_date" class="form-control" placeholder="dd-mm-yyyy">
                                                  </div>
                                                  </div>

                                                  <div class="col-md-6" id="templates6" style="display: none;">
                                                     <div class="form-group">
                                                    <label for="exampleInputUsername1">Transaction Id</label>
                                                    <input type="text" name="txn_id" class="form-control" placeholder="Enter Transaction Id..." id="exampleInputUsername1">
                                                  </div>
                                                  </div>

                                                  <div class="col-md-6" id="templates5" style="display: none;">
                                                   
                                                  <div class="form-group">
                                                    <label for="exampleInputUsername1">Bank Name</label>
                                                    <input type="text" name="bank_name" class="form-control" placeholder="Enter Bank Name..." id="exampleInputUsername1">
                                                  </div>
                                                  </div>

                                                  <div class="col-md-6" id="templates4" style="display: none;">
                                                   <div class="form-group">
                                                    <label for="exampleInputUsername1">Receipt No</label>
                                                    <input type="text" name="receipt_no" class="form-control" placeholder="Enter Receipt No..." id="exampleInputUsername1">
                                                  </div>
                                                  </div>

                                                  <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label for="exampleInputUsername1">Amount</label>
                                                    <input type="text" name="amount" class="form-control" placeholder="0" id="exampleInputUsername1">
                                                  </div>
                                                  </div>
                                                </div>
                                              </div>
                                                  
                                                 
                                                  
                                                  
                                                  <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                                                   <button type="button" class="btn btn-danger close-btn" data-dismiss="modal">Close</button>
                                                </form>
                                                </div>
                                                
                                              </div>
                                            </div>
                                        </div>
                              <?php }
                            } ?>

                                <?php } 
                              } ?>


                              
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
    function yesnoCheck(that) {
    if (that.value == "Cash") {
            document.getElementById("templates1").style.display = "block";
            document.getElementById("templates2").style.display = "none";
            document.getElementById("templates3").style.display = "none";
        } else {
            document.getElementById("templates1").style.display = "none";
            document.getElementById("templates2").style.display = "block";
            document.getElementById("templates3").style.display = "block";
        }
    }
</script>

<script type="text/javascript">
    function yesnoCheckbutton(that) {
    if (that.value == "Cash") {
            document.getElementById("templates4").style.display = "block";
            document.getElementById("templates5").style.display = "none";
            document.getElementById("templates6").style.display = "none";
        } else {
            document.getElementById("templates4").style.display = "none";
            document.getElementById("templates5").style.display = "block";
            document.getElementById("templates6").style.display = "block";
        }
    }
</script>

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

.menu-btn {
    border-radius: 48px;
    border: 0.5px solid lightgrey;
    font-size: 0.9em;
    padding: 2px 10px;
    background-color: white;
}

.menu {
    padding-top: 10px;
    z-index: 200;
    margin-top: 4px;
    background-color: white;
    position: absolute;
}

.menu-option {
    padding: 6px 20px 6px;
}

#overlay {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    z-index: 100;
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

<script type="text/javascript">
  function dropDown(event) {
    event.target.parentElement.children[1].classList.remove("d-none");
    document.getElementById("overlay").classList.remove("d-none");
}

function hide(event) {
    var items = document.getElementsByClassName('menu');
    for (let i = 0; i < items.length; i++) {
        items[i].classList.add("d-none");
    }
    document.getElementById("overlay").classList.add("d-none");
}
</script>