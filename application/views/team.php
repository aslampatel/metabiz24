<style>
	.tree ul {
        padding-top: 20px;
        position: relative;
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
    }

.tree li {
  float: left;
  text-align: center;
  list-style-type: none;
  position: relative;
  padding: 20px 5px 0 5px;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
}

.tree li::before,
.tree li::after {
  content: '';
  position: absolute;
  top: 0;
  right: 50%;
  border-top: 1px solid #000;
  width: 50%;
  height: 20px;
}

.tree li::after {
  right: auto;
  left: 50%;
  border-left: 1px solid #000;
}

.tree li:only-child::after,
.tree li:only-child::before {
  display: none;
}

.tree li:only-child {
  padding-top: 0;
}

.tree li:first-child::before,
.tree li:last-child::after {
  border: 0 none;
}

.tree li:last-child::before {
  border-right: 1px solid #000;
  border-radius: 0 5px 0 0;
  -webkit-border-radius: 0 5px 0 0;
  -moz-border-radius: 0 5px 0 0;
}

.tree li:first-child::after {
  border-radius: 5px 0 0 0;
  -webkit-border-radius: 5px 0 0 0;
  -moz-border-radius: 5px 0 0 0;
}

.tree ul ul::before {
  content: '';
  position: absolute;
  top: 0;
  left: 50%;
  border-left: 1px solid #000;
  width: 0;
  height: 20px;
}

.tree li div {
  border: 1px solid #000;
  padding: 5px 10px;
  text-decoration: none;
  color: #000;
  font-family: arial, verdana, tahoma;
  font-size: 11px;
  display: inline-block;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
}

.tree li div:hover,
.tree li div:hover+ul li div {
  background: #c8e4f8;
  color: #000;
  border: 1px solid #94a0b4;
}

.tree li div:hover+ul li::after,
.tree li div:hover+ul li::before,
.tree li div:hover+ul::before,
.tree li div:hover+ul ul::before {
  border-color: #94a0b4;
}


@media screen and (max-width: 480px) {
    .sub_nav {
    float: right;
    position: relative;
    left: 91%;
    top: 5px !important;
}
.profile-content {
    overflow-x: scroll !important;
    width: 100%;
}
    .tree {
  display: flex;
  justify-content: center;
  overflow-x: auto; /* Add scrollbar when content overflows horizontally */
      margin-left: -120px;
}
.col-md-12.profile-usertitle-name.p-0 {
    width: max-content;
}

}	
		
		</style>

		<script>
			window.console = window.console || function (t) {};
		</script>
<!--page header section start-->
<section class="" style="background: url('<?= base_url(); ?>assets/img/header-bg-5.jpg')no-repeat center center / cover">
    <div class="section-lg bg-gradient-primary text-white section-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 col-lg-7">
                    <div class="page-header-content text-center">
                        <h1>Team View</h1>
                        <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                            <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Team View</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ($this->session->flashdata('email_sent') != '') { ?>
    <div class="alert alert-success alert-dismissable" style="padding:10px;">
        <button class="close" aria-hidden="true" data-dismiss="alert" type="button" style="right:0;"></button>
        <strong> <?php echo $this->session->flashdata('email_sent'); ?></strong>
    </div>
<?php } ?>

<section class="register-section sec-padd new" style="background-color:#F1F3FA;">
    <div class="container">
        <div class="clearfix"></div>
        <div class="row profile">
            <?php $this->load->view('dashboard_sidebar'); ?>
            <div class="col-md-9 p-0 bg-white">
                
                <div class="profile-content">
                    <!--Some user related content goes here...-->
                    <div class="col-md-12 profile-usertitle-name p-0">
                        <div class="tree">
                        	<ul>
                        	    <?php //pr($dashboard); ?>
                        	  <li>
                        		<div><?=$dashboard[0]->name; ?></div>
                        		<?=$totalTeamsUser; ?>
                        	  </li>
                        	</ul>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#file-2").change(function() {
            $("#uploadFileForm").submit();
        });

    });
</script>

<!-- Teachers Single End -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script>
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
</script> -->
<script>
    function copyToClipboard(link) {
        console.log('Copy link:', link);
        // ... rest of the code
        var tempInput = document.createElement('input');
        tempInput.setAttribute('value', link);
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);

        Swal.fire({
            title: 'Referral Code Copied',
            text: 'The Referral Code has been copied to the clipboard.',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    }

    function share(link) {
        console.log('Share link:', link);
        var baseUrl = '<?php echo base_url(); ?>'
        var currentUrl = baseUrl + 'signup/' + link;
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
    }
</script>
<script>
                            var splide = new Splide( '.splide' , {
  type    : 'loop',
  perPage : 1,
  autoplay: true,
});
                            splide.mount();
                        </script>