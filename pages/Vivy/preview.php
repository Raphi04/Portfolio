<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../ressources/favicon.png">
    <link rel="stylesheet" type="text/css" href="../../styles/preview.css">
    <title>Raphael Cadete - Portfolio</title>
</head>
<body>
    <header <?php if(array_key_exists("name", $_POST)){ echo 'style="background-color:#CC6464"';}?>>
        <a href="../../index.php#accueil" class="link"><p id="accueilHead">Accueil</p></a>
        <a href="../../index.php#aPropos" class="link"><p id="aProposHead">À propos</p></a>
        <a href="../../index.php#compétences" class="link"><p id="compétencesHead">Compétences</p></a>
        <a href="../../index.php#portfolio" class="link"><p id="portfolioHead">Portfolio</p></a>
        <a href="../../index.php#contact" class="link"><p id="contactHead">Contact</p></a>
    </header>
    <section id="mainContent">
        <section id="project">
            <img src="../../ressources/screenshots/articleVivy.jpg" alt="Article Vivy">
            <a href="Vivy.pdf" id="voirPlus"><section>
                <p>VOIR PLUS</p>
            </section></a>
        </section>
        <section id="projectInfo">
            <h3>Rédaction</h3>
            <h2>Article de recommandation de Vivy : Fluorite Eye's Song</h2>
            <p id="madeBy">Réalisé le : 25/11/2022</p>
            <p id="projectDescription">Nous devions présentez et recommandez une fiction (livre, manga, jeu vidéo, série) permettant de réfléchir aux enjeux du numériques.<br><br>Nous avons choisi de faire notre recommandation sur Vivy : Fluorite Eye's Song, cet anime rentrait parfaitement dans le sujet puisque l'histoire est centré sur l'intelligence artificielle. Nous nous sommes inspiré de différent article trouvé sur internet recommandant des fictions et nous avons essayé de les imiter.<br><br> L'objectif de ce projet était de nous faire travailelr notre écriture journalistique ainsi que notre français surtout au niveau des fautes d'orthographe.</p>
            <section id="buttonContainer">
                <section id="firstButton">
                    <p>Écriture journalistique</p>
                </section>
                <section class="buttonSkills">
                    <p>Français</p>
                </section>
            </section>
        </section>
    </section>
    <section id="separate"></section>
    <section id="autresProjets">
        <h2>D'AUTRES PROJETS</h2>
        <section id="portfolioContainer">
            <section class="portfolioContent redaction">
                <img src="../../ressources/screenshots/productReview.jpg" alt="Recommandation Razer Kraken Pro V2"/>
                <a href="../Recommandation/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Recommandation</p>
                    <p class="portfolioTitle">Razer Kraken Pro V2</p>
                </section></a>
            </section>

            <section class="portfolioContent developpement">
                <img src="../../ressources/screenshots/siteReserv.jpg" alt="Site de réservation"/>
                <a href="../GustaveReserv/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Site web</p>
                    <p class="portfolioTitle">Réservation Gustave Eiffel</p>
                </section></a>
            </section>

            <section class="portfolioContent graphisme">
                <img src="../../ressources/screenshots/magazine.jpg" alt="Magazine de mode"/>
                <a href="../Magazine/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Production graphique</p>
                    <p class="portfolioTitle">Magazine de mode japonaise</p>
                </section></a>
            </section>
        </section>
    </section>
    <hr>
    <footer>
        <p>©2023 Raphael Cadete - <a href="../mentionLégales.php" id="mentions">Mentions légales</a></p>
    </footer>
</body>
</html>
