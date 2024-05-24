<!-- <style>
        img {
            float: left;
            padding-right: 5px;
            padding-top: 50px;
            width: auto;
            margin-left: 130px;
        }

        .list1 {
            padding-top: 60px;
        }

        li {
            list-style-type: none;
        }

        h1 {
            margin-left: 130px;
            padding-top: 30px;
        }

        ul {
            margin-left: 50%;
        }

        .data1 {
            margin-left: 90px;
            float: left;
        }

        .data2 {
            padding-top: 17px;
        }

        body {
            font-family: 'Lato', sans-serif;
        }

        .container,
        th,
        td {
            border-collapse: collapse;
            border-left-style: hidden;
            border-right-style: hidden;
            margin-left: 130px;
            margin-top: 50px;
            text-align: left;
            border-bottom: 1px solid #ccc;
            padding: 10px 250px 10px 0;

        }

        .calculation,
        th,
        td {
            padding-top: 25px;
            margin-left: 40%;
            margin-right: 20%;
        }



        #space {
            padding-left: 124px;
        }

        .row1 {
            background-color: rgb(0, 0, 0);
            color: #ffffff;
            padding: 15px;
        }

        .total {
            border-bottom: 4px solid black !important;
        }
    </style> -->
        
<style>
  .invoice-logo {
    display: flex;
  }
</style>

<?php echo validation_errors();?>

    <?php if($this->session->flashdata('error_msg')){   

      echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>";  

    }?>

    <?php if($this->session->flashdata('success_msg')){   

      echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  

    }?>

<style type="text/css">
      .number {
        display: flex; align-items: center;justify-content: flex-end;padding: 0px;
      }
