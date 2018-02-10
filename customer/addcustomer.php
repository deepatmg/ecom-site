<!-- header -->
		<?php include('../layout/header.php') ?>
		<!-- sidebar -->
		<?php include('../layout/sidebar.php') ?>
	
	<div id="content-wrapper">
		<section class="content-header">
			<h1>Customers</h1>
			<ol class="breadcrumb">
				<li>
					<a href="#"><i class="fa fa-dashboard"></i>Home</a>
				</li>
				<li class="active">
					<a href="">Customers</a>
				</li>
			</ol>
		</section>
		<section class="content">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Add Customers</h3>
				</div>
				<div class="box-body">
					<form action="" method="GET">
						 
						<div class="form-group row required">
							<div class="col-sm-6">
								<label class="col-sm-3 control-label" for="input-firstname">First Name</label>
	                			<div class="col-sm-8">
	                 				<input type="text" name="firstname" value="" id="input-firstname" class="form-control">
	               				</div>
							</div>
							<div class="col-sm-6">
								<label class="col-sm-3 control-label" for="input-lastname">Last Name</label>
	                			<div class="col-sm-8">
	                  				<input type="text" name="lastname" value="" id="input-lastname" class="form-control">
	                			</div>
							</div>
                			
             			</div>
             			
						<div class="form-group row required">
							<div class="col-sm-6">
								<label class="col-sm-3 control-label" for="input-email">E-Mail</label>
			                	<div class="col-sm-8">
			                  		<input type="text" name="email" value="" id="input-email" class="form-control">
			                	</div>
							</div>
							<div class="col-sm-6">
								<label class="col-sm-3 control-label" for="input-telephone">Telephone</label>
				                <div class="col-sm-8">
				                 	<input type="text" name="telephone" value="" id="input-telephone" class="form-control">
				                </div>
							</div>
			                
			            </div>
						<div class="form-group row required">
							<div class="col-sm-6">
								<label class="col-sm-3 control-label" for="password">Password</label>
				                <div class="col-sm-8">
				                 	<input type="password" name="password" value="" id="password" class="form-control">
				                </div>
							</div>
							<div class="col-sm-6">
								<label class="col-sm-3 control-label" for="confirm">Confirm</label>
				                <div class="col-sm-8">
				                 	<input type="password" name="confirm" value="" id="confirm" class="form-control">
				                </div>
							</div>
			                
			            </div>
			            <div class="form-group row">
			            	<div class="col-sm-3">
			            		
									<label for="status">Newsletter</label>
									<select name="status" id="status" class="form-control">
										<option value="0">Enabled</option>
										<option value="1" selected>Disabled</option>
									</select>
								
			            	</div>
			            	<div class="col-sm-3">
			            		
									<label for="status">Status</label>
									<select name="status" id="status" class="form-control">
										<option value="0">Enabled</option>
										<option value="1">Disabled</option>
									</select>
								
			            	</div>
			            	<div class="col-sm-3">
			            		
									<label for="status">Approved</label>
									<select name="status" id="status" class="form-control">
										<option value="0" selected>Yes</option>
										<option value="1">No</option>
									</select>
								
			            	</div>
			            	<div class="col-sm-3">
			            		
									<label for="status">Safe</label>
									<select name="status" id="status" class="form-control">
										<option value="0">Yes</option>
										<option value="1" selected>No</option>
									</select>
								
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