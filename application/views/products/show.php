<style type="text/css">
    fieldset 
    {
        border: 1px solid #1bcfb4 !important;
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
        border: 1px solid #1bcfb4;
        border-radius: 4px; 
        padding: 5px 5px 5px 10px; 
        background-color: #1bcfb4;
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
    <div class="row" style="width: 100%;overflow-x: scroll;">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <span><a href="javascript:window.history.back();" class="btn btn-success btn-xs pull-left" data-toggle="tooltip" data-placement="top" title="Back" style="margin-right: 5px;"><i class="mdi mdi-arrow-left"></i></a></span>
                    <h3 class="box-title" style="margin-left: 50px; margin-top: -30px;">Product Details</h3>
                </div>
                <div class="box-body" style="margin-top: 30px; ">
                    
                    
                                <fieldset>
                                <legend>Product Details</legend>
                                <table class="table table-bordered">
                                    <tr>
                                        <td><b>Product Name:</b> </td><td colspan="3"><?php echo $products['product_name'];?></td>

                                        <td><b>Max-Min(Price): </b></td><td colspan="3"><?php echo $products['min_max_price'];?></td>
                                       
                                    </tr>
                                    <tr>
                                        <td><b>Product Image: </b></td><td colspan="3"><img src="<?php echo $products['product_image'];?>" height="50" width="50"></td>
                                        <td><b>Stock: </b></td><td colspan="3"><?php echo $products['stock'];?></td>
                                    </tr>
                                    <tr>
                                    <td><b>Product Price:</b> </td><td colspan="3"><?php echo $products['price'];?></td>
                                    <td><b>Product Description:</b></td>
                                       <td colspan="3"><?php echo $products['description'];?></td>
                                        
                                    </tr>
                                                                   
                                  </table>
                                  
                                     
                                </fieldset>
                </div>
                <tr>
                                    
            </div>
        </div>
    </div>
    <td><b>QR Code:</b></td>
                                    <td colspan="3">
                                      <div>
                                          <img src="<?php echo $qrImage?>" alt="QR code" height="150" width="150">
                                      </div>
                                      <button class="button btn-gradient-info btn btn-sm "><i class="mdi mdi-download"></i>Download image</button>
                                    </td>
                                        
                                    </tr>
</div>
</div>
</div>
</section>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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


<script type="text/javascript">
    $('.button').click(function() { 
        var img = new Image;
    img.onload = function() {
            var canvas = document.createElement("canvas");
        canvas.width = img.width;
        canvas.height = img.height;
        var ctx = canvas.getContext("2d");
        ctx.drawImage(img, 0, 0);
        
        var base64Image = getBase64Image(canvas);
        downloadURI(base64Image, 'image.png');
    };
    img.setAttribute('crossOrigin', 'anonymous');
    img.src = "<?php echo $qrImage?>";
});

function getBase64Image(canvas) {
    var dataURL = canvas.toDataURL("image/png");
    return dataURL;
}

function downloadURI(uri, name) {
    // IE10+ : (has Blob, but not a[download] or URL)
    if (navigator.msSaveBlob) {
      const blob = dataURItoBlob(uri);
      return navigator.msSaveBlob(blob, name);
    }
    const link = document.createElement('a');
    link.download = name;
    link.href = uri;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

function dataURItoBlob(dataurl) {
    const parts = dataurl.split(','), mime = parts[0].match(/:(.*?);/)[1];
    if (parts[0].indexOf('base64') !== -1) {
        const bstr = atob(parts[1]);
        let n = bstr.length;
        const u8arr = new Uint8Array(n);

        while (n--) {
            u8arr[n] = bstr.charCodeAt(n)
        }
        return new Blob([u8arr], {type:mime})
    } else {
        const raw = decodeURIComponent(parts[1])
        return new Blob([raw], {type: mime})
    }
    }
</script>

