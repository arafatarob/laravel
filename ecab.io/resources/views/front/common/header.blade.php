<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil - ECAB Cab Web &amp; Mobile Solutions</title>
    <link rel="stylesheet" href="{{ asset('assets/css/banner-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/iconochive.css') }}">
    <!-- End Wayback Rewrite JS Include -->

    <link rel="icon" href="assets/images/favicon.ico" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Raleway:400,700" rel="stylesheet">
    <link href="./assets/frontend/css/all.min.css?=v2154" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/fontawesome.min.css"
        integrity="sha512-M5Kq4YVQrjg5c2wsZSn27Dkfm/2ALfxmun0vUE3mPiJyK53hQBHYCVAtvMYEC7ZXmYLg8DVG4tF8gD27WmDbsg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./assets/frontend/css/custom.css" rel="stylesheet">
    <link href="./assets/frontend/fonts/hostify.css" rel="stylesheet">



    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->

    <link rel="stylesheet" type="text/css" href="./assets/frontend/css/slick-theme.css" />
    <link href="  https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="./assets/frontend/css/bootstrap-slider.min.css" rel="stylesheet">
    <link href="./assets/frontend/css/slick.css" rel="stylesheet">
    <link href="./assets/frontend/css/styles-modified.css?v=2154" rel="stylesheet">
    <link href="./assets/frontend/css/custom.css" rel="stylesheet">
    <link href="./assets/frontend/fonts/hostify.css" rel="stylesheet">
    <link href="./assets/frontend/css/style_cart.css" rel="stylesheet">
    <link href="./assets/frontend/css/whmcs.css?v=2514" rel="stylesheet">
    <link href="./assets/frontend/css/stylenew.css?v=2514" rel="stylesheet">
    <link href="./assets/frontend/css/support-form.css?v=2514" rel="stylesheet">
    <link href="./assets/frontend/css/booking-style.css?v=2514" rel="stylesheet">
    <link href="./assets/frontend/css/style.css?v=2514" rel="stylesheet">

    <script type="text/javascript">
        var csrfToken = 'f72628f5fe617d0cdc4802b9fdbc1679321f9c92',
            markdownGuide = 'Guide de mise en forme',
            locale = 'en',
            saved = 'enregistré',
            saving = 'enregistrement automatique',
            whmcsBaseUrl = "",
            requiredText = 'Requis',
            recaptchaSiteKey = "";
    </script>
    <script src="./assets/frontend/js/scripts.min.js?v=254813"></script>
    <style>
        @keyframes opacityOn {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        .form-control-m {
            background: none !important;
        }

        .mar1 {
            width: 810px;
            position: absolute;
            left: 83px;
        }

        .choose-language ::after {
            content: url("./assets/images/flag-french.png");
            /* with class ModalCarrot ??*/
            position: relative;
            /*or absolute*/
            top: -20px;
            right: 98px;
        }


        .Modal::after {

            z-index: 100000;
            /*a number that's more than the modal box*/
            left: -50px;
            top: 10px;
        }

        .choose-language {
            position: absolute;
            margin-left: 35px;

        }

        @media (max-width: 992px) {
            #features-links-holder {
                margin-top: 70px !important;
            }
        }

        #eucookie {
            background: #cf202b;
            width: 100%;
            padding: 6px 0;
            z-index: 9999;
            position: fixed;
            left: 0;
            bottom: 0;
            padding: 5px;
        }

        #eucookie div {
            font-size: 13px;
            font-weight: 700;
            text-align: center;
            color: #fff;
            width: 100%;
            margin: 0 auto;
            line-height: 19px;

        }

        #eucookie a {
            font-size: 13px;
            font-weight: 700;
            color: #fff;
            text-decoration: underline;
        }

        #seteucookie {
            background: linear-gradient(#9fe925, #558407) !important;
            cursor: pointer;
            color: #fff;
            margin: 0px 0 0 0px;

            -radius: 14px;
            text-align: center;
            font-weight: 900;
            text-decoration: none !important;
            padding: 2px 23px;
            border: 1px solid #fff;
        }
    </style>
</head>

