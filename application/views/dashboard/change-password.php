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
      <h1>Change Password</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>profile/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item">Change Password</li>
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
                <form name="signup" action="<?=base_url();?>Profile/reset_pass" method="post" onSubmit="return password()">
                  <input type="hidden" id="org_pass" name="org_pass" value="<?php echo $dashboard[0]->password;?>">
                  <input type="hidden" id="result" value="<?php echo $dashboard[0]->password;?>">
                    <input type="hidden" name="bid" value="<?=$this->uri->segment(3)?>">                    
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">Old Password : </label>
                        <input type="text" name="old_pass" id="old_pass"  class="form-control" placeholder="Enter Old New Password*"/>
                        <div id="errorBox" style="color:#FF0000;"></div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-form-label">New Password : </label>
                        <input class="form-control" id="new_pass" name="new_pass" type="password" value="" placeholder="Enter Your New Password*">
                        <div id="errorBox1" style="color:#FF0000;"></div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-form-label">Confirm password : </label>
                        <input class="form-control" id="con_pass" value="" name="con_pass" type="password" placeholder="Confirm Your Password">
                        <div id="errorBox2" style="color:#FF0000;"></div>
                    </div>                
                
                    <div class="text-left">
                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </div>
            </div>
          </div>

        </div>
      </div>
    </section>

</main>
<script src="<?php echo base_url()?>userpanel/assets/js/md5.js"></script> 
<script src="<?php echo base_url()?>userpanel/assets/js/demo.js"></script> 
<script type="text/javascript">
    function password()
    {
		var org_pass = document.getElementById("org_pass").value;
		var old_pass = document.getElementById("result").value;
		var new_pass = document.getElementById("new_pass").value;
		var con_pass = document.getElementById("con_pass").value;
		
		if (org_pass != old_pass) 
        {
		    //alert("Incorrect Old Password!!!");
		    $("#errorBox").html("Incorrect Old Password!!!");
            $("#old_pass").focus();
            $("#old_pass").css({'border-color' : '#F00'});
            return false;
		}
        else{
		    $("#errorBox").html("");
		}
		
		if($("#new_pass").val() == "" )
        {
            $("#new_pass").focus();
            $("#new_pass").css({'border-color' : '#F00'});
            $("#errorBox1").html("Please Enter the New Password");
            return false;
		}else{
		    $("#errorBox1").html("");
		}
				
		if (new_pass != con_pass) 
        {
		    //alert("Password and Confirm password Does Not match!!!");
            $("#errorBox2").html("Password and Confirm password Does Not match!!!");
            $("#con_pass").focus();
            $("#con_pass").css({'border-color' : '#F00'});
            return false;
		}
        else{
		    $("#errorBox2").html("");
		}
    }
</script> 
<script src="<?php echo base_url()?>userpanel/js/md5.js"></script> 
<script src="<?php echo base_url()?>userpanel/js/demo.js"></script> 
<script>
	function user_pass()
    {
        if($("#old_pass").val() == "" )
        {
			$("#old_pass").focus();
			$("#er1").html("Enter Your Current Password (*)");
			return false;
		}
        else{
			$("#er1").html("");
		}	
		var org_pass = document.getElementById("org_pass").value;
	    var old_pass = document.getElementById("result").value;
		
		if (org_pass != old_pass)
        {
	        $("#old_pass").focus();
		    $("#er1").html("Incorrect Current Password!!!"); 
		    return false;
		}
        else
        {
		    $("#er1").html("");
		}	
	    if($("#password").val() == "" )
        {
			$("#password").focus();
			$("#er2").html("Enter the Password (*)");
			return false;
		}
        else{
			$("#er2").html("");
		}
  
		if($("#con_pass").val() == "" )
        {
			$("#con_pass").focus();
			$("#er3").html("Enter the Confirm Password (*)");
			return false;
		}
        else
        {
			$("#er3").html("");
		}
		var password = $("#password").val();
		var con_pass = $("#con_pass").val();
		//	
		if(password != con_pass)
        {
			$("#con_pass").focus();
			$("#er3").html("Password and  Confirm Password do not matched ! ");
			return false;
		}
        else
        {
			$("#er3").html("");
		}			
	 }
</script>