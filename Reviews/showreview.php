
<!-- header -->
		<?php include('../layout/header.php') ?>
		<!-- sidebar -->
		<?php include('../layout/sidebar.php') ?>
	
	<div id="content-wrapper">
		<section class="content-header">
			<h1>Reviews</h1>
			<ol class="breadcrumb">
				<li>
					<a href="#"><i class="fa fa-dashboard"></i>Home</a>
				</li>
				<li class="active">
					<a href="">Reviews</a>
				</li>
			</ol>
		</section>
		<section class="content">
			<div class="box">
				<div class="box-header">
					<div class="box-head">
						<h3 class="box-title"><i class="fa fa-list"></i>Reviews List</h3>
					</div>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-lg-12">
	                    <div class="panel panel-default">
	                        <div class="panel-body">
	                            <div class="table-responsive">
	                                <table class="table table-hover">
	                                    <thead>
	                                        <tr>
	                                            <th>ID</th>
	                                            <th>Product</th>
	                                            <th>Author</th>
	                                            <th>Rating</th>
	                                            <th>Status</th>
	                                            <th>Date Added</th>
	                                            <th>Action</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                            <td>1</td>
	                                            <td>Iphone</td>
	                                            <td>Khusbu Shahi</td>
	                                            <td>4</td>
	                                            <td>Enabled</td>
	                                            <td>11 Jun</td>
	                                            <td><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button> | <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
	                                        </tr>
	                                        <tr>
	                                            <td>1</td>
	                                            <td>Iphone</td>
	                                            <td>Khusbu Shahi</td>
	                                            <td>4</td>
	                                            <td>Enabled</td>
	                                            <td>11 Jun</td>
	                                            <td><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button> | <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
	                                        </tr>
	                                        
	                                    </tbody>
	                                </table>

	                            </div>
	                            <nav aria-label="Page navigation example" id="pagenum">
											<ul class="pagination">
											    <li class="page-item">
											      <a class="page-link" href="#" aria-label="Previous">
											        <span aria-hidden="true">&laquo;</span>
											        <span class="sr-only">Previous</span>
											      </a>
											    </li>
											    <li class="page-item"><a class="page-link" href="#">1</a></li>
											    <li class="page-item"><a class="page-link" href="#">2</a></li>
											    <li class="page-item"><a class="page-link" href="#">3</a></li>
											    <li class="page-item">
											      <a class="page-link" href="#" aria-label="Next">
											        <span aria-hidden="true">&raquo;</span>
											        <span class="sr-only">Next</span>
											      </a>
											    </li>
											</ul>
										</nav>
	                        </div>
	                    </div>
	                </div>
	            </div>
				</div><!-- end of box body -->
			</div><!-- end of box -->
		</section>
	</div>
	</div><!-- end of wrapper -->
<?php include('../layout/footer.php');?>
</body>
</html>