</style>
  <div class="form-group col-md-12 number">  
    <label style="margin-right: 20px;">Show Numbers Of Rows</label>      
        <select class  ="form-control" name="state" id="maxRows" style="width: 100px">
           <option value="5000">Show ALL Rows</option>
           <option value="5">5</option>
           <option value="10">10</option>
           <option value="15">15</option>
           <option value="20">20</option>
           <option value="50">50</option>
           <option value="70">70</option>
           <option value="100">100</option>
          </select>

        </div>

                    <div class="table-full-width" id= "table-id" style="width: 100%;overflow-x: scroll;">

                        <table class="table">

                            <th>S.no</th>

                            <th>Customer Name</th>

                            <th>Mobile Number</th>

                            <th>Order Id</th>

                            <th>Total Price</th>

                            <th>Order On</th>

                            <th>Status</th>

                            <!-- <th>Delivery Date</th> -->

                            <!-- <th>Actions</th> -->

                            <tbody>

                                <?php if($orders->num_rows() > 0) { 

                                    foreach ($orders->result() as $key => $or) { ?>

                                <tr>

                                    <td><span class="btn btn-success btn-xs"><?php echo $key+1;?></span></td>

                                    <td><?php echo $or->customer_name;?></td>

                                    <td><?php echo $or->mobile_number;?></td>

                                    <td><a href="<?=base_url();?>orders/vieworderDetails/<?php echo $or->order_id;?>" class="btn btn-gradient-danger btn-xs"><?php echo $or->order_txn;?></a></td>

                                    <td>₹<?php echo $or->total_price;?></td>
                                    <td><?php echo date('d-m-Y ',strtotime($or->created_at));?></td>

                                    <td>
                                      <select class="form-control quantity" name="status" id="quantity_<?php echo $or->order_id;?>">
                                            <option value="1">Ordered</option>
                                            <option value="2">Processing</option>
                                            <option value="3">Shipped</option>
                                            <option value="4">Delevered</option>
                                        </select>
                                      <a class="no-print btn btn-gradient-info btn-xs pull-right" href="javascript:printDiv('print-area-<?php echo $key+1;?>');">Print</a>

                            
                                        <!-- <input type="text" name="status" class="form-control" > -->
                                        

                                    
                                        <?php if($or->status == 1) {?>

                                        <a href="#" class="btn btn-xs" style="background-color: #1ccee5; color: white;">Ordered</a>
                                        <button title="Quick view" class="btn btn-xs btn-gradient-primary" data-toggle="modal" data-target="#productModal<?php echo $key+1;?>">Change status</button>

                            <div class="modal fade" id="productModal<?php echo $key+1;?>">
                              <div class="modal-dialog">
                                <div class="modal-content photo-modal" style="height: 285px;">
                                
                                  <div class="modal-header">
                                    <h4 class="modal-title">Change Status</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    
                                  </div>
                                  
                                  <div class="modal-body">
                                    <div class="add-photo">
                                      <!-- <form action="<?=base_url()?>orders/statusupdate/<?php echo $or->order_id;?>" method="post"> -->
                                         <select class="form-control quantity" name="status" id="quantity_<?php echo $or->order_id;?>">
                                            <option value="1">Ordered</option>
                                            <option value="2">Processing</option>
                                            <option value="3">Shipped</option>
                                            <option value="4">Delevered</option>
                                        </select>
                                         <!-- <input type="text" class="quantity qty-value1" name="quantity" id="quantity_<?php echo $cartitems[$i]['cart_id'];?>" value="<?php echo $cartitems[$i]['quantity'];?>" cartid="quantity_<?php echo $cartitems[$i]['cart_id'];?>"  productid="<?php echo $cartitems[$i]['product_id'];?>"> -->
                                          <!-- <input type="hidden" name="order_id" id="order_id" value="<?php echo $or->order_id;?>"> -->
                                          <input type="submit" name="submit" class="btn btn-primary btn-xs" value="Change status" onclick="return confirmdelevered();">
                                    <!-- </form> -->
                                      <!-- <button type="submit" class="edit-button">submit</button> -->
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                            <?php } else if($or->status == 2){ ?>
                             <a href="#" class="btn btn-gradient-warning btn-xs">Processing</a>
                            <button title="Quick view" class="btn btn-xs btn-gradient-primary" data-toggle="modal" data-target="#productModal<?php echo $key+1;?>">Change status</button>

                            <div class="modal fade" id="productModal<?php echo $key+1;?>">
                              <div class="modal-dialog">
                                <div class="modal-content photo-modal" style="height: 285px;">
                                
                                  <div class="modal-header">
                                    <h4 class="modal-title">Change Status</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    
                                  </div>
                                  
                                  <div class="modal-body">
                                    <div class="add-photo">
                                      <!-- <form action="<?=base_url()?>orders/statusupdate/<?php echo $or->order_id;?>" method="post"> -->
                                        <select class="form-control quantity" name="status" id="quantity_<?php echo $or->order_id;?>">
                                            <option value="1">Ordered</option>
                                            <option value="2">Processing</option>
                                            <option value="3">Shipped</option>
                                            <option value="4">Delevered</option>
                                        </select>
                                          <!-- <input type="hidden" name="order_id" id="order_id" value="<?php echo $or->order_id;?>"> -->
                                          <input type="submit" name="submit" class="btn btn-primary btn-xs" value="Change status" onclick="return confirmdelevered();">
                                    <!-- </form> -->
                                      <!-- <button type="submit" class="edit-button">submit</button> -->
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                            
                                       
                                        <?php }else if($or->status == 3){ ?>
                                        <a href="#" class="btn btn-gradient-info btn-xs">Shipped</a>

                                        <button title="Quick view" class="btn btn-xs btn-gradient-primary" data-toggle="modal" data-target="#productModal<?php echo $key+1;?>">Change status</button>

                            <div class="modal fade" id="productModal<?php echo $key+1;?>">
                              <div class="modal-dialog">
                                <div class="modal-content photo-modal" style="height: 285px;">
                                
                                  <div class="modal-header">
                                    <h4 class="modal-title">Change Status</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    
                                  </div>
                                  
                                  <div class="modal-body">
                                    <div class="add-photo">
                                      <!-- <form action="<?=base_url()?>orders/statusupdate/<?php echo $or->order_id;?>" method="post"> -->
                                         <select class="form-control quantity" name="status" id="quantity_<?php echo $or->order_id;?>">
                                            <option value="1">Ordered</option>
                                            <option value="2">Processing</option>
                                            <option value="3">Shipped</option>
                                            <option value="4">Delevered</option>
                                        </select>
                                          <!-- <input type="hidden" name="order_id" id="order_id" value="<?php echo $or->order_id;?>"> -->
                                          <input type="submit" name="submit" class="btn btn-primary btn-xs" value="Change status" onclick="return confirmdelevered();">
                                    <!-- </form> -->
                                      <!-- <button type="submit" class="edit-button">submit</button> -->
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                                        <?php } else { ?>
                                        <a href="#" class="btn btn-gradient-success btn-xs">Delevered</a>
                                        <?php } ?></td>

                                    <!-- <td><?php echo $or->delivery_date;?></td> -->

                                   

                                   <!--  <td class="td-actions">

                                        <a href="<?=base_url();?>customers/edit/<?php echo $cs->customer_id;?>" rel="tooltip" title="Edit Task" class="btn btn-success btn-simple btn-sm" style="padding: 5px;">

                                            <i class="mdi mdi-pencil"></i>

                                        </a>

                                        <a href="<?=base_url();?>customers/delete/<?php echo $cs->customer_id;?>" rel="tooltip" onclick="return deleteItem();" title="Remove" class="btn btn-primary btn-simple btn-sm" style="padding: 5px;">

                                            <i class="mdi mdi-close"></i>

                                        </a>

                                    </td> -->

                                </tr>



                            <?php }

                        } ?>

                                

                            </tbody>

                        </table>

                        <br>

                        <div class='pagination-container' >
                        <nav>
                          <ul class="pagination" style="justify-content: flex-end;">
                            
                            <li data-page="prev" class="btn btn-sm btn-gradient-danger">
                                     <span> < <span class="sr-only">(current)</span></span>
                                    </li>
                           <!-- Here the JS Function Will Add the Rows -->
                        <li data-page="next" id="prev" class="btn btn-sm btn-gradient-danger">
                                       <span> > <span class="sr-only">(current)</span></span>
                                    </li>
                          </ul>
                        </nav>
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

