



<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumb-->
		<div class="row pt-2 pb-2">
			<div class="col-sm-12">
				<h4 class="page-title"><?php echo $this->router->fetch_class(); ?></h4>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>supercontrol/<?php echo $this->router->fetch_class(); ?>"><?php echo $this->router->fetch_class(); ?></a></li>
					<li class="breadcrumb-item"><a ><?php if($this->router->fetch_method()=='index') echo "Manage " .$this->router->fetch_class();else echo $this->router->fetch_method();?></a></li>
				</ol>
			</div>
		</div>
		<!-- End Breadcrumb-->
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<?php echo $output; ?>
					</div>
				</div>
			</div>
		</div><!-- End Row-->
	</div>
</div>
</div><!--End Row-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$( document ).ready(function() {
		$(".sub_category_form_group").hide();

});
$("form .catagory_form_group").click(function() {
    var cat = $("#field-catagory").val();
    //alert(year);
    if (cat) {
        $.ajax({
            url: '<?=base_url();?>supercontrol/service/sub_cat_load',
            data: {
                cat: cat,
            },
            async: 'true',
            cache: 'false',
            type: 'post',
            error: function(error) {
               alert('error');
            },
            success: function(data) {
				if(data){
					$(".sub_category_form_group").show();

                $(".sub_category_form_group").html(data);
				}else{
					$(".sub_category_form_group").hide();

				}
            }
        });
    }
});
</script>
