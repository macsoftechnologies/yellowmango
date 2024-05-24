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
                <h4 class="card-title">Testimonies Details</h4>
                <!-- <p class="card-description"> Add class <code>.table</code>
                </p> -->

                <div class="pull-right">
                   <a href="<?=base_url()?>testimonies/create" class="btn btn-success btn-xs"  data-toggle="tooltip" data-placement="left" title="Create User" style="margin-left: 850px; margin-top: -50px;"><i class="mdi mdi-plus"></i> Create</a>
                </div>
                <div class="content">
                    <div class="table-full-width" style="width: 100%;overflow-x: scroll;">
                        <table class="table">
                            <th>S.no</th>
                            <th>Testimony Name</th>
                            <th>Testimonies</th>
                            <th>City</th>
                            <th>Actions</th>
                            <tbody>
                                <?php if($testimonies->num_rows() > 0) {
                                 foreach ($testimonies->result() as $key => $bl) {?>
                                <tr>
                                    <td>
                                        <a href="" class="btn btn-xs btn-success"><?php echo $key+1;?></a>
                                    </td>
                                    <td><?php echo $bl->testimony_name;?></td>
                                    <td><?php echo $bl->testimonies;?></td>
                                    <td><?php echo $bl->testimony_address;?></td>
                                   
                                    <td class="td-actions">
                                        <a href="<?=base_url();?>testimonies/edit/<?php echo $bl->testimony_id;?>" rel="tooltip" title="Edit Task" class="btn btn-gradient-success btn-simple btn-sm" style="padding: 5px;">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <a href="<?=base_url();?>testimonies/delete/<?php echo $bl->testimony_id;?>" rel="tooltip" onclick="return deleteItem();" title="Remove" class="btn btn-danger btn-simple btn-sm" style="padding: 5px;">
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
   }

</style>