<script type="text/javascript">

    function confirmdelevered() {

    if (confirm("Are you sure you want to change the order status ?")) {

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

<style type="text/css">
  body{

    background-color: #eee; 
}

table th , table td{
    text-align: center;
}

table tr:nth-child(even){
    background-color: #BEF2F5
}

.pagination li:hover{
    cursor: pointer;
}
    /*table tbody tr {
      display: none;
    }*/

</style>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script >
function printDiv(divName) {
      document.getElementById("privntDIvb").style.display = "block";
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
     document.getElementById("privntDIvb").style.display = "none";
}
</script>

<script type="text/javascript">
            getPagination('#table-id');
          //getPagination('.table-class');
          //getPagination('table');

      /*          PAGINATION 
      - on change max rows select options fade out all rows gt option value mx = 5
      - append pagination list as per numbers of rows / max rows option (20row/5= 4pages )
      - each pagination li on click -> fade out all tr gt max rows * li num and (5*pagenum 2 = 10 rows)
      - fade out all tr lt max rows * li num - max rows ((5*pagenum 2 = 10) - 5)
      - fade in all tr between (maxRows*PageNum) and (maxRows*pageNum)- MaxRows 
      */
     

function getPagination(table) {
  var lastPage = 1;

  $('#maxRows')
    .on('change', function(evt) {
      //$('.paginationprev').html('');            // reset pagination

     lastPage = 1;
      $('.pagination')
        .find('li')
        .slice(1, -1)
        .remove();
      var trnum = 0; // reset tr counter
      var maxRows = parseInt($(this).val()); // get Max Rows from select option

      if (maxRows == 5000) {
        $('.pagination').hide();
      } else {
        $('.pagination').show();
      }

      var totalRows = $(table + ' tbody tr').length; // numbers of rows
      $(table + ' tr:gt(0)').each(function() {
        // each TR in  table and not the header
        trnum++; // Start Counter
        if (trnum > maxRows) {
          // if tr number gt maxRows

          $(this).hide(); // fade it out
        }
        if (trnum <= maxRows) {
          $(this).show();
        } // else fade in Important in case if it ..
      }); //  was fade out to fade it in
      if (totalRows > maxRows) {
        // if tr total rows gt max rows option
        var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
        //  numbers of pages
        for (var i = 1; i <= pagenum; ) {
          // for each page append pagination li
          $('.pagination #prev')
            .before(
              '<li data-page="' +
                i +
                '" class="btn btn-sm btn-gradient-info">\
                  <span>' +
                i++ +
                '<span class="sr-only">(current)</span></span>\
                </li>'
            )
            .show();
        } // end for i
      } // end if row count > max rows
      $('.pagination [data-page="1"]').addClass('active'); // add active class to the first li
      $('.pagination li').on('click', function(evt) {
        // on click each page
        evt.stopImmediatePropagation();
        evt.preventDefault();
        var pageNum = $(this).attr('data-page'); // get it's number

        var maxRows = parseInt($('#maxRows').val()); // get Max Rows from select option

        if (pageNum == 'prev') {
          if (lastPage == 1) {
            return;
          }
          pageNum = --lastPage;
        }
        if (pageNum == 'next') {
          if (lastPage == $('.pagination li').length - 2) {
            return;
          }
          pageNum = ++lastPage;
        }

        lastPage = pageNum;
        var trIndex = 0; // reset tr counter
        $('.pagination li').removeClass('active'); // remove active class from all li
        $('.pagination [data-page="' + lastPage + '"]').addClass('active'); // add active class to the clicked
        // $(this).addClass('active');          // add active class to the clicked
      limitPagging();
        $(table + ' tr:gt(0)').each(function() {
          // each tr in table not the header
          trIndex++; // tr index counter
          // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
          if (
            trIndex > maxRows * pageNum ||
            trIndex <= maxRows * pageNum - maxRows
          ) {
            $(this).hide();
          } else {
            $(this).show();
          } //else fade in
        }); // end of for each tr in table
      }); // end of on click pagination list
    limitPagging();
    })
    .val(5)
    .change();

  // end of on select change

  // END OF PAGINATION
}

function limitPagging(){
  // alert($('.pagination li').length)

  if($('.pagination li').length > 7 ){
      if( $('.pagination li.active').attr('data-page') <= 3 ){
      $('.pagination li:gt(5)').hide();
      $('.pagination li:lt(5)').show();
      $('.pagination [data-page="next"]').show();
    }if ($('.pagination li.active').attr('data-page') > 3){
      $('.pagination li:gt(0)').hide();
      $('.pagination [data-page="next"]').show();
      for( let i = ( parseInt($('.pagination li.active').attr('data-page'))  -2 )  ; i <= ( parseInt($('.pagination li.active').attr('data-page'))  + 2 ) ; i++ ){
        $('.pagination [data-page="'+i+'" ]').show();

      }

    }
  }
}

$(function() {
  // Just to append id number for each row
  // $('table tr:eq(0)').prepend('<th> ID </th>');

  var id = 0;

  $('table tr:gt(0)').each(function() {
    id++;
    // $(this).prepend('<td>' + id + '</td>');
  });
});

//  Developed By Yasser Mas
// yasser.mas2@gmail.com

</script>


<textarea id="printing-css" style="display:none;">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font:normal normal .8125em/1.4 Arial,Sans-Serif;background-color:white;color:#333}strong,b{font-weight:bold}cite,em,i{font-style:italic}a{text-decoration:none}a:hover{text-decoration:underline}a img{border:none}abbr,acronym{border-bottom:1px dotted;cursor:help}sup,sub{vertical-align:baseline;position:relative;top:-.4em;font-size:86%}sub{top:.4em}small{font-size:86%}kbd{font-size:80%;border:1px solid #999;padding:2px 5px;border-bottom-width:2px;border-radius:3px}mark{background-color:#ffce00;color:black}p,blockquote,pre,table,figure,hr,form,ol,ul,dl{margin:1.5em 0}hr{height:1px;border:none;background-color:#666}h1,h2,h3,h4,h5,h6{font-weight:bold;line-height:normal;margin:1.5em 0 0}h1{font-size:200%}h2{font-size:180%}h3{font-size:160%}h4{font-size:140%}h5{font-size:120%}h6{font-size:100%}ol,ul,dl{margin-left:3em}ol{list-style:decimal outside}ul{list-style:disc outside}li{margin:.5em 0}dt{font-weight:bold}dd{margin:0 0 .5em 2em}input,button,select,textarea{font:inherit;font-size:100%;line-height:normal;vertical-align:baseline}textarea{display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}pre,code{font-family:"Courier New",Courier,Monospace;color:inherit}pre{white-space:pre;word-wrap:normal;overflow:auto}blockquote{margin-left:2em;margin-right:2em;border-left:4px solid #ccc;padding-left:1em;font-style:italic}table[border="1"] th,table[border="1"] td,table[border="1"] caption{border:1px solid;padding:.5em 1em;text-align:left;vertical-align:top}th{font-weight:bold}table[border="1"] caption{border:none;font-style:italic}.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>

<script type="text/javascript">
  function printDiv(elementId) {
    var a = document.getElementById('printing-css').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
</script>

   <script type="text/javascript">
     $(document).ready(function(){
     $('.quantity').change(function(){
        // location.reload();
          var itemId = $(this).attr('id');
          var aa = itemId.split("_");
          var qty = $('#quantity_'+aa[1]).val();
          var url = baseurl+'orders/changeQuantity';
              // location.reload();
              $.ajax({
                  url: url,
                  type: 'POST',
                  dataType: 'json',
                  data:{order_id : aa[1], status:qty},
                  success: function (res) {

                      // console.log(res['status']);
                      if(res['status'] == "pass")
                      {
                          $('.testorder').hide();
                      }
                      else
                      {
                         alert("Out Of Stock");
                         location.reload();
                      }
                  }
              });
        });

     $('.quantity').change(function(){
          // $('.testk').empty();
          $('.ordertest').empty();
         var itemId = $(this).attr('id');
          var msg = '';
          var url = baseurl+'orders/getTotalDatatcartItemList';
          $.ajax({
            url: url,
            type: 'POST',
            data: {order_id: itemId},
            beforeSend: function() {
              $("#loading-image").show();
            // $('.testk').empty()
           },
           //  beforeSend: function() {
           //    $("#loading-image").show();
           //  // $('.testk').empty()
           // },
            // dataType: 'json',
            success: function(res){
                $("#loading-image").hide();
              // $('.testk').empty();
              // $('.datest').hide();
              $('.ordertest').show();
              $('.testorder').hide();
              // $('.what-icon').hide();
              // $('.testk').append(res);
              $('.ordertest').append(res);
            }
        });
        });


   });
</script> 