<main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>profile/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <h5 class="card-title">User Information</h5>
                <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name : </label>
                <div class="col-sm-10">
                    <?php echo $dashboard[0]->name ?>
                </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email : </label>
                    <div class="col-sm-10">
                        <?php echo $dashboard[0]->email ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone Number : </label>
                    <div class="col-sm-10">
                        <?php echo @$dashboard[0]->phone ?>
                    </div>
                </div>
                
                
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Upliner Name : </label>
                    <div class="col-sm-10">
                        <?php if (@$dashboard[0]->ref_user == 0) {
                        echo "Admin";
                        } else {
                        $query = $this->Generalmodel->show_data_id('user_register', $dashboard[0]->ref_user, 'id', 'get', '');
                        //  print_r($query); exit();
                        echo $query[0]->name;
                        } ?>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Unique Id : </label>
                    <div class="col-sm-10">
                        <?php echo @$dashboard[0]->ref_code; ?>
                        <button type="button" class="btn btn-outline-success " style="border: 1px solid green; margin-left: 17px; padding: 5px 10px;" id="copyButton" onclick="copyToClipboard(' <?php echo $dashboard[0]->ref_code ?>')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
                        </svg>
                        </button>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Unique Url : </label>
                    <div class="col-sm-10">
                        <?php echo base_url() . 'signup/' . $dashboard[0]->ref_code; ?>
                        <button type="button" class="btn btn-outline-danger" style="border: 1px solid red;margin-left: 19px;padding: 5px 10px;" id="share-button" onclick="share('<?php echo $dashboard[0]->ref_code ?>')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                            <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3" /></svg>
                        </button>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Refference Code : </label>
                    <div class="col-sm-10">
                        <?php echo @$dashboard[0]->registered_ref_code; ?>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Sponsered Code : </label>
                    <div class="col-sm-10">
                        <?php echo @$dashboard[0]->registered_spon_code ?>
                    </div>
                </div>

                <div class="text-left">
                  <a href="<?= base_url(); ?>profile/editprofile" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

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
      title: 'Unique Id Copied',
      text: 'The Unique Id has been copied to the clipboard.',
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