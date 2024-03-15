<?php

$result = $this->Model_users->get_settings();
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="clearfix"></div>
<div class="content-wrapper">
    <div class="container-fluid">
        <!--Start Dashboard Content-->
        <div class="row mt-4">
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-purpink">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-white">
                                    <?php echo @$professor[0]->$k; ?>
                                </h4>
                                <span class="text-white"><a href="<?php echo base_url() ?>supercontrol/cms/"
                                        style="color:#fff;">CMS Managment</a></span>
                            </div>
                            <div class="align-self-center"><span id="dash-chart-1"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-ibiza">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-white">
                                    <?php echo @$student[0]->$k; ?>
                                </h4>
                                <span class="text-white"><a href="<?php echo base_url() ?>supercontrol/contacts"
                                        style="color:#fff;">Contact Managment</a></span>
                            </div>
                            <div class="align-self-center"><span id="dash-chart-2"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-purpink">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-white">
                                    <?php echo @$school[0]->$k; ?>
                                </h4>
                                <span class="text-white"><a href="<?php echo base_url() ?>supercontrol/member"
                                        style="color:#fff;">Member Managment</a></span>
                            </div>
                            <div class="align-self-center"><span id="dash-chart-3"></span></div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-ibiza">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body text-left">
                                <h4 class="text-white">
                                    <?php echo @$staff[0]->$k; ?>
                                </h4>
                                <span class="text-white"><a href="<?php echo base_url() ?>supercontrol/settings"
                                        style="color:#fff;">Settings Managment</a></span>
                            </div>
                            <div class="align-self-center"><span id="dash-chart-4"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 ">
            <div class="card p-0 m-1">
                <div class="card-hed my-3 px-3" style="border-bottom: 2px solid #b5b5b5;">
                    <p class="h4">Member</p>
                    <span>Total, Active, Inactive, Non-Renewerd</span>
                </div>
                <!-- Active, Inactive, Non-Renewed Members Graph -->
                <canvas id="membershipStatusChart"></canvas>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 ">
                <div class="card p-0 m-1">
                <div class="card-hed my-3 px-3" style="border-bottom: 2px solid #b5b5b5;">
                    <p class="h4">Rank</p>
                    <span>Star, Super Star</span>
                </div>
                 <!-- Rank-Wise Total Members Graph -->
                 <canvas id="rankWiseMembersChart"></canvas>
                 </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 ">
                <div class="card p-0 m-1">
                <div class="card-hed my-3 px-3" style="border-bottom: 2px solid #b5b5b5;">
                    <p class="h4">Club</p>
                    <span>Star, Super Star</span>
                </div>
                 <!-- Club-Wise Total Members Graph -->
                <canvas id="clubWiseMembersChart"></canvas>
                 </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 ">
                <div class="card p-0 m-1">
                <div class="card-hed my-3 px-3" style="border-bottom: 2px solid #b5b5b5;">
                    <p class="h4">Rank Wallet</p>
                    <span>Star, Super Star</span>
                </div>
                  <!-- Rank-Wise Wallets Graph -->
                <canvas id="rankWiseWalletsChart"></canvas>
                 </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 ">
                <div class="card p-0 m-1">
                <div class="card-hed my-3 px-3" style="border-bottom: 2px solid #b5b5b5;">
                    <p class="h4">Club Wallet</p>
                    <span>Star, Super Star</span>
                </div>
                  <!-- Club-Wise Wallets Graph -->
                  <canvas id="clubWiseWalletsChart"></canvas>
                 </div>
            </div>
            
           

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <?php
        $rank = $this->Generalmodel->show_data_id('rank_income_management','', '', 'get', '');
