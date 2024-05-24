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
                <h4 class="card-title">Users Details</h4>
                <!-- <p class="card-description"> Add class <code>.table</code>
                </p> -->

                <div class="pull-right">
                   <a href="<?=base_url()?>subadmin/create" class="btn btn-danger btn-xs"  data-toggle="tooltip" data-placement="left" title="Create User" style="margin-left: 850px; margin-top: -50px;"><i class="mdi mdi-plus"></i> Create</a>
                </div>
                <div class="content">
                    <div class="table-full-width">
                        <table class="table">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Admin Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                       <tbody>
                         
                            <?php if($admin->num_rows() > 0){
                                foreach ($admin->result() as $key => $ad) { ?>
                                    <tr>
                                        <td><span class="btn btn-danger btn-xs"><?php echo $key+1;?></span></td>
                                         <td><?php echo $ad->admin_name;?></td>
                                        <td><?php echo $ad->email;?></td>
                                        <td><?php echo $ad->mobile_number;?></td>
                                        <td><?php echo $ad->address;?></td>
                                        <td>
                                            <a href="<?=base_url();?>subadmin/edit/<?php echo $ad->admin_id;?>" rel="tooltip" title="Edit Task" class="btn btn-success btn-simple btn-sm" style="padding: 5px;">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <a href="<?=base_url();?>subadmin/delete/<?php echo $ad->admin_id;?>" rel="tooltip" onclick="return deleteItem();" title="Remove" class="btn btn-primary btn-simple btn-sm" style="padding: 5px;">
                                            <i class="mdi mdi-close"></i></a>
                                        </td>
                                    </tr>
                                <?php }
                            }?>
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