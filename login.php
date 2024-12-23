<?php include './includes/header.php'; ?>
<link rel="stylesheet" href="./assets/css/login-signup.css">

<main>

    <!-- login section start -->
    <section class="login-signup-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="banner-title text-center">Login to your Lockmypass account</h2>
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
                                            <div class="form-group mt-0">
                                                <input type="email" class="form-control auth-field" id="email" placeholder="Email address">
                                                <span class="error">Please enter a valid address</span>
                                            </div>
                                            <div class="form-group">
                                                <div class="position-relative">
                                                    <input type="password" class="form-control auth-field" id="password" placeholder="Master password">
                                                    <button class="toggle-password-btn" type="button">
                                                        <i class="fa-regular fa-eye-slash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="login-btn">Sign in</button>
                                            </div>
                                        </form>
                                        <div class="forget-password-text-area">
                                            <a class="forget-password-link" href="signup.php">Create your Lockmypass account</a>
                                            <a class="forget-password-link" href="#">Forgot password?</a>
                                        </div>
                                        <div class="login-advance-option-area active">
                                            <button class="login-advance-option-btn" type="button">
                                                Advanced options
                                                <i class="fa-solid fa-caret-down"></i>
                                            </button>
                                            <ul class="login-advance-option-list">
                                                <li class=" login-advance-option-list-item">
                                                    <label class="switch">
                                                        <input type="checkbox" checked name="advanced_options">
                                                        <span class="slider round"></span>
                                                    </label>
                                                    <span class="forget-password-link d-block">Remember email</span>
                                                </li>
                                                <li class="login-advance-option-list-item">
                                                    <label class="switch">
                                                        <input type="checkbox" name="advanced_options">
                                                        <span class="slider round"></span>
                                                    </label>
                                                    <span class="forget-password-link d-block">Log in using one time password</span>
                                                </li>
                                            </ul>
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
    <!-- login section end -->
</main>


<?php include './includes/footer.php'; ?>
<script src="./assets/js/login-signup.js"></script>