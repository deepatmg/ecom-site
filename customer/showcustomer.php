
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
					<div class="box-head">
						<h3 class="box-title"><i class="fa fa-bar-chart"></i>Customers List</h3>
					</div>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-lg-12">
	                    <div class="panel panel-default">
	                        <div class="panel-body">
								<div class="table-responsive">
					         		<table class="table table-bordered">
						            	<thead>
						              		<tr>
							                <th class="text-left">Customer Name</th>
							                <th class="text-left">Email</th>
							                <th class="text-right">Status</th>
							                <th class="text-right">IP Address</th>
							                <th class="text-right">Date Added</th>
							                <th class="text-right">Action</th>
							              </tr>
							            </thead>
							            <tbody>
						                    <tr>
						                		<td class="text-center" colspan="6">No results!</td>
						              		</tr>
						                </tbody>
						          	</table>
					        	</div>
				        	</div>
			        	</div>
		        	</div>
	        	</div>
		</section>
	</div>
	</div><!-- end of wrapper -->
<?php include('../layout/footer.php');?>
</body>
</html>