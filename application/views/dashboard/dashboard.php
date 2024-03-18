<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card username-card">
                <div class="card-body">
                  <h5 class="card-title">USER NAME</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $dashboard[0]->name ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card userid-card">

                <div class="card-body">
                  <h5 class="card-title">USER ID</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-hash"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $dashboard[0]->user_id;?> </h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card status-card">

                <div class="card-body">
                  <h5 class="card-title">STATUS</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <?php
                        if(isset($dashboard[0]->status) && $dashboard[0]->status=='Active')
                        {
                          echo '<i class="bi bi-hand-thumbs-up"></i>';
                        }
                        else{
                          echo '<i class="bi bi-hand-thumbs-down"></i>';
                        }
                      ?>
                      
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $dashboard[0]->status;?> </h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card referrallink-card">

                <div class="card-body">
                  <h5 class="card-title">Referral Link</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-link"></i>
                    </div>
                    <div class="ps-3">
                      <h6>0 </h6>

                    </div>
                  </div>
                </div>

              </div>
            </div> -->

            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card renewtimer-card">

                <div class="card-body">
                  <h5 class="card-title">Renew Timer</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-stopwatch"></i>
                    </div>
                    <div class="ps-3">
                      <h6><div class="text text-right" id="renewTime"></div></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card renewdate-card">

                <div class="card-body">
                  <h5 class="card-title">Renew Date</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar-check"></i>
                    </div>
                    <div class="ps-3">
                    <?php
                      // print_r($directs);
                      $currentDate = $dashboard[0]->account_active_date;

                      // Add 25 days to the current date
                      $RenewDate = $newDate = date('m-d-Y', strtotime($currentDate . ' + 25 days'));
                    ?>
                    <h6><?php echo $newDate; ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card active-directs-card ">

                <div class="card-body">
                  <h5 class="card-title">Active Directs</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-binoculars-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $directs; ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card active-time-card">

                <div class="card-body">
                  <h5 class="card-title">Active Team</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $totalTeams; ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card active-rank-card">

                <div class="card-body">
                  <h5 class="card-title">Active Rank</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-bar-chart"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $rank; ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card active-club-card">

                <div class="card-body">
                  <h5 class="card-title">Active Club</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-house-door"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $club; ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card direct-rps-card">

                <div class="card-body">
                  <h5 class="card-title">Direct RPs</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-link-45deg"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=round($directIncome,2); ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card team-rps-card">

                <div class="card-body">
                  <h5 class="card-title">Team RPs</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-lines-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=round($lavelIncome,2); ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card rank-rps-card">

                <div class="card-body">
                  <h5 class="card-title">Rank RPs</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-graph-up"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=round($lavelIncome,2); ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card club-rps-card">

                <div class="card-body">
                  <h5 class="card-title">Club RPs</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-gift"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=round($clubIncome,2); ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card current-total-rps-card">

                <div class="card-body">
                  <h5 class="card-title">Current Total RPs</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-grid-1x2-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>0 </h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <!-- <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card redeem-rps-card">

                <div class="card-body">
                  <h5 class="card-title">Redeem RPs (multiples of 500)</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-hdd-network"></i>
                    </div>
                    <div class="ps-3">
                      <h6>0 </h6>

                    </div>
                  </div>
                </div>

              </div>
            </div> -->
            
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card balance-rps-card">

                <div class="card-body">
                  <h5 class="card-title">Balance RPs</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <h4>Rs.</h4>
                    </div>
                    <div class="ps-3">
                      <h6>0 </h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card lifetime-card">

                <div class="card-body">
                  <h5 class="card-title">Lifetime RPs</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-bookmark-heart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>0 </h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div><!-- End Left side columns -->

        <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

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