<body data-phone-cc-input="1" style="overflow-x: hidden">

    <style>
        #contact_form {
            top: 184px !important;
        }

        #contact_popup_btn {
            padding: 1px 3px 1px 8px;
            font-size: 13px;
        }

        #contact_popup_btn {
            display: flex;
            border: 2px solid white !important;
            color: #fff;
            justify-content: center;
            /* border-radius: 20%; */
            border-bottom: 0 !important;
            letter-spacing: 1px;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
            align-items: center;
            font-weight: 900;
            text-transform: uppercase;
            transform: rotate(-90deg);
            background: linear-gradient(#ff6666, #cc0000);
            padding: 1px 3px 1px 8px;
            font-size: 14px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
                rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
            /* transform: rotate(-90deg); */
            /* border-radius: 0; */
        }

        button#contact_popup_btn i {
            font-size: 19px;
        }

        .hero-section-container {
            margin-top: 168px !important;
            z-index: -1;
            position: relative;
        }
    </style>


    <!-- live support popup -->


    <style>

    </style>
    <div class="row">
        <div class="contact-opener right-opener" style="top:0px">
            <img class="con-img" src="./assets/images/gratuit.gif" alt
                style="    position: fixed;right: 461px;z-index: 999;top: 1496px;cursor: pointer;width: 75px;border: 2px solid white;border-radius: 11px;transform: rotate(90deg);">
        </div>
    </div>



    @include('front.common.booking_popup')

    <div class="assistance-form visible" id="support_form" style="bottom: 0px; padding: 0 !important;">
        <div class="ecab-step-block" style="margin-top: 3px;">
            <div class="ecab-step-block-item active">
                <div class="ecab-step-block-number">1</div>
                <div>coordonnée</div>
            </div>
            <div class="ecab-step-block-item">
                <div class="ecab-step-block-number">2</div>
                <div>conversation</div>
            </div>
            <div class="ecab-step-block-item">
                <div class="ecab-step-block-number">3</div>
                <div>evaluation</div>
            </div>
        </div>
        <div style="padding: 0 5px 0px 5px;">
            <div class="contact-header" style="border-radius: 25px 25px 0 0;">
                <i class="fa fa-comments"></i> Live Support
            </div>
            <div class="chat_loader text-center">
                <img src="assets/loader_image.gif">
            </div>
            <div class="basic-chat-detail">
                <a href="javascript:;" class="close-btn-4"><i class="fa fa-times"></i></a>


                <div id="supp_login2" style="display:none;">
                    <div class="form-group">
                        <div class="input-group signupResBtnPopup">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input id="username2" type="text" class="form-control" value="" required="" name="username"
                                placeholder="Username*">
                        </div>
                        <small class="pop-error" id="err-username2">Username is required*</small>
                    </div>
                    <div class="form-group">
                        <div class="input-group signupResBtnPopup">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input id="password2" type="password" class="form-control" value="" name="password"
                                placeholder="Password*">
                            <span class="input-group-btn">
                                <button class="btn btn-default reveal" type="button"><i
                                        class="glyphicon glyphicon-eye-close"></i></button>
                            </span>
                        </div>
                        <small class="pop-error" id="err-password2">Password is required*</small>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="col-md-6 col-xs-6">
                                <div class="form-group" style="margin:0;">
                                    <div class="checkbox resSignupText1" style="margin:0;">
                                        <label> <input type="checkbox"
                                                style="margin-right: 0; margin-top: 4px; margin-left: -20px; float: none;"
                                                value="1" name="remember_me4"> Remember me </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6" style="text-align: right;font-size: 11px;">
                                <a href="#" data-toggle="modal" data-target="#myModal" class="resSignupText"> Mot de
                                    passe oublié?</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-6 col-xs-6" style="text-align: center">
                            <a href="#" class="button green_button pull-right" onclick="supp_login2()">Login</a>
                        </div>
                    </div>
                </div>
                <div id="supp_other2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group signupResBtnPopup2" style="width:21%;float:left;margin-right:5px;">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <select class="form-control s_civility2" name="civility" required="">
                                    <option value="Mr">Mr</option>
                                    <option value="Mme">Mme</option>
                                    <option value="Mlle">Mlle</option>
                                </select>
                            </div>
                            <div class="input-group signupResBtnPopup2" style="width:39%;float:left;margin-right:5px;">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input id="name" type="text" maxlength="100" class="form-control s_firstname2"
                                    required="" name="name" placeholder="Nom*" value="">
                            </div>
                            <div class="input-group signupResBtnPopup" style="width:39%;float:left">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" maxlength="100" class="form-control s_lastname2" required=""
                                    name="prename" placeholder="Prenom*" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="">
                        <div class="col-md-12">
                            <div class="input-group signupResBtnPopup">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <input id="enterprise" maxlength="50" type="text" class="form-control s_company2"
                                    name="company" placeholder="Entreprise ou Organisme (Optionnel)" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="display: flex; gap: 5px;">
                        <div class="input-group signupResBtnPopup">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input id="email2" maxlength="100" type="email" class="form-control s_email2" value=""
                                required="" name="email" placeholder="Email*">
                        </div>
                        <div class="input-group signupResBtnPopup">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input id="telephone" maxlength="50" type="text" class="form-control s_phone2" value=""
                                required="" name="telephone" placeholder="Votre Telephone*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-6 col-xs-6" style="text-align: center">
                            <button class="btn-successs btn-con" type="button"
                                onclick="validateinputdata()">CONTINUER</button>
                        </div>
                    </div>
                </div>
                <!--    </div>
               </div> -->
            </div>
            <div class="start-chat-div" style="display: none;">
                <div class="historychating" id="historychating">
                </div>
                <div id="attachfile_div" class="text-center" style="width:45px;float: right;display: none;">
                    <div id="otherfieattacmentdiv"></div>
                    <img src="" id="changeattachfileimage"
                        style="width: 100%;border: 1px solid #ddd; border-radius: 4px; padding: 3px;">

                </div>

                <form action="#" method="post" accept-charset="utf-8" id="the-chat-form" class="form"
                    enctype="multipart/form-data">
                    <div style="display:none">
                        <input type="hidden" name="csrf_test_name" value="f53dd9b4c6aa08af53103a8309411bb7">
                    </div>
                    <div class="form-group input_area_emoji" style="clear: both;">
                        <input type="text" name="messagetext" id="input-left-position" class="form-control"
                            placeholder="Type message" style="height: inherit !important;" required="">
                        <div
                            style="position: absolute; border: 1px solid gray; background-color: rgb(255, 255, 255); display: none;">
                            <span style="cursor: pointer; font-size: 20px;">🙂</span><span
                                style="cursor: pointer; font-size: 20px;">🙁</span><span
                                style="cursor: pointer; font-size: 20px;">😀</span><span
                                style="cursor: pointer; font-size: 20px;">😁</span><span
                                style="cursor: pointer; font-size: 20px;">😂</span><span
                                style="cursor: pointer; font-size: 20px;">😃</span><span
                                style="cursor: pointer; font-size: 20px;">😄</span><span
                                style="cursor: pointer; font-size: 20px;">😅</span><span
                                style="cursor: pointer; font-size: 20px;">😆</span><span
                                style="cursor: pointer; font-size: 20px;">😇</span><br><span
                                style="cursor: pointer; font-size: 20px;">😈</span><span
                                style="cursor: pointer; font-size: 20px;">😉</span><span
                                style="cursor: pointer; font-size: 20px;">😊</span><span
                                style="cursor: pointer; font-size: 20px;">😋</span><span
                                style="cursor: pointer; font-size: 20px;">😌</span><span
                                style="cursor: pointer; font-size: 20px;">😍</span><span
                                style="cursor: pointer; font-size: 20px;">😎</span><span
                                style="cursor: pointer; font-size: 20px;">😏</span><span
                                style="cursor: pointer; font-size: 20px;">😐</span><span
                                style="cursor: pointer; font-size: 20px;">😑</span><br><span
                                style="cursor: pointer; font-size: 20px;">😒</span><span
                                style="cursor: pointer; font-size: 20px;">😓</span><span
                                style="cursor: pointer; font-size: 20px;">😔</span><span
                                style="cursor: pointer; font-size: 20px;">😕</span><span
                                style="cursor: pointer; font-size: 20px;">😖</span><span
                                style="cursor: pointer; font-size: 20px;">😗</span><span
                                style="cursor: pointer; font-size: 20px;">😘</span><span
                                style="cursor: pointer; font-size: 20px;">😙</span><span
                                style="cursor: pointer; font-size: 20px;">😚</span><span
                                style="cursor: pointer; font-size: 20px;">😛</span><br><span
                                style="cursor: pointer; font-size: 20px;">😜</span><span
                                style="cursor: pointer; font-size: 20px;">😝</span><span
                                style="cursor: pointer; font-size: 20px;">😞</span><span
                                style="cursor: pointer; font-size: 20px;">😟</span><span
                                style="cursor: pointer; font-size: 20px;">😠</span><span
                                style="cursor: pointer; font-size: 20px;">😡</span><span
                                style="cursor: pointer; font-size: 20px;">😢</span><span
                                style="cursor: pointer; font-size: 20px;">😣</span><span
                                style="cursor: pointer; font-size: 20px;">😤</span><span
                                style="cursor: pointer; font-size: 20px;">😥</span><br><span
                                style="cursor: pointer; font-size: 20px;">😦</span><span
                                style="cursor: pointer; font-size: 20px;">😧</span><span
                                style="cursor: pointer; font-size: 20px;">😨</span><span
                                style="cursor: pointer; font-size: 20px;">😩</span><span
                                style="cursor: pointer; font-size: 20px;">😪</span><span
                                style="cursor: pointer; font-size: 20px;">😫</span><span
                                style="cursor: pointer; font-size: 20px;">😬</span><span
                                style="cursor: pointer; font-size: 20px;">😭</span><span
                                style="cursor: pointer; font-size: 20px;">😮</span><span
                                style="cursor: pointer; font-size: 20px;">😯</span><br><span
                                style="cursor: pointer; font-size: 20px;">😰</span><span
                                style="cursor: pointer; font-size: 20px;">😱</span><span
                                style="cursor: pointer; font-size: 20px;">😲</span><span
                                style="cursor: pointer; font-size: 20px;">😳</span><span
                                style="cursor: pointer; font-size: 20px;">😴</span><span
                                style="cursor: pointer; font-size: 20px;">😵</span><span
                                style="cursor: pointer; font-size: 20px;">😶</span><span
                                style="cursor: pointer; font-size: 20px;">😷</span><span
                                style="cursor: pointer; font-size: 20px;">😸</span><span
                                style="cursor: pointer; font-size: 20px;">😹</span><br><span
                                style="cursor: pointer; font-size: 20px;">😺</span><span
                                style="cursor: pointer; font-size: 20px;">😻</span><span
                                style="cursor: pointer; font-size: 20px;">😼</span><span
                                style="cursor: pointer; font-size: 20px;">😽</span><span
                                style="cursor: pointer; font-size: 20px;">😾</span><span
                                style="cursor: pointer; font-size: 20px;">😿</span><span
                                style="cursor: pointer; font-size: 20px;">🙀</span><span
                                style="cursor: pointer; font-size: 20px;">🙃</span><span
                                style="cursor: pointer; font-size: 20px;">💩</span><span
                                style="cursor: pointer; font-size: 20px;">🙄</span><br><span
                                style="cursor: pointer; font-size: 20px;">☠</span><span
                                style="cursor: pointer; font-size: 20px;">👌</span><span
                                style="cursor: pointer; font-size: 20px;">👍</span><span
                                style="cursor: pointer; font-size: 20px;">👎</span><span
                                style="cursor: pointer; font-size: 20px;">🙈</span><span
                                style="cursor: pointer; font-size: 20px;">🙉</span><span
                                style="cursor: pointer; font-size: 20px;">🙊</span></div>
                        <span style="cursor: pointer; font-size: 20px;">🙂</span>
                        <input type="hidden" name="userid" id="chatuserid">
                    </div>
                    <div class="row" style="width: 100%; margin: 0px !important;">
                        <div class="col-xs-6" style="padding-left: 10px;">
                            <input type="file" name="chatfile" id="chatfile"
                                style="visibility: hidden;height: 0px;width: 0px;" onchange="addattachfileto_div()">
                            <i class="fa fa-paperclip" aria-hidden="true" onclick="addchatfile()"
                                style="cursor: pointer; font-size: 20px;"></i> &nbsp;
                            <i class="fa fa-smile-o" aria-hidden="true" onclick="openemojis()"
                                style="cursor: pointer; font-size: 20px;"></i>
                        </div>
                        <div class="col-xs-6" style="text-align: right;">
                            <button class="btn-successs btn-con" type="submit">Send <img src="assets/btn_loader.gif"
                                    style="display: none;width: 16px; position: relative; top: 3px; left: 3px;"
                                    id="btn_loader"></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- live support popup -->


    <!-- <button type="button" id="contact_popup_btn" class="btn-lg-contact"
        style="display: none !important;right: -88px; transform: rotate(-90deg); position: fixed; top: 390px; border-radius: 8px 8px 0px 0px; z-index: 999; display: flex; height: 32px; padding: 10px 6px 9px !important; background: linear-gradient(rgb(68, 192, 229) 0%, rgb(53, 173, 209) 39%, rgb(13, 133, 168) 100%) !important;">
        <i class="fa fa-envelope"></i>
        <span style="font-weight: 900;margin-left: 5px;" class="">NOUS-CONTACTER</span>
    </button> -->



    <!-- <div class="floating-form-2  currentClass " id="contact_form_2"
        style="border: 2px solid rgb(47, 176, 231);border: 1px solid dodgerblue;border-radius: 5px;">
        <div class="contact-opener-2">
            <img class="demande_cta" src="./assets/images/demande.gif" alt style="display: none;position: fixed;
    left: 0;
    z-index: 999;
    top: 250px;
    cursor: pointer;
    width: 75px;
    transform: translate(0px, -50%);
    border:2px solid white;
    border-radius:11px;" />
        </div>
        <div class="contact-2-body">
            <div class="floating-form-3-header">
                <i class="fa fa-phone"></i> DEMANDE DE RAPPEL
            </div>
            <div id="client_other1" class="custom_client_other1">
                <div class="row">
                    <div class="col-xs-12" style="background-color: #EBF4FF !important;">
                        <p class="test">Merci de remplire ce formulaire pour etre rappele par un de nos conseillers :
                        </p>
                    </div>
                </div>
            </div>
            <div id="contact_results-2"></div>
            <div id="contact_body-2" class="custom_contact_body-2">
                <a href="javascript:;" class="close-btn-2 closee-btn" style="color: #ea0707 !important;">
                    <i class="fa fa-times-circle custom-cross-icon"></i>
                </a>
                <form name="submitticket" method="post" action="#" enctype="multipart/form-data" class="form-stacked">
                    <input type="hidden" name="token" value="dd72eedec7e8e1255d95ba1a514679ca7a0b9be9" />
                    <div id="supp_other1">
                        <div class="row">
                            <div class="col-xs-12 form-group">
                                <div class="input-group signupResBtnPopup2"
                                    style="width:27%;float:left;margin-right:5px;">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user" style="color:dodgerblue" style="color:dodgerblue"></i>
                                    </span>
                                    <select class="form-control s_civility1" name="civility" required>
                                        <option value="Mr">Mr</option>
                                        <option value="Mme">Mme</option>
                                        <option value="Mlle">Mlle</option>
                                    </select>
                                </div>
                                <div class="input-group signupResBtnPopup2"
                                    style="width:33%;float:left;margin-right:5px;">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user" style="color:dodgerblue"></i>
                                    </span>
                                    <input type="text" maxlength="100" class="form-control s_firstname1" required
                                        name="lastname" placeholder="Nom*" value>
                                </div>
                                <div class="input-group signupResBtnPopup3" style="width:36.5%;float:left">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user" style="color:dodgerblue"></i>
                                    </span>
                                    <input type="text" maxlength="100" class="form-control s_lastname1" required
                                        name="firstname" placeholder="Prenom*" value>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class=" form-group">
                                    <div class="input-group signupResBtnPopup">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input id="enterprise" maxlength="50" type="text"
                                            class="form-control s_company1" name="companyname"
                                            placeholder="Entreprise ou Organisme (Optionnel)" value>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <div class="input-group signupResBtnPopup">
                                        <span class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <input id="num2" maxlength="50" type="text" class="form-control s_phone1"
                                            required name placeholder="Votre Telephone*" value>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class=" form-group">
                                    <div class="input-group signupResBtnPopup">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input id="phone-email" maxlength="100" type="email" class="form-control"
                                            required name="email" placeholder="Votre email*" value>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 form-group">
                                <div class="input-group signupResBtnPopup">
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                    <select class="form-control" style="height: 35px;" name="days" required>
                                        <option value>Jours de Rappel*</option>
                                        <option value="Tous les jours">Tous les jours</option>
                                        <option value="Lundi">Lundi</option>
                                        <option value="Mardi">Mardi</option>
                                        <option value="Mercredi">Mercredi</option>
                                        <option value="Jeudi">Jeudi</option>
                                        <option value="Vendredi">Vendredi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-6 form-group">
                                <div class="input-group signupResBtnPopup2">
                                    <span class="input-group-addon normal-addon">DE</span>
                                    <select class="form-control" name="from_time" required>
                                        <option value="00">00</option>
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
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                    </select>
                                    <span class="input-group-addon normal-addon"
                                        style="border: 0; background: #f2f2f2; padding: 6px 0">H</span>
                                </div>
                            </div>
                            <div class="col-xs-6 form-group">
                                <div class="input-group signupResBtnPopup2">
                                    <span class="input-group-addon normal-addon">A</span>
                                    <select class="form-control" name="to_time" required>
                                        <option value="00">00</option>
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
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                    </select>
                                    <span class="input-group-addon normal-addon"
                                        style="border: 0; background: #f2f2f2; padding: 6px 0">H</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class=" form-group">
                                    <div class="input-group signupResBtnPopup">
                                        <span class="input-group-addon">
                                            <i class="fa fa-map-marker"></i>
                                        </span>
                                        <select class="form-control" name="urgency" required="required">
                                            <option value="Priorite" selected>Priorite</option>
                                            <option value="High">Haute</option>
                                            <option value="Medium">Moyenne</option>
                                            <option value="Low">Faible</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class=" form-group">
                                    <div class="input-group signupResBtnPopup">
                                        <span class="input-group-addon">
                                            <i class="fa fa-building"></i>
                                        </span>
                                        <select style="width: 100%;" class="form-control" name="deptid" id="department">
                                            <option value="2" selected="selected">Demande de Devis </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class=" form-group signupResBtnPopup1">
                                    <textarea name="message" id rows="3" class="col-md-12 messs"
                                        placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label " for="attachments">Pièce(s) jointe(s):</label>
                                <div class="controls col-md-12">
                                    <input class="form-control" type="file" name="attachments[]" />
                                    <div id="fileuploads"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12" style="text-align: center;">
                                <p align="center" style="display:none">
                                    <img src="" align="middle" style="height: 32px;" />
                                    <input type="text" name="code" size="6" maxlength="5" class="input-small"
                                        style="height: 29px;" />
                                </p>
                                <input class type="submit" name="save" value="Envoyer"
                                    style="font-family: Calibri;width: 105px;color:#fff;font-weight:bold;background: #13d014 !important;border-radius: 10px !important;" />
                            </div>
                        </div>
                    </div>
                    <p class="fote-text">Nous respectons votre vie privée <a href="#" target="_blank"
                            class="fotter-links"> Politique de Vie Privée </a>et nous vous enverrons jamais de spam.
                    </p>
            </div>
            </form>
        </div>
    </div>
    </div>-->



    <!-- <div class="container container-fluid" id="header" >
