<style type="text/css">
    fieldset 
    {
        border: 1px solid #b66dff !important;
        padding: 2px;
        margin: 0;
        xmin-width: 0;
        padding: 10px;       
        position: relative;
        border-radius:4px;
        background:none;
        padding-left:10px!important;
        margin-bottom: 10px;
    }   
        
    legend
    {
        font-size:14px;
        font-weight:bold;
        margin-bottom: 0px; 
        width: 25%; 
        border: 1px solid #ddd;
        border-radius: 4px; 
        padding: 5px 5px 5px 10px; 
        background-color: #b66dff;
        color:#ffffff;
    }
</style>

<?php echo validation_errors();?>
                    <?php if($this->session->flashdata('error_msg')){   
                      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
                    }?>
                    <?php if($this->session->flashdata('success_msg')){   
                      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
                    }?>

<section class="content">
    <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <span><a href="javascript:window.history.back();" class="btn btn-primary btn-xs pull-left" data-toggle="tooltip" data-placement="top" title="Back" style="margin-right: 5px;"><i class="mdi mdi-arrow-left"></i></a></span>
                    <h3 class="box-title" style="margin-left: 50px; margin-top: -30px;">Student Personal Information</h3>
                </div>
                <div class="box-body" style="margin-top: 30px;">
                    
                    
                                <fieldset>
                                <legend>Student Details</legend>
                                <table class="table table-bordered">
                                    <tr>
                                        <td><b>Student Name:</b> </td><td colspan="3"><?php echo $users['student_name'];?></td>
                                        <td><b>Student IC:</b> </td><td colspan="3"><?php echo $users['student_ic'];?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Father/Mother/Guardian Name: </b></td><td colspan="3"><?php echo $users['father_mother'];?></td>
                                        <td><b>Father/Mother/Guardian IC: </b></td><td colspan="3"><?php echo $users['father_mother_ic'];?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Email: </b></td><td colspan="3"><?php echo $users['email'];?></td>
                                        <td><b>Phone Number: </b></td><td colspan="3"><?php echo $users['phone_number'];?></td>
                                    </tr>
                                     <tr>
                                        <td><b>Class: </b></td><td colspan="3"><?php echo $users['class'];?></td>
                                    </tr>
                                </table>
                                </fieldset>

                            <fieldset>
                                <legend>Subjects</legend>
                               <!--  <br><br> -->
                                <!-- <p class="card-description"> Add class <code>.table</code>
                                </p> -->

                                <div class="pull-right">
                                   <a href="#" class="btn btn-primary btn-xs"  data-toggle="modal" data-target="#visible" data-placement="left" title="Add Subjects" style="margin-left: 805px; margin-bottom: 20px;"><i class="mdi mdi-plus"></i> Add Subjects</a>

                                  <!--  <a class="nav-link" data-toggle="modal" data-target="#visible">Referral</a> -->
                        <div class="modal fade insu-modal" id="visible">
                            <div class="modal-dialog">
                              <div class="modal-content" style="background-color: white">
                              
                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title">Add Subjects :</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="<?=base_url()?>users/insertsubjects" role="form" id="userForm" name="userForm" method="post" class="forms-sample" enctype="multipart/form-data">
                                      <div class="col-md-12">
                                        <div class="row">

                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="exampleInputPassword4">Select Subjects</label>
                                              <input type="hidden" name="user_id" class="form-control" value="<?php echo $users['user_id'];?>">
                                              <!-- <div class="multiselect"> -->
                                              <div class="selectBox" onclick="showCheckboxes()">
                                                <select class="form-control">
                                                  <option>Select Subjects</option>
                                                </select>
                                                <div class="overSelect"></div>
                                              </div>
                                              <div id="checkboxes">
                                                <?php if($subjects->num_rows() > 0) {
                                                  foreach ($subjects->result() as $key => $sb) { ?>
                                                    <label for="<?php echo $key+1;?>"><input type="checkbox" id="<?php echo $key+1;?>" name="subjects[]" value="<?php echo $sb->subject;?>" /><?php echo $sb->subject;?></label>
                                                  <?php }
                                                }?>
                                              </div>
                                            <!-- </div> -->
                                            </div>
                                          </div>


                                        </div>
                                      </div>

                                      
                                      
                                      
                                      
                                      <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                                      <button type="button" class="btn btn-danger close-btn" data-dismiss="modal">Close</button>
                                    </form>

                                </div>
                                
                                <!-- Modal footer -->
                                <!-- <div class="modal-footer">
                                  
                                </div> -->
                                
                              </div>
                            </div>
                        </div>
                                </div>

                                <table class="table">
                                    <th>S.no</th>
                                    <th>Subject Name</th>
                                    <th>Actions</th>
                                    <tbody>
                                        <?php if($subjec->num_rows() > 0) { 
                                            foreach ($subjec->result() as $key => $us) { ?>
                                        <tr>
                                            <td>
                                                <a href="" class="btn btn-xs" style="color: green;"><?php echo $key+1;?></a>
                                            </td>
                                            <td><?php echo $us->subject_name;?></td>
                                            <td class="td-actions">
                                                <a href="<?=base_url();?>users/deletesubject/<?php echo $us->subject_id;?>/<?php echo $users['user_id'];?>" rel="tooltip" onclick="return deleteItem();" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                    <i class="mdi mdi-close"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <?php }
                                    } ?>
                                            
                                        </tbody>
                                    </table>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>


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

