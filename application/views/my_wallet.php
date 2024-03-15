<!-- Include jQuery and DataTables scripts only once -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>



<style>
    .irs-inner-page-heading.irs-layer-black.test {
      margin-top: 29px; 
      margin-bottom: -101px;
}
.register-section.sec-padd.new{
  margin-top: 117px; 
  margin-bottom: 29px;

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
                            <h1>Wallet</h1>
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
<?php if ($this->session->flashdata('email_sent') != '') { ?>
    <div class="alert alert-success alert-dismissable" style="padding:10px;">
        <button class="close" aria-hidden="true" data-dismiss="alert" type="button" style="right:0;"></button>
        <strong> <?php echo $this->session->flashdata('email_sent'); ?></strong>
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
                        <div class="alert alert-success1" style="background-color:#98E0D5;">
                            <strong style="color:#063;"><span style="font-size:26px;">Available Balance is:</span><b style="font-size:26px;">₹<?= round(@$bal); ?></b></strong>
                            <button id="withdrawalBtn" style="font-size:26px;color: #ff2020;float: right;">WITHDRAWAL</button>
                        </div>
                        <table id="walletTable" class="table table-striped table-hover" width="100%" cellspacing="0" cellpadding="0" border="0">
                            <thead>
                                <tr>
                                    <th colspan="6">
                                        <h3 class="text-dark text-left" style="text-align: left;">Wallet Statement</h3>
                                    </th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <!-- <th>Ballance</th> -->
                                    <th>Note</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($history as $value) { ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $value->date; ?></td>
                                        <td><strong><?= $value->amount; ?></strong></td>
                                        <!-- <td><strong><?= $value->ballance; ?></strong></td> -->
                                        <td><?= empty($value->note) ? "_ _ _" : $value->note; ?></td>
                                        <td class="<?php if ($value->type != 'Credit') { ?> text-danger<?php } else {
                                                        echo 'text-success';
                                                    } ?>"><?= $value->type; ?></td>
                                    </tr>
                                    <?php $i++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal" id="withdrawalModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Withdrawal Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="withdrawalForm">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <select class="form-control" id="withdrawal_type" name="withdrawal_type">
                                <option value="">Select Withdrawal Type</option>
                                <option value="bank_transfer">Bank Transfer</option>
                                <option value="wallet_transfer">Wallet Transfer</option>
                            </select>
                        </div>
                    </div>
                    <p style="color: #f40000;">Withdrawal Amount should be multiple of 500</p>
                    <div class="row mb-3 wallet-transfer" style="display:none;">
                        <div class="col-md-12">
                            <select class="form-control" id="user_wallet" name="user_wallet">
                                <option value="">Select Wallet</option>
                                <?php foreach ($wallets as $wallet): ?>
                                    <option value="<?= $wallet->id ?>"><?= $wallet->name ?>'s Wallet</option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 bank-transfer" style="display:none;">
                        <div class="col-md-6">
                            <label for="bankName">Bank Name</label>
                            <input type="text" class="form-control" id="bankName" value="<?=$dashboard[0]->bank_name?>" name="bankName" readonly required>
                        </div>
                        <div class="col-md-6">
                            <label for="accountNumber">Account Number</label>
                            <input type="text" class="form-control" id="accountNumber" value="<?=$dashboard[0]->account_number?>" name="accountNumber" readonly required>
                        </div>
                    </div>
                    <div class="row mb-3 bank-transfer" style="display:none;">
                        <div class="col-md-6">
                            <label for="ifscCode">IFSC Code</label>
                            <input type="text" class="form-control" id="ifscCode" value="<?=$dashboard[0]->IFSC_code?>" name="ifscCode" readonly required>
                        </div>
                        <div class="col-md-6">
                            <label for="accountHolderName">Account Holder Name</label>
                            <input type="text" class="form-control" id="accountHolderName" value="<?=$dashboard[0]->account_holder_name?>" name="accountHolderName" readonly required>
                        </div>
                    </div>
                    <div class="row mb-3 bank-transfer" style="display:none;">
                        <div class="col-md-12">
                            <label for="branchName">Branch Name</label>
                            <input type="text" class="form-control" id="branchName" value="<?=$dashboard[0]->branch_name?>" name="branchName" readonly required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="amount">Wallet Amount</label>
                            <input type="number" style="margin-bottom: 18px;" class="form-control" id="wallet_amount" name="wallet_amount" readonly required>
                        </div>
                        <div class="col-md-6">
                            <label for="amount">Withdrawal Amount</label>
                            <!--<input type="number" class="form-control" id="amount" name="amount" readonly required>-->
                            <select class="form-control" id="amount" name="amount" required="">
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="branchName">Balance Amount</label>
                            <input type="text" class="form-control" id="rest_amount"  name="rest_amount" readonly required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        
                        <div class="col-md-6 bank-transfer" style="display:none;">
                            <label for="branchName">Bank(10%) Deduct</label>
                            <input type="text" class="form-control" id="bank_deduct"  name="bank_deduct" readonly required>
                        </div>
                        <div class="col-md-6 wallet-transfer" style="display:none;">
                            <label for="branchName">Wallet(5%) Deduct</label>
                            <input type="text" class="form-control" id="wallet_deduct"  name="wallet_deduct" readonly required>
                        </div>
                        <div class="col-md-6 tds" style="display:none;">
                            <label for="branchName">TDS(<?= $settings[0]->tds; ?>%) Deduct</label>
                            <input type="text" class="form-control" id="tds"  name="tds" readonly required>
                        </div>
                        <div class="col-md-12 tds" style="display:none;">
                            <label for="received_amount">Received Amount</label>
                            <input type="text" class="form-control" id="received_amount"  name="received_amount" readonly required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- Add a button to trigger the withdrawal logic -->
                <button type="button" class="btn btn-primary" style="display:none;" id="confirmWithdrawalBtn">Confirm Withdrawal</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Initialize DataTables -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#walletTable').DataTable();
    });
