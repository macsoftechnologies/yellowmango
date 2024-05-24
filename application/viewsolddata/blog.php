<style>
	/*.container.container-ver2 {
		width: 1300px;
		margin: auto;
	}*/
</style>


<div class="main-content">
	<div class="banner-header banner-lbook3 main-bannerr2">
    <!-- <img src="<?=base_url();?>assets2/images/banner_images/small-banner.jpg" alt="Banner-header"> -->
        <div class="overlayy-main"></div>
        <div class="text">
            <h3>Blog</h3>
            <!-- <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Product Details</a><i class="fa fa-caret-right"></i>Daisy Coffee Table</p> -->
        </div>
    </div>


    <section class="blog-section-wrapper">
    	<div class="cart-box-container">
    		<div class="container-fluid">
    			<div class="row">
                <?php if($blogs->num_rows() > 0) {
                	foreach ($blogs->result() as $key => $bl) { ?>
	    			<div class="col-md-6">
	    				<div class="card">
	    					<div class="row">
	    						<div class="col-md-6">
	    							 <div class="blog-image">
	    							 	<img src="<?php echo $bl->blog_image;?>">
	    							 </div>
	    						</div>	

	    						<div class="col-md-6">
	    							<div class="blog-detailss">

	    								<h5><?php echo date('d-m-y',strtotime($bl->created_at));?> / Posted By <br/> Mail2Yellowmango</h5>
	    								<h3><?php echo $bl->blog_name;?></h3>

	    								<p><?php echo $bl->description;?></p>
	    							</div>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    		<?php } 
	    	} ?>
	    		</div>
    		</div>    		
    	</div>
    </section>
</div>