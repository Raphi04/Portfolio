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
            <img src="../../ressources/screenshots/aimTrainer.jpg" alt="Aimtrainer">
            <a href="aimTrainer/aimTrainer.html" id="voirPlus"><section>
                <p>VOIR PLUS</p>
            </section></a>
        </section>
        <section id="projectInfo">
            <h3>Développement</h3>
            <h2>Jeu de visée</h2>
            <p id="madeBy">Réalisé le : 15/01/2022</p>
            <p id="projectDescription">J'ai réalisé ce projet durant mon temps libre pour m'entrainer à utiliser JavaScript.<br><br>J'ai voulu réaliser un site pour s'entrainer à la visée en rapport avec ma passion pour les FPS.<br><br>J'ai opté pour un design très minimaliste de manière à ce qu'il soit facile à coder et sans prise de tête.</p>
            <section id="buttonContainer">
                <section id="firstButton">
                    <p>HTML</p>
                </section>
                <section class="buttonSkills">
                    <p>CSS</p>
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
            <section class="portfolioContent redaction">
                <img src="../../ressources/screenshots/articleVivy.jpg" alt="Site Aim trainer"/>
                <a href="../Vivy/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Écriture journalistique</p>
                    <p class="portfolioTitle">Vivy: Fluorite Eye’s Song</p>
                </section></a>
            </section>

            <section class="portfolioContent developpement">
                <img src="../../ressources/screenshots/calculatrice.jpg" alt="Calculatrice"/>
                <a href="../Calculatrice/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Site web intéractif</p>
                    <p class="portfolioTitle">Calculatrice</p>
                </section></a>
            </section>

            <section class="portfolioContent graphisme">
                <img src="../../ressources/screenshots/chatDanse.jpg" alt="Expression illustré"/>
                <a href="../ExpressionIllustré/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Production graphique</p>
                    <p class="portfolioTitle">Expression illustré</p>
                </section></a>
            </section>
    </section>
    <hr>
    <footer>
        <p>©2023 Raphael Cadete - <a href="../mentionLégales.php" id="mentions">Mentions légales</a></p>
    </footer>
</body>
</html>
