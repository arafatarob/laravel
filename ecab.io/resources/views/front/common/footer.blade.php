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
                        <!--<li class=""><img src="assets/images/internet.png" alt="internet"></li>-->
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

<div id="footer" class="container-fluid">
    <div class="top-img">
        <img src="assets/images/header-new-back.png" alt="">
    </div>
    <div class="row footer_first_row">
        <div class="container" style="padding:15px 6px 10px">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div id="first_column_footer">
                    <div class="footer_logo"
                        style="width: 200px;height: 0px;padding: 55px !important;border-bottom: 1px solid #fff !important;">
                        <!-- <a href=" "><img style="width: 180px;
    height: 120px;
    position: relative;
    left: -52px;
    top: -53px;" src="/assets/images/logo_header.png"></a></li> -->
                    </div>
                    <div class="ff-text">
                        <p>Ecab @ 2016 Tous droits réservés.</p>
                    </div>
                    <img src="assets/images/garantis.png" alt
                        width="200" height="50" tabindex="0" style="margin: 5px auto;">
                    <img style="position: absolute;
    left: 14px;
    top: 193px;
    width: 30px;" src="assets/images/white_lock.png"
                        title="BusinessHelp Logo" alt="BusinessHelp Logo">
                    <h3 class="secureCheckOut">Paiement Sécurisé</h3>

                    <p style="margin-bottom: 0px;">Nous utilisons un système de sécurité SSL crypté pour garantir que
                        les informations relatives à votre carte de crédit sont protégées à 100 %.</p>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="footer-menu-holder">
                    <h4 style="text-transform: uppercase">FONCTIONNALITéS</h4>
                    <ul class="footer-menu usefull">
                        <li menuitemname="Login" id="Primary_Login">
                            <a class="bg-hover">
                                Réservations
                            </a>
                        </li>
                        <li menuitemname="Register" class id="Primary_Register">
                            <a href="   announcements">
                                Clients
                            </a>
                        </li>
                        <li menuitemname="Register" class id="Primary_Register">
                            <a href>
                                Partenaires
                            </a>
                        </li>
                        <li menuitemname="Contact Us" class id="Primary_Navbar-Contact_Us">
                            <a href="   maintenance">
                                Chaufffeurs
                            </a>
                        </li>
                        <li menuitemname="Support" class id="Primary_Navbar-Support">
                            <a href="   support">
                                Voitures
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="footer-menu-holder">
                    <h4>INFORMATIONS</h4>
                    <ul class="footer-menu links">
                        <li menuitemname="1" id="Primary_Navbar-1">
                            <a class="bg-hover" href="   ">
                                Accueil
                            </a>
                        </li>
                        <li menuitemname="133" class id="Primary_Navbar-133"> <a href="#services">
                                Fonctionnalitiés
                            </a>
                        </li>
                        <li menuitemname="159" class id="Primary_Navbar-159"><a href="{{ route('benefices') }}">
                                Bénéfices
                            </a>
                        </li>
                        <li menuitemname="185" class id="Primary_Navbar-185"><a href="{{ route('tarifs') }}">
                                Tarifs
                            </a>
                        </li>
                        <li menuitemname="186" class id="Primary_Navbar-186">
                            <a href="#temoignages">
                                Témoignages
                            </a>
                        </li>
                        <li menuitemname="186" class id="Primary_Navbar-186">
                            <a href="#faq">
                                Faq
                            </a>
                        </li>
                        <li menuitemname="186" class id="Primary_Navbar-186">
                            <a href="{{ route('contact') }}">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>




            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="footer-menu-holder">
                    <h4 style="text-transform: uppercase;">LIENS UTILeS</h4>
                    <ul class="footer-menu usefull">
                        <li menuitemname="Login" id="Primary_Login">
                            <a class="bg-hover">
                                Affiliation
                            </a>
                        </li>
                        <li menuitemname="Register" class id="Primary_Register">
                            <a href="   announcements">
                                Announcements
                            </a>
                        </li>
                        <!-- <li menuitemname="Register" class id="Primary_Register">
