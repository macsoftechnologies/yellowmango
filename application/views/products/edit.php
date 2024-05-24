<?php echo validation_errors();?>
    <?php if($this->session->flashdata('error_msg')){   
      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  
    }?>
    <?php if($this->session->flashdata('success_msg')){   
      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
    }?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <span><a href="javascript:window.history.back();" class="btn btn-success btn-xs pull-left" data-toggle="tooltip" data-placement="top" title="Back" style="margin-right: 5px;"><i class="mdi mdi-arrow-left"></i></a></span>
                    <h4 class="card-title" style="margin-left: 50px; margin-top: -30px;">Products Update</h4>
                    <br>
                    <form action="<?=base_url()?>products/update/<?php echo $products['product_id'];?>" role="form" id="userForm" name="userForm" method="post" class="forms-sample" enctype="multipart/form-data">
                      <div class="col-md-12">
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail3">Product Name</label>
                              <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Enter Product Name..." name="product_name" value="<?php echo $products['product_name'];?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail3">Product Image</label>
                              <input type="file" class="form-control" id="exampleInputEmail3" placeholder="Enter Product Image ..." name="product_image" value="<?php echo $products['product_image'];?>">
                            </div>
                          </div>



                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail3">Price</label>
                              <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Enter Price ..." name="price" value="<?php echo $products['price'];?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail3">Stock</label>
                              <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Enter Stock ..." name="stock" value="0">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail3">Min-Max-Price</label>
                              <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Enter Min-Max-Price ..." name="min_max_price" value="<?php echo $products['min_max_price'];?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail3">Description</label>
                              <textarea class="form-control" id="exampleInputEmail3" name="description" placeholder="Enter Description..."><?php echo $products['description'];?></textarea>
                              <!-- <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Enter Stock ..." name="stock" value="<?php echo $this->input->post('stock');?>"> -->
                            </div>
                          </div>

                        </div>
                      </div>

                      
                      
                      
                      
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>




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

var zChar = new Array(' ', '(', ')', '-', '.');
var maxphonelength = 14;
var phonevalue1;
var phonevalue2;
var cursorposition;

function ParseForNumber1(object) {
    phonevalue1 = ParseChar(object.value, zChar);
}

function ParseForNumber2(object) {
    phonevalue2 = ParseChar(object.value, zChar);
}

function backspacerUP(object, e) {
    if (e) {
        e = e
    } else {
        e = window.event
    }
    if (e.which) {
        var keycode = e.which
    } else {
        var keycode = e.keyCode
    }

    ParseForNumber1(object)

    if (keycode >= 48) {
        ValidatePhone(object)
    }
}

function backspacerDOWN(object, e) {
    if (e) {
        e = e
    } else {
        e = window.event
    }
    if (e.which) {
        var keycode = e.which
    } else {
        var keycode = e.keyCode
    }
    ParseForNumber2(object)
}

function GetCursorPosition() {

    var t1 = phonevalue1;
    var t2 = phonevalue2;
    var bool = false
    for (i = 0; i < t1.length; i++) {
        if (t1.substring(i, 1) != t2.substring(i, 1)) {
            if (!bool) {
                cursorposition = i
                bool = true
            }
        }
    }
}

function ValidatePhone(object) {

    var p = phonevalue1

    p = p.replace(/[^\d]*/gi, "")

    if (p.length < 6) {
        object.value = p
    } else if (p.length == 6) {
        pp = p;
        // d4 = p.indexOf('(')
        d5 = p.indexOf('-')
        // if (d4 == -1) {
        //     pp = "(" + pp;
        // }
        // if (d5 == -1) {
        //     pp = pp + "1";
        // }
        // object.value = pp;
    } else if (p.length > 6 && p.length < 7) {
        // p = "(" + p;
        l30 = p.length;
        p30 = p.substring(0, 2);
        p30 = p30 + "-"

        p31 = p.substring(2, l30);
        pp = p30 + p31;

        object.value = pp;

    } else if (p.length >= 8) {
        // p = "(" + p;
        l30 = p.length;
        p30 = p.substring(0, 6);
        p30 = p30 + "-"

        p31 = p.substring(6, l30);
        pp = p30 + p31;

        l40 = pp.length;
        p40 = pp.substring(0, 8);
        p40 = p40 + "-"

        p41 = pp.substring(8, l40);
        ppp = p40 + p41;

        object.value = ppp.substring(0, maxphonelength);
    }

    GetCursorPosition()

    if (cursorposition >= 0) {
        if (cursorposition == 0) {
            cursorposition = 2
        } else if (cursorposition <= 2) {
            cursorposition = cursorposition + 1
        } else if (cursorposition <= 5) {
            cursorposition = cursorposition + 2
        } else if (cursorposition == 6) {
            cursorposition = cursorposition + 2
        } else if (cursorposition == 7) {
            cursorposition = cursorposition + 4
            e1 = object.value.indexOf('-')
            e2 = object.value.indexOf('-')
            if (e1 > -1 && e2 > -1) {
                if (e2 - e1 == 4) {
                    cursorposition = cursorposition - 1
                }
            }
        } else if (cursorposition < 11) {
            cursorposition = cursorposition + 3
        } else if (cursorposition == 11) {
            cursorposition = cursorposition + 1
        } else if (cursorposition >= 12) {
            cursorposition = cursorposition
        }

        var txtRange = object.createTextRange();
        txtRange.moveStart("character", cursorposition);
        txtRange.moveEnd("character", cursorposition - object.value.length);
        txtRange.select();
    }

}

function ParseChar(sStr, sChar) {
    if (sChar.length == null) {
        zChar = new Array(sChar);
    } else zChar = sChar;

    for (i = 0; i < zChar.length; i++) {
        sNewStr = "";

        var iStart = 0;
        var iEnd = sStr.indexOf(sChar[i]);

        while (iEnd != -1) {
            sNewStr += sStr.substring(iStart, iEnd);
            iStart = iEnd + 1;
            iEnd = sStr.indexOf(sChar[i], iStart);
        }
        sNewStr += sStr.substring(sStr.lastIndexOf(sChar[i]) + 1, sStr.length);

        sStr = sNewStr;
    }

    return sNewStr;
}
var clipboard = new Clipboard('.btn');

clipboard.on('success', function(e) {
    console.log(e);
});

clipboard.on('error', function(e) {
    console.log(e);
});
</script>