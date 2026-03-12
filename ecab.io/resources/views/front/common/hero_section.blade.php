<style>
    ul.custom-logo-bar-icons>li {
        margin-right: 1.5rem;
    }

    div.custom-cardBoarder {
        text-align: center;
    }

    div.custom-cardBoarder>img {
        width: 50%;
    }

div.custom-cardBoarder h4.card-title {
    font-weight: 600 !important;
    color: var(--dark_blue_text);
    font-family: satisfy;
    font-size: 21px;
    position: relative;
    top: -7px;
}

    div.custom-tabs-area-img-row {
        height: 87px;
        overflow-y: hidden;
    }

    .animated-text-container-hero-seciton {
        position: relative;
        top: 4px;
        left: -6px;
        width: 100%;
        height: 137px;
    }

    .output {
        width: 100%;
    }

    p#typedText {
        margin-top: 4px;
        margin-bottom: 4px;
        width: 100%;
        text-align: left;
        padding: 4px 2px;
    }

    .align-car p {
        padding: 0 0;
        margin-left: 10px;
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        text-align: left;
    }
</style>
<div class="hero-section-container">
    <div id="header-holder" class="main-header">
        <div class="bg-animation">
            <div class="graphic-show">
            </div>
        </div>
        <style>
            .custom-top-menu-row {
                padding-left: 4.5rem;
                padding-right: 4.4rem;
            }

            .custom-padding-right-0 {
                padding-right: 0;
            }

            .removeFocus1 {
                border-radius: 5px !important;
            }

            li.custom-info-line-parent {
                top: 0;
                position: relative;
                left: 0;
            }
        </style>
        <div id="top-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="main-slider">
                            <div class="slide">
                                <div class="spacer"></div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img style="width: 480px; height: 300px;margin-top: 5px;"
                                            class="img-fluid my-3 rounded title-img" src="./assets/images/admin.png"
                                            alt="laptop">
                                        <ul class="logo-bar custom-logo-bar-icons">
                                            <li><img class="logo-bar-img" src=" ./assets/images/les_echosne.png" alt />
                                            </li>
                                            <li><img class="logo-bar-img" src=" ./assets/images/bfm.png" alt /></li>
                                            <li><img style="width:130px;margin-top: 15px;" class="logo-bar-img"
                                                    src=" ./assets/images/android.png" alt /></li>
                                            <li><img style="width: 130px;margin-top: 15px;" class="logo-bar-img"
                                                    src=" ./assets/images/ios.png" alt /></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5" id="animatedText">
                                        <div class="big-title typing-container">
                                            <div class="video-heading">
                                                <h2>ECAB SOLUTION DE GESTION DE SOCIÉTÉ DE
                                                    <span>VTC (VÉHICULE DE TOURISME AVEC CHAUFFEUR)</span>
                                                    <span>TRANSPORT DE PERSONNES À MOBILITÉ RÉDUITE (TPMR)</span>
                                                    <span>NAVETTE AÉROPORT</span>
                                                    <span>TRANSPORT SCOLAIRE</span>
                                                    <span>TAXI</span>
                                                </h2>
                                            </div>
                                        </div>

                                        <!-- <script>
                                    document.addEventListener("DOMContentLoaded", function () {
        const textElement = document.getElementById('typed');
        const textContent =
            `<p>ECAB SOLUTION DE GESTION DE SOCIETE DE</p> <p>VTC (VEHICULE DE TOURISME AVEC CHAUFFUR)   </p><p> TRANSPORT DE PERSONNES À MOBILITÉ REDUITÉ (TPMR) </p> <p>NAVETTE AEROPORT TRAHSPORT SCOLAIRE TAXI</p> `
        const typingDuration = 100; // Adjust this value based on your typing animation speed
// &reg;
        const breakWords = ["CHAUFFUR", "(TPMR)" ];

        function typeText(index) {
            textElement.innerHTML = textContent.slice(0, index);

            if (index < textContent.length) {
                setTimeout(function () {
                    typeText(index + 1);
                }, typingDuration);
            } else {
                handleBreakWords(0);
            }
        }

        function handleBreakWords(breakIndex) {
            const currentBreakWord = breakWords[breakIndex];
            const index = textContent.indexOf(currentBreakWord);

            if (index !== -1) {
                setTimeout(function () {
                    textElement.innerHTML = textContent.slice(0, index + currentBreakWord.length) +
                    "\n";
                    handleBreakWords(breakIndex + 1);
                }, typingDuration);
            } else {
                setTimeout(function () {
                    eraseText(textContent.length);
                }, 100); // Adjust this timeout based on the pause between typing and erasing
            }
        }

        function eraseText(index) {
            textElement.innerHTML = textContent.slice(0, index);

            if (index > 0) {
                setTimeout(function () {
                    eraseText(index - 1);
                }, typingDuration);
            } else {
                typeText(0);
                setTimeout(function () {},
                100); // Adjust this timeout based on the pause between typing and erasing
            }
        }

        typeText(0); // Start the typing animation
    });
                                </script> -->


                                        <div class="cont py-4 animated-text-container-hero-seciton">
                                            <div class="output" id="output">
                                                <div class="typing-containerddd">
                                                    <div class="cursor text" id="typedText">
                                                        <div style="width: 100%;" class="line1"><span></span>
                                                            <p>Une solution Web et mobile tout-en-un</p>
                                                        </div>
                                                        <div style="width: 119%;" class="line2"><span></span>
                                                            <p>pour gérer votre société de transport de personnes de A à
                                                                Z,</p>
                                                        </div>
                                                        <div style="width: 114%;" class="line3"><span></span>
                                                            <p>vos clients, vos voitures, vos chauffeurs, vos
                                                                partenaires, </p>
                                                        </div>
                                                        <div style="width: 134%;" class="line4"><span></span>
                                                            <p>vos demandeurs d'emploi et vos affiliés, mais aussi vos
                                                                réservations,</p>
                                                        </div>
                                                        <div style="width: 114%;" class="line5"><span></span>
                                                            <p>vos devis et votre facturation, le tout en un seul
                                                                endroit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="d-flex" id="heroButton" style="gap: 0;">
                                            <a style="border: 1px solid;background: linear-gradient(  #9fe925, #558407) !important;"
                                                href="#" class="ybtn ybtn-header-color col-6"><span class="demande"
                                                    style=" font-weight: 700; opacity: 1;">DEMANDER
                                                    UNE DEMO</span>
                                            </a>
                                            <a style="border: 1px solid;" href=" prices"
                                                class="ybtn ybtn-header-color col-6"><span
                                                    style="font-weight: 700; opacity: 0; animation: opacityOn 1.2s ease-in-out forwards infinite; animation-delay: 1s;">COMMENCER
                                                    MAINTENANT</span>
                                            </a>
                                        </div>



                                    </div>
                                    <div class="col-md-3" id="heroImage">
                                        <img style="width: 285px; height: 376px;"
                                            class="img-fluid my-3 rounded title-img"
                                            src=" ./assets/images/standing-boy.png" alt="laptop">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const lines = document.querySelectorAll("#typedText > div");
                    const typingSpeed = 40;
                    const holdTime = 800;

                    // প্রাথমিকভাবে visibility hidden করে দিচ্ছি
                    lines.forEach(line => {
                        const p = line.querySelector("p");
                        line.dataset.fullText = p.textContent.trim();
                        p.textContent = "";
                        line.style.visibility = "hidden"; // জায়গা ঠিক থাকবে
                    });

                    async function typeLine(line) {
                        line.style.visibility = "visible"; // শুরুর সময় দেখা যাবে
                        const p = line.querySelector("p");
                        const text = line.dataset.fullText;
                        for (let i = 0; i < text.length; i++) {
                            p.textContent = text.slice(0, i + 1);
                            await new Promise(r => setTimeout(r, typingSpeed));
                        }
                        await new Promise(r => setTimeout(r, holdTime));
                    }

                    async function eraseLine(line) {
                        const p = line.querySelector("p");
                        const text = line.dataset.fullText;
                        for (let i = text.length; i >= 0; i--) {
                            p.textContent = text.slice(0, i);
                            await new Promise(r => setTimeout(r, typingSpeed / 2));
                        }
                        line.style.visibility = "hidden"; // মুছে গেলে শুধু অদৃশ্য হবে
                    }

                    async function runInfinite() {
                        while (true) {
                            // একটার পর একটা টাইপ হবে
                            for (let line of lines) {
                                await typeLine(line);
                            }
                            // উল্টো দিক থেকে মুছে যাবে
                            for (let i = lines.length - 1; i >= 0; i--) {
                                await eraseLine(lines[i]);
                            }
                            await new Promise(r => setTimeout(r, 500));
                        }
                    }

                    runInfinite();
                });
            </script>




            <div class="tabs-area-img">
                <div class="container">
                    <div class="row custom-tabs-area-img-row">
                        <div class="col-md-4 custom_mytitle">
                            <div class="custom_quality_title_bar">
                                <h2 style="margin-bottom: 2rem;">POURQUOI CHOISIR NOTRE SOLUTION ?</h2>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="logo-bar ">
                                <li>
                                    <div class="card cardBoarder custom-cardBoarder">
                                        <img class="card-img-top" src="assets/images/new-partner1.png" alt="Card image">
                                        <div class="card-body">
                                            <h4 class="card-title">Sans Engagement</h4>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card cardBoarder custom-cardBoarder">
                                        <img class="card-img-top" src="  assets/images/new-partner21.png"
                                            alt="Card image">
                                        <div class="card-body">
                                            <h4 class="card-title">Support Client</h4>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card cardBoarder custom-cardBoarder">
                                        <img class="card-img-top" src="  assets/images/new-partner31.png"
                                            alt="Card image">
                                        <div class="card-body">
                                            <h4 class="card-title">100% en ligne</h4>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card cardBoarder custom-cardBoarder">
                                        <img class="card-img-top" src="  assets/images/new-partner41.png"
                                            alt="Card image">
                                        <div class="card-body">
                                            <h4 class="card-title">Intuitive</h4>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card cardBoarder custom-cardBoarder">
                                        <img class="card-img-top" src="  assets/images/new-partner51.png"
                                            alt="Card image">
                                        <div class="card-body">
                                            <h4 class="card-title">Solution tout en un</h4>
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






