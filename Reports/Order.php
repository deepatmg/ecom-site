
<!-- header -->
		<?php include('../layout/header.php') ?>
		<!-- sidebar -->
		<?php include('../layout/sidebar.php') ?>
	
	<div id="content-wrapper">
		<section class="content-header">
			<h1>Sales Report</h1>
			<ol class="breadcrumb">
				<li>
					<a href="#"><i class="fa fa-dashboard"></i>Home</a>
				</li>
				<li class="active">
					<a href="">Sales Report</a>
				</li>
			</ol>
		</section>
		<section class="content">
			<div class="box">
				<div class="box-header">
					<div class="box-head">
						<h3 class="box-title"><i class="fa fa-bar-chart"></i>Sales List</h3>
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
							                <th class="text-left">Date Start</th>
							                <th class="text-left">Date End</th>
							                <th class="text-right">No. Orders</th>
							                <th class="text-right">No. Products</th>
							                <th class="text-right">Tax</th>
							                <th class="text-right">Total</th>
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