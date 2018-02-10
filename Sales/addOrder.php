<!-- header -->
		<?php include('../layout/header.php') ?>
		<!-- sidebar -->
		<?php include('../layout/sidebar.php') ?>
	
	<div id="content-wrapper">
		<section class="content-header">
			<h1>Orders</h1>
			<ol class="breadcrumb">
				<li>
					<a href="#"><i class="fa fa-dashboard"></i>Home</a>
				</li>
				<li class="active">
					<a href="">Orders</a>
				</li>
			</ol>
		</section>
		<section class="content">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Add Orders</h3>
				</div>
				<div class="box-body">
					<form action="" method="GET">
						<div class="form-group row">
							<label for="customer" class="col-sm-2 control-label">Customer Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="Enter Customer name" id="customer">
							</div>
						</div>
						<div class="form-group row required">
                			<label class="col-sm-2 control-label" for="input-firstname">First Name</label>
                			<div class="col-sm-10">
                 				<input type="text" name="firstname" value="" id="input-firstname" class="form-control">
               				</div>
             			</div>
             			<div class="form-group row required">
               				<label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
                			<div class="col-sm-10">
                  				<input type="text" name="lastname" value="" id="input-lastname" class="form-control">
                			</div>
              			</div>
						<div class="form-group row required">
			                <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
			                <div class="col-sm-10">
			                  	<input type="text" name="email" value="" id="input-email" class="form-control">
			                </div>
			            </div>
						<div class="form-group required">
			                <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
			                <div class="col-sm-10">
			                 	<input type="text" name="telephone" value="" id="input-telephone" class="form-control">
			                </div>
			            </div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>
	</div><!-- end of wrapper -->
<?php include('../layout/footer.php');?>
</body>
</html>