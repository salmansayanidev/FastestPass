<section id="payment" class="payment-main mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="payment">
                    <form action="javascript:;" method="post" id="buyvpnform" name="buyvpnform">
                        <div class="row step_3_mob">
                            <div class="col-lg-8 col-12">
                                <div class="payment-box-main">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert emailmessagealert d-none">
                                                <p id="emailmessage"></p>
                                            </div>
                                            <div class="mt-lg-3 mt-2 step_title step-box">
                                                <span class="step_number">step 02</span>
                                                <div class="infoCard">
                                                    <h4>Create Your Account</h4>
                                                    <p> (We will send your credentials on the email you enter below)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-4 col-12 pr-md-0 pl-md-0">-->
                                        <!--    <div class="form-group mb-lg-0">-->
                                        <!--        <input type="hidden" class="form-control" id="name" value="customer" name="name" placeholder="your name">-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="col-md-12 col-12 pl-md-0">
                                            <div class="form-group mb-lg-0">
                                                <input type="hidden" class="form-control" id="name" value="customer" name="name" placeholder="your name">
                                                <input type="email" class="form-control payment-field" id="availableemail" name="email" placeholder="Enter Your Email Address" required>
                                                <!--<input type="email" class="form-control" id="availableemail" name="email" placeholder="your email">-->
                                            </div>
                                        </div>
                                        <!--<div class="col-md-4 col-12 pl-md-0">-->
                                        <!--    <div class="form-group mb-lg-0">-->
                                        <!--        <input type="email" class="form-control" id="confirmEmail" name="confirm_email" placeholder="confirm email">-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                                <div class="payment-box-main">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3 step_title step-box">
                                                <span class="step_number">step 03</span>
                                                <div class="infoCard">
                                                    <h4>Add-Ons (Optional)</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="opt-box pay-area">
                                                <div class="mb-4">
                                                    <p class="mb-0 d-inline-block label-tag-title"><strong class="font-weight-700 font-point9rem">Currently You Have 10 Multi Logins</strong></p>
                                                </div>
                                                <div class="checkbox-1">
                                                    <div>
                                                        <input type="checkbox" class="pyment-check" id="addadditonaldevices" name="check" value="" />
                                                        <label for="check" id="markcheckaddon">
                                                            <span class="checkbox-addon"></span>
                                                            Add more Multi Logins - <span class="dollar-sign">$</span><span class="addonmorevalue">1</span> for an additional device (Optional)
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="add-device-area mt-lg-4 mt-1 mb-lg-1 mb-2" id="showadditionaldevicelogin">
                                                    <p class="mb-0 label-tag-title">
                                                        <strong class="font-weight-700 font-point9rem position-relative">Add Devices </strong>
                                                    </p>
                                                    <div class="number">
                                                        <span id="minusaddon" class="minus">
                                                            <i class="fa-solid fa-minus"></i>
                                                        </span>
                                                        <input id="addonneeded" class=" form-control payment-field w-70px px-1 text-center" type="text" value="0" oninput="validity.valid||(value=value.replace(/\D+/g, ''))" />
                                                        <span id="plusaddon" class="plus">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                    </div>
                                                    <p class="mb-0 label-tag-title"><strong class="font-weight-700 font-point9rem position-relative">Price Added:<span class="ml-lg-1">$ <span id="addonprice"></span></span></strong></p>
                                                    <input type="hidden" id="addonrate" value="1">
                                                </div>
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
                                        <div class="col-12">
                                            <div class="opt-box pay-area">
                                                <div class="mb-4">
                                                    <p class="mb-0 d-inline-block label-tag-title"><strong class="font-weight-700 font-point9rem">Dedicated IP</strong></p>
                                                </div>
                                                <div class="checkbox-1">
                                                    <div>
                                                        <input type="checkbox" id="detectIP" class="pyment-check" name="check" value="" />
                                                        <label for="check" id="DectectIpRadio">
                                                            <span class="checkbox-addon"></span>
                                                            Want to add a Dedicated IP for - <span class="dollar-sign">$</span><span id="dedicatedIpPriceDisplay"> 1.49/mo</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="dedicated-ip-inner mt-4" id="showdetectIP">
                                                    <div class="custom-control custom-radio detectIp_radio_buttons">
                                                        <input type="radio" class="custom-control-input d-none" id="US-DIP" name="detectIPRadio" value="2" checked>
                                                        <label class="custom-control-label" for="US-DIP">
                                                            <span class="dedicated-ip-radion-circle"></span>
                                                            <img src="./assets/images/usa-flag-img.png" alt="United States">
                                                            United States Dedicated IP (USA)
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-radio detectIp_radio_buttons">
                                                        <input type="radio" class="custom-control-input d-none" id="ES-DIP" name="detectIPRadio" value="3">
                                                        <label class="custom-control-label" for="ES-DIP">
                                                            <span class="dedicated-ip-radion-circle"></span>
                                                            <img src="./assets/images/russia-flag-img.webp" alt="Russia">
                                                            Russia (RU)
                                                        </label>
                                                    </div>

                                                    <div class="custom-control custom-radio detectIp_radio_buttons">
                                                        <input type="radio" class="custom-control-input d-none" id="UK-DIP" name="detectIPRadio" value="7">
                                                        <label class="custom-control-label" for="UK-DIP">
                                                            <span class="dedicated-ip-radion-circle"></span>
                                                            <img src="./assets/images/germany-flag-img.png" alt="Germany">
                                                            Germany Dedicated IP (GR)
                                                        </label>
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

                                        <div class="col-12">
                                            <div class="opt-box pay-area mb-0">
                                                <div class="mb-4">
                                                    <p class="mb-0 d-inline-block label-tag-title">
                                                        <strong class="font-weight-700 font-point9rem">Add Port Forwarding</strong>
                                                    </p>
                                                </div>
                                                <div class="checkbox-1">
                                                    <div>
                                                        <input type="checkbox" class="pyment-check" id="pf_check" name="check" value="" />
                                                        <label for="check" id="pf_checkLabel">
                                                            <span class="checkbox-addon"></span>
                                                            Want to add a Port Forwarding for - <span class="dollar-sign">$</span><span id="dedicatedIpPriceDisplay"> 1.2/mo</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="step_title pb-4 step-box">
                                                <span class="step_number">step 04</span>
                                                <div class="infoCard">
                                                    <h4 class="m-0">Select Your Preferred Method of Payment:</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="border pay-area">
                                                <div class="opt-box border-0 ac_pay_title">
                                                    <div id="accordion">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="card-link">
                                                                    <span class="accordion-btn"></span>
                                                                    Pay With Paypal
                                                                    <img class="img-fluid" alt="Paypal" title="Paypal" src="./assets/images/pay-paypal-img.webp">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="paypalPayment" class="ac_pay_detail" style="display:none">
                                                    <div class="card-body mb-2">
                                                        <strong class="font-weight-700 font-point9rem d-block mb-2">Review and Confirm Your</strong>
                                                        <label class="mt-lg-0 mt-3 plan-content">
                                                            <span class="pr-lg-0 fw-medium">Order Total: $<span class="billingtotal fw-semibold">39.95</span></span> <span class="promoprice"></span>
                                                            <span class="addonpricevalue"></span>
                                                            <span class="detectIpPrice"></span>
                                                            <span class="detectPfPrice"></span>
                                                            <span class="finalpayment"></span>
                                                            <span class="billingmessage">3 Year Plan (<span class="fw-semibold">$39.95</span> prepaid 3 years, instead of $320) <br>PassHulk Password Manager <strong>FREE</strong></span>
                                                        </label>


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
                                                        <div class="mt-lg-0 mt-0 mb-lg-3 mb-2 pt-3 coupon-field-area">
                                                            <p class="mb-0 d-inline-block label-tag-title"><strong class="font-weight-500 font-point9rem">Have a Coupon Code?</strong>
                                                            <div class="number promo position-relative">
                                                                <input class="payment-field" type="text" placeholder="Enter Code" id="paypalcouponcode" name="promo code" />
                                                                <input class="primary-btn secondary-btn" type="button" value="Apply coupon" id="applycouponpaypal" name="apply code" />
                                                            </div>
                                                            </p>
                                                        </div>
                                                        <p class="d_font_line">You are agreeing with our <a href="#">Terms of Service</a> & <a href="#">Privacy Policy</a> once you proceed to pay.</p>
                                                        <div class="alert couponmessagepaypalalertsec d-none">
                                                            <p id="couponmessagepaypalsec"></p>
                                                        </div>
                                                        <div class="mt-lg-4 mt-3">
                                                            <button type="button" class="btn-warning primary-btn secondary-btn" id="{{ env('paypalBuyButtonHtml') }}">Pay With PayPal</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="border pay-area">
                                                <div class="opt-box border-0 ac_pay_title">
                                                    <div id="accordion">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="card-link">
                                                                    <span class="accordion-btn "></span>
                                                                    Pay With Credit Card
                                                                    <img class="img-fluid lazyload" loading="lazy" alt="Credit Card" title="Credit Card" src="./assets/images/pay-creadit-card-img.webp">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="cardPayment" class="ac_pay_detail" style="display:none">
                                                    <div class="card-body">
                                                        <strong class="font-weight-700 font-point9rem d-block mb-2">Review and Confirm Your</strong>
                                                        <label class="mt-lg-0 mt-3 plan-content">
                                                            <span class=" pr-lg-0 fw-medium">Order Total: $
                                                                <span class="billingtotal fw-semibold">39.95</span>
                                                            </span>
                                                            <span class="promoprice"></span>
                                                            <span class="addonpricevalue"></span>
                                                            <span class="detectIpPrice"></span>
                                                            <span class="detectPfPrice"></span>
                                                            <span class="finalpayment"></span>
                                                            <span class="billingmessage"></span>
                                                        </label>
                                                        <div class="mt-lg-3 mt-1 mb-lg-3 mb-2 coupon-field-area">
                                                            <p class="mb-0 label-tag-title"><strong class="fw-medium font-point9rem">Have a Coupon Code?</strong>
                                                            <div class="number promo position-relative">
                                                                <input class="payment-field" type="text" placeholder="enter code" id="creditcardcouponcode" name="promo code" />
                                                                <input class="primary-btn secondary-btn" type="button" value="Apply coupon" id="applycouponcreditcard" name="apply code" />
                                                            </div>
                                                            </p>
                                                        </div>
                                                        <p class="d_font_line">You are agreeing with our <a href="#">Terms of Service</a> & <a href="#">Privacy Policy</a> once you proceed to pay.</p>
                                                        <div class="alert couponmessagecardalert d-none">
                                                            <p id="couponmessagecard"></p>
                                                        </div>
                                                        <div class="mt-lg-4 mt-3">
                                                            <button type="button" class="btn-warning primary-btn secondary-btn" id="buyvpnviafastspring">Pay With Credit Card</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pay-area">
                                    <div class="row pay_step_crypto">
                                        <div class="col-12">
                                            <div class="border">
                                                <div class="opt-box border-0 ac_pay_title">
                                                    <div id="accordion">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="card-link font-weight-700">
                                                                    <span class="accordion-btn"></span>
                                                                    Pay With Crypto
                                                                    <div class="ml-lg-4 ml-2 cripto-pay-imgs-area">
                                                                        <img src="./assets/images/BCH-1.webp" class="lazyload cripto-pay-img m-0 img-fluid" loading="lazy" alt="Bitcoin Cash">
                                                                        <img src="./assets/images/LTC-1.webp" class="lazyload cripto-pay-img m-0 img-fluid" loading="lazy" alt="Lite coin">
                                                                        <img src="./assets/images/ETH-1.webp" class="lazyload cripto-pay-img m-0 img-fluid" loading="lazy" alt="Ethereum">
                                                                        <img src="./assets/images/BTC-1.webp" class="lazyload cripto-pay-img m-0 img-fluid" loading="lazy" alt="Bitcoin">
                                                                        <img src="./assets/images/crypto_dash.png" class="lazyload cripto-pay-img m-0 img-fluid" loading="lazy" alt="Dash" height="30px">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="paypalPayment" class="ac_pay_detail" style="display:none">
                                                    <div class="card-body">
                                                        <strong class="fw-bold font-point9rem d-block mb-2">Review and Confirm Your</strong>
                                                        <label class="mt-lg-0 mt-3 plan-content"><span class=" pr-lg-0 fw-medium">Order Total: $<span class="billingtotal fw-semibold">39.95</span></span>
                                                            <span class="promoprice"></span>
                                                            <span class="detectIpPrice"></span>
                                                            <span class="addonpricevalue"></span>
                                                            <span class="finalpayment"></span>
                                                            <span class="detectPfPrice"></span>
                                                            <span class="billingmessage">3 Year Plan (<span class="fw-semibold">$39.95</span> prepaid 3 years, instead of $320) <br>PassHulk Password Manager <strong>FREE</strong></span></label>

                                                        <div class="choose_payment_method">
                                                            <h3 class="fw-bold mt-4 mb-4">Choose payment method</h3>
                                                            <div class="cpm_row row">
                                                                <div class="col-sm-2 cpm_list">
                                                                    <div class="pay_icon_box" data-id="bch">
                                                                        <div class="pay_icon_img">
                                                                            <img src="./assets/images/BCH-1.webp" class="lazyload" loading="lazy" alt="Bitcoin Cash">
                                                                        </div>
                                                                        <p>Bitcoin Cash</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2 cpm_list">
                                                                    <div class="pay_icon_box" data-id="ltc">
                                                                        <div class="pay_icon_img">
                                                                            <img src="./assets/images/LTC-1.webp" class="lazyload" loading="lazy" alt="Litecoin">
                                                                        </div>
                                                                        <p>Litecoin</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2 cpm_list">
                                                                    <div class="pay_icon_box" data-id="eth">
                                                                        <div class="pay_icon_img">
                                                                            <img src="./assets/images/ETH-1.webp" class="lazyload" loading="lazy" alt="Ethereum">
                                                                        </div>
                                                                        <p>Ethereum</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2 cpm_list">
                                                                    <div class="pay_icon_box" data-id="btc">
                                                                        <div class="pay_icon_img">
                                                                            <img src="./assets/images/BTC-1.webp" class="lazyload" loading="lazy" alt="Bitcoin">
                                                                        </div>
                                                                        <p>Bitcoin</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2 cpm_list">
                                                                    <div class="pay_icon_box" data-id="dash">
                                                                        <div class="pay_icon_img">
                                                                            <img src="./assets/images/crypto_dash.png" class="lazyload" loading="lazy" alt="Dash">
                                                                        </div>
                                                                        <p>Dash</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="d_font_line">You are agreeing with our <a href="#">Terms of Service</a> & <a href="#">Privacy Policy</a> once you proceed to pay.</p>
                                                        <div class="alert couponmessagepaypalalert d-none">
                                                            <p id="couponmessagepaypal"></p>
                                                        </div>
                                                        <div class="mt-lg-4 mt-3">
                                                            <button type="button" class="btn-warning primary-btn secondary-btn" id="buyvpnvianowpayments">Pay With NowPayments</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pay-area mb-0">
                                    <div class="row">
                                        <div class="col-12 mr-5">
                                            <div class="border">
                                                <div class="opt-box border-0 ac_pay_title">
                                                    <div id="accordion">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="card-link">
                                                                    <span class="accordion-btn "></span>
                                                                    Pay With Paypal or Credit Card
                                                                    <img class="img-fluid lazyload" loading="lazy" alt="Credit Card" title="Credit Card" src="./assets/images/withpaypalotherimgs.png">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="cardPayment" class="ac_pay_detail" style="display:none">
                                                    <div class="card-body">
                                                        <strong class="fw-bold font-point9rem d-block mb-2">Review and Confirm Your</strong>
                                                        <label class="mt-lg-0 mt-3 plan-content">
                                                            <span class=" pr-lg-0 fw-medium">Order Total: $
                                                                <span class="billingtotal fw-semibold">39.95</span>
                                                            </span>
                                                            <span class="promoprice"></span>
                                                            <span class="addonpricevalue"></span>
                                                            <span class="detectIpPrice"></span>
                                                            <span class="detectPfPrice"></span>
                                                            <span class="finalpayment"></span>
                                                            <span class="billingmessage"></span>
                                                        </label>
                                                        <div class="mt-lg-3 mt-1 mb-lg-3 mb-2 coupon-field-area">
                                                            <p class="mb-0 d-inline-block label-tag-title"><strong class="font-weight-500 font-point9rem">Have a Coupon Code?</strong>
                                                            <div class="number promo position-relative">
                                                                <input class="payment-field" type="text" placeholder="enter code" id="payypalcreditcardcouponcode" name="promo code" />
                                                                <input class="primary-btn secondary-btn" type="button" value="Apply coupon" id="applycouponcreditcard" name="apply code" />
                                                            </div>
                                                            </p>
                                                        </div>
                                                        <p class="d_font_line">You are agreeing with our <a href="#">Terms of Service</a> & <a href="#">Privacy Policy</a> once you proceed to pay.</p>
                                                        <div class="alert couponpaypalmessagecardalert d-none">
                                                            <p id="couponpaypalmessagecard"></p>
                                                        </div>
                                                        <div class="mt-lg-4 mt-3">
                                                            <button type="button" class="btn-warning primary-btn secondary-btn" id="buyvpnviapaypalinvoice">Pay With Paypal or Credit Card</button>
                                                        </div>
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
                            <div class="col-lg-4 col-12">
                                <div class="payment-section-right">
                                    <!-- <div class="trust-pilot position-relative text-center">
                                            <h4 class="head-rating">
                                                Trustpilot Rating
                                            </h4>
                                            <div class="sec-log mb-4 mt-4">
                                                <img class="img-fluid lazyload" loading="lazy" src="./assets/images/trustpilot-pay-img.webp">
                                            </div>

                                            <div class="trusted-text mt-lg-2 mt-2 mb-lg-2">
                                                <span>Excellent <strong class="color-green">4.0</strong><span>
                                                        |
                                                    </span>615 Reviews</span>
                                            </div>
                                        </div> -->
                                    <div class="all-plans">
                                        <h5 class="title">All Plans Include:</h5>
                                        <ul class="list-unstyled plans-list">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="paypalpaymentresponse" style="display: none !important;"></div>
    <div id="payment_popup">
        <button type="button" class="payment_popup_close_button" aria-hidden="true">&#x2715</button>
        <iframe id="storefront" src="" style="position: fixed;top: 0px;left: 0px;width: 100%;height: 100vh;border: none;background: transparent;display:none;z-index:9999"></iframe>
    </div> -->