<style>
    .slick-prev:before,
    .slick-next:before {
        color: #fff;
    }



    .slick-prev:before,
    .slick-next:before {
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        font-size: 20px;
        line-height: 1;
        color: white;
        opacity: .75;
    }

    .slick-prev:before,
    .slick-next:before {
        color: #fff;
    }

    .partner-block .slick-slide img {
        display: block;
        margin: 0 auto;
    }

    .partner-block {
        background: transparent linear-gradient(#fbfbfb, #ececec, #cecece) repeat scroll 0 0;
        float: left;
        width: 100%;
    }

    .col-md-6 {
        color: #000;
    }

    /* Top Testimonials CSS */

    :not(#fancybox-lock) {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }



    /* .footerCarusol{
            border: 2px solid #005997;
            border-radius: 15px;
        } */
</style>

<!-- <section id="testimonials_section">
<div class="container">
<div class="row" style="padding: 5px 0">
<div class="quality_container flexme">
<div class="col-md-4 mytitle">
<div class="title_bar">
<h2 style="color: #fff; font-weight: bold; font-size: 19px; margin-top: 10px;">TÉMOIGNAGES DE NOS CLIENTS</h2>
</div>
</div>
<div class="col-md-8 testimonials_container">
<div class="col-md-8 client-testimonial-box client-testimonial-box-1 active" data-value="1">
<img src="  assets/images/person1.png" alt srcset/>
<div class>
<p>
Trés bon service, voiture confortable, chauffeur agréable
....je recommande ;
</p>
<span><strong>Fabrice P.</strong></span>
<img class="stars" src="  assets/images/five_star-removebg-preview.png" alt srcset/>
</div>
</div>
<div class="col-md-8 client-testimonial-box client-testimonial-box-2" data-value="2">
<img src="  assets/images/person2.png" alt srcset/>
<div class>
<p>
Support Client trés arrangeant et sympa.....service au
top,
</p>
<span><strong>Lea .S</strong></span>
<img class="stars" src="  assets/images/five_star-removebg-preview.png" alt srcset/>
</div>
</div>
<div class="col-md-8 client-testimonial-box client-testimonial-box-3" data-value="3">
<img src="  assets/images/person3.png" alt srcset/>
<div class>
<p>à l'heure, tarif correcte , et chauffeur souriant....</p>
<span><strong>Marie L .</strong></span>
<img class="stars" src="  assets/images/five_star-removebg-preview.png" alt srcset/>
</div>
</div>
<div class="dots" style="top:25px; height: 90px;">
<div class="dot dot-1 active" data-value="1" style="background-color:red"></div>
<div class="dot dot-2" style="background-color:red" data-value="2"></div>
<div class="dot dot-3" style="background-color:red" data-value="3"></div>
</div>
</div>
</div>
</div>
</div>
</section> -->
<div class="tabs-area-img" style="margin-bottom: 0px">
    <div class="container">
        <div class="row">
            <div class="col-md-4 custom_mytitle">
                <div class="custom_quality_title_bar">
                    <h2 style="font-size: 14px; margin:0px;text-align:center;">ILS NOUS FONT CONFIANCE</h2>
                </div>

            </div>
            <div class="col-md-8 marquee-block" style="height:85px">
                <ul class="logo-bar marquee-inner to-left">
                    <span>
                        <li class><img class="logo-bar-img foter logoCenter footerCarusol"
                                src="  assets/images/partner1.png" alt></li>
                        <li class><img style="width: 200px;" class="logo-bar-img foter logoCenter footerCarusol"
                                src="  assets/images/partner5.png" alt></li>
                        <li class><img class="logo-bar-img foter logoCenter footerCarusol"
                                src="  assets/images/partner4.png" alt></li>
                    </span>
                </ul>
            </div>
        </div>
    </div>
</div>
