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
.btn-file{
    background-color:#0099FF !important;
    color:#FFF;
}
</style>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>profile/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>profile/profile">Profile</a></li>
          <li class="breadcrumb-item">Edit Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php if($dashboard[0]->status=='Active'){ echo "Customer"; }else{ "Merchant"; } ?> Information</h5>
                <?php 
                    if($this->session->flashdata('success') !=""){
                        echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';
                    }
                ?>
                <form name="signup" action="<?=base_url();?>profile/edit_profile" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="bid" value="<?=$this->uri->segment(3)?>">                    
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">Image : </label>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                            <?php
                                if($dashboard[0]->image=='')
                                {
                            ?>
                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                            <?php
                                }
                                else
                                {
                            ?>
                                <img src="<?php echo base_url()?>uploads/<?php echo $dashboard[0]->image;?>" alt="" />
                            <?php }?>
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                            <div>
                                <span class="btn default btn-file">
                                    <span class="fileinput-new"> Select image </span>
                                    <span class="fileinput-exists"> Change </span>
                                    <?php
                                        $file = array('type' => 'file','name' => 'userfile','class'=>'btn-file','onchange' => 'readURL(this);');
                                        echo form_input($file);
                                    ?>
                                </span>
                                <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput" style="display:none;"> Remove </a>
                            </div>
                        </div>
                        <div class="clearfix margin-top-10" style="color:#0099FF;">
                            <span class="label label-danger">Format</span> jpg, jpeg, png, gif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">Name : </label>
                        <input type="text" name="name" id="full_name"  class="form-control" value="<?php echo $dashboard[0]->name;?>"/>
                        <p id="er1" class="formerr"></p>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">Email : </label>
                        <input type="text" name="email" id="email"  class="form-control" value="<?php echo $dashboard[0]->email;?>" readonly/>
                        <p id="er2" class="formerr"></p>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-form-label">Phone Number : </label>
                        <input type="text" name="phone"  id="phone" class="form-control" value="<?php echo $dashboard[0]->phone;?>"/>
                        <p id="er3" class="formerr"></p>
                    </div>                
                
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-form-label">Unique Id : </label>
                        <input type="text" name="ref_code" id="company_name"  class="form-control mbx-1" value="<?php echo $dashboard[0]->ref_code;?>" readonly>
                    </div>
                
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-form-label">Bank Name : </label>
                        <input type="text" name="bank_name" id="bank_name"  class="form-control mbx-1" value="<?php echo $dashboard[0]->bank_name;?>">
                    </div>
                
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-form-label">Account Number : </label>
                        <input type="text" name="account_number" id="account_number"  class="form-control mbx-1" value="<?php echo $dashboard[0]->account_number;?>">
                    </div>
                
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-form-label">IFSC Code : </label>
                        <input type="text" name="ifsc_code" id="ifsc_code"  class="form-control mbx-1" value="<?php echo $dashboard[0]->ifsc_code;?>">
                    </div>
                    
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-form-label">Account Holder Name : </label>
                        <input type="text" name="account_holder_name" id="account_holder_name"  class="form-control mbx-1" value="<?php echo $dashboard[0]->account_holder_name;?>">
                    </div>
                    
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-form-label">Branch Name : </label>
                        <input type="text" name="branch_name" id="branch_name"  class="form-control mbx-1" value="<?php echo $dashboard[0]->branch_name;?>">
                    </div>

                    <div class="text-left">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
            </div>
          </div>

        </div>
      </div>
    </section>

</main><!-- End #main -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
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