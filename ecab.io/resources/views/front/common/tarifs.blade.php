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

    span.minus i,
    span.plus i {
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

    tr#back {
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

    .btn-group>.btn:last-child:not(:first-child),
    .btn-group>.dropdown-toggle:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        position: relative;
        padding: 9px;
    }

    div#tarifs {
        margin-top: 30px;
    }

    #price_top {
        position: relative;
        display: inline-block;
        left: -149px;
        background: linear-gradient(to bottom, #44c0e5 0%, #35add1 39%, #0d85a8 100%) !important;
        height: 37px;
    }

    .col-md-12.pull-center.custom-swith-button-area.text-center {
        display: flex;
        flex-direction: row-reverse;
        margin-top: 37px;
    }

    tfoot td {
        padding: 8px !important;
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


    .col-md-12.pull-center.custom-swith-button-area.text-center {
        display: flex;
        flex-direction: row-reverse;
        margin-top: 39px;
    }

    label {
        margin-top: 0px !important;
        line-height: 0px !important;
        margin-bottom: 0px !important;
    }

    .container-fluid.p-main {
        margin-top: 19px;
    }

    .h2_svg span {
        display: inline-block;
        margin-top: 17px;
    }
</style>
<hr class="lg">

<div id="tarifs" style="scroll-margin-top: 250px">
    <section id="main-body">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 main-content">
                    <!-- <button type="button" class="btn btn-default btn-sm" id="btnShowSidebar">
                        <i class="fas fa-arrow-circle-right"></i>
                        Afficher le Menu
                    </button>
                    <div class="col-md-12 pull-md-right">
                        <div class="header-lined">
                            <ol class="breadcrumb">
                                <li class=""><a
                                        href="https://web.archive.org/web/20240221211645/https://ecab.io/">Accueil</a>
                                </li>
                                <li class="active">Plans</li>
                            </ol>
                        </div>
                    </div> -->
                    <div class="container-fluid p-main">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="row-title">Choisissez votre abonnement</div>
                                    <div id="tarifAnim"
                                        class="h2_svg animate__animated animate__faster animate__zoomInRight"
                                        data-animate-class="animate__zoomInRight"
                                        style="animation-delay: 400ms; text-align: center">
                                        <span style="fill:red; width:22rem;"> <svg version="1.1" id="h2svg19"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 500 50" style="enable-background:new 0 0 500 50;"
                                                xml:space="preserve">
                                                <g>
                                                    <path d="M406.7,18.5c2.8,0.5,5.7,1.1,8.5,1.6c0,0.1,0.1,0.2,0.1,0.3c-2.1,0.3-4.3,0.6-6.4,0.9c-2.2,0.3-4.4,0.8-6.6,0.9
      		c-4.4,0.3-8.8,0.5-13.2,0.6c-10.8,0.2-21.6,0.4-32.5,0.8c2.6,0.1,5.3,0.2,7.9,0.4c19.7,1.3,39.4,2.4,59,3.9
      		c19,1.5,37.8,3.4,56.6,5.3c3.5,0.3,6.9,1,10.3,1.6c2.6,0.4,3.1,1.4,3.1,2.6c0,1.2-1.9,1.4-3.6,1.6c-2.8,0.5-5.7,0.9-9.1,1.5
      		c1.5,0.9,2.5,1.5,3.6,2.1c-15.8,2.3-31.7,2.1-47.7,1.1c4.6-0.3,9.2-0.6,13.8-0.8c4.7-0.2,9.4-0.3,14.2-0.7
      		c-3.3-0.1-6.6-0.2-9.9-0.3c-6.1-0.2-12.1-0.3-18.2-0.6c-1,0-2.1-0.3-2.9-0.6c-4.1-1.6-9-2.2-13.8-2.8c-2.7-0.4-5.7-0.4-8.5-0.6
      		c-0.6,0-1.5-0.1-1.7-0.3c-1.6-1.6-4.3-0.9-6.7-0.8c-2.6,0.1-5.2,0.3-7.8,0.2c-7.4-0.3-14.8-0.8-22.1-1.3c-1.6-0.1-3.3-0.2-4.8-0.5
      		c10.8-0.4,21.6-0.8,32.5-1.2c0-0.2,0-0.5,0-0.7c-6.4,0-12.7,0-19.1,0c-1,0-2.1,0.2-3.1,0.3c-5.3,0.4-10.7,0.7-16,1.1
      		c-1.5,0.1-3.1,0-4.7-0.3c6.7-1,13.3-2.1,20.7-1.5c0-0.3-0.1-0.6-0.1-0.8c-5.1-0.1-10.2-0.2-15.3-0.3c-1.2,0-2.3,0.1-3.5,0.1
      		c-4.3-0.1-8.6-0.6-12.5,0.8c-0.8,0.3-2.3,0.3-3.4,0.2c-0.8-0.1-1.5-0.5-2.3-0.8c0.7-0.4,1.4-1,2.2-1.1c1.5-0.1,3.1,0.2,4.7,0.3
      		c0.7,0,1.4,0,2.1-0.3c-5.6-0.5-11.3-1-16.9,0.2c-5.1-1.2-10.2-1.2-15.2,0.2c-1.3-0.6-2.5-1.3-3.8-1.9c0,0.2-0.1,0.3-0.1,0.5
      		c-1.2,0.1-2.5,0.4-3.7,0.4c-5,0-9.9-0.1-14.9-0.1c-0.7,0-1.5,0.2-2.2,0.7c1.1,0.2,2.1,0.4,4.1,0.8c-1.6,0.2-2.6,0.5-3.5,0.5
      		c-5.1,0-10.2-0.1-15.3-0.2c-6.8-0.2-13.6-0.5-20.4-0.7c-1,0-2-0.2-3-0.2c0-0.2,0-0.3,0-0.5c1.1,0,2.3-0.1,3.4-0.1
      		c1.2,0,2.4,0,3.5-0.1c0.5-0.1,1.3-0.4,1.3-0.7c0-0.2-0.7-0.7-1.2-0.7c-5.2-0.1-10.4-0.2-15.6-0.3c-0.3,0-0.7,0.3-1,0.5
      		c0.4,0.2,0.8,0.4,1.3,0.5c2,0.3,4.1,0.5,6,1c-39,0-78.1,0-117.1,0c0-0.3,0-0.5,0-0.8c4.6,0,9.1,0,13.7,0c4.5,0,9,0,13.5,0
      		c-1.1-0.9-1.7-1.5-2.5-2c-0.5-0.3-1.4-0.5-2.1-0.8c-0.2,0.1-0.4,0.2-0.6,0.3c0.2,0.5,0.3,1,0.5,1.5c-0.7,0.1-1.3,0.2-1.9,0.2
      		c-9.9,0-19.7,0.1-29.6,0.1c-2.6,0-5.3,0-7.9,0c-0.3,0-0.8,0-0.9,0c-1.9,2-5.9,1.3-9,1.4c-6.8,0.2-13.6,0.1-20.6-0.2
      		c3-0.5,6.1-0.9,9.6-1.5c-5.3-2.7-11.6-1.1-17.2-1.8c1.2-2.1,5.2-1.5,7.8-2c0-0.9,0-1.7,0-2.4c0.3,0.1,0.6,0.2,0.8,0.3
      		c1.6-0.4,3.2-0.8,4.7-1.2c-0.1-0.2-0.1-0.3-0.2-0.5c-0.8-0.1-1.6-0.3-2.8-0.4c0.8-0.2,1.3-0.4,2-0.4c5.6-0.3,11.2-0.7,16.8-1
      		c15-0.7,30.1-1.2,45.1-1.9c14.4-0.7,28.7-1.6,43.2-1.6c8,0,16-0.5,24-0.7c1.5,0,3,0.1,4.6,0.1c0-0.1,0.1-0.2,0.1-0.4
      		c-3-0.2-6.1-0.4-9.1-0.5c-7-0.2-13.9-0.4-20.9-0.5c-4.2-0.1-8.5,0.1-12.7,0.1c-3.2,0-6.3-0.2-9.5-0.2c-7.5-0.1-15,0-22.6-0.1
      		c-1.3,0-2.5-0.2-3.8-0.2c0-0.2,0-0.4,0-0.6c6.4,0,12.8,0,19.2,0c0-0.3,0-0.5,0.1-0.8c-2.3,0-4.7,0.1-7,0c-2.6-0.1-5.1-0.5-7.7-0.7
      		c-1.7-0.1-3.8-0.5-5.1-0.1c-3.2,0.9-6.3,0.2-9.4,0.2c-4.9,0-9.7-0.6-14.4-0.5c-5.4,0.1-10.8,1-16.4,0.4c-0.5,0-1.1,0-1.6,0.1
      		c-4.7,0.8-14.6,0.9-19.4,0.8c-5.7-0.1-11.4,0.2-17,0.4c-2.2,0.1-4.6-0.1-6.6,0.2c-11.8,1.8-23.8,0.3-35.7,0.8c-0.6,0-1.2-0.2-2-0.4
      		c-0.2,0.4-0.3,0.7-0.4,1.1c-0.1,0.2-0.1,0.5-0.2,1.1c4.7-0.1,9.1-0.3,13.4-0.4c-7.9,1.9-16.4,0.7-24.8,1c0.5-1.5,1.7-1.7,6.8-0.9
      		c-0.7-1.3-2.7-1.7-6.1-1.3c-1.6,0.2-3.3,0.4-5,0.4c-0.8,0-1.6-0.5-2.4-0.7c0.9-0.3,1.7-0.7,2.6-0.8c0.7-0.1,1.6,0.2,2.4,0.3
      		c2.7,0.2,4.9,0.1,6.4-1.3c0.5-0.5,2.3-1.1,3.6-1.1c11.5-0.7,23-1.4,34.5-1.8c17.2-0.7,34.3-1.3,51.5-1.7c16.7-0.4,33.3-0.8,50-0.9
      		c20.3-0.1,40.6-0.2,60.9,0.1c21,0.3,42,1.2,63,1.8C293.9,8,306.3,8.5,318.7,9c24.6,1,49.1,2,73.7,3.2c7.8,0.4,15.5,1.2,23.2,1.9
      		c1.2,0.1,2.3,1.1,2.8,1.7c0.2,0.3-1.4,1.1-2.4,1.2c-2.9,0.5-5.9,0.7-8.8,1C406.9,18.2,406.8,18.3,406.7,18.5z M225.2,24.2
      		c1,0.3,1.2,0.4,1.3,0.4c14.7,0.3,29.4,0.6,44.1,1c14.5,0.4,28.9,1,43.4,1.5c2.1,0.1,4.2-0.2,6.3-0.3c0-0.1,0-0.3-0.1-0.4
      		C288.9,24.9,257.5,24.4,225.2,24.2z M243.2,8.6c-1.3-0.4-2.2-0.8-3.1-0.9c-1.9-0.1-3.9,0-5.9-0.1c-3.8-0.1-7.8,1-7.5,2.7
      		c1.3-0.6,2.6-1.2,4.1-2c0.4,0.4,0.7,0.9,1.4,1.2c1.3,0.5,2.8,1.1,4.3,1.2c5.1,0.1,10.2-0.1,15.3-0.2c6.2,0,12.4,0,18.6,0
      		c0-0.1,0-0.3,0.1-0.4C261.1,9.6,251.4,10.7,243.2,8.6z M98.2,9.4c-0.4-0.1-0.5-0.2-0.7-0.2C89.3,9.3,81,9.4,72.8,9.6
      		c-0.8,0-1.6,0.6-2.4,0.9c0.1,0.2,0.2,0.3,0.3,0.5c8.9,0,17.9,0,26.9,0C97.9,10.4,98.1,9.8,98.2,9.4z M200,8.6
      		c5.2,2.4,20.6,1.9,26.3-0.7c-1.5-0.2-2.7-0.5-3.6-0.4c-2.8,0.3-5.5-0.3-8.5,0.7c-2.2,0.8-6.3,0.2-9.5,0.2
      		C203.3,8.4,202,8.5,200,8.6z M112.4,9c0,0.2-0.1,0.3-0.1,0.5c3.3,0.2,6.5,0.6,9.8,0.5c5.8-0.1,11.6-0.5,17.3-0.8
      		c1.7-0.1,3.4-0.4,5-0.7c-0.1-0.2-0.2-0.5-0.3-0.7C133.5,8.4,122.8,7.2,112.4,9z M184.8,27.2c-4.3-0.1-8.2-0.3-12-0.4
      		c-1.8,0-3.6-0.2-5.4,0c-0.8,0.1-1.9,0.8-2,1.2c-0.1,0.3,1.2,1.1,1.9,1.1c5.8,0.1,11.5,0,17.4,0C184.8,28.2,184.8,27.6,184.8,27.2z
      		 M194.1,11.7c-1.1,1.8-5.7-0.5-8.6,1.1c8.3,0.2,15.9,0.5,23.6,0.6c3.7,0.1,7.3-0.2,11-0.3c0-0.2,0-0.5,0-0.7
      		c-4.2-0.2-8.5-0.6-12.8-0.7C203.3,11.6,199.1,11.7,194.1,11.7z M272.3,8.9c-0.2,0.1-0.4,0.2-0.5,0.4c1.5,0.7,2.8,2,4.5,2.1
      		c5.9,0.4,12,0.4,18,0.6c0.4,0,0.8-0.2,1.2-0.4c0-0.1,0-0.3-0.1-0.4c-1.3-0.1-2.6,0-3.7-0.2c-2.6-0.5-7.1,1.4-7.8-1.2
      		C279.8,9.5,276,9.2,272.3,8.9z M390.7,35c9.5,1.4,18.7,0.1,28-1.1c-4.1-0.3-8.2-0.9-12.2-0.7C401.2,33.5,396,34.4,390.7,35z
      		 M411.5,35.7c0,0.2,0.1,0.3,0.1,0.5c3.4,0.5,6.7,1.1,10.4,0.6c1.8-0.2,3.7-0.1,5.5-0.3c1.9-0.2,3.8-0.6,5.6-1
      		c-1.8-0.3-3.6-0.7-5.5-1c-0.3,0-0.6,0-0.9,0c-3.8,0.2-7.6,0.3-11.3,0.6C414.1,35.2,412.8,35.5,411.5,35.7z M145.2,7.9
      		c1.1,0.7,1.6,1.4,2.4,1.5c2.2,0.3,4.5,0.5,6.7,0.4c2.1-0.1,3.9-0.6,6.3-0.3c1.6,0.2,3.5,0,5.3-0.1c0-0.2,0-0.3,0-0.5
      		C159.7,7.1,153,7.4,145.2,7.9z M322.5,26.5c-0.1,0.2-0.1,0.3-0.2,0.5c3.3,0.3,6.5,0.8,9.8,0.9c9.2,0.2,18.5,0.1,27.5,1.2
      		c0.2,0,0.5-0.2,1-0.4C347.9,26.8,335,27.4,322.5,26.5z M33.4,11.4c3.4,0.6,5.9,1,8.5,1.5c0.4,0.1,1,0,1.2-0.1c2-1,4.6-0.7,7.1-0.8
      		c1.7-0.1,3.5-0.2,5.2-0.3c0-0.1,0.1-0.3,0.1-0.4c-1-0.1-2-0.2-2.9-0.3c-2.7-0.1-5.4,0-8-0.2C40.9,10.4,37.5,11,33.4,11.4z M199,9.1
      		c0-0.2,0-0.4,0-0.6c-10.7,0.2-21.3-0.5-32,0.2c0,0.2,0,0.3,0,0.5C177.7,9.1,188.4,9.1,199,9.1z M306,19.7c0-0.2,0-0.4,0-0.6
      		c-5.2,0-10.4,0-16,0C295.5,21.7,300.8,19.8,306,19.7z M243.7,12.5c-0.2,0.3-0.4,0.5-0.7,0.8c1.1,0.4,2.3,1.1,3.4,1
      		c5.4-0.3,10.7-0.7,16-1.2c0-0.3-0.1-0.5-0.1-0.8C256.1,14.4,249.9,12.7,243.7,12.5z M231,14c2.5,1.8,5.7,0.9,9.6,0.9
      		c-2.4-0.4-3.7-0.6-1.7-1.4c2.1-0.8,1.1-1.2-0.7-1.4c-1.3-0.1-2.8,0-4.5,0c0.8,0.8,1.3,1.4,2,2.2C233.8,14.2,232.5,14.1,231,14z
      		 M101.5,11.4c0.4,0,0.8,0,1.2,0c0.7-1.4,2.3-1.7,5-1.3c0.9,0.1,2.3-0.4,3.4-0.6c-2.9-0.4-5.6-0.4-8.3-0.3c-0.8,0-2.3,0.4-2.3,0.7
      		C100.4,10.3,101.1,10.9,101.5,11.4z M278,29c-3.8,0.4-7.7-0.9-11.5,0.3C270.3,29.7,274.2,30.9,278,29z M424.2,32.4
      		c2.7,1.2,5.5,0.7,8.6,0.7C430.2,31.1,427.7,30.9,424.2,32.4z M469.8,35.3c0.1,0,0.2-0.1,0.3-0.1c-4.7-0.5-9.3-0.9-14-1.4
      		c-0.1,0.2-0.3,0.4-0.4,0.6c1.1,0.3,2.2,0.8,3.3,0.9C462.6,35.4,466.2,35.3,469.8,35.3z M426.9,37.1c3.3,1.2,6.6,1.3,10.6,0.3
      		c-1-0.3-1.6-0.6-2.2-0.6C432.5,36.8,429.7,37,426.9,37.1z M275.8,13.2c0,0.2-0.1,0.4-0.1,0.5c4.6,1.1,9.4,0.2,14.1,0.2
      		C285.1,13.6,280.4,13.4,275.8,13.2z M339.7,12.8c3.1,1.5,8.5,1.8,10.6,0.5C346.7,13.1,343.5,13,339.7,12.8z M399.4,29.9
      		c-0.1,0.2-0.2,0.5-0.3,0.7c3.6,0.3,7.1,0.6,10.7,0.9c0.1-0.2,0.2-0.4,0.2-0.6C406.5,30.6,402.9,30.2,399.4,29.9z M233.2,28.2
      		c0,0.2-0.1,0.4-0.1,0.6c3.2,0.2,6.3,0.4,9.5,0.6c0.1-0.2,0.1-0.5,0.2-0.7C239.8,27.9,236.4,28.3,233.2,28.2z M405.9,19
      		c-2.1-0.4-3.7-0.7-5.3-1C402.3,20.4,402.9,20.5,405.9,19z M177.3,13.2c0.1-0.2,0.3-0.4,0.4-0.6c-2.1-1.1-4.8-0.8-7.7-0.4
      		C172.4,12.6,174.9,12.9,177.3,13.2z"></path>
                                                    <path
                                                        d="M87.8,13.5c11.3-0.2,22.5-0.4,33.8-0.6c0,0.3,0,0.6,0,0.9c-11.3,0-22.5,0-33.8,0C87.8,13.7,87.8,13.6,87.8,13.5z">
                                                    </path>
                                                    <path
                                                        d="M42,14.7c7.4-0.2,14.9-0.5,22.3-0.7c0,0.2,0,0.5,0.1,0.7C57,15.6,49.6,15.4,42,14.7z">
                                                    </path>
                                                    <path d="M331.8,32.4c0.7-0.5,1.1-0.9,1.3-0.8c2.2,0.2,3.9-0.1,5.4-0.9c0,0,2,0.7,1.9,0.8c-1.4,1.7,1.2,1.6,3.1,1.7
      		c1.8,0.1,3.7,0.1,5.5,0.3C343.2,34.3,338,32.9,331.8,32.4z"></path>
                                                    <path
                                                        d="M318,32.1c-6.6,0.8-12.6-0.9-19-0.6c0-0.2-0.1-0.3-0.1-0.5c0.5-0.3,0.9-0.6,1-0.7C306.1,31,312,31.5,318,32.1z">
                                                    </path>
                                                    <path
                                                        d="M121.4,29.6c3.7,0,7.5,0,11.2,0c0,0.1,0,0.3,0,0.4c-3.7,0-7.5,0-11.2,0C121.4,29.9,121.4,29.8,121.4,29.6z">
                                                    </path>
                                                    <path
                                                        d="M145.3,12.4c0,1.4-3,1.6-7,0.6C140.7,12.8,142.9,12.6,145.3,12.4z">
                                                    </path>
                                                </g>
                                            </svg></span>
                                    </div>
                                    <div class="row-subtitle">nous offrons un large choix d'abonnements qui s'adapte à
                                        la taille de votre
                                        société de transport de personnes.</div>
                                </div>

                                <!-- <div class="col-md-12" id="abonnement">
                                    <h4>Choisissez votre abonnement</h4>
                                    <p>nous offrons un large choix d'abonnements qui s'adapte à la taille de votre
                                        société de transport de personnes.</p>
                                </div> -->
                                <div class="col-md-12 pull-center custom-swith-button-area text-center">
                                    <div class="form-group text-left marginBottom0"
                                        style=" margin-bottom: -3rem;display: flex;gap: 5px;align-items: center;    margin-top: 0px;">
                                        <label for="promocode" class> Code Promo</label>
                                        <input type="text" class="form-control-plaintext" id="promocode" value
                                            style="border-radius: 7px;height: 30px;width: 91px;">
                                        <button class="btn btn-primary">Appliquer</button>
                                    </div>
                                    <div class="btn-group btn-group-toggle" id="price_top" data-toggle="buttons"
                                        style="border-radius: 8px;">
                                        <label class="btn btn-secondary textBold" value="x"
                                            style="color: #ffffff; padding: 18px 10px;">
                                            <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                            Paiement Mensuel
                                        </label>
                                        <label class="btn btn-secondary textBold" id="trial" value="x"
                                            style="color: #ffffff; padding: 18px 10px;border-right: 2px solid #fff">
                                            <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                            15 Jours d'Essai Gratuit
                                        </label>
                                        <label class="btn btn-secondary active textBold bgGray"
                                            style="border: 1px solid #0091d1" value="y">
                                            <input type="radio" name="options" id="option2" autocomplete="off">Paiement
                                            Annuel <span class="badge badge-pill badge-danger textBold"
                                                style="background: linear-gradient(#ff6666, #cc0000) !important;
                                              color: white;font-weight:bold;border: 2px solid white;margin-left: 10px;font-weight: 900;font-size: 14px;"> -20%</span>
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
                                                                                        <i id="carI" class="fa fa-car"
                                                                                            style="color: white;
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
                                                                                        <img style="width:17px;"
                                                                                            id="driveI"
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
                                                                                        <img style="width:38px;"
                                                                                            id="operatorI"
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
                                                                    src="assets/images/right.png" alt="">Parametrage du
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
                                                                    src="assets/images/right.png" alt="">Déclaration
                                                                auprés de la CNIL</p>
                                                            <p class="gray" style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Mis à
                                                                jours
                                                                (incluses)</p>
                                                            <p style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Hebergement web
                                                                (inclus)</p>
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
                                                                                        <i id="carI" class="fa fa-car"
                                                                                            style="color: white;
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
                                                                                        <img style="width:17px;"
                                                                                            id="driveI"
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
                                                                                        <img style="width:38px;"
                                                                                            id="operatorI"
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
                                                            style="background: linear-gradient(to bottom,#44c0e5 0%,#35add1 39%,#0d85a8 100%) !important; width: 55%;">
                                                            eCab PRO</div>
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
                                                                <img src="assets/images/right.png" alt="">Parametrage du
                                                                siteweb </p>
                                                            <p class="gray" style=""><img src="assets/images/right.png"
                                                                    alt="">Ajout
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
                                                                    src="assets/images/right.png" alt="">Déclaration
                                                                auprés de la CNIL</p>
                                                            <p class="gray" style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Mis à
                                                                jours
                                                                (incluses)</p>
                                                            <p style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Hebergement web
                                                                (inclus)</p>
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
                                                            style="width:75%; background: linear-gradient(#ff6666, #cc0000) !important;">
                                                            eCab BUSINESS
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
                                                                                        <i id="carI" class="fa fa-car"
                                                                                            style="color: white;
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
                                                                                        <img style="width:17px;"
                                                                                            id="driveI"
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
                                                                                        <img style="width:38px;"
                                                                                            id="operatorI"
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
                                                                <img src="assets/images/right.png" alt="">Parametrage du
                                                                siteweb </p>

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
                                                                    src="assets/images/right.png" alt="">Déclaration
                                                                auprés de la CNIL</p>
                                                            <p class="gray" style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Mis à
                                                                jours
                                                                (incluses)</p>
                                                            <p style="text-align:left"><img
                                                                    src="assets/images/right.png" alt="">Hebergement web
                                                                (inclus)</p>
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
                                                                <td id="reduction"
                                                                    style="text-align: left; padding-left: 10px;">
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
                                                                <td id="reduction"
                                                                    style="text-align: left; padding-left: 10px;">
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
                                                                    <td
                                                                        style="text-align: left; padding: 3px;color: #000 !important;">
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
    </section>
</div>
