<style>
.container.mt-5.new {
    margin-top: 69px !important;
}

.col-6.row.new_row {
    max-height: 400px;
    overflow-y: auto;
    margin-top: 8px;
}

button.btn.btn-info.en-btn {
    margin-left: 343px;
    margin-top: -150px;

}

div#listed_business {
    margin-left: 83px;
    margin-top: 70px;
}

button.btn.btn-info.btn-edit {
    margin-left: 343px;
    margin-top: -150px;
}

div#business_form {
    margin-bottom: 31px;
    margin-left: 45px;
    background: #f5f5f5;
    padding: 20px;

}
.subscription-message {
    /* background-color: #f4f4f4; */
    padding: 20px;
    /* border: 1px solid #ccc; */
    border-radius: 5px;
    text-align: center;
}

.subscription-message p {
    font-size: 16px;
    color: #333;
    margin-bottom: 15px;
}

.subscribe-button {
    background-color: #3498db;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.subscribe-button:hover {
    background-color: #258ac6;
}


@media only screen and (max-width: 600px) {
    .col-6.row.new_row {
        display: contents;
    }
}

@media only screen and (max-width: 600px) {
    #listed_business {
        margin: 0 !important;
        margin-left: 0;
    }

    body.wide-layout {
        width: 100%;
    }

    button.btn.btn-info.en-btn {
        margin-left: 230px;
        margin-top: -150px;
    }

    button.btn.btn-info.btn-edit {
        margin-left: 230px;
        margin-top: -150px;
    }

    div#business_form {}
}
</style>
<?php
$user_id=$this->session->userdata('is_userlogged_id');
// print_r($user_id);
$user = $this->Generalmodel->show_data_id('user', $user_id, 'user_id', 'get', '');
// $subscription = $this->Generalmodel->show_data_id('subscription', $user[0]->id, 'user_id', 'get', '');
//echo $this->db->last_query();
//echo"<pre>";
//print_r($user); exit();
//   if ($subscription[0]->status == 'active'){?>
<div class="container mt-5 new">
    <div class="col-12 row">
        <div class="col-6 row new_row">
            <div class="pro-details-feedback mb-40">
                <h5 style="color: brown;">See Listed Services</h5>
                <!-- media -->
                <?php foreach($business_listings as $business) {?>
                <div class="media">

                    <div class="media-body">

                        <h3 class="media-heading"><a href="#"><?=$business->business_name;?></a></h3>
                        <h5 class="media-heading"><a href="#"><?=$business->owner_name;?></a></h5>
                        <p><span><?=$business->address;?></span>
                            <?=$business->email;?></p>
                        <p><?=$business->phone;?></p>
                    </div>
                </div>
                <button style="" type="button" class="btn btn-info en-btn">Enquiry</button>
                <?php } ?>

            </div>

        </div>
        <?php