// Sample data (replace with your actual data)
$totalMembersData = [100, 120, 150, 200];
$membershipStatusData = [
    'total' => $total_user,
    'active' => $total_active_user,
    'inactive' => $total_inactive_user,
    'nonRenewed' => $total_non_renewerd_user
];
// print_r($membershipStatusData); exit;
$rankWiseMembersData = [
    $rank[0]->rank. " Rank" => $total_star_rank_user,
    $rank[1]->rank." Rank" => $total_super_star_rank_user,
    $rank[2]->rank." Rank" => $total_mega_star_rank_user,
    $rank[3]->rank." Rank" => $total_ultimate_star_rank_user,
    $rank[4]->rank." Rank" => $total_royal_star_rank_user,
   
];
$clubWiseMembersData = [
    $rank[0]->rank." Club" => $total_star_rank_user,
    $rank[1]->rank." Club" => $total_super_star_rank_user,
    $rank[2]->rank." Club" => $total_mega_star_rank_user,
    $rank[3]->rank." Club" => $total_ultimate_star_rank_user,
    $rank[4]->rank." Club" => $total_royal_star_rank_user,
];
$rankWiseWalletsData = [
    $rank[0]->rank. " Rank" => $total_star_rank_wallets,
    $rank[1]->rank. " Rank" => $total_super_star_rank_wallets,
    $rank[2]->rank. " Rank" => $total_mega_star_rank_wallets,
    $rank[3]->rank. " Rank" => $total_ultimate_star_rank_wallets,
    $rank[4]->rank. " Rank" => $total_royal_star_rank_wallets,
   
];
$clubWiseWalletsData = [
    $rank[0]->rank." Club" => $total_star_rank_wallets,
    $rank[1]->rank." Club" => $total_super_star_rank_wallets,
    $rank[2]->rank." Club" => $total_mega_star_rank_wallets,
    $rank[3]->rank." Club" => $total_ultimate_star_rank_wallets,
    $rank[4]->rank." Club"=> $total_royal_star_rank_wallets,
];
?>

<script>
    $(document).ready(function () {
        // Set width and height dynamically for each canvas element
        $('canvas').each(function () {
            $(this).css('width', '100px');
            $(this).css('height', '100px');
        });

        // Membership Status Chart
        new Chart(document.getElementById('membershipStatusChart'), {
            type: 'doughnut',
            data: {
                labels: <?= json_encode(array_keys($membershipStatusData)); ?>,
                datasets: [{
                    label: 'Membership Status',
                    data: <?= json_encode(array_values($membershipStatusData)); ?>,
                    backgroundColor: ['green', 'red', 'yellow', 'blue', 'orange', 'purple', 'pink', 'cyan', 'magenta']
                }]
            }
        });

        // Rank-Wise Total Members Chart
        new Chart(document.getElementById('rankWiseMembersChart'), {
            type: 'doughnut',
            data: {
                labels: <?= json_encode(array_keys($rankWiseMembersData)); ?>,
                datasets: [{
                    label: 'Rank-Wise Total Members',
                    data: <?= json_encode(array_values($rankWiseMembersData)); ?>,
                    backgroundColor: ['green', 'red', 'yellow', 'blue', 'orange', 'purple', 'pink', 'cyan', 'magenta']
                }]
            }
        });

        // Club-Wise Total Members Chart
        new Chart(document.getElementById('clubWiseMembersChart'), {
            type: 'doughnut',
            data: {
                labels: <?= json_encode(array_keys($clubWiseMembersData)); ?>,
                datasets: [{
                    label: 'Club-Wise Total Members',
                    data: <?= json_encode(array_values($clubWiseMembersData)); ?>,
                    backgroundColor: ['green', 'red', 'yellow', 'blue', 'orange', 'purple', 'pink', 'cyan', 'magenta']
                }]
            }
        });

        // Rank-Wise Wallets Chart
        new Chart(document.getElementById('rankWiseWalletsChart'), {
            type: 'doughnut',
            data: {
                labels: <?= json_encode(array_keys($rankWiseWalletsData)); ?>,
                datasets: [{
                    label: 'Rank-Wise Wallets',
                    data: <?= json_encode(array_values($rankWiseWalletsData)); ?>,
                    backgroundColor: ['green', 'red', 'yellow', 'blue', 'orange', 'purple', 'pink', 'cyan', 'magenta']
                }]
            }
        });

        // Club-Wise Wallets Chart
        new Chart(document.getElementById('clubWiseWalletsChart'), {
            type: 'doughnut',
            data: {
                labels: <?= json_encode(array_keys($clubWiseWalletsData)); ?>,
                datasets: [{
                    label: 'Club-Wise Wallets',
                    data: <?= json_encode(array_values($clubWiseWalletsData)); ?>,
                    backgroundColor: ['green', 'red', 'yellow', 'blue', 'orange', 'purple', 'pink', 'cyan', 'magenta']
                }]
            }
        });
    });
