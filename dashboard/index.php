
<!-- header -->
		<?php include('../layout/header.php') ?>
		<!-- sidebar -->
		<?php include('../layout/sidebar.php') ?>
	
	<div id="content-wrapper">
		<section class="content-header">
			<h1>Dashboard</h1>
			<ol class="breadcrumb">
				<li>
					<a href="#"><i class="fa fa-dashboard"></i>Home</a>
				</li>
				<li class="active">
					<a href="">Dashboard</a>
				</li>
			</ol>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="tile">
						<div class="tile-heading">Total Orders <span class="pull-right">0%</span>
						</div>
						<div class="tile-body"><i class="fa fa-shopping-cart"></i>
					    	<h2 class="pull-right">0</h2>
					  	</div>
					  	<div class="tile-footer">
					  		<a href="#">View more...</a>
					  	</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="tile">
					  	<div class="tile-heading">Total Sales <span class="pull-right">0% </span>
					  	</div>
					  	<div class="tile-body"><i class="fa fa-credit-card"></i>
					    	<h2 class="pull-right">0</h2>
					  	</div>
					  	<div class="tile-footer"><a href="#">View more...</a></div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="tile">
  						<div class="tile-heading">Total Customers <span class="pull-right">0%</span>
  						</div>
  						<div class="tile-body"><i class="fa fa-user"></i>
    						<h2 class="pull-right">0</h2>
  						</div>
						<div class="tile-footer"><a href="#">View more...</a></div>
					</div>
				</div>
				<div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Real Time Traffic
                            </div>

                                                
							<div class="demo-container">
								<div id="placeholderRT" class="demo-placeholder" style="padding: 0px; position: relative;">
									<canvas class="flot-base" width="657" height="413" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 657px; height: 413px;"></canvas>
									<div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
										<div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
											<div class="flot-tick-label tickLabel" style="position: absolute; top: 397px; left: 14px; text-align: right;">0</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; top: 318px; left: 8px; text-align: right;">20</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; top: 238px; left: 8px; text-align: right;">40</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; top: 159px; left: 8px; text-align: right;">60</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; top: 79px; left: 8px; text-align: right;">80</div>
											<div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 2px; text-align: right;">100</div>
										</div>
									</div>
									<canvas class="flot-overlay" width="657" height="413" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 657px; height: 413px;"></canvas>
								</div>
							</div>

                        </div>

                    </div><!-- end of real time traffic -->
                    

           </div>
		</section> 
	</div><!-- end of wrapper -->
<?php include('../layout/footer.php');?>
<script src="../flot/jquery.flot.js"></script>
<script src="../flot/jquery.flot.resize.js"></script>
<script src="../flot/jquery.flot.time.js"></script>
<script src="../flot/jquery.flot.stack.js"></script>
<script src="../flot/for_index.js"></script>

</body>
</html>