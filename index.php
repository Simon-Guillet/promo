<?php
if (!isset($_GET['lang'])){
    $lang="";
} else {
    $lang=$_GET['lang'];
}

$frHeader=["Jeu en ligne","Jeu physique","Nous contacter","Acheter","La Conquête du Monde à portée de nageoires","Essayer le jeu en ligne"];
$enHeader=["Online Game","Physical Game","Contact Us","Purchase","World Domination within the Reach of your Fins","Try the online Game"];

$frSurface=['<h3>Plutôt requin ou dauphin ? Choisis ton camp !</h3>
            <p>Les requins et les dauphins, après s’être débarrassé de l’espèce humaine qui polluait les océans, se livrent une guerre sans merci pour le contrôle de la Terre et la survie de leur espèce !
                Dans ce monde situé dans un lointain futur, commande une équipe de 10 requins ou dauphins chacun avec un type qui leur est propre mais tous armés jusqu’aux ailerons et détruis le camp adverse pour gagner la partie.
            </p>
            <h3>Description</h3>
            <p>Le jeu se joue à deux joueurs. Chacun d’entre vous contrôle 10 requin ou dauphin de type
                force, rapidité ou intelligence et de niveau variable (allant de 1 à 3) pour defendre votre ville et attaquer celle du camp adverse.
                Lancez les dés et déplacez vos personnages à travers l’Océan Pacifique pour arriver à la ville ennemie. Si vos personnages croise le chemin d’un/des personnages du
                joueur adverse, un combat démarre alors et c’est là que les types entrent en jeu. Si l’étau se resserre, votre Leader se chargera alors personnellement de faire avancer vos troupes en gagnant les combats les plus difficiles. Pour que votre espèce triomphe et gagne la guerre pour le contrôle de la Terre, vous devrez détruire la ville adverse en premier ou éradiquer
                toutes les troupes ennemies.
            </p>'];
$enSurface=['<h3>Shark, Dolphin? The choice is yours!</h3>
        <p>
            After getting rid of those pesky ocean-polluting humans, a merciless conflict for world domination and safeguarding of the race sparked between sharks and dolphins, the two species who now rule over the world.
            In this apocalyptic yet distant future, you will be tasked to lead a team of 10 excentric sharks or dolphins across the battlefield. Each of them have varying abilities and strenght but one thing’s for certain : They are all Fin-ly equipped to lay waste to their enemies and assert their dominance over Planet Earth (Conveniently renamed Planet Sea).        </p>
        <h3>Summary</h3>
        <p>
            The game is designed for two players. Each of them controls 10 shark or dolphin characters of three different types and levels: Gait, Bait or Grit going from level 1 to 3.
            Master these types and use them strategically to both defend your homeland and destroy the enemies to win the game.
            Throw the dices and launch your characters across the Pacific to reach the enemy’s Capitol. If one of your units meets your opponent’s creatures, a battle begins and that’s where types come into play. If the going gets tough, you can assign your leader to take matters into their own fins and win the most challenging battles. For your specie to triumph and gain control over the planet, you will have to either take the enemy’s city before they take yours or simply eradicate every enemy unit standing on your path to glory.
        </p>'];

$frPeuProfond=['<p>Une boîte de jeu comprend :</p>
                <ul>
                    <li>10 cartes requin et 10 cartes dauphin</li>
                    <li>11 cartes « plateau de jeu »</li>
                    <li>1 dépliant « Règles du jeu »</li>
                    <li>3 dés de couleur pour la force (rouge), la rapidité (vert) et l’intelligence (bleu) avec chacun 2 faces « 1 », 2 faces « 2 » et 2 faces « 3 ».</li>
                </ul>','Les Cartes'];
$enPeuProfond=['<p>One Pack of Supremasea contains :</p>
            <ul>
                <li>10 ‘’shark’’ cards and 10 ‘’dolphin’’ cards</li>
                <li>11 ’’battlefield’’ tiles</li>
                <li>1  flyer for the rules of the game</li>
                <li>3 coloured dices corresponding to Grit (red) Bait (blue) and Gait (green), each with 2 sides with 1 pip, 2 sides with 2 pip and 2 sides with 3 pip</li>
            </ul>','The Cards'];

$frProfond=['Inscrivez vous à notre newsletter pour ne manquer aucune information.','Votre adresse mail','Inscription newsletter'];
$enProfond=['Subscribe to our Newsletter to never miss any informations.','your e-mail address','Newsletter Subscription'];

$frTresProfond=['Des PDF/Flyers ou Affiches téléchargeables'];
$enTresProfond=['Downloadables PDF/Flyers or Posters'];

$frFooter=['Acheter','Jeu en ligne','Contact','Revenir au sommet','Service consommateurs','Politique de confidentialité','Termes Et Conditions d\'utilisation','Cookies','Politique de divulgation responsable','Réseaux sociaux : ','Langue : ','© 2021 Mascav. Tous droits réservés. Tout le contenu audio, visuel et textuel de ce site (y compris tous les noms, personnages, images et logo) est protégé par les droits d\'auteur et autres droits de propriété intellectuelle détenus par Mascav.'];
$enFooter=['Puchase','Online Game','Contact','Back to the top','Customer services','Privacy policy','Terms of Use','Cookies','Responsible Disclosure Policy','Social Medias :','Language : ','© 2021 Mascav. All rights reserved. Every content, be it audio,visual or textual, found on this website (Names, characters, images and logos included) are subjected to copyrights and other intellectual property rights held by Mascav.'];

if ($lang==="en") {
    $header=$enHeader;
    $surface=$enSurface;
    $peuProfond=$enPeuProfond;
    $profond=$enProfond;
    $tresProfond=$enTresProfond;
    $footer=$enFooter;
} else {
    $header=$frHeader;
    $surface=$frSurface;
    $peuProfond=$frPeuProfond;
    $profond=$frProfond;
    $tresProfond=$frTresProfond;
    $footer=$frFooter;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SupremaSea</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/nav-responsive.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon_io/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <nav class="topnav" id="myTopnav">
            <a href=""><?php echo $header[0]?></a>
            <a href=""><?php echo $header[1]?></a>
            <a href=""><?php echo $header[2]?></a>
            <a href="panier.php" class="button"><?php echo $header[3]?></a>
        </nav>
        <div class="presentation">
            <h1><img src="assets/img/logo_v7.png" alt="SupremaSea"></h1>
            <h2><?php echo $header[4]?></h2>
            <a href="" class="button"><?php echo $header[5]?></a>
        </div>
    </header>
    <section id="surface">
        <img class="image-packaging" src="assets/img/packshotf.jpg" alt="packaging">
        <div class="lore">
            <?php echo $surface[0]?>
        </div>
    </section>
    <section id="peuProfond">
        <div class="grille">
            <div class="liste">
                <?php echo $peuProfond[0]?>
            </div>
            <div class="apercu-cartes">
                <h3><?php echo $peuProfond[1]?></h3>
                <div id="cartes-slider">
                    <img src="assets/img/cartes/delphine.png" alt="Delphine">
                    <img src="assets/img/cartes/la_dent_de_la_mer.png" alt="La dent de la mer">
                    <img src="assets/img/cartes/shar_pille.png" alt="Shar-pille">
                    <img src="assets/img/cartes/sharkness.png" alt="Sharkness">
                    <img src="assets/img/cartes/tony_shark.png" alt="Tony Shark">
                    <img src="assets/img/cartes/will_e.png" alt="Will-E">
                </div>
            </div>
        </div>

        <img src="assets/img/cartes/plateau.jpg" alt="Plateau" id="plateau">
    </section>
    <section id="profond">
        <p><?php echo $profond[0]?></p>
        <form action="index.php" method="post">
            <input type="email" name="E-mail" id="mail" placeholder="<?php echo $profond[1]?>">
            <input type="submit" class="button" name="Inscription newsletter" value="<?php echo $profond[2]?>">
        </form>
        <?php
            require ('./database.php');
            $bdd = new PDO('mysql:host='.$servername.';dbname='.$dbname.'' , $username , $password);

            if (isset($_POST['E-mail'])){
                $mail = $_POST['E-mail'];
                $requete = "INSERT INTO mail VALUES( NULL , '$mail' )";
                $resultat = $bdd->query($requete);
                echo ('<p>Vous êtes bien inscrit !</p>');
            }

        ?>
    </section>
    <section id="tresProfond">
        <div class="pdf">
            <?php echo $tresProfond[0]?>
        </div>
    </section>
    <footer>
        <nav>
            <a href="panier.php"><?php echo $footer[0]?></a>
            <a href=""><?php echo $footer[1]?></a>
            <a href=""><?php echo $footer[2]?></a>
            <a href="#"><?php echo $footer[3]?></a>
        </nav>
        <div class="grille">
            <ul>
                <li><a href=""><?php echo $footer[4]?></a></li>
                <li><a href=""><?php echo $footer[5]?></a></li>
                <li><a href=""><?php echo $footer[6]?></a></li>
                <li><a href=""><?php echo $footer[7]?></a></li>
                <li><a href=""><?php echo $footer[8]?></a></li>
            </ul>
            <div class="reseaux">
                <p><?php echo $footer[9]?></p>
                <a href=""><img src="assets/img/facebook2.png" alt="Facebook"></a>
                <a href=""><img src="assets/img/twitter.png" alt="Twitter"></a>
                <a href=""><img src="assets/img/insta.png" alt="Instagram"></a>
            </div>
            <div class="langue">
                <p><?php echo $footer[10]?></p>
                <a href="?lang=fr"><img src="assets/img/france.png" alt="Français"></a>
                <a href="?lang=en"><img src="assets/img/united-kingdom.png" alt="English"></a>
            </div>
        </div>
        <p class="info">
            <?php echo $footer[11]?>
        </p>
        <img src="assets/img/logo_v7.png" alt="SupremaSea" class="logo">
    </footer>
</body>
</html>