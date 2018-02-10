
<!-- header -->
		<?php include('../layout/header.php') ?>
		<!-- sidebar -->
		<?php include('../layout/sidebar.php') ?>
	
	<div id="content-wrapper">
		<section class="content-header">
			<h1>Category</h1>
			<ol class="breadcrumb">
				<li>
					<a href="#"><i class="fa fa-dashboard"></i>Home</a>
				</li>
				<li class="active">
					<a href="">Category</a>
				</li>
			</ol>
		</section>
		<section class="content">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Edit Category</h3>
				</div>
				<div class="box-body">
					<form action="" method="GET">
						<div class="form-group">
							<label for="category">Category Name:</label>
							<input type="text" class="form-control" placeholder="Enter a category name" id="category">
						</div>
						<div class="form-group">
							<label for="description">
								Description
							</label>
							<textarea name="description" id="description" rows="3" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label for="parent">
								Parent
							</label>
							<select name="parent" id="parent" class="form-control">
								<option value="0"> --- None --- </option>
								<option value="33">Cameras</option>
								<option value="23">Components</option>
							</select>
						</div>
						<div class="form-group">
							<label for="status">Status</label>
							<select name="status" id="status" class="form-control">
								<option value="0">Enabled</option>
								<option value="1">Disabled</option>
							</select>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</section>
	
	</div><!-- end of wrapper -->
<?php include('../layout/footer.php');?>
</body>
</html>