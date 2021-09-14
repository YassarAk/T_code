
<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codeur freelance</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="sass/responsive.css">
    <style>
        .error {
            color: #FF0000;
        }
    </style>
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
    <!-- JavaScript Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
</head>

<body>

    <header class="header">





        <div class="header__logo">codeur freelance </div>


        <nav>
            <ul class="list-menu">
                <li class="menu">
                    Prestations de Services
                    <span>&#9660;</span>
                    <ul class="list-sous-menu">
                        <li class="sous-menu"> <a href="conception.php">conception de site web </a> </li>

                        <li class="sous-menu"> <a href="App.php">Developpement <br> d'application</a> </li>
                        <li class="sous-menu"> <a href="web.php">Developpement <br> web </a> </li>
                    </ul>
                </li>
                <li class="menu"> <a href="Agence.php">Agence</a> </li>
                <li class="menu"> <a href="Assistance.php">Assistance 24h/7</a> </li>
            </ul>
        </nav>

    </header>




    <!-- HEADER__IMAGE__BANNIERE -->
    <div class="banniere">



        <h1>Bienvenue a la maison des codeur frelance !</h1>
        <p>Nous sommes des dev fullstack qu'on surnomes les tarés du code
            <span>bref,le code c'est notre quotidien. <br> Demandez des informations pour développer votre projet. </span>
        </p>
        <a href="Agence.php" class="button"> En savoir plus</a>
    </div>
    <!-- CONTENU DU SITE A PARTIR DE BANNIERE -->
    <div class="site-content">
        <div class="container">
            <div class="grid">
                <div class="sidebar">
                    <div class="sidebar-formulaire">
                        <div>
                            <h2 class="Expert">je veux consulter un expert</h2>
                        </div>
                        <div>

                            <p>
                                De quoi avez vous besoin ? veuillez presiser autant de details que posible afin de realiser une etude de faisabilité du proget.
                            </p>
                            <p> nous vous rappelons , le code c'est notre quotidien !</p>
                        </div>
                        <form method="post" action="traitement.php">
                 <?php
                    $nomErr = $emailErr  = $phoneErr =  "";
                    $nom  =   $email  =   $phone  =  $commantaire  =  "";
                 ?>
                                <div class="c100">
                                    <label for="nom">Votre Nom : </label>
                                    <input type="text" name="nom" id="nom" required="requiered" placeholder="Admin.." value="<?php echo $nom;?>">
                                    <span class="error">* <?php echo $nomErr;?></span>


                                </div>


                                <div class="c100">
                                    <label for="email">Votre Email : </label>
                                    <input type="email" name="email" id="email" required="requiered" placeholder="monsite@gmail.com.." value="<?php echo $email;?>">
                                    <span class="error">* <?php echo $emailErr;?></span>

                                </div>

                                <div class="c100">

                                    <label for="tel">Telephone : </label>
                                    <input type="number" name="phone" id="tel"required="requiered" placeholder="77-44-55-88" value="<?php echo $phone;?>">
                                    <span class="error">* <?php echo $phoneErr;?></span>

                                </div>

                                <div class="c100">
                                    <label for="">Message : </label>
                                    <textarea name="commantaire" id="" rows="5" cols="30"><?php echo $commantaire;?></textarea>
                                </div>
                                <div class="c100">

                                    <input class="submit" type="submit" name="submit" value="Envoyer">
                                </div>

                        </form>

                    </div>
                </div>
                <div class="form">
                    <div class="Tcode">Nous sommes des tarés du code !</div>
                    <img src="img/garantie.png" alt="">
                    <img src="img/codeur.png" alt="">
                    <p>La transformation numérique aujourd'hui ! La conception et le développement de sites web, les magasins virtuels et les applications mobiles sont des éléments essentiels de la la numérisation des entreprises modernes pour survivre dans
                        un monde en constante évolution. Elle touche toutes les entreprises, et toute entreprise moderne a besoin d'une présence sur Internet.Adaptez votre entreprise à la transformation numérique!. La conception de votre site web aura
                        une incidence sur la réputation, les ventes et le succès global de votre marque. Cela sera vrai qu'il s'agisse d'un simple site d'information ou d'un site complexe de commerce électronique. Même si vous avez déjà un site web, le
                        remodeler est l'un des meilleurs moyens pour les entreprises d'ateindre de nouveaux publics et de se développer.</p>
                </div>
                <div class="budget">
                    <div class="budget-png"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- INTERFACE DE CONNECTION -->
    <div class=" connexion-position">
        <div class="connected">
            <a href="index.php">
                <button class="boutonDeConnexion">Contactez</button>
            </a>

        </div>

    </div>





    <footer>
        <div class="contenu-footer">

            <div class="bloc footer-services">
                <h3>Nos Services</h3>
                <ul class="liste_services">
                    <li>
                        <a href="#">j'ai besoin d'un site web</a></li>
                    <li>
                        <a href="#">developpement de logiciel</a> </li>

                    <li>
                        <a href="#">Developpement d'applications</a> </li>

                </ul>
            </div>

            <div class="bloc name">
                <h1>CODEUR FRELANCE</h1>
                <P>Agence de conception de site web ,<br> developpement d'application et de logiciel</P>

            </div>
            <div class="bloc footer-contact">
                <h3>Contatez</h3>
                <p>info@codeurfrelance.com</p>
                <p>obtenir un devis</p>
                <div class="social">
                    <ul class="social-icons ">
                        <li>
                            <a href="http://www.facebook.com "> <img src="img/icons8-facebook.svg " alt=" "> facebook</a>
                        </li>
                        <li>
                            <a href="http://www.instagram.com"> <img src="img/icons8-instagram.svg " alt=" ">instagram</a>
                        </li>
                    </ul>
                </div>
            </div>








        </div>
        <div class="webmaster ">
            <p>Copyright © 2021 make with love by @lecode </p>
        </div>


    </footer>
    <script src="js/app.js "></script>

</body>

</html>