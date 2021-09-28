<?php

require './header_1.php';
?>

<style>
    /* Images*/
    ol, ul {
        list-style: none;
    }
    .hand {
        cursor: pointer;
        cursor: pointer;
    }
    .cards{
        padding-left:0;
    }
    .cards li {
        -webkit-transition: all .2s;
        -moz-transition: all .2s;
        -ms-transition: all .2s;
        -o-transition: all .2s;
        transition: all .2s;
        background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
        background-position: 0 0;
        float: left;
        height: 32px;
        margin-right: 8px;
        text-indent: -9999px;
        width: 51px;
    }
    .cards .mastercard {
        background-position: -51px 0;
    }
    .cards li {
        -webkit-transition: all .2s;
        -moz-transition: all .2s;
        -ms-transition: all .2s;
        -o-transition: all .2s;
        transition: all .2s;
        background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
        background-position: 0 0;
        float: left;
        height: 32px;
        margin-right: 8px;
        text-indent: -9999px;
        width: 51px;
    }
    .cards .amex {
        background-position: -102px 0;
    }
    .cards li {
        -webkit-transition: all .2s;
        -moz-transition: all .2s;
        -ms-transition: all .2s;
        -o-transition: all .2s;
        transition: all .2s;
        background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
        background-position: 0 0;
        float: left;
        height: 32px;
        margin-right: 8px;
        text-indent: -9999px;
        width: 51px;
    }
    .cards li:last-child {
        margin-right: 0;
    }
    /* Images end */

    /*
     * BOOTSTRAP
     */
    .container{
        border: none;
    }
    .panel-footer{
        background:#fff;
    }
    .btn{
        border-radius: 1px;
    }
    .btn-sm, .btn-group-sm > .btn{
        border-radius: 1px;
    }
    .input-sm, .form-horizontal .form-group-sm .form-control{
        border-radius: 1px;
    }

    .panel-info {
        border-color: #999;
    }

    .panel-heading {
        border-top-left-radius: 1px;
        border-top-right-radius: 1px;
    }
    .panel {
        border-radius: 1px;
            margin-top: 10%;
    }
    .panel-info > .panel-heading {
        color: #eee;
        border-color: #999;
    }
    .panel-info > .panel-heading {
        background-image: linear-gradient(to bottom, #555 0px, #888 100%);
    }

    hr {
        border-color: #999 -moz-use-text-color -moz-use-text-color;
    }

    .panel-footer {
        border-bottom-left-radius: 1px;
        border-bottom-right-radius: 1px;
        border-top: 1px solid #999;
    }

    .btn-link {
        color: #888;
    }

    hr{
        margin-bottom: 10px;
        margin-top: 10px;
    }

    /** MEDIA QUERIES **/
    @media only screen and (max-width: 989px){
        .span1{
            margin-bottom: 15px;
            clear:both;
        }
    }

    @media only screen and (max-width: 764px){
        .inverse-1{
            float:right;
        }
    }

    @media only screen and (max-width: 586px){
        .cart-titles{
            display:none;
        }
        .panel {
            margin-bottom: 1px;
        }
    }

    .form-control {
        border-radius: 1px;
    }

    @media only screen and (max-width: 486px){
        .col-xss-12{
            width:100%;
        }
        .cart-img-show{
            display: none;
        }
        .btn-submit-fix{
            width:100%;
        }

    }
</style>
<div class="container wrapper" style="min-height: 800px;">
    <div style="margin-top: 12%;">
        <h1>DONATE</h1>
    </div>
    <div class="row cart-body">
        <form class="form-horizontal" method="post" action="">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                <div class="text-center" style="margin-top: 8%;">
                    <spun style="font-size:20px; font-weight:bold;">Bank Deposit</spun> 
                    <br><u>Bank Name</u>: Islami Bank Bangladesh Limited
                    <br><u>Account Name</u>: Md.Ashraful Islam Seium
                    <br><u>Branch</u>: Pallabi
                    <br><u>A/C</u>: 33689
                    <br/><br/>
                    <spun style="font-size:20px; font-weight:bold;">Bkash Account</spun>
                    <br><u>Personal Bkash</u>: 01737888471
                    <br><br>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                <!--CREDIT CART PAYMENT-->
                <div class="panel panel-info">
                    <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Secure Payment</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-12"><strong>Card Type:</strong></div>
                            <div class="col-md-12">
                                <select id="CreditCardType" name="CreditCardType" class="form-control">
                                    <option value="5">Visa</option>
                                    <option value="6">MasterCard</option>
                                    <option value="7">American Express</option>
                                    <option value="8">Discover</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Credit Card Number:</strong></div>
                            <div class="col-md-12"><input type="text" class="form-control" name="car_number" value="" /></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Card CVV:</strong></div>
                            <div class="col-md-12"><input type="text" class="form-control" name="car_code" value="" /></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <strong>Expiration Date</strong>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="">
                                    <option value="">Month</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="">
                                    <option value="">Year</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <span>Pay secure using your credit card.</span>
                            </div>
                            <div class="col-md-12">
                                <ul class="cards">
                                    <li class="visa hand">Visa</li>
                                    <li class="mastercard hand">MasterCard</li>
                                    <li class="amex hand">Amex</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <button type="submit" class="btn btn-primary btn-submit-fix">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--CREDIT CART PAYMENT END-->
            </div>
        </form>
    </div>
</div>








<?php

require './footer.php';
?>