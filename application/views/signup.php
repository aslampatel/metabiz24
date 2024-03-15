<style>
    .add img {
        width: 100%;
        height: 250px;

    }

    .team-img {
        float: left;
        position: relative;
        width: 100%;
        height: 300px;
    }
</style>
<style>
    body {
        background-color: #f8f9fa;
    }

    .card {
        max-width: 500px;
        margin: auto;
        margin-top: 50px;
        margin-bottom: 50px;
    }

    form {
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px #000000;
    }

    form label {
        font-weight: bold;
    }

    form .form-group {
        margin-bottom: 20px;
    }

    form .btn {
        width: 100%;
    }

    .signup-link {
        text-align: center;
        display: block;
        margin-top: 20px;
    }
</style>
<div class="pagetop">
    <div class="container">
        <h1>
            <?= $this->uri->segment(1) == 'signup' ? 'Singup' : 'Singin'; ?> <?= $this->uri->segment(1) == 'individuals' ? 'Individuals' : 'Business'; ?>
        </h1>
        <ul>
            <li><a title="" href="#">Home</a></li>
            <li></li>
        </ul>
    </div>
</div><!-- Page Top -->


<section>
    <div class="card">
        <!-- Login Form -->
        <form id="loginForm">
            <h2 class="mb-4">Login</h2>
            <div class="form-group">
                <label for="loginEmail">Email address</label>
                <input type="email" class="form-control" id="loginEmail" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="password" class="form-control" id="loginPassword" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <p class="signup-link"><a href="#" onclick="showSignupForm()">Don't have an account? Sign up</a></p>
        </form>

        <!-- Signup Form (Initially hidden) -->
       
        <?php $url_segment = $this->uri->segment(2) ?>
        <?php if ($this->session->flashdata('successmss') != '') { ?>
            <center class="mt-2">
                <div class="alert alert-success">
                    <strong><?php echo @$this->session->flashdata('successmss');
                            $this->session->set_flashdata("successmss", ""); ?></strong>
                </div>
            </center>
        <?php } ?>
        <form id="signupForm" style="display: none;" method="post" action="<?= base_url(); ?>registration">
            <h2 class="mb-4">Sign up</h2>
            <div class="form-group">
                <label for="signupName"> Name</label>
                <input type="text" class="form-control" id="signupName" name="name" placeholder="Enter your full name">
                <small id="nameError" class="text-danger"></small>
            </div>
            <div class="form-group">
                <label for="signupEmail">Phone Number</label>
                <input type="number" class="form-control" id="signupPhone" name="phone" placeholder="Enter Phone Number" minlength="10" maxlength="10">
                <small id="phoneError" class="text-danger"></small>
            </div>
            <div class="form-group">
                <label for="signupEmail">Email address</label>
                <input type="email" class="form-control" id="signupEmail" name="email" placeholder="Enter email">
                <small id="emailError" class="text-danger"></small>
            </div>
            <div class="form-group">
                <label for="signupPassword">Password</label>
                <input type="password" class="form-control" id="signupPassword" name="password" placeholder="Password">
                <small id="passwordError" class="text-danger"></small>
                <input type="hidden" name="user_type" value="<?=$url_segment;?>">
            </div>
            <button type="submit" name="submit" class="btn btn-success"  onclick="validateForm()">Sign up</button>
            <!-- <p class="signup-link"><a href="#" onclick="showLoginForm()">Already have an account? Login</a></p> -->
        </form>
    </div>

    <!-- Bootstrap JS (optional, if you need JavaScript features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function() {
            
    <?php if($this->uri->segment(1) == 'signup'){
      ?>
            document.getElementById('loginForm').style.display = 'none';
            document.getElementById('signupForm').style.display = 'block';
      <?php }else{ ?>
            document.getElementById('loginForm').style.display = 'block';
            document.getElementById('signupForm').style.display = 'none';
        <?php } ?>
        });

        function showSignupForm() {
            document.getElementById('loginForm').style.display = 'none';
            document.getElementById('signupForm').style.display = 'block';
        }

        function showLoginForm() {
            document.getElementById('loginForm').style.display = 'block';
            document.getElementById('signupForm').style.display = 'none';
        }
    </script>
</section><!-- Tabs Section -->
<script>
    function validateForm() {
        // Clear previous error messages
        $(".text-danger").text("");

        // Validate Name
        var name = $("#signupName").val();
        if (name.trim() === "") {
            $("#nameError").text("Name is required.");
            return false;
        }
        // Validate Phone Number
        var phone = $("#signupPhone").val();
        var phoneRegex = /^\d+$/;
        if (phone.trim() === "" || !phoneRegex.test(phone)) {
            $("#phoneError").text("Phone number should contain only numbers.");
            return false;
        }

        // Validate Email
        var email = $("#signupEmail").val();
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.trim() === "" || !emailRegex.test(email)) {
            $("#emailError").text("Enter a valid email address.");
            return false;
        }   

        // Validate Password
        // var password = $("#signupPassword").val();
        // if (password.trim() === "") {
        //     $("#passwordError").text("Password is required.");
        //     return false;
        // }
        // If all validations pass, submit the form
        $("#signupForm").submit();
    }
</script>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Attach an input event handler to the phone number field
            $("#signupPhone").on("input", function() {
                // Get the entered phone number
                var phoneNumber = $(this).val();

                // Check if the entered phone number has more than 10 digits
                if (phoneNumber.length > 10) {
                    // Display an error message
                    $("#phoneError").text("Phone number should not exceed 10 digits");
                    
                    // Trim the phone number to 10 digits
                    $(this).val(phoneNumber.slice(0, 10));
                } else {
                    // Clear the error message if the entered phone number is valid
                    $("#phoneError").text("");
                }
            });
        });
    </script>