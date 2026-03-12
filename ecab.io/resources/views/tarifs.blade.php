@include('front.common.header')


<style>
    tfoot td {
        padding: 8px;
    }

    td {
        color: #000;
    }

    .btn-primary {
        color: #fff;
        border: 0;
        background: linear-gradient(to bottom, #44c0e5 0%, #35add1 39%, #0d85a8 100%) !important;
        font-weight: 600;
        border-radius: 10px;
        padding: 4px 8px;
        margin: 0;
        margin-right: 45px;
        font-size: 14px;
    }

    tr {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    ol.breadcrumb li a,
    li {
        font-weight: 400;
    }

    td#five {
        position: relative;
        left: 27px;
    }

    span.minus i, span.plus i {
    font-size: 11px;
    position: relative;
    top: 0;
    left: 0;
    font-weight: bolder;
    -webkit-text-stroke: 1px currentColor;
    color: #000 !important;
}

    td#car {
        position: relative;
        left: 32px;
    }

    td#conductor {
        position: relative;
        left: 19px;
    }

    td#operate {
        position: relative;
        left: 21px;
    }

    tr#subtotal {
        border-bottom: 3px solid #ccc;
    }

    .steps__container {
        width: 109% !important;
        left: -1px !important;
        position: relative;
    }

    .steps__container ul.nav-wizard {
        background-color: #7EA9D3;
        border: none;
        -webkit-border-radius: 6px 6px 0px 0px;
        -moz-border-radius: 6px 6px 0px 0px;
        border-radius: 6px 6px 0px 0px;
        position: relative;
        display: flex;
        height: 35px;
        align-items: center;
    }

    .steps__container ul.nav-wizard li {
        color: #fff;
        background: linear-gradient(to bottom, #44c0e5 0%, #35add1 39%, #0d85a8 100%) !important;
    }

    .steps__container ul.nav-wizard li.active {
        color: #fff !important;
        background: linear-gradient(#9fe925, #558407) !important;
    }

    .steps__container ul.nav-wizard li:first-child {
        padding: 0 20px 0 15px;
    }

    .steps__container ul.nav-wizard li {
        text-transform: uppercase;
        font-weight: bold;
        position: relative;
        float: left;
        height: 46px;
        padding: 0 20px 0 40px;
        margin: 0;
        font-size: 16px;
        line-height: 46px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 1;
    }

    .steps__container ul.nav-wizard li.active .step__arrow__b {
        background: linear-gradient(92deg, #9fe925, #558407) !important;
    }

    .steps__container .step__arrow__b {
        position: absolute;
        width: 47px;
        height: 26px;
        background: linear-gradient(92deg, #44c0e5 0%, #35add1 39%, #0d85a8 100%);
        clip-path: polygon(0 100%, 50% 0%, 100% 100%);
        rotate: 90deg;
        right: -35px;
        left: unset !important;
        z-index: 9;
        top: 10px;
    }

    .steps__container ul.nav-wizard li.active {
        color: #fff !important;
        background: linear-gradient(#9fe925, #558407) !important;
    }

    .steps__container ul.nav-wizard li .steps {
        font-size: 16px;
        border: 2px solid white;
        border-radius: 50px;
        width: 30px;
        height: 30px;
        margin-left: 0px;
        background: linear-gradient(#ff6666, #cc0000);
        align-items: center;
        text-align: center;
        display: flex;
        justify-content: center;
        font-weight: 800;
    }

    .steps__container ul.nav-wizard li.active a,
    .steps__container ul.nav-wizard li.active a:active,
    .steps__container ul.nav-wizard li.active a:visited,
    .steps__container ul.nav-wizard li.active a:focus {
        color: #fff !important;
    }

    .steps__container ul.nav-wizard li a {
        padding-left: 5px;
        font-size: 16px;
        font-weight: 600;
        color: #fff;
    }

    div#plan-navbar {
        margin-top: 8px;
        margin-bottom: 18px;
        padding: 0;
    }

    .steps__container ul.nav-wizard li:not(:first-child)::before {
        content: "";
        position: absolute;
        width: 2.5px;
        height: 37px;
        background: #fff;
        rotate: -48deg;
        top: -7px;
        left: 13px;
    }

    .steps__container ul.nav-wizard li:not(:first-child)::after {
        content: "";
        position: absolute;
        width: 2.5px;
        height: 37px;
        background: #fff;
        rotate: 48deg;
        bottom: -7px;
        left: 13px;
    }

    .steps__container ul.nav-wizard li:not(:first-child)::before {
        content: "";
        position: absolute;
        width: 2.5px;
        height: 37px;
        background: #fff;
        rotate: -48deg;
        top: -7px;
        left: 13px;
    }

    .steps__container ul.nav-wizard li:not(:first-child)::after {
        content: "";
        position: absolute;
        width: 2.5px;
        height: 37px;
        background: #fff;
        rotate: 48deg;
        bottom: -7px;
        left: 13px;
    }

    .pricing-box .pricing-content .pricing-details p {
        color: #000 !important;
        font-weight: bold;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        padding-bottom: 6px;
        padding-left: 6px;
        padding-right: 5px;
        text-align: left !important;
        position: relative;
        z-index: 999;
        margin-bottom: 8px;
        padding-top: 8px;
        font-size: 13px;
    }

    div#abonnement p {
        font-size: 17px;
    }

    .pricing-details {
        height: 527px;
    }

p.gray {
    position: relative;
}
tr#back{
    position: relative;
    z-index: 1;
    background: transparent linear-gradient(#fbfbfb, #ececec, #cecece) repeat scroll 0 0;
    border-radius: 5px 5px 0 0;
    width: 98%;
    margin: 0 auto;
}

/* tr#back::before {
    content: "";
    background: transparent linear-gradient(#fbfbfb, #ececec, #cecece) repeat scroll 0 0;
    position: absolute;
    width: 98%;
    height: 27px;
    z-index: -1;
    padding: 0px;
    left: 2px;
    top: 3px;
    border-radius: 5px 5px 0 0;
} */

tr#each {
    position: relative;
    z-index: 1;
    background: transparent linear-gradient(#fbfbfb, #ececec, #cecece) repeat scroll 0 0;
    border-radius: 0 0 5px 5px;
    width: 98%;
    margin: 0 auto;
}

/* tr#each::before {
    content: "";
    background: transparent linear-gradient(#fbfbfb, #ececec, #cecece) repeat scroll 0 0;
    position: absolute;
    width: 98%;
    height: 27px;
    z-index: -1;
    padding: 0px;
    right: 3px;
    top: 2px;
    border-radius: 0 0 5px 5px;
} */
#textPrice {
    position: relative;
    left: -4px;
}
#carI {
    position: relative;
    left: 2px;
}
#driverText {
    position: relative;
    left: -5px;
}
#driveI {
    position: relative;
    left: 5px;
}
#operatorText {
    position: relative;
    left: -5px;
}
#operatorI {
    position: relative;
    left: 19px;
}

