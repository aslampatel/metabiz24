<style>
     .row.allrow {
    margin-top: 37px !important;
}
</style>
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row allrow">
            <div class="col-sm-12">
                <h4 class="page-title"><?php echo $this->router->fetch_class(); ?></h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>supercontrol/<?php echo $this->router->fetch_class(); ?>"><?php echo $this->router->fetch_class(); ?></a></li>
                    <li class="breadcrumb-item"><a><?php if ($this->router->fetch_method() == 'index') echo "Manage " . $this->router->fetch_class();
                                                    else echo $this->router->fetch_method(); ?></a></li>
                </ol>
            </div>
        </div>
        <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <form action="<?= base_url(); ?>/supercontrol/distribution_management/update" onsubmit="return calTotal()" class="row" method="post">
                            <!-- <input type="hidden" name="preTotal" value="<?= $cbm[0]->ammount + $cbm[1]->ammount; ?>" > -->
                            <div class="col-md-12 row">
                                <?php //prx($distribution_management); exit; 
                                ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Direct Referl</label>
                                        <input type="number" class="form-control" name="directref" id="directref" placeholder="Price" value="<?= $distribution_management[0]->amount; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">10 Levels</label>
                                        <input type="number" class="form-control" name="levels" id="levels" placeholder="Price" value="<?= $distribution_management[1]->amount; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Rank Fund</label>
                                        <input type="number" class="form-control" name="rank_fund" id="rankFund" placeholder="Price" value="<?= $distribution_management[2]->amount; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Club Fund</label>
                                        <input type="number" class="form-control" name="club_fund" id="clubFund" placeholder="Price" value="<?= $distribution_management[3]->amount; ?>">
                                    </div>
                                </div>
                                <button type="submit" class="w-100 btn btn-outline-danger mx-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- End Row-->
    </div>
</div>
</div><!--End Row-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function calTotal(){
        var directref = parseInt($("#directref").val());
        var levels = parseInt($("#levels").val());
        var rankFund = parseInt($("#rankFund").val());
        var clubFund = parseInt($("#clubFund").val());
        // alert((rpPrice + rPrice));
        if((directref + levels + clubFund + rankFund) <= <?=$cost_breakup_management[0]->ammount; ?>){
            return true;
        }else{
            Swal.fire({
            title: 'Warning',
            text: 'Cost Breakup Amount is grater than <?=$cost_breakup_management[0]->ammount; ?>.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
            return false;
        }
    }
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

   
    // Add an event listener to the share button
    // document.getElementById('share-button').addEventListener('click', function () {
    //     event.preventDefault();

</script>