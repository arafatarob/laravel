@include('front.common.header')

<div class="grey_con overridegraycon" style="background-color:#EBF4FF !important">

    <div class="wrappers">

        <div id="chistelthememodified">

            <div id="antichimod">

                <!-- 

<div class="navbar navbar-fixed-top">

  <div class="navbar-inner">

    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>

      <div class="nav-collapse">

        <ul class="nav">

          <li><a href="clientportal.php"><i class="icon-home icon-white" style="margin-right:5px;margin-top:1px;vertical-align: top;"></i>Accueil</a></li>

        </ul>

        
        <ul class="nav">

          <li><a href="announcements.php"><i class="icon-bullhorn icon-white" style="margin-right:5px;margin-top:1px;vertical-align: top;"></i>Actualités</a></li>

        </ul>

        <ul class="nav">

          <li><a href="knowledgebase.php"><i class="icon-search icon-white" style="margin-right:5px;margin-top:1px;vertical-align: top;"></i>Base de connaissances</a></li>

        </ul>

        <ul class="nav">

          <li><a href="serverstatus.php"><i class="icon-globe icon-white" style="margin-right:5px;margin-top:1px;vertical-align: top;"></i>État du réseau</a></li>

        </ul>

        <ul class="nav">

          <li><a href="affiliates.php"><i class="icon-signal icon-white" style="margin-right:5px;margin-top:1px;vertical-align: top;"></i>Affiliés</a></li>

        </ul>

        <ul class="nav">

          <li><a href="contact.php"><i class="icon-envelope icon-white" style="margin-right:5px;margin-top:1px;vertical-align: top;"></i>Contactez-nous</a></li>

        </ul>

        <ul class="nav pull-right">

          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-lock icon-white" style="margin-right:5px;margin-top:1px;vertical-align: top;"></i>Espace client&nbsp;<b class="caret"></b></a>

            <ul class="dropdown-menu">

              <li><a href="clientarea.php">Connexion</a></li>

              <li><a href="register.php">Inscription</a></li>

              <li class="divider"></li>

              <li><a href="pwreset.php">Mot de passe oublié?</a></li>

            </ul>

          </li>

        </ul>

         </div> -->

                <!-- /.nav-collapse -->

                <!-- </div>

  </div> -->

                <!-- /navbar-inner -->

                <!-- </div> -->

                <!-- /navbar -->

























                <div class="whmcscontainer">

                    <div class="contentpadded">





                        <script type="text/javascript">
                            $("a.bookmark").click(function (e) {

                                var bookmarkTitle = document.title;

                                var bookmarkUrl = window.location.href;



                                if ('addToHomescreen' in window && addToHomescreen.isCompatible) {

                                    // Mobile browsers

                                    addToHomescreen({
                                        autostart: false,
                                        startDelay: 0
                                    }).show(true);

                                } else if (/CriOS\//.test(navigator.userAgent)) {

                                    // Chrome for iOS

                                    alert(
                                        'To add to Home Screen, launch this website in Safari, then tap the Share button and select "Add to Home Screen".');

                                } else if (window.sidebar && window.sidebar.addPanel) {

                                    // Firefox <=22

                                    window.sidebar.addPanel(bookmarkTitle, bookmarkUrl, '');

                                } else if ((window.sidebar && /Firefox/i.test(navigator.userAgent) && !Object
                                        .fromEntries) || (window.opera && window.print)) {

                                    // Firefox 23-62 and Opera <=14

                                    $(this).attr({

                                        href: bookmarkUrl,

                                        title: bookmarkTitle,

                                        rel: 'sidebar'

                                    }).off(e);

                                    return true;

                                } else if (window.external && ('AddFavorite' in window.external)) {

                                    // IE Favorites

                                    window.external.AddFavorite(bookmarkUrl, bookmarkTitle);

                                } else {

                                    // Other browsers (Chrome, Safari, Firefox 63+, Opera 15+)

                                    alert('Press ' + (/Mac/i.test(navigator.platform) ? 'Cmd' : 'Ctrl') +
                                        '+D to bookmark this page.');

                                }



                                return false;

                            });
                        </script>



                        <p class="service_breadcrumb">Accueil &gt; Mentions-legales</p>


                        <div class="service_con">
                            <!-- <p class="service_breadcrumb"><a href="index.php">Accueil</a> > </p><br/> -->
                            <p>Le site Digitals.fr est édité par la société DIGITALS SASU:</p>
                            <p><b>Siége social</b> : 40 Rue Alexandre Dumas, 75011 Paris</p>
                            <p><b>N° Siret</b> : 88936198600017 </p>

                            <p><b>N° d'immatriculation au RCS</b> : 812 574 283 RCS Paris</p>

                            <p><b>TVA intra</b> : FR 90 889361986</p>

                            <p><b>Capital social</b> : 1000 Euros</p>

                            <p><b>Formateur enregistré au prés de la DIRRECT Bobigny sous le N°</b> :</p>

                            <p><b>Déclaration CNIL sous le N°</b> : 1885264</p>

                            <p><b>Marque déposée à l'INPI sous le N°</b> : 4194141</p>

                            <p><b>Copyright France N°</b> : 98BX1F9</p>

                            <p><b>Directeur de la publication</b> : la société DIGITALS SASU</p>

                            <p><b>Hébergeur</b> : OVH - 2 rue Kellermann - 59100 Roubaix - France - 08 203 203 63</p>

                            <p><b>N° Téléphone</b> : 01 84 25 37 39</p>

                            <p><b>N° Fax</b> : 01 84 25 37 59</p>

                            <p><b>Email</b> : contact@digitals.fr<br>
                            </p>
                            <p>
                                La direction de la publication est assurée par la société DIGITALS SASU.<br><br>
                                L'hébergement de notre siteweb est assuré par la société OVH dont le siège social est
                                situé au 2 rue Kellermann 59100 Roubaix Cedex, téléphone : 0899 701 761 1,349 € TTC par
                                appel puis 0,337 € TTC la minute .<br><br>
                                Conformément à la loi « Informatique et Libertés » du 6 janvier 1978 modifiée, ce site a
                                fait l’objet d’une déclaration auprès de la CNIL (déclaration N° : 1885264).<br><br>
                                Les informations que nous sommes amenés à recueillir proviennent de l’enregistrement
                                volontaire d’une adresse courriel fournie par l’internaute, lui permettant de recevoir
                                une documentation et/ou de se renseigner sur un point quelconque. Ces informations ne
                                sont pas communiquées à des tiers. Concernant les informations nominatives diffusées sur
                                le site, les personnes concernées ont été informées de leurs droits.<br><br>
                                Conformément à la loi « Informatique et Libertés » du 06/01/1978, vous disposez d'un
                                droit d'accès, de rectification et d'opposition aux informations vous concernant qui
                                peut s'exercer par courrier à l'adresse de DIGITALS SASU en indiquant vos nom, prénom,
                                adresse postale complète et adresse email. L’ensemble de ce site relève de la
                                législation française et internationale sur le droit d’auteur et la propriété
                                intellectuelle.<br><br>
                                Toute représentation, reproduction, modification, utilisation commerciale, ainsi que
                                tout transfert vers un autre site sont interdits (ce site à fait l'objet d'un dépôt
                                auprés de Copyright France sous le N°: 98BX1F9). sauf autorisation explicite de notre
                                part,à demander par courrier à l’adresse indiquée plus haut. Les liens hypertextes
                                présents sur le site orientant les utilisateurs vers d’autres sites Internet n’engagent
                                pas la responsabilité de Handi-Express quant au contenu de ces sites.<br><br>
                                Toute personne physique ou morale souhaitant que soit établi un lien (adresse de son
                                site) à partir de notre site, doit préalablement en demander l’autorisation. à
                                l'exception de sites diffusant des informations et/ou contenus ayant un caractère
                                illégal et/ou à caractère religieux, politique, pornographique, xénophobe.<br><br>
                                l’établissement de lien vers notre site est autorisé sous réserve qu'il s'agisse d'un
                                lien vers la page d'accueil du site et que ce lien ouvre le site dans une nouvelle
                                fenêtre de navigation laissant apparaître l'adresse www.digitals.fr , la société
                                DIGITALS SASU se réserve néanmoins tout droit d’opposition.
                            </p>
                        </div>

                        <p style="text-align:center;">Powered by <a href="https://www.whmcs.com/"
                                target="_blank">WHMCompleteSolution</a></p>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <!--antichimod-->
        </div>
        <!--wrapper-->
    </div>
    <!--grey_con-->
</div>

@include('front.common.footer')