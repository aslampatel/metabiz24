<link rel="stylesheet" href="<?= base_url(); ?>userpanel/css/style2.css">
<?php
$settings = $this->Generalmodel->show_data_id('settings', '', '', 'get', '');
//  print_r($settings); exit;
?>

<style>
  .nav li {
    float: left;
    width: 100%;
    padding: 10px !important;
  }

  a,
  .text-action {
    color: #ffffff;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
  }

  .profile-userpic img {
    /* width: 250px; */
    height: 250px;
  }

  .sub_nav {
    display: none;
  }

  @media only screen and (max-width: 600px) {
      .col-md-12.text-right {
            text-align: center !important;
        }
    .sub_nav {
      display: block;
    }

    .irs-inner-page-heading.irs-layer-black.test {
      margin-top: 30px;
      margin-bottom: -101px;
    }

    .profile-userpic img {
      width: 100%;
      height: 300px;
    }

    .profile-sidebar {
      display: none;
    }

    .sub_nav {
        float: right;
        position: relative;
        /* left: 91%; */
        top: 3px;
    }
    .register-section.sec-padd.new {
        margin-top: 0;
        margin-bottom: 0;
    }
    .text.text-right {
        font-size: 14px;
    }
  }
  .section-header {
     position: relative;
        padding-top: 6rem;
         padding-bottom: 0; 
    }
    .register-section.sec-padd.new {
    margin-top: 0;
    margin-bottom: 0;
}
</style>
<style>
  #whatsapp-button {
    position: fixed;
    bottom: 96px;
    right: 20px;
    z-index: 1000;
  }

  div#whatsapp-button i {
    font-size: 34px;
  }

  div#whatsapp-button a {
    padding: 9px 12px;
    border-radius: 54%;
  }
</style>
<div id="whatsapp-button">
  <a href="https://wa.me/<?= $settings[0]->whatsapp_number; ?>" target="_blank" class="btn btn-success">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>
<div class="col-md-12 text-center">
  <p class="text-primery"><b>Referral Link: </b>
    <?php echo base_url() . 'signup/' . $dashboard[0]->ref_code; ?>
    <button type="button" class="btn btn-outline-danger" style="border: 1px solid red; width: 9%;height: 0% !important;margin-left: 19px;padding: 3px;" id="share-button" onclick="copyToClipboard('<?php echo base_url() . 'signup/' . $dashboard[0]->ref_code; ?>')">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
      </svg>
    </button>
  </p>
</div>
<div class="sub_nav">
  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list"
    viewBox="0 0 16 16" onclick="showSavNav()">
    <path fill-rule="evenodd"
      d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
  </svg>
</div>
<div class="col-md-3 p-0 mb-2">
  <div class="profile-sidebar" style="background-image: linear-gradient(to right, #901b64 , #2e3a81); padding: 10px;">
    <!-- SIDEBAR USERPIC -->
    <div class="profile-userpic">
      <?php if ($dashboard[0]->image == '') { ?>
        <img style="" src="<?php echo base_url() ?>uploads/nopic.jpg" class="img-responsive" alt="">
      <?php } else { ?>
        <img style="" src="<?php echo base_url() ?>uploads/<?php echo $dashboard[0]->image; ?>" class="img-responsive"
          alt="" />
      <?php } ?>
      <!--<img src="" class="img-responsive" alt="" src="<?php echo base_url() ?>userpanel/images/noimage.jpg"/>-->
    </div>
    <!-- END SIDEBAR USERPIC -->
    <!-- SIDEBAR USER TITLE -->
    <div class="profile-usertitle">
      <div class="profile-usertitle-name" style="color: #fff; padding: 10px;">Wellcome,
        <?php echo $dashboard[0]->name ?>

      </div>

    </div>

    <!-- END SIDEBAR BUTTONS -->
    <!-- SIDEBAR MENU -->
    <div class="profile-usermenu" style="color: yellow;">
      <ul class="nav">
        <li class="active"> <a href="<?= base_url(); ?>profile/dashboard"> <i class="fa fa-user" aria-hidden="true"></i>
            Dashboard </a> </li>
        <li class="active"> <a href="<?= base_url(); ?>profile/profile"><svg xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
              <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
            </svg></i> Profile </a> </li>

        <li> <a href="<?= base_url(); ?>profile/team"> <i class="fa fa-unlock-alt" aria-hidden="true"></i> Team View
          </a> </li>
        <li class="active"> <a href="<?= base_url(); ?>profile/wallet">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet"
              viewBox="0 0 16 16">
              <path
                d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268M1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1" />
            </svg>
            Wallet </a> </li>
        <li> <a href="<?= base_url(); ?>profile/deposit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16">
              <path
                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1z" />
            </svg>
            Deposit </a> </li>
        <!-- <li> <a href="<?= base_url(); ?>profile/editprofile"> <i class="fa fa-pencil" aria-hidden="true"></i> Edit profile </a> </li> -->
        <li> <a href="<?= base_url(); ?>profile/changepassword"> <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            Change password </a> </li>
        <!-- <li> <a href="<?= base_url(); ?>profile/order_tracking" > <i class="fa fa-unlock-alt" aria-hidden="true"></i> Track Order </a> </li> -->
        <!-- <li> <a href="<?= base_url(); ?>profile/members" > <i class="fa fa-unlock-alt" aria-hidden="true"></i> My Members </a> </li> -->
        <!--<li> <a href="<?= base_url(); ?>profile/wallet" > <i class="fa fa-unlock-alt" aria-hidden="true"></i> My Wallet </a> </li>-->
        <li> <a href="<?= base_url(); ?>logout"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout </a> </li>
      </ul>
    </div>
    <!-- END MENU -->
  </div>
  
</div>

<script>
  var statusSabNav = 0;
  function showSavNav() {
    if (statusSabNav == 0) {
      $(".profile-sidebar").show();
      statusSabNav = 1;
    } else {
      $(".profile-sidebar").hide();
      statusSabNav = 0;
    }
  }
  

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
      title: 'Referral Link Copied',
      text: 'The Referral Link has been copied to the clipboard.',
      icon: 'success',
      confirmButtonText: 'OK'
    });
  }
</script>