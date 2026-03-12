@include('front.common.header')
<style>
    div#status {
        margin-top: 200px;
        margin-bottom: 162px;
    }

    td#rightGreen,
    td#wrongRed {
        width: 50px;
        height: 50px;
        position: relative;
    }

    td#rightGreen img,
    td#wrongRed img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    th {
        width: 200px;
        text-align: center;
        font-weight: 700;
        background: transparent linear-gradient(#fbfbfb, #ececec, #cecece) repeat scroll 0 0;
    }

    table,
    tr,
    th,
    td {
        border: 1px solid gray;
        border-collapse: collapse;
    }

    td.  {
        background: var(--light-blue);
    }

    td.  {
        background: var(--dark-blue);
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


    .service-title .down-arrow {
        position: absolute;
        right: 6px;
        top: 7px;
    }

    .down-arrow i {
        font-weight: 800;
        font-size: 21px;
    }

    #wrongRed {
        position: relative;
        z-index: 1;
    }

    #wrongRed::before {
        position: absolute;
        content: "";
        background: linear-gradient(#ff6666, #cc0000) !important;
        width: 30px;
        height: 30px;
        border-radius: 100%;
        left: 40%;
        top: 9px;
        z-index: -1;
        border: 1px solid #fff;
    }

    #rightGreen {
        position: relative;
        z-index: 1;
    }

    #rightGreen::after {
        position: absolute;
        content: "";
        background: linear-gradient(#9fe925, #558407) !important;
        width: 30px;
        height: 30px;
        border-radius: 100%;
        left: 40%;
        top: 11px;
        z-index: -1;
        border: 1px solid #fff;
    }

    .service_box {
        margin-bottom: 15px;
    }
    td{
        text-align: center;
    }
    .darkBlue{
        background: var(--dark-blue);
    }
    .lightBlue{
        background: var(--light-blue);
    }
    td {
    font-size: 14px;
    color: #000;
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
                            <li class="active" style="">Etat du service</li>
                        </ol>
                    </div>
                </div>
                <section class="service">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-9">
                                <div id="sericeEtat">
                                    <div class="service_box service_box1">
                                        <div class="service-title">
                                            <i class="fa-solid fa-angle-right"></i>
                                            Incidents touchant l'état du service du 26/11/2025
                                            <div class="down-arrow">
                                                <i class="fa-solid fa-angle-up"></i>
                                            </div>
                                        </div>
                                        <table>
                                            <tr>
                                                <th>5 Incidents</th>
                                                <th>5 Ouverts</th>
                                                <th>Heure</th>
                                                <th>3 Programmés</th>
                                                <th>Heure</th>
                                                <th>2 Résolus</th>
                                            </tr>

                                            <tr class="darkBlue">
                                                <td class=" ">problem 1</td>
                                                <td class=" " id="rightGreen"><img src="assets/images/right.png"
                                                        alt="" loading="lazy"> </td>
                                                <td>10:39</td>
                                                <td class=" " id="wrongRed"><img src="assets/images/cross.png"
                                                        alt="" loading="lazy"></td>
                                                <td>10:39</td>
                                                <td id="wrongRed" class=" "><img src="assets/images/cross.png"
                                                        alt="" loading="lazy"></td>
                                            </tr>
                                            <tr class="lightBlue">
                                                <td class=" ">problem 2</td>
                                                <td class=" " id="rightGreen"><img src="assets/images/right.png"
                                                        alt="" loading="lazy"> </td>
                                                <td>10:39</td>
                                                <td class=" " id="rightGreen"><img src="assets/images/right.png"
                                                        alt="" loading="lazy"></td>
                                                <td>10:39</td>
                                                <td id="rightGreen" class=" "><img src="assets/images/right.png"
                                                        alt="" loading="lazy"></td>
                                            </tr>
                                            <tr class="darkBlue">
                                                <td class=" ">problem 3</td>
                                                <td class=" " id="rightGreen"><img src="assets/images/right.png"
                                                        alt="" loading="lazy"></td>
                                                <td>10:39</td>
                                                <td class=" " id="wrongRed"><img src="assets/images/cross.png"
                                                        alt="" loading="lazy"></td>
                                                <td>10:39</td>
                                                <td id="wrongRed" class=" "><img src="assets/images/cross.png"
                                                        alt="" loading="lazy"></td>
                                            </tr>
                                            <tr class="lightBlue">
                                                <td class=" ">problem 4</td>
                                                <td class=" " id="rightGreen"><img src="assets/images/right.png"
                                                        alt="" loading="lazy"> </td>
                                                <td>10:39</td>
                                                <td class=" " id="rightGreen"><img src="assets/images/right.png"
                                                        alt="" loading="lazy"></td>
                                                <td>10:39</td>
                                                <td id="rightGreen" class=" "><img src="assets/images/right.png"
                                                        alt="" loading="lazy"></td>
                                            </tr>
                                            <tr class="darkBlue">
                                                <td class=" ">problem 5</td>
                                                <td class=" " id="rightGreen"><img src="assets/images/right.png"
                                                        alt="" loading="lazy"> </td>
                                                <td>10:39</td>
                                                <td class=" " id="rightGreen"><img src="assets/images/right.png"
                                                        alt="" loading="lazy"></td>
                                                <td>10:39</td>
                                                <td id="wrongRed" class=" "><img src="assets/images/cross.png"
                                                        alt="" loading="lazy"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="service_box service_box2">
                                        <div class="service-title">
                                            <i class="fa-solid fa-angle-right"></i>
                                            Incidents affectants l'état du service du 13/02/2024
                                            <div class="down-arrow">
                                                <i class="fa-solid fa-angle-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service_box service_box3">
                                        <div class="service-title">
                                            <i class="fa-solid fa-angle-right"></i>
                                            Incidents affectants l'état du service du 05/02/2024
                                            <div class="down-arrow">
                                                <i class="fa-solid fa-angle-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service_box service_box4">
                                        <div class="service-title">
                                            <i class="fa-solid fa-angle-right"></i>
                                            Incidents affectants l'état du service du 25/01/2024
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
                </section>
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
