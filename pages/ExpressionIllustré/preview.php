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
            <img src="../../ressources/screenshots/chatDanse.jpg" alt="Expression illustré">
            <a href="expression.jpg" id="voirPlus"><section>
                <p>VOIR PLUS</p>
            </section></a>
        </section>
        <section id="projectInfo">
            <h3>Graphisme</h3>
            <h2>Expression illustré</h2>
            <p id="madeBy">Réalisé le : 30/04/2023</p>
            <p id="projectDescription">Nous devions illustré une expression française en utilisant des pictograme et un texte.<br><br>Nous avions pour consigne de se limiter au seul usage du noir et du blanc.<br><br>Le texte lui, devait rester lisible dans le mesure du possible tout en habillant le pictograme.</p>
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
                <img src="../../ressources/screenshots/magazine.jpg" alt="Magazine de mode"/>
                <a href="../Magazine/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Production graphique</p>
                    <p class="portfolioTitle">Magazine de mode japonaise</p>
                </section></a>
            </section>

            <section class="portfolioContent developpement">
                <img src="../../ressources/screenshots/aimTrainer.jpg" alt="Aim Trainer"/>
                <a href="../Jeu/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Site web intéractif</p>
                    <p class="portfolioTitle">Jeu de visée</p>
                </section></a>
            </section>

            <section class="portfolioContent graphisme">
                <img src="../../ressources/screenshots/logoXSpace.jpg" alt="Logo XSpace"/>
                <a href="../LogoXSpace/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Production graphique</p>
                    <p class="portfolioTitle">Logo XSpace</p>
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
