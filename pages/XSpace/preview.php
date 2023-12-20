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
            <img src="../../ressources/screenshots/siteXSpace.jpg" alt="Site vitrine XSpace">
            <a href="XSpace/index.php" id="voirPlus"><section>
                <p>VOIR PLUS</p>
            </section></a>
        </section>
        <section id="projectInfo">
            <h3>Développement</h3>
            <h2>Site web vitrine XSpace</h2>
            <p id="madeBy">Réalisé le : 30/05/2023</p>
            <p id="projectDescription">Nous devions réalisé le site vitrine d'une société fictive XSpace.<br><br>Nous nous sommes inspiré de 5 sites concurent qu'il soit direct ou indirect.<br><br>Pour ce qui est des couleurs ou des polices d'écriture, nous avons au préalable réaliser une charte graphique et une maquette.</p>
            <section id="buttonContainer">
                <section id="firstButton">
                    <p>Theme Wordpress</p>
                </section>
                <section class="buttonSkills">
                    <p>HTML</p>
                </section>
                <section class="buttonSkills">
                    <p>CSS</p>
                </section>
                <section class="buttonSkills">
                    <p>PHP</p>
                </section>
                <section class="buttonSkills">
                    <p>JavaScript</p>
                </section>
            </section>
        </section>
    </section>
    <section id="separate"></section>
    <section id="autresProjets">
        <h2>D'AUTRES PROJETS</h2>
        <section id="portfolioContainer">
            <section class="portfolioContent graphisme">
                <img src="../../ressources/screenshots/logoXSpace.jpg" alt="Logo XSpace"/>
                <a href="../LogoXSpace/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Production graphique</p>
                    <p class="portfolioTitle">Logo XSpace</p>
                </section></a>
            </section>

            <section class="portfolioContent graphisme">
                <img src="../../ressources/screenshots/afficheXSpace.jpg" alt="Affiche XSpace"/>
                <a href="../CarrouselXSpace/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Production graphique</p>
                    <p class="portfolioTitle">Carrousel XSpace</p>
                </section></a>
            </section>

            <section class="portfolioContent developpement">
                <img src="../../ressources/screenshots/siteMusic.jpg" alt="Site Myth and Roid"/>
                <a href="../MythAndRoid/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Site web</p>
                    <p class="portfolioTitle">Myth and Roid</p>
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
