



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
                <div class="alert alert-success1" style="background-color:#98E0D5;">
                        <strong style="color:#063;"><span style="font-size:26px;">Available Balance is:</span><b style="font-size:36px;">₹<?= round(@$bal); ?></b></strong>
                        <!-- <button id="withdrawalBtn" style="font-size:26px;color: #ff2020;float: right;">WITHDRAWAL</button> -->
                    </div>
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
$("form .type_form_group").click(function() {
    var type = $("#field-type").val();
   
    if (type) {
      if(type == "Image"){
		$(".video_form_group").hide();
		$(".image_form_group").show();

	  }else{
		$(".image_form_group").hide();

		$(".video_form_group").show();

	  }
    }
});

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
	// function copyToClipboard(link) {
    //     // Replace 'yourShareableLink' with the actual link or variable containing the link
    //     var shareableLink = 'yourShareableLink';
        
    //     // Create a temporary input element
    //     var tempInput = document.createElement('input');
    //     tempInput.value = shareableLink;
        
    //     // Append the input element to the DOM
    //     document.body.appendChild(tempInput);
        
    //     // Select the content of the input element
    //     tempInput.select();
    //     tempInput.setSelectionRange(0, 99999); // For mobile devices
        
    //     // Copy the selected text
    //     document.execCommand('copy');
        
    //     // Remove the temporary input element
    //     document.body.removeChild(tempInput);
        
    //     // You can add additional logic or user feedback here
    //     alert('Link copied to clipboard: ' + shareableLink);
    // }
        $(document).ready(function() {
			// function copyToClipboard(link){
            // // $("#copyButton").on("click", function() {
            //     // Select the text in the input field
            //     $("#shareLinkInput").select();
                
            //     // Copy the selected text to the clipboard
            //     document.execCommand("copy");

            //     // Display success message
            //     alert('Link copied to clipboard!');
            // // });
			// }
        });
		function copyToClipboard(link){
			var baseUrl = '<?php echo base_url(); ?>'
			// alert()
                var currentUrl =link;
                var tempInput = document.createElement('input');
                tempInput.setAttribute('value', currentUrl);
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand('copy');
                document.body.removeChild(tempInput);
                Swal.fire({
                title: 'Referal Code Copied',
                text: 'The Referal Code has been copied to the clipboard.',
                icon: 'success',
                confirmButtonText: 'OK'
            });
            }
		// Add an event listener to the share button
        // document.getElementById('share-button').addEventListener('click', function () {
        //     event.preventDefault();
		function share(link){
			var baseUrl = '<?php echo base_url(); ?>'
			var currentUrl = baseUrl+'signup/'+link;
            if (navigator.share) {
                navigator.share({
                    title: 'Shared Title',
                    text: 'Shared Text',
                    url: currentUrl 
                })
                .then(() => {
                    console.log('Successfully shared');
                })
                .catch((error) => {
                    console.error('Error sharing:', error);
                });
            } else {
                copyUrl();
            }
        };
    </script>