// $listBus = $this->Generalmodel->show_data_id('business_listing', $this->session->userdata('user_id'), 'user_id', 'get', ''); 
if($listBus){
?>
        <div class="pro-details-feedback mb-40 new-detail" style="" id="listed_business">
            <h5 style="color: brown;">See your added Services</h5>
            <!-- media -->
            <div class="media">

                <div class="media-body">

                    <h3 class="media-heading"><a href="#"><?=$listBus[0]->business_name;?></a></h3>
                    <h5 class="media-heading"><a href="#"><?=$listBus[0]->owner_name;?></a></h5>
                    <p><span><?=$listBus[0]->address;?></span>
                        <?=$listBus[0]->email;?></p>
                    <p><?=$listBus[0]->phone;?></p>
                </div>
            </div>
            <button style="" type="button" class="btn btn-info btn-edit" onclick="update_business">Edit</button>

        </div>
        <?php 
}
    // $listBus = $this->Generalmodel->show_data_id('business_listing', $this->session->userdata('user_id'), 'user_id', 'get', '');
    //print_r($listBus);exit();
    ?>
        <div class="col-6 row" id="business_form">
            <h5> Your Services</h5>



            <?php if($this->session->flashdata('successmss')!=''){?>
            <center class="mt-2" style="width: 100%;">
                <div class="alert alert-success">
                    <strong><?php echo @$this->session->flashdata('successmss'); $this->session->set_flashdata("successmss","");?></strong>
                </div>
            </center>
            <script>
            // Automatically close the success message after 5 seconds (adjust as needed)
            setTimeout(function() {
                $('.alert.alert-success').fadeOut('slow');
            }, 5000); // 5000 milliseconds (5 seconds)
            </script>
            <?php } 
    // print_r($this->session->userdata('user_id')); //exit;
    
        
    ?>
            <!-- <?php
    if (!empty($listBus)) {?>
    <script src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            // Hide the form on document ready
            $('#contactForm2').hide();
        });
    </script>

    <?php }
     ?> -->
            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
            <script>
            $(document).ready(function() {
                // Hide the "contactForm2" form if $listBus is not empty
                <?php if (!empty($listBus)) { ?>
                // $('#contactForm2').hide();
                $('#business_form').hide();
                <?php }else{ ?>
                  $('#business_form').show();
               <?php } ?>

                // Hide the "business_form" form on document ready

            });
            </script>


            <!-- <form id="contactForm2" data-toggle="validator" method="post" style="width: 100%;"
                action="<?=base_url()?>page/insert_business_listing">
                <input type="hidden" name="id" id="id" value="<?= $listBus ? $listBus[0]->id : 0; ?>">
                <span class="txt" id="error1"></span>
                <input type="text" id="name2" name="name" class="form-control"  value="<?= $listBus ? $listBus[0]->business_name : ''; ?>"
                    class="form-control" id="formGroupExampleInput" placeholder="Business name">
                <span class="txt" id="error2"></span>
                <input type="text" name="email" id="email2" value="<?= $listBus ? $listBus[0]->email : ''; ?>"
                    class="form-control" id="formGroupExampleInput" placeholder="Email">
                <input type="text" name="owner_name" id="email2" value="<?= $listBus ? $listBus[0]->owner_name : ''; ?>"
                    class="form-control" id="formGroupExampleInput" placeholder="Owner name">
                <input type="text" name="business_type" id="email2"
                    value="<?= $listBus ? $listBus[0]->business_type : ''; ?>" class="form-control"
                    id="formGroupExampleInput" placeholder="Business type">
                <span class="txt" id="error3"></span>
                <input type="text" name="phone" id="phone2" class="form-control"
                    value="<?= $listBus ? $listBus[0]->phone : ''; ?>" id="formGroupExampleInput"
                    placeholder="Phone Number">
                <input type="text" name="address" id="email2" class="form-control"
                    value="<?= $listBus ? $listBus[0]->address : ''; ?>" id="formGroupExampleInput"
                    placeholder="Address">
                <input type="hidden" name="plan" id="plantype" value="">
                <input type="hidden" name="url" id="baseurl" value="<?= base_url() ?>">
                <button type="submit" name="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
            </form> -->
            <form id="contactForm2" data-toggle="validator" method="post" style="width: 100%;"
      action="<?= base_url() ?>page/insert_business_listing">

    <input type="hidden" name="id" id="id" value="<?= $listBus ? $listBus[0]->id : 0; ?>">

    <div class="form-group">
        <label for="name2">Service Name</label>
        <input type="text" id="name2" name="name" class="form-control" 
               value="<?= $listBus ? $listBus[0]->business_name : ''; ?>"
               placeholder="Business Name" required>
        <span class="txt" id="error1"></span>
    </div>

    <div class="form-group">
        <label for="email2">Price</label>
        <input type="text" name="email" id="email2" value="<?= $listBus ? $listBus[0]->email : ''; ?>"
               class="form-control" placeholder="Price" required>
        <span class="txt" id="error2"></span>
    </div>

    <div class="form-group">
        <label for="ownerName">Owner Name</label>
        <input type="text" name="owner_name" id="ownerName"
               value="<?= $listBus ? $listBus[0]->owner_name : ''; ?>"
               class="form-control" placeholder="Owner Name" required>
    </div>

    <!-- <div class="form-group">
        <label for="businessType">Business Type</label>
        <input type="text" name="business_type" id="businessType"
               value="<?= $listBus ? $listBus[0]->business_type : ''; ?>"
               class="form-control" placeholder="Business Type" required>
        <span class="txt" id="error3"></span>
    </div> -->

    <!-- <div class="form-group">
        <label for="phone2">Phone Number</label>
        <input type="text" name="phone" id="phone2" class="form-control"
               value="<?= $listBus ? $listBus[0]->phone : ''; ?>" placeholder="Phone Number" required>
    </div> -->

    <div class="form-group">
        <label for="address">Service Image</label>
        <input type="file" name="image" id="image" class="form-control"
               value="<?= $listBus ? $listBus[0]->image : ''; ?>" placeholder="Image">
    </div>

    <input type="hidden" name="plan" id="plantype" value="">
    <input type="hidden" name="url" id="baseurl" value="<?= base_url() ?>">

    <button type="submit" name="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
</form>

        </div>
    </div>


</div>




<script src="jquery-3.7.1.min.js"></script>
<script>
// Hide the form after a successful submission
$(document).ready(function() {
    // $("#business_form").hide();
});
</script>
<!-- Add this script tag to include jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Your HTML content -->

<script>
$(document).ready(function() {
    // Hide the "business_form" form on initial page load
    // $('#business_form').hide();

    // Handle the click event for the "Edit" button
    $('#listed_business button').click(function() {
        // Show the "business_form" form
        $('#business_form').show();

        // Hide the "See your added Business" listing div
        $('#listed_business').hide();
    });
});
</script>