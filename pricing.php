<?php include './includes/header.php' ?>
<link rel="stylesheet" href="./assets/css/pricing.css">

<main class="pricing-page-main">

    <!-- pricing banner section start -->
    <section class="pricing-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pricing-banner-area">
                        <h2 class="banner-title text-center">Find your perfect plan today</h2>
                        <img class="img-fluid" src="./assets/images/pricing-banner-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing banner section end -->

    <!-- pricing section start -->
    <div class="pricing-page-section">
        <?php include './includes/pricing-section.php' ?>
    </div>
    <!-- pricing section end -->

    <section id="payment" class="payment-main pt-lg-0 pt-3 pb-lg-5 pb-3 {{ (isset($marginTop) ? $marginTop : '' ) }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment">
                        <form action="javascript:;" method="post" id="buyvpnform" name="buyvpnform">
                            <div class="row step_3_mob">
                                <div class="col-lg-8 col-md-8 col-12">
                                    <div class="row">
                                        <div class="col-12 pt-lg-0 pt-md-4 pl-md-0">
                                            <div class="alert emailmessagealert d-none">
                                                <p id="emailmessage"></p>
                                            </div>
                                            <div class="d-block mt-lg-3 mt-2 step_title">
                                                <tag>step 02</tag>
                                                <div class="infoCard">
                                                    <h4>Create Your Account</h4>
                                                    <p> (We will send your credentials on the email you enter below)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-lg-4">
                                        <!-- <div class="col-md-4 col-12 pr-md-0 pl-md-0">-->
                                        <!--    <div class="form-group mb-lg-0">-->
                                        <!--        <input type="hidden" class="form-control" id="name" value="customer" name="name" placeholder="your name">-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="col-md-12 col-12 pl-md-0">
                                            <div class="form-group mb-lg-0">
                                                <input type="hidden" class="form-control" id="name" value="customer" name="name" placeholder="your name">
                                                <input type="email" class="form-control" id="availableemail" name="email" placeholder="Enter Your Email Address" required>
                                                <!--<input type="email" class="form-control" id="availableemail" name="email" placeholder="your email">-->
                                            </div>
                                        </div>
                                        <!--<div class="col-md-4 col-12 pl-md-0">-->
                                        <!--    <div class="form-group mb-lg-0">-->
                                        <!--        <input type="email" class="form-control" id="confirmEmail" name="confirm_email" placeholder="confirm email">-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
                                    <div class="row mb-lg-4">
                                        <div class="col-12 mt-3 pl-md-0">
                                            <span class="d-block mt-lg-1 mt-0 mb-lg-4 mb-2 step_title">
                                                <tag>step 03</tag>
                                                <div class="infoCard">
                                                    <h4>Add-Ons (Optional)</h4>
                                                </div>
                                            </span>
                                        </div>
                                        <div class="col-12 pl-md-0">
                                            <div class="opt-box mt-lg-2 mb-lg-0 mb-3">
                                                <span class="d-block mt-lg-0 mt-1 mb-lg-4 mb-0">
                                                    <p class="mb-0 d-inline-block label-tag-title"><strong class="font-weight-700 font-point9rem">Currently You Have 10 Multi Logins</strong></p>
                                                </span>
                                                <div class="checkbox-1">
                                                    <div>
                                                        <input type="checkbox" id="addadditonaldevices" name="check" value="" />
                                                        <label for="check" id="markcheckaddon">
                                                            <span class="checkbox-addon">
                                                            </span>
                                                            Add more Multi Logins - <span class="dollar-sign">$</span><span class="addonmorevalue">1</span> for an additional device (Optional)
                                                        </label>
                                                    </div>
                                                </div>
                                                <span class="d-block mt-lg-3 mt-1 mb-lg-1 mb-2" id="showadditionaldevicelogin">
                                                    <p class="mb-0 d-inline-block label-tag-title">
                                                        <strong class="font-weight-700 font-point9rem position-relative">
                                                            Add Devices
                                                            <div class="number d-inline-block">
                                                                <span id="minusaddon" class="minus">-</span>
                                                                <input id="addonneeded" type="text" value="0" oninput="validity.valid||(value=value.replace(/\D+/g, ''))" />
                                                                <span id="plusaddon" class="plus">+</span>
                                                            </div>Price Added:<span class="ml-lg-1">&dollar; <span id="addonprice"></span></span>
                                                        </strong>
                                                    </p>
                                                    <input type="hidden" id="addonrate" value="1">
                                                </span>
                                            </div>
                                            <!-- <div class="opt-box mt-lg-2 mb-lg-0 mb-3">
                                                <span class="d-block mt-lg-0 mt-1 mb-lg-4 mb-0">
                                                    <p class="mb-0 d-inline-block label-tag-title"><span class="badge badge-warning mr-2">02</span><strong class="font-weight-700 font-point9rem">Dedicated IP</strong></p>
                                                </span>
                                                <div class="checkbox-1">
                                                    <div>
                                                        <input type="checkbox" id="detectIP" name="check" value="" />
                                                        <label for="check" id="DectectIpRadio">
                                                            <span class="checkbox-addon"></span>
                                                            Want to add a Dedicated IP for - <span class="dollar-sign">USD</span><span class="addonmorevalue">1.49/mo</span> ?
                                                            Want to add a Dedicated IP for - <span class="dollar-sign">$</span><span id="dedicatedIpPriceDisplay"> 1.6/mo</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="opt-box mt-3 p-lg-4 p-3" id="showdetectIP">
                                                    <div class="custom-control custom-radio detectIp_radio_buttons">
                                                        <input type="radio" class="custom-control-input" id="US-DIP" name="detectIPRadio" value="2" checked>
                                                        <label class="custom-control-label" for="US-DIP"><img src="{{ asset('images/flags/usa.png')}}" alt="United States"> United States Dedicated IP (US)</label>
                                                    </div>
                                                    <div class="custom-control custom-radio detectIp_radio_buttons">
                                                        <input type="radio" class="custom-control-input" id="ES-DIP" name="detectIPRadio" value="3">
                                                        <label class="custom-control-label" for="ES-DIP"><img src="{{ asset('images/flags/spain.png')}}" alt="Spain"> Spain Dedicated IP (ES)</label>
                                                    </div>
                                                    <div class="custom-control custom-radio detectIp_radio_buttons">
                                                        <input type="radio" class="custom-control-input" id="UK-DIP" name="detectIPRadio" value="4">
                                                        <label class="custom-control-label" for="UK-DIP"><img src="{{ asset('images/flags/uk.png')}}" alt="United Kingdom"> United Kingdom Dedicated IP (UK)</label>
                                                    </div>
                                                    <div class="custom-control custom-radio detectIp_radio_buttons">
                                                        <input type="radio" class="custom-control-input" id="BG-DIP" name="detectIPRadio" value="5">
                                                        <label class="custom-control-label" for="BG-DIP"><img src="{{ asset('images/flags/bulgaria.png')}}" alt="Bulgaria"> Bulgaria Dedicated IP (BG)</label>
                                                    </div>
                                                    <div class="custom-control custom-radio detectIp_radio_buttons">
                                                        <input type="radio" class="custom-control-input" id="NL-DIP" name="detectIPRadio" value="6">
                                                        <label class="custom-control-label" for="NL-DIP"><img src="{{ asset('images/flags/netherlands.png')}}" alt="Netherland"> Netherland Dedicated IP (NL)</label>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="col-12 pl-md-0">
                                            <div class="opt-box mt-lg-2 mb-lg-0 mb-3">
                                                <span class="d-block mt-lg-0 mt-1 mb-lg-4 mb-0">
                                                    <p class="mb-0 d-inline-block label-tag-title"><strong class="font-weight-700 font-point9rem">Dedicated IP</strong></p>
                                                </span>
                                                <div class="checkbox-1">
                                                    <div>
                                                        <input type="checkbox" id="detectIP" name="check" value="" />
                                                        <label for="check" id="DectectIpRadio">
                                                            <span class="checkbox-addon"></span>
                                                            <!--Want to add a Dedicated IP for - <span class="dollar-sign">USD</span><span class="addonmorevalue">1.49/mo</span> ?-->
                                                            Want to add a Dedicated IP for - <span class="dollar-sign">$</span><span id="dedicatedIpPriceDisplay"> 1.49/mo</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="opt-box mt-3 p-lg-4 p-3" id="showdetectIP">

                                                    <div class="custom-control custom-radio detectIp_radio_buttons">
                                                        <input type="radio" class="custom-control-input" id="US-DIP" name="detectIPRadio" value="2" checked>
                                                        <label class="custom-control-label" for="US-DIP"><img src="{{ asset('images/flags/usa.png')}}" alt="United States"> United States Dedicated IP (USA)</label>
                                                    </div>
                                                    <div class="custom-control custom-radio detectIp_radio_buttons">
                                                        <input type="radio" class="custom-control-input" id="ES-DIP" name="detectIPRadio" value="3">
                                                        <label class="custom-control-label" for="ES-DIP"><img src="{{ asset('images/flags/rss_flag.webp')}}" alt="Russia"> Russia (RU)</label>
                                                    </div>

                                                    <div class="custom-control custom-radio detectIp_radio_buttons">
                                                        <input type="radio" class="custom-control-input" id="UK-DIP" name="detectIPRadio" value="7">
                                                        <label class="custom-control-label" for="UK-DIP"><img src="{{ asset('images/flags/germany.png')}}" alt="Germany"> Germany Dedicated IP (GR)</label>
                                                    </div>
                                                    <!--<div class="custom-control custom-radio detectIp_radio_buttons">-->
                                                    <!--    <input type="radio" class="custom-control-input" id="BG-DIP" name="detectIPRadio" value="8">-->
                                                    <!--    <label class="custom-control-label" for="BG-DIP"><img src="{{ asset('images/flags/fr_flag.png')}}" alt="France"> France Dedicated IP (FR)</label>-->
                                                    <!--</div>-->
                                                    <!--<div class="custom-control custom-radio detectIp_radio_buttons">-->
                                                    <!--    <input type="radio" class="custom-control-input" id="NL-DIP" name="detectIPRadio" value="9">-->
                                                    <!--    <label class="custom-control-label" for="NL-DIP"><img src="{{ asset('images/flags/aus_flag.png')}}" alt="Australia"> Australia Dedicated IP (AU)</label>-->
                                                    <!--</div>-->

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 pl-md-0">
                                            <div class="opt-box mt-lg-2 mb-lg-0 mb-3">
                                                <span class="d-block mt-lg-0 mt-1 mb-lg-4 mb-0">
                                                    <p class="mb-0 d-inline-block label-tag-title">
                                                        <strong class="font-weight-700 font-point9rem">Add Port Forwarding</strong>
                                                    </p>
                                                </span>
                                                <div class="checkbox-1">
                                                    <div>
                                                        <input type="checkbox" id="pf_check" name="check" value="" />
                                                        <label for="check" id="pf_checkLabel">
                                                            <span class="checkbox-addon"></span>
                                                            Want to add a Port Forwarding for - <span class="dollar-sign">$</span><span id="dedicatedIpPriceDisplay"> 1.2/mo</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-lg-1">
                                        <div class="col-12 py-2 pl-md-0">
                                            <span class="step_title mt-3 pb-4">
                                                <tag>step 04</tag>
                                                <div class="infoCard mb-4">
                                                    <h4>Select Your Preferred Method of Payment:
                                                    </h4>
                                                </div>
                                            </span>
                                        </div>
                                        <div class="col-12 pl-md-0">
                                            <div class="border">
                                                <div class="opt-box border-0 ac_pay_title">
                                                    <div id="accordion">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="card-link">
                                                                    <span class="accordion-btn"></span>
                                                                    Pay With Paypal
                                                                    <picture class="ml-lg-4 ml-2">
                                                                        <source srcset="{{ ('../images/paypal.webp') }}" type="image/webp">
                                                                        <source srcset="{{ ('../images/paypal.png') }}" type="image/png">
                                                                        <img class="img-fluid" data-src="{{ ('../images/paypal.png') }}" alt="Paypal" title="Paypal" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=">
                                                                    </picture>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="paypalPayment" class="ac_pay_detail" style="display:none">
                                                    <div class="card-body mb-2">
                                                        <strong class="font-weight-700 font-point9rem d-block mb-2">Review and Confirm Your</strong>
                                                        <label class="mt-lg-0 mt-3 plan-content">
                                                            <span class=" pr-lg-0 font-weight-500">Order Total: $
                                                                <span class="billingtotal font-weight-600">39.95</span>
                                                            </span> <span class="promoprice"></span>
                                                            <span class="addonpricevalue"></span>
                                                            <span class="detectIpPrice"></span>
                                                            <span class="detectPfPrice"></span>
                                                            <span class="finalpayment"></span>
                                                            <span class="billingmessage">3 Year Plan (<span class="font-weight-600">$39.95</span> prepaid 3 years, instead of $320) <br>PassHulk Password Manager <strong>FREE</strong></span></label>


                                                        <!--<div class="opt-box  mb-lg-0 mb-3" id="orderSummary">-->
                                                        <!--    <span class="d-block mt-lg-0 mt-1 mb-lg-4 mb-0">-->
                                                        <!--        <p class="mb-0 d-inline-block label-tag-title">Review and Confirm Your Order</p>-->
                                                        <!--        <hr>-->
                                                        <!--    </span>-->
                                                        <!--    <ul>-->
                                                        <!--        <li>Lifetime Plan<span>($40.00 prepaid lifetime</span></li>-->

                                                        <!--        <li>PassHulk Password Manager, <span>1 Year FREE</span></li>-->
                                                        <!--        <li class="orderTotal">Order Total <span>$ 40 + $31.2</span></li>-->
                                                        <!--    </ul>-->
                                                        <!--</div>                                                                                 -->
                                                        <span class="d-block mt-lg-0 mt-0 mb-lg-3 mb-2 pt-3">
                                                            <p class="mb-0 d-inline-block label-tag-title"><strong class="font-weight-500 font-point9rem">Have a Coupon Code?</strong>
                                                            <div class="number d-inline-block promo position-relative">
                                                                <input type="text" placeholder="enter code" id="paypalcouponcode" name="promo code" />
                                                                <input class="ml-lg-2 purple-bg text-center text-white border-0 position-absolute" type="button" value="Apply coupon" id="applycouponpaypal" name="apply code" />
                                                            </div>
                                                            </p>
                                                        </span>
                                                        <p class="d_font_line">You are agreeing with our <a href="https://fastestvpn.com/terms-of-service/">Terms of Service</a> & <a href="https://fastestvpn.com/privacy-policy">Privacy Policy</a> once you proceed to pay.</p>
                                                        <div class="alert couponmessagepaypalalertsec d-none">
                                                            <p id="couponmessagepaypalsec"></p>
                                                        </div>
                                                        <div class="mt-lg-4 mt-3">
                                                            <button type="button" class="btn-warning purple-gradient text-capitalize text-white text-decoration-none p-3 d-inline-block text-center position-relative overflow-hidden font-weight-600 rounded w-30 goal" id="{{ env('paypalBuyButtonHtml') }}">Pay With PayPal</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="col-12 pt-lg-2 pl-md-0">
                                            <div class="border">
                                                <div class="opt-box border-0 ac_pay_title">
                                                    <div id="accordion">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="card-link">
                                                                    <span class="accordion-btn "></span>
                                                                    Pay With @if(!isset($VpnCreditTitle)) Credit @else @endif Card
                                                                    <picture class="ml-lg-4 mt-lg-0 mt-4 d-inline-block">
                                                                        <source srcset="{{ ('../images/pay-method-icon.webp') }}" type="image/webp">
                                                                        <source srcset="{{ ('../images/pay-method-icon.png') }}" type="image/png">
                                                                        <img class="img-fluid lazyload" loading="lazy" data-src="{{ ('../images/pay-method-icon.png') }}" alt="Credit Card" title="Credit Card" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=">
                                                                    </picture>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="cardPayment" class="ac_pay_detail" style="display:none">
                                                    <div class="card-body">
                                                        <strong class="font-weight-700 font-point9rem d-block mb-2">Review and Confirm Your</strong>
                                                        <label class="mt-lg-0 mt-3 plan-content">
                                                            <span class=" pr-lg-0 font-weight-500">Order Total: $
                                                                <span class="billingtotal font-weight-600">39.95</span>
                                                            </span>
                                                            <span class="promoprice"></span>
                                                            <span class="addonpricevalue"></span>
                                                            <span class="detectIpPrice"></span>
                                                            <span class="detectPfPrice"></span>
                                                            <span class="finalpayment"></span>
                                                            <span class="billingmessage"></span>
                                                        </label>
                                                        <span class="d-block mt-lg-3 mt-1 mb-lg-3 mb-2">
                                                            <p class="mb-0 d-inline-block label-tag-title"><strong class="font-weight-500 font-point9rem">Have a Coupon Code?</strong>
                                                            <div class="number d-inline-block promo position-relative">
                                                                <input type="text" placeholder="enter code" id="creditcardcouponcode" name="promo code" />
                                                                <input class="ml-lg-2 purple-bg text-center text-white border-0 position-absolute" type="button" value="Apply coupon" id="applycouponcreditcard" name="apply code" />
                                                            </div>
                                                            </p>
                                                        </span>
                                                        <p class="d_font_line">You are agreeing with our <a href="https://fastestvpn.com/terms-of-service/">Terms of Service</a> & <a href="https://fastestvpn.com/privacy-policy">Privacy Policy</a> once you proceed to pay.</p>
                                                        <div class="alert couponmessagecardalert d-none">
                                                            <p id="couponmessagecard"></p>
                                                        </div>
                                                        <div class="mt-lg-4 mt-3">
                                                            <button type="button" class="btn-warning purple-gradient text-capitalize text-white text-decoration-none p-3 d-inline-block text-center position-relative overflow-hidden font-weight-600 rounded w-40 goal" id="buyvpnviafastspring">Pay With Credit Card</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-lg-0 pt-lg-2 mt-0 mb-3 pay_step_crypto">
                                        <div class="col-12 pl-md-0">
                                            <div class="border">
                                                <div class="opt-box border-0 ac_pay_title">
                                                    <div id="accordion">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="card-link font-weight-700">
                                                                    <span class="accordion-btn"></span>
                                                                    Pay With Crypto
                                                                    <picture class="ml-lg-4 ml-2">
                                                                        <img src="../images/pay_icon/BCH-1.webp" class="lazyload" loading="lazy" alt="Bitcoin Cash" width="100" height="40"><img src="../images/pay_icon/LTC-1.webp" class="lazyload" loading="lazy" alt="Lite coin" width="100" height="40"><img src="../images/pay_icon/ETH-1.webp" class="lazyload" loading="lazy" alt="Ethereum" width="100" height="40"><img src="../images/pay_icon/BTC-1.webp" class="lazyload" loading="lazy" alt="Bitcoin" width="100" height="40"><img src="../images/pay_icon/crypto_dash.png" class="lazyload" loading="lazy" alt="Dash" width="100" height="30">
                                                                    </picture>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="paypalPayment" class="ac_pay_detail" style="display:none">
                                                    <div class="card-body">
                                                        <strong class="font-weight-700 font-point9rem d-block mb-2">Review and Confirm Your</strong>
                                                        <label class="mt-lg-0 mt-3 plan-content"><span class=" pr-lg-0 font-weight-500">Order Total: $<span class="billingtotal font-weight-600">39.95</span></span>
                                                            <span class="promoprice"></span>
                                                            <span class="detectIpPrice"></span>
                                                            <span class="addonpricevalue"></span>
                                                            <span class="finalpayment"></span>
                                                            <span class="detectPfPrice"></span>
                                                            <span class="billingmessage">3 Year Plan (<span class=" font-weight-600">$39.95</span> prepaid 3 years, instead of $320) <br>PassHulk Password Manager <strong>FREE</strong></span></label>

                                                        <div class="choose_payment_method">
                                                            <h3>Choose payment method</h3>
                                                            <div class="cpm_row row">
                                                                <div class="col-sm-2 cpm_list">
                                                                    <div class="pay_icon_box" data-id="bch">
                                                                        <div class="pay_icon_img">
                                                                            <img src="{{ ('../images/pay_icon/BCH-1.webp') }}" class="lazyload" loading="lazy" alt="Bitcoin Cash">
                                                                        </div>
                                                                        <p>Bitcoin Cash</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2 cpm_list">
                                                                    <div class="pay_icon_box" data-id="ltc">
                                                                        <div class="pay_icon_img">
                                                                            <img src="{{ ('../images/pay_icon/LTC-1.webp') }}" class="lazyload" loading="lazy" alt="Litecoin">
                                                                        </div>
                                                                        <p>Litecoin</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2 cpm_list">
                                                                    <div class="pay_icon_box" data-id="eth">
                                                                        <div class="pay_icon_img">
                                                                            <img src="{{ ('../images/pay_icon/ETH-1.webp') }}" class="lazyload" loading="lazy" alt="Ethereum">
                                                                        </div>
                                                                        <p>Ethereum</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2 cpm_list">
                                                                    <div class="pay_icon_box" data-id="btc">
                                                                        <div class="pay_icon_img">
                                                                            <img src="{{ ('../images/pay_icon/BTC-1.webp') }}" class="lazyload" loading="lazy" alt="Bitcoin">
                                                                        </div>
                                                                        <p>Bitcoin</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2 cpm_list">
                                                                    <div class="pay_icon_box" data-id="dash">
                                                                        <div class="pay_icon_img">
                                                                            <img src="{{ ('../images/pay_icon/crypto_dash.png') }}" class="lazyload" loading="lazy" alt="Dash">
                                                                        </div>
                                                                        <p>Dash</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="d_font_line">You are agreeing with our <a href="https://fastestvpn.com/terms-of-service/">Terms of Service</a> & <a href="https://fastestvpn.com/privacy-policy">Privacy Policy</a> once you proceed to pay.</p>
                                                        <div class="alert couponmessagepaypalalert d-none">
                                                            <p id="couponmessagepaypal"></p>
                                                        </div>
                                                        <div class="mt-lg-4 mt-3">
                                                            <button type="button" class="btn-warning purple-gradient text-capitalize text-white text-decoration-none p-3 d-inline-block text-center position-relative 
                                                                    overflow-hidden font-weight-600 rounded w-40 goal" id="buyvpnvianowpayments">Pay With NowPayments</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 pt-lg-2 pl-md-0 mr-5">
                                            <div class="border">
                                                <div class="opt-box border-0 ac_pay_title">
                                                    <div id="accordion">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="card-link">
                                                                    <span class="accordion-btn "></span>
                                                                    Pay With Paypal or Credit Card
                                                                    <picture class="ml-lg-4 mt-lg-0 mt-4 d-inline-block">
                                                                        <source srcset="{{ ('../themes/v2/images/withpaypalotherimgs.png') }}" type="image/webp">
                                                                        <source srcset="{{ ('../themes/v2/images/withpaypalotherimgs.png') }}" type="image/png">
                                                                        <img class="img-fluid lazyload" loading="lazy" data-src="{{ ('../themes/v2/images/withpaypalotherimgs.png') }}" alt="Credit Card" title="Credit Card" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=">
                                                                    </picture>
                                                                    <!--<picture class="ml-lg-4 mt-lg-0 mt-4 d-inline-block">-->
                                                                    <!--    <source srcset="../images/paypal.webp" type="image/webp">-->
                                                                    <!--    <source srcset="../images/paypal.png" type="image/png">-->
                                                                    <!--    <img class="img-fluid" data-src="../images/paypal.png" alt="Paypal" title="Paypal" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=">-->
                                                                    <!--</picture>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="cardPayment" class="ac_pay_detail" style="display:none">
                                                    <div class="card-body">
                                                        <strong class="font-weight-700 font-point9rem d-block mb-2">Review and Confirm Your</strong>
                                                        <label class="mt-lg-0 mt-3 plan-content">
                                                            <span class=" pr-lg-0 font-weight-500">Order Total: $
                                                                <span class="billingtotal font-weight-600">39.95</span>
                                                            </span>
                                                            <span class="promoprice"></span>
                                                            <span class="addonpricevalue"></span>
                                                            <span class="detectIpPrice"></span>
                                                            <span class="detectPfPrice"></span>
                                                            <span class="finalpayment"></span>
                                                            <span class="billingmessage"></span>
                                                        </label>
                                                        <span class="d-block mt-lg-3 mt-1 mb-lg-3 mb-2">
                                                            <p class="mb-0 d-inline-block label-tag-title"><strong class="font-weight-500 font-point9rem">Have a Coupon Code?</strong>
                                                            <div class="number d-inline-block promo position-relative">
                                                                <input type="text" placeholder="enter code" id="payypalcreditcardcouponcode" name="promo code" />
                                                                <input class="ml-lg-2 purple-bg text-center text-white border-0 position-absolute" type="button" value="Apply coupon" id="applycouponcreditcard" name="apply code" />
                                                            </div>
                                                            </p>
                                                        </span>
                                                        <p class="d_font_line">You are agreeing with our <a href="https://fastestvpn.com/terms-of-service/">Terms of Service</a> & <a href="https://fastestvpn.com/privacy-policy">Privacy Policy</a> once you proceed to pay.</p>
                                                        <div class="alert couponpaypalmessagecardalert d-none">
                                                            <p id="couponpaypalmessagecard"></p>
                                                        </div>
                                                        <div class="mt-lg-4 mt-3">
                                                            <button type="button" class="btn-warning purple-gradient text-capitalize text-white text-decoration-none p-3 d-inline-block text-center position-relative overflow-hidden font-weight-600 rounded w-40 goal" id="buyvpnviapaypalinvoice">Pay With Paypal or Credit Card</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!--<div class="row mb-lg-0 pt-lg-2 mt-3 mb-3">-->
                                <!--    <div class="col-12">-->
                                <!--        <div class="border">-->
                                <!--            <div class="opt-box border-0 ac_pay_title">-->
                                <!--                <div id="accordion">-->
                                <!--                    <div class="card">-->
                                <!--                        <div class="card-header">-->
                                <!--                            <div class="card-link font-weight-700">-->
                                <!--                                <span class="accordion-btn text-purple"></span>-->
                                <!--                                Pay With Crypto-->
                                <!--                                <picture class="ml-lg-4 ml-2">-->
                                <!--                                        <img src="../images/pay_icon/BCH-1.jpg" alt="Bitcoin Cash" width="100" height="40"><img src="../images/pay_icon/LTC-1.jpg" alt="Lite coin" width="100" height="40"><img src="../images/pay_icon/ETH-1.jpg" alt="Ethereum" width="100" height="40"><img src="../images/pay_icon/BTC-1.jpg" alt="Bitcoin" width="100" height="40">-->
                                <!--                                </picture>-->
                                <!--                            </div>-->
                                <!--                        </div>-->
                                <!--                    </div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--            <div id="paypalPayment" class="ac_pay_detail" style="display:none">-->
                                <!--                <div class="card-body pt-0">-->
                                <!--                    <strong class="font-weight-700 font-point9rem d-block mb-2">Review and Confirm Your</strong>-->
                                <!--                    <label class="mt-lg-0 mt-3 plan-content"><span class="text-purple pr-lg-0 font-weight-500">Order Total: $<span class="billingtotal font-weight-600">39.95</span></span> <span class="promoprice"></span> <span class="addonpricevalue"></span> <span class="finalpayment"></span><span class="billingmessage">3 Year Plan (<span class="text-purple font-weight-600">$39.95</span> prepaid 3 years, instead of $320) <br>PassHulk Password Manager <strong>FREE</strong></span></label>-->
                                <!--                    {{--<span class="d-block mt-lg-3 mt-1 mb-lg-3 mb-2">-->
                                <!--                        <p class="mb-0 d-inline-block label-tag-title"><strong class="font-weight-500 font-point9rem">Have a Coupon Code?</strong>-->
                                <!--                            <div class="number d-inline-block promo position-relative">-->
                                <!--                                <input type="text" placeholder="enter code" id="cryptocouponcode" name="promo code" />-->
                                <!--                                <input class="ml-lg-2 purple-bg text-center text-white border-0 position-absolute" type="button" value="Apply coupon" id="applycouponpayop" name="apply code" />-->
                                <!--                            </div>-->
                                <!--                        </p>-->
                                <!--                    </span>--}}-->
                                <!--                    <div class="alert couponmessagecryptoalert d-none">-->
                                <!--                        <p id="couponmessagecrypto"></p>-->
                                <!--                    </div>-->
                                <!--                    <div class="choose_payment_method">-->
                                <!--                        <h3>Choose payment method</h3>-->
                                <!--                        <div class="cpm_row">-->
                                <!--                            <div class="col__6 cpm_list">-->
                                <!--                                <div class="pay_icon_box" data-id="200016">-->
                                <!--                                    <div class="pay_icon_img">-->
                                <!--                                        <img src="{{ ('../images/pay_icon/BCH-1.jpg') }}" alt="Bitcoin Cash">-->
                                <!--                                    </div>-->
                                <!--                                    <p>Bitcoin Cash</p>-->
                                <!--                                </div>-->
                                <!--                            </div>-->
                                <!--                            <div class="col__6 cpm_list">-->
                                <!--                                <div class="pay_icon_box" data-id="200014">-->
                                <!--                                    <div class="pay_icon_img">-->
                                <!--                                        <img src="{{ ('../images/pay_icon/LTC-1.jpg') }}" alt="Litecoin">-->
                                <!--                                    </div>-->
                                <!--                                    <p>Litecoin</p>-->
                                <!--                                </div>-->
                                <!--                            </div>-->
                                <!--                            <div class="col__6 cpm_list">-->
                                <!--                                <div class="pay_icon_box" data-id="200015">-->
                                <!--                                    <div class="pay_icon_img">-->
                                <!--                                        <img src="{{ ('../images/pay_icon/ETH-1.jpg') }}" alt="Ethereum">-->
                                <!--                                    </div>-->
                                <!--                                    <p>Ethereum</p>-->
                                <!--                                </div>-->
                                <!--                            </div>-->
                                <!--                            <div class="col__6 cpm_list">-->
                                <!--                                <div class="pay_icon_box" data-id="200013">-->
                                <!--                                    <div class="pay_icon_img">-->
                                <!--                                        <img src="{{ ('../images/pay_icon/BTC-1.jpg') }}" alt="Bitcoin">-->
                                <!--                                    </div>-->
                                <!--                                    <p>Bitcoin</p>-->
                                <!--                                </div>-->
                                <!--                            </div>-->
                                <!--                            <div class="col__6 cpm_list">-->
                                <!--                                <div class="pay_icon_box" data-id="4605">-->
                                <!--                                    <div class="pay_icon_img">-->
                                <!--                                        <img src="{{ ('../images/pay_icon/crypto_dash.png') }}" alt="Dash">-->
                                <!--                                    </div>-->
                                <!--                                    <p>Dash</p>-->
                                <!--                                </div>-->
                                <!--                            </div>-->
                                <!--                        </div>-->
                                <!--                    </div>-->
                                <!--                    <p class="d_font_line">You are agreeing with our <a href="https://fastestvpn.com/terms-of-service/">Terms of Service</a> &  <a href="https://fastestvpn.com/privacy-policy">Privacy Policy</a> once you proceed to pay.</p>-->
                                <!--                    <div class="mt-lg-4 mt-3">-->
                                <!--                        <button type="button" class="btn-warning purple-gradient text-capitalize text-white text-decoration-none p-3 d-inline-block text-center position-relative overflow-hidden font-weight-600 rounded w-30 goal" id="buyvpnviapayop">Pay Now</button>-->
                                <!--                    </div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                    <input type="hidden" id="selectedplanprice" name="dataplanprice" value="39.95">
                                    <input type="hidden" id="selectedplanid" name="dataplanid" value="256">
                                    <input type="hidden" id="selectedplanbillingcycle" name="dataplanbillingcycle" value="monthly">
                                    <input type="hidden" id="selectedplanbillingtype" name="dataplanbillingtype" value="recurring">
                                    <input type="hidden" id="selectedplanid" name="dataplanid" value="256">
                                    <input type="hidden" id="selectedplanid" name="dataplanid" value="256">
                                    <input type="hidden" id="additionalprice" name="addonprice" value="0">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 float-right mt-lg-0 mt-4">
                                    <div class="trust-pilot position-relative text-center rounded pt-lg-0 pb-lg-4 pb-4 pt-0">
                                        <h4 class="head-rating">
                                            Trustpilot Rating
                                        </h4>
                                        <span class="sec-log mt-lg-3  mb-lg-3 d-inline-block">
                                            <picture>
                                                <source srcset="{{ ('../images/trust_logo_icon.webp') }}" type="image/webp">
                                                <source srcset="{{ ('../images/trust_logo_icon.png') }}" type="image/png">
                                                <img class="img-fluid lazyload" loading="lazy" data-src="{{ ('../images/trust_logo_icon.png') }}" alt="" title="" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=">
                                            </picture>

                                        </span>

                                        <div class="trusted-text mt-lg-2 d-inline-block mt-2 mb-lg-2">
                                            <span>Excellent <span class="color-green">4.0</span><span> |
                                                </span>615 Reviews</span>
                                        </div>
                                    </div>
                                    <div class="all-plans pt-lg-4 pb-lg-4 pl-lg-4 pr-lg-4 p-3 mt-lg-4 mt-4">
                                        <h5 class="title">All Plans Include:</h5>
                                        <ul class="list-unstyled mt-lg-4 mt-2 mb-0">
                                            <li><a href="#">Internet Kill Switch</a></li>
                                            <li><a href="#">P2P Optimized Servers</a></li>
                                            <li><a href="#">Free Malware Protection</a></li>
                                            <li><a href="#">Free NAT Firewall</a></li>
                                            <li><a href="#">Free Adblocker</a></li>
                                            <li><a href="#">256-bit AES Encryption</a></li>
                                            <li><a href="#">10 Multi Logins</a></li>
                                            <li><a href="#">Unlimited Server Switching</a></li>
                                            <li><a href="#">24/7 support via Live Chat</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="paypalpaymentresponse" style="display: none !important;"></div>
        <div id="payment_popup">
            <button type="button" class="payment_popup_close_button" aria-hidden="true">&#x2715</button>
            <iframe id="storefront" src="" style="position: fixed;top: 0px;left: 0px;width: 100%;height: 100vh;border: none;background: transparent;display:none;z-index:9999"></iframe>
        </div>
    </section>

    <!-- compare section start -->
    <section class="compare-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="banner-title text-center">Compare and find your best fit</h2>
                    <h4 class="compare-section-subtitle text-center">(personal and family)</h4>
                </div>
                <div class="col-12 packages-overflow">
                    <div class="packages-compare-area">
                        <div class="row gx-0">
                            <div class="col-3">
                                <div class="package-detail-area">
                                    <div class="package-top-area"></div>
                                    <div class="package-center-area">
                                        <div class="package-discrip-box">
                                            <p class="package-feature-2  m-0">User accounts</p>
                                        </div>
                                        <div class="package-discrip-box">
                                            <p class="package-feature-2 m-0">Unlimited number of passwords <br> and access keys</p>
                                        </div>
                                        <div class="package-discrip-box">
                                            <p class="package-feature-2 after m-0">Automatic saving and filling</p>
                                        </div>
                                        <div class="package-discrip-box">
                                            <p class="package-feature-2 after m-0">Importing passwords</p>
                                        </div>
                                        <div class="package-discrip-box">
                                            <p class="package-feature-2 m-0">Complex password generator</p>
                                        </div>
                                        <div class="package-discrip-box">
                                            <p class="package-feature-2 m-0">Automatic synchronization <br> between devices</p>
                                        </div>
                                        <div class="package-discrip-box">
                                            <p class="package-feature-2 m-0">Multi-Factor Authentication (MFA)</p>
                                        </div>
                                        <div class="package-discrip-box">
                                            <p class="package-feature-2 m-0">Unlocking the safe using biometrics</p>
                                        </div>
                                        <div class="package-discrip-box">
                                            <p class="package-feature-2 m-0">Files</p>
                                        </div>
                                        <div class="package-discrip-box">
                                            <p class="package-feature-2 after m-0">24/7 support</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="package-detail-area">
                                    <div class="package-top-area text-center">
                                        <h3 class="package-title">Free</h3>
                                        <span class="package-feature d-block">30-Day Premium Trial</span>
                                        <div class="accoount-spacification-details justify-content-center">
                                            <img class="img-fluid" src="./assets/images/pricing-icon-1.png" alt="">
                                            <span class="package-feature-2">No credit card needed</span>
                                        </div>
                                    </div>
                                    <div class="package-center-area">
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/pricing-icon-2.png" alt="">
                                            <p class="package-feature-2 m-0">User accounts</p>
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="package-bottom-area">
                                        <a href="#" class="get-free-lockpass">
                                            <span class="get-free-lockpass-text"> Get Free Lockmypass</span>
                                            <span class="angle">
                                                <i class="bi bi-chevron-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="package-detail-area premium-package">
                                    <h4 class="recommended-tag">RECOMMENDED</h4>
                                    <div class="package-top-area text-center">
                                        <h3 class="package-title">Premium</h3>
                                        <span class="package-feature d-block">NO CREDIT CARD NEEDED</span>
                                        <div class="accoount-spacification-details justify-content-center">
                                            <img class="img-fluid" src="./assets/images/pricing-icon-3.png" alt="">
                                            <span class="package-feature-2">30 day money back guarantee</span>
                                        </div>
                                    </div>
                                    <div class="package-center-area">
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/pricing-icon-2.png" alt="">
                                            <p class="package-feature-2  m-0">1 Premium user account</p>
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="package-bottom-area">
                                        <a href="#" class="get-free-lockpass">
                                            <span class="get-free-lockpass-text">Get Premium</span>
                                            <span class="angle">
                                                <i class="bi bi-chevron-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="package-detail-area">
                                    <div class="package-top-area text-center">
                                        <h3 class="package-title">Families</h3>
                                        <span class="package-feature d-block">NO CREDIT CARD NEEDED</span>
                                        <div class="accoount-spacification-details justify-content-center">
                                            <img class="img-fluid" src="./assets/images/pricing-icon-3.png" alt="">
                                            <span class="package-feature-2">30 day money back guarantee</span>
                                        </div>
                                    </div>
                                    <div class="package-center-area">
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/pricing-icon-2.png" alt="">
                                            <p class="package-feature-2 m-0">6 Premium user accounts</p>
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                        <div class="package-discrip-box justify-content-center">
                                            <img class="img-fluid" src="./assets/images/tick-square-2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="package-bottom-area">
                                        <a href="#" class="get-free-lockpass">
                                            <span class="get-free-lockpass-text"> Subscribe to Family</span>
                                            <span class="angle">
                                                <i class="bi bi-chevron-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- compare section end -->

    <!-- any questions section start -->
    <section class="any-questions-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="banner-title text-center">Any questions?</h2>
                </div>
            </div>
        </div>
        <div class="any-questions-inner">
            <div class="container">
                <div class="row md-justify-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="advance-security-list-item any-question-box">
                            <img class="img-fluid" src="./assets/images/any-question-icon-1.png" alt="">
                            <h2 class="advance-security-list-title">Help center</h2>
                            <p class="advance-security-list-text">need help with your plan?</p>
                            <a class="arrow-cta" href="#">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="advance-security-list-item any-question-box">
                            <img class="img-fluid" src="./assets/images/any-question-icon-2.png" alt="">
                            <h2 class="advance-security-list-title">Become affiliate</h2>
                            <ul class="any-question-list">
                                <li class="any-question-list-item">
                                    <p class="advance-security-list-text m-0">Competitive rates of commission. </p>
                                </li>
                                <li class="any-question-list-item">
                                    <p class="advance-security-list-text m-0">There are several payout models and simple withdrawal processes. </p>
                                </li>
                                <li class="any-question-list-item">
                                    <p class="advance-security-list-text m-0">An enthusiastic account manager.</p>
                                </li>
                            </ul>
                            <a class="arrow-cta" href="#">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="advance-security-list-item any-question-box">
                            <img class="img-fluid" src="./assets/images/any-question-icon-3.png" alt="">
                            <h2 class="advance-security-list-title">Student discount </h2>
                            <p class="advance-security-list-text">Get a student discount! A 2-year plan with up to 60% discount.</p>
                            <a class="arrow-cta" href="#">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- any questions section end -->

    <!-- frequently asked questions section start -->
    <section class="faq-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="banner-title text-center">Frequently asked questions</h2>
                </div>
                <div class="col-12">
                    <div class="faq-area">
                        <div class="faq-item faq-box active">
                            <button type="button" class="faq-btn">
                                What’s the difference between the Free and Premium plans?
                            </button>
                            <div class="faq-item-bottom faq-text-area">
                                <p class="faq-item-text mb-0">
                                    Lock My Pass free plan provides all the important features one would require, from autosave and autofill to unlimited password storage and automatic sync across devices the free plan gives you all. It also allows you to have an add-in security with multi-factor authentication. However, what you don’t get in the free plan is password sharing, the ability to switch between devices without the need to log in, password Health, and Data Breach Scanner. These features are why premium plans are the best to get!
                                </p>
                            </div>
                        </div>
                        <div class="faq-item faq-box">
                            <button type="button" class="faq-btn">
                                Why use a business password manager?
                            </button>
                            <div class="faq-item-bottom faq-text-area">
                                <p class="faq-item-text mb-0">
                                    Lock My Pass free plan provides all the important features one would require, from autosave and autofill to unlimited password storage and automatic sync across devices the free plan gives you all. It also allows you to have an add-in security with multi-factor authentication. However, what you don’t get in the free plan is password sharing, the ability to switch between devices without the need to log in, password Health, and Data Breach Scanner. These features are why premium plans are the best to get!
                                </p>
                            </div>
                        </div>
                        <div class="faq-item faq-box">
                            <button type="button" class="faq-btn">
                                What payment methods does Lock My Pass support?
                            </button>
                            <div class="faq-item-bottom faq-text-area">
                                <p class="faq-item-text mb-0">
                                    Lock My Pass free plan provides all the important features one would require, from autosave and autofill to unlimited password storage and automatic sync across devices the free plan gives you all. It also allows you to have an add-in security with multi-factor authentication. However, what you don’t get in the free plan is password sharing, the ability to switch between devices without the need to log in, password Health, and Data Breach Scanner. These features are why premium plans are the best to get!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- frequently asked questions section end -->

</main>

<?php include './includes/footer.php' ?>