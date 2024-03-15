
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
                            <h1>Login Now</h1>
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
            <?php if ($this->session->flashdata('successmss') != '') { ?>
            <center class="mt-2">
                <div class="alert alert-success">
                    <strong><?php echo @$this->session->flashdata('successmss');
                            $this->session->set_flashdata("successmss", ""); ?></strong>
                </div>
            </center>
        <?php } ?>
        <?php if ($this->session->flashdata('successmss') != '') { ?>
            <center class="mt-2">
                <div class="alert alert-success">
                    <strong><?php echo @$this->session->flashdata('successmss');
                            $this->session->set_flashdata("successmss", ""); ?></strong>
                </div>
            </center>
        <?php } ?>
        <?php if ($this->session->flashdata('logerror') != '') { ?>
            <center class="mt-2">
                <div class="alert alert-danger">
                    <strong><?php echo @$this->session->flashdata('logerror');
                            $this->session->set_flashdata("logerror", ""); ?></strong>
                </div>
            </center>
        <?php } ?>
            <form method="post" action="<?= base_url(); ?>signin" id="registrationForm">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                    <small id="emailError" class="text-danger"></small>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                    <a href="<?=base_url();?>forgot_password">Forget Password ?</a>

                    <small id="passwordError" class="text-danger"></small>
                    <!-- <small id="refCodeError" class="text-danger"></small>
                    <small id="refCodeSuccess" class="text-success"></small> -->
                </div>
                <!-- <button type="submit" class="btn btn-primary btn-block"  onclick="validateloginForm()">Login</button> -->
                <button type="button" onclick="validateloginForm()" class="btn btn-primary btn-block">Login</button>
            </form>
            <p class="mt-3 text-center">Don't have an account? <a href="<?=base_url();?>register">Register here</a></p>
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
        if (email.trim() === "") {
            $("#emailError").text("Email is required.");
            return false;
        }
        // if (isNaN(email)) {
        //     var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        //     if (email.trim() === "" || !emailRegex.test(email)) {
        //         $("#emailError").text("Enter a valid email address.");
        //         return false;
        //     }
        // }
        

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


    
