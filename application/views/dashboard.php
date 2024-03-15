<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
<script
    src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js">
</script>
<style>
    .irs-inner-page-heading.irs-layer-black.test {
        margin-top: 60px;
        margin-bottom: -101px;
    }


    .register-section.sec-padd.new {
        margin-top: 100px;
        margin-bottom: 29px;

    }
    .idBg {
        background: #05a677;
        border-bottom: 1px solid #05a677 !important;
    }
    .nameBg {
        background: #ff9300;
        border-bottom: 1px solid #ff9300 !important;
    }
    .dateBg {
        background: #ff9300;
        border-bottom: 1px solid #ff9300 !important;
    }
    .activeDateBg {
        background: #c9a01b;
        border-bottom: 1px solid #c9a01b !important;
    }
    .renewDateBg {
        background: #ff9300;
        border-bottom: 1px solid #ff9300 !important;
    }
    .renewTimeBg {
        background: #ff8484;
        border-bottom: 1px solid #ff8484 !important;
    }
    .directsBg {
        background: #089308;
        border-bottom: 1px solid #089308 !important;
    }
    .teamBg {
        background: #2a9f2a;
        border-bottom: 1px solid #2a9f2a !important;
    }
    .clubBg {
    background: #089308;
    border-bottom: 1px solid #089308 !important;
}
.rnakBg {
    background: #2a9f2a;
    border-bottom: 1px solid #2a9f2a !important;
}
.incomeBg {
    background: #089308;
    border-bottom: 1px solid #089308 !important;
}
.withdrawableBg {
    background: #3f9179;
    border-bottom: 1px solid #3f9179 !important;
}
.directBg {
    background: #089308;
    border-bottom: 1px solid #089308 !important;
}
.levelBg {
    background: #6bb8d1;
    border-bottom: 1px solid #6bb8d1 !important;
}
.clubInBg {
    background: #6bb8d1;
    border-bottom: 1px solid #6bb8d1 !important;
}
.RankInBg {
    background: #9e18bb;
    border-bottom: 1px solid #9e18bb !important;
}

.col-md-12.text-right p.text-primery {
    color: #000;
}
    @media only screen and (max-width: 600px) {
        .irs-inner-page-heading.irs-layer-black.test {
            margin-top: 158px;
            margin-bottom: -101px;
        }
        
        .headingcenter h2{text-align:center;}
        .headingcenter p{text-align:center; font-weight:bold;}
    }
    
    
</style>
<?php
//  echo"<pre>";
//  print_r($query); exit();

?>

<!--page header section start-->
<section class="mb-2" style="background: url('<?= base_url(); ?>assets/img/header-bg-5.jpg')no-repeat center center / cover">
    <div class="section-lg bg-gradient-primary text-white section-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="page-header-content text-center">
                        <h1>Member Dashboard</h1>
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
<!--<section class="irs-inner-page-heading irs-layer-black test">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-12">-->
<!--                <div class="irs-inner-heading headingcenter">-->
<!--                    <h2><?php echo $dashboard[0]->name ?> </h2>-->
<!--                    <p class="m-0">Affiliate ID: <?php echo $dashboard[0]->registered_ref_code ?></p>-->
<!--                    <p>Account Status: <?php echo $dashboard[0]->account_status ?></p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<div class="clearfix"></div>
<style>
    .hed {
    font-weight: 900;
    color: #000;
    font-size: 19px;
}
.text.text-center {
    color: #fff;
    font-size: 17px;
    margin-top: 7px;
}
.card {
    border-radius: 8px;
    box-shadow: 0px 5px 6px #0e0e0e2e;
    border: none;
    margin-bottom: 18px;
}
.card:hover {
    transition: 0.8s;
    box-shadow: -2px 4px 17px #000000c7 !important;
    /* background: #8b91ff; */
}
    strong {
        color: #000;
    }
    .table thead th {
        vertical-align: bottom;
        /*border-bottom: 0.125rem solid #000000;*/
    }
    .table th, .table td {
    padding: 1rem;
    vertical-align: top;
    /*border-top: 0.0625rem solid #000000;*/
    color: #000;
}
.table thead th,  .table th {
    vertical-align: bottom;
    border-bottom: 0.125rem solid #000000;
    color: black;
    font-weight: 900;
    font-size: 19px;
}
    td, th {
    /*border: 2px solid #000 !important;*/
}
table.table td {
    color: #fff;
    font-weight: 800;
}
.table thead th, .table th {
     /*border-bottom: 0.125rem solid #000000;*/
}
ul.splide__pagination.splide__pagination--ltr{
    display: none;
}
@media only screen and (max-width: 600px) {
  .table thead th, .table th {
    vertical-align: bottom;
    border-bottom: 0.125rem solid #000000;
    color: black;
    font-weight: 900;
    font-size: 16px;
}
.hed {
    font-weight: 900;
    color: #000;
    font-size: 13px;
}
}
.splide__slide p {
    font-weight: 900;
}

