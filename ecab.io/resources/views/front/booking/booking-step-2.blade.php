<style>
    div#plan-navbar {
        margin-top: 176px;
        margin-bottom: 18px;
        padding: 0;
    }
    ul.top-nav {
    margin: -9px 0 !important;
}
</style>
<div class="container">
    <div id="breadcrumb">
        <a href="https://ecab.site" style="color:#337ab7;"><i class="fa fa-home"></i> Accueil <i
                class="fa-solid fa-chevron-right" style="font-size: 13px"></i></a>
        <a href="javascript:void(0)" style="color:#337ab7;">Forfaits </a>
    </div>
    <div class="row">
        <div class="col-md-11" id="plan-navbar">
            <div style="margin-bottom: 5px;">
                <div class="steps__container">
                    <ul class="nav nav-wizard">
                        <li class="contact-steps contact-step-1" style="pointer-events: none;"><span
                                class="step__arrow__b"></span><span class="steps">1</span><a>FORFAIT</a></li>
                        <li class="active  contact-steps contact-step-2" style="pointer-events: none;">
                            <span class="step__arrow__b"></span><span class="steps">2</span><a>AUTHENTIFICATION</a></li>
                        <li class="contact-steps contact-step-3" style="pointer-events: none;">
                            <span class="step__arrow__b"></span><span class="steps">3</span><a>DEVIS</a></li>
                        <li class="contact-steps contact-step-3" style="pointer-events: none;">
                            <span class="steps">4</span><a>PAIMENT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="authentication">
    <div class="container">
        <div class="row">
            <div class="authentication-section col-md-12">
                <div class="authentication-login-section col-md-6">
                    <div class="login-inner" style="display: none;">
                        <div class="login-area">
                            <div class="auth__top__txt__container">
                                <span class="text">Vous avez déjà un compte ?</span>
                                <button type="button" class="btn active"
                                    style="linear-gradient(to bottom, #0d85a8 0%, #35add1 61%, #44c0e5 100%) !important"
                                    onclick="displayAuthLoginForm(this);">Connectez-vous maintenant <i
                                        class="fa-solid fa-caret-up"></i> </button>
                            </div>
                            <form action="" method="post">
                                <div class="inline">
                                    <div class="email">
                                        <div class="row">
                                            <div class="col-xs-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="username">
                                                        Email
                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                        <input type="email" name="email" value="" id="email"
                                                            class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="error-message" id="validate_email"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="password">
                                        <div class="row">
                                            <div class="col-xs-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="password">
                                                        Mot de passe
                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-lock"></i>
                                                        </span>
                                                        <input type="password" name="password" value="" id="password"
                                                            class="form-control" placeholder="*******">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default reveal" type="button"
                                                                style="border-left: 1px solid  #0091d1;"><i
                                                                    class="glyphicon glyphicon-eye-close"
                                                                    style="color:  #0091d1;"></i></button>
                                                        </span>
                                                    </div>
                                                    <div class="error-message" id="validate_password"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="form-options"
                            style="gap: 189px;justify-content: normal;display: flex;margin-bottom: 18px;">
                            <div class="remember-me">
                                <input type="checkbox" id="remember" checked="">
                                <label for="remember">Se souvenir de moi</label>
                            </div>
                            <a href="#" id="forgot__password__btn">Mot de passe oublié ?</a>
                        </div>
                        <div class="forget-password-container" style="display: none;">
                            <input type="hidden" name="user_forget_password_route"
                                value="https://ecab.site/forgot-password">
                            <div class="inline__box">
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input type="email" class="form-control" name="forget_password_email"
                                            placeholder="Votre Email?" style="width: 310px;">
                                    </div>
                                </div>

                                <button type="button" class="btn-forget"
                                    onclick="submitUserForgetPasswordForm(this);">Envoyer</button>
                                <button type="button" onclick="userForgetPasswordBox()"
                                    style="transform: translateY(35px);" class="remove__btn">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="auth__top__txt__container">
                            <span class="text">Pas encore de compte ?</span>
                            <button type="button" class="btn active" id="registerBtn"
                                style="background: linear-gradient( #0d85a8 0%, #35add1 61%, #44c0e5 100%) !important"
                                onclick="displayAuthLoginForm(this);">Inscrivez-vous
                                maintenant <i class="fa-solid fa-caret-down"></i> </button>
                        </div>
                        <div style="display: flex;justify-content: space-between;margin-top: 25px;margin-bottom: 10px;"
                            class="">
                            <div class="prev-booking-tab-btn" style="position: relative;">
                                <button type="button" class="step__previous__btn"
                                    onclick="prevfirstStepCurrentModuleForm(this)"><span>Precedent</span></button>
                            </div>
                            <div>
                                <button type="button" class="btn-login red__3d__btn"
                                    onclick="submitUserLoginForm(this);">SUIVANT</button>
                            </div>
                        </div>
                    </div>
                    <div class="register-inner">
                        <div class="register-area">
                            <div class="auth__top__txt__container">
                                <span class="text">Vous avez déjà un compte ?</span>
                                <button type="button" class="btn active" id="loginBtn"
                                    style="background: linear-gradient(to top, #0d85a8 0%, #35add1 61%, #44c0e5 100%) !important"
                                    onclick="displayAuthLoginForm(this);">Connectez-vous maintenant <i
                                        class="fa-solid fa-caret-down"></i> </button>
                            </div>



                            <div class="auth__top__txt__container" style="position: relative; top: 12px;">
                                <span class="text">Pas encore de compte ?</span>
                                <button type="button" class="btn active"
                                    style="background: linear-gradient(to bottom, #0d85a8 0%, #35add1 61%, #44c0e5 100%) !important"
                                    onclick="displayAuthLoginForm(this);">Inscrivez-vous
                                    maintenant <i class="fa-solid fa-caret-up"></i> </button>
                            </div>
                            <form action="" method="post" style="margin-top: 26px;">
                                <div class="form-row" id="statut">
                                    <div class="form-group">
                                        <label>Statut*</label>
                                        <div class="input-group select-wrapper">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <select class="form-control" id="particularOpt" name="user_statut"
                                                onchange="onChangeUserStatus(this)">
                                                <option value="particular">Particulier</option>
                                                <option value="company">Société ou Organisme</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group user__company__b" id="organisme" style="display: block;">
                                        <label>Nom de Société ou Organisme*</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-building"></i>
                                            </div>
                                            <input type="text" id="Organisme" class="form-control" name="company"
                                                placeholder="Société ou Organisme*">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row" id="civilite">
                                    <div class="form-group" id="CiviliteBooking">
                                        <label>Civilité*</label>
                                        <div class="input-group select-wrapper">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <select class="form-control" id="civiliteReg" name="civility">
                                                <option>Mr</option>
                                                <option>Mme</option>
                                                <option>Mlle</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id="preNom">
                                        <label>Prénom*</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input type="text" id="regFname" class="form-control" name="first_name"
                                                placeholder="Prénom*">
                                        </div>
                                    </div>
                                    <div class="form-group" id="Nom">
                                        <label>Nom*</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input type="text" class="form-control" id="lNamE" name="last_name"
                                                placeholder="Nom*">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-row" id="emailReg">
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <input type="email" id="Emailreg" class="form-control" name="email"
                                                placeholder="Email*">
                                        </div>
                                    </div>
                                    <div class="form-group" id="regPhone1">
                                        <label>Numéro de Téléphone*</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <input type="tel" id="RegPhone1" class="form-control" name="phone"
                                                placeholder="Téléphone*">
                                        </div>
                                    </div>
                                    <div class="form-group user__company__b" id="Fax" style="display: block;">
                                        <label>Fax</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fas fa-print"></i>
                                            </div>
                                            <input type="text" id="faxReg1" class="form-control" name="fax"
                                                placeholder="Fax">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row" id="nomService">
                                    <div class="form-group user__company__b mobile-style-nomCompanyService"
                                        id="nomCompanyService" style="display: block;">
                                        <label>Nom du Service*</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fas fa-building"></i>
                                            </div>
                                            <input type="text" id="NomService"
                                                class="form-control input__border__radius " name="company_service"
                                                placeholder="Nom du Service*">
                                        </div>
                                    </div>
                                    <div class="form-group user__company__b mobile-style-company_Function"
                                        id="company_Function" style="display: block;">
                                        <label>Fonction*</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fas fa-briefcase"></i>
                                            </div>
                                            <input type="text" class="form-control input__border__radius "
                                                id="companyFunction" name="company_function" placeholder="Fonction*">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row" id="company_Siret_Number">
                                    <div class="form-group user__company__b mobile-style-sirenNumber" id="sirenNumber"
                                        style="display: block;">
                                        <label>Numéro de SIRET*</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fas fa-id-card"></i>
                                            </div>
                                            <input type="text" class="form-control input__border__radius "
                                                id="company_siretNumber" name="company_siret_number"
                                                placeholder="Numéro de SIRET*">
                                        </div>
                                    </div>
                                    <div class="form-group user__company__b mobile-style-company_Vat_Number"
                                        style="display: block;" id="company_Vat_Number">
                                        <label>Numéro de TVA intra*</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fas fa-file-invoice"></i>
                                            </div>
                                            <input type="text" class="form-control input__border__radius"
                                                id="company_vatNumber" name="company_vat_number"
                                                placeholder="TVA Intra*">

                                        </div>
                                    </div>

                                </div>

                                <div class="form-group mobile-style-bNom" id="bNom">
                                    <label>Nom de Lieu</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <input type="text" id="bookNom" class="form-control auto__place__name"
                                            name="place_name" placeholder="Nom de Lieu" autocomplete="off">
                                    </div>

                                    <div class="validation__error__b" style="display: none;">
                                        <p><i class="fa fa-times-circle" aria-hidden="true"></i>
                                            nom requis.
                                        </p>
                                    </div>
                                </div>

                                <div class="form-group" id="bAddress">
                                    <label>Adresse*</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <input type="text" id="bookingAddressLocation"
                                            class="form-control input__border__radius auto__address pac-target-input"
                                            name="address" placeholder="Adresse*" autocomplete="off">
                                        <div class="current__location__btn" id="bookAdressLoca">
                                            <img src="assets/images/target-a.svg" alt="Location">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row" id="bCodePostal">
                                    <div class="form-group">
                                        <label>Code Postal*</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <input type="text" id="bCodePostal"
                                                class="form-control input__border__radius auto__zipcode" name="zipcode"
                                                placeholder="Code Postal*">
                                            <div class="current__location__btn" id="bZipLocation">
                                                <img src="assets/images/target-a.svg" alt="Location">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" id="bVillE">
                                        <label>Ville*</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <input type="text" id="bVille"
                                                class="form-control input__border__radius auto__city__name" name="city"
                                                placeholder="Ville*">
                                            <div class="current__location__btn" id="bCityLocation">
                                                <img src="assets/images/target-a.svg" alt="Location">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Complément d'adresse</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <input type="text" class="form-control" id="comBookingAddress" name="address2"
                                            placeholder="Complément d'adresse">
                                    </div>
                                </div>

                                <div class="form-row" id="nomPass">
                                    <div class="form-group">
                                        <label>Mot de Passe*</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                            <input type="password" id="nomPassword" class="form-control password-field"
                                                name="password" placeholder="Mot de Passe*">
                                            <div class="input-group-addon"
                                                style="border: 1px solid #2ba5c9;border-left: 0;">
                                                <i class="fa fa-eye-slash toggle-password"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group password__validation__rule__box" id="ruleBox">
                                        <label>8 caractères minimum.</label>
                                    </div>
                                </div>

                                <div class="form-group checkbox">
                                    <input type="checkbox" name="terms" id="Cterms" checked=""
                                        style="position: unset;margin: unset;">
                                    <label for="terms" class="terms__label">Je confirme avoir lu et approuvé Les <a
                                            href="https://ecab.site/terms-of-use" target="_blank">Conditions de Service
                                        </a></label>
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" name="privacy" id="Cprivacy" checked=""
                                        style="position: unset;margin: unset;">
                                    <label for="privacy" class="privacy__label">Je confirme avoir lu et approuvé La <a
                                            href="https://ecab.site/privacy-policy" target="_blank">Politique de
                                            Confidentialité </a></label>
                                </div>
                            </form>
                            <div style="display: flex;justify-content: space-between;margin-top: 25px;margin-bottom: 10px;"
                                class="">
                                <div class="prev-booking-tab-btn" style="position: relative;">
                                    <button type="button" class="step__previous__btn"
                                        onclick="prevfirstStepCurrentModuleForm(this)"><span>Precedent</span></button>
                                </div>
                                <div>
                                    <button type="button" class="btn-login red__3d__btn"
                                        onclick="submitUserLoginForm(this);">SUIVANT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="divider__box "></div>
                <div class="authentication__sidebar__section col-md-6">
                    <div class="authentication__side__bar__container">
                        <div class="logo">
                            <img src="assets/images/logo_header.png" alt="Handi Mobilité Logo">
                        </div>
                        <h3>Solution pour transport de personnes</h3>

                        <h2>Pourquoi nous choisir</h2>
                        <p>4 Bonnes raisons pour choisir eCab Solution</p>

                        <div class="advantages">
                            <div class="advantage" id="sans">
                                <img width="60" src="assets/images/new-partner1-removebg.png"
                                    alt="Rapport qualité/prix">
                                <div>
                                    <h4>Sans Engagement</h4>
                                    <p>Notre solution ECAB® est très simple d’utilisation, même pour les personnes peu
                                        habituées à l’informatique ou aux applications en ligne. Tout se fait en
                                        quelques clics seulement.</p>
                                </div>
                            </div>
                            <div class="advantage" id="client">
                                <img width="60" src="assets/images/new-partner3-removebg.png" alt="Service client">
                                <div>
                                    <h4>100% en ligne</h4>
                                    <p>Le logiciel ECAB® a été entièrement pensé et conçu pour les sociétés de
                                        transport. Nous prenons en compte toutes vos problématiques pour faciliter votre
                                        quotidien et vous faire gagner du temps dans vos tâches quotidiennes.</p>
                                </div>
                            </div>
                            <div class="advantage" id="solution">
                                <img width="60" src="assets/images/new-partner5-removebg.png"
                                    alt="Facilité d'utilisation">
                                <div>
                                    <h4>Solution tout en un</h4>
                                    <p>Gérez l’intégralité de votre entreprise depuis un seul logiciel sans avoir à y
                                        passer tout votre temps. Utilisez toutes les fonctionnalités pour effectuer vos
                                        tâches quotidiennes, même les plus chronophages !</p>
                                </div>
                            </div>
                            <div class="advantage" id="intuitive">
                                <img width="60" src="assets/images/new-partner41-removebg.png"
                                    alt="Facilité d'utilisation">
                                <div>
                                    <h4>Intuitive</h4>
                                    <p>Notre logiciel a subi de nombreux tests avant que nous le mettions en ligne. Il
                                        est 100 % fiable et répond à tous les besoins des sociétés de transport.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Slider using Silk.js -->

                        <div class="blueGradient" style="margin-top: 15px;">
                            <div class="silk-slider" id="testimonial-slider">
                                <div class="silk-slides" style="transform: translateX(-100%);">
                                    <div class="silk-slide">
                                        <div class="left">
                                            <img width="130px" class="signInImg" src="assets/images/person3.png"
                                                alt="Fabrice .P">
                                            <h4 class="signInAvatarTitle">Mme Julie Frenandez</h4>
                                            <p class="signInQuote">Présidente de société de transport handicapé</p>
                                        </div>
                                    </div>
                                    <div class="silk-slide">
                                        <div class="left">
                                            <img width="130px" class="signInImg" src="assets/images/person1.png"
                                                alt="Léa . S">
                                            <h4 class="signInAvatarTitle">Mr Benis Karim</h4>
                                            <p class="signInQuote">Gérant de société de Transport VTC</p>
                                        </div>
                                    </div>
                                    <div class="silk-slide">
                                        <div class="left">
                                            <img width="130px" class="signInImg" src="assets/images/person3.png"
                                                alt="Marie . L">
                                            <h4 class="signInAvatarTitle">Mme Julie Frenandez</h4>
                                            <p class="signInQuote">Présidente de société de transport handicapé</p>
                                        </div>
                                    </div>
                                    <div class="silk-slide">
                                        <div class="left">
                                            <img width="130px" class="signInImg" src="assets/images/person3.png"
                                                alt="Fabrice .P">
                                            <h4 class="signInAvatarTitle">Mme Julie Frenandez</h4>
                                            <p class="signInQuote">Présidente de société de transport handicapé</p>
                                        </div>
                                    </div>


                                </div>
                                <div class="silk-navigation text-center">
                                    <button type="button"><span class="dot"
                                            style="background-color: transparent; background-image: linear-gradient(rgb(250, 6, 4) 39%, rgb(194, 8, 6) 100%);"></span>
                                    </button>
                                    <button type="button"><span class="dot"
                                            style="background-color: transparent; background-image: linear-gradient(rgb(83, 185, 29) 39%, rgb(48, 135, 7) 100%);"></span>
                                    </button>
                                    <button type="button"><span class="dot"
                                            style="background-color: transparent; background-image: linear-gradient(rgb(250, 6, 4) 39%, rgb(194, 8, 6) 100%);"></span>
                                    </button>
                                    <button type="button"><span class="dot"
                                            style="background-color: transparent; background-image: linear-gradient(rgb(250, 6, 4) 39%, rgb(194, 8, 6) 100%);"></span>
                                    </button>

                                </div>
                                <div class="silk-dots"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section>




