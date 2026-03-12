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



                        <p class="service_breadcrumb"><a href="/index.php">Accueil</a> &gt; <a
                                href="/conditions-generales-de-vente.php">Conditions Generales de vente</a></p>

                        <br>

                        <h3>Objet</h3>
                        <p>
                            Les conditions générales de ventes décrites ci-après détaillent les droits et obligations de
                            l'entreprise DIGITALS SARL et de ses clients dans le cadre de la vente des services de
                            conseils.<br>
                            Toute prestation accomplie par la société DIGITALS SARL implique l'adhésion sans réserve de
                            l'acheteur aux présentes conditions générales de vente.
                        </p>
                        <br>

                        <h3>Présentation des produits</h3>
                        <p>Les caractéristiques des produits proposés à la vente sont présentées dans la rubrique "
                            Catalogue " de notre site. Les photographies n'entrent pas dans le champ contractuel. La
                            responsabilité de la société DIGITALS SARL ne peut être engagée si des erreurs s'y sont
                            introduites. Tous les textes et images présentés sur le site de la société DIGITALS SARL
                            sont réservés, pour le monde entier, au titre des droits d'auteur et de propriété
                            intellectuelle; leur reproduction, même partielle, est strictement interdite.</p>
                        <br>

                        <h3>Durée de validité des offres de vente</h3>
                        <p>Les produits sont proposés à la vente jusqu'à indisponibilité. En cas de commande d'un
                            produit devenu indisponible, le client sera informé de cette indisponibilité, dans les
                            meilleurs délais, par courrier électronique ou par courrier postal.</p>
                        <br>

                        <h3>Prix des produits</h3>
                        <p>
                            La rubrique " Catalogue " de notre site indique les prix en euros toutes taxes comprises,
                            hors frais de port. Le montant de la TVA est précisé lors de la sélection d'un produit par
                            le client et les frais de port apparaissent sur l'écran à la fin de la sélection des
                            différents produits par le client.<br>
                            La société DIGITALS SARL se réserve le droit de modifier ses prix à tout moment mais les
                            produits commandés sont facturés au prix en vigueur lors de l'enregistrement de la
                            commande.<br>
                            Les tarifs proposés comprennent les rabais et ristournes que l'entreprise DIGITALS SARL
                            serait amenée à octroyer compte tenu de ses résultats ou de la prise en charge par
                            l'acheteur de certaines prestations.<br>
                            Aucun escompte ne sera accordé en cas de paiement anticipé.<br>
                        </p>
                        <br>

                        <h3>Commande</h3>
                        <p>
                            Le client valide sa commande lorsqu'il active le lien " Confirmez votre commande " en bas de
                            la page " Récapitulatif de votre commande " après avoir accepté les présentes conditions de
                            vente. Avant cette validation, il est systématiquement proposé au client de vérifier chacun
                            des éléments de sa commande; il peut ainsi corriger ses erreurs éventuelles.<br>
                            La société DIGITALS SARL confirme la commande par courrier électronique; cette information
                            reprend notamment tous les éléments de la commande et le droit de rétractation du
                            client.<br>
                            Les données enregistrées par la société DIGITALS SARL constituent la preuve de la nature, du
                            contenu et de la date de la commande. Celle-ci est archivée par la société DIGITALS SARL
                            dans les conditions et les délais légaux; le client peut accéder à cet archivage en
                            contactant le service Relations Clients.<br>
                        </p>

                        <h3>Modalités de paiement</h3>
                        <p>Le règlement des commandes s'effectue à l'avance par carte bancaire.</p>
                        <br>

                        <h3>Délai de rétractation</h3>
                        <p>Les conseils constituent des prestations de service à exécution immédiate, au sens de
                            l'article L121-21-8 du code de la consommation. A ce titre, les clients ne pourront
                            aucunement prétendre à l'annulation de la vente et au remboursement des sommes engagées par
                            eux, ceux-ci ne bénéficient donc pas du droit de rétractation.</p>
                        <br>

                        <h3>Retard de paiement (clause applicable aux professionnels)</h3>
                        <p>
                            En cas de défaut de paiement total ou partiel des marchandises livrées au jour de la
                            réception, l'acheteur doit verser à l'entreprise . DIGITALS SARL une pénalité de retard
                            égale à une fois et demi le taux de l'intérêt légal.<br>
                            Le taux de l'intérêt légal retenu est celui en vigueur au jour de la livraison des
                            marchandises.<br>
                            Cette pénalité est calculée sur le montant hors taxes de la somme restant due, et court à
                            compter de la date d'échéance du prix sans qu'aucune mise en demeure préalable ne soit
                            nécessaire.<br>
                            Conformément aux articles 441-6 c. com. et D. 441-5 c. com., tout retard de paiement
                            entraine de plein droit, outre les pénalités de retard, une obligation pour le débiteur de
                            payer une indemnité forfaitaire de 40€ pour frais de recouvrement.<br>
                            Une indemnité complémentaire pourra être réclamée, sur justificatifs, lorsque les frais de
                            recouvrement exposés sont supérieurs au montant de l'indemnité forfaitaire.<br>
                        </p>
                        <br>

                        <h3>Livraison</h3>
                        <p>il s'agit de produits immatériels livrés exclusivement en ligne et par email.</p>
                        <br>

                        <h3>Relations clients - Service après-vente</h3>
                        <p>Pour toute information, question ou réclamation, le client peut s'adresser du lundi au
                            vendredi, de 9 h à 19 h au service Relations Clients de la société</p>
                        <br>

                        <p><b>Adresse:</b> DIGITALS SASU
                            Conseil - Formation
                            40 Rue Alexandre Dumas
                            75011 Paris
                            Tél : 01 84 25 37 39
                            Fax : 01 84 25 37 59
                            Email : contact@digitals.fr
                            Siteweb : www.digitals.fr</p>
                        <!--<p>    DIGITALS SARL, 10 Rue de Penthièvre, 75008 Paris</p>
<p>Tél : 01 85 09 94 91</p>
<p>Fax : 01 85 09 94 92</p>
<p>E-mail: contact@business-help.ma</p>-->


                        <br><br>
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