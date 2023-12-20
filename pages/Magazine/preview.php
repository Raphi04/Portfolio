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
            <img src="../../ressources/screenshots/magazine.jpg" alt="Magazine de mode japonaise">
            <a href="magazine.pdf" id="voirPlus"><section>
                <p>VOIR PLUS</p>
            </section></a>
        </section>
        <section id="projectInfo">
            <h3>Graphisme</h3>
            <h2>Magazine de mode</h2>
            <p id="madeBy">Réalisé le : 17/01/2023</p>
            <p id="projectDescription">Nous devions réaliser une magazine de mode sur le theme de notre choix.<br><br>J'ai choisis pour thème le Japon car je suis un grand fan de leut culture et de leur histoire, pourvoir travaillé dessus ma grandement plus.<br><br>Pour les couleurs, j'ai repris la couleur rouge du drapeau japonais et des sanctuaires traditionnelles.</p>
            <section id="buttonContainer">
                <section id="firstButton">
                    <p>InDesign</p>
                </section>
                <section class="buttonSkills">
                    <p>Photoshop</p>
                </section>
                <section class="buttonSkills">
                    <p>Illustrator</p>
                </section>
            </section>
        </section>
    </section>
    <section id="separate"></section>
    <section id="autresProjets">
        <h2>D'AUTRES PROJETS</h2>
        <section id="portfolioContainer">
            <section class="portfolioContent redaction">
                <img src="../../ressources/screenshots/articleVivy.jpg" alt="Article de recommandation"/>
                <a href="../Vivy/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Écriture journalistique</p>
                    <p class="portfolioTitle">Vivy: Fluorite Eye’s Song</p>
                </section></a>
            </section>

            <section class="portfolioContent redaction">
                <img src="../../ressources/screenshots/productReview.jpg" alt="Recommandation Razer Kraken Pro V2"/>
                <a href="../Recommandation/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Recommandation</p>
                    <p class="portfolioTitle">Razer Kraken Pro V2</p>
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
