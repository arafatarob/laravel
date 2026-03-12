<script>
    $(document).ready(function () {

        $('.autoplay').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            arrows: true,
            autoplaySpeed: 2000,
        });

        $('ul.tabs li').click(function () {
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        });

        function initSlider() {
            const clientSlides = document.querySelectorAll(".client-testimonial-box");
            const dots = document.querySelectorAll(".dot");

            function removeActiveSlide() {
                clientSlides.forEach((item) => {
                    item.classList.remove("active");
                });
            }

            function removeActiveDots() {
                dots.forEach((item) => {
                    item.classList.remove("active");
                });
            }
            let index = 1;
            dots.forEach((item) => {
                item.addEventListener("click", (e) => {
                    removeActiveSlide();
                    removeActiveDots();
                    index = e.target.dataset.value;
                    const activeSlide = document.querySelector(
                        `.client-testimonial-box-${e.target.dataset.value}`);
                    activeSlide.classList.add("active");
                    item.classList.add("active");
                });
            });
            setInterval(loop, 5000);

            function loop() {
                index++;
                if (index > 3) index = 1;
                removeActiveDots();
                removeActiveSlide();
                document.querySelector(`.client-testimonial-box-${index}`).classList.add("active");
                document.querySelector(`.dot-${index}`).classList.add("active");
            }
        }
        initSlider();

        // $('#testmonialBlock').slick({
        //     slidesToShow: 3,
        //     slidesToScroll: 1,
        //     arrows: true,
        //     autoplaySpeed: 2000,
        // });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const currentUrl = window.location.href;
        const menuItems = document.querySelectorAll(".top-nav ul li");

        menuItems.forEach(item => {
            if (item.href === currentUrl) {
                item.parentElement.classList.add("active-custom-menu-item");
            } else {
                item.parentElement.classList.remove("active-custom-menu-item");
            }
        });
    });
</script>