<div class="row custom-top-menu-row">
<div style="padding:0" class="col-md-7">
<div id="main-menu">
<nav id="nav" class="container-fluid navbar navbar-default navbar-main" role="navigation">

<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>

<div style="padding: 0" class="collapse navbar-collapse" id="primary-nav">
<ul class="nav navbar-nav">
<li menuitemname="1235" class id="Primary_Navbar-1235">
<a href="   affiliation">
<i class="fas fa-users"></i>&nbsp; Affiliation
</a>
</li>
<li menuitemname="133" class id="Primary_Navbar-133">
<a href="   announcements">
<i class="fas fa-bullhorn"></i>&nbsp; Announcements
</a>
</li>
<li menuitemname="133" class id="Primary_Navbar-133">
<a href=" jobs">
<i class="fas fa-bullhorn"></i>&nbsp; Jobs
</a>
</li>

<li menuitemname="185" class id="Primary_Navbar-185">
<a href=" maintenance">
<i class="fas fa-rocket fa-fw"></i> Maintenance
</a>
</li>


</ul>
</div>
</nav>
</div>
</div>
<div class="col-md-5 custom-padding-right-0">
<ul class="top-nav">

<li class="support-button-holder trans support-dropdown demo-button" id="Primary_Navbar-Contact_Us demo button">
<form method="post" action="cart.php">
<input type="hidden" name="token" value="f72628f5fe617d0cdc4802b9fdbc1679321f9c92">
<select name="currency" onchange="submit()" class="form-control form-control-m" style="color : #ffff !important; border : none !important;">
<option style="color:black" value="2">EURO</option>
<option style="color:black" value="1">USD</option>
</select>
</form>
</li>
<li>
<a href="#" class="choose-language" data-toggle="popover" id="languageChooser" data-original-title title>
Français
<b class="caret"></b>
</a>
<div id="languageChooserContent" class="hidden">
<ul>
<li>
<a href="/web/20231129180021/ ?language=arabic">العربية</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=azerbaijani">Azerbaijani</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=catalan">Català</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=chinese">中文</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=croatian">Hrvatski</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=czech">Čeština</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=danish">Dansk</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=dutch">Nederlands</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=english">English</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=estonian">Estonian</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=farsi">Persian</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=french">Français</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=german">Deutsch</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=hebrew">עברית</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=hungarian">Magyar</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=italian">Italiano</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=macedonian">Macedonian</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=norwegian">Norwegian</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=portuguese-br">Português</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=portuguese-pt">Português</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=romanian">Română</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=russian">Русский</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=spanish">Español</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=swedish">Svenska</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=turkish">Türkçe</a>
</li>
<li>
<a href="/web/20231129180021/ ?language=ukranian">Українська</a>
</li>
</ul>
</div>
</li>

