
<aside id="sidediv">
		<div class="sidebar">
			<!-- sidebar user panel -->
			<div class="user-panel">
				<div class="leftimage">
					
						<img src="../image/deepa.JPG" alt="" class="img-round">
					
				</div>
				<div class="info">
					<p>Deepa Tamang</p>
					<a href="">
						<i class="fa fa-circle text-success"></i>
						Online
					</a>
				</div>
			</div>
			<!-- end of user panel -->
			<!-- search form -->
			<form action="" method="GET" class="sidebar-form">
				<div class="input-group">
          			<input type="text" name="q" class="form-control" placeholder="Search...">
             		<span class="input-group-btn">
                	<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
           		   </span>
        		</div>
			</form>
			<ul class="sidebar-menu">
				<li class="header">MAIN NAVIGATION</li>
				<li class="accordion">
          			<a href="../dashboard/index.php">
            		<i class="fa fa-dashboard"></i> <span>Dashboard</span>
		            </a>
			          
		        </li>
		        <li class="accordion">
		          <a href="#">
		            <i class="fa fa-shopping-basket"></i>
		            <span>Category</span>
		          </a>
	          	</li>
	          	<ul class="treeview-menu">
		            <li><a href="../category/addcategory.php"><i class="fa fa-circle-o"></i>Add Category</a></li>
		            <li><a href="../category/showcategory.php"><i class="fa fa-circle-o"></i>Show Category</a></li>
		        </ul>
			    <li class="accordion">
					<a href="#"><i class="fa fa-product-hunt"></i><span>Products</span></a>
				</li>
				<ul class="treeview-menu">
					<li><a href="../product/addproduct.php"><i class="fa fa-circle-o"></i>Add Products</a></li>
					<li><a href="../product/showproduct.php"><i class="fa fa-circle-o"></i>Show Products</a></li>
				</ul>
				<li class="accordion">
					<a href="#"><i class="fa fa-newspaper-o"></i><span>Advertisements</span></a>
				</li>
				<li class="accordion">
					<a href="#"><i class="fa fa-shopping-cart"></i><span>Sales</span></a>
				</li>
				<ul class="treeview-menu">
					<li><a href="../product/addproduct.php"><i class="fa fa-circle-o"></i>Add Order</a></li>
					<li><a href="../product/showproduct.php"><i class="fa fa-circle-o"></i>View Orders</a></li>
					
				</ul>
				<li class="accordion">
					<a href="#"><i class="fa fa-bookmark"></i><span>Reviews</span></a>
				</li>
				<ul class="treeview-menu"> 
					<li><a href="../Reviews/showreview.php"><i class="fa fa-circle-o"></i>Reviews List</a></li>
				</ul>
				<li class="accordion">
					<a href="#"><i class="fa fa-user"></i><span>Customer</span></a>
				</li> 
				<ul class="treeview-menu"> 
					<li><a href="../customer/addcustomer.php"><i class="fa fa-circle-o"></i>Add Customers</a></li>
					<li><a href="../customer/showcustomer.php"><i class="fa fa-circle-o"></i>Show Customers</a></li>
				</ul>
				<li class="accordion">
					<a href="#"><i class="fa fa-shopping-cart"></i><span>Report</span></a>
				</li>
				<ul class="treeview-menu">
					<li><a href="../product/showproduct.php"><i class="fa fa-circle-o"></i>Product Views</a></li>
				</ul>
				<li class="accordion">
					<a href="#"><i class="fa fa-info"></i><span>Informations</span></a>
				</li>
				<ul class="treeview-menu">
					<li><a href="../Information/information.php"><i class="fa fa-circle-o"></i>Add Informations</a></li>
					<li><a href="../Information/information.php"><i class="fa fa-circle-o"></i>Show Informations</a></li>
				</ul>
			</ul>
	</div>
</aside>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {

      panel.style.maxHeight = panel.scrollHeight + 30 + "px";

    } 
  }
}

</script>