<script>
    var forget = document.getElementById("forgot__password__btn");
    var content = document.querySelector(".forget-password-container");
    var remove = document.querySelector(".remove__btn");


    forget.addEventListener("click", () => {
        content.style.display = content.style.display === "block" ? "none" : "block";
    });

    remove.addEventListener("click", () => {
        content.style.display = "none";
    });




    var showLogin = document.getElementById("loginBtn");
    var showRegister = document.getElementById("registerBtn");
    var loginForm = document.querySelector(".login-inner");
    var registerForm = document.querySelector(".register-inner");

    showLogin.addEventListener("click", () => {
        loginForm.style.display = "block";
        registerForm.style.display = "none";
    });

    showRegister.addEventListener("click", () => {
        registerForm.style.display = "block";
        loginForm.style.display = "none";

    });
</script>

<script>
    let currentIndex = 0;
    const slides = document.querySelector('.silk-slides');
    const totalSlides = document.querySelectorAll('.silk-slide').length;
    const intervalTime = 5000; // Set the interval time in milliseconds (e.g., 5000 for 5 seconds)



    function updateSlidePosition() {
        const translateValue = -currentIndex * 100 + '%';
        slides.style.transform = 'translateX(' + translateValue + ')';
    }

    function updateDotColor() {
        const dots = document.querySelectorAll('.silk-navigation .dot');
        dots.forEach((dot, index) => {
            if (index === currentIndex) {
                dot.style.backgroundColor = 'transparent';
                dot.style.backgroundImage = 'linear-gradient(to bottom, #53b91d 39%, #308707 100%)';
            } else {
                dot.style.backgroundColor = 'transparent';
                dot.style.backgroundImage = 'linear-gradient(to bottom, #fa0604 39%, #c20806 100%)';
            }
        });
    }

    // Auto-sliding functionality
    function autoSlide() {
        setInterval(() => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlidePosition();
            updateDotColor();
        }, intervalTime);
    }

    // Start auto-sliding
    autoSlide();
</script>