<li style="border: 1px solid #fff; background: linear-gradient(to bottom, #c9de96 0%, #82bf50 49%, #72b222 100%) !important;" menuitemname="943" class=" removeFocus1" id="Secondary_Navbar-943">
<i class="fa fa-lock"></i> <a href="https://ecab.live/client/login.php">
Accés Client
</a>
</li>
</ul>
</div>
</div>
</div> -->
    <style>
        /* Navbar */

        ul.top-nav2>li:not(li.custom-menu-logo, li.custom-info-line-parent) {
            margin-left: -23px;
            border: 1px solid #fff;
            padding: 0 5px 0 5px;
            margin-right: 18px;
        }

        ul.top-nav2>li>a {
            margin-left: 0;
        }

        ul.top-nav2>li.active-custom-menu-item {
            /* border: 2px solid #fff; */
            border-radius: 10px;
            /* background: pink !important; */
            text-align: center;
            background: linear-gradient(#f66, #c00) !important;
            border-top: 1px solid #fff !important;
            border-radius: 10px 10px 0 0 !important;
            border-left: 1px solid #fff !important;
            border-right: 1px solid #fff !important;
            margin-left: -3px;
            height: 40px;
            position: relative;
            z-index: 2;
        }

        /* Other */
        .custom-info-line {
            right: -19px;
            position: relative;
            top: -41px;
            z-index: 0;
            flex-direction: column;
            display: flex;
        }

        .custom-info-line>span {
            color: #004B8A !important;
            font-size: 16px;
            font-weight: bold;
            margin-right: 7px;
        }

        .custom-info-line>img {
            width: 175px !important;
            height: 45px;
        }

        .custom-dollar-icon {
            background: white;
            color: #0080ff;
            border-radius: 50%;
            padding: 0rem 0rem;
        }

        /* .custom-question-mark-parent:hover{
        color: #fff !important;
    }

    .custom-question-mark-parent:focus{
        color: #fff !important;
    } */

        /* .custom-question-mark-parent:hover span{
        color: rgba(255, 255, 255, 0.69);
    }

    .custom-question-mark-parent:focus span{
        color: rgba(255, 255, 255, 0.69);
    } */

        .custom-question-mark-icon {
            border-radius: 50%;
        }


        div#navbar {
            position: relative;
            background: var(--bg-gray);
            height: 123px;
        }

        /* div#navbar::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 19.5px;
            background: #ce0204 !important;
            margin-left: 0px;
            bottom: 39px;
            left: 0;
            right: 0;
            z-index: 9;
        } */

        .breadcrumb>li+li:before {

            content: ">" !important;
        }

        .navTop {
            margin-bottom: 3px;
            /* width: 100%; */
            height: 100%;
            /* background-color: #007FBD; */
            position: relative;
            z-index: 9999;
            top: 4px;
        }

        .top-links {
            padding: 0;
            margin: 2px 0 0 0 !important;
            list-style: none;
            float: left;
            position: relative !important;
            width: 100% !important;
            display: flex;
            height: 100%;
        }

        .top-links>li:first-child {
            padding-left: 0;
        }

        li.mobile-client:first-child {
            margin-left: 0;
        }

        .top-links>li {
            list-style: none;
            float: left;
            padding: 0px 0px 0px 8px;
            font-size: 14px;
            font-weight: normal;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 3px;
        }

        .top-links>li a {
            color: #fff;
            font-size: 14px;
            text-decoration: none;
            display: block;
            margin-left: 1px;
            margin-top: 1px;
            font-weight: 500;
        }

        .top-links>li a img {
            margin-right: 4px;
            width: 27px;
            height: 27px;
            float: left;
            border: 1.5px solid #fff;
            border-radius: 50% !important;
        }

        ul.top-links .mobile-client span {
            padding-top: 0px;
            padding-right: 4px;
            font-weight: bold;
            position: relative;
            top: 4px;
            left: 2px;
        }

        .nav.col-md-6.custom-padding-right-0.top {
            position: relative;
            top: 11px;
        }

        .topNavbar {
            height: 36px;
            background: rgb(0, 127, 189);
        }

        .active-custom-menu-item {
            /* আপনার দেওয়া গ্রেডিয়েন্ট ব্যাকগ্রাউন্ড */
            background: linear-gradient(#ff6666, #cc0000);

            /* ব্যাকগ্রাউন্ড লাল হওয়ায় টেক্সট ও আইকন সাদা করার জন্য */
            color: #ffffff !important;
        }

        /* নিশ্চিত করুন যে ভেতরের a ট্যাগের টেক্সট এবং আইকনও সাদা হয় */
        .active-custom-menu-item a,
        .active-custom-menu-item i {
            color: #ffffff !important;
        }
    </style>

    <header>
        <div class="topNavbar">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="navTop col-md-6">
                            <ul class="top-links ">
                                <li menuitemname="1235" class="" id="Primary_Navbar-1235">
                                    <a href=" {{ route('affiliation') }} " target="_blank">
                                        <i class="fas fa-users"></i>&nbsp; Affiliation
                                    </a>
                                </li>
                                <li menuitemname="133" class="" id="Primary_Navbar-133">
                                    <a href=" {{ route('status')}} " target="_blank">
                                        <i class="fas fa-cogs"></i>&nbsp; Statut du Service
                                    </a>
                                </li>
                                <li menuitemname="133" class="" id="Primary_Navbar-133">
                                    <a href="{{ route('update')}}" target="_blank">
                                        <i class="fas fa-bullhorn"></i>&nbsp; Mises à jour
                                    </a>
                                </li>
                                <li menuitemname="133" class="support" id="supportBtn" style="cursor: pointer" ;>
                                    <a>
                                        <i class="fa-solid fa-headset"></i>&nbsp; Support
                                    </a>
                                </li>



                            </ul>
                        </div>

                        <div class="nav col-md-6 custom-padding-right-0 top">
                            <ul class="top-nav">


                                <li class="support-button-holder trans support-dropdown demo-button"
                                    id="Primary_Navbar-Contact_Us demo button">
                                    <div class="iconI">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </div>
                                    <form method="post" action="cart.php">
                                        <input type="hidden" name="token"
                                            value="f72628f5fe617d0cdc4802b9fdbc1679321f9c92">

                                        <select id="currencyHead" name="currency" onchange="submit()"
                                            class="form-control form-control-m"
                                            style="color : #fff !important; border : none !important;">
                                            <option style="color:#000" value="2">EUR</option>
                                            <option style="color:#000" value="1">USD</option>
                                        </select>
                                    </form>

                                    <style>
                                        .iconI {
                                            position: relative;
                                        }

                                        .iconI::before {
                                            content: "€";
                                            position: absolute;
                                            color: #fff;
                                            font-weight: 600;
                                            top: 9px;
                                            left: -14px;
                                        }

                                        .iconI i {
                                            content: "";
                                            position: absolute;
                                            right: -14px;
                                            width: 100%;
                                            height: 100%;
                                            top: 10px;
                                            color: #fff;
                                            z-index: 1;
                                            font-size: 11px;
                                        }
                                    </style>
                                </li>
                                <li>
                                    <a href="#" class="choose-language" data-toggle="popover" id="languageChooser"
                                        data-original-title title>
                                        Français
                                        <b class="caret"></b>
                                    </a>
                                    <div id="languageChooserContent" class="hidden">
                                        <ul>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=arabic">العربية</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=azerbaijani">Azerbaijani</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=catalan">Català</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=chinese">中文</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=croatian">Hrvatski</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=czech">Čeština</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=danish">Dansk</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=dutch">Nederlands</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=english">English</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=estonian">Estonian</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=farsi">Persian</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=french">Français</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=german">Deutsch</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=hebrew">עברית</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=hungarian">Magyar</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=italian">Italiano</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=macedonian">Macedonian</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=norwegian">Norwegian</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=portuguese-br">Português</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=portuguese-pt">Português</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=romanian">Română</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=russian">Русский</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=spanish">Español</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=swedish">Svenska</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=turkish">Türkçe</a>
                                            </li>
                                            <li>
                                                <a href="/web/20231129180021/ ?language=ukranian">Українська</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li style="border: 1px solid #fff;background: linear-gradient(  #9fe925, #558407) !important;padding: 0 3px 0 3px !important;"
                                    menuitemname="943" class=" removeFocus1" id="Secondary_Navbar-943">
                                    <i class="fa fa-lock"></i> <a href=" {{ route('login') }} ">
                                        Accés Client
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="navbar">
            <div class="container" id="header" style="position: relative; ">
                <div class="row">
                    <div style="margin-top: 2px;     margin-bottom: 20px;" class="col-md-12">
                        <ul style="float:left" id="topNav" class="top-nav top-nav2">
                            <li class="custom-menu-logo">
                                <a href=" "><img style="width: 166px;height: 99px;position: relative;top: -14px;"
                                        src="assets/images/logo_header.png"></a></li>
                            <li menuitemname="1" class="active-custom-menu-item menu-item" id="Primary_Navbar-1" style>
                                <a href="{{ route('home') }}" style="border-radius: 8px;">
                                    <i class="fas fa-home"></i>&nbsp; Accueil
                                </a>
                            </li>
                            <li menuitemname="1239" class="menu-item" id="Primary_Navbar-1239">
                                <a href="{{ route('home') }}#services">
                                    <i class="fas fa-cogs"></i>&nbsp; FONCTIONNALITÉS
                                </a>
                            </li>

                            <li class="menu-item">
                                <a style="font-weight: bold;" href="{{ route('landing') }}#tarifs">
                                    <i class="fas fa-usd custom-dollar-icon"></i>
                                    TARIFS
                                </a>
                            </li>

                            <li class="menu-item">
                                <a style="font-weight: bold;" href="{{ route('benefices') }}">
                                    <i class="fa fa-desktop"></i>
                                    DEMO
                                </a>
                            </li>
                            <li menuitemname="1231" class="menu-item" id="Primary_Navbar-1231">
                                <a href="{{ route('home') }}#temoignages">
                                    <i class="fas fa-comment-dots"></i>&nbsp; TEMOIGNAGÉS
                                </a>
                            </li>
                            <li menuitemname="159" class="menu-item" id="Primary_Navbar-159">
                                <a href="{{ route('home') }}#faq" class="custom-question-mark-parent">
                                    <i class="fa fa-question-circle custom-question-mark-icon"></i>
                                    <span style="font-weight: bold">FAQ</span>
                                </a>
                            </li>
                            <li menuitemname="211" class="menu-item" id="Primary_Navbar-211" style>
                                <a href="{{ route('contact') }}" class="custom-question-mark-parent">
                                    <i class="fa fa-envelope custom-envelope-icon"></i>
                                    <span style="font-weight:bold">Contact</span>
                                </a>
                            </li>
                        </ul>
                        <div id="phone-book" class="pl-4">
                            <div class="phone-book-container">
                                <img src="assets/images/call-us-girl.png" alt="call us" class="girl">
                                <div class="textWrapper">
                                    <h4>INFORMATIONS</h4>
                                    <div class="phone-number-container">01 84 21 09 09</div>
                                    <img src="https://ecab.site/assets_front/images/customphonebook-bg.png" alt=""
                                        class="phoneImg" style="border-radius: 20px" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <style>
            ul#navBarUL::before {
                width: 100%;
                height: 0.2px;
                top: 35px;
                left: 0;
                right: 0;
                z-index: 1;
                background: #fff !important;
                position: absolute;
                content: "";
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div style="padding:0;margin-top: -51px; border: 3px solid #fff;" class="col-md-12">
                    <div
                        style="text-align: center;background: linear-gradient(to bottom, yellow, #F5B32C) !important;color: #000;font-weight: bold;font-size: 20px;padding-top: 2px;height: 55px;border: 3px dashed red;">

                        <style>
                            .pulseAnimation {
                                display: inline-block;
                                animation: pulse 1.5s infinite;
                            }

                            .fadeInOutAnimation {
                                display: inline-block;
                                animation: fade-in-out 1.5s infinite;
                            }

                            .pulseAnimation {
                                display: inline-block;
                                animation: pulse 1.5s infinite;
                            }


                            a {
                                color: radial-gradient(circle, #00c4fb 0, #0091d1 39%, #003e7c 100%);
                                text-decoration: none;
                                transition: color 0.5s ease;
                            }

                            .fadeInOutAnimation {
                                display: inline-block;
                                animation: fade-in-out 1.5s infinite;
                            }

                            .promo-bar button {
                                background-color: #13d014;
                                padding: 0 14px;
                                border: 1px solid #fff;
                                color: #fff;
                                font-size: 17px;
                                border-radius: 30px;
                                margin-left: 6px;
                            }

                            @keyframes fade-in-out {
                                0% {
                                    opacity: 1;
                                }

                                50% {
                                    opacity: 0.0;
                                }

                                100% {
                                    opacity: 1;
                                }
                            }

                            @keyframes pulse {
                                0% {
                                    transform: scale(1);
                                    opacity: 1;
                                }

                                50% {
                                    transform: scale(1.2);
                                    opacity: 0.7;
                                }

                                100% {
                                    transform: scale(1);
                                    opacity: 1;
                                }
                            }

                            @media screen and (min-width: 480px) and (max-width: 991px) {
                                .promo-bar {
                                    margin-top: 13px !important;
                                }
                            }

                            .promo-bar {
                                margin-bottom: 20px;
                            }

                            a.bienvenue {
                                font-size: 14px;
                                border: 2px dashed #fff;
                                padding: 3px 10px;
                                margin-left: 5px;
                                color: #fff;
                                font-weight: bold;
                                background: linear-gradient(#ff6666, #cc0000) !important;
                                position: relative;
                            }

                            a.bienvenue i {
                                position: absolute;
                                left: -9px;
                                top: -7px;
                                font-size: 15px;
                                color: #000;
                            }

                            #promo-bar {
                                scroll-margin-top: 90px;
                            }

                            #promo-bar .promo-inner-content span.pulseAnimation {
                                font-size: 12px;
                            }

                            div#mobile-promo-bar {
                                position: relative !important;
                                border: 3.5px solid #fff !important;
                                top: -2px !important;
                            }

                            span.flip-countdown-timer__label b {
                                font-size: 12px;
                            }

                            span#timer-days,
                            span#timer-hours,
                            span#timer-minutes,
                            span#timer-seconds {
                                font-size: 15px;
                                font-weight: 700;
                                margin-top: 3.5px;
                            }

                            .arrow-flash-small {
                                width: 30px;
                                /* filter: grayscale(100%) brightness(0%); */
                            }

                            .flip-countdown-timer__wrapper {
                                margin-top: 3px;
                            }

                            #promo-bar .yellowBack {
                                border-radius: 5px !important;
                                padding: 1px 8px;
                                color: white;
                                font-weight: 500;
                                margin-right: 3px;
                                display: flex;
                                align-content: center;
                                justify-content: center;
                                align-items: center;
                            }


                            #promo-bar .greenBack span {
                                background: linear-gradient(#ff6666, #cc0000);
                                border-radius: 5px !important;
                                padding: 1px 5px;
                                border: 1px solid #fff;
                                color: #fff;
                            }

                            .proma-content div {
                                display: flex !important;
                                justify-content: center;
                                align-items: center;
                            }

                            .promo-btn {
                                position: unset !important;
                            }

                            .proma-content {
                                width: 100%;
                                padding: 0px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                gap: 0;
                                font-weight: bold;
                                position: relative;
                                top: 13px;
                            }

                            #promo-bar span.greenBack {
                                font-size: 15px;
                                font-weight: 700;
                                color: #000;
                            }


                            .blue-promo {
                                position: absolute;
                                top: 0;
                                height: 33px;
                                background: linear-gradient(to bottom,
                                        #44c0e5 0%,
                                        #35add1 39%,
                                        #0d85a8 100%) !important;
                                padding: 0 10px;
                                transform: translateY(-5px);
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                z-index: 1;
                                border-radius: 15px;
                                margin-top: 2px;
                                border: 1px solid #fff;
                            }

                            /* here is promo header class */
                            .blinking {
                                animation: blink 0.8s linear infinite;
                            }

                            .timer-gif-container {
                                position: relative;
                                width: 45px;
                                left: 0;
                            }

                            .timer-gif {
                                z-index: 9999999;
                                /*top: -30px;*/
                                width: 100%;
                                position: absolute;
                                max-width: 58px;
                                display: block;
                            }

                            @keyframes blink {
                                0% {
                                    opacity: 0;
                                }

                                /* 50%{opacity: .5;} */
                                100% {
                                    opacity: 1;
                                }
                            }


                            .hasDatepicker {
                                color: #858585;
                            }



                            .icon-with-shadow {
                                position: absolute;
                                top: 50px;
                                left: 0;
                                right: unset !important;
                                font-size: 18px !important;
                                transform: translateY(-50%);
                                color: #2ba5c9;
                                background: transparent linear-gradient(#fbfbfb, #ececec, #cecece) repeat scroll 0 0;
                                padding: 8.5px 7px;
                                border: 1px solid #2ba5c9;
                                border-top-left-radius: 3px;
                                border-bottom-left-radius: 3px;
                            }

                            .icon-with-shadow2 {
                                position: absolute !important;
                                top: 19.6px !important;
                                right: unset !important;
                                font-size: 16px !important;
                                transform: translateY(-50%);
                                color: #2ba5c9 !important;
                                background: transparent linear-gradient(#fbfbfb, #ececec, #cecece) repeat scroll 0 0;
                                padding: 10.3px 8px;
                                border-right: 1px solid #2ba5c9;
                                border-top-left-radius: 3px;
                                border-bottom-left-radius: 3px;
                                border-left: 1px solid #2ba5c9;
                            }

                            .icon-with-shadow3 {
                                position: absolute !important;
                                top: 20.7px !important;
                                left: 0;
                                right: unset !important;
                                font-size: 16px !important;
                                transform: translateY(-50%);
                                color: #2ba5c9 !important;
                                background: transparent linear-gradient(#fbfbfb, #ececec, #cecece) repeat scroll 0 0;
                                padding: 11.6px 8px;
                                border-right: 1px solid #2ba5c9;
                                border-top-left-radius: 3px;
                                border-bottom-left-radius: 3px;
                                border-left: 1px solid #2ba5c9;
                            }

                            .black-border {
                                border: 1px solid #a6a6a6 !important;
                                background: linear-gradient(#ff6666, #cc0000) !important;
                                color: #fff;
                            }

                            .col-md-4 #time:before {
                                content: 'Heure de I`Aller';
                                color: gray;
                                position: absolute;
                                background: #fff;
                            }

                            .col-md-4 #time:focus:before {
                                width: 0;
                                content: '';
                            }

                            .mobile-promo-code-block {
                                display: flex !important;
                                justify-content: center;
                                align-items: center;
                                flex-direction: row;
                                gap: 6px;
                            }

                            .col-md-4 #retourTime:before {
                                content: 'Heure du Retour';
                                color: gray;
                                position: absolute;
                                background: #fff;
                            }

                            .col-md-4 #retourTime:focus:before {
                                width: 0;
                                content: '';
                            }

                            .blinking_promo,
                            .pr_item,
                            .item_inner {
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                gap: 10px;
                            }

                            .blink_promo.sale_pro span {
                                animation-duration: 1.5s;
                            }

                            .blinking_promo h4 {
                                font-size: 14px;
                                font-weight: 600;
                                margin: 0;
                            }

                            .blink_promo span {
                                animation: blink-text .8s linear infinite;

                            }

                            .promo-bar {
                                text-align: center;
                                font-size: 20px;
                                color: #fff;
                                font-weight: bold;
                                width: 100%;
                            }

                            @media(max-width: 1000px) {
                                .promo-inner-content {
                                    flex-direction: column;
                                    flex: 50%;
                                    align-items: center;
                                    gap: 1px;
                                    /* margin: 4px; */
                                    /* padding: 4px; */
                                    flex-wrap: wrap;
                                }
                            }


                            @media(max-width: 1000px) {
                                .promo-inner-content {
                                    flex-direction: column;
                                    flex: 50%;
                                    align-items: center;
                                    gap: 1px;
                                    /* margin: 4px; */
                                    /* padding: 4px; */
                                    flex-wrap: wrap;
                                }
                            }

                            .promo-inner-content {
                                margin-left: 12px;
                            }

                            .promo-btn {
                                border: none !important;
                                padding: 4px 5px;
                                font-size: 13px;
                            }

                            a.bienvenue {
                                margin-left: 2px;
                                font-size: 13px;
                                padding: 3px 8px 3px 8px;
                            }

                            @media screen and (max-width: 991px) {
                                .main {
                                    margin-top: 22px;
                                }

                                .promo-bar {
                                    font-size: 20px;
                                    position: unset;
                                    margin-top: 39px;
                                    margin-bottom: -22px;
                                }
                            }

                            @media screen and (max-width: 767px) {
                                .mobile-promo-code-welcome {
                                    gap: 14px;
                                    display: flex !important;
                                    flex-direction: row;
                                    justify-content: space-between;
                                }
                            }

                            .promo-bar .container {
                                position: relative;
                            }

                            .promo-bar button {
                                background-color: #13d014;
                                padding: 3px 14px;
                                border: 1px solid #fff;
                                color: #fff;
                                font-size: 17px;
                                border-radius: 30px;
                                margin-left: 6px;
                            }

                            @media screen and (max-width: 650px) {
                                .promo-bar button {
                                    margin-right: -10px;
                                }

                                .proma-content .greenBack {
                                    display: block;
                                    margin-top: 2px;
                                }
                            }


                            @media (max-width: 480px) {

                                #promo-bar {
                                    font-size: 15px !important;
                                }
                            }


                            @keyframes fade-in-out {
                                0% {
                                    opacity: 1;
                                }

                                50% {
                                    opacity: 0.0;
                                }

                                100% {
                                    opacity: 1;
                                }
                            }

                            @keyframes pulse {
                                0% {
                                    transform: scale(1);
                                    opacity: 1;
                                }

                                50% {
                                    transform: scale(1.2);
                                    opacity: 0.7;
                                }

                                100% {
                                    transform: scale(1);
                                    opacity: 1;
                                }
                            }
                        </style>
                        <div class="promo-bar container" id="promo-bar">
                            <div class="top-img">
                                <img src="assets/images/header-new-back.png" alt="">
                            </div>
                            <div class="proma-content">
                                <div class="promo-inner-content">
                                    <span class="yellowBack black-border"
                                        style="background: linear-gradient(to bottom, #44c0e5 0%, #35add1 39%, #0d85a8 100%) !important;color: #fff;border: 2px solid #fff !important; font-weight: bold;">
                                        <img class="arrow-flash-small pulseAnimation"
                                            src="./assets/images/yellow-warning.png"
                                            style="float:left;margin-top: 2px; width: 24px; margin-left: 1px; animation: fade-in-out 1s linear(0 0%, 1.19 34.21%) infinite">
                                        <span class="" style="font-size: 13px;"><b>OFFRE SPECIALE et
                                                LIMITEÉ</b></span>
                                    </span>
                                    <img class="arrow-flash-small blinking red-arrow"
                                        style="animation: fade-in-out 1s linear(0 0%, 1.19 34.21%) infinite;"
                                        src="./assets/images/red-arrow.png">
                                    <span class="greenBack">
                                        <span class=" black-border"
                                            style="padding:3px 7px 4px;font-size: 16px;border:2px solid #fff !important"><b
                                                class="">-50%</b></span>
                                        &nbsp; sur votre Vos Frais d'installation Avec le CODE PROMO <a href="#"
                                            class="bienvenue">BIENVENUE <i class="fa-solid fa-scissors"></i></a>
                                    </span>
                                </div>
                                <div class="timer" style="color: #000;">
                                    <div class="timer-gif-container">
                                        <img class="timer-gif" src="./assets/images/clipart-clock-animated-gif-10_1.gif"
                                            alt>
                                    </div>
                                    <div class="flip-countdown-timer__wrapper">
                                        <div class="flip-countdown-timer__item">
                                            <span id="timer-days"
                                                class="flip-countdown-timer__value flip-countdown-timer__days">06</span>
                                            <span class="flip-countdown-timer__label">
                                                <b>jours</b>
                                            </span>
                                        </div>
                                        :
                                        <div class="flip-countdown-timer__item">
                                            <span id="timer-hours"
                                                class="flip-countdown-timer__value flip-countdown-timer__hours">22</span>
                                            <span class="flip-countdown-timer__label"><b>Heures</b></span>
                                        </div>
                                        :
                                        <div class="flip-countdown-timer__item">
                                            <span id="timer-minutes"
                                                class="flip-countdown-timer__value flip-countdown-timer__minutes">15</span>
                                            <span class="flip-countdown-timer__label"><b>minutes</b></span>
                                        </div>
                                        :
                                        <div class="flip-countdown-timer__item">
                                            <span id="timer-seconds"
                                                class="flip-countdown-timer__value flip-countdown-timer__seconds">04</span>
                                            <span class="flip-countdown-timer__label"><b>secondes</b></span>
                                        </div>
                                    </div>
                                    <button class="pulse-btn promo-btn black-border"
                                        style=" background: linear-gradient(#ff6666, #cc0000) !important;border:2px solid #fff !important;">
                                        <a href="https://ecab.agency/booking" class="open-booking fadeInOutAnimation"
                                            style="color: white; font-weight: 600;">J'en Profite</a>
                                    </button>
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
