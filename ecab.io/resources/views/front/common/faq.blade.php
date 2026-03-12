<script>
    var questions = document.querySelectorAll(".question");

    questions.forEach(q => {
        q.addEventListener("click", () => {
            var answers = q.nextElementSibling;
            answers.style.display = answers.style.display === "block" ? "none" : "block";
        });
    });
</script>


<style>
  div#faqSub {
    position: relative;
    top: -14px;
}
.sign i {
    font-size: 20px;
    position: relative;
    top: 0px;
    right: -11px;
    color: #0d7caf;
}
    hr.lg {
        background: url("./assets/images/divider.png") 0% 0% repeat-x;
        height: 16px !important;
        /* margin: 25px 0 75px 0; */
        display: block;
        width: 100%;
        border: none;
        margin: 0;
        padding: 0;
    }

    div#faqAnim {
        position: relative;
        top: -13px;
    }
</style>

<hr class="lg">
<section class="scroll-section" id="faq">
    <!-- <hr class="lg"> -->
    <div class="container">
        <h2 class="h1 row-title" style="
              text-align: center;
              font-size: 32px;
              margin-top: 10px;

            ">
             Questions & Réponses
        </h2>
        <div id="faqAnim" class="h2_svg animate__animated animate__faster animate__zoomInRight"
            data-animate-class="animate__zoomInRight" style="animation-delay: 400ms; text-align: center">
            <span style="fill:red; width:22rem;"> <svg version="1.1" id="h2svg19" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 50"
                    style="enable-background:new 0 0 500 50;" xml:space="preserve">
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
                        <path d="M42,14.7c7.4-0.2,14.9-0.5,22.3-0.7c0,0.2,0,0.5,0.1,0.7C57,15.6,49.6,15.4,42,14.7z">
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
        <div class="row-subtitle" id="faqSub">Trouver des réponses à toutes vos questions</div>

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="question_box">
                    <div class="question">
                        <h4 class="question_heading question_heading-1" data-value="1">
                            Comment se calcul le prix du trajet ? <span id="plus" class="sign sign-1"><i
                                    class="fa-solid fa-angle-down"></i></span>
                            <span id="minus" class="sign signM"><i class="fa-solid fa-angle-up"></i></span>
                        </h4>
                    </div>
                    <p class="answer">
                        Nos Tarifs sont calculés en fonction du type de transport sollicité, la technicité des
                        intervenants, les plages horaires. N'hésitez pas à demander un devis personnalisé en Ligne ou
                        par Téléphone (c'est Gratuit et ça ne vous engage à rien). Nos Tarifs sont Dégressifs selon le
                        volume de trajets commandé. N'hésitez pas à nous consulter pour un devis personnalisé.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="question_box">
                    <div class="question">
                        <h4 class="question_heading question_heading-1" data-value="1">
                            Quel est en detail les prix des options ? <span id="plus" class="sign sign-1"><i
                                    class="fa-solid fa-angle-down"></i></span>
                            <span id="minus" class="sign signM"><i class="fa-solid fa-angle-up"></i></span>
                        </h4>
                    </div>
                    <p class="answer">
                        Le prix des péages et du parking sont à la charge du client, ou il peut être rajouté en
                        supplément au prix du trajet à la demande du client. Tout PMR supplémentaire sera facturé au
                        prix d'une prise en charge supplémentaire à la demande du client. Un siège bébé peut être
                        installé dans le véhicule et sera facturé à 5 euros TTC/siège bébé. Tout animal de compagnie (en
                        dehors de chien guide pour aveugle) est facturé à 10 euros TTC/animal de compagnie. Au delà d'un
                        bagage par passager, tout bagage supplémentaire est facturé à 5 euros TTC/bagage. Le montant
                        minimum facturé par trajet est de 59 euros TTC. Toute attente au delà des 10 premières minutes
                        sera facturée.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="question_box">
                    <div class="question">
                        <h4 class="question_heading question_heading-1" data-value="1">
                            QUELS SONT LES SUPPLÉMENTS POUR UN DIMANCHE OU JOUR FÉRIÉ OU LA NUIT ? <span id="plus"
                                class="sign sign-1"><i class="fa-solid fa-angle-down"></i></span>
                            <span id="minus" class="sign signM"><i class="fa-solid fa-angle-up"></i></span>
                        </h4>
                    </div>
                    <p class="answer">
                        Conformément aux dispositions de la loi en vigueur, une majoration des prix est appliquée: elle
                        est de 20% pour les trajets de nuit, et un supplément de 50 euros TTC pour les trajets du
                        dimanche et des jours fériés, et de 100% pour les trajets du 1er mai. Tous nos véhicules sont
                        aménagés pour personne à mobilité réduite, et accessibles pour les personnes en fauteuil
                        roulant. Tous nos chauffeurs sont qualifiés, expérimentés, et détenteurs de l'AFPS (attestation
                        de formation premiers secours).
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="question_box">
                    <div class="question">
                        <h4 class="question_heading question_heading-1" data-value="1">
                            QUALITÉ DU SERVICE ? <span id="plus" class="sign sign-1"><i
                                    class="fa-solid fa-angle-down"></i></span>
                            <span id="minus" class="sign signM"><i class="fa-solid fa-angle-up"></i></span>
                        </h4>
                    </div>
                    <p class="answer">
                        Nos prix sont un gage de qualité, parce que vous avez le droit d'être exigeant. Tous nos
                        intervenants sont payés correctement, et nous avons adopté une charte de qualité car notre
                        objectif est de toujours mieux vous servir. N'attendez plus, confiez-vous aux professionnels du
                        transport de personnes à mobilité réduite.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="question_box">
                    <div class="question">
                        <h4 class="question_heading question_heading-1" data-value="1">
                            LEXIQUE ? <span id="plus" class="sign  sign-1"><i class="fa-solid fa-angle-down"></i></span>
                            <span id="minus" class="sign signM"><i class="fa-solid fa-angle-up"></i></span>
                        </h4>
                    </div>
                    <p class="answer">
                        Le montant de la prise en charge : c'est le montant du service d'accompagnement, installation et
                        descente du véhicule d'un PMR. Le montant d'approche : c'est le montant du trajet entre la
                        position du véhicule disponible et le lieu de prise en charge du client. Nous acceptons les
                        paiements par : Chèque, Espèce et CB.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="question_box">
                    <div class="question">
                        <h4 class="question_heading question_heading-1" data-value="1">
                            A PROPOS DE NOS TARIFS ? <span id="plus" class="sign sign-1"><i
                                    class="fa-solid fa-angle-down"></i></span>
                            <span id="minus" class="sign signM"><i class="fa-solid fa-angle-up"></i></span>
                        </h4>
                    </div>
                    <p class="answer">
                        Nos Tarifs sont Clairs et Nets (aucun Frais supplémentaire, aucune adhésion, ou frais de
                        dossier). Un budget maîtrisé (vous connaissez à l'avance le prix des prestations commandées).
                        Nos Tarifs sont mis à jour le 1er janvier de chaque année et ils sont à titre d'information.
                        Vous pouvez avoir un devis personnalisé gratuitement à tout moment par téléphone ou en ligne via
                        votre espace client. (Tous nos prix sont exprimés en TTC). Nous acceptons les paiements par
                        virement, prélèvement bancaire, chèque et Carte bancaire.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<div style="margin-bottom: 30px;" id="message1" class="container-fluid message-area">
    <div class="bg-color"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-12">
                <div class="buttons-holder" style="display: flex; justify-content: center;align-items: center;">
                    <a href=" demo" class="" style="color:black !important;">
                        <h4 id="savoir">En Savoir plus ?</h4>
                    </a>
                    <a style="border: 1px solid;background: linear-gradient(  #9fe925, #558407) !important;" href="#"
                        class="ybtn ybtn-header-color col-6" tabindex="0"><span
                            style=" font-weight: 700; opacity: 1;">DEMANDER
                            UNE DEMO</span>
                    </a>
                    <a href="   features" style="color:black !important;margin-left:12px !important">
                        <h4>Êtes-vous prêt ?</h4>
                    </a>
                    <a style="border: 1px solid;" href=" prices" class="ybtn ybtn-header-color"><span
                            style="font-weight: 700; opacity: 0; animation: opacityOn 1.2s ease-in-out forwards infinite; animation-delay: 1s;">COMMENCER
                            MAINTENANT</span></a>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .faqBack {
        background: #d8effd;
    }
</style>


<script>
    var questions = document.querySelectorAll(".question");

    questions.forEach(q => {
        q.addEventListener("click", () => {
            var answers = q.nextElementSibling;
            answers.style.display = answers.style.display === "block" ? "none" : "block";
            // q.classList.contains("faqBack") ? q.classList.remove("faqBack") : q.classList.add("faqBack")

            var plusIcon = q.querySelector('#plus');
            var minusIcon = q.querySelector('#minus');

            if (answers.style.display === "block") {
                if (plusIcon) plusIcon.style.display = "none";
                if (minusIcon) minusIcon.style.display = "inline";
            } else {
                if (plusIcon) plusIcon.style.display = "inline";
                if (minusIcon) minusIcon.style.display = "none";
            }

        });
    });
</script>
