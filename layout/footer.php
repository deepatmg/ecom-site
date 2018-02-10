<footer class="main-footer">
	<strong>Copyright &copy; 2017 <span>Deepa Tamang</span></strong> Shop First
</footer>

<!-- script for full length sidebar -->
<script type="text/javascript">
	jQuery(document).ready(function(){
		/*var window_height = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);*/
		var body_height = jQuery(document.body).height();
		/*var content = jQuery("#content-wrapper");
		var foot = jQuery("#main-footer");
		if(body_height < window_height){
			differ = (window_height - body_height);*/
			content_height = body_height;
			jQuery("#sidediv").css("min-height", content_height+"px");
		/*}else {
			content_height = body_height;
			jQuery("#sidediv").css("min-height", content_height+"px");	
		}*/
	});
</script>
<script>
	$(window).resize(function () {
		/*var window_height = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);*/
		var body_height = jQuery(document.body).height();
		/*var content = jQuery("#content-wrapper");
		var foot = jQuery("#main-footer");
		var mainhead = jQuery("#main-header");
		if(body_height < window_height){
			differ = (window_height - body_height);*/
			content_height = body_height;
			jQuery("#sidediv").css("min-height", content_height+"px");
		/*}else {
			content_height = content.height()+51;
			jQuery("#sidediv").css("min-height", content_height+"px");	
		}*/
	});
</script>