</section>


<script src="./assets/js/jquery.min.js"></script>

<script type="text/javascript">
    var orderamount = 0;
    var promodiscount = 0;
    $(document).ready(function() {
        $('.cpm_row .cpm_list .pay_icon_box').click(function() {
            $(".cpm_row .cpm_list .pay_icon_box").removeClass('active');
            $(this).addClass('active');
        })

        // $('#buyvpnviafastspring').click(function(){
        //     $('#storefront').fadeIn();
        //     setTimeout(function(){
        //         $('.payment_popup_close_button').show();
        //     },3000);
        // })

        $('body').keydown(function(event) {
            if (event.key === "Escape") {
                $("#storefront").fadeOut();
                $("#storefront").hide();
                $('.payment_popup_close_button').hide();
                event.preventDefault();
                parent.closeIFrame();
            }
        });

        $('.ac_pay_title').click(function() {
            $(".ac_pay_detail").slideUp();
            $(this).next().slideToggle();
        })

        if ($('#addadditonaldevices').is(':checked')) {
            $("#showadditionaldevicelogin").show();
        } else {
            $("#showadditionaldevicelogin").attr("style", "display:none !important;");
        }

        if ($('#detectIP').is(':checked')) {
            $("#showdetectIP").show();
        } else {
            $("#showdetectIP").attr("style", "display:none !important;");
        }

        if ($('#detectIP').is(':checked')) {
            $("#orderSummary").show();
        } else {
            $("#orderSummary").attr("style", "display:none !important;");
        }

        var additionalprice = $("#additionalprice").val();
        var addonprice = $("#addonprice").text(additionalprice);
        var price = $("#defualtprice").val();
        var planid = $("#defualtproduct").val();
        var addonrate = $("#defualtaddonprice").val();
        var billingplanmessage = $("#defualtbillingmessage").val();
        orderamount = price;
        var billingCycle = $("#defualtproductbillingcycle").val();
        var billingType = $("#defualtproductbillingtype").val();

        sku = $("#defualtproduct").val();
        planselected = $("#defualtproductname").val();
        $(".addonmorevalue").text("" + addonrate + " ");
        $("#addonrate").val(addonrate);
        $(".billingtotal").text(price);
        $(".billingmessage").html(billingplanmessage);
        $("#selectedplanprice").val(price);
        $("#selectedplanid").val(planid);
        $("#selectedplanbillingcycle").val(billingCycle);

        $("#selectedplanbillingtype").val(billingType);
        $(".orderamount").text(orderamount);
        $('.buyvpnbutton').on("click", function() {
            var price = $(this).attr('data-value');
            var planid = $(this).attr('data-plan-id');
            var billingCycle = $(this).attr('data-plan-billingcyle');
            if ($("#detectIP").prop('checked') == true) {
                $('#detectIP').attr('checked', false); // Unchecks it
                RemoveDetectIpPrice();
                $("#showdetectIP").attr("style", "display:none !important;");
            }
            if ($("#pf_check").prop('checked') == true) {
                $('#pf_check').attr('checked', false);
                RemoveDetectPortF();
            }
            if (billingCycle == "annually") {
                $("#dedicatedIpPriceDisplay").text("1.3/mo");
            }
            if (billingCycle == "biennially") {
                $("#dedicatedIpPriceDisplay").text("1.3/mo");
            }
            if (billingCycle == "lifetime") {
                $("#dedicatedIpPriceDisplay").text("31.2/2 Years");

            }
            if (billingCycle == "monthly") {
                $("#dedicatedIpPriceDisplay").text("1.49/mo");

            }
            var billingType = $(this).attr('data-plan-billingtype');
            var addonrate = $(this).attr('data-multilogin-price');
            sku = planid;
            orderamount = price;
            planselected = $(this).attr('data-plan-name');
            $("#addonneeded").val(0);
            $("#addonprice").text(0);
            $(".addonpricevalue").text("");
            $(".addonmorevalue").text("" + addonrate + " ");
            $("#addonrate").val(addonrate);
            $(".billingtotal").text(price);
            var billingplanmessage = $(this).attr('data-plan-text');


            $(".billingmessage").html(billingplanmessage);


            $("#selectedplanprice").val(price);
            $("#selectedplanid").val(planid);
            $("#selectedplanbillingcycle").val(billingCycle);
            $("#selectedplanbillingtype").val(billingType);
            $(".promoprice").text("");
            $("#creditcardcouponcode").val("");
            $("#payypalcreditcardcouponcode").val("");
            $("#paypalcouponcode").val("");
            $("#cryptocouponcode").val("");
            $(".billingtotal").removeClass("cut-price text-red");
            $(".orderamount").text(orderamount);
            if ($('#detectIP').is(':checked')) {
                AddDetectIpPrice();
            }
            if (planid == 1 || planid == 291) {
                $('.pay_step_crypto').hide();
            } else {
                $('.pay_step_crypto').show();
            }


        });

        $("#plusaddon").on("click", function() {
            addAddon();
            if ($('#detectIP').is(':checked')) {
                AddDetectIpPrice();
            } else {
                RemoveDetectIpPrice();
            }
        });
        $("#minusaddon").on("click", function() {
            minusAddon();
            if ($('#detectIP').is(':checked')) {
                AddDetectIpPrice();
            } else {
                RemoveDetectIpPrice();
            }
        });
        $("#addonneeded").on("change", function() {
            adjustAddon();
        });

        $("#buyvpnviapaypal").on("click", function() {
            payviaPaypal();
        });
        $("#buyvpnviapaypalinvoice").on("click", function() { // For Paypal Invoice
            payviaPaypalInvoice();
        });
        $("#buyvpnviapayop").on("click", function() {
            payviaPayop();
        });

        // $("#buyvpnviafastspring {{ env('paypalBuyButtonJs') }}").on("click", function() {
        //     @if((request() - > hasCookie('anypaymethod') && request() - > cookie('anypaymethod') == 'allowed') || (isset($anypaymethod) && $anypaymethod == 'allowed') || (env('creditcard') != 'payop'))
        //     grecaptcha.ready(function() {
        //         grecaptcha.execute('{{env("recaptchasitekey")}}', {
        //             action: 'submit'
        //         }).then(function(token) {
        //             payviaFastSpring(token);
        //         });
        //     });
        //     @else
        //     // payviaPayop('cc');
        //     payviaMollie();
        //     @endif
        // })

        $('#markcheckaddon').on('click', function() {
            let addOnCurrentPrice = 0;
            if ($('#addadditonaldevices').is(':checked')) {

                addOnCurrentPrice = Number($('#addonprice').text());
                if ($('#detectIP').is(':checked')) {
                    orderamount = Number(orderamount) - addOnCurrentPrice;
                    AddDetectIpPrice();
                    orderamount = Number(orderamount) + addOnCurrentPrice;
                } else {
                    $('.orderamount').text(0);
                    $('.orderamount').text(orderamount);
                }
            }
            $('#addonprice').text(0);
        })
        $("#markcheckaddon").on("click", function() {
            if ($('#addadditonaldevices').is(':checked')) {
                $('#addadditonaldevices').attr('checked', false);
                $("#showadditionaldevicelogin").attr("style", "display:none !important;");
                $("#addonneeded").val(0);
                $("#addonprice").text(0);
                $("#additionalprice").val(0);
                $(".addonpricevalue").text("");
            } else {
                $('#addadditonaldevices').attr('checked', true);
                $("#showadditionaldevicelogin").show();
                $("#addonneeded").val(0);
                $("#addonprice").text(0);
                $("#additionalprice").val(0);
                $(".addonpricevalue").text("");
            }
        });

        $("#DectectIpRadio").on("click", function() {
            if ($('#detectIP').is(':checked')) {
                $('#detectIP').attr('checked', false);
                $("#showdetectIP").attr("style", "display:none !important;");
                $("#orderSummary").attr("style", "display:none !important;");
                RemoveDetectIpPrice();
            } else {
                $('#detectIP').attr('checked', true);
                $("#showdetectIP").show();
                $("#orderSummary").show();
                AddDetectIpPrice();
            }
        });
        $("#pf_checkLabel").on("click", function() {
            if ($('#pf_check').is(':checked')) {
                $('#pf_check').attr('checked', false);
                RemoveDetectPortF();
            } else {
                $('#pf_check').attr('checked', true);
                // $("#showdetectIP").show();
                AddDetectPortF();
            }
        });
    });
    // $('#availableemail').change(function() {
    //     verifyEmail();
    // });
    // $('#confirmEmail').change(function() {
    //     verifyEmail();
    //     var confirmemail = $("#confirmEmail");
    // });
    $("#payypalcreditcardcouponcode").change(function() {
        var couponcode = $("#payypalcreditcardcouponcode").val();
        var product_id = $("#selectedplanid").val();
        verifyCouponCode(couponcode, 'couponmessagecard', product_id);
    });
    $("#creditcardcouponcode").change(function() {
        var couponcode = $("#creditcardcouponcode").val();
        var product_id = $("#selectedplanid").val();
        verifyCouponCode(couponcode, 'couponmessagecard', product_id);
    });
    $("#applycouponcreditcard").click(function() {
        var couponcode = $("#creditcardcouponcode").val();
        var product_id = $("#selectedplanid").val();
        verifyCouponCode(couponcode, 'couponmessagecard', product_id);
    });
    $("#paypalcouponcode").change(function() {
        var couponcode = $("#paypalcouponcode").val();
        var product_id = $("#selectedplanid").val();
        if (couponcode == '') {
            $("#buyvpnviapaypal").attr('style', '');
        }
        verifyCouponCode(couponcode, 'couponmessagepaypal', product_id);
    });

    $("#buyvpnvianowpayments").on("click", function() {
        buyvpnvianowpayments();
    });

    $("#cryptocouponcode").change(function() {
        var couponcode = $("#cryptocouponcode").val();
        var product_id = $("#selectedplanid").val();
        if (couponcode == '') {
            $("#buyvpnviapayop").attr('style', '');
        }
        verifyCouponCode(couponcode, 'couponmessagecrypto', product_id);
    });
    $("#applycouponpayop").click(function() {
        var couponcode = $("#cryptocouponcode").val();
        var product_id = $("#selectedplanid").val();
        if (couponcode == '') {
            $("#buyvpnviapayop").attr('style', '');
        }
        verifyCouponCode(couponcode, 'couponmessagecrypto', product_id);
    });

    function verifyEmail() {

        var availableemail = $("#availableemail").val();
        var confirmemail = $("#confirmEmail").val();
        if (confirmemail == '') {
            //show error message
            $(".emailmessagealert").addClass("alert-danger");
            $(".emailmessagealert").removeClass("d-none");
            $("#emailmessage").text('please enter your confirmation email');
        }
        if (availableemail != '' && confirmemail != '') {
            if (availableemail == confirmemail) {
                //if confirmation email matched with user email 
                var actionUrl = "{{ route('availableemail') }}";
                $.ajax({
                    url: actionUrl,
                    data: {
                        email: availableemail
                    },
                    type: 'post',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    beforeSend: function() {
                        $.fancybox.open('<div class="fancybox-loading"></div>', {
                            closeExisting: true,
                            toolbar: false,
                            smallBtn: false,
                            modal: false,
                            keyboard: false,
                            clickSlide: false,
                            touch: false,
                            caption: 'Please wait while we are proceeding your request.'
                        });
                    },
                    success: function(response) {
                        $.fancybox.close();
                        if (response.error == 0 && response.message == "Available") {
                            $(".emailmessagealert").removeClass("alert-danger");
                            $(".emailmessagealert").removeClass("d-none");
                            $(".emailmessagealert").addClass("alert-success");
                            $("#emailmessage").text('Email Available');
                            $("#buyvpnviafastspring").attr('style', '');
                            $("#buyvpnviapaypal").attr('style', '');
                        } else {
                            $("#emailmessage").text(response.message);
                            $("#buyvpnviafastspring").attr('style', "pointer-events: none;cursor: default;");
                            $("#buyvpnviapaypal").attr('style', "pointer-events: none;cursor: default;");
                        }
                    },
                    error: function(jqXhr) {
                        $.fancybox.close();
                        var errorsHtml;
                        if (jqXhr.status === 422) {
                            var errors = JSON.parse(jqXhr.responseText);
                            errorsHtml = '<ul>';
                            $.each(errors.message, function(key, value) {
                                errorsHtml += '<li class="text-danger">' + value[0] + '</li>';
                            });
                            errorsHtml += '</ul>';
                        }
                        toast("Invalid Information. Please try again!", "Error!", errorsHtml);
                    }
                });
            } else {
                $(".emailmessagealert").addClass("alert-danger");
                $(".emailmessagealert").removeClass("d-none");
                $("#emailmessage").text("confirmation email doesn't match");
            }
        }
    }

    function verifyCouponCode(code, messageElement, product_id) {
        if (code != '') {
            var actionUrl = "{{ route('verifycouponcode') }}";
            $.ajax({
                url: actionUrl,
                data: {
                    code: code,
                    product_id: product_id
                },
                type: 'post',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                beforeSend: function() {
                    $.fancybox.open('<div class="fancybox-loading"></div>', {
                        closeExisting: true,
                        toolbar: false,
                        smallBtn: false,
                        modal: false,
                        keyboard: false,
                        clickSlide: false,
                        touch: false,
                        caption: 'Please wait while we are proceeding your request.'
                    });
                },
                success: function(response) {
                    $.fancybox.close();
                    if (response.error == 0) {
                        if (messageElement == "couponmessagepaypal") {
                            $(".couponmessagepaypalalert").removeClass("alert-danger");
                            $(".couponmessagepaypalalert").removeClass("d-none");
                            $(".couponmessagepaypalalert").addClass("alert-success");
                        }
                        if (messageElement == "couponmessagecard") {
                            $(".couponmessagecardalert").removeClass("alert-danger");
                            $(".couponmessagecardalert").removeClass("d-none");
                            $(".couponmessagecardalert").addClass("alert-success");
                        }
                        if (messageElement == "couponpaypalmessagecard") {
                            $(".couponpaypalmessagecardalert").removeClass("alert-danger");
                            $(".couponpaypalmessagecardalert").removeClass("d-none");
                            $(".couponpaypalmessagecardalert").addClass("alert-success");
                        }
                        $(".promoprice").text("$" + response.plan.discountedPrice + " ");
                        $(".billingtotal").addClass("text-red mr-md-1 ml-md-1 cut-price");
                        $("#" + messageElement).text("coupon applied successfully");
                        promodiscount = response.plan.discount;
                        orderamount = Number(response.plan.discountedPrice) + Number($("#additionalprice").val())
                        $(".orderamount").text(orderamount);
                        $("#buyvpnviapaypal").attr('style', '');
                    } else {
                        if (messageElement == "couponmessagepaypal") {
                            $(".couponmessagepaypalalert").removeClass("d-none");
                            $(".couponmessagepaypalalert").addClass("alert-danger");
                        }
                        if (messageElement == "couponmessagecard") {
                            $(".couponmessagecardalert").removeClass("d-none");
                            $(".couponmessagecardalert").addClass("alert-danger");
                        }
                        if (messageElement == "couponpaypalmessagecard") {
                            $(".couponpaypalmessagecardalert").removeClass("d-none");
                            $(".couponpaypalmessagecardalert").addClass("alert-danger");
                        }
                        $("#buyvpnviapaypal").attr('style', "pointer-events: none;cursor: default;");
                        $("#" + messageElement).text(response.message);
                    }
                },
                error: function(jqXhr) {
                    $.fancybox.close();
                    var errorsHtml;
                    if (jqXhr.status === 422) {
                        var errors = JSON.parse(jqXhr.responseText);
                        errorsHtml = '<ul>';
                        $.each(errors.message, function(key, value) {
                            errorsHtml += '<li class="text-danger">' + value[0] + '</li>';
                        });
                        errorsHtml += '</ul>';
                    }
                }
            });
        }
    }










    function buyvpnvianowpayments(type = 'nowpay') {

        var planPrice = $("#selectedplanprice").val();
        // var promoCode = $("#paypalcouponcode").val();
        var availableemail = $("#availableemail").val();
        // var confirmemail = $("#confirmEmail").val();
        var product_id = $("#selectedplanid").val();
        var billingCycle = $("#selectedplanbillingcycle").val();
        var billingType = $("#selectedplanbillingtype").val();
        var name = $("#name").val();
        var paymethod = $('.pay_icon_box.active').data('id');
        var dip = '';
        var pf = '';
        if ($('#detectIP').attr('checked') == "checked") {
            dip = $('input[name="detectIPRadio"]:checked').val();
        }
        if ($('#pf_check').attr('checked') == "checked") {
            pf = 10;
        }

        if (planPrice == '' || planPrice < 0) {
            $(".couponmessagepaypalalert").addClass("alert-danger");
            $(".couponmessagepaypalalert").removeClass("d-none");
            $("#couponmessagepaypal").text('please select your plan first');
        }
        if (availableemail == '') {
            //show error message
            $(".couponmessagepaypalalert").addClass("alert-danger");
            $(".couponmessagepaypalalert").removeClass("d-none");
            $("#couponmessagepaypal").text('please enter your email first');
        } else if (name == '') {
            $(".couponmessagepaypalalert").addClass("alert-danger");
            $(".couponmessagepaypalalert").removeClass("d-none");
            $("#couponmessagepaypal").text("please enter your name first");
        } else if (paymethod == null) {
            $(".couponmessagepaypalalert").addClass("alert-danger");
            $(".couponmessagepaypalalert").removeClass("d-none");
            $("#couponmessagepaypal").text("Please Select Payment Method first");
        } else if (ValidateEmail(document.buyvpnform.availableemail) == false) {
            $(".couponmessagepaypalalert").addClass("alert-danger");
            $(".couponmessagepaypalalert").removeClass("d-none");
            $("#couponmessagepaypal").text('please enter your correct email first');
        } else {
            //verify email if available
            //var submitButton = form.find('[type="submit"]');

            if (planPrice != '' && planPrice > 0) {
                var actionUrl = "{{ route('buyvianowpayments') }}";
                // var addonwants = $("#additionalprice").val();


                var addonwants = $("#addonneeded").val();
                if (type == 'nowpay') {
                    var paymethod = $('.pay_icon_box.active').data('id');
                } else {
                    var paymethod = 'aaa';
                }

                //console.log(paymethod);
                $.ajax({
                    url: actionUrl,
                    data: {
                        email: availableemail,
                        // coupon: promoCode,
                        product_id: product_id,
                        addon_mlogin: addonwants,
                        paytype: billingType,
                        billingCycle: billingCycle,
                        pf: pf,
                        name: name,
                        paymethod: paymethod
                    },
                    type: 'post',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    beforeSend: function() {
                        $.fancybox.open('<div class="fancybox-loading"></div>', {
                            closeExisting: true,
                            toolbar: false,
                            smallBtn: false,
                            modal: false,
                            keyboard: false,
                            clickSlide: false,
                            touch: false,
                            caption: 'Please wait while we are proceeding your request.'
                        });
                    },
                    success: function(response) {
                        console.log(planPrice, response);
                        $.fancybox.close();
                        document.getElementById("pay_address").innerHTML = response.pay_address;
                        document.getElementById("qr_code").innerHTML = response.qr_code;

                        document.getElementById("btc_ammount").innerHTML = response.pay_amont + " " + response.pay_currancy;
                        document.getElementById("bit_currency").innerHTML = response.pay_currancy;
                        document.getElementById("subscription").innerHTML = "Subscription Plan: " + response.product;

                        $(".bit_coin_pop").fadeIn(500);
                        $("#nowpaymentpaymentresponse").html(response);
                    },
                    error: function(jqXhr) {
                        $.fancybox.close();

                        $("#nowpaymentpaymentresponse").html(jqXhr.responseText);
                        if ($("#paymentForm").length > 0) {
                            $('#paymentForm').submit();
                        }
                    }
                });

            } else {
                $("#emailmessage").text(response.message);
            }

        }
    }

    $(".btn-close").click(function() {
        $("#saveBiga").hide();
    });






    function ValidateEmail(inputText) {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,5})+$/;
        if (inputText.value.match(mailformat)) {

            return true;
        } else {

            return false;
        }
    }









    function payviaPaypal() {

        var planPrice = $("#selectedplanprice").val();
        var promoCode = $("#paypalcouponcode").val();
        var availableemail = $("#availableemail").val();
        // var confirmemail = $("#confirmEmail").val();
        var product_id = $("#selectedplanid").val();
        var billingCycle = $("#selectedplanbillingcycle").val();
        var billingType = $("#selectedplanbillingtype").val();
        var name = $("#name").val();
        var dip = '';
        var pf = '';
        if ($('#detectIP').attr('checked') == "checked") {
            dip = $('input[name="detectIPRadio"]:checked').val();
        }
        if ($('#pf_check').attr('checked') == "checked") {
            pf = 10;
        }
        if (planPrice == '' || planPrice < 0) {
            $(".couponmessagepaypalalertsec").addClass("alert-danger");
            $(".couponmessagepaypalalertsec").removeClass("d-none");
            $("#couponmessagepaypalsec").text('please select your plan first');
        }
        if (availableemail == '') {
            //show error message
            $(".couponmessagepaypalalertsec").addClass("alert-danger");
            $(".couponmessagepaypalalertsec").removeClass("d-none");
            $("#couponmessagepaypalsec").text('please enter your email first');
        }
        // else if (confirmemail == '') {
        //     //show error message
        //     $(".couponmessagepaypalalert").addClass("alert-danger");
        //     $(".couponmessagepaypalalert").removeClass("d-none");
        //     $("#couponmessagepaypal").text('please enter your confirmation email');
        // } else if (availableemail != confirmemail) {
        //     $(".couponmessagepaypalalert").addClass("alert-danger");
        //     $(".couponmessagepaypalalert").removeClass("d-none");
        //     $("#couponmessagepaypal").text("confirmation email doesn't match ");
        // } 
        else if (ValidateEmail(document.buyvpnform.availableemail) == false) {
            $(".couponmessagepaypalalertsec").addClass("alert-danger");
            $(".couponmessagepaypalalertsec").removeClass("d-none");
            $("#couponmessagepaypalsec").text('please enter your correct email first');
        } else if (name == '') {
            $(".couponmessagepaypalalertsec").addClass("alert-danger");
            $(".couponmessagepaypalalertsec").removeClass("d-none");
            $("#couponmessagepaypalsec").text("please enter your name first");
        } else {
            //verify email if available
            // var actionUrl = "{{ route('availableemail') }}";
            //var submitButton = form.find('[type="submit"]');
            console.log('payviaPaypal');
            if (planPrice != '' && planPrice > 0) {
                var actionUrl = "{{ route('buyviapaypal') }}";
                // var addonwants = $("#additionalprice").val();
                var addonwants = $("#addonneeded").val();

                $.ajax({
                    url: actionUrl,
                    data: {
                        email: availableemail,
                        coupon: promoCode,
                        product_id: product_id,
                        addon_mlogin: addonwants,
                        paytype: billingType,
                        billingCycle: billingCycle,
                        dip: dip,
                        pf: pf,
                        name: name
                    },
                    type: 'post',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },

                    beforeSend: function() {
                        //submitButton.attr('disabled', true);
                        $.fancybox.open('<div class="fancybox-loading"></div>', {
                            closeExisting: true,
                            toolbar: false,
                            smallBtn: false,
                            modal: false,
                            keyboard: false,
                            clickSlide: false,
                            touch: false,
                            caption: 'Please wait while we are proceeding your request.'
                        });
                    },
                    success: function(response) {
                        $.fancybox.close();

                        $("#paypalpaymentresponse").html(response);
                    },
                    error: function(jqXhr) {
                        console.log(jqXhr);
                        $("#paypalpaymentresponse").html(jqXhr.responseText);
                        if ($("#paymentForm").length > 0) {
                            $('#paymentForm').submit();
                        }
                    }
                });

            } else {
                $("#emailmessage").text(response.message);
            }

        }
    }



    function payviaPaypalInvoice() {

        var planPrice = $("#selectedplanprice").val();
        var promoCode = $("#payypalcreditcardcouponcode").val();
        var availableemail = $("#availableemail").val();
        // var confirmemail = $("#confirmEmail").val();
        var product_id = $("#selectedplanid").val();
        var billingCycle = $("#selectedplanbillingcycle").val();
        var billingType = $("#selectedplanbillingtype").val();
        var name = $("#name").val();
        var dip = '';
        var pf = '';
        if ($('#detectIP').attr('checked') == "checked") {
            dip = $('input[name="detectIPRadio"]:checked').val();
        }
        if ($('#pf_check').attr('checked') == "checked") {
            pf = 10;
        }
        if (planPrice == '' || planPrice < 0) {
            $(".couponpaypalmessagecardalert").addClass("alert-danger");
            $(".couponpaypalmessagecardalert").removeClass("d-none");
            $("#couponpaypalmessagecard").text('please select your plan first');
        }
        if (availableemail == '') {
            //show error message
            $(".couponpaypalmessagecardalert").addClass("alert-danger");
            $(".couponpaypalmessagecardalert").removeClass("d-none");
            $("#couponpaypalmessagecard").text('please enter your email first');
        }
        // else if (confirmemail == '') {
        //     //show error message
        //     $(".couponmessagepaypalalert").addClass("alert-danger");
        //     $(".couponmessagepaypalalert").removeClass("d-none");
        //     $("#couponmessagepaypal").text('please enter your confirmation email');
        // } else if (availableemail != confirmemail) {
        //     $(".couponmessagepaypalalert").addClass("alert-danger");
        //     $(".couponmessagepaypalalert").removeClass("d-none");
        //     $("#couponmessagepaypal").text("confirmation email doesn't match ");
        // } 
        else if (ValidateEmail(document.buyvpnform.availableemail) == false) {
            $(".couponpaypalmessagecardalert").addClass("alert-danger");
            $(".couponpaypalmessagecardalert").removeClass("d-none");
            $("#couponpaypalmessagecard").text('please enter your correct email first');
        } else if (name == '') {
            $(".couponpaypalmessagecardalert").addClass("alert-danger");
            $(".couponpaypalmessagecardalert").removeClass("d-none");
            $("#couponpaypalmessagecard").text("please enter your name first");
        } else {
            //verify email if available
            // var actionUrl = "{{ route('availableemail') }}";
            //var submitButton = form.find('[type="submit"]');
            console.log('payviaPaypalInvoice');
            if (planPrice != '' && planPrice > 0) {
                var actionUrl = "{{ route('buyviapaypalinvoice') }}";
                // var addonwants = $("#additionalprice").val();
                var addonwants = $("#addonneeded").val();

                $.ajax({
                    url: actionUrl,
                    data: {
                        email: availableemail,
                        coupon: promoCode,
                        product_id: product_id,
                        addon_mlogin: addonwants,
                        paytype: billingType,
                        billingCycle: billingCycle,
                        dip: dip,
                        pf: pf,
                        name: name
                    },
                    type: 'post',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },

                    beforeSend: function() {
                        //submitButton.attr('disabled', true);
                        $.fancybox.open('<div class="fancybox-loading"></div>', {
                            closeExisting: true,
                            toolbar: false,
                            smallBtn: false,
                            modal: false,
                            keyboard: false,
                            clickSlide: false,
                            touch: false,
                            caption: 'Please wait while we are proceeding your request.'
                        });
                    },
                    success: function(response) {
                        $.fancybox.close();
                        var invoiceUrl = response.invoice.invoice_link;
                        if (invoiceUrl !== null && invoiceUrl !== undefined && invoiceUrl !== '') {
                            window.location.href = invoiceUrl;
                        } else {
                            errorsHtml = '<ul>';
                            errorsHtml += '<li class="text-danger">Please try later</li>';
                            errorsHtml += '</ul>';
                            toast("Oops Something went wrong!", "Error!", errorsHtml);
                        }
                        // $("#paypalpaymentresponse").html(response);
                    },
                    error: function(jqXhr) {
                        console.log(jqXhr);
                        $("#paypalpaymentresponse").html(jqXhr.responseText);
                        if ($("#paymentForm").length > 0) {
                            $('#paymentForm').submit();
                        }
                    }
                });

            } else {
                $("#emailmessage").text(response.message);
            }

        }
    }


    function payviaFastSpring(gtoken = null) {
        var planPrice = $("#selectedplanprice").val();
        var promoCode = $("#creditcardcouponcode").val();
        // @if(!empty(env('paypalBuyButtonJs')))
        // if (promoCode == '') {
        //     promoCode = $("#paypalcouponcode").val();
        // }
        // @endif
        var availableemail = $("#availableemail").val();
        // var confirmemail = $("#confirmEmail").val();
        var billingCycle = $("#selectedplanbillingcycle").val();
        var billingType = $("#selectedplanbillingtype").val();
        var product_id = $("#selectedplanid").val();
        var name = $("#name").val();
        var dip = '';
        var pf = '';
        if ($('#detectIP').attr('checked') == "checked") {
            dip = $('input[name="detectIPRadio"]:checked').val();
        }
        if ($('#pf_check').attr('checked') == "checked") {
            pf = 10;
        }

        if (planPrice == '' || planPrice < 0) {
            $(".couponmessagecardalert").addClass("alert-danger");
            $(".couponmessagecardalert").removeClass("d-none");
            $("#couponmessagecard").text('please select your plan first');
        }
        if (availableemail == '') {
            //show error message
            $(".couponmessagecardalert").addClass("alert-danger");
            $(".couponmessagecardalert").removeClass("d-none");
            $("#couponmessagecard").text('please enter your email first');
        }

        // else if (confirmemail == '') {
        //     //show error message
        //     $(".couponmessagecardalert").addClass("alert-danger");
        //     $(".couponmessagecardalert").removeClass("d-none");
        //     $("#couponmessagecard").text('please enter your confirmation email');
        // } else if (availableemail != confirmemail) {
        //     $(".couponmessagecardalert").addClass("alert-danger");
        //     $(".couponmessagecardalert").removeClass("d-none");
        //     $("#couponmessagecard").text("confirmation email doesn't match ");
        // } 
        else if (ValidateEmail(document.buyvpnform.availableemail) == false) {
            $(".couponmessagecardalert").addClass("alert-danger");
            $(".couponmessagecardalert").removeClass("d-none");
            $("#couponmessagecard").text('please enter your correct email first');
        } else if (name == '') {
            $(".couponmessagecardalert").addClass("alert-danger");
            $(".couponmessagecardalert").removeClass("d-none");
            $("#couponmessagecard").text("please enter your name first");
        } else {
            //verify email if available
            // var actionUrl = "{{ route('availableemail') }}";
            if (planPrice != '' && planPrice > 0) {


                if (billingCycle == 'lifetime11') {
                    var actionUrl = "{{ route('buyviacreditcard') }}";
                } else {
                    var actionUrl = "{{ route('buyviafastspring') }}";
                }


                // var actionUrl = "{{ route('buyviapayop') }}";
                // var addonwants = $("#additionalprice").val();
                var addonwants = $("#addonneeded").val();

                $.ajax({
                    url: actionUrl,
                    data: {
                        email: availableemail,
                        coupon: promoCode,
                        product_id: product_id,
                        addon_mlogin: addonwants,
                        paytype: billingType,
                        billingCycle: billingCycle,
                        name: name,
                        dip: dip,
                        pf: pf,
                        g_recaptcha_response: gtoken
                    },
                    type: 'post',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },

                    beforeSend: function() {
                        //submitButton.attr('disabled', true);
                        $.fancybox.open('<div class="fancybox-loading"></div>', {
                            closeExisting: true,
                            toolbar: false,
                            smallBtn: false,
                            modal: false,
                            keyboard: false,
                            clickSlide: false,
                            touch: false,
                            caption: 'Please wait while we are proceeding your request.'
                        });
                    },
                    success: function(response) {
                        $.fancybox.close();
                        console.log(response);
                        setTimeout(function() {
                            $('.payment_popup_close_button').show();
                        }, 3000);
                        if (billingCycle == 'lifetime11') {
                            if (response.error != true) {
                                var frame = document.getElementById("storefront");
                                frame.src = "https://store.fastestvpn.com/storefront?session=" + response.id;
                                frame.style.display = 'block';
                            } else {
                                $("#storefront").fadeOut();
                                $("#storefront").hide();
                                $('.payment_popup_close_button').hide();
                                var frame = document.getElementById("storefront");
                                frame.src = ""
                                errorsHtml = '<ul>';
                                errorsHtml += '<li class="text-danger">Please try later</li>';
                                errorsHtml += '</ul>';
                                toast("Oops Something went wrong!", "Error!", errorsHtml);
                            }
                        } else {
                            console.log(response);
                            if (response.id.length > 0) {
                                uuid = response.uuid;
                                totalfinalprice = response.total;
                                fastspring.builder.checkout(response.id);
                            }
                        }
                    },
                    error: function(jqXhr) {
                        $.fancybox.close();
                        errorsHtml = '<ul>';
                        errorsHtml += '<li class="text-danger">Please try later</li>';
                        errorsHtml += '</ul>';
                        toast("Oops Something went wrong!", "Error!", errorsHtml);

                    }
                });
            } else {
                $("#emailmessage").text(response.message);
            }
        }

    }

    function payviaMollie(gtoken = null) {
        var planPrice = $("#selectedplanprice").val();
        var promoCode = $("#creditcardcouponcode").val();
        // @if(!empty(env('paypalBuyButtonJs')))
        // if (promoCode == '') {
        //     promoCode = $("#paypalcouponcode").val();
        // }
        // @endif
        var availableemail = $("#availableemail").val();
        var confirmemail = $("#confirmEmail").val();
        var billingCycle = $("#selectedplanbillingcycle").val();
        var billingType = $("#selectedplanbillingtype").val();
        var product_id = $("#selectedplanid").val();
        var name = $("#name").val();
        if (planPrice == '' || planPrice < 0) {
            $(".couponmessagecardalert").addClass("alert-danger");
            $(".couponmessagecardalert").removeClass("d-none");
            $("#couponmessagecard").text('please select your plan first');
        }
        if (availableemail == '') {
            //show error message
            $(".couponmessagecardalert").addClass("alert-danger");
            $(".couponmessagecardalert").removeClass("d-none");
            $("#couponmessagecard").text('please enter your email first');
        } else if (confirmemail == '') {
            //show error message
            $(".couponmessagecardalert").addClass("alert-danger");
            $(".couponmessagecardalert").removeClass("d-none");
            $("#couponmessagecard").text('please enter your confirmation email');
        } else if (availableemail != confirmemail) {
            $(".couponmessagecardalert").addClass("alert-danger");
            $(".couponmessagecardalert").removeClass("d-none");
            $("#couponmessagecard").text("confirmation email doesn't match ");
        } else if (name == '') {
            $(".couponmessagecardalert").addClass("alert-danger");
            $(".couponmessagecardalert").removeClass("d-none");
            $("#couponmessagecard").text("please enter your name first");
        } else {
            //verify email if available
            var actionUrl = "{{ route('availableemail') }}";
            $.ajax({
                url: actionUrl,
                data: {
                    email: availableemail
                },
                type: 'post',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                beforeSend: function() {
                    $.fancybox.open('<div class="fancybox-loading"></div>', {
                        closeExisting: true,
                        toolbar: false,
                        smallBtn: false,
                        modal: false,
                        keyboard: false,
                        clickSlide: false,
                        touch: false,
                        caption: 'Please wait while we are proceeding your request.'
                    });
                },
                success: function(response) {
                    if (response.error == 0 && response.message == "Available") {
                        /*  $(".couponmessagecardalert").removeClass("alert-danger");
                         $(".couponmessagecardalert").addClass("alert-success");
                         $(".couponmessagecardalert").removeClass("d-none");
                         $("#couponmessagecard").text('Email Available'); */
                        if (planPrice != '' && planPrice > 0) {
                            var actionUrl = "{{ route('buyviamollie') }}";
                            var addonwants = $("#addonneeded").val();

                            $.ajax({
                                url: actionUrl,
                                data: {
                                    email: availableemail,
                                    coupon: promoCode,
                                    product_id: product_id,
                                    addon_mlogin: addonwants,
                                    paytype: billingType,
                                    billingCycle: billingCycle,
                                    name: name,
                                    g_recaptcha_response: gtoken
                                },
                                type: 'post',
                                dataType: 'json',
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                },
                                success: function(response) {
                                    if (response.error == false && response.redirect == true) {
                                        window.location.href = response.redirect_url;
                                    }
                                },
                                error: function(jqXhr) {
                                    $.fancybox.close();
                                    errorsHtml = '<ul>';
                                    errorsHtml += '<li class="text-danger">Please try later</li>';
                                    errorsHtml += '</ul>';
                                    toast("Oops Something went wrong!", "Error!", errorsHtml);

                                }
                            });
                        }
                    } else {
                        $("#emailmessage").text(response.message);
                    }
                },
                error: function(jqXhr) {
                    $.fancybox.close();
                    var errorsHtml;
                    if (jqXhr.status === 422) {
                        var errors = JSON.parse(jqXhr.responseText);
                        errorsHtml = '<ul>';
                        $.each(errors.message, function(key, value) {
                            errorsHtml += '<li class="text-danger">' + value[0] + '</li>';
                        });
                        errorsHtml += '</ul>';
                    }
                    toast("Invalid Information. Please try again!", "Error!", errorsHtml);
                }
            });
        }
    }

    function payviaPayop(type = 'crypt') {
        var planPrice = $("#selectedplanprice").val();
        var promoCode = $("#creditcardcouponcode").val();
        var availableemail = $("#availableemail").val();
        var confirmemail = $("#confirmEmail").val();
        var billingCycle = $("#selectedplanbillingcycle").val();
        var billingType = $("#selectedplanbillingtype").val();
        var product_id = $("#selectedplanid").val();
        var name = $("#name").val();
        if (planPrice == '' || planPrice < 0) {
            $(".couponmessagecryptoalert").addClass("alert-danger");
            $(".couponmessagecryptoalert").removeClass("d-none");
            $("#couponmessagecrypto").text('please select your plan first');
        }
        if (availableemail == '') {
            //show error message
            $(".couponmessagecryptoalert").addClass("alert-danger");
            $(".couponmessagecryptoalert").removeClass("d-none");
            $("#couponmessagecrypto").text('please enter your email first');
        } else if (confirmemail == '') {
            //show error message
            $(".couponmessagecryptoalert").addClass("alert-danger");
            $(".couponmessagecryptoalert").removeClass("d-none");
            $("#couponmessagecrypto").text('please enter your confirmation email');
        } else if (availableemail != confirmemail) {
            $(".couponmessagecryptoalert").addClass("alert-danger");
            $(".couponmessagecryptoalert").removeClass("d-none");
            $("#couponmessagecrypto").text("confirmation email doesn't match ");
        } else if (name == '') {
            $(".couponmessagecryptoalert").addClass("alert-danger");
            $(".couponmessagecryptoalert").removeClass("d-none");
            $("#couponmessagecrypto").text("please enter your name first");
        } else {
            //verify email if available
            var actionUrl = "{{ route('availableemail') }}";
            $.ajax({
                url: actionUrl,
                data: {
                    email: availableemail
                },
                type: 'post',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                beforeSend: function() {
                    $.fancybox.open('<div class="fancybox-loading"></div>', {
                        closeExisting: true,
                        toolbar: false,
                        smallBtn: false,
                        modal: false,
                        keyboard: false,
                        clickSlide: false,
                        touch: false,
                        caption: 'Please wait while we are proceeding your request.'
                    });
                },
                success: function(response) {
                    if (response.error == 0 && response.message == "Available") {
                        /*  $(".couponmessagecardalert").removeClass("alert-danger");
                         $(".couponmessagecardalert").addClass("alert-success");
                         $(".couponmessagecardalert").removeClass("d-none");
                         $("#couponmessagecard").text('Email Available'); */
                        if (planPrice != '' && planPrice > 0) {
                            var actionUrl = "{{ route('buyviapayop') }}";
                            // var addonwants = $("#additionalprice").val();
                            var addonwants = $("#addonneeded").val();

                            if (type == 'crypt') {
                                var paymethod = $('.pay_icon_box.active').data('id');
                            } else {
                                var paymethod = 381;
                            }

                            console.log(paymethod);
                            $.ajax({
                                url: actionUrl,
                                data: {
                                    email: availableemail,
                                    coupon: promoCode,
                                    product_id: product_id,
                                    addon_mlogin: addonwants,
                                    paytype: billingType,
                                    billingCycle: billingCycle,
                                    name: name,
                                    paymethod: paymethod
                                },
                                type: 'post',
                                dataType: 'json',
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                },
                                success: function(response) {
                                    console.log(response);
                                    if (response.error == false && response.redirect == true) {
                                        window.location.href = response.url;
                                    }
                                    // $.fancybox.close();
                                    // if (response.id.length > 0) {
                                    //     uuid = response.uuid;
                                    //     totalfinalprice = response.total;
                                    //     fastspring.builder.checkout(response.id);
                                    // }
                                },
                                error: function(jqXhr) {
                                    $.fancybox.close();
                                    errorsHtml = '<ul>';
                                    errorsHtml += '<li class="text-danger">Please try later</li>';
                                    errorsHtml += '</ul>';
                                    toast("Oops Something went wrong!", "Error!", errorsHtml);

                                }
                            });
                        }
                    } else {
                        $("#emailmessage").text(response.message);
                    }
                },
                error: function(jqXhr) {
                    $.fancybox.close();
                    var errorsHtml;
                    if (jqXhr.status === 422) {
                        var errors = JSON.parse(jqXhr.responseText);
                        errorsHtml = '<ul>';
                        $.each(errors.message, function(key, value) {
                            errorsHtml += '<li class="text-danger">' + value[0] + '</li>';
                        });
                        errorsHtml += '</ul>';
                    }
                    toast("Invalid Information. Please try again!", "Error!", errorsHtml);
                }
            });
        }
    }

    var DIPMultiplier = '';
    var DIP_Value_Default = 1.49;

    detectBillingCycle($('.active-box').children('.buyvpnbutton').data('plan-billingcyle'));

    function detectBillingCycle(currentBillingCycle) {
        billingCycleType = {
            'monthly': 1,
            'quarterly': 3,
            'semiannually': 6,
            'yearly': 12,
            'annually': 12,
            'triennially': 36
        };
        ProhibbillingCycleType = ['onetime', 'lifetime', 'fiveyear'];

        if ($.inArray(currentBillingCycle, ProhibbillingCycleType) < 0) {
            DIPMultiplier = billingCycleType[currentBillingCycle];
        } else {
            DIPMultiplier = 1;
            DIP_Value_Default = 65;
        }
    }


    function AddDetectPortF() {
        var Get_addonprice = $("#additionalprice").val();
        console.log("clicked Btn")
        var pf = 10;
        var cc = $('.active-box').children('.buyvpnbutton').data('plan-billingcyle');

        if (cc == 'monthly') {
            var pf_Value = 1.2;
        }
        if (cc == 'lifetime') {
            var pf_Value = 28.8;
        }
        if (cc == 'annually') {
            var pf_Value = 14.4;
        }

        $(".detectPfPrice").text(" + $" + parseFloat(Number(pf_Value)));
        $(".orderamount").text(parseFloat(Number(orderamount) + Number(pf_Value) + Number(Get_addonprice)).toFixed(2));



        console.log("clicked Btnnn")

    }

    function RemoveDetectPortF() {
        var pf_Value = 0;
        var Get_addonprice = $("#additionalprice").val();
        $(".detectPfPrice").text(" ");
        $(".orderamount").text(parseFloat(Number(orderamount) + Number(pf_Value) + Number(Get_addonprice)).toFixed(2));

        console.log("removed");
    }

    function AddDetectIpPrice() {

        var Get_addonprice = $("#additionalprice").val();
        var cc = $('.active-box').children('.buyvpnbutton').data('plan-billingcyle');

        if (cc == 'monthly') {
            var DIP_Value = 1.6;
        }
        if (cc == 'lifetime') {
            var DIP_Value = 31.2;
        }
        if (cc == 'annually') {
            var DIP_Value = 15.6;
        }
        $(".detectIpPrice").text(" + $" + parseFloat(Number(DIP_Value)));
        // $(".addondippricevalue").text("+ $" +Number(DIP_Value));
        $(".orderamount").text(parseFloat(Number(orderamount) + Number(DIP_Value) + Number(Get_addonprice)).toFixed(2));
    }

    function RemoveDetectIpPrice() {
        var DIP_Value = 0;
        var Get_addonprice = $("#additionalprice").val();
        // $(".addondippricevalue").text("");
        $(".detectIpPrice").text("");
        $(".orderamount").text(Number(orderamount) - Number(DIP_Value) + Number(Get_addonprice));
    }

    function addAddon() {
        var addonneeded = $("#addonneeded").val();
        var addoncost = $("#addonrate").val();
        var addonadd = parseInt($("#addonneeded").val()) + 1;
        if (addonadd > 10) {
            var finalcost = addoncost * 10;
            $("#addonneeded").val(10);
            $("#addonprice").text(finalcost);
            $("#additionalprice").val(finalcost);
            $(".addonpricevalue").text(" + $" + finalcost);
        } else {
            var finalcost = addonadd * addoncost;
            $("#addonneeded").val(addonadd);
            $("#addonprice").text(finalcost);
            $("#additionalprice").val(finalcost);
            $(".addonpricevalue").text("+ $" + finalcost + " ");
        }
        $(".orderamount").text(Number(orderamount) + Number(finalcost));
    }

    function adjustAddon() {
        var addoncost = $("#addonrate").val();
        var addonadd = parseInt($("#addonneeded").val());
        if (addonadd > 10) {
            var finalcost = addoncost * 10;
            $("#addonneeded").val(10);
            $("#addonprice").text(finalcost);
            $("#additionalprice").val(finalcost);
            $(".addonpricevalue").text(" + $" + finalcost);
        } else {
            var finalcost = addonadd * addoncost;
            $("#addonneeded").val(addonadd);
            $("#addonprice").text(finalcost);
            $("#additionalprice").val(finalcost);
            $(".addonpricevalue").text("+ $" + finalcost + " ");
        }

        if (addonadd < 1) {
            $("#addonneeded").val(0);
            $("#addonprice").text(0);
            $("#additionalprice").val(0);
            $(".addonpricevalue").text("");
            finalcost = 0;
        }
        $(".orderamount").text(Number(orderamount) + Number(finalcost));
    }

    function minusAddon() {
        var addonneeded = $("#addonneeded").val();
        var removeaddon = addonneeded - 1;
        var addoncost = $("#addonrate").val();
        if (removeaddon < 1) {
            $("#addonneeded").val(0);
            $("#addonprice").text(0);
            $("#additionalprice").val(0);
            $(".addonpricevalue").text("");
            finalcost = 0;

        } else {
            var finalcost = addoncost * removeaddon;
            $("#addonneeded").val(removeaddon);
            $("#addonprice").text(finalcost);
            $("#additionalprice").val(finalcost);
            $(".addonpricevalue").text("+ $" + finalcost + " ");

        }
        $(".orderamount").text(Number(orderamount) + Number(finalcost));

    }

    function sectionScroll() {
        $('html, body').animate({
            scrollTop: $("#payment").offset().top
        }, 50);
        var packageBox = document.getElementById("packagesMain");
        var packageBtn = packageBox.getElementsByClassName("PricingBox");

        for (var i = 0; i < packageBtn.length; i++) {
            packageBtn[i].addEventListener("click", function() {
                // Remove 'activePricingBox' class from all elements
                var currentActive = document.getElementsByClassName("activePricingBox");
                while (currentActive.length > 0) {
                    currentActive[0].classList.remove("activePricingBox");
                }

                // Add 'activePricingBox' class to the clicked element
                this.classList.add("activePricingBox");
            });
        }

        // for (var i = 0; i < packageBtn.length; i++) {
        //     packageBtn[i].addEventListener("click", function() {
        //         var current = document.getElementsByClassName(" activePricingBox");
        //         current[0].className = current[0].className.replace(" activePricingBox", "");
        //         this.className += " activePricingBox";
        //     });
        // }
    }
    orderamount = orderamount - promodiscount;
    $(".orderamount").text(orderamount);

    $('body').keydown(function(event) {
        if (event.which === 27) {
            $("#storefront").fadeOut();
            $("#storefront").hide();
            var frame = document.getElementById("storefront");
            frame.src = ""
            event.preventDefault();
        }
    });

    $(".payment_popup_close_button").click(function() {
        $("#storefront").fadeOut();
        $("#storefront").hide();
        $('.payment_popup_close_button').hide();
        var frame = document.getElementById("storefront");
        frame.src = ""
    })
</script>