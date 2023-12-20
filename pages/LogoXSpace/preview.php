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
            <img src="../../ressources/screenshots/logoXSpace.jpg" alt="Logo XSpace">
            <a href="logoXSpace.jpg" id="voirPlus"><section>
                <p>VOIR PLUS</p>
            </section></a>
        </section>
        <section id="projectInfo">
            <h3>Graphisme</h3>
            <h2>Logo XSpace</h2>
            <p id="madeBy">Réalisé le : 15/04/2023</p>
            <p id="projectDescription">Pour notres entreprise XSpace, nous devions réaliser un logo pour notre identité visuel.<br><br>Je me suis insipré de logo de marque hightech pour réaliser celui-ci.<br><br>J'ai choisis une police d'écriture futuriste pour montrer la révolution que cette entreprise apporte dans le monde.</p>
            <section id="buttonContainer">
                <section id="firstButton">
                    <p>Illustrator</p>
                </section>
            </section>
        </section>
    </section>
    <section id="separate"></section>
    <section id="autresProjets">
        <h2>D'AUTRES PROJETS</h2>
        <section id="portfolioContainer">
            <section class="portfolioContent graphisme">
                <img src="../../ressources/screenshots/chatDanse.jpg" alt="Expression illustré"/>
                <a href="../ExpressionIllustré/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Production graphique</p>
                    <p class="portfolioTitle">Expression illustré</p>
                </section></a>
            </section>

            <section class="portfolioContent developpement">
                <img src="../../ressources/screenshots/siteXSpace.jpg" alt="Site vitrine XSpace"/>
                <a href="../XSpace/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Site web vitrine</p>
                    <p class="portfolioTitle">XSpace</p>
                </section></a>
            </section>

            <section class="portfolioContent graphisme">
                <img src="../../ressources/screenshots/afficheXSpace.jpg" alt="Affiche XSpace"/>
                <a href="../CarrouselXSpace/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Production graphique</p>
                    <p class="portfolioTitle">Carrousel XSpace</p>
                </section></a>
            </section>
    </section>
    <hr>
    <footer>
        <p>©2023 Raphael Cadete - <a href="../mentionLégales.php" id="mentions">Mentions légales</a></p>
    </footer>
</body>
</html>
