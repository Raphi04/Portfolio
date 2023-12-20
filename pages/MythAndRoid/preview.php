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
            <img src="../../ressources/screenshots/siteMusic.jpg" alt="Site vitrine XSpace">
            <a href="Site/index.html" id="voirPlus"><section>
                <p>VOIR PLUS</p>
            </section></a>
        </section>
        <section id="projectInfo">
            <h3>Développement</h3>
            <h2>Site web Myth and Roid</h2>
            <p id="madeBy">Réalisé le : 11/12/2022</p>
            <p id="projectDescription">Nous devions réaliser un site web sur un groupe de musique de notre choix.<br><br>Le site est composé de trois pages d'informations sur le groupe, conformément aux consignes qui nous ont été donnée.<br><br>Pour ce qui est du choix graphique, j'ai repris les couleurs et l'univers du groupe.</p>
            <section id="buttonContainer">
                <section id="firstButton">
                    <p>HTML</p>
                </section>
                <section class="buttonSkills">
                    <p>CSS</p>
                </section>
                <section class="buttonSkills">
                    <p>Python</p>
                </section>
            </section>
        </section>
    </section>
    <section id="separate"></section>
    <section id="autresProjets">
        <h2>D'AUTRES PROJETS</h2>
        <section id="portfolioContainer">
            <section class="portfolioContent developpement">
                <img src="../../ressources/screenshots/siteReserv.jpg" alt="Site de réservation"/>
                <a href="../GustaveReserv/preview.php" class="portfolioLink"><section class="portfolioOpacity">
                    <p>Site web</p>
                    <p class="portfolioTitle">Réservation Gustave Eiffel</p>
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
    </section>
    <hr>
    <footer>
        <p>©2023 Raphael Cadete - <a href="../mentionLégales.php" id="mentions">Mentions légales</a></p>
    </footer>
</body>
</html>
