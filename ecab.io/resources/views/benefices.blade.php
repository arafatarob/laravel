@include('front.common.header')

<style>
    .mt-2 {
        margin-top: .5rem !important;
    }

    .text-white {
        color: #fff !important;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: row;
        min-width: 0;
        word-wrap: break-word;
        background: linear-gradient(rgb(251, 251, 251), rgb(236, 236, 236), rgb(206, 206, 206)) 0px 0px repeat scroll transparent;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
        padding-top: 10px;
        border-radius: 11px;
        border: 1px solid #0091d1;
    }

    .row1 {
        flex-shrink: 0;
        width: 100%;
        max-width: 100%;
        margin-top: 30px;
    }

    .mb-4 {
        margin-bottom: 1.5rem !important;
    }

    .ps-5 {
        padding-left: 3rem !important;
    }

    .pt-3 {
        padding-top: 1rem !important;
    }



    .gray-bg-fix {
        margin-top: 10px !important;
        height: 32px !important;
    }

    /* .img-fluid {
        height: auto !important;
    } */

    marquee {
        position: absolute;
        left: 74px;
        width: 845px;
    }

    .badge {
        border-radius: 10px !important;
    }

    .color-blue {
        color: #3195ff;
    }

    img.img-fluid.my-3.rounded.title-img {
        border: 1px solid #0091d1;
        padding: 4px;
        border-radius: 5px;
        object-fit: contain;
        background: #fff;
    }

    .navbar {
        padding: 0;
    }

    #main-body {
        padding-bottom: 0 !important;
    }

    a {
        text-decoration: none !important;
    }

    .w-blue {
        color: #22A2FC !important;
        font-size: 16px;
        font-weight: bold;
    }

    .btn-one {
        background: linear-gradient(to bottom,
                #44c0e5 0%,
                #35add1 39%,
                #0d85a8 100%) !important;
        padding: 5px 15px;
        border-radius: 10px;
        font-size: 15px !important;
        font-weight: 600;
    }

.btn-three {
    background: linear-gradient(  #9fe925, #558407) !important;
    padding: 5px 15px;
    border-radius: 10px;
    font-size: 15px !important;
    font-weight: 600;
}

    textarea {
        border: 1px solid #7bace8 !important;
        font-family: "Open Sans", Verdana, Tahoma, serif;
        color: #333;
        padding: 10px;
        width: 35%;
        font-size: 12px;
        outline: none;
    }

    .signin-signup-form .form-text {
        margin-bottom: 10px;
    }

    .signin-signup-form .form-text.text-holder {
        margin-top: 30px;
    }

    .signin-signup-form .form-text {
        margin-bottom: 10px;
    }

    .margin-bottom {
        margin-bottom: 10px;
    }

    .l-btn {
        padding: 5px 20px;
        font-size: 12px;
    }

    .text-center {
        text-align: center;
    }

    .signin-signup-form .form-button {
        margin-top: 40px;
        margin-bottom: 25px;
    }

    .signin-signup-form .form-button .ybtn {
        padding: 7px 26px;
    }

    .btn {
        border: 0;
        border-radius: 8px;
        outline: 0;
    }

    .btn-link {
        color: #abb4bc;
        font-size: 14px;
        text-decoration: none;
    }

    .form-text input {
        width: 45%;
        padding: 8px 20px;
        text-align: left;
        border: 0;
        outline: 0;
        border-radius: 8px;
        background: transparent linear-gradient(to top, #fbfbfb, #ececec, #cecece) repeat scroll 0 0;
        font-size: 13px;
        color: black;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    #pera {
        color: #000 !important;
        font-size: 15px !important;
        line-height: 22px !important;
    }

    .scree-shot-guide {
        width: 40%;
        margin: auto;
    }

    .scree-shot-guide img {
        width: 100%;
    }

    .demo-area-each {
        float: left;
        width: 100%;
        border-bottom: 1px solid #666;
    }

    .demo-area-each img {
        margin-bottom: 20px;
    }

    #login_form {
        background: transparent linear-gradient(#fbfbfb, #ececec, #cecece) repeat scroll 0% 0%;
        border: 1px solid #0091d1;
        padding: 0 29px;
        border-radius: 20px;
        MAX-WIDTH: 40vw;
        width: 360px !important;
    }

    #login_form {
        width: 265px !important;
        padding-inline: 0px;
        height: 227px;
    }

    div#connexion {
        height: 238px;
        margin-top: 8px;
    }

    .myHd {
        padding: 0px 0px 0px;
        background: linear-gradient(to bottom, #44c0e5 0%, #35add1 39%, #0d85a8 100%) !important;
        border-top-left-radius: 20px;
        width: 265px;
        border-top-right-radius: 20px;
        margin-top: -2px;
        height: 34px;
    }

    .message {
        margin-top: 4px !important;
        padding: 0px !important;
        background: url(../images/message.png) no-repeat 10px 10px #ffffff00;
        margin: 0px 0px 0px;
        width: 100%;
    }

    .message .send-error {
        height: auto !important;
        margin: 3px auto;
        width: 100%;
        border: none;
        border-radius: 10px;
        padding: 1px 0;
        font-size: 13px;
        font-weight: 400;
        text-align: center;
        color: #000 !important;
        border: 1px solid #ff2600;
        background-color: #ffcccb;
        animation: buttons 0.3s linear;
        transition: 200ms ease-in-out;
        display: none;
        color: #fff;
    }

    img.msgIcon {
        top: 5px;
        width: 30px;
        margin-right: 10px;
        position: absolute;
        left: 5px;
    }

    #total-login {
        margin: 0px auto 15px;
        width: 228px;
    }

    #total-login {
        /* background: #fff; */
        border-radius: 10px;
        clear: both;
        /* display: flex; */
        position: relative;
        margin: 0px auto 10px;
    }

    label {
        margin-top: 11px !important;
        line-height: 0px !important;
        margin-bottom: 14px;
    }

    .input-group {
        padding-bottom: 5px !important;
    }

    .form-group .input-group-addon:nth-child(1) {
        border-color: #0091d1 !important;
    }

    .input-group .input-group-addon {
        border-top: solid 1px #66afe9;
        border-bottom: solid 1px #66afe9;
        border-left: solid 1px #66afe9;
    }

    .input-group-addon:first-child {
        background: linear-gradient(to bottom, #fff 0, #e0e0e0 100%);
    }

    .input-group-addon i.fa,
    .input-group-addon .glyphicon,
    .input-group-addon.normal-addon {
        color: #0091d1 !important;
    }

    .input-group .form-control {
        border-style: solid !important;
        border-color: #66afe9 !important;
        border-width: thin !important;
    }

    .error-message {
        color: red;
        font-size: 11px;
        font-weight: bold;
        padding: 0px;
        margin: 5px;
        display: none;
        white-space: nowrap;
        overflow: hidden;
    }

    #total-login .col-md-offset-1 {
        margin-left: 1% !important;
    }

    .radio,
    .checkbox {
        margin-top: 12px !important;
    }

    .checkbox {
        margin-left: 2px !important;
        width: 200px;
    }

    .radio,
    .checkbox {
        position: relative;
        display: block;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .checkbox label {
        padding-left: 9px;
    }

    .radio label,
    .checkbox label {
        min-height: 20px;
        padding-left: 20px;
        margin-bottom: 0;
        font-weight: 400;
        cursor: pointer;
    }

    label {
        margin-top: 11px !important;
        line-height: 0px !important;
    }

    input[type="checkbox"] {
        float: left;
        margin: -8px 22px 11px 3px;
    }

    a,
    a:focus,
    a:hover,
    a:link,
    a:visited {
        text-decoration: none !important;
    }

    .btn-forget {
        position: relative;
        top: 0;
        left: -4px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 28px;
        display: none;
    }

    .all-btn {
    text-align: center;
    margin-top: 9px;
}

    .all-btn a {
        border: 1px solid #fff;
    }

    a.fs-2.w-blue.img-title {
        background: linear-gradient(to bottom, #44c0e5 0%, #35add1 39%, #0d85a8 100%) !important;
        color: #ffff !important;
        padding: 4px 18px;
        border-radius: 5px;
    }
    div#main-body-holder {
    margin-top: 168px;
}
input#password {
    width: 149px;
    height: 39px;
}
button.btn.btn-default.reveal {
    position: relative;
    padding: 8.6px 13px !important;
    border: 1px solid #0091d1 !important;
    left: -2px;
}
label[for="password"] {
    margin-top: 20px !important;
}
</style>

