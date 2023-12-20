<?php
    function errorDetector($variable){
        if (empty($_POST[$variable])){
            echo '<p class="error">*Veuillez remplir cette case</p>';
        }
    }


    function errorDetectorMail(){
        if (!empty($_POST["email"])){
            if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                echo '<p class="error">*Veuillez écrire une adresse email valide</p>';
            }
        }
    }


    function reWrite($variable) {
        if(!empty($_POST[$variable])){
            echo $_POST[$variable];
        }
    }
    $errors=0;
    foreach($_POST as $value){
        if(empty($value)){
            $errors++;
        }
    }
    if (array_key_exists("name",$_POST)){
        if($errors>0){
            ?>
                <form action="index.php#formulaire" method="post">
                    <section id="personalInfo">
                        <section class="info">
                            <input type="text" placeholder="Nom..." name="name" value="<?php reWrite("name");?>"/>
                            <?php errorDetector("name");?>
                        </section>
                        <section class="info">
                            <input type="text" placeholder="Prénom..." name="firstname" value="<?php reWrite("firstname");?>" />
                            <?php errorDetector("firstname");?>
                        </section>
                    </section>
                    <section id="personalMail">
                        <input type="text" placeholder="Adresse email..." name="email" value="<?php reWrite("email");?>"/>
                        <?php errorDetector("email");?>
                        <?php errorDetectorMail();?>
                    </section>
                    <section id="message">
                        <textarea placeholder="Votre message..." name="message"><?php reWrite("message");?></textarea>
                        <?php errorDetector("message");?>
                    </section>
                    <section id="send">
                        <input type="submit" value="ENVOYER">
                    </section>
                </form>
            <?php
        }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            ?>
            <form action="index.php#formulaire" method="post">
                <section id="personalInfo">
                    <section class="info">
                        <input type="text" placeholder="Nom..." name="name" value="<?php reWrite("name");?>"/>
                        <?php errorDetector("name");?>
                    </section>
                    <section class="info">
                        <input type="text" placeholder="Prénom..." name="firstname" value="<?php reWrite("firstname");?>" />
                        <?php errorDetector("firstname");?>
                    </section>
                </section>
                <section id="personalMail">
                    <input type="text" placeholder="Adresse email..." name="email" value="<?php reWrite("email");?>"/>
                    <?php errorDetector("email");?>
                    <?php errorDetectorMail();?>
                </section>
                <section id="message">
                    <textarea placeholder="Votre message..." name="message"><?php reWrite("message");?></textarea>
                    <?php errorDetector("message");?>
                </section>
                <section id="send">
                    <input type="submit" value="ENVOYER">
                </section>
            </form>
        <?php
        }else{
            ?>
            <form action="index.php#formulaire" method="post">
                <section id="personalInfo">
                    <section class="info">
                        <input type="text" placeholder="Nom..." name="name"/>
                    </section>
                    <section class="info">
                        <input type="text" placeholder="Prénom..." name="firstname"/>
                    </section>
                </section>
                <section id="personalMail">
                    <input type="text" placeholder="Adresse email..." name="email"/>
                </section>
                <section id="message">
                    <textarea placeholder="Votre message..." name="message"></textarea>
                </section>
                <section id="send">
                    <p id="sent">Votre message à bien été envoyé</p>
                    <input type="submit" value="ENVOYER">
                </section>
            </form>
        <?php
        }
    }else{
        ?>
            <form action="index.php#formulaire" method="post">
                <section id="personalInfo">
                    <section class="info">
                        <input type="text" placeholder="Nom..." name="name"/>
                    </section>
                    <section class="info">
                        <input type="text" placeholder="Prénom..." name="firstname"/>
                    </section>
                </section>
                <section id="personalMail">
                    <input type="text" placeholder="Adresse email..." name="email"/>
                </section>
                <section id="message">
                    <textarea placeholder="Votre message..." name="message"></textarea>
                </section>
                <section id="send">
                    <input type="submit" value="ENVOYER">
                </section>
            </form>
        <?php
    }
?>