</script>
<script>
    $(document).ready(function() {
        // Function to handle withdrawal button click
        $("#withdrawalBtn").click(function() {
            // Get the balance value
            var balance = <?= round(@$bal); ?>;
            
            // Check if balance is less than 500
            if (balance < 1000) {
                // Show SweetAlert
                Swal.fire({
                    icon: 'error',
                    title: 'Insufficient Balance',
                    text: 'Your balance is less than 500. Cannot proceed with withdrawal.',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                });
            // } else if (balance % 500 !== 0) {
            //     // Show SweetAlert for balance not being a multiple of 500
            //     Swal.fire({
            //         icon: 'error',
            //         title: 'Invalid Amount',
            //         text: 'Withdrawal amount must be a multiple of 500.',
            //         confirmButtonColor: '#3085d6',
            //         confirmButtonText: 'OK'
            //     });
            } else {
                // Check the date condition (assuming $dashboard[0]->date is in the format "Y-m-d H:i:s")
                var dashboardDate = new Date("<?= $dashboard[0]->date ?>");
                var currentDate = new Date();
                var daysDifference = Math.floor((currentDate - dashboardDate) / (1000 * 60 * 60 * 24));

               // if (daysDifference >= 25) {
                    // Open the withdrawal modal
                    $("#withdrawalModal").modal('show');
                    var withdrawalAmount = balance - 500;
                    var s = withdrawalAmount / 500;
                    var withdrawallastamount = parseInt(s) * 500;
                    $("#wallet_amount").val(balance);
                    //populate amount
                    $("#amount").empty();
                    for (var i = 500; i <= withdrawallastamount; i += 500) {
                        $("#amount").append('<option value="' + i + '">' + i + '</option>');
                    }
                    //populate amount
                    $("#amount").val(withdrawallastamount);
                    $("#rest_amount").val(withdrawalAmount - withdrawallastamount);
                    // calculation();
               /* } else {
                    // Show SweetAlert for not meeting the date condition
                    Swal.fire({
                        icon: 'warning',
                        title: 'Permission Denied',
                        text: 'You can withdraw money only after 25 days from the last withdrawal.',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    });
                }*/
            }
        });

        // Function to handle confirm withdrawal button click
        $("#confirmWithdrawalBtn").click(function() {
            $("#withdrawalModal").modal('hide');
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#withdrawal_type').on('change', function () {
            calculation();
        });
        $('#amount').on('change', function () {
            calculation();
        });
        function calculation(){
            var selectedOption = $("#withdrawal_type").val();
            $('#confirmWithdrawalBtn').hide();
            if (selectedOption === 'bank_transfer') {
                $('.bank-transfer').show();
                $('.wallet-transfer').hide();
                $('#confirmWithdrawalBtn').show();
                $('.tds').show();
                var bank_deductpersentage = $("#amount").val();
                var bank_deductcalculate = 0.1 * parseFloat(bank_deductpersentage);
                var last_amt = bank_deductpersentage - bank_deductcalculate;
                var tds = "<?= $settings[0]->tds; ?>";
                var tds_amt = (tds* last_amt)/100;
                var tds_last_amt = last_amt - tds_amt;
                // $("#bank_deduct").val(last_amt);
                // $("#tds").val(tds_last_amt);
                $("#bank_deduct").val(bank_deductcalculate);
                $("#tds").val(tds_amt);
                $("#received_amount").val(tds_last_amt);
            } else {
                $('.wallet-transfer').show();
                $('.bank-transfer').hide();
                $('#confirmWithdrawalBtn').show();
                $('.tds').show();
                var wallet_deductpersentage = $("#amount").val();
                var wallet_deductcalculate = 0.05 * parseFloat(wallet_deductpersentage);
                var last_amtwallet = wallet_deductpersentage - wallet_deductcalculate;
                var tdswallet = "<?= $settings[0]->tds; ?>";
                var tds_amtwallet = (tdswallet* last_amtwallet)/100;
                var tds_last_amtwallet = last_amtwallet - tds_amtwallet;
                // $("#wallet_deduct").val(last_amtwallet);
                // $("#tds").val(tds_last_amtwallet);
                $("#wallet_deduct").val(wallet_deductcalculate);
                $("#tds").val(tds_amtwallet);
                $("#received_amount").val(tds_last_amtwallet);
            }
        }
    });
</script>
