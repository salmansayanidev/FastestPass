<?php include './includes/header.php'; ?>
<link rel="stylesheet" href="./assets/css/login-signup.css">

<main>

    <!-- login section start -->
    <section class="login-signup-section forgot-pass-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="banner-title text-center">Reset password to your FastestPass account</h2>
                </div>
                <div class="col-12">
                    <div class="login-signup-area">
                        <div class="row justify-content-end">
                            <div class="col-12 col-lg-8 col-xl-6">
                                <div class="login-form-area">
                                    <div class="login-form-area-top">
                                        <a class="login-sign-link active" href="login.php">
                                            Log in
                                        </a>
                                        <a class="login-sign-link " href="signup.php">
                                            Sign up
                                        </a>
                                    </div>
                                    <div class="login-form-area-bottom">
                                        <form class="login-form" method="POST" action="">
                                            <p class="reset-para">Forgotten your password? Enter your email address below to begin the reset process.</p>
                                            <div class="form-group mt-0">
                                                <input type="email" class="form-control auth-field" id="email" placeholder="Email address">
                                                <span class="error">Please enter a valid address</span>
                                            </div>
                                            <div class="form-group mt-0">
                                                <button type="submit" class="login-btn">Send password reset link</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login section end -->
</main>


<?php include './includes/footer.php'; ?>
<script src="./assets/js/login-signup.js"></script>