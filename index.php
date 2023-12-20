<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="ressources/favicon.png">
    <link rel="stylesheet" type="text/css" href="styles/mainPage.css">
    <title>Raphael Cadete - Portfolio</title>
</head>
<body>
    <header <?php if(array_key_exists("name", $_POST)){ echo 'style="background-color:#CC6464"';}?>>
        <p onClick="scrollDown('accueil')" id="accueilHead" class="here link">Accueil</p>
        <p onClick="scrollDown('aPropos')" id="aProposHead" class="link">À propos</p>
        <p onClick="scrollDown('compétences')" id="compétencesHead" class="link">Compétences</p>
        <p onClick="scrollDown('portfolio')" id="portfolioHead" class="link">Portfolio</p>
        <p onClick="scrollDown('contact')" id="contactHead" class="link">Contact</p>
    </header>
    <section id="accueil">
        <section id="opacity">
            <section id="accueilContent">
                <img id="logo" src="ressources/logo.png" alt="Logo Raphael"/>
                <h1>Raphael Cadete</h1>
                <h2>Étudiant en BUT MMI</h2>
                <img onClick="scrollDownFleche()" id="laFleche" src="ressources/laFleche.png" alt="Descendre" title="Descendre"/>
            </section>
        </section>
    </section>
    <section id="aPropos">
        <h2>À PROPOS</h2>
        <section>
            <h3>Qui suis-je?</h3>
            <p>Je m’appelle Raphael CADETE, j’ai 18 ans et j’habite dans la banlieue parisienne. Je suis actuellement <strong>étudiant en première année de BUT MMI</strong> (Métiers du Multimédia et de l’Internet), une formation durant laquelle plusieurs domaines sont abordés comme le <strong>développement</strong>, le <strong>graphisme</strong> ou bien l’<strong>audio-visuel</strong>.</p>
            <p><strong>Passionné de nouvelles technologies et d’informatique</strong> depuis mon enfance, je cherche toujours à en apprendre plus et à me renseigner sur l’actualité.</p>
            <h3>Mes compétences</h3>
            <p>Je suis capable de réaliser un <strong>site web statique (HTML/CSS/JS)</strong> mais aussi <strong>dynamique (PHP/MySQL)</strong>, dans le respect des différents critères d’<strong>accessibilités</strong> et d'<strong>ergonomie</strong>.</p>
            <p>Mes compétences de graphisme et d’audiovisuel me permettent également d’<strong>imaginer</strong> et de <strong>créer une identité visuelle</strong> qui convient à un projet, mais aussi d’en faire la promotion en ligne : <strong>site vitrine</strong> ou <strong>posts sur les réseaux sociaux</strong>.</p>
        </section>
    </section>
    <section id="compétences">
        <h2>COMPÉTENCES</h2>
        <section id="compétencesContainer">
            <section>
                <img id="tooBig" src="ressources/competences/htmlBlanc.png" alt="Logo HTML5" title="HTML/CSS"/>
                <p>HTML/CSS</p>
            </section>
            <section>
                <img src="ressources/competences/jsBlanc.png" alt="Logo JavaScript" title="JavaScript"/>
                <p>JavaScript</p>
            </section>
            <section>
                <img src="ressources/competences/phpBlanc.png" alt="Logo PHP" title="PHP"/>
                <p id="tooSmall">PHP</p>
            </section>
            <section>
                <img src="ressources/competences/sqlBlanc.png" alt="Logo MySQL" title="MySQL"/>
                <p>MySQL</p>
            </section>
            <section>
                <img src="ressources/competences/gitHubBlanc.png" alt="Logo GitHub" title="GitHub"/>
                <p>GitHub</p>
            </section>
        </section>
        <a id="CV" href="ressources/RaphaelCadeteCV.pdf" target="_blank"><section id="CVAnim">
            <p>Plus d'information sur mon CV</p>
        </section></a>
    </section>
    <section id="portfolio">
        <h2>PORTFOLIO</h2>
        <p id="portfolioIntro">Voici quelques un de mes projets réalisés au cours de ma formation</p>
        <section id="portfolioButtonContainer">
            <section onClick="allDisplay()" id="portfolioTout" class="portfolioButton here2">
                <p>Tout</p>
            </section>
            <section onClick="onlyDeveloppement()" id="portfolioDeveloppement" class="portfolioButton">
                <p>Développement</p>
            </section>
            <section onClick="onlyGraphisme()" id="portfolioGraphisme" class="portfolioButton">
                <p>Graphisme</p>
            </section>
            <section onClick="onlyRedaction()" id="portfolioRedaction" class="portfolioButton">
                <p>Rédaction</p>
            </section>
        </section>
        <section id="portfolioContainer">

            <section class="portfolioContent developpement">
                <img src="ressources/screenshots/siteReserv.jpg" alt="Site de réservation"/>
                <a href="pages/GustaveReserv/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Site web</p>
                    <p class="portfolioTitle">Réservation Gustave Eiffel</p>
                </section></a>
            </section>

            <section class="portfolioContent developpement">
                <img src="ressources/screenshots/siteXSpace.jpg" alt="Site vitrine XSpace"/>
                <a href="pages/XSpace/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Site web vitrine</p>
                    <p class="portfolioTitle">XSpace</p>
                </section></a>
            </section>

            <section class="portfolioContent redaction">
                <img src="ressources/screenshots/articleVivy.jpg" alt="Article de recommandation"/>
                <a href="pages/Vivy/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Écriture journalistique</p>
                    <p class="portfolioTitle">Vivy: Fluorite Eye’s Song</p>
                </section></a>
            </section>

            <section class="portfolioContent graphisme">
                <img src="ressources/screenshots/magazine.jpg" alt="Magazine de mode"/>
                <a href="pages/Magazine/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Production graphique</p>
                    <p class="portfolioTitle">Magazine de mode japonaise</p>
                </section></a>
            </section>

            <section class="portfolioContent developpement">
                <img src="ressources/screenshots/aimTrainer.jpg" alt="Aim Trainer"/>
                <a href="pages/Jeu/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Site web intéractif</p>
                    <p class="portfolioTitle">Jeu de visée</p>
                </section></a>
            </section>

            <section class="portfolioContent graphisme">
                <img src="ressources/screenshots/logoXSpace.jpg" alt="Logo XSpace"/>
                <a href="pages/LogoXSpace/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Production graphique</p>
                    <p class="portfolioTitle">Logo XSpace</p>
                </section></a>
            </section>

            <section class="portfolioContent redaction">
                <img src="ressources/screenshots/productReview.jpg" alt="Recommandation Razer Kraken Pro V2"/>
                <a href="pages/Recommandation/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Recommandation</p>
                    <p class="portfolioTitle">Razer Kraken Pro V2</p>
                </section></a>
            </section>

            <section class="portfolioContent graphisme">
                <img src="ressources/screenshots/afficheXSpace.jpg" alt="Affiche XSpace"/>
                <a href="pages/CarrouselXSpace/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Production graphique</p>
                    <p class="portfolioTitle">Carrousel XSpace</p>
                </section></a>
            </section>

            <section class="portfolioContent graphisme">
                <img src="ressources/screenshots/chatDanse.jpg" alt="Expression illustré"/>
                <a href="pages/ExpressionIllustré/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Production graphique</p>
                    <p class="portfolioTitle">Expression illustré</p>
                </section></a>
            </section>

            <section class="portfolioContent developpement">
                <img src="ressources/screenshots/calculatrice.jpg" alt="Calculatrice"/>
                <a href="pages/Calculatrice/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Site web intéractif</p>
                    <p class="portfolioTitle">Calculatrice</p>
                </section></a>
            </section>

            <section class="portfolioContent developpement">
                <img src="ressources/screenshots/siteMusic.jpg" alt="Site Myth and Roid"/>
                <a href="pages/MythAndRoid/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Site web</p>
                    <p class="portfolioTitle">Myth and Roid</p>
                </section></a>
            </section>
        </section>
    </section>
    <section id="contact">
        <h2>CONTACT</h2>
        <p>Pour toutes propositions ou demande d’informations supplémentaires, veuillez me contacter par le biais de ce formulaire ou bien par mail.</p>
    </section>
    <section id="formulaire">
        <?php include "includes/contact.php"; ?>
    </section>
    <section id="socialMedia">
        <section class="infoContainer">
            <img src="ressources/enveloppeBlanc.png"/>
            <p>raphaelcadete04@gmail.com</p>
        </section>
        <section class="infoContainer">
            <img src="ressources/linkedinBlanc.png"/>
            <a href="https://linkedin.com/in/raphaelcadete/"><p>linkedin.com/in/raphaelcadete/</p></a>
        </section>
        <section class="infoContainer">
            <img src="ressources/gitHubBlanc.png"/>
            <a href="https://github.com/Raphi04"><p>github.com/Raphi04</p></a>
        </section>
    </section>
    <footer>
        <p>©2023 Raphael Cadete - <a href="pages/mentionLégales.php" id="mentions">Mentions légales</a></p>
    </footer>
    <script src="scripts/mainPage.js"></script>
</body>
</html>