<a href>
Emploi
</a>
</li> -->
                        <li menuitemname="Contact Us" class id="Primary_Navbar-Contact_Us">
                            <a href="   maintenance">
                                Etat du service
                            </a>
                        </li>
                        <li menuitemname="Contact Us" class id="Primary_Navbar-Contact_Us">
                            <a href="   maintenance">
                                Mises à jour
                            </a>
                        </li>
                        <li menuitemname="Support" class id="Primary_Navbar-Support">
                            <a href="   support">
                                Support
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="footer-menu-holder">
                    <h4>CONTACT</h4>
                    <div class="address-holder">
                        <div class="phone">
                            <i class="fas fa-phone"></i>
                            01 84 25 37 39
                        </div>
                        <div class="phone">
                            <img src="  assets/images/call-fax.png" alt style="margin: 0px 4px 0px -4px;">
                            01 84 25 37 59
                        </div>
                        <div class="email"><i class="fas fa-envelope"></i> <a
                                href="/web/20231129180021/ cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="3950575f56795c5a585b175056">[email&#160;protected]</a></div>

                        <div class="opening-time">
                            <span style="font-size: 14px;">
                                <p style="margin: 0;font-weight: 900" class="font-bold">
                                    Notre Agence est Ouverte :
                                </p>

                                <p style="margin: 0;">Du Lundi au Vendredi</p>
                                <p style="margin: 0;">De 09:00 H à 12:00 H</p>
                                <p style="margin: 0;">et De 14:00 H à 18:00 H</p>
                            </span>
                        </div>

                        <div class="address" style="color: #ccc">
                            <i class="fas fa-map-marker"></i>
                            <div>
                                <span style="font-weight:600"> Adresse :</span>
                                40 Rue Alexandre Dumas <br />
                                75011 Paris
                            </div>
                        </div>
                        <img style="margin-bottom: 3px;" src="./assets/images/digitalsFooterLogo.png" alt width="260"
                            tabindex="0">
                    </div>
                </div>
            </div>





        </div>
    </div>
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
                <a style="border-left: none;" href="{{ route('condition') }}" target="_blank">Conditions
                    d'utilisation</a>
                <a href=" {{ route('mention') }} " target="_blank">Politique de remboursement</a>
                <a href=" {{ route('privee') }} " target="_blank">Politique de confidentialité</a>
                <a href="{{ route('remboursement') }} " target="_blank">Politique de vie privée</a>
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

<div id="fullpage-overlay" class="hidden">
    <div class="outer-wrapper">
        <div class="inner-wrapper">
            <img src="  assets/img/overlay-spinner.svg">
            <br>
            <span class="msg"></span>
        </div>
    </div>
</div>
<div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel-primary">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Fermer</span>
                </button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body panel-body">
                Chargement en cours..
            </div>
            <div class="modal-footer panel-footer">
                <div class="pull-left loader">
                    <i class="fas fa-circle-notch fa-spin"></i>
                    Chargement en cours..
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Fermer
                </button>
                <button type="button" class="btn btn-primary modal-submit">
                    Envoyer
                </button>
            </div>
        </div>
    </div>
</div>
<form action="#" id="frmGeneratePassword" class="form-horizontal">
    <div class="modal fade" id="modalGeneratePassword">
        <div class="modal-dialog">
            <div class="modal-content panel-primary">
                <div class="modal-header panel-heading">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">
                        Générer un mot de passe
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger hidden" id="generatePwLengthError">
                        Veuillez entrer un nombre entre 8 et 64 pour la longueur du mot de passe
                    </div>
                    <div class="form-group">
                        <label for="generatePwLength" class="col-sm-4 control-label">Longueur du mot de passe</label>
                        <div class="col-sm-8">
                            <input type="number" min="8" max="64" value="12" step="1"
                                class="form-control input-inline input-inline-100" id="inputGeneratePasswordLength">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="generatePwOutput" class="col-sm-4 control-label">Mot de passe généré</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputGeneratePasswordOutput">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-4">
                            <button type="submit" class="btn btn-default btn-sm">
                                <i class="fas fa-plus fa-fw"></i>
                                Générer un nouveau mot de passe
                            </button>
                            <button type="button" class="btn btn-default btn-sm copy-to-clipboard"
                                data-clipboard-target="#inputGeneratePasswordOutput">
                                <img src=" ./assets/img/clippy.svg" alt="Copy to clipboard" width="15">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Fermer
                    </button>
                    <button type="button" class="btn btn-primary" id="btnGeneratePasswordInsert"
                        data-clipboard-target="#inputGeneratePasswordOutput">
                        Copier dans le presse-papiers et insérer
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

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
        width: 25px;
        height: 25px;
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
        max-width: 410px;
        padding: 10px 20px 10px 20px;
        border: 1px solid #ddd;
        right: 10px;
        position: fixed;
        z-index: 999999;
        background: var(--bg-gray);
        width: 100%;
        min-height: 641px;
        /* top: 190px; */
        height: 396px;
        margin-top: 0 !important;
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
        z-index: 100000000;
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
                "right": "22px"
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
<!--
     FILE ARCHIVED ON 18:00:21 Nov 29, 2023 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 04:31:53 Oct 07, 2025.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 0.491
  exclusion.robots: 0.025
  exclusion.robots.policy: 0.015
  esindex: 0.009
  cdx.remote: 13.771
  LoadShardBlock: 95.688 (3)
  PetaboxLoader3.datanode: 167.345 (4)
  PetaboxLoader3.resolve: 98.455 (2)
  load_resource: 176.415
-->


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
            $(this).css('border', '2px solid');
            $(this).css('border-color', 'red');
            $(this).css('border-radius', '13px');
        })
    })
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {

        const outerBtn = document.querySelector(".outer img");
        const supportForm = document.getElementById("support_form");
        const suppBtn = document.getElementById("supportBtn");
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

        suppBtn.addEventListener("click", function (e) {
            e.preventDefault();
            supportForm.style.display = "block";
            outerBtn.style.display = "none";
        });

    });
</script>