</script>


    </div>
    <!--End Row-->
    <style>
        .row.board {
            margin-top: 2%;
        }

        ;
    </style>

    <div class="row board">
        <div class="col-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="text-danger" style="font-size:20px;">
                        <?php echo $result[0]->business_name; ?> Admin Panel
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12" style="display: none;">
            <div class="x_panel">
                <div class="x_title">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-4 p-left-0">
                                <h2>Latest Orders</h2>
                            </div>
                            <div class="col-sm-8 text-right"><a href="" class="btn btn-info">View All</a> </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Customer Name</th>
                                <th>Table No.</th>
                                <th>Order Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td>5</td>
                                <td>Rs. 1070</td>
                                <td><a class="btn btn-sm gradient-purpink" href="#">Repeat Order</a>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target=".view_modal_0">View Order</button>
                                    <div class="modal fade view_modal_0" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span
                                                            aria-hidden="true">�</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Order Details: (Table
                                                        No.- #5)</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-striped table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Datetime</th>
                                                                <th>Order Items &amp; Quantity</th>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>2021-10-29 04:54:35</td>
                                                                <td>
                                                                    <table class="table table-bordered">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Begun Bhaja</td>
                                                                                <td>1</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Beer</td>
                                                                                <td>2</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td>5</td>
                                <td>Rs. 1070</td>
                                <td><a class="btn btn-sm gradient-purpink" href="#">Repeat Order</a>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target=".view_modal_0">View Order</button>
                                    <div class="modal fade view_modal_0" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span
                                                            aria-hidden="true">�</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Order Details: (Table
                                                        No.- #5)</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-striped table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Datetime</th>
                                                                <th>Order Items &amp; Quantity</th>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>2021-10-29 04:54:35</td>
                                                                <td>
                                                                    <table class="table table-bordered">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Begun Bhaja</td>
                                                                                <td>1</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Beer</td>
                                                                                <td>2</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td>5</td>
                                <td>Rs. 1070</td>
                                <td><a class="btn btn-sm gradient-purpink" href="#">Repeat Order</a>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target=".view_modal_0">View Order</button>
                                    <div class="modal fade view_modal_0" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span
                                                            aria-hidden="true">�</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Order Details: (Table
                                                        No.- #5)</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-striped table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Datetime</th>
                                                                <th>Order Items &amp; Quantity</th>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>2021-10-29 04:54:35</td>
                                                                <td>
                                                                    <table class="table table-bordered">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Begun Bhaja</td>
                                                                                <td>1</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Beer</td>
                                                                                <td>2</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td>5</td>
                                <td>Rs. 1070</td>
                                <td><a class="btn btn-sm gradient-purpink" href="">Repeat Order</a>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target=".view_modal_0">View Order</button>
                                    <div class="modal fade view_modal_0" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span
                                                            aria-hidden="true">�</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Order Details: (Table
                                                        No.- #5)</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-striped table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Datetime</th>
                                                                <th>Order Items &amp; Quantity</th>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>2021-10-29 04:54:35</td>
                                                                <td>
                                                                    <table class="table table-bordered">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Begun Bhaja</td>
                                                                                <td>1</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Beer</td>
                                                                                <td>2</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td>5</td>
                                <td>Rs. 1070</td>
                                <td><a class="btn btn-sm gradient-purpink" href="">Repeat Order</a>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target=".view_modal_0">View Order</button>
                                    <div class="modal fade view_modal_0" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span
                                                            aria-hidden="true">�</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Order Details: (Table
                                                        No.- #5)</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-striped table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Datetime</th>
                                                                <th>Order Items &amp; Quantity</th>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>2021-10-29 04:54:35</td>
                                                                <td>
                                                                    <table class="table table-bordered">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Begun Bhaja</td>
                                                                                <td>1</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Beer</td>
                                                                                <td>2</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!--End Row-->