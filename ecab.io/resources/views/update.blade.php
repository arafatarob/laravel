@include('front.common.header')

<style>
    .mises-title {
        background: transparent linear-gradient(#fbfbfb, #ececec, #cecece) repeat scroll 0 0;
        padding: 8px 3px;
        color: #000;
        font-weight: 500;
        font-size: 18px;
        position: relative;
    }

    .mises-title .down-arrow {
        position: absolute;
        right: 6px;
        top: 7px;
    }

    .down-arrow i {
        font-weight: 800;
        font-size: 21px;
    }

    .image-area img {
        width: 22px;
        position: relative;
        z-index: 1;
    }


    .image-area::after {
        position: absolute;
        content: "";
        background: linear-gradient(#9fe925, #558407) !important;
        width: 30px;
        height: 30px;
        border-radius: 100%;
        left: 11px;
        top: 2px;
        z-index: 0;
        border: 1px solid #fff;
    }

    .mises-items1 {
        display: flex;
        flex-direction: column;
        margin-top: 10px;
        gap: 9px;
    }

    .mises-items {
        margin-top: 7px;
        margin-bottom: 17px;
    }

    .btn {
        background: transparent linear-gradient(#fbfbfb, #ececec, #cecece) repeat scroll 0 0;
        color: #000;
        font-weight: 400;
        padding: 8px 20px;
    }

    .service-title {
        background: transparent linear-gradient(#fbfbfb, #ececec, #cecece) repeat scroll 0 0;
        padding: 8px 3px;
        color: #000;
        font-weight: 500;
        font-size: 18px;
        position: relative;
    }

    .service-btn {
        text-align: right;
        position: relative;
    }

    .image-area p {
        display: inline-block;
        margin-left: 10px;
        padding: 0;
        height: 100%;
        margin-bottom: 0;
        color: #000;
    }

    .image-area {
        display: flex;
        align-items: center;
    }

    .misesItems {
        border: 2px solid #0091d1;
        background: var(--dark-blue);
        height: 127px;
        padding: 3px 0px;
        display: flex;
        flex-direction: column;
        gap: 10px;
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
                            <li class="active" style="">Mises à jour</li>
                        </ol>
                    </div>
                </div>

                <div class="mises-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mises">
                                    <div class="mises-items mises-item1">
                                        <div class="mises-title">
                                            <i class="fa-solid fa-angle-right"></i>
                                            Mises à jour du 24/11/2025
                                            <div class="down-arrow">
                                                <i class="fa-solid fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <div class="misesItems1 misesItems">
                                            <div class="inner-mises1 inner">
                                                <div class="image-area col-md-12">
                                                    <img src="assets/images/right.png" alt="" loading="lazy">
                                                    <p>consectetur adipisicing elit. Praesentium dolor illo expedita
                                                        ipsum, numquam in quisquam ad. Animi, quam reprehenderit.</p>
                                                </div>
                                            </div>
                                            <div class="inner-mises2 inner">
                                                <div class="image-area col-md-12">
                                                    <img src="assets/images/right.png" alt="" loading="lazy">
                                                    <p>consectetur adipisicing elit. Praesentium dolor illo expedita
                                                        ipsum, numquam in quisquam ad. Animi, quam reprehenderit.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="inner-mises3 inner">
                                                <div class="image-area col-md-12">
                                                    <img src="assets/images/right.png" alt="" loading="lazy">
                                                    <p>consectetur adipisicing elit. Praesentium dolor illo
                                                        expedita ipsum, numquam in quisquam ad. Animi, quam
                                                        reprehenderit.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mises-items mises-item2">
                                        <div class="mises-title">
                                            <i class="fa-solid fa-angle-right"></i>
                                            Mises à jour 30/11/2025
                                            <div class="down-arrow">
                                                <i class="fa-solid fa-angle-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mises-items mises-item3">
                                        <div class="mises-title">
                                            <i class="fa-solid fa-angle-right"></i>
                                            Mises à jour 05/12/2025
                                            <div class="down-arrow">
                                                <i class="fa-solid fa-angle-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="service-btn">
                                    <div class="btn service-btn-one"> <i class="fa-solid fa-angle-left"></i>
                                        Page Précédente </div>
                                    <div class="btn service-btn-two"> Page Suivante <i
                                            class="fa-solid fa-angle-right"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</div>


@include('front.common.footer')

<!-- 
<hr class="lg">
<div id="more-features" class="container-fluid">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="row-title">Our Promise</div>
<div class="row-subtitle">Your satisfaction is guaranteed. Indeed.</div>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-md-4">
<div class="mfeature-box">
<div class="mfeature-icon">
<i class="htfy htfy-trophy"></i>
</div>
<div class="mfeature-title">%99.9 Uptime</div>
<div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
</div>
</div>
<div class="col-sm-6 col-md-4">
<div class="mfeature-box">
<div class="mfeature-icon">
<i class="htfy htfy-like"></i>
</div>
<div class="mfeature-title">Money Back Guarantee</div>
<div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
</div>
</div>
<div class="col-sm-12 col-md-4">
<div class="mfeature-box">
<div class="mfeature-icon">
<i class="htfy htfy-cogwheel"></i>
</div>
<div class="mfeature-title">Best Support</div>
<div class="mfeature-details">Mauris at libero sed justo pretium maximus ac non ex. Donec sit amet ultrices dolo.</div>
</div>
</div>
</div>
</div>
</div>
<div id="message2" class="container-fluid message-area normal-bg boxed">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-6">
<div class="text-other-color1">Êtes-vous prêt ?</div>
<div class="text-other-color2">créer un compte, ou nous contacter.</div>
</div>
<div class="col-sm-12 col-md-6">
<div class="buttons-holder">
<a style="border: 1px solid;" href="https://ecab.io/prices" class="ybtn ybtn-header-color"><span style="font-weight: 700; opacity: 0; animation: opacityOn 1.2s ease-in-out forwards infinite; animation-delay: 1s;" >COMMENCER MAINTENANT</span></a>
</div>
</div>
</div>
</div>
</div> -->