<div id="main-body-holder" class="container-fluid">
    <section id="main-body">
        <div class="container">
            <div class="row">
                <button type="button" class="btn btn-default btn-sm" id="btnShowSidebar">
                    <i class="fas fa-arrow-circle-right"></i>
                    Show Menu
                </button>
                <div class="col-md-12 pull-md-right">
                    <div class="header-lined" style="">
                        <ol class="breadcrumb">
                            <li>
                                <a href="https://web.archive.org/web/20231129174750/ " class="">
                                    Accueil</a>
                            </li>
                            <li class="active">Demo</li>
                        </ol>
                    </div>
                </div>
                <div class="container">
                    <div class="row1">
                        <div class="card flex-md-row flex-sm-column mt-2">
                            <div class="col-lg-5 col-md-2">
                                <img style="width: 300px;  height: 218px; object-fit: cover;" class="img-fluid my-3 rounded title-img"
                                    src=" assets/images/homepage_screenshot.png" alt="laptop">
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="card-body">
                                    <a class="fs-2 w-blue img-title" href target="_blank">Espace d'administration</a>
                                    <br>
                                    <p id="pera">
                                        L’espace d’administration de la solution ECAB est conçu pour vous aider à
                                        faciliter la gestion de vos conducteurs. En effet, lorsque vous vous y
                                        connectez, vous avez la possibilité d’accéder à tous les renseignements
                                        concernant vos employés en seulement quelques clics. Ce n’est pas tout, le
                                        logiciel est tellement bien développé qu’il vous permettra également de
                                        consulter les réservations de vos clients, de vous occuper de vos factures ou
                                        encore de vous aider dans la planification de vos différentes tâches.
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-3">
                                <div id="connexion">
                            <div class="" id="login_form"
                                style="align-items: center;display: flex;flex-direction: column; margin-top: -9px;">
                                <div class="myHd text-center">
                                    <div class="h4"
                                        style="font-size: 17px; color:white;font-weight: bolder !important;">
                                        Connexion Admin
                                    </div>
                                </div>
                                <div class="message">
                                    <div class="send-error" id="validation-error-b1" style="display: none;">
                                        <div class=""
                                            style="position:relative;display: flex; padding: 7px; margin: 2px; text-align: center; align-items: center; justify-content: center;">
                                            <img class="msgIcon"
                                                src="https://ecab.agency/assets_front/images/dangerIcon.png" alt=""
                                                srcset="">
                                            <span style="padding-left: 14px;">Veuillez remplir les
                                                champs obligatoires</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div style="width: 100%;">
                                    <div id="total-login">
                                        <form action="https://ecab.site/client/loginUser" method="POST"
                                            accept-charset="utf-8" name="login_form" id="user_loginForm"
                                            novalidate="novalidate">
                                            <input type="hidden" name="_token"
                                                value="GxrZyVX0WyGMbLIMF7i3Lh3LuLsnzKdijcd3FO4B" autocomplete="off">
                                            <div style="display:none">
                                                <input type="hidden" name="csrf_test_name"
                                                    value="48e076fa801f04a5432e872fad59b365">
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 col-xs-12" style="    margin-top: 0px;">
                                                    <div class="form-group">
                                                        <label for="username" style="padding-bottom: 7px;">Email</label>
                                                        <div class="input-group"
                                                            style="margin-bottom: -9px; margin-top:-7px;">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                                            <input type="email" name="email" id="email"
                                                                class="form-control" value="admin@ecab.site"
                                                                placeholder="admin@ecab.site" style="width:100%;">
                                                        </div>
                                                        <div class="error-message" id="validate_email">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-xs-12" style="    margin-top: -5px;">
                                                    <div class="form-group">
                                                        <label for="password"style="padding-bottom: 6px !important">Mot
                                                            de
                                                            passe</label>
                                                        <div class="input-group"
                                                            style="    margin-bottom: -9px; margin-top:-5px; ">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-lock"></i>
                                                            </span>
                                                            <input type="text" name="password" id="password"
                                                                value="12345678" placeholder="12345678"
                                                                class="form-control">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default reveal" type="button"
                                                                    style="    padding: 5.5px 13px;border: 1px solid #0091d1;width: 100%;"><i
                                                                        class="glyphicon glyphicon-eye-close"></i></button>
                                                            </span>
                                                        </div>
                                                        <div class="error-message" id="validate_password"></div>
                                                        <input type="hidden" name="remember" value="1">
                                                        <input type="hidden" name="curl" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-forget">
                                                <div class="row" style="    margin-top: 3px;">
                                                    <div id="forgot-password-click-block"
                                                        class="col-md-12 col-xs-10 col-md-offset-1">

                                                        <div id="password-oublie" class="col-md-7 col-xs-6"
                                                            style="text-align: right;top: 5px; padding:0; margin-left:25px; ">
                                                            <a href="#" id="forgot-password-link">
                                                                Mot de passe oublié ?</a>
                                                        </div>

                                                        <div class="col-md-4 col-xs-6"
                                                            style="padding: 0; margin-top:-8px;">
                                                            <div class="form-group">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input id="remember_me" type="checkbox"
                                                                            checked="true"
                                                                            style="margin-right: 0; margin-top: -7px; margin-left: -15px; float: none;"
                                                                            value="1" name="remember_me">Se
                                                                        souvenir de moi</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="all-btn">
                                                <a class="btn btn-one text-white" href target="_blank">Accueil</a>
                                                <a class="btn btn-three text-white"
                                                    href="https://web.archive.org/web/20240221202743/ login"
                                                    target="_blank">Connexion</a>
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
                <div class="container">

                    <div class="row1">
                        <div class="card flex-md-row flex-sm-column mt-3">
                            <div class="col-lg-5 col-md-2">
                                <img style="width: 300px;  height: 218px; object-fit: cover;" class="img-fluid my-3 rounded title-img"
                                    src=" assets/images/homepage_screenshot.png" alt="laptop">
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="card-body">
                                    <a class="fs-2 w-blue img-title" href target="_blank">Espace client</a>
                                    <br>
                                    <p id="pera">L’espace client de la solution ECAB fait partie des plus intuitifs que
                                        vous
                                        n’avez jamais utilisés. En vous y rendant, vous aurez accès au menu vous
                                        permettant
                                        d’effectuer vos réservations et à celui qui vous présente les différents
                                        véhicules
                                        disponibles. Notez qu’à partir de ce même espace, vous pourrez sélectionner le
                                        type
                                        de service qui vous intéresse. Voulez-vous effectuer des courses une fois en
                                        passant
                                        ou de manière récurrente ? Avec ECAB, tout est possible. L’espace client vous
                                        donnera également accès à notre service de transport scolaire, aux tarifs qui
                                        sont
                                        appliqués, ainsi qu’aux différentes zones que nous couvrons. </p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div id="connexion">
                                    <div class="" id="login_form"
                                        style="align-items: center;display: flex;flex-direction: column; margin-top: -9px;">
                                        <div class="myHd text-center">
                                            <div class="h4"
                                                style="font-size: 17px; color:white;font-weight: bolder !important;">
                                                Connexion Client
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div class="send-error" id="validation-error-b1" style="display: none;">
                                                <div class=""
                                                    style="position:relative;display: flex; padding: 7px; margin: 2px; text-align: center; align-items: center; justify-content: center;">
                                                    <img class="msgIcon"
                                                        src="https://ecab.agency/assets_front/images/dangerIcon.png"
                                                        alt="" srcset="">
                                                    <span style="padding-left: 14px;">Veuillez remplir les
                                                        champs obligatoires</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div style="width: 100%;">
                                            <div id="total-login">
                                                <form action="https://ecab.site/client/loginUser" method="POST"
                                                    accept-charset="utf-8" name="login_form" id="user_loginForm"
                                                    novalidate="novalidate">
                                                    <input type="hidden" name="_token"
                                                        value="GxrZyVX0WyGMbLIMF7i3Lh3LuLsnzKdijcd3FO4B"
                                                        autocomplete="off">
                                                    <div style="display:none">
                                                        <input type="hidden" name="csrf_test_name"
                                                            value="48e076fa801f04a5432e872fad59b365">
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12 col-xs-12" style="    margin-top: 0px;">
                                                            <div class="form-group">
                                                                <label for="username"
                                                                    style="padding-bottom: 7px;">Email</label>
                                                                <div class="input-group"
                                                                    style="margin-bottom: -9px; margin-top:-7px;">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                    <input type="email" name="email" id="email"
                                                                        class="form-control" value="client@ecab.site"
                                                                        placeholder="client@ecab.site"
                                                                        style="width:100%;">
                                                                </div>
                                                                <div class="error-message" id="validate_email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-xs-12" style="    margin-top: -5px;">
                                                            <div class="form-group">
                                                                <label for="password" style="padding-bottom: 6px;">Mot
                                                                    de
                                                                    passe</label>
                                                                <div class="input-group"
                                                                    style="    margin-bottom: -9px; margin-top:-5px; ">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-lock"></i>
                                                                    </span>
                                                                    <input type="text" name="password" id="password"
                                                                        value="12345678"
                                                                        placeholder="12345678"
                                                                        class="form-control">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-default reveal"
                                                                            type="button"
                                                                            style="    padding: 5.5px 13px;border: 1px solid #0091d1;width: 100%;"><i
                                                                                class="glyphicon glyphicon-eye-close"></i></button>
                                                                    </span>
                                                                </div>
                                                                <div class="error-message" id="validate_password"></div>
                                                                <input type="hidden" name="remember" value="1">
                                                                <input type="hidden" name="curl" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-forget">
                                                        <div class="row" style="    margin-top: 3px;">
                                                            <div id="forgot-password-click-block"
                                                                class="col-md-12 col-xs-10 col-md-offset-1">
                                                                <div class="col-md-4 col-xs-6"
                                                                    style="padding: 0; margin-top:-8px;">
                                                                    <div class="form-group">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input id="remember_me" type="checkbox"
                                                                                    checked="true"
                                                                                    style="margin-right: 0; margin-top: -7px; margin-left: -15px; float: none;"
                                                                                    value="1" name="remember_me">Se
                                                                                souvenir de moi</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="password-oublie" class="col-md-7 col-xs-6"
                                                                    style="text-align: right;top: 5px; padding:0; margin-left:25px; ">
                                                                    <a href="#" id="forgot-password-link">
                                                                        Mot de passe oublié ?</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="all-btn">
                                                        <a class="btn btn-one text-white" href
                                                            target="_blank">Accueil</a>
                                                        <a class="btn btn-three text-white"
                                                            href="https://web.archive.org/web/20240221202743/ login"
                                                            target="_blank">Connexion</a>
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
                <div class="container">
                    <div class="row1">
                        <div class="card flex-md-row flex-sm-column mt-3">
                            <div class="col-lg-5 col-md-2">
                                <img style="width: 300px;  height: 218px; object-fit: cover;" class="img-fluid my-3 rounded title-img"
                                    src=" assets/images/homepage_screenshot.png" alt="laptop">
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="card-body">
                                    <a class="fs-2 w-blue img-title" href target="_blank">Espace chauffeur</a>
                                    <br>
                                    <p id="pera">Le logiciel ECAB propose aussi un espace qui est réservé aux
                                        conducteurs.
                                        Cette
                                        page permettra à tous ceux qui le désirent de s’enregistrer comme chauffeurs.
                                        Avec
                                        ECAB,
                                        l’enregistrement des chauffeurs peut se faire à distance. En effet, il suffira
                                        que
                                        ceux-ci créent un compte. Une fois que cette tâche aura été effectuée, les
                                        chauffeurs
                                        devront importer les documents nécessaires sur la plateforme afin que leur
                                        dossier
                                        soit
                                        étudié et validé. Dès que le conducteur aura reçu son approbation, celui-ci
                                        pourra
                                        commencer à remplir les différentes missions qui l’intéressent.</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div id="connexion">
                                    <div class="" id="login_form"
                                        style="align-items: center;display: flex;flex-direction: column; margin-top: -9px;">
                                        <div class="myHd text-center">
                                            <div class="h4"
                                                style="font-size: 17px; color:white;font-weight: bolder !important;">
                                                Connexion Chauffeur
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div class="send-error" id="validation-error-b1" style="display: none;">
                                                <div class=""
                                                    style="position:relative;display: flex; padding: 7px; margin: 2px; text-align: center; align-items: center; justify-content: center;">
                                                    <img class="msgIcon"
                                                        src="https://ecab.agency/assets_front/images/dangerIcon.png"
                                                        alt="" srcset="">
                                                    <span style="padding-left: 14px;">Veuillez remplir les
                                                        champs obligatoires</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div style="width: 100%;">
                                            <div id="total-login">
                                                <form action="https://ecab.site/client/loginUser" method="POST"
                                                    accept-charset="utf-8" name="login_form" id="user_loginForm"
                                                    novalidate="novalidate">
                                                    <input type="hidden" name="_token"
                                                        value="GxrZyVX0WyGMbLIMF7i3Lh3LuLsnzKdijcd3FO4B"
                                                        autocomplete="off">
                                                    <div style="display:none">
                                                        <input type="hidden" name="csrf_test_name"
                                                            value="48e076fa801f04a5432e872fad59b365">
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12 col-xs-12" style="    margin-top: 0px;">
                                                            <div class="form-group">
                                                                <label for="username"
                                                                    style="padding-bottom: 7px;">Email</label>
                                                                <div class="input-group"
                                                                    style="margin-bottom: -9px; margin-top:-7px;">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                    <input type="email" name="email" id="email"
                                                                        class="form-control" value="driver@ecab.site"
                                                                        placeholder="driver@ecab.site"
                                                                        style="width:100%;">
                                                                </div>
                                                                <div class="error-message" id="validate_email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-xs-12" style="    margin-top: -5px;">
                                                            <div class="form-group">
                                                                <label for="password" style="padding-bottom: 6px;">Mot
                                                                    de
                                                                    passe</label>
                                                                <div class="input-group"
                                                                    style="    margin-bottom: -9px; margin-top:-5px; ">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-lock"></i>
                                                                    </span>
                                                                    <input type="text" name="password" id="password"
                                                                        value="12345678"
                                                                        placeholder="12345678"
                                                                        class="form-control">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-default reveal"
                                                                            type="button"
                                                                            style="    padding: 5.5px 13px;border: 1px solid #0091d1;width: 100%;"><i
                                                                                class="glyphicon glyphicon-eye-close"></i></button>
                                                                    </span>
                                                                </div>
                                                                <div class="error-message" id="validate_password"></div>
                                                                <input type="hidden" name="remember" value="1">
                                                                <input type="hidden" name="curl" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-forget">
                                                        <div class="row" style="    margin-top: 3px;">
                                                            <div id="forgot-password-click-block"
                                                                class="col-md-12 col-xs-10 col-md-offset-1">
                                                                <div class="col-md-4 col-xs-6"
                                                                    style="padding: 0; margin-top:-8px;">
                                                                    <div class="form-group">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input id="remember_me" type="checkbox"
                                                                                    checked="true"
                                                                                    style="margin-right: 0; margin-top: -7px; margin-left: -15px; float: none;"
                                                                                    value="1" name="remember_me">Se
                                                                                souvenir de moi</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="password-oublie" class="col-md-7 col-xs-6"
                                                                    style="text-align: right;top: 5px; padding:0; margin-left:25px; ">
                                                                    <a href="#" id="forgot-password-link">
                                                                        Mot de passe oublié ?</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="all-btn">
                                                        <a class="btn btn-one text-white" href
                                                            target="_blank">Accueil</a>
                                                        <a class="btn btn-three text-white"
                                                            href="https://web.archive.org/web/20240221202743/ login"
                                                            target="_blank">Connexion</a>
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

                <div class="container">
                    <div class="row1">
                        <div class="card flex-md-row flex-sm-column mt-3">
                            <div class="col-lg-5 col-md-2">
                                <img style="width: 300px;  height: 218px; object-fit: cover;" class="img-fluid my-3 rounded title-img"
                                    src="assets/images/homepage_screenshot.png " alt="laptop">
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="card-body">
                                    <a class="fs-2 w-blue img-title" href target="_blank">Zone des demandeurs
                                        d'emploi</a>
                                    <br>
                                    <p id="pera">Si le logiciel permet aux particuliers de trouver un moyen de transport
                                        fiable et
                                        surtout adapté à leurs besoins, il est important de savoir qu’il possède aussi
                                        une zone réservée
                                        aux demandeurs d’emploi. En accédant à cette rubrique, les chauffeurs qui sont à
                                        la recherche
                                        d’un emploi pourront parcourir les différentes offres disponibles. Les
                                        conducteurs qui s’y
                                        rendront auront une idée très claire de la mission pour laquelle ils sont
                                        sollicités grâce à la
                                        description de chaque offre. Ils sauront également de quel type de contrat il
                                        s’agit, de
                                        l’expérience requise pour le poste, du salaire brut, du lieu de travail, etc.
                                        Notez que la zone
                                        demandeur d’emploi dispose aussi d’un outil très avancé qui permet d’affiner la
                                        recherche. </p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div id="connexion">
                                    <div class="" id="login_form"
                                        style="align-items: center;display: flex;flex-direction: column; margin-top: -9px;">
                                        <div class="myHd text-center">
                                            <div class="h4"
                                                style="font-size: 17px; color:white;font-weight: bolder !important;">
                                                Connexion Emploi
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div class="send-error" id="validation-error-b1" style="display: none;">
                                                <div class=""
                                                    style="position:relative;display: flex; padding: 7px; margin: 2px; text-align: center; align-items: center; justify-content: center;">
                                                    <img class="msgIcon"
                                                        src="https://ecab.agency/assets_front/images/dangerIcon.png"
                                                        alt="" srcset="">
                                                    <span style="padding-left: 14px;">Veuillez remplir les
                                                        champs obligatoires</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div style="width: 100%;">
                                            <div id="total-login">
                                                <form action="https://ecab.site/client/loginUser" method="POST"
                                                    accept-charset="utf-8" name="login_form" id="user_loginForm"
                                                    novalidate="novalidate">
                                                    <input type="hidden" name="_token"
                                                        value="GxrZyVX0WyGMbLIMF7i3Lh3LuLsnzKdijcd3FO4B"
                                                        autocomplete="off">
                                                    <div style="display:none">
                                                        <input type="hidden" name="csrf_test_name"
                                                            value="48e076fa801f04a5432e872fad59b365">
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12 col-xs-12" style="    margin-top: 0px;">
                                                            <div class="form-group">
                                                                <label for="username"
                                                                    style="padding-bottom: 7px;">Email</label>
                                                                <div class="input-group"
                                                                    style="margin-bottom: -9px; margin-top:-7px;">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                    <input type="email" name="email" id="email"
                                                                        class="form-control" value="emploi@ecab.site"
                                                                        placeholder="emploi@ecab.site"
                                                                        style="width:100%;">
                                                                </div>
                                                                <div class="error-message" id="validate_email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-xs-12" style="    margin-top: -5px;">
                                                            <div class="form-group">
                                                                <label for="password" style="padding-bottom: 6px;">Mot
                                                                    de
                                                                    passe</label>
                                                                <div class="input-group"
                                                                    style="    margin-bottom: -9px; margin-top:-5px; ">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-lock"></i>
                                                                    </span>
                                                                    <input type="text" name="password" id="password"
                                                                        value="12345678"
                                                                        placeholder="12345678"
                                                                        class="form-control">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-default reveal"
                                                                            type="button"
                                                                            style="    padding: 5.5px 13px;border: 1px solid #0091d1;width: 100%;"><i
                                                                                class="glyphicon glyphicon-eye-close"></i></button>
                                                                    </span>
                                                                </div>
                                                                <div class="error-message" id="validate_12345678"></div>
                                                                <input type="hidden" name="remember" value="1">
                                                                <input type="hidden" name="curl" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-forget">
                                                        <div class="row" style="    margin-top: 3px;">
                                                            <div id="forgot-password-click-block"
                                                                class="col-md-12 col-xs-10 col-md-offset-1">
                                                                <div class="col-md-4 col-xs-6"
                                                                    style="padding: 0; margin-top:-8px;">
                                                                    <div class="form-group">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input id="remember_me" type="checkbox"
                                                                                    checked="true"
                                                                                    style="margin-right: 0; margin-top: -7px; margin-left: -15px; float: none;"
                                                                                    value="1" name="remember_me">Se
                                                                                souvenir de moi</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="password-oublie" class="col-md-7 col-xs-6"
                                                                    style="text-align: right;top: 5px; padding:0; margin-left:25px; ">
                                                                    <a href="#" id="forgot-password-link">
                                                                        Mot de passe oublié ?</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="all-btn">
                                                        <a class="btn btn-one text-white" href
                                                            target="_blank">Accueil</a>
                                                        <a class="btn btn-three text-white"
                                                            href="https://web.archive.org/web/20240221202743/ login"
                                                            target="_blank">Connexion</a>
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
                <div class="container">
                    <div class="row1">
                        <div class="card flex-md-row flex-sm-column mt-3">
                            <div class="col-lg-5 col-md-2">
                                <img style="width: 300px;  height: 218px; object-fit: cover;" class="img-fluid my-3 rounded title-img"
                                    src=" assets/images/homepage_screenshot.png" alt="laptop">
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="card-body">
                                    <a class="fs-2 w-blue img-title" href target="_blank">Espace partenaires</a>
                                    <br>
                                    <p id="pera">Toujours dans l’optique de vous proposer des services variés et de très
                                        bonne qualité,
                                        le logiciel ECAB dispose d’un espace qui est réservé aux partenaires. Ceux-ci
                                        sont les
                                        chauffeurs privés ou les sociétés de transport qui travaillent pour ECAB. Comme
                                        vous vous en
                                        doutez, pour offrir un service sur mesure à notre clientèle, avant d’être choisi
                                        comme
                                        partenaire, le chauffeur privé ou la société de transport doit s’inscrire dans
                                        notre base de
                                        données et fournir les documents nécessaires afin de voir son dossier accepté.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div id="connexion">
                                    <div class="" id="login_form"
                                        style="align-items: center;display: flex;flex-direction: column; margin-top: -9px;">
                                        <div class="myHd text-center">
                                            <div class="h4"
                                                style="font-size: 17px; color:white;font-weight: bolder !important;">
                                                Connexion Partenaires
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div class="send-error" id="validation-error-b1" style="display: none;">
                                                <div class=""
                                                    style="position:relative;display: flex; padding: 7px; margin: 2px; text-align: center; align-items: center; justify-content: center;">
                                                    <img class="msgIcon"
                                                        src="https://ecab.agency/assets_front/images/dangerIcon.png"
                                                        alt="" srcset="">
                                                    <span style="padding-left: 14px;">Veuillez remplir les
                                                        champs obligatoires</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div style="width: 100%;">
                                            <div id="total-login">
                                                <form action="https://ecab.site/client/loginUser" method="POST"
                                                    accept-charset="utf-8" name="login_form" id="user_loginForm"
                                                    novalidate="novalidate">
                                                    <input type="hidden" name="_token"
                                                        value="GxrZyVX0WyGMbLIMF7i3Lh3LuLsnzKdijcd3FO4B"
                                                        autocomplete="off">
                                                    <div style="display:none">
                                                        <input type="hidden" name="csrf_test_name"
                                                            value="48e076fa801f04a5432e872fad59b365">
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12 col-xs-12" style="    margin-top: 0px;">
                                                            <div class="form-group">
                                                                <label for="username"
                                                                    style="padding-bottom: 7px;">Email</label>
                                                                <div class="input-group"
                                                                    style="margin-bottom: -9px; margin-top:-7px;">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                    <input type="email" name="email" id="email"
                                                                        class="form-control" value="partenaires@ecab.site"
                                                                        placeholder="partenaires@ecab.site"
                                                                        style="width:100%;">
                                                                </div>
                                                                <div class="error-message" id="validate_email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-xs-12" style="    margin-top: -5px;">
                                                            <div class="form-group">
                                                                <label for="password" style="padding-bottom: 6px;">Mot
                                                                    de
                                                                    passe</label>
                                                                <div class="input-group"
                                                                    style="    margin-bottom: -9px; margin-top:-5px; ">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-lock"></i>
                                                                    </span>
                                                                    <input type="text" name="password" id="password"
                                                                        value="12345678"
                                                                        placeholder="12345678"
                                                                        class="form-control">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-default reveal"
                                                                            type="button"
                                                                            style="    padding: 5.5px 13px;border: 1px solid #0091d1;width: 100%;"><i
                                                                                class="glyphicon glyphicon-eye-close"></i></button>
                                                                    </span>
                                                                </div>
                                                                <div class="error-message" id="validate_password"></div>
                                                                <input type="hidden" name="remember" value="1">
                                                                <input type="hidden" name="curl" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-forget">
                                                        <div class="row" style="    margin-top: 3px;">
                                                            <div id="forgot-password-click-block"
                                                                class="col-md-12 col-xs-10 col-md-offset-1">
                                                                <div class="col-md-4 col-xs-6"
                                                                    style="padding: 0; margin-top:-8px;">
                                                                    <div class="form-group">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input id="remember_me" type="checkbox"
                                                                                    checked="true"
                                                                                    style="margin-right: 0; margin-top: -7px; margin-left: -15px; float: none;"
                                                                                    value="1" name="remember_me">Se
                                                                                souvenir de moi</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="password-oublie" class="col-md-7 col-xs-6"
                                                                    style="text-align: right;top: 5px; padding:0; margin-left:25px; ">
                                                                    <a href="#" id="forgot-password-link">
                                                                        Mot de passe oublié ?</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="all-btn">
                                                        <a class="btn btn-one text-white" href
                                                            target="_blank">Accueil</a>
                                                        <a class="btn btn-three text-white"
                                                            href="https://web.archive.org/web/20240221202743/ login"
                                                            target="_blank">Connexion</a>
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
                <div class="container">
                    <div class="row1">
                        <div class="card flex-md-row flex-sm-column mt-3" style="margin-bottom: 15px;">
                            <div class="col-lg-5 col-md-2">
                                <img style="width: 300px;  height: 218px; object-fit: cover;" class="img-fluid my-3 rounded title-img"
                                    src=" assets/images/homepage_screenshot.png" alt="laptop">
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="card-body">
                                    <a class="fs-2 w-blue img-title" href target="_blank">Domaine des affiliés</a>
                                    <br>
                                    <p id="pera">Une autre rubrique qui est présente sur notre logiciel est la rubrique
                                        des affiliés. En
                                        effet, ces derniers sont des personnes ou des sociétés qui bénéficient d’une
                                        excellente
                                        visibilité dans des domaines divers et variés et qui souhaitent faire la
                                        promotion du logiciel
                                        afin de gagner des commissions. En parcourant cet espace, vous aurez la
                                        possibilité de découvrir
                                        les nombreux affiliés à notre service. Vous pourrez également les rejoindre en
                                        vous inscrivant
                                        et en soumettant votre dossier à la validation. </p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div id="connexion">
                                    <div class="" id="login_form"
                                        style="align-items: center;display: flex;flex-direction: column; margin-top: -9px;">
                                        <div class="myHd text-center">
                                            <div class="h4"
                                                style="font-size: 17px; color:white;font-weight: bolder !important;">
                                                Connexion Affiliés
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div class="send-error" id="validation-error-b1" style="display: none;">
                                                <div class=""
                                                    style="position:relative;display: flex; padding: 7px; margin: 2px; text-align: center; align-items: center; justify-content: center;">
                                                    <img class="msgIcon"
                                                        src="https://ecab.agency/assets_front/images/dangerIcon.png"
                                                        alt="" srcset="">
                                                    <span style="padding-left: 14px;">Veuillez remplir les
                                                        champs obligatoires</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div style="width: 100%;">
                                            <div id="total-login">
                                                <form action="https://ecab.site/client/loginUser" method="POST"
                                                    accept-charset="utf-8" name="login_form" id="user_loginForm"
                                                    novalidate="novalidate">
                                                    <input type="hidden" name="_token"
                                                        value="GxrZyVX0WyGMbLIMF7i3Lh3LuLsnzKdijcd3FO4B"
                                                        autocomplete="off">
                                                    <div style="display:none">
                                                        <input type="hidden" name="csrf_test_name"
                                                            value="48e076fa801f04a5432e872fad59b365">
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12 col-xs-12" style="    margin-top: 0px;">
                                                            <div class="form-group">
                                                                <label for="username"
                                                                    style="padding-bottom: 7px;">Email</label>
                                                                <div class="input-group"
                                                                    style="margin-bottom: -9px; margin-top:-7px;">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                    <input type="email" name="email" id="email"
                                                                        class="form-control" value="affilies@ecab.site"
                                                                        placeholder="affilies@ecab.site"
                                                                        style="width:100%;">
                                                                </div>
                                                                <div class="error-message" id="validate_email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-xs-12" style="    margin-top: -5px;">
                                                            <div class="form-group">
                                                                <label for="password" style="padding-bottom: 6px;">Mot
                                                                    de
                                                                    passe</label>
                                                                <div class="input-group"
                                                                    style="    margin-bottom: -9px; margin-top:-5px; ">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-lock"></i>
                                                                    </span>
                                                                    <input type="text" name="password" id="password"
                                                                        value="12345678"
                                                                        placeholder="12345678"
                                                                        class="form-control">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-default reveal"
                                                                            type="button"
                                                                            style="    padding: 5.5px 13px;border: 1px solid #0091d1;width: 100%;"><i
                                                                                class="glyphicon glyphicon-eye-close"></i></button>
                                                                    </span>
                                                                </div>
                                                                <div class="error-message" id="validate_password"></div>
                                                                <input type="hidden" name="remember" value="1">
                                                                <input type="hidden" name="curl" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-forget">
                                                        <div class="row" style="    margin-top: 3px;">
                                                            <div id="forgot-password-click-block"
                                                                class="col-md-12 col-xs-10 col-md-offset-1">
                                                                <div class="col-md-4 col-xs-6"
                                                                    style="padding: 0; margin-top:-8px;">
                                                                    <div class="form-group">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input id="remember_me" type="checkbox"
                                                                                    checked="true"
                                                                                    style="margin-right: 0; margin-top: -7px; margin-left: -15px; float: none;"
                                                                                    value="1" name="remember_me">Se
                                                                                souvenir de moi</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="password-oublie" class="col-md-7 col-xs-6"
                                                                    style="text-align: right;top: 5px; padding:0; margin-left:25px; ">
                                                                    <a href="#" id="forgot-password-link">
                                                                        Mot de passe oublié ?</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="all-btn">
                                                        <a class="btn btn-one text-white" href
                                                            target="_blank">Accueil</a>
                                                        <a class="btn btn-three text-white"
                                                            href="https://web.archive.org/web/20240221202743/ login"
                                                            target="_blank">Connexion</a>
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
</div>
<div class="clearfix"></div>


<script>
    jQuery(document).ready(function () {
        jQuery('#btnShowSidebar').click(function () {
            if (jQuery(".product-selection-sidebar").is(":visible")) {
                jQuery('.row-product-selection').css('left', '0');
                jQuery('.product-selection-sidebar').fadeOut();
                jQuery('#btnShowSidebar').html('<i class="fas fa-arrow-circle-right"></i> Show Menu');
            } else {
                jQuery('.product-selection-sidebar').fadeIn();
                jQuery('.row-product-selection').css('left', '300px');
                jQuery('#btnShowSidebar').html('<i class="fas fa-arrow-circle-left"></i> Hide Menu');
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('.autoplay').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            arrows: false,
            autoplaySpeed: 1000,
        });
    });
</script>


@include('front.common.footer')