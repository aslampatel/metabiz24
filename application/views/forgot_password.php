
<style>
        body {
            background-color: #f8f9fa;
        }

        .login-form {
            max-width: 400px;
            margin: 100px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-form h2 {
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
<section class="" style="background: url('<?=base_url();?>assets/img/slider-img-4.jpg')no-repeat center center / cover">
        <div class="section-lg bg-gradient-primary text-white section-header">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-center">
                            <h1>Forget Password</h1>
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
<div class="container">
        <div class="login-form">
            <!-- <h2>User Login</h2> -->
            <!-- <h3>Forgot Password</h3> -->
          <form class="default-form"  method="post" action="<?php echo base_url();?>sendpassword" >
            <div class="form-group">
              <label for="email">Email Address </label>
              <input class="form-control" name="email" type="text" placeholder="Enter Email Address" value="" required>
            </div>
            <div class="form-group">
              <button  type="submit" class="btn btn-primary btn-block" >Submit</button>
              <p>Already register? <a href="<?=base_url();?>login">Log In</a></p>
              <!-- <a href="<?=base_url();?>login" class="forpass"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Login </a> </div> -->
          </form>
          
            <!-- <p class="mt-3 text-center">Don't have an account? <a href="<?=base_url();?>register">Register here</a></p> -->
        </div>
    </div>

    <!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    function validateloginForm() {
        // Clear previous error messages
        $(".text-danger").text("");

        // Validate Email
        var email = $("#email").val();
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.trim() === "" || !emailRegex.test(email)) {
            $("#emailError").text("Enter a valid email address.");
            return false;
        }
        

        // Validate Password
        var password = $("#password").val();
        if (password.trim() === "") {
            $("#passwordError").text("Password is required.");
            return false;
        }

        // If all validations pass, submit the form
        $("#registrationForm").submit();
    }
</script>


    
