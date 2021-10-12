<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SupremaSea</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/nav-responsive.js"></script>
    <script src="https://unpkg.com/vue@next"></script>
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
            <a href="">Jeu en ligne</a>
            <a href="">Jeu physique</a>
            <a href="">Nous contacter</a>
            <a href="panier.php" class="button">Acheter</a>
        </nav>
    </header>

    <section id="panier">
        <h2>Panier</h2>
        <form method="post" action="panier.php">
            <div class="commande">
                <div class="image-packaging">
                    Image du jeu packaging
                </div>
                <div class="article">SupremaSea</div>
                <div class="nombre" id="divnumber">
                    <input type="number" id="number" v-model="nombreDeJeux" class="QuantitySelect" value="1" min="1" max="99">
                    <div class="prix"><span id="price">{{ nombreDeJeux*15 }}</span> €</div>
                </div>
                <a href="index.html" class="quit">
                    <i class="fa fa-close"></i>
                </a>
            </div>
            <input type="submit" value="acheter" name="Acheter" id="acheter">
        </form>
    </section>

    <footer>
        <nav>
            <a href="">Acheter</a>
            <a href="">Jeu en ligne</a>
            <a href="">Contact</a>
            <a href="">Revenir au sommet</a>
        </nav>
        <div class="grille">
            <ul>
                <li><a href="">Service consommateurs</a></li>
                <li><a href="">Politique de confidentialité</a></li>
                <li><a href="">Termes Et Conditions d'utilisation</a></li>
                <li><a href="">Cookies</a></li>
                <li><a href="">Politique de divulgation responsable</a></li>
            </ul>
            <div class="reseaux">
                <p>Réseaux sociaux : </p>
                <a href=""><img src="assets/img/facebook2.png" alt="Facebook"></a>
                <a href=""><img src="assets/img/twitter.png" alt="Twitter"></a>
                <a href=""><img src="assets/img/insta.png" alt="Instagram"></a>
            </div>
        </div>
        <p class="info">
            © 2021 Mascav. Tous droits réservés. Tout le contenu audio, visuel et textuel de ce site (y compris tous les noms, personnages, images et logo) est protégé par les droits d'auteur et autres droits de propriété intellectuelle détenus par Mascav.
        </p>
        <img src="assets/img/logo_v5.png" alt="SupremaSea" class="logo">
    </footer>
    <script>
        const appCode = {
            data(){
                return {
                    nombreDeJeux:""
                }
            }
        }
        vue1 = Vue.createApp(appCode)
        vue1.mount('#divnumber')
    </script>
</body>

























