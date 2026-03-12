    <style>
        input#email {
            width: 162px;
            height: 39px;
        }
        input[type=submit], button[type=submit] {
    height: 35px;
}
    p.fote-text {
        text-align: center;
        font-size: 11px;
        color: #000;
        padding: 10px;
    }
p.test {
    text-align: left;
    font-size: 11.5px;
    color: #000;
    padding: 0;
    margin-bottom: 5px;
    margin-top: 4px;
}
p.fote-text a {
    color: #0093D6 !important;
}

    </style>
    <div class="floating-form defaultRight" id="contact_form"
        style="border: 1px solid dodgerblue;border-radius: 26px 26px 0 0;">
        <div class="floating-form-2-header">
            <img src="assets/images/quote.gif" alt="" loading="lazy"> DEMANDE DE DEVIS GRATUIT
        </div>

        <div id="contact_results"></div>
        <div id="contact_body" class="contact_body">
            <a href="javascript:;" class="close-btn closee-btn" style="color: #ea0707 !important;">
                <img src="assets/images/cross.png" alt="" loading="lazy">
            </a>
            <div id="client_other1">
                <form method="post" action="#" enctype="multipart/form-data" accept-charset="utf-8"
                    id="the-contact-form" class="form">
                    <input type="hidden" name="token" value="a94a5dcd696e1646a49c76e6ecb5fdb6a6b391ac">
                    <div style="display:none">
                        <input type="hidden" name="csrf_test_name" value="1277b8ae6b314b494ff2363af7822d60">
                    </div>
                    <input type="hidden" name="success_message"
                        value="Nous avons bien reçu votre message et nous vous en remercions, un de nos opérateurs reviendra vers vous dés que possible.">
                    
                    <div class="row">
                        <div class="message">
                        <div class="send-error validation_error_b1" id="errorBooking1" style="    width: 87%;margin: 6px 7px -8px; !important;">
                            <img class="msgIcon" src="https://handi-mobilite.fr/assets_front/images/dangerIcon.png"
                                alt="" srcset="">
                            Merci de bien remplir toutes les informations requises
                        </div>
                    </div>
                        <div class="col-xs-12" style="background-color: #EBF4FF !important;">
                            <p class="test">Merci de remplire ce formulaire pour etre rappele par un de nos conseillers
                                :</p>
                        </div>
                    </div>
                </form>
            </div>
            <div id="client_login1" style="display: none;">
                <div class="form-group">
                    <div class="input-group signupResBtnPopup">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input id="c_username1" type="text" class="form-control" value name="username"
                            placeholder="Username*">
                    </div>
                    <small class="pop-error" id="err-c_username1">Username is required*</small>
                </div>
                <div class="form-group">
                    <div class="input-group signupResBtnPopup">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input id="c_password1" type="password" class="form-control password" value name="password"
                            placeholder="Password*">
                        <span class="input-group-btn">
                            <button class="btn btn-default reveal" type="button">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </button>
                        </span>
                    </div>
                    <small class="pop-error" id="err-c_password1">Password is required*</small>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="col-md-6 col-xs-6">
                            <div class="form-group" style="margin:0;">
                                <div class="checkbox resSignupText1" style="margin:0;">
                                    <label>
                                        <input type="checkbox"
                                            style="margin-right: 0; margin-top: 4px; margin-left: -20px; float: none;"
                                            value="1" name="remember_me3"> Remember me </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6" style="text-align: right;font-size: 11px;">
                            <a href="#" data-toggle="modal" data-target="#myModal" class="resSignupText"> Mot de passe
                                oublié?</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-6 col-xs-6" style="text-align: center">
                        <a href="#" class="button green_button pull-right" onclick="client_login1()">Login</a>
                    </div>
                </div>
            </div>
            <div id="client_other1" style="display: block;">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <div class="input-group signupResBtnPopup2" style="width:21%;float:left;margin-right:5px;">
                            <span class="input-group-addon">
                                <i class="fa fa-user" style="color:dodgerblue"></i>
                            </span>
                            <select class="form-control c_civility" style="color: #000;padding:0px !important" name="civility" required>
                                <option value="Mr">Mr</option>
                                <option value="Mme">Mme</option>
                                <option value="Mlle">Mlle</option>
                            </select>
                        </div>
                        <div class="input-group signupResBtnPopup2" style="width:38%;float:left;margin-right:5px;">
                            <span class="input-group-addon">
                                <i class="fa fa-user" style="color:dodgerblue"></i>
                            </span>
                            <input type="text" maxlength="100" class=" form-control c_firstname" required name="name"
                                placeholder="Nom*" value>
                        </div>
                        <div class="input-group signupResBtnPopup3" style="width:38%;float:left">
                            <span class="input-group-addon">
                                <i class="fa fa-user" style="color:dodgerblue"></i>
                            </span>
                            <input type="text" maxlength="100" class=" form-control c_lastname" required name="prename"
                                placeholder="Prenom*" value>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class=" form-group">
                            <div class="input-group signupResBtnPopup">
                                <span class="input-group-addon" style="padding:6px 10px;">
                                    <i class="fa fa-home"></i>
                                </span>
                                <input id="enterprise2" maxlength="50" type="text" class="form-control c_company"
                                    name="company" placeholder="Entreprise ou Organisme  (Optionnel)" value>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class=" form-group">
                            <div class="input-group signupResBtnPopup">
                                <span class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </span>
                                <input id="tel" maxlength="50" type="text" class="form-control c_phone" required
                                    name="tel" placeholder="Votre Telephone*" value>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class=" form-group">
                            <div class="input-group signupResBtnPopup">
                                <span class="input-group-addon" style="padding:6px 10px;">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <input id="email" maxlength="100" type="email" class="form-control c_email" required
                                    name="email" placeholder="Votre email*" value>
                            </div>
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
                                <input id="contact_autocomplete" data-parent="the-contact-form" type="text"
                                    class="form-control c_address pac-target-input" required name="address1"
                                    placeholder="Addresse du devis*" value autocomplete="off">
                                <!-- <i class="location-icon" onclick="geolocate_model('contact')"></i> -->
                                <input type="hidden" name="latitude" value>
                                <input type="hidden" name="longitude" value>
                            </div>
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
                                <input id="address2" type="text" class="form-control" name="address2"
                                    placeholder="Complément d'adresse" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <div class="input-group signupResBtnPopup2" style="width:48%;float:left;margin-right:5px;">
                            <span class="input-group-addon">
                                <i class="fa fa-map-marker"></i>
                            </span>
                            <input type="text" maxlength="20" class="form-control c_zipcode" required name="postal_code"
                                placeholder="Code Postal*" value="">
                        </div>
                        <div class="input-group signupResBtnPopup" style="width:50%;float:left">
                            <span class="input-group-addon">
                                <i class="fa fa-map-marker"></i>
                            </span>
                            <input type="text" class="form-control c_city" required name="ville" placeholder="Ville*"
                                value="">
                        </div>
                    </div>
                </div>
                <div class="row" style="display: flex;justify-content: space-between;align-items: center;">
                    <div class="form-group" style="width: 30%;">
                        <div class="input-group signupResBtnPopup2" style="width:100%;float:left;margin-right:5px;">
                            <span class="input-group-addon" style="padding:6px 8px;">
                                <i class="fa fa-list"></i>
                            </span>
                            <select class="form-control" id="the-contact-form-service-cat" name="service_category"
                                style="padding: 0px 0px !important">
                                <option value>Vêhicule(s)</option>
                                <option value="2">Drivers</option>
                                <option value="3">Operators</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="width: 35%;">
                        <div class="input-group signupResBtnPopup2" style="width:100%;float:left;margin-right:5px;">
                            <span class="input-group-addon" style="padding:6px 8px;">
                                <i class="fa fa-list"></i>
                            </span>
                            <select class="form-control" id="the-contact-form-service-cat" name="service_category"
                                style="padding: 0px 0px !important">
                                <option value>Conducteur(s)</option>
                                <option value="2">Drivers</option>
                                <option value="3">Operators</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="width: 32%;">
                        <div class="input-group signupResBtnPopup2" style="width:100%;float:left;margin-right:5px;">
                            <span class="input-group-addon" style="padding:6px 8px;">
                                <i class="fa fa-list"></i>
                            </span>
                            <select class="form-control" id="the-contact-form-service-cat" name="service_category"
                                style="padding: 0px 0px !important">
                                <option value>Utilisateur(s)</option>
                                <option value="2">Drivers</option>
                                <option value="3">Operators</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class=" form-group signupResBtnPopup1">
                            <textarea rows="7" style="height: 140px" maxlength="3000" class="form-control"
                                name="message" required
                                placeholder="Merci de nous indiquez toutes les informations nécessaires afin de vous fournir un devis pour la prestation souhaitée*"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-6 col-xs-6" style="text-align: center">
                        <input class=" w3-orange orangehs" type="submit" name="save" value="Envoyer"
                            style="font-family: Calibri;color: #000;font-weight: bold;background: var(--bg-gray) !important;border-radius: 10px !important;padding: 0 30px;">
                    </div>
                </div>
                <p class="fote-text">Nous respectons votre vie privée <a href="#" target="_blank" class="fotter-links">
                        Politique de Vie Privée </a>et nous vous enverrons jamais de spam. </p>
            </div>
        </div>
    </div>
    <style>
        #contact_form2,
        .showRight {
            position: absolute !important;
            left: 0 !important;
            top: 0 !important;
            right: 100% !important;
        }
    </style>

