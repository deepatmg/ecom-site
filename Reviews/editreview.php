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
					
					<h3 class="box-title"><i class="fa fa-list"></i>Edit Reviews</h3>
					</div>
				</div>
				<div class="box-body">
					<form action="" method="POST">
						<div class="form-group row required" id="productName">
							<label for="product-name" class="col-sm-2 control-label">Product :</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="Enter a product name" id="product-name">
							</div>
						</div>
						<div class="form-group row required" id="authorName">
							<label for="author" class="col-sm-2 control-label">Author :</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="Enter Author Name" id="author">
							</div>
						</div>
						<div class="form-group row">
							
								<label for="description" id="label-desc" class="col-sm-2 control-label">
									Text :
								</label>
								<div class="col-sm-10" id="desc-block"><textarea name="description" id="description" rows="4" class="form-control"></textarea>
								</div>
						</div>
						<div class="form-group row required">
            				<label class="col-sm-2 control-label" for="rating">Rating</label>
            				<div class="col-sm-10">
             					<label class="radio-inline">
                                	<input type="radio" name="rating" value="1">1
                              	</label>
					            <label class="radio-inline">
					                <input type="radio" name="rating" value="2">2
					            </label>
					            <label class="radio-inline">
					              <input type="radio" name="rating" value="3">3
					            </label>
					            <label class="radio-inline">
					              <input type="radio" name="rating" value="4">4
					            </label>
					            <label class="radio-inline">
					                <input type="radio" name="rating" value="5">5
					            </label>
					        </div>
					    </div>
					    <div class="form-group row" id="dateform">
				            <label class="col-sm-2 control-label" for="date">Date Added</label>
				            <div class="col-sm-3">
				              <div class="input-group datetime">
				                <input type="text" name="date" value="" placeholder="Date Added" data-date-format="YYYY-MM-DD HH:mm:ss" id="date" class="form-control">
				                <span class="input-group-btn">
				                <button type="button" id="datebutton" class="btn btn-default"><i class="fa fa-calendar"></i></button>
				                </span>
				              </div>
				            </div>
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
<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script>
    $(document).ready(function(){
    	$('input[name="date"]').click('on',function() {
    		var date_input=$('input[name="date"]'); //our date input has the name "date"
		    var container=$('.datetime').length>0 ? $('.datetime').parent() : "body";
		    var options={
		        format: 'mm/dd/yyyy',
		        container: container,
		        todayHighlight: true,
		        autoclose: true,
		    };
		    date_input.datepicker(options)
    	});
      	$('#datebutton').click('on',function(){
      		var date_but=$('#datebutton');
      		var containers=$('.dateform').length>0 ? $('.dateform').parent() : "body";
		    var optionss={
		        format: 'mm/dd/yyyy',
		        container: containers,
		        todayHighlight: true,
		        autoclose: true,
		    };
      		date_but.datepicker(optionss);
      	});
      

      
      

    });
</script>
</body>
</html>