.btn-group>.btn:last-child:not(:first-child), .btn-group>.dropdown-toggle:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    position: relative;
    padding: 5px;
}

</style>


<div id="main-body-holder" class="container-fluid">
    <section id="main-body">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 main-content">
                    <button type="button" class="btn btn-default btn-sm" id="btnShowSidebar">
                        <i class="fas fa-arrow-circle-right"></i>
                        Afficher le Menu
                    </button>
                    <div class="col-md-12 pull-md-right">
                        <div class="header-lined">
                            <ol class="breadcrumb">
                                <li class=""><a
                                        href="https://web.archive.org/web/20240221211645/https://ecab.io/">Accueil</a>
                                </li>
                                <li class="active">Forfaits</li>
                            </ol>
                        </div>
                    </div>
                    <div class="container-fluid p-main">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12" id="abonnement">
                                    <h4 class="">Choisissez votre abonnement</h4>
                                    
                                    <p>nous offrons un large choix d'abonnements qui s'adapte à la taille de votre
                                        société de transport de personnes.</p>
                                </div>

                                <div class="col-md-11" id="plan-navbar">
                                    <div style="margin-bottom: 5px;">
                                        <div class="steps__container">
                                            <ul class="nav nav-wizard">
                                                <li class="active contact-steps contact-step-1"
                                                    style="pointer-events: none;"><span
                                                        class="step__arrow__b"></span><span
                                                        class="steps">1</span><a>FORFAIT</a></li>
                                                <li class="contact-steps contact-step-2" style="pointer-events: none;">
                                                    <span class="step__arrow__b"></span><span
                                                        class="steps">2</span><a>AUTHENTIFICATION</a></li>
                                                <li class="contact-steps contact-step-3" style="pointer-events: none;">
                                                    <span class="step__arrow__b"></span><span
                                                        class="steps">3</span><a>DEVIS</a></li>
                                                <li class="contact-steps contact-step-3" style="pointer-events: none;">
                                                    <span class="steps">4</span><a>PAIMENT</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 pull-center custom-swith-button-area text-center">
                                    <div class="form-group text-left marginBottom0"
                                        style=" position: relative;left:47px;    margin-bottom: -3rem;display: flex;gap: 5px;align-items: center;margin-top: -17px;position: relative;left: 57px;top: 14px;">
                                        <label style="font-size: 14px;" for="promocode" class> Code Promo</label>
                                        <input type="text" class="form-control-plaintext" id="promocode" value
                                            style="border-radius: 7px;height: 30px;width: 91px;">
                                        <button class="btn btn-primary">Appliquer</button>
                                    </div>
                                    <div class="btn-group btn-group-toggle" id="price_top" data-toggle="buttons"
                                        style="border-radius: 8px;">
                                        <label class="btn btn-secondary  ymChecker textBold" value="x"
                                            style="color: #ffffff; padding: 8px 10px;">
                                            <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                            Paiement Mensuel
                                        </label>
                                        <label class="btn btn-secondary  ymChecker textBold" id="trial" value="x"
                                            style="color: #ffffff; padding: 8px 10px;border-right: 2px solid #fff">
                                            <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                            15 Jours d'Essai Gratuit
                                        </label>
                                        <label class="btn btn-secondary ymChecker active textBold bgGray"
                                             value="y">
                                            <input type="radio" name="options" id="option2" autocomplete="off">Paiement Annuel <span class="badge badge-pill badge-danger textBold"
                                                style="background: linear-gradient(#ff6666, #cc0000) !important;
                                              color: white;font-weight:bold;border: 1px solid white;margin-left: 10px;font-weight: 900;font-size: 14px;"> -20%</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pricing" class="row row-product-selection">
                        <div class="pull-right hint" style="margin-right: 30px;"></div>
                        <div class="col-xs-3 product-selection-sidebar" id="premiumComparisonSidebar">
                            <div menuitemname="Categories" class="panel panel-sidebar">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="fas fa-shopping-cart"></i>&nbsp; Catégories
                                        <i class="fas fa-chevron-up panel-minimise pull-right"></i>
                                    </h3>
                                </div>
                                <div class="list-group">
                                    <a menuitemname="Abonnement"
                                        href="https://web.archive.org/web/20240221211645/https://ecab.io/prices?gid=1"
                                        class="list-group-item active"
                                        id="Secondary_Sidebar-Categories-Abonnement">Abonnement</a>
                                </div>
                            </div>
                            <div menuitemname="Actions" class="panel panel-sidebar">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="fas fa-plus"></i>&nbsp; Actions
                                        <i class="fas fa-chevron-up panel-minimise pull-right"></i>
                                    </h3>
                                </div>
                                <div class="list-group">
                                    <a menuitemname="Domain Registration"
                                        href="https://web.archive.org/web/20240221211645/https://ecab.io/prices?a=add&amp;domain=register"
                                        class="list-group-item" id="Secondary_Sidebar-Actions-Domain_Registration">
                                        <i class="fas fa-globe fa-fw"></i>&nbsp; Enregistrer un nom de domaine
                                    </a>
                                    <a menuitemname="Domain Transfer"
                                        href="https://web.archive.org/web/20240221211645/https://ecab.io/prices?a=add&amp;domain=transfer"
                                        class="list-group-item" id="Secondary_Sidebar-Actions-Domain_Transfer">
                                        <i class="fas fa-share fa-fw"></i>&nbsp; Transférer un nom de domaine
                                    </a>
                                    <a menuitemname="View Cart"
                                        href="https://web.archive.org/web/20240221211645/https://ecab.io/prices?a=view"
                                        class="list-group-item" id="Secondary_Sidebar-Actions-View_Cart">
                                        <i class="fas fa-shopping-cart fa-fw"></i>&nbsp; Afficher le panier
                                    </a>
                                </div>
                            </div>
                            <div menuitemname="Choose Currency" class="panel panel-sidebar">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="fas fa-plus"></i>&nbsp; Sélectionnez la devise
                                        <i class="fas fa-chevron-up panel-minimise pull-right"></i>
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <form method="post"
                                        action="https://web.archive.org/web/20240221211645/https://ecab.io/prices?gid=1">
                                        <input type="hidden" name="token"
                                            value="39ee6bdb0893f304957ad83d720a3f32c6c42766" />
                                        <select name="currency" onchange="submit()" class="form-control">
                                            <option value="2">EURO</option>
                                            <option value="1" selected>USD</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div id="order-hostify_cart" class="page-container">
                                <div id="products" class="price-table-container">
                                    <ul id="sub-pricing">
                                        <li id="product1" class="col-md-3 changeClass">
                                            <div class="pricing-box pricing-box-simple pricing-color1"
                                                style="width: 100%">
                                                <div class="pricing-content pricingColors">
                                                    <div class="pricing-head" style="padding-bottom: 136px;">
                                                        <div class="custom-plan-box planeBoxNewStyle">
                                                            <div class="price-list">
                                                                <div class="number">
                                                                    <div class="row">
                                                                        <div class="controlle">
                                                                            <div class="col-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-11" style="padding-right: 0px;
                                                                                    text-align: right;">
                                                                                        <i id="carI" class="fa fa-car" style="color: white;
                                                                                        font-size: large;"></i> &nbsp;
                                                                                        <span id="textPrice"
                                                                                            style="color: rgb(247, 240, 240);
                                                                                        font-size: small; font-weight: 900;">Vêhicule(s)</span>
                                                                                        <span class="minus"><i
                                                                                                class="fa-solid fa-minus"></i></span>
                                                                                        <input class="input" type="text"
                                                                                            value="1" />
                                                                                        <span class="plus"><i
                                                                                                class="fa-solid fa-plus"></i></span>
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-11" style="padding-right: 0px;
                                                                                    text-align: right;">
                                                                                        <img style="width:17px;" id="driveI"
                                                                                            src="./assets/images/operatorNew.png"
                                                                                            alt="">
                                                                                        &nbsp;
                                                                                        <span id="driverText"
                                                                                            style="color: rgb(247, 240, 240);
                                                                                        font-size: small;font-weight: 900;">Chauffeur(s)</span>
                                                                                        <span class="minus"><i
                                                                                                class="fa-solid fa-minus"></i></span>
                                                                                        <input class="input" type="text"
                                                                                            value="1" />
                                                                                        <span class="plus"><i
                                                                                                class="fa-solid fa-plus"></i></span>
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-11"
                                                                                        style="    padding-right: 0px;text-align: right;">
                                                                                        <img style="width:38px;" id="operatorI"
                                                                                            src="./assets/images/operator_white.png"
                                                                                            alt="">
                                                                                        &nbsp;
                                                                                        <span id="operatorText"
                                                                                            style="color: rgb(247, 240, 240);
                                                                                        font-size: small;font-weight: 900;">Utilisateur(s)</span>
                                                                                        <span class="minus"><i
                                                                                                class="fa-solid fa-minus"></i></span>
                                                                                        <input class="input" type="text"
                                                                                            value="1" />
                                                                                        <span class="plus"><i
                                                                                                class="fa-solid fa-plus"></i></span>
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <button
                                                                            style="background: linear-gradient(#f66, #c00) !important;color: #fff;border: none;padding: 6px 14px;margin-top: 7px;border-radius: 8px;border: 1px solid #fff;font-weight: 700;-webkit-text-stroke: 0.3px currentColor;word-spacing: 0px;letter-spacing: 2px;">Sectionner
                                                                            ce Forfait </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="product1-name" class="pricing-title"
                                                            style="width: 65%;background-image: linear-gradient(to bottom, #FF18E3, #FE77DE);">
                                                            eCab START</div>
                                                        <div id="product1-price">
                                                            <div class="pricing-price" style=" font-size: 25px;">
                                                                €127,00
                                                                <span style="font-weight:700; font-size: 20px;">
                                                                    Par mois
                                                                </span>
                                                                <br><br>
                                                                <span id="old" class="pricing-price old-price pricesh"
                                                                    style="padding-right: 10px;text-decoration: line-through;font-weight:bold;display:inline;">€127,00
                                                                </span>
                                                                <span class="pricing-rate pricesh"
                                                                    style="padding: 0 5px;border: 1px solid white;border-radius: 5px;font-weight: 900;background: linear-gradient(#f66, #c00) !important;">
                                                                    -20%
                                                                </span>

                                                            </div>
                                                            <div class="setup-fee">
                                                                €497,00 Frais d'installation
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="pricing-details">
                                                        <p id="product4-description">
                                                            <p style="text-align:left"> <img
                                                                    src="assets/images/right.png" alt=""> Web
                                                                application tout en un ECab™
                                                            </p>
                                                            <p class="gray" style="text-align:left"><img
                                                                    src="assets/images/right.png"
                                                                    alt="">Parametrage du
                                                                siteweb</p>
                                                            <p style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Ajout du
                                                                contenu du siteweb
                                                                fournie par le client (textes,logo, images,... ), sinon
                                                                création de contenu en option sur la page suivante</p>
                                                            <p class="gray" style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Formation
                                                                de prise
                                                                en main de 1h</p>
                                                            <p style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Dépôt de
                                                                Copyright du siteweb</p>
                                                            <p class="gray" style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Conformité
                                                                au RGPD
                                                            </p>
                                                            <p style="text-align:left"><img
                                                                    src="assets/images/right.png"
                                                                    alt="">Déclaration auprés de la CNIL</p>
                                                            <p class="gray" style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Mis à
                                                                jours
                                                                (incluses)</p>
                                                            <p style="text-align:left"><img
                                                                    src="assets/images/right.png"
                                                                    alt="">Hebergement web (inclus)</p>
                                                            <p class="gray" style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Support
                                                                (inclus)</p>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                        <li id="product2" class="col-md-3 changeClass">
                                            <div class="pricing-box pricing-box-simple pricing-color2"
                                                style="width: 100%">
                                                <div class="pricing-content priceColor2 pricingColors"
                                                    style="    border: 2px solid red;border-radius: 13px;">
                                                    <div class="pricing-head" style="padding-bottom: 136px;">
                                                        <div class="custom-plan-box planeBoxNewStyle">
                                                            <div class="price-list">
                                                                <div class="number">
                                                                    <div class="row">
                                                                        <div class="controlle">
                                                                            <div class="col-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-11" style="padding-right: 0px;
                                                                                    text-align: right;">
                                                                                        <i id="carI" class="fa fa-car" style="color: white;
                                                                                        font-size: large;"></i> &nbsp;
                                                                                        <span id="textPrice"
                                                                                            style="color: rgb(247, 240, 240);
                                                                                        font-size: small; font-weight: 900;">Vêhicule(s)</span>
                                                                                        <span class="minus"><i
                                                                                                class="fa-solid fa-minus"></i></span>
                                                                                        <input class="input" type="text"
                                                                                            value="1" />
                                                                                        <span class="plus"><i
                                                                                                class="fa-solid fa-plus"></i></span>
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-11" style="padding-right: 0px;
                                                                                    text-align: right;">
                                                                                        <img style="width:17px;" id="driveI"
                                                                                            src="./assets/images/operatorNew.png"
                                                                                            alt="">
                                                                                        &nbsp;
                                                                                        <span id="driverText"
                                                                                            style="color: rgb(247, 240, 240);
                                                                                        font-size: small;font-weight: 900;">Chauffeur(s)</span>
                                                                                        <span class="minus"><i
                                                                                                class="fa-solid fa-minus"></i></span>
                                                                                        <input class="input" type="text"
                                                                                            value="1" />
                                                                                        <span class="plus"><i
                                                                                                class="fa-solid fa-plus"></i></span>
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-11"
                                                                                        style="    padding-right: 0px;text-align: right;">
                                                                                        <img style="width:38px;" id="operatorI"
                                                                                            src="./assets/images/operator_white.png"
                                                                                            alt="">
                                                                                        &nbsp;
                                                                                        <span id="operatorText"
                                                                                            style="color: rgb(247, 240, 240);
                                                                                        font-size: small;font-weight: 900;">Utilisateur(s)</span>
                                                                                        <span class="minus"><i
                                                                                                class="fa-solid fa-minus"></i></span>
                                                                                        <input class="input" type="text"
                                                                                            value="1" />
                                                                                        <span class="plus"><i
                                                                                                class="fa-solid fa-plus"></i></span>
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <button
                                                                            style="background: linear-gradient(#f66, #c00) !important;color: #fff;border: none;padding: 6px 14px;margin-top: 7px;border-radius: 8px;border: 1px solid #fff;font-weight: 700;-webkit-text-stroke: 0.3px currentColor;word-spacing: 0px;letter-spacing: 2px;">Sectionner
                                                                            ce Forfait </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="product2-name" class="pricing-title"
                                                            style="background: linear-gradient(to bottom,#44c0e5 0%,#35add1 39%,#0d85a8 100%) !important; width: 55%;">eCab PRO</div>
                                                        <div class="ribbon"><span
                                                                style="background: linear-gradient(to bottom,#44c0e5 0%,#35add1 39%,#0d85a8 100%) !important;">Populaire</span>
                                                        </div>
                                                        <div id="product2-price">
                                                            <div class="pricing-price" style=" font-size: 25px;">
                                                                €317,00
                                                                <span style="font-weight:700; font-size: 20px;"> Par
                                                                    mois</span>
                                                                <br><br>
                                                                <span id="old" class="pricing-price old-price pricesh"
                                                                    style="padding-right: 10px;text-decoration: line-through;font-weight:bold;display:inline;">€317,00</span>
                                                                <span class="pricesh"
                                                                    style="padding: 0 5px;border: 1px solid white;border-radius: 5px;font-weight: 900;background: linear-gradient(#f66, #c00) !important;">-20%</span>
                                                            </div>

                                                            <div class="setup-fee">
                                                                €997,00 Frais d'installation
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pricing-details" style="padding-bottom: 10px;">
                                                        <p id="product4-description" style="text-align:left">
                                                            <p style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Web
                                                                application tout en un ECab™
                                                            </p>
                                                            <p class="gray" style="text-align:left;">
                                                                <img src="assets/images/right.png"
                                                                    alt="">Parametrage du siteweb </p>
                                                            <p class="gray" style=""><img
                                                                    src="assets/images/right.png" alt="">Ajout
                                                                du contenu du siteweb fournie par le client
                                                                (textes,logo, images,... ), sinon création de contenu en
                                                                option sur la page suivante</p>
                                                            <p class="gray" style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Formation
                                                                de prise
                                                                en main de 1h</p>
                                                            <p style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Dépôt de
                                                                Copyright du siteweb</p>
                                                            <p class="gray" style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Conformité
                                                                au RGPD
                                                            </p>
                                                            <p style="text-align:left"><img
                                                                    src="assets/images/right.png"
                                                                    alt="">Déclaration auprés de la CNIL</p>
                                                            <p class="gray" style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Mis à
                                                                jours
                                                                (incluses)</p>
                                                            <p style="text-align:left"><img
                                                                    src="assets/images/right.png"
                                                                    alt="">Hebergement web (inclus)</p>
                                                            <p class="gray" style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Support
                                                                (inclus)</p>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                        <li id="product3" class="col-md-3 changeClass priceDivActive">
                                            <div class="pricing-box pricing-box-simple pricing-color3"
                                                style="width: 100%">
                                                <div class="pricing-content priceColor3 pricingColors">
                                                    <div class="pricing-head" style="padding-bottom: 136px;">
                                                        <div id="product3-name" class="pricing-title"
                                                            style="width:75%; background: linear-gradient(#ff6666, #cc0000) !important;">eCab BUSINESS
                                                        </div>
                                                        <div id="product3-price">
                                                            <div class="pricing-price" style=" font-size: 25px;">
                                                                €507,00
                                                                <span style="font-weight:700; font-size: 20px;"> Par
                                                                    mois</span>
                                                                    <br><br>
                                                                <span id=" old" class="pricing-price old-price pricesh"
                                                                    style="padding-right: 10px;text-decoration: line-through;font-weight:bold;display:inline;">€507,00</span>
                                                                <span class="pricesh"
                                                                    style="padding: 0 5px;border: 1px solid white;border-radius: 5px;font-weight: 900;background: linear-gradient(#f66, #c00) !important;">-20%</span>
                                                            </div>
                                                            <div class=" setup-fee">
                                                                €1497,00 Frais d'installation
                                                            </div>
                                                        </div>
                                                        <div class="custom-plan-box planeBoxNewStyle">
                                                            <div class="price-list">
                                                                <div class="number">
                                                                    <div class="row">
                                                                        <div class="controlle">
                                                                            <div class="col-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-11" style="padding-right: 0px;
                                                                                    text-align: right;">
                                                                                        <i id="carI" class="fa fa-car" style="color: white;
                                                                                        font-size: large;"></i> &nbsp;
                                                                                        <span id="textPrice"
                                                                                            style="color: rgb(247, 240, 240);
                                                                                        font-size: small; font-weight: 900;">Vêhicule(s)</span>
                                                                                        <span class="minus"><i
                                                                                                class="fa-solid fa-minus"></i></span>
                                                                                        <input class="input" type="text"
                                                                                            value="1" />
                                                                                        <span class="plus"><i
                                                                                                class="fa-solid fa-plus"></i></span>
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-11" style="padding-right: 0px;
                                                                                    text-align: right;">
                                                                                        <img style="width:17px;" id="driveI"
                                                                                            src="./assets/images/operatorNew.png"
                                                                                            alt="">
                                                                                        &nbsp;
                                                                                        <span id="driverText"
                                                                                            style="color: rgb(247, 240, 240);
                                                                                        font-size: small;font-weight: 900;">Chauffeur(s)</span>
                                                                                        <span class="minus"><i
                                                                                                class="fa-solid fa-minus"></i></span>
                                                                                        <input class="input" type="text"
                                                                                            value="1" />
                                                                                        <span class="plus"><i
                                                                                                class="fa-solid fa-plus"></i></span>
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-11"
                                                                                        style="    padding-right: 0px;text-align: right;">
                                                                                        <img style="width:38px;" id="operatorI"
                                                                                            src="./assets/images/operator_white.png"
                                                                                            alt="">
                                                                                        &nbsp;
                                                                                        <span id="operatorText"
                                                                                            style="color: rgb(247, 240, 240);
                                                                                        font-size: small;font-weight: 900;">Utilisateur(s)</span>
                                                                                        <span class="minus"><i
                                                                                                class="fa-solid fa-minus"></i></span>
                                                                                        <input class="input" type="text"
                                                                                            value="1" />
                                                                                        <span class="plus"><i
                                                                                                class="fa-solid fa-plus"></i></span>
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <button
                                                                            style="background: linear-gradient(#f66, #c00) !important;color: #fff;border: none;padding: 6px 14px;margin-top: 7px;border-radius: 8px;border: 1px solid #fff;font-weight: 700;-webkit-text-stroke: 0.3px currentColor;word-spacing: 0px;letter-spacing: 2px;">Sectionner
                                                                            ce Forfait </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pricing-details" style="height: 415px;">
                                                        <p id="product4-description" style="text-align:left">
                                                            <p style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Web
                                                                application tout en un ECab™
                                                            </p>
                                                            <p class="gray" style="text-align:left;">
                                                                <img src="assets/images/right.png"
                                                                    alt="">Parametrage du siteweb </p>

                                                            <p class="gray" style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Formation
                                                                de prise
                                                                en main de 1h</p>
                                                            <p style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Dépôt de
                                                                Copyright du siteweb</p>
                                                            <p class="gray" style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Conformité
                                                                au RGPD
                                                            </p>
                                                            <p style="text-align:left"><img
                                                                    src="assets/images/right.png"
                                                                    alt="">Déclaration auprés de la CNIL</p>
                                                            <p class="gray" style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Mis à
                                                                jours
                                                                (incluses)</p>
                                                            <p style="text-align:left"><img
                                                                    src="assets/images/right.png"
                                                                    alt="">Hebergement web (inclus)</p>
                                                            <p class="gray" style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Support
                                                                (inclus)</p>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                        <li id="product4" class="col-md-3 changeClass">
                                            <div class="pricing-box pricing-box-simple pricing-color1"
                                                style="width: 100%;">
                                                <div class="pricing-content priceColor1 pricingColors">
                                                    <div class="pricing-head" style="padding-bottom: 0px;height:0">
                                                        <div id="product4-name" class="pricing-title"
                                                            style="text-transform: uppercase">récapitulatif</div>
                                                    </div>
                                                    <div class="box-content"
                                                        style="background: linear-gradient(#ff6666, #cc0000) !important; border-radius:8px">
                                                        <table
                                                            style="width: 100%; background: transparent linear-gradient(#fbfbfb,#ececec,#cecece);">
                                                            <tr>
                                                                <td style="text-align: left; padding-left: 10px; ">
                                                                    <strong class>Accêsà l'application</strong></td>
                                                                <td>1</td>
                                                                <td style="text-align: right">127,00 €</td>
                                                            </tr>
                                                           
                                                            <tr>
                                                                <td style="text-align: left; padding-left: 10px;">
                                                                    <strong>Vêhicule(s)</strong></td>
                                                                <td id="car">10</td>
                                                                <td style="text-align: right">300 €</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left; padding-left: 10px;">
                                                                    <strong>Conducteur(s)</strong></td>
                                                                <td id="conductor">7</td>
                                                                <td style="text-align: right">210 €</td>
                                                            </tr>
                                                            <tr id="subtotal">
                                                                <td style="text-align: left; padding-left: 10px;">
                                                                    <strong>Utilisateur(s)</strong></td>
                                                                <td id="operate">3</td>
                                                                <td style="text-align: right">90 €</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: left; padding-left: 10px;">
                                                                    <strong>Sous-Total (HT)</strong></td>
                                                                <td></td>
                                                                <td style="text-align: right">600 €</td>
                                                            </tr>
                                                            <tr id="subtotal">
                                                                <td id="reduction" style="text-align: left; padding-left: 10px;">
                                                                    <strong>Réduction (20%)</strong></td>
                                                                <td></td>
                                                                <td style="text-align: right">200</td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td style="text-align: left; padding-left: 10px;">
                                                                    <strong>Sous-Total (HT)</strong></td>
                                                                <td></td>
                                                                <td style="text-align: right">100</td>
                                                            </tr>
                                                            
                                                             <tr>
                                                                <td style="text-align: left; padding-left: 10px;">
                                                                    <strong class>Frais d'installation</strong></td>
                                                                <td>1</td>
                                                                <td style="text-align: right">497,00 €</td>
                                                            </tr>
                                                            <tr id="subtotal">
                                                                <td id="reduction" style="text-align: left; padding-left: 10px;">
                                                                    <strong>Réduction (50%)</strong></td>
                                                                <td></td>
                                                                <td style="text-align: right">200</td>
                                                            </tr>
                                                            <tr id="subtotal">
                                                                <td style="text-align: left; padding-left: 10px;">
                                                                    <strong>TVA (20%)</strong></td>
                                                                <td></td>
                                                                <td style="text-align: right">120 €</td>
                                                            </tr>
                                                            <tfoot
                                                                style="    background: linear-gradient(#ff6666, #cc0000) !important;color: white;padding: 5px 2px;display: block;">
                                                                <tr id="back">
                                                                    <td style="text-align: left; padding: 3px;color: #000 !important;">
                                                                        <strong
                                                                            style="font-size: 14px;color: #000;">Total
                                                                            (TTC)</strong>
                                                                    </td>

                                                                        <td
                                                                        style="text-align: right;color: #000 !important;font-size: 15px;font-weight: bold;padding: 0px;">
                                                                        510 €
                                                                    </td>
                                                                    <td
                                                                        style="color: #000 !important;font-weight: bold;padding: 5px;">
                                                                        À Payer aujourd'hui
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr id="paynow">
                                                                    <td
                                                                        style="text-align: right; font-size: large; font-weight:bold">
                                                                        510 €</td>
                                                                    <td style="font-weight:bold">To Pay Now</td>
                                                                    <td style="text-align: right"></td>
                                                                </tr> -->
                                                                <tr id="each">
                                                                    <td style="text-align: right"></td>
                                                                    <td id="five"
                                                                        style="text-align: right; font-size: 15px; font-weight:bold;color: #000 !important;padding: 7px;">
                                                                        510 €</td>
                                                                    <td
                                                                        style="font-weight:bold;color: #000 !important;padding: 3px;">
                                                                        À Payer chaque mois</td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                        <a href="https://web.archive.org/web/20240221211645/https://ecab.io/login"
                                                            class="ybtn" id="product1-order-button"
                                                            style="color: white;width: 84%;background: linear-gradient(#9fe925, #558407);border: 1px solid #fff;font-weight: 600;margin-top: 9px;margin-bottom: 15px;">
                                                            Commander
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>




@include('front.common.footer')