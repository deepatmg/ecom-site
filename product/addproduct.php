<!-- header -->
		<?php include('../layout/header.php') ?>
		<!-- sidebar -->
		<?php include('../layout/sidebar.php') ?>
	
	<div id="content-wrapper">
		<section class="content-header">
			<h1>Product</h1>
			<ol class="breadcrumb">
				<li>
					<a href="#"><i class="fa fa-dashboard"></i>Home</a>
				</li>
				<li class="active">
					<a href="">Product</a>
				</li>
			</ol>
		</section>
		<section class="content">
			<div class="box">
				<div class="box-header">
					<div class="box-head">
					
					<h3 class="box-title"><i class="fa fa-list"></i>Add Product</h3>
					</div>
				</div>
				<div class="box-body">
					<form action="" method="POST">
						<div class="form-group row required" id="productName">
							<label for="product-name" class="col-sm-2 control-label">Product Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="Enter a product name" id="product-name">
							</div>
						</div>
						<div class="form-group row">
							<div class="whole-desc">
								<label for="description" id="label-desc">
									Description
								</label>
								<button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse" id="minimize">
                  				<i class="fa fa-minus"></i></button>
                  				</div>
								<div class="col-sm-10" id="desc-block"><textarea name="description" id="description" rows="3" class="form-control"></textarea>
								</div>
								<script type="text/javascript">
	        						CKEDITOR.replace( 'description' );
	      						</script>
      						
						</div>
						
						<div class="form-group row">
							<label for="files" id="label-image">Upload your images</label>
							<span class="btn btn-primary btn-file" id="upload">Browse...
  							<input type="file" id="files" name="files[]" multiple>
  							</span>
						</div>		
 						<div class="form-group row">
							<div class="col-sm-4 form-group">
								<label for="category">
									Category
								</label>
								<select name="category" id="category" class="form-control">
									<option value="0"> --- None --- </option>
									<option value="33">Cameras</option>
									<option value="23">Components</option>
								</select>
							</div><!-- end of category -->
							<div class="col-sm-3 form-group">
								<label for="quantity">Quantity</label>
								<input type="number" id="quantity" class="form-control">
							</div>
							<div class="col-sm-3 form-group">
								<label for="Price">Price</label>
								<input type="currency" id="Price" class="form-control">
							</div>
							
							<div class="col-sm-2 form-group">
								<label for="status">Status</label>
								<select name="status" id="status" class="form-control">
									<option value="0">Enabled</option>
									<option value="1">Disabled</option>
								</select>
							</div>
						</div><!-- end of row -->
						<div class="box-footer form-group">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>
	</div><!-- end of wrapper -->
	<?php include('../layout/footer.php');?>
<script src="../script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>