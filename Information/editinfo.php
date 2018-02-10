<!-- header -->
		<?php include('../layout/header.php') ?>
		<!-- sidebar -->
		<?php include('../layout/sidebar.php') ?>
	
	<div id="content-wrapper">
		<section class="content-header">
			<h1>Information</h1>
			<ol class="breadcrumb">
				<li>
					<a href="#"><i class="fa fa-dashboard"></i>Home</a>
				</li>
				<li class="active">
					<a href="">Information</a>
				</li>
			</ol>
		</section>
		<section class="content">
			<div class="box">
				<div class="box-header">
					<div class="box-head">
					
					<h3 class="box-title"><i class="fa fa-list"></i>Edit Information</h3>
					</div>
				</div>
				<div class="box-body">
					<form action="" method="POST">
						<div class="form-group row required" id="information">
							<label for="info-title" class="col-sm-2 control-label">Information Title:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="Enter Information Title" id="info-title">
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
							<div class="col-xs-2 form-group">
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