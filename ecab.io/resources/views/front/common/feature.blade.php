<style>
    /* Nouveaux sélecteurs avec le préfixe 'ft-new-' */
    #ft-new-features {
        margin: 0 auto 20px;
        width: 100%;
    }

    #ft-new-features .ft-new-box {
        float: left;
        margin: 0 5% 0 0;
        padding: 10px 0;
        width: 47.5%;
    }

    #ft-new-features .ft-new-box1,
    #ft-new-features .ft-new-box2,
    #ft-new-features .ft-new-box3,
    #ft-new-features .ft-new-box4 {
        margin-right: 0;
    }

    .ft-new-row-title {
        text-align: center;
        font-size: 30px;
        font-weight: 700;
        color: #0093D6;
        position: relative;
        margin-top: 30px;
        margin-top: 0;
        margin-bottom: -4px;
        text-transform: capitalize;
        font-family: Satisfy, cursive;
        font-weight: 400;
        font-style: normal;
    }

    #ft-new-features .ft-new-image {
        float: left;
        margin-right: 3%;
        width: 15%;
    }

    #ft-new-features .ft-new-text {
        float: left;
        width: 75%;
    }

    #ft-new-features h3 {
        font-size: 1.3em;
        font-weight: normal;
        line-height: 18px;
        margin: 0 0 10px;
        padding: 0;
        text-align: left;
        color: #2ba1d3;
    }

    #ft-new-features {
        padding-top: 20px;

    }

    #ft-new-features-holder {
        position: relative;
        perspective: 1000px;
        margin-top: 6cap;
    }

    #ft-new-features-holder .ft-new-feature-box {
        position: absolute;
        padding: 30px 50px;
        background-color: #fff;
        border-radius: 10px;
        -webkit-transform: rotateX(60deg) scale(0.5) translateY(50px);
        -moz-transform: rotateX(60deg) scale(0.5) translateY(50px);
        -ms-transform: rotateX(60deg) scale(0.5) translateY(50px);
        transform: translate(-0%, -50%) !important;
        opacity: 1;
        -webkit-box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
        -webkit-transition: all 0.8s ease;
        transition: all 0.8s ease;
        border: 1px solid #0091d1;
        background: linear-gradient(rgb(255, 255, 255), rgb(250, 250, 250), rgb(234, 234, 234)) 0px 0px repeat scroll padding-box transparent;
    }

    .ft-new-feature-box.ft-new-feature-d1 {
        top: 0;
        left: 0;
    }

    .ft-new-feature-box.ft-new-feature-d2 {
        top: 0;
        right: 0;
    }

    .ft-new-feature-box.ft-new-feature-d3 {
        bottom: 0;
        left: 0;
    }

    .ft-new-feature-box.ft-new-feature-d4 {
        bottom: 0;
        right: 0;
    }

    #ft-new-features-holder .ft-new-feature-box.show-details {
        -webkit-transform: rotateX(0deg) scale(1) translateY(0px);
        -moz-transform: rotateX(0deg) scale(1) translateY(0px);
        -ms-transform: rotateX(0deg) scale(1) translateY(0px);
        transform: rotateX(0deg) scale(1) translateY(0px);
        opacity: 1;
    }

    #ft-new-features-holder {
        position: relative;
        perspective: 1000px;
        margin-top: 6cap;
    }

    #ft-new-features-holder .ft-new-feature-box .ft-new-feature-title-holder {
        margin-bottom: 0px;
    }

    #ft-new-features-holder .ft-new-feature-box .ft-new-feature-title-holder .ft-new-feature-icon .htfy {
        color: #3195ff;
        font-size: 34px;
        vertical-align: middle;
        margin-right: 20px;
    }

    #ft-new-features-holder .ft-new-feature-box .ft-new-feature-title-holder .ft-new-feature-icon [class*="fa"] {
        color: #3195ff;
        font-size: 34px;
        vertical-align: middle;
        margin-right: 20px;
    }

    #ft-new-features-holder .ft-new-feature-box .ft-new-feature-title-holder .ft-new-feature-title {
        color: #ffff;
        font-size: 19px;
        font-weight: 600;
        background: linear-gradient(to bottom, #44c0e5 0%, #35add1 39%, #0d85a8 100%) !important;
        padding: 5px 15px;
        border-radius: 8px;
        border: 1px solid #fff;
    }

    #ft-new-features-holder .ft-new-feature-box .ft-new-feature-details {
        color: #0d1e30;
        font-size: 17px;
        font-weight: 300;
    }

    #ft-new-features-holder .ft-new-feature-box .ft-new-feature-details p {
        /* color: #0d1e30; */
        color: #000;
        font-size: 16px;
        font-weight: 300;
        margin-bottom: 20px;
        line-height: 3.2rem;
    }

    .ft-new-icons-axis {
        position: absolute;
        width: 150px;
        height: 150px;
        left: 50%;
        top: 50%;
        margin-top: -97px;
        border-radius: 200px;
        text-align: center;
        padding-top: 58px;
        background: transparent linear-gradient(#fbfbfb, #ececec, #cecece) repeat scroll 0 0;
        -webkit-box-shadow: 0 3px 37px rgba(112, 145, 179, 0.22);
        box-shadow: 0 3px 37px rgba(112, 145, 179, 0.22);
        border: 1px solid #0091d1;
        transform: translate(-50%, -50%);
    }

    .ft-new-icons-axis img {
        width: 150px;
        position: relative;
        top: -33px;
        left: 3px;
    }

    .ft-new-feature-icon-holder {
        position: absolute;
        width: 62px;
        height: 62px;
        border-radius: 100px;
        background: transparent linear-gradient(180deg, #fbfbfb, #ececec, #cecece) repeat scroll 0 0;
        text-align: center;
        /* padding-top: 8px; */
        z-index: 100;
        cursor: pointer;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
        margin-right: 43px;
        border: 1px solid #0091d1;
    }

    .ft-new-feature-icon-holder.opened {
        background-color: #ededed;
        padding-top: 1vh;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder.opened .ft-new-animation-holder {
        opacity: 1;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder.opened .ft-new-animation-holder .ft-new-special-gradiant {
        animation-name: little-move;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder:hover,
    #ft-new-features-links-holder .ft-new-feature-icon-holder:focus {
        background-color: #7384ab;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder .ft-new-feature-icon {
        color: #ffffff;
        font-size: 38px;
        position: relative;
        left: 46%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder .ft-new-feature-title {
        position: absolute;
        color: #000;
        font-size: 13px;
        font-weight: 700;
        right: 70px;
        top: 36%;
        width: 150px;
        text-align: right;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder .ft-new-animation-holder {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        border-radius: 100px;
        overflow: hidden;
        z-index: -1;
        opacity: 0;
        display: none;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder1 {
        top: 35px;
        right: 26px;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder2 {
        top: 54px;
        right: 192px;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder3 {
        top: 50%;
        margin-top: -31px;
        right: 234px;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder4 {
        bottom: 54px;
        right: 182px;
        padding-top: 12px;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder4 .ft-new-feature-icon {
        font-size: 30px;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder5 {
        bottom: 35px;
        right: 10px;
    }

    #ft-new-features-holder .ft-new-feature-box {
        width: 40%;
        position: absolute;
        padding: 10px 20px;
        background-color: #fff;
        border-radius: 10px;
        -webkit-transform: rotateX(60deg) scale(0.5) translateY(50px);
        -moz-transform: rotateX(60deg) scale(0.5) translateY(50px);
        -ms-transform: rotateX(60deg) scale(0.5) translateY(50px);
        transform: translate(-0%, -50%) !important;
        opacity: 1;
        -webkit-box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
        -webkit-transition: all 0.8s ease;
        transition: all 0.8s ease;
        border: 1px solid #0091d1;
        background: linear-gradient(rgb(255, 255, 255), rgb(250, 250, 250), rgb(234, 234, 234)) 0px 0px repeat scroll padding-box transparent;
    }

    .ft-new-feature-box.ft-new-feature-d1 {
        top: 58px;
        left: 0;
        height: 171px;
    }

    .ft-new-feature-box.ft-new-feature-d2 {
        top: 71px;
        right: 0;
        height: 202px;
    }

    .ft-new-feature-box.ft-new-feature-d3 {
        bottom: 35px;
        left: 0;
        height: 202px;
    }

    .ft-new-feature-box.ft-new-feature-d4 {
        bottom: 56px;
        right: 0;
        height: 173px;
    }

    #ft-new-features-holder .ft-new-feature-box.show-details {
        -webkit-transform: rotateX(0deg) scale(1) translateY(0px);
        -moz-transform: rotateX(0deg) scale(1) translateY(0px);
        -ms-transform: rotateX(0deg) scale(1) translateY(0px);
        transform: rotateX(0deg) scale(1) translateY(0px);
        opacity: 1;
    }

    #ft-new-features-holder .ft-new-feature-box .ft-new-feature-title-holder {
        margin-bottom: 0px;
    }

    #ft-new-features-holder .ft-new-feature-box .ft-new-feature-title-holder .ft-new-feature-icon .htfy {
        color: #3195ff;
        font-size: 34px;
        vertical-align: middle;
        margin-right: 20px;
    }

    #ft-new-features-holder .ft-new-feature-box .ft-new-feature-title-holder .ft-new-feature-icon [class*="fa"] {
        color: #3195ff;
        font-size: 34px;
        vertical-align: middle;
        margin-right: 20px;
    }

    #ft-new-features-holder .ft-new-feature-box .ft-new-feature-title-holder .ft-new-feature-title {
        color: #ffff;
        font-size: 19px;
        font-weight: 600;
        background: linear-gradient(to bottom, #44c0e5 0%, #35add1 39%, #0d85a8 100%) !important;
        padding: 5px 15px;
        border-radius: 8px;
        border: 1px solid #fff;
    }

    #ft-new-features-holder .ft-new-feature-box .ft-new-feature-details {
        color: #0d1e30;
        font-size: 17px;
        font-weight: 300;
    }

    #ft-new-features-holder .ft-new-feature-box .ft-new-feature-details p {
        /* color: #0d1e30; */
        color: #000;
        font-size: 16px;
        font-weight: 300;
        margin-bottom: 20px;
        line-height: 3.2rem;
    }

    #ft-new-features-holder {
        position: relative;
        perspective: 1000px;
        margin-bottom: -120px !important;
    }


    .ft-new-icons-axis {
        position: absolute;
        width: 150px;
        height: 150px;
        left: 50%;
        top: 50%;
        margin-top: -97px;
        border-radius: 200px;
        text-align: center;
        padding-top: 58px;
        background: transparent linear-gradient(#fbfbfb, #ececec, #cecece) repeat scroll 0 0;
        -webkit-box-shadow: 0 3px 37px rgba(112, 145, 179, 0.22);
        box-shadow: 0 3px 37px rgba(112, 145, 179, 0.22);
        border: 1px solid #0091d1;
        transform: translate(-50%, -50%);
        z-index: 1;
    }

    .ft-new-icons-axis img {
        width: 150px;
        position: relative;
        top: -33px;
        left: 3px;
    }

    .ft-new-feature-icon-holder {
        position: absolute;
        width: 62px;
        height: 62px;
        border-radius: 100px;
        background: transparent linear-gradient(180deg, #fbfbfb, #ececec, #cecece) repeat scroll 0 0;
        text-align: center;
        /* padding-top: 8px; */
        z-index: 100;
        cursor: pointer;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
        margin-right: 43px;
        border: 1px solid #0091d1;
    }

    .ft-new-feature-icon-holder.opened {
        background-color: #ededed;
        padding-top: 1vh;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder.opened .ft-new-animation-holder {
        opacity: 1;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder.opened .ft-new-animation-holder .ft-new-special-gradiant {
        animation-name: little-move;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder:hover,
    #ft-new-features-links-holder .ft-new-feature-icon-holder:focus {
        background-color: #7384ab;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder .ft-new-feature-icon {
        color: #ffffff;
        font-size: 38px;
        position: relative;
        left: 46%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder .ft-new-feature-title {
        position: absolute;
        color: #000;
        font-size: 13px;
        font-weight: 700;
        right: 70px;
        top: 36%;
        width: 150px;
        text-align: right;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder .ft-new-animation-holder {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        border-radius: 100px;
        overflow: hidden;
        z-index: -1;
        opacity: 0;
        display: none;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder1 {
        top: 35px;
        right: 26px;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder2 {
        top: 54px;
        right: 192px;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder3 {
        top: 50%;
        margin-top: -31px;
        right: 234px;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder4 {
        bottom: 54px;
        right: 182px;
        padding-top: 12px;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder4 .ft-new-feature-icon {
        font-size: 30px;
    }

    #ft-new-features-links-holder .ft-new-feature-icon-holder5 {
        bottom: 35px;
        right: 10px;
    }

    img#ft-new-partner,
    img#ft-new-ligne,
    img#ft-new-solution,
    img#ft-new-intuitive {
        position: absolute;
        z-index: -1;
    }

    img#ft-new-partner {
        top: -70px;
        rotate: -180deg;
        left: 37%;
        width: 173px;
    }

    img#ft-new-ligne {
        top: -70px;
        right: 37%;
        transform: rotate(-179deg);
        width: 173px;
        transform: scaleY(-1);
    }

    img#ft-new-solution {
        top: 29%;
        rotate: 180deg;
        left: 37%;
        width: 173px;
        transform: scaleY(-1);
    }

    img#ft-new-intuitive {
        bottom: 127px;
        rotate: -1deg;
        right: 37%;
        max-width: 100%;
        width: 173px;
    }

    .ft-new-h2_svg span {
        display: inline-block;
        margin-top: 19px;
    }

    .ft-new-row-title {
        text-align: center;
        font-size: 40px;
        font-weight: 700;
        color: #0d98cd;
        position: relative;
        margin-top: 30px;
        margin-top: 0;
        margin-bottom: -4px;    
        text-transform: capitalize;
    font-family: Satisfy, cursive;
    font-weight: 400;
    font-style: normal;
    color: #0d98cd;
    font-size: 40px !important;
    }

    .ft-new-row-subtitle {
        font-family: Satisfy, cursive;
        font-style: normal;
        position: relative;
        text-align: center;
        font-size: 24px;
        color: #000;
        font-weight: 600;
        margin-bottom: 0px;
    }
</style>

<hr class="lg">
<div id="ft-new-features" style="scroll-margin-top: 200px;" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="ft-new-row-title">Pourquoi nous choisir ?</div>
                <div class="ft-new-h2_svg animate__animated animate__faster animate__zoomInRight"
                    data-animate-class="animate__zoomInRight" style="animation-delay: 400ms; text-align: center">
                    <span style="fill:red; width:22rem;"> <svg version="1.1" id="h2svg19"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" viewBox="0 0 500 50" style="enable-background:new 0 0 500 50;" xml:space="preserve">
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
                                <path d="M145.3,12.4c0,1.4-3,1.6-7,0.6C140.7,12.8,142.9,12.6,145.3,12.4z"></path>
                            </g>
                        </svg></span>
                </div>
                <div class="ft-new-row-subtitle">4 Bonnes raisons pour choisir eCab Solution</div>
            </div>

        </div>
        <div class="row rtl-cols">
            <div class="col-sm-12 col-md-12 col-12">
                <div id="ft-new-features-holder" style="height: 525px;">
                    <div class="ft-new-feature-box ft-new-feature-d1">
                        <div class="ft-new-feature-title-holder">
                            <span class="ft-new-feature-icon">
                                <img src="./assets/images/new-partner1-removebg.png" alt="" width="90">
                            </span>
                            <span class="ft-new-feature-title">Sans Engagement</span>
                        </div>
                        <div class="ft-new-feature-details">
                            <p>Notre solution ECAB® est très simple d’utilisation, même pour les personnes peu habituées
                                à l’informatique ou aux applications en ligne. Tout se fait en quelques clics seulement.
                            </p>
                        </div>
                    </div>
                    <div class="ft-new-feature-box ft-new-feature-d2">
                        <div class="ft-new-feature-title-holder">
                            <span class="ft-new-feature-icon">
                                <img src="assets/images/new-partner3-removebg.png" alt="support" width="90">
                            </span>
                            <span class="ft-new-feature-title">100% en ligne</span>
                        </div>
                        <div class="ft-new-feature-details">
                            <p>Le logiciel ECAB® a été entièrement pensé et conçu pour les sociétés de transport. Nous
                                prenons en compte toutes vos problématiques pour faciliter votre quotidien et vous faire
                                gagner du temps dans vos tâches quotidiennes.</p>
                        </div>
                    </div>
                    <div class="ft-new-icons-axis">


                        <img src="assets/images/logo_header.png" alt="">


                    </div>
                    <img id="ft-new-partner" src="assets/images/new-indicator1.png" alt="">
                    <img id="ft-new-ligne" src="assets/images/new-indicator1.png" alt="">
                    <img id="ft-new-solution" src="assets/images/new-indicator1.png" alt="">
                    <img id="ft-new-intuitive" src="assets/images/new-indicator1.png" alt="">
                    <div class="ft-new-feature-box ft-new-feature-d3">
                        <div class="ft-new-feature-title-holder">
                            <span class="ft-new-feature-icon">
                                <img src="assets/images/new-partner5-removebg.png" alt="" width="90">
                            </span>
                            <span class="ft-new-feature-title">Solution tout en un</span>
                        </div>
                        <div class="ft-new-feature-details">
                            <p>Gérez l’intégralité de votre entreprise depuis un seul logiciel sans avoir à y passer
                                tout votre temps. Utilisez toutes les fonctionnalités pour effectuer vos tâches
                                quotidiennes, même les plus chronophages !</p>
                        </div>
                    </div>
                    <div class="ft-new-feature-box ft-new-feature-d4">
                        <div class="ft-new-feature-title-holder">
                            <span class="ft-new-feature-icon">
                                <img src="assets/images/new-partner41-removebg.png" alt="" width="90">
                            </span>
                            <span class="ft-new-feature-title">Intuitive</span>
                        </div>
                        <div class="ft-new-feature-details">
                            <p>Notre logiciel a subi de nombreux tests avant que nous le mettions en ligne. Il est 100 %
                                fiable et répond à tous les besoins des sociétés de transport.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>