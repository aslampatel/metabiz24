<!-- Include jQuery and DataTables scripts only once -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
<script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>



<style>
    .irs-inner-page-heading.irs-layer-black.test {
        margin-top: 29px;
        margin-bottom: -101px;
    }

    .register-section.sec-padd.new {
        margin-top: 117px;
        margin-bottom: 29px;

    }
</style>
<!--page header section start-->
<section class="" style="background: url('<?= base_url(); ?>assets/img/header-bg-5.jpg')no-repeat center center / cover">
    <div class="section-lg bg-gradient-primary text-white section-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-center">
                        <h1>Wallet</h1>
                        <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                            <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                <!-- <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li> -->

                                <!-- <li class="breadcrumb-item active" aria-current="page">Edit Profile</li> -->
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
        <strong>
            <?php echo $this->session->flashdata('email_sent'); ?>
        </strong>
    </div>
<?php } ?>

<section class="register-section sec-padd mt-5" style="background-color:#F1F3FA;">
    <div class="container">
        <div class="clearfix"></div>
        <div class="row profile">
            <?php $this->load->view('dashboard_sidebar'); ?>
            <div class="col-md-9">
                <div class="profile-content">
                    <div class="col-md-12 profile-usertitle-name">
                       
                  
                        <form id="depositForm" action="<?=base_url();?>profile/process_deposit" method="POST">
                            <!-- <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div> -->
                            <div class="form-group">
                                <label for="amount">Amount:</label>
                                <input type="number" class="form-control" id="amount" name="amount" <?php if(empty($wallet)){ ?> value="500" readonly <?php } ?> min="0" step="0.01" required>
                            </div>
                            <!--<div class="form-group">-->
                            <!--    <label for="paymentMethod">Payment Method:</label>-->
                            <!--    <select class="form-control" id="paymentMethod" name="paymentMethod" required>-->
                            <!--        <option value="">Select Payment Method</option>-->
                            <!--        <option value="credit_card">Razerpay</option>-->
                            <!--        <option value="paypal">PayPal</option>-->
                                    <!-- Add more options as needed -->
                            <!--    </select>-->
                            <!--</div>-->
                            <div class="form-group">
                                <label for="paymentMethod">Remark:</label>
                                <textarea class="form-control" name="note" id="" cols="30" rows="7"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Deposit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Initialize DataTables -->
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#walletTable').DataTable();
    });
</script>
