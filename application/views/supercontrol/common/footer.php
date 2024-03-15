</div><!--End wrapper-->
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url();?>admin-assets/js/jquery.min.js"></script>
<?php 
if (!empty($js_files)) {
	foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
	<?php endforeach; 
}?>
<script src="<?php echo base_url();?>admin-assets/js/popper.min.js"></script>
<script src="<?php echo base_url();?>admin-assets/js/bootstrap.min.js"></script>
<!-- simplebar js -->
<script src="<?php echo base_url();?>admin-assets/plugins/simplebar/js/simplebar.js"></script>
<!-- waves effect js -->
<script src="<?php echo base_url();?>admin-assets/js/waves.js"></script>
<!-- sidebar-menu js -->
<script src="<?php echo base_url();?>admin-assets/js/sidebar-menu.js"></script>
<!-- Custom scripts -->
<script src="<?php echo base_url();?>admin-assets/js/app-script.js"></script>
<script src="<?php echo base_url();?>admin-assets/js/dev-js.js"></script>

<script type="text/javascript">
	$(function(){
	  $("#field-category_name").change(function(){
	  var slugtext = $(this).val();
	  str = slugtext.replace(/\s+/g, '-').toLowerCase();
	   $("#field-category_slug").val(str);
	  });
	})
</script>

<script type="text/javascript">
	$(function(){
	  $("#field-doctor_name").change(function(){
	  var slugtext = $(this).val();
	  str = slugtext.replace(/\s+/g, '-').toLowerCase();
	  str = str.replace('&', '-');
	  str = str.replace('.', '-');
	   $("#field-doc_slug").val(str);
	  });
	})
</script>

<script type="text/javascript">
	$(function(){
	  $("#field-service_name").change(function(){
	  var slugtext = $(this).val();
	  str = slugtext.replace(/\s+/g, '-').toLowerCase();
	   $("#field-service_slug").val(str);
	  });
	})
</script>

<script type="text/javascript">
	$(function(){
	  $("#field-specialize_name").change(function(){
	  var slugtext = $(this).val();
	  str = slugtext.replace(/\s+/g, '-').toLowerCase();
	   $("#field-slug").val(str);
	  });
	})
</script>

<script type="text/javascript">
	$(function(){
	  $("#field-news_title").change(function(){
	  var slugtext = $(this).val();
	  str = slugtext.replace(/\s+/g, '-').toLowerCase();
	   $("#field-slug").val(str);
	  });
	})
</script>

<script type="text/javascript">
	$(function(){
	  $("#field-blog_title").change(function(){
	  var slugtext = $(this).val();
	  str = slugtext.replace(/\s+/g, '-').toLowerCase();
	   $("#field-slug").val(str);
	  });
	})
</script>
<script type="text/javascript">
	$(function(){
	  $("#field-blog_publish_date").change(function(){
	  var slugtext = $(this).val();
	  str = slugtext.substring(slugtext.length - 4);
	   $("#field-year").val(str);
	  });
	})
</script>
</body>
</html>