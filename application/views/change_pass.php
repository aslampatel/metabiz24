<style>
    .irs-inner-page-heading.irs-layer-black.test {
      margin-top: 20px; 
      margin-bottom: -101px;
}
.register-section.sec-padd.new{
  margin-top: 117px; 
  margin-bottom: 29px;

}
</style>
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
          <h2><span><?php if($dashboard[0]->user_type=='1'){ echo "Customer"; }else{ "Merchant"; } ?></span>&nbsp;Profile </h2>
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
<section class="register-section sec-padd new" style="background-color:#F1F3FA;">
  <div class="container">
    <div class="row profile">
      <?php $this->load->view('dashboard_sidebar');?>
      <div class="col-sm-9">
        <div class="box">
          <div class="userfild_details"> 
            <!--<p class="userdate" style="padding:10px;"></p>-->
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php 
                    if($this->session->flashdata('success') !=""){
                    echo "<b style='color:#48c7ec;'>".$this->session->flashdata('success')."</b>";
                    }
                    ?>

					
                <form name="signup" action="<?=base_url();?>Profile/reset_pass" method="post" onSubmit="return password()">
                  <input type="hidden" id="org_pass" name="org_pass" value="<?php echo $dashboard[0]->password;?>">
                  <input type="hidden" id="result" value="<?php echo $dashboard[0]->password;?>">
                  <div class="join-the-club-forms01">
                    <div class="row">
                      <div class="col-sm-12">
                        <label class="hd">Old Password</label>
                        <input class="form-control" id="old_pass" name="old_pass" type="password" value="" placeholder="Enter Your Old Password*">
                        <div id="errorBox" style="color:#FF0000;"></div>
                      </div>
                      <div class="col-sm-12">
                        <label class="hd">New Password</label>
                        <input class="form-control" id="new_pass" name="new_pass" type="password" value="" placeholder="Enter Your New Password*">
                        <div id="errorBox1" style="color:#FF0000;"></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <label class="hd">Confirm password</label>
                        <input class="form-control" id="con_pass" value="" name="con_pass" type="password" placeholder="Confirm Your Password">
                        <div id="errorBox2" style="color:#FF0000;"></div>
                      </div>
                    </div>
                    <br/>
                    <div class="row">
                      <div class="col-sm-6">
                        <button class="btn-upper btn btn-primary checkout-page-button" type="submit" onclick="return Validate()" id="signup">Submit</button>
                      </div>
                    </div>
                  </div>
                </form>
                <script src="<?php echo base_url()?>userpanel/assets/js/md5.js"></script> 
                <script src="<?php echo base_url()?>userpanel/assets/js/demo.js"></script> 
                <script type="text/javascript">
		function password() {
		var org_pass = document.getElementById("org_pass").value;
		var old_pass = document.getElementById("result").value;
		var new_pass = document.getElementById("new_pass").value;
		var con_pass = document.getElementById("con_pass").value;
		// alert(old_pass);
		/*alert(org_pass);
		alert(old_pass);
		alert(new_pass);
		alert(con_pass);
		return false;*/
		/*if($("#input").val() == "" ){
		$("#input").focus();
		$("#input").css({'border-color' : '#F00'});
		$("#errorBox").html("Please Enter the Old Password");
		return false;
		}else{
		$("#errorBox").html("");
		}*/
		
		if (org_pass != old_pass) {
		//alert("Incorrect Old Password!!!");
		$("#errorBox").html("Incorrect Old Password!!!");
		$("#old_pass").focus();
		$("#old_pass").css({'border-color' : '#F00'});
		return false;
		}else{
		$("#errorBox").html("");
		}
		
		if($("#new_pass").val() == "" ){
		$("#new_pass").focus();
		$("#new_pass").css({'border-color' : '#F00'});
		$("#errorBox1").html("Please Enter the New Password");
		return false;
		}else{
		$("#errorBox1").html("");
		}
		
		
		if (new_pass != con_pass) {
		//alert("Password and Confirm password Does Not match!!!");
		$("#errorBox2").html("Password and Confirm password Does Not match!!!");
		$("#con_pass").focus();
		$("#con_pass").css({'border-color' : '#F00'});
		return false;
		}else{
		$("#errorBox2").html("");
		}	
		}
		</script> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="<?php echo base_url()?>userpanel/js/md5.js"></script> 
<script src="<?php echo base_url()?>userpanel/js/demo.js"></script> 
<script>
	function user_pass(){
		 
  		 	if($("#old_pass").val() == "" ){
			$("#old_pass").focus();
			$("#er1").html("Enter Your Current Password (*)");
			return false;
		}else{
			$("#er1").html("");
			}	
			var org_pass = document.getElementById("org_pass").value;
	        var old_pass = document.getElementById("result").value;
		
		if (org_pass != old_pass) {
	    $("#old_pass").focus();
		$("#er1").html("Incorrect Current Password!!!"); 
		return false;
		}else{
		$("#er1").html("");
		}	
			
	if($("#password").val() == "" ){
			$("#password").focus();
			$("#er2").html("Enter the Password (*)");
			return false;
		}else{
			$("#er2").html("");
			}
  
		if($("#con_pass").val() == "" ){
			$("#con_pass").focus();
			$("#er3").html("Enter the Confirm Password (*)");
			return false;
		}else{
			$("#er3").html("");
			}
			var password = $("#password").val();
			var con_pass = $("#con_pass").val();
			
			
		if(password != con_pass){
			$("#con_pass").focus();
			$("#er3").html("Password and  Confirm Password do not matched ! ");
			return false;
		}else{
			$("#er3").html("");
			}			
	 }
    </script>