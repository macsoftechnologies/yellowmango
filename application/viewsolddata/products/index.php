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
                <h4 class="card-title">Products Details</h4>
                <!-- <p class="card-description"> Add class <code>.table</code>
                </p> -->

                <div class="pull-right">
                   <a href="<?=base_url()?>products/create" class="btn btn-success btn-xs"  data-toggle="tooltip" data-placement="left" title="Create User" style="margin-left: 850px; margin-top: -50px;"><i class="mdi mdi-plus"></i> Create</a>
                </div>
                <div class="content">
                    <div class="table-full-width" style="width: 100%;overflow-x: scroll;">
                        <table class="table">
                            <th>S.no</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Min-Max(Price)</th>
                            <th>Actions</th>
                            <tbody>
                                <?php if($products->num_rows() > 0) {
                                 foreach ($products->result() as $key => $pr) {?>
                                <tr>
                                    <td>
                                        <a href="" class="btn btn-xs btn-success"><?php echo $key+1;?></a>
                                    </td>
                                    <td><?php echo $pr->product_name;?></td>
                                    <td><img src="<?php echo $pr->product_image;?>" width="40" height="40"></td>
                                    <td><?php echo $pr->price;?></td>
                                    <td><?php echo $pr->stock-$pr->outward;?></td>
                                    <td><?php echo $pr->min_max_price;?></td>
                                   
                                    <td class="td-actions">
                                        <a href="<?=base_url();?>products/show/<?php echo $pr->product_id;?>" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-sm" style="padding: 5px;">
                                            <i class="mdi mdi-eye"></i>
                                        </a>
                                        <a href="<?=base_url();?>products/edit/<?php echo $pr->product_id;?>" rel="tooltip" title="Edit Task" class="btn btn-gradient-success btn-simple btn-sm" style="padding: 5px;">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <a href="<?=base_url();?>products/delete/<?php echo $pr->product_id;?>" rel="tooltip" onclick="return deleteItem();" title="Remove" class="btn btn-danger btn-simple btn-sm" style="padding: 5px;">
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


    <?php if(count($bProducts) > 0) {
            for ($i=0; $i < count($bProducts); $i++) {
            $sizes = $bProducts[$i]['sizes'];
                if(count($sizes) > 0){

                    for ($j=0; $j < count($sizes); $j++) {?>

     <div class="modal fade" id="productModal<?php echo $sizes[$j]['price_id'];?>">
              <div class="modal-dialog">
                <div class="modal-content photo-modal" style="height: 285px;">
                
                  <div class="modal-header">
                    <h4 class="modal-title">Update Price</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div>
                  
                  <div class="modal-body">
                    <div class="add-photo">
                       <form action="<?=base_url()?>products/updateprice/<?php echo $sizes[$j]['price_id'];?>" role="form" id="userForm2" name="userForm" method="post" enctype="multipart/form-data" class="image-modal-form">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-gruop">
                                <!-- <input type="text" name="declaration" class="form-control" placeholder="Enter Declaration" > -->
                                 <input type="text" name="price" class="form-control declaration" placeholder="Enter Answer" value="<?php echo $sizes[$j]['price'];?>" id="price">
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
        <?php }
    }
}
}
?>

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

