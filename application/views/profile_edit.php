
<style>
    .irs-inner-page-heading.irs-layer-black.test {
      margin-top: 29px; 
      margin-bottom: -101px;
}
.register-section.sec-padd.new{
  margin-top: 117px; 
  margin-bottom: 29px;

}
.mbx-1 {
    margin-bottom: 1rem !important;
}
</style>
    <!--page header section start-->
    <section class=""
        style="background: url('<?=base_url();?>assets/img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="section-lg bg-gradient-primary text-white section-header">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-center">
                            <h1>Edit Profile</h1>
                            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                    <!-- <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li> -->

                                    <!-- <li class="breadcrumb-item active" aria-current="page">Edit Profile</li> -->
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="irs-inner-page-heading irs-layer-black test">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="irs-inner-heading">
          <h2><span>
            <?php if($dashboard[0]->status=='Active'){ echo "Customer"; }else{ "Merchant"; } ?>
            </span>&nbsp;Profile </h2>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Teachers Single Start -->

<style>
.btn-file{
	background-color:#0099FF !important;
	color:#FFF;
	}
</style>
<section class="register-section sec-padd new" style="background-color:#F1F3FA;"">
<div class="container">
<div class="row profile">
<?php $this->load->view('dashboard_sidebar');?>
<div class="col-sm-9">
<div class="box">
<div class="userfild_details">
<!--<p class="userdate" style="padding:10px;"></p>-->
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<span class="wpcf7-form-control-wrap subject">
<?php 
                    if($this->session->flashdata('success') !=""){
                    echo "<b style='color:#0099FF;'>".$this->session->flashdata('success')."</b>";
                    }
                    ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
<script type="text/jscript">
					$(document).ready(function () {
					$("#phone").keypress(function (e) {
					if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
					$("#er3").html("Digits Only").show().fadeOut("slow");
					return false;
					}
					});
					});
                </script>
<form name="signup" action="<?=base_url();?>Profile/edit_profile" method="post" enctype="multipart/form-data">
<input type="hidden" name="bid" value="<?=$this->uri->segment(3)?>">
<div class="form-group">
  <div class="form-group last">
    <label class="control-label col-md-3" style="color:#0099FF;">Image</label>
    <div class="col-md-12">
      <div class="fileinput fileinput-new" data-provides="fileinput">
        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
          <?php if($dashboard[0]->image==''){ ?>
          <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
          <?php }else{?>
          <img src="<?php echo base_url()?>uploads/member/<?php echo $dashboard[0]->image;?>" alt="" />
          <?php }?>
        </div>
        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
        <div> <span class="btn default btn-file"> <span class="fileinput-new"> Select image </span> <span class="fileinput-exists"> Change </span>
          <?php
                                                                $file = array('type' => 'file','name' => 'userfile','class'=>'btn-file','onchange' => 'readURL(this);');
                                                                echo form_input($file);
                                                                ?>
          </span> <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a> </div>
      </div>
      <div class="clearfix margin-top-10" style="color:#0099FF;"> <span class="label label-danger">Format</span> jpg, jpeg, png, gif </div>
    </div>
  </div>
  <div class="custom_file_upload" style="margin-left:5px;">
    <div class="file_upload"> </div>
  </div>
</div>
</span>
</div>
</div>
<div class="irs-teacher-single-col">
  <div class="irs-teacher-biography">
    <label> Name : </label>
    <input type="text" name="name" id="full_name"  class="form-control" value="<?php echo $dashboard[0]->name;?>"/>
    <p id="er1" class="formerr"></p>
    <label> Email :</label>
    <input type="text" name="email" id="email"  class="form-control" value="<?php echo $dashboard[0]->email;?>" readonly/>
    <p id="er2" class="formerr"></p>
    <label> Phone : </label>
    <input type="text" name="phone"  id="phone" class="form-control" value="<?php echo $dashboard[0]->phone;?>"/>
    <p id="er3" class="formerr"></p>
    <label> Unique Id : </label>
    <input type="text" name="ref_code" id="company_name"  class="form-control mbx-1" value="<?php echo $dashboard[0]->ref_code;?>" readonly>
    <label> Bank Name : </label>
    <input type="text" name="bank_name" id="bank_name"  class="form-control mbx-1" value="<?php echo $dashboard[0]->bank_name;?>">
    <label> Account Number : </label>
    <input type="text" name="account_number" id="account_number"  class="form-control mbx-1" value="<?php echo $dashboard[0]->account_number;?>">
    <label> IFSC Code : </label>
    <input type="text" name="IFSC_code" id="IFSC_code"  class="form-control mbx-1" value="<?php echo $dashboard[0]->IFSC_code;?>">
    <label> Account Holder Name : </label>
    <input type="text" name="account_holder_name" id="account_holder_name"  class="form-control mbx-1" value="<?php echo $dashboard[0]->account_holder_name;?>">
    <label> Branch Name : </label>
    <input type="text" name="branch_name" id="branch_name"  class="form-control mbx-1" value="<?php echo $dashboard[0]->branch_name;?>">
    <!-- <label> Sponsered Code : </label>
    <input type="text" name="spon_code" id="industry"  class="form-control" value="<?php echo $dashboard[0]->spon_code;?>" readonly> -->
    <br/>
    <br/>
    <div class="form-group">
      <button  class="saving-price btn btn-primary" type="submit">Submit</button>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!--<script type="text/javascript">
$(document).ready(function() {
	$("#file-2").change(function() {
		$("#uploadFileForm").submit();
	});

});
</script>--> 
<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
</div>
</div>
</section>
<!-- Teachers Single End --> 
<script>
	function user_reg(){
		var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
		var formemail = $("#email").val();
		
		if($("#full_name").val() == "" ){
			$("#full_name").focus();
			$("#er1").html("Enter your Full Name (*)");
			return false;
		}else{
			$("#er1").html("");
			}
  		
		
			
		if($("#email").val() == "" ){
			$("#email").focus();
			$("#er2").html("Enter Email (*)");
			return false;
		}
		if(!emailRegex.test(formemail)){
			$("#email").focus();
			$("#er2").html("Please Enter The Valid Email (*)");
			return false;
		}else{
			$("#er2").html("");
			}
			
		if($("#phone").val() == "" ){
			$("#phone").focus();
			$("#er3").html("Enter Your Phone Number (*)");
			return false;
		}else{
			$("#er3").html("");
			}	
			
 }
			</script>