<style>
    .row.footer_first_row {
        display: none;
    }


    .cookies {
        width: 98.8%;
        position: fixed;
        bottom: 0;
        display: block;
        padding: 0px 0;
        font-size: 12px;
        color: #fff;
        gap: 5px;
        justify-content: center;
        align-items: start;
        background: linear-gradient(#ff6666, #cc0000) !important;
        z-index: 9999999;
        font-family: "Open Sans", sans-serif;
        font-weight: 900;
        border-top: 1px solid #cccccc;
        border-bottom: 1px solid #cccccc;
        height: auto;
        height: 40px;
        display: flex;
        align-items: center;
        text-align: center;
    }

    .accept-cookie {
        vertical-align: middle;
        border-radius: 25px;
        background: linear-gradient(#9fe925, #558407) !important;
        font-size: 12px;
        padding: 2px 6px;
        border: none;
        outline: none;
    }

    .col-md-8.marquee-block-footer ul {
        height: 100%;
        padding: 0;
    }

    .col-md-8.marquee-block-footer ul li {
        list-style: none;
        height: 100%;
        vertical-align: middle;
        display: flex;
        align-items: center;
    }

    .col-md-8.marquee-block-footer ul li img {
        width: 55px;
        height: 65%;
        object-fit: cover;
        background: transparent;
    }
</style>

<section id="testimonials_section">
    <div class="container">
        <div class="row" style="padding: 5px 0">
            <div class="quality_container flexme">
                <div class="col-md-4 mytitle">
                    <div class="title_bar">
                        <h2 style="color: #fff; font-weight: bold; font-size: 14px; margin-top: 10px;">NOTRE SOLUTION
                            EST COMPATIBLE AVEC</h2>
                    </div>
                </div>
                <div class="col-md-8 marquee-block-footer" style="height:85px">
                    <ul class="">
                        <li class=""><img style="width: 150px;" src="assets/images/microsoft.png" alt="microsoft"></li>
                        <li class=""><img src="assets/images/apple.png" alt="apple"></li>
                        <li class=""><img src="assets/images/androidfooter.png" alt="androidfooter"></li>
                        <li class=""><img src="assets/images/chrome.png" alt="chrome"></li>
                        <li class=""><img src="assets/images/internet.png" alt="internet"></li>
                        <li class=""><img src="assets/images/firefox.png" alt="firefix"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="eucookie" style="    padding: 5px 0 !important;
    width: 98% !important;">
    <span class="cookies">En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de vos données
        personnelles par des
        cookies
        <a class="cookies-plus" href="https://ecab.agency/privacy-policy" target="_blank"> en savoir
            plus,</a> pour ne plus voir ce message
        cliquez sur le bouton &nbsp;<button id="seteucookie" class="accept-cookie btn btn-badge"
            style="color:white;">Accepter</button></span>
</div>
<div class="outer custom_outer">
    <img src="assets/images/chat.gif">
</div>


<div class="copyright">
    <div class="copyrightinner custom-center container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2">
                <img style="height: 35px;margin-top: 5px;margin-left:40px" alt="Checkout Secure"
                    src="  assets/images/icons-footer5.png">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8">
            <p>
                <a style="border-left: none;" href="{{ route('condition') }}"  target="_blank" >Conditions d'utilisation</a>
                <a href=" {{ route('mention') }} " target="_blank" >Politique de remboursement</a>
                <a href=" {{ route('privee') }} " target="_blank" >Politique de confidentialité</a>
                <a href="{{ route('remboursement') }} " target="_blank" >Politique de vie privée</a>
            </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
            <div class="social-menu-holder text-center">
                <ul class="social-menu">
                    <img
                        src=" https://images.clickfunnels.com/47/1e14475b8241d3bc2807172be71604/XXX-removebg-preview.png" />
                </ul>
            </div>
        </div>
    </div>
</div>



<script data-cfasync="false" src=" cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://web.archive.org/web/20231129180021js_/ assets/frontend/js/jquery.animateTyping.js"></script>
<script src="./assets/frontend/js/bootstrap-slider.min.js"></script>
<script src="./assets/frontend/js/slick.min.js"></script>
<script src="./assets/frontend/js/main.js"></script>
<script src="./assets/frontend/js/custom.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
    $(document).ready(function () {
        $(document).on("click", "#seteucookie", function () {
            $("#eucookie").hide();
        });
    });
</script>
<style>
    .floating-form input,
    .floating-form select,
    .floating-form-2 input,
    .floating-form-2 select {
        background: white !important;
    }

    .floating-form input[type='text'],
    .floating-form-2 input[type='text'] {
        height: 40px;
    }

    .custom-cross-icon {
        background-color: #fff;
        border-radius: 50%;
        color: #ea0707;
        display: inline;
    }

    .floating-form-2 {
        max-width: 410px;
        border: 1px solid #ddd;
        position: fixed;
        left: -167%;
        right: 12px;
        z-index: 999999;
        background: linear-gradient(to bottom, #fafdff 0%, #e8f2f9 100%);
        width: 100%;
        top: 0;
        min-height: 492px;
        max-height: 650px;
        /* padding: 10px 20px; */
        margin: auto;
    }

    .floating-form-2 .custom_client_other1 {
        padding: 0px 20px;
    }

    .floating-form-2 .custom_contact_body-2 {
        padding: 0px 20px;
    }

    .floating-form-2 .btn-successs,
    .floating-form .btn-successs {
        border-radius: 6px;
        color: #fff !important;
        font-size: 14px !important;
        font-weight: bold !important;
        padding: 8px 20px !important;
        margin-top: 2px !important;
        height: auto;

        background-color: #00B22D;
        background-image: -o-linear-gradient(to bottom, #35c350 0%, #03b525 100%);
        background-image: -moz-linear-gradient(to bottom, #35c350 0%, #03b525 100%);
        background-image: -ms-linear-gradient(to bottom, #35c350 0%, #03b525 100%);
        background-image: -webkit-linear-gradient(to bottom, #35c350 0%, #03b525 100%);
        background-image: linear-gradient(to bottom, #35c350 0%, #03b525 100%);
        border: 1px solid #FEFEFE !important;
        box-shadow: 0 1px 0 #00B22D inset !important;
    }

    .floating-form-2 .btn-successs {
        background-color: #FF7C07;
        background-image: -o-linear-gradient(to bottom, rgb(255, 157, 10) 0%, #FF7902 100%);
        background-image: -moz-linear-gradient(to bottom, rgb(255, 157, 10) 0%, #FF7902 100%);
        background-image: -ms-linear-gradient(to bottom, rgb(255, 157, 10) 0%, #FF7902 100%);
        background-image: -webkit-linear-gradient(to bottom, rgb(255, 157, 10) 0%, #FF7902 100%);
        background-image: linear-gradient(to bottom, rgb(255, 157, 10) 0%, #FF7902 100%);
        border: 1px solid #FEFEFE !important;
        box-shadow: 0 1px 0 #FC8213 inset !important;
    }

    .floating-form-2 .btn-successs:hover {
        background-color: #F89741;
        background-image: -o-linear-gradient(to bottom, rgb(255, 157, 10) 0%, #FAA050 100%);
        background-image: -moz-linear-gradient(to bottom, rgb(255, 157, 10) 0%, #FAA050 100%);
        background-image: -ms-linear-gradient(to bottom, rgb(255, 157, 10) 0%, #FAA050 100%);
        background-image: -webkit-linear-gradient(to bottom, rgb(255, 157, 10) 0%, #FAA050 100%);
        background-image: linear-gradient(to bottom, rgb(255, 157, 10) 0%, #FAA050 100%);
        color: #fff;
        box-shadow: 0 1px 0 #ff9600 inset;
    }

    .floating-form .alert,
    .floating-form-2 .alert {
        border: 1px solid #999 !important;
        color: #000 !important;
        /* margin-bottom: 10px !important; */
        font-size: 11px !important;
        padding: 6px 10px;
        line-height: 20px;
    }

    .floating-form-2 h4 {
        font-size: 18px;
    }

    .floating-form .col-xs-4,
    .floating-form-2 .col-xs-4 {
        width: 37.33333%;
    }

    @media screen and (-webkit-min-device-pixel-ratio:0) {

        .floating-form select.form-control,
        .floating-form-2 select.form-control,
        .assistance-form select.form-control {
            line-height: 40px !important;
            padding: 6px 0 !important;
            height: 40px !important;
            margin-top: 0px;
        }

        .floating-form,
        .floating-form-2 {
            padding-bottom: 13px !important;
        }
    }

    .floating-form .form-group,
    .floating-form-2 .form-group {
        margin-bottom: 6px !important;
        overflow: hidden;
    }

    .floating-form .col-xs-12,
    .floating-form .col-xs-6,
    .floating-form-2 .col-xs-6,
    .floating-form-2 .col-xs-12,
    .floating-form .col-xs-4,
    .floating-form-2 .col-xs-4 {
        padding-left: 2px;
        padding-right: 2px;
    }

    .visiable .contact-opener-2 {
        width: 100%;
        left: 0;
    }

    .demande_cta {
        display: none;
        position: fixed;
        left: 0;
        z-index: 999;
        top: 179px;
        cursor: pointer;
        width: 75px;

    }

    .visiable .contact-opener,
    .visiable .contact-opener-2 {
        display: none;
    }

    .floating-form-3-header {
        left: 0px;
        right: 0px;
        padding: 21px 0px 13px;
        color: #fff;
        margin-top: -12px;
        width: 408px;
        color: #fff;
        text-shadow: 1px 1px 1px rgb(0 0 0 / 43%);
        cursor: pointer;
        border-radius: 5px 5px 0 0;
        background: linear-gradient(to bottom, #44c0e5 0%, #35add1 39%, #0d85a8 100%) !important;
        font-size: 16px;
        font-weight: bold;
        width: 100%;
        text-align: center;
    }

    a.close-btn.closee-btn,
    a.close-btn-2.closee-btn {
        right: 11px !important;
        top: 7px !important;
    }

    .close-btn,
    .close-btn-2,
    .close-btn-3,
    .close-btn-4,
    .close-btn-5 {
        color: #5cb85c;
        display: inline-block;
        width: 20px;
        height: 20px;
        font-size: 18px;
        position: absolute;
        right: -1px;
        top: -8px;
    }

    .close-btn-2 {
        top: 0px;
    }

    .contact_body .closee-btn {
        color: #5cb85c !important;
    }

    form.form-stacked label.control-label {
        font-weight: 400 !important;
    }

    form.form-stacked {
        margin-top: -10px !important;
    }

    form.form-stacked .form-group.col-md-2 {
        width: 25%;
    }

    form.form-stacked {
        text-align: left;
    }

    form.form-stacked .form-group.col-md-2 {
        width: 100%;
    }

    form.form-stacked .form-group.col-md-2,
    form.form-stacked .form-group.col-md-3 {
        width: 18.7%;
    }

    form.form-stacked label.control-label {
        font-weight: 400 !important;
    }

    form.form-stacked {
        margin-top: -10px !important;
    }

    div#supp_other1 .fa {
        color: #0d4f78;
    }

    #client_other1 .input-group-addon {
        padding: 6px 6px !important;
    }

    .input-group-addon {
        background-image: linear-gradient(to bottom, #fbfbfb 0%, #ececec 39%, #ececec 39%, #cecece 100%)
    }

    p.test,
    p.fote-text {
        text-align: center;
        font-size: 11px;
        color: #000;
        padding: 10px;
    }

    p.test {
        margin-bottom: -10px;
        /*margin-top:10px;*/
    }

    .testimonial-block {
        margin-top: 20px;
    }

    .input-group .form-control {
        border: 1px solid #41BDE2;
    }

    .floating-form select.form-control,
    .floating-form-2 select.form-control {
        padding: 6px 0 !important;
        height: 40px !important;
        margin: 0 !important;
    }

    .floating-form textarea.form-control {
        height: 65px;
    }

    #client_other1 .form-control {
        padding: 6px 6px !important;
    }

    input.w3-orange.orangehs {
        background: linear-gradient(#ff6666, #cc0000) !important;
        /*#2ba1d3*/
    }

    .showClass {
        background: rgb(235, 244, 255) none repeat scroll 0% 0% !important;
        left: 0%;
        right: 100%;
    }

    .currentClass {
        background: rgb(235, 244, 255) !important;
    }

    .dNone {
        display: none !important;
    }

    /* Right pannel */
    .floating-form {
        width: initial !important;
    }

    .floating-form {
        /*contact form wrapper*/
        max-width: 410px;
        padding: 10px 20px 10px 20px;
        border: 1px solid #ddd;
        right: 10px;
        position: fixed;
        /*Form position fixed*/
        z-index: 999999;
        background: linear-gradient(to bottom, #fafdff 0%, #e8f2f9 100%);
        width: 100%;
        min-height: 667px;
        /*top: 190px;*/
        height: 467px;
    }

    .floating-form .btn-successs:hover {
        background-color: #35c350;
        background-image: -o-linear-gradient(to bottom, #03b525 0%, #35c350 100%);
        background-image: -moz-linear-gradient(to bottom, #03b525 0%, #35c350 100%);
        background-image: -ms-linear-gradient(to bottom, #03b525 0%, #35c350 100%);
        background-image: -webkit-linear-gradient(to bottom, #03b525 0%, #35c350 100%);
        background-image: linear-gradient(to bottom, #03b525 0%, #35c350 100%);
    }

.floating-form-2-header {
    /* position: absolute; */
    /* top: -10px; */
    left: 0px;
    right: 0px;
    padding: 8px 0px 5px;
    color: #fff;
    margin-left: -20px;
    margin-top: -12px;
    width: 410px !important;
    color: #fff;
    text-shadow: 1px 1px 1px rgb(0 0 0 / 43%);
    cursor: pointer;
    border-radius: 26px 26px 0 0;
    background: linear-gradient(#ff6666, #cc0000) !important;
    font-size: 16px;
    font-weight: bold;
    width: 100%;
    text-align: center;
}
    .contact-opener {
        margin-top: 47px !important;
        /* left: -40px !important; */
        left: 0px !important;
    }

    .contact-opener {
        margin-top: 63px;
    }

    .contact-opener {
        background: none !important;
        border: 0 !important;
    }

    .contact-opener-2 {
        position: absolute;
        left: -230px;
    }

    .right-opener {
        top: 19.6%;
    }

    .contact-opener::before {
        position: absolute;
        content: "";
        background: url(" https://digitals.fr/templates/chistel602/asset/netsco/html/images/123.gif");
        width: 85px;
        height: 80px;
        opacity: 1;
    }

    .contact-opener,
    .contact-opener-3 {
        position: absolute;
        left: -273px;
    }

    div#ccinputform td a {
        width: 142px !important;
        display: block;
        position: absolute;
        right: 13px;
    }

    input#cccvv {
        width: 145px !important;
    }

    .contact-opener,
    .contact-opener-3 {
        position: absolute;
        left: -295px;
    }

    .con-img {
        width: 90px;
    }

    img.con-img {
        /* transform: rotate(90deg); */
        opacity: 1;
        position: relative;
    }

    img.con-img:hover {
        opacity: 1;
    }

    .defaultRight {
        border: 2px solid rgb(47, 176, 231);
        background: rgb(235, 244, 255) none repeat scroll 0% 0% !important;
        right: -412px;
    }

    .showRight {
        top: 0px;
        border: 2px solid rgb(47, 176, 231);
        background: rgb(235, 244, 255) none repeat scroll 0% 0% !important;
        right: 0px;
    }

    div.outer {
        position: relative;
        height: 24px;
    }

    div.outer img {
        position: absolute;
        right: 0;
        bottom: 0;
    }

    .outer {
        display: block !important;
    }

    div.custom_outer img {
        width: 6%;
        position: fixed;
        bottom: 1%;
        right: 1.2%;
        z-index: 100;
        border: 1px solid #fff;
        border-radius: 100%;
    }

    /* cookie bar css */
    /* .seteucookie {
        padding: 1px 12px !important;
    } */
</style>
<script type="text/javascript" language="javascript">
    $(document).ready(function () {

        $(document).on("click", ".demande", function () {
            $(".floating-form-2").removeClass('currentClass');
            $(".floating-form-2").addClass('visiable, showClass');
            $(".contact-opener-2").addClass('dNone');
            console.log("clicked");
            // $(".floating-form-2").css('background:rgb(235, 244, 255) none repeat scroll 0% 0% !important; left: -72%;');
        });

        $(document).on("click", ".close-btn-2", function () {
            $(".floating-form-2").addClass('currentClass');
            $(".floating-form-2").removeClass('visiable, showClass');
            $(".contact-opener-2").removeClass('dNone');
            // $(".floating-form-2").css('background:rgb(235, 244, 255) none repeat scroll 0% 0% !important; left: -72%;');
        });

        $(document).on("click", ".con-img", function () {
            $(".floating-form").removeClass('defaultRight');
            $(".floating-form-2").addClass('visiable, showRight');
            $(".contact-opener").addClass('dNone');
        });
        $(document).on("click", ".closee-btn", function () {
            $(".floating-form-2").removeClass('visiable, showRight');
            $(".contact-opener").removeClass('dNone');
            $(".floating-form").addClass('defaultRight');
        });
    })
</script>
<script>
    // floating Contact form
    var _scroll = true,
        _timer = false,
        _floatbox = $("#contact_form"),
        _floatbox_opener = $(".contact-opener, .close-btn,.apply_job");
    // _floatbox_opener = $(".contact-opener, .closee-btn");
    if (!_floatbox.hasClass('visiable'))
        _floatbox.css({
            right: "-412px"
        });
    else
        _floatbox.css({
            right: "-357px"
        });
    _floatbox_opener.click(function () {
        if (_floatbox.hasClass('visiable')) {
            _floatbox.animate({
                "right": "-412px"
            }, {
                duration: 300
            }).removeClass('visiable');
        } else {
            _floatbox.animate({
                "right": "0px"
            }, {
                duration: 300
            }).addClass('visiable');
        }
    });

    // floating Contact form2
    var _scroll2 = true,
        _timer2 = false,
        _floatbox2 = $("#contact_form_2"),
        _floatbox_opener2 = $(".contact-opener-2, .close-btn-2,.apply_job_2");
    // _floatbox_opener = $(".contact-opener, .closee-btn");
    if (!_floatbox2.hasClass('visiable'))
        _floatbox2.css({
            left: "-167%"
        });
    else
        _floatbox2.css({
            left: "-168%"
        });
    _floatbox_opener2.click(function () {
        if (_floatbox2.hasClass('visiable')) {
            _floatbox2.animate({
                "left": "-167%"
            }, {
                duration: 300
            }).removeClass('visiable');

        } else {
            _floatbox2.animate({
                "left": "0%"
            }, {
                duration: 300
            }).addClass('visiable');

        }
    });
</script>


</body>

</html>



<script>
    $(document).ready(function () {
        $(document).on("click", "#seteucookie", function () {
            $("#eucookie").hide();
        });
    });
</script>
<script type="text/javascript" src="https://web.archive.org/web/20240221211645js_/https://js.stripe.com/v3/"></script>
<script>
    jQuery(document).ready(function () {
        jQuery('#btnShowSidebar').click(function () {
            if (jQuery(".product-selection-sidebar").is(":visible")) {
                jQuery('.row-product-selection').css('left', '0');
                jQuery('.product-selection-sidebar').fadeOut();
                jQuery('#btnShowSidebar').html(
                    '<i class="fas fa-arrow-circle-right"></i> Afficher le Menu');
            } else {
                jQuery('.product-selection-sidebar').fadeIn();
                jQuery('.row-product-selection').css('left', '300px');
                jQuery('#btnShowSidebar').html(
                    '<i class="fas fa-arrow-circle-left"></i> Cacher le Menu');
            }
        });
    });
</script>
<script>
    $('#product1 .pricing-details > ul > li > br').remove();
    $('#product1 .pricing-details .pricing-features').find('br').remove();
    $('#product1 .pricing-details .pricing-features').detach().insertAfter('#product1 .pricing-head .pricing-title');
</script>
<script>
    $('#product2 .pricing-details > ul > li > br').remove();
    $('#product2 .pricing-details .pricing-features').find('br').remove();
    $('#product2 .pricing-details .pricing-features').detach().insertAfter('#product2 .pricing-head .pricing-title');
</script>
<script>
    $('#product3 .pricing-details > ul > li > br').remove();
    $('#product3 .pricing-details .pricing-features').find('br').remove();
    $('#product3 .pricing-details .pricing-features').detach().insertAfter('#product3 .pricing-head .pricing-title');
</script>
<script>
    $('#product4 .pricing-details > ul > li > br').remove();
    $('#product4 .pricing-details .pricing-features').find('br').remove();
    $('#product4 .pricing-details .pricing-features').detach().insertAfter('#product4 .pricing-head .pricing-title');
</script>
<script>
    $(document).ready(function () {
        $('.minus').click(function () {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.plus').click(function () {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
    });
    $(document).on("click", ".ymChecker", function () {
        let btnVal = $(this).attr("value");
        $(".pricesh").addClass('d-none');
        if (btnVal != 'm') {
            // console.log(btnVal +"inside");
            $(".pricesh").removeClass('d-none');
        }
    });

    $(document).ready(function () {
        $('.pricingColors').on('click', function () {
            $('.pricingColors').removeClass('priceDivActive');
            $('.pricingColors').css('border', 'none');
            $(this).css('border', '5px solid');
            $(this).css('border-color', 'red');
            $(this).css('border-radius', '17px');
        })
    })
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {

    const outerBtn = document.querySelector(".outer img");
    const supportForm = document.getElementById("support_form");
    const supportBtn = document.getElementById("#Primary_Navbar-133");
    const closeBtn = document.querySelector(".close-btn-4");

    // When .outer is clicked → form show, outer hide
    outerBtn.addEventListener("click", function () {
        supportForm.style.display = "block";
        outerBtn.style.display = "none";
    });

    // When cross (close-btn-4) is clicked → form hide, outer show
    closeBtn.addEventListener("click", function (e) {
        e.preventDefault();
        supportForm.style.display = "none";
        outerBtn.style.display = "block";
    });

});

</script>