.text-right{color:#fff;}

.news.text-center.text-dark {
    float: left;
    width: 100%;
    margin-bottom: 20px;
    /* border-bottom: 1px solid; */
    background-color: #1a2c79;
    padding: 10px;
    color: #fff ! IMPORTANT;
    height: 110px;
}
section#splide01 {
    /*margin-top: 30px;*/
}
</style>

<?php if ($this->session->flashdata('email_sent') != '') { ?>
    <div class="alert alert-success alert-dismissable" style="padding:10px;">
        <button class="close" aria-hidden="true" data-dismiss="alert" type="button" style="right:0;"></button>
        <strong> <?php echo $this->session->flashdata('email_sent'); ?></strong>
    </div>
<?php } ?>
<!--col-12"-->
<div class="col-12">
    <div class="news text-center text-dark">
        <section class="splide" aria-label="">
            <h4 class="text-center text-light">Announcements</h4>
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach($news as $v): ?>
                    <li class="splide__slide"><?=$v->news ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </div>
</div>
<section class="register-section sec-padd new" style="background-color:#F1F3FA;">
    <div class="container">
        <div class="clearfix"></div>
        <div class="row profile">
            <?php $this->load->view('dashboard_sidebar'); ?>
            <div class="col-md-9 p-0">
                <div class="profile-content">
                    <!--Some user related content goes here...-->
                    <div class="col-md-12 profile-usertitle-name p-0">
                        
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card nameBg">
                                        <div class="card-body text-right ">
                                            <div class="hed">Member Name</div>
                                            <div class="text text-right"><?php echo $dashboard[0]->name ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card nameBg">
                                        <div class="card-body text-right ">
                                        <div class="hed">Member ID</div>
                                        <div class="text text-right"><?php echo $dashboard[0]->user_id;?></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div> 
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card dateBg">
                                        <div class="card-body text-right ">
                                            
                                        <div class="hed">Registered Date</div>
                                        <div class="text text-right"><?php echo date('m-d-Y h:i:s',strtotime($dashboard[0]->date)); ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card dateBg">
                                        <div class="card-body text-right ">
                                            <div class="hed">Activate Date</div>
                                            <div class="text text-right"><?php echo date('m-d-Y h:i:s',strtotime($dashboard[0]->account_active_date)); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card renewDateBg">
                                        <div class="card-body text-right ">
                                            
                                        <div class="hed">Renew Date</div>
                                        <?php
                                    // print_r($directs);
                                    $currentDate = $dashboard[0]->account_active_date;

                                    // Add 25 days to the current date
                                    $RenewDate = $newDate = date('m-d-Y', strtotime($currentDate . ' + 25 days'));
                                    ?>
                                        <div class="text text-right"><?php echo $newDate; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card renewDateBg">
                                        <div class="card-body text-right ">
                                            <div class="hed">Timer</div>
                                            
                                            <div class="text text-right" id="renewTime"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card directsBg">
                                        <div class="card-body text-right ">
                                            
                                        <div class="hed">Total Directs</div>
                                        <div class="text text-right"><?php echo $directs; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card directsBg">
                                        <div class="card-body text-right ">
                                            <div class="hed">Total Team</div>
                                            <div class="text text-right"><?= $totalTeams; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card clubBg">
                                        <div class="card-body text-right ">
                                            
                                        <div class="hed">Rank</div>
                                        <div class="text text-right"><?php echo $rank; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card clubBg">
                                        <div class="card-body text-right ">
                                            <div class="hed">Club</div>
                                            <div class="text text-right"><?= $club; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card incomeBg">
                                        <div class="card-body text-right ">
                                            
                                        <div class="hed">Total Income Balance</div>
                                        <div class="text text-right"><?=round($totalIncome,2) - round($withdrawable,2); ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card incomeBg">
                                        <div class="card-body text-right ">
                                            <div class="hed">Withdrawable</div>
                                            <div class="text text-right"><?=round($withdrawable,2); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card directBg">
                                        <div class="card-body text-right ">
                                            
                                        <div class="hed">Direct Income</div>
                                        <div class="text text-right"><?=round($directIncome,2); ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card directBg">
                                        <div class="card-body text-right ">
                                            <div class="hed">Level Income</div>
                                            <div class="text text-right"><?=round($lavelIncome,2); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card RankInBg">
                                        <div class="card-body text-right ">
                                            
                                        <div class="hed">Rank Income</div>
                                        <div class="text text-right"><?=round($rankIncome,2); ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card RankInBg">
                                        <div class="card-body text-right ">
                                            <div class="hed">Club Income</div>
                                            <div class="text text-right"><?=round($clubIncome,2); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        
                        <!-- <table class="table ">
                            <thead>
                               
                                <tr rowspan="3">
                                    <td colspan="2" class="text-center text-dark">
                                    <div class="news">
                                        <section class="splide" aria-label="Splide Basic HTML Example">
                                          <div class="splide__track">
                                        		<ul class="splide__list">
                                        		    <?php foreach($news as $v): ?>
                                        			<li class="splide__slide"><?=$v->news ?></li>
                                        		<?php endforeach; ?>
                                        		</ul>
                                          </div>
                                        </section>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center idBg nameBg" style="border-bottom: 1px solid #05a677;">AFFILIATE ID</th>
                                    <th class="text-center nameBg">AFFILIATE Name</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                <tr>

                                    <td class="text-center idBg nameBg"><?php echo $dashboard[0]->phone ?></td>
                                    <td class="text-center nameBg"><?php echo $dashboard[0]->name ?></td>

                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th class="text-center dateBg ">Registered Date</th>
                                    <th class="text-center dateBg">Activate Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td class="text-center dateBg"><?php echo $dashboard[0]->date ?></td>
                                    <td class="text-center dateBg"><?php echo date_format(date_modify(new DateTime($dashboard[0]->date), '+1 minute'), 'Y-m-d H:i:s'); ?></td>

                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th class="text-center renewDateBg">Renew Date</th>
                                    <th class="text-center renewDateBg">Timer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    // print_r($directs);
                                    $currentDate = $dashboard[0]->date;

                                    // Add 25 days to the current date
                                    $newDate = date('Y-m-d', strtotime($currentDate . ' + 25 days'));
                                    ?>
                                    <td class="text-center renewDateBg"><?=$newDate;?></td>
                                    <?php date_default_timezone_set("Asia/Calcutta"); ?>
                                    <td class="text-center renewDateBg"><?= date("h:i:sa"); ?></td>

                                </tr>
                            </tbody>
                            <thead>
                                 <tr>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <th class="text-center directsBg">TOTAL Directs</th>
                                    <th class="text-center directsBg">TOTAL Team</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td class="text-center directsBg"><?= $directs; ?></td>
                                    <td class="text-center directsBg"><?=$totalTeams;?></td>

                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase clubBg">Rank</th>
                                    <th class="text-center text-uppercase clubBg">Club</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td class="text-center clubBg"><?=$rank; ?></td>
                                    <td class="text-center clubBg"><?=$club; ?></td>

                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <th class="text-center text-uppercase incomeBg">Total Income</th>
                                    <th class="text-center incomeBg">WITHDRAWABLE</th>
                                </tr>
                                <tr>
                                    <td class="text-center incomeBg"><?=round($totalIncome,2); ?></td>
                                    <td class="text-center incomeBg"><?=round($withdrawable,2); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-center directBg">DIRECT INCOME</th>
                                    <th class="text-center directBg">LEVEL INCOME</th>
                                </tr>
                                <tr>
                                    <td class="text-center directBg"><?=round($directIncome,2); ?></td>
                                    <td class="text-center directBg"><?=round($lavelIncome,2); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-center RankInBg">RANK INCOME</th>
                                    <th class="text-center RankInBg">CLUB INCOME</th>
                                </tr>
                                <tr>
                                    <td class="text-center RankInBg"><?=round($rankIncome,2); ?></td>
                                    <td class="text-center RankInBg"><?=round($clubIncome,2); ?></td>
                                </tr>
                            </tbody>
                        </table> -->
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
<script>
$(document).ready(function() {
    // Function to calculate reverse time
 function calculateReverseTime(targetDate) {
        var currentDate = new Date();
        // Adjusting the date format for proper parsing
        var targetDateTime = new Date(targetDate.replace(/-/g, '/'));
        
        // Calculate the difference in milliseconds
        var difference = targetDateTime - currentDate;
        if (difference <= 0) {
            $("#renewTime").html("00:00:00");
            return;
        }
        
        // Convert milliseconds to seconds, minutes, hours, and days
        var seconds = Math.floor(difference / 1000);
        var minutes = Math.floor(seconds / 60);
        var hours = Math.floor(minutes / 60);
        var days = Math.floor(hours / 24);
        tHours = (days * 24) + parseInt(hours / 24);
        // alert(tHours);
        // Output the result
        $("#renewTime").html( tHours + " : " + minutes % 60 + " : " + seconds % 60);
    }


    // Update time every second
    setInterval(function() {
        calculateReverseTime("<?=date('Y-m-d', strtotime($dashboard[0]->account_active_date . ' + 25 days')); ?>");
    }, 1000); // 1000 milliseconds = 1 second
});
</script>