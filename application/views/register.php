<style>
    .registration-form {
        max-width: 476px;
        margin: 50px auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .registration-form h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
    }
</style>
<section class="" style="background: url('assets/img/slider-img-4.jpg')no-repeat center center / cover">
    <div class="section-lg bg-gradient-primary text-white section-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-center">
                        <h1>Register Now</h1>
                        <!-- <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Contact US</li>
                                </ol>
                            </nav> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// print_r($uri); exit();
?>
<div class="container">
    <div class="registration-form">
        <!-- <h2>User Registration</h2> -->
        <?php if ($this->session->flashdata('successmss') != '') { ?>
            <center class="mt-2">
                <div class="alert alert-success">
                    <strong><?php echo @$this->session->flashdata('successmss');
                            $this->session->set_flashdata("successmss", ""); ?></strong>
                </div>
            </center>
        <?php } ?>
        <form method="post" action="<?= base_url(); ?>page/user_registration" id="registrationForm" onsubmit="return validateForm()">
    <div class="form-group">
        <label for="firstName">Name:<span class="text-danger">*</span></label>
        <input type="text" name="name" class="form-control" id="firstName" placeholder="Enter your name">
        <small id="nameError" class="text-danger"></small>
    </div>
    <div class="form-group">
        <label for="email">Email:<span class="text-danger">*</span></label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        <small id="emailError" class="text-danger"></small>
    </div>
    <div class="form-group">
        <label for="password">Phone:<span class="text-danger">*</span></label>
        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter your Phone Number"  required="" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
        <small id="phoneError" class="text-danger"></small>
    </div>
    <div class="form-group">
        <label for="password">Password:<span class="text-danger">*</span></label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
        <small id="passwordError" class="text-danger"></small>
    </div>
    <div class="form-group">
        <label for="signupConfirmPassword">Confirm Password<span class="text-danger">*</span></label>
        <input type="password" class="form-control" id="signupConfirmPassword" name="confirm_password" placeholder="Confirm Password">
        <small id="confirmPasswordError" class="text-danger"></small>
        <small id="successMessage" class="text-success"></small>
    </div>
    <div class="form-group ">
        <label for="password">Sponsored Code: <span class="text-danger">*</span></label>
        <input type="<?= empty($url) ? 'text' : 'text'; ?>" <?= empty($url) ? '' : 'readonly'; ?> value="<?= $url; ?>" class="form-control" id="refCode" name="ref_code" placeholder="Enter your Sponsored Code">
        <!-- <input type="hidden" class="form-control" id="refurl" name="ref_url" placeholder="Enter your Reference Url" value=""> -->

        <small id="refCodeError" class="text-danger"></small>
        <small id="refCodeSuccess" class="text-success"></small>
    </div>
    <input type="hidden" name="userCount" id="userCount">
    <div class="form-group">
        <label for="password">Placement Code:<span class="text-danger"></span></label>
        <input type="text" class="form-control" id="sponCode" name="spon_code" placeholder="Enter your Placement Code">
        <small id="sponCodeError" class="text-danger"></small>
        <small id="sponCodeSuccess" class="text-success"></small>
    </div>
    <p>Already register? <a href="<?= base_url(); ?>login">Log In</a></p>
    <button type="submit"  class="btn btn-primary btn-block">Register</button>
</form>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- <script>
        function validateForm() {
            var name = $("#firstName").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var password = $("#password").val();
            var refCode = $("#refCode").val();
            var sponCode = $("#sponCode").val();

            // Clear previous error messages
            $(".text-danger").text('');

            // Simple validation
            if (name === '') {
                $("#nameError").text('Name is required');
            }
            if (email === '') {
                $("#emailError").text('Email is required');
            }
            if (phone === '') {
                $("#phoneError").text('Phone is required');
            }
            if (password === '') {
                $("#passwordError").text('Password is required');
            }
            // if (refCode === '') {
            //     $("#refCodeError").text('Reference Code is required');
            // }
            // if (sponCode === '') {
            //     $("#sponCodeError").text('Sponsored Code is required');
            // }

            // Check if any error messages are present
            if ($(".text-danger").text() === '') {
                // If no errors, submit the form
                $("#registrationForm").submit();
            }
        }
    </script> -->
<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    function validateForm() {
        // Clear previous error messages
        // $(".text-danger").text("");

        // Validate Name
        var name = $("#firstName").val();
        if (name.trim() === "") {
            $("#nameError").text("Name is required.");
            return false;
        }

        // Validate Email
        var email = $("#email").val();
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.trim() === "" || !emailRegex.test(email)) {
            $("#emailError").text("Enter a valid email address.");
            return false;
        }

        // Validate Phone Number
        var phone = $("#phone").val();
        var phoneRegex = /^\d+$/;
        if (phone.trim() === "" || !phoneRegex.test(phone)) {
            $("#phoneError").text("Phone number should contain only numbers.");
            return false;
        }


        // Validate Password
        var password = $("#password").val();
        if (password.trim() === "") {
            $("#passwordError").text("Password is required.");
            return false;
        }

        // Validate Reference Code if not hidden
        var refCode = $("#refCode").val();
        if ($("#refCode").is(":visible") && refCode.trim() === "") {
            $("#refCodeError").text("Reference Code is required.");
            return false;
        }
        var refCodeC = 0;
         // Validate Reference Code using AJAX
        //  if ($("#sponCode").val() == '') {
        //     $("#sponCodeError").text("Sponsored Code is required.");
        //     return false;
        // }
        // alert($("#userCount").val());
        if ($("#sponCode").val() == '' && $("#userCount").val() >= 2) {
            $("#sponCodeSuccess").text('');
            $("#sponCodeError").text("Sponsored Code is required. 1");
            return false;
        }
// alert("S"+refCodeC);
        // Validate Sponsored Code
        // var sponCode = $("#sponCode").val();
        // if (sponCode.trim() == "" && refCodeC != 0) {
        //     $("#sponCodeError").text("Sponsored Code is required.");
        //     return false;
        // }

        // If all validations pass, submit the form
        // $("#registrationForm").submit();
        // return true;
    }
</script>



<script>
    // AJAX function to check the reference code
    function checkReferenceCode() {
        var refCode = $('#refCode').val();

        $.ajax({
            url: '<?= base_url(); ?>/auth/checkrefCode', // Change this to the actual endpoint on your server
            type: 'POST',
            dataType:'json',
            data: {
                ref_code: refCode,
                action: 1
            },
            success: function(response) {
                // Handle the response from the server
                if (response.error == 1) {
                    $('#refCodeError').html('');
                    $('#refCodeSuccess').html('Verified');
                    $('#userCount').val(response.count);
                } else {
                    $('#refCode').val('');
                    $('#refCodeSuccess').html('');
                    $('#refCodeError').html('Invalid Reference Code');
                }
              
            },
            error: function(xhr, status, error) {
                console.error('AJAX request failed:', status, error);
            }
        });
    }

    function checkSponCode() {
        var sponCode = $('#sponCode').val();
        if(sponCode){
            $.ajax({
                url: '<?= base_url(); ?>/auth/checkrefCode', // Change this to the actual endpoint on your server
                type: 'POST',
                dataType:'json',
                data: {
                    ref_code: sponCode,
                    action: 1
                },
                success: function(response) {
                    // alert(response.count);
                    // Handle the response from the server
                    if (response.error == 1) {
                        if(response.count >= 2){
                            $('#sponCode').val('');
                            $('#sponCodeSuccess').html('');
                            $('#sponCodeError').html('Slot is not empty.');
                        }else{
                            $('#sponCodeError').html('');
                            $('#sponCodeSuccess').html('Verified');
                        }
                    } else {
                        $('#sponCode').val('');
                        $('#sponCodeSuccess').html('');
                        $('#sponCodeError').html('Invalid Reference Code');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX request failed:', status, error);
                }
            });
        }
    }

    // Attach the AJAX function to the input field's blur event
    // $(document).ready(function () {
    $('#refCode').on('blur', checkReferenceCode);
    $('#sponCode').on('blur', checkSponCode);
    // });

    // ... other JavaScript code ...
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#signupConfirmPassword').on('keyup', function () {
            validatePasswordMatch();
        });

        function validatePasswordMatch() {
            var password = $('#password').val();
            var confirmPassword = $('#signupConfirmPassword').val();

            if (password === confirmPassword) {
                $('#confirmPasswordError').text('');
                $('#successMessage').text('Passwords matched successfully!');
            } else {
                $('#confirmPasswordError').text('Password and Confirm Password do not match');
                $('#successMessage').text('');
            }
        }

        // You can also attach the validatePasswordMatch function to other relevant events if needed
        $('#signupPassword').on('keyup', function () {
            validatePasswordMatch();
        });

        // Attach the validateForm function to the form submit event
        $('#signupForm').submit(function () {
            // Your existing form validation logic
            validatePasswordMatch();

            // Prevent the form from submitting if needed
            return false;
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Add event listener to the input field
        $('#sponCode').on('input', function() {
            // Remove spaces from the input value
            var inputValue = $(this).val().replace(/\s/g, '');
            
            // Update the input value without spaces
            $(this).val(inputValue);

            // Display an error message if spaces are entered
            if (inputValue.indexOf(' ') !== -1) {
                $('#sponCodeError').text('Spaces are not allowed.');
            } else {
                $('#sponCodeError').text('');
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Add event listener to the input field
        $('#refCode').on('input', function() {
            // Remove spaces from the input value
            var inputValue = $(this).val().replace(/\s/g, '');
            
            // Update the input value without spaces
            $(this).val(inputValue);

            // Display an error message if spaces are entered
            if (inputValue.indexOf(' ') !== -1) {
                $('#refCodeError').text('Spaces are not allowed.');
            } else {
                $('#refCodeError').text('');
            }
        });
    });
</script>


<script>
    $(document).ready(function() {
        $('#phone').on('input', function() {
            var inputValue = $(this).val().replace(/[^0-9]/g, ''); // Remove non-numeric characters
            var maxLength = 10;

            // Truncate the input to the maximum length
            if (inputValue.length > maxLength) {
                inputValue = inputValue.substring(0, maxLength);
                $(this).val(inputValue);
            }

            // Display an error message if the length is still greater than the maximum
            if (inputValue.length > maxLength) {
                $('#phoneError').text('Phone number must be ' + maxLength + ' digits.');
            } else {
                $('#phoneError').text('');
            }
        });
    });
</script>