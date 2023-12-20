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
            <img src="../../ressources/screenshots/afficheXSpace.jpg" alt="Site vitrine XSpace">
            <a href="XSpace.gif" id="voirPlus"><section>
                <p>VOIR PLUS</p>
            </section></a>
        </section>
        <section id="projectInfo">
            <h3>Graphisme</h3>
            <h2>Carrousel XSpace</h2>
            <p id="madeBy">Réalisé le : 09/05/2023</p>
            <p id="projectDescription">Nous devions réaliser un caroussel pour notre entreprise XSpace.<br><br>Pour les dimenssions, nous avons utilisé le format reels d'instagram, conformément aux consignes.<br><br>Pour le design et les couleurs, j'ai réutilisé la charte graphique que nous avons réalisé auparavant.</p>
            <section id="buttonContainer">
                <section id="firstButton">
                    <p>Photoshop</p>
                </section>
                <section class="buttonSkills">
                    <p>inDesign</p>
                </section>
            </section>
        </section>
    </section>
    <section id="separate"></section>
    <section id="autresProjets">
        <h2>D'AUTRES PROJETS</h2>
        <section id="portfolioContainer">
            <section class="portfolioContent developpement">
                <img src="../../ressources/screenshots/siteXSpace.jpg" alt="Site vitrine XSpace"/>
                <a href="../XSpace/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Site web vitrine</p>
                    <p class="portfolioTitle">XSpace</p>
                </section></a>
            </section>

            <section class="portfolioContent graphisme">
                <img src="../../ressources/screenshots/logoXSpace.jpg" alt="Logo XSpace"/>
                <a href="../LogoXSpace/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Production graphique</p>
                    <p class="portfolioTitle">Logo XSpace</p>
                </section></a>
            </section>

            <section class="portfolioContent developpement">
                <img src="../../ressources/screenshots/aimTrainer.jpg" alt="Aim Trainer"/>
                <a href="../Jeu/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Site web intéractif</p>
                    <p class="portfolioTitle">Jeu de visée</p>
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
