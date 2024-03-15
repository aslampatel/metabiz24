<style>
  .irs-inner-page-heading.irs-layer-black.test {
    margin-top: 60px;
    margin-bottom: -101px;
  }


  .register-section.sec-padd.new {
    margin-top: 100px;
    margin-bottom: 29px;

  }

  @media only screen and (max-width: 600px) {
    .irs-inner-page-heading.irs-layer-black.test {
      margin-top: 158px;
      margin-bottom: -101px;
    }
  }
</style>

<!--page header section start-->
<section class="" style="background: url('<?= base_url(); ?>assets/img/header-bg-5.jpg')no-repeat center center / cover">
  <div class="section-lg bg-gradient-primary text-white section-header">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
          <div class="page-header-content text-center">
            <h1>Dashboard</h1>
            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
              <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
              <?php if ($dashboard[0]->user_type == 'Active') {
                echo "User";
              } else {
                echo "User";
              } ?>
            </span>&nbsp;Profile </h2>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<style>
  strong {
    color: #000;
  }
</style>

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
      <div class="col-md-9">
        <div class="profile-content">
          <!--Some user related content goes here...-->
          <div class="col-md-12 profile-usertitle-name">
            <table class="table  table-hover cu_table" width="100%" cellspacing="0" cellpadding="0" border="0">
              <tr>
                <th class="thheader" colspan="2" style="">User Information</th>
              </tr>
            </table>
            <table class="table table-bordered table-hover cu_table" width="100%" cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td><strong>Name:</strong></td>
                  <td><?php echo $dashboard[0]->name ?></td>
                </tr>
                <tr>
                  <td><strong>Email:</strong></td>
                  <td><?php echo $dashboard[0]->email ?></td>
                </tr>
                <tr>
                  <td><strong>Phone Number:</strong></td>
                  <td><?php echo @$dashboard[0]->phone ?></td>
                </tr>
                <tr>
                  <td><strong>Upliner Name:</strong></td>
                  <td>
                    <?php if (@$dashboard[0]->ref_user == 0) {
                      echo "Admin";
                    } else {
                      $query = $this->Generalmodel->show_data_id('user_register', $dashboard[0]->ref_user, 'id', 'get', '');
                      //  print_r($query); exit();
                      echo $query[0]->name;
                    } ?>
                  </td>
                </tr>
                <tr>
                  <td><strong>Unique Id:</strong></td>
                  <td><?php echo @$dashboard[0]->ref_code; ?>
                    <button type="button" class="btn btn-outline-success " style="border: 1px solid green; width: 9%; height: 4% !important;margin-left: 17px; padding: 3px;" id="copyButton" onclick="copyToClipboard(' <?php echo $dashboard[0]->ref_code ?>')">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
                      </svg>
                    </button>
                    
                  </td>
                </tr>
                <tr>
                  <td><strong>Unique Url:</strong></td>
                  <td><?php echo base_url() . 'signup/' . $dashboard[0]->ref_code; ?>
                  <button type="button" class="btn btn-outline-danger" style="border: 1px solid red; width: 9%;height: 0% !important;margin-left: 19px;padding: 3px;" id="share-button" onclick="share('<?php echo $dashboard[0]->ref_code ?>')">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                        <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3" />
                      </svg>
                    </button></td>
                </tr>
                <tr>
                  <td><strong>Refference code:</strong></td>
                  <td><?php echo @$dashboard[0]->registered_ref_code; ?>
                    <!-- <button type="button" class="btn btn-outline-success " style="border: 1px solid green; width: 9%; height: 4% !important;margin-left: 17px; padding: 3px;" id="copyButton" onclick="copyToClipboard(' <?php echo $dashboard[0]->ref_code ?>')">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
                      </svg>
                    </button> -->
                  </td>
                </tr>
                
                <tr>
                  <td><strong>Sponsered Code:</strong></td>
                  <td><?php echo @$dashboard[0]->registered_spon_code ?></td>
                </tr>



                <tr>
                  <td><a href="<?= base_url(); ?>profile/editprofile"><button class="btn btn-primary">Edit Profile</button></a></td>

                </tr>

              </tbody>
            </table>
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