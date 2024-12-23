<?php include './includes/header.php'; ?>
<link rel="stylesheet" href="./assets/css/login-signup.css">

<main>
    <!-- signup section start -->
    <section class="login-signup-section signup">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="banner-title text-center">Create an account</h2>
                </div>
                <div class="col-12">
                    <div class="login-signup-area">
                        <div class="row justify-content-end">
                            <div class="col-12 col-lg-8 col-xl-6">
                                <div class="login-form-area">
                                    <div class="login-form-area-top">
                                        <a class="login-sign-link " href="login.php">
                                            Log in
                                        </a>
                                        <a class="login-sign-link active" href="signup.php">
                                            Sign up
                                        </a>
                                    </div>
                                    <div class="login-form-area-bottom">
                                        <form class="login-form" method="POST" action="">
                                            <div class="form-group mt-0">
                                                <input type="email" class="form-control auth-field" id="email" placeholder="Email address">
                                                <span class="error">Please enter a valid address</span>
                                            </div>
                                            <div class="form-group">
                                                <div class="position-relative">
                                                    <input type="password" class="form-control auth-field" id="" placeholder="Master password">
                                                    <button class="toggle-password-btn" type="button">
                                                        <i class="fa-regular fa-eye-slash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center gap-2 mt-3">
                                                <div class="flex-grow-1 progress signup-password " role="progressbar" aria-label="Example 20px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                                                    <div class="progress-bar" style="width: 25%"></div>
                                                </div>
                                                <span class="forget-password-link">Strength</span>
                                            </div>
                                            <div class="form-group">
                                                <div class="position-relative">
                                                    <input type="password" class="form-control auth-field" id="" placeholder="Confirm master password">
                                                    <button class="toggle-password-btn" type="button">
                                                        <i class="fa-regular fa-eye-slash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="note forget-password-link mt-3">By completing this form, I agree to the Terms and Privacy Policy. I want to receive promotional emails, unless I opt out.</p>
                                            <div class="form-group">
                                                <button type="submit" class="login-btn">Create Lockmypass account</button>
                                            </div>
                                        </form>
                                        <div class="platform-link-area">
                                            <a class="platform-link forget-password-link" href="#">
                                                <img class="img-fluid" src="./assets/images/platform-icon-1.png" alt="">
                                                Sign in with Google
                                            </a>
                                            <a class="platform-link forget-password-link" href="#">
                                                <img class="img-fluid" src="./assets/images/platform-icon-2.png" alt="">
                                                Sign in with Apple
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- signup section end -->
</main>


<?php include './includes/footer.php'; ?>
<script src="./assets/js/login-signup.js"></script>