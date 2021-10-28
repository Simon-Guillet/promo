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
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
    <nav class="topnav" id="myTopnav">
        <a href="http://mmid20b02.mmi-troyes.fr/jeu/">Jeu en ligne</a>
        <a href="index.php">Jeu physique</a>
        <a href="http://149.91.90.177/mascav/">Nous contacter</a>
        <a href="panier.php" class="button">Acheter</a>
    </nav>
</header>
    <div id="achat">
        <form action="index.php">
            <h2>Informations de Contact</h2>
            <input type="email" placeholder="Email">
            <br>
            <h2>Adresse de livraison</h2>
            <div class="grille grille1">
                <input type="text" id="nom" placeholder="Nom">
                <input type="text" id="adr" placeholder="Adresse">
                <input type="text" id="zip" placeholder="Code Postal" pattern="[0-9]*">
                <input type="text" id="ville" placeholder="Ville">
                <select id="pays">
                    <option data-code="US" value="United States">United States</option>
                    <option data-code="GB" value="United Kingdom">United Kingdom</option>
                    <option data-code="CA" value="Canada">Canada</option>
                    <option data-code="AU" value="Australia">Australia</option>
                    <option data-code="AF" value="Afghanistan">Afghanistan</option>
                    <option data-code="AX" value="Aland Islands">Åland Islands</option>
                    <option data-code="AL" value="Albania">Albania</option>
                    <option data-code="DZ" value="Algeria">Algeria</option>
                    <option data-code="AD" value="Andorra">Andorra</option>
                    <option data-code="AO" value="Angola">Angola</option>
                    <option data-code="AI" value="Anguilla">Anguilla</option>
                    <option data-code="AG" value="Antigua And Barbuda">Antigua &amp; Barbuda</option>
                    <option data-code="AR" value="Argentina">Argentina</option>
                    <option data-code="AM" value="Armenia">Armenia</option>
                    <option data-code="AW" value="Aruba">Aruba</option>
                    <option data-code="AC" value="Ascension Island">Ascension Island</option>
                    <option data-code="AU" value="Australia">Australia</option>
                    <option data-code="AT" value="Austria">Austria</option>
                    <option data-code="AZ" value="Azerbaijan">Azerbaijan</option>
                    <option data-code="BS" value="Bahamas">Bahamas</option>
                    <option data-code="BH" value="Bahrain">Bahrain</option>
                    <option data-code="BD" value="Bangladesh">Bangladesh</option>
                    <option data-code="BB" value="Barbados">Barbados</option>
                    <option data-code="BY" value="Belarus">Belarus</option>
                    <option data-code="BE" value="Belgium">Belgium</option>
                    <option data-code="BZ" value="Belize">Belize</option>
                    <option data-code="BJ" value="Benin">Benin</option>
                    <option data-code="BM" value="Bermuda">Bermuda</option>
                    <option data-code="BT" value="Bhutan">Bhutan</option>
                    <option data-code="BO" value="Bolivia">Bolivia</option>
                    <option data-code="BA" value="Bosnia And Herzegovina">Bosnia &amp; Herzegovina</option>
                    <option data-code="BW" value="Botswana">Botswana</option>
                    <option data-code="BR" value="Brazil">Brazil</option>
                    <option data-code="IO" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option data-code="VG" value="Virgin Islands, British">British Virgin Islands</option>
                    <option data-code="BN" value="Brunei">Brunei</option>
                    <option data-code="BG" value="Bulgaria">Bulgaria</option>
                    <option data-code="BF" value="Burkina Faso">Burkina Faso</option>
                    <option data-code="BI" value="Burundi">Burundi</option>
                    <option data-code="KH" value="Cambodia">Cambodia</option>
                    <option data-code="CM" value="Republic of Cameroon">Cameroon</option>
                    <option data-code="CA" value="Canada">Canada</option>
                    <option data-code="CV" value="Cape Verde">Cape Verde</option>
                    <option data-code="BQ" value="Caribbean Netherlands">Caribbean Netherlands</option>
                    <option data-code="KY" value="Cayman Islands">Cayman Islands</option>
                    <option data-code="CF" value="Central African Republic">Central African Republic</option>
                    <option data-code="TD" value="Chad">Chad</option>
                    <option data-code="CL" value="Chile">Chile</option>
                    <option data-code="CN" value="China">China</option>
                    <option data-code="CX" value="Christmas Island">Christmas Island</option>
                    <option data-code="CC" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option data-code="CO" value="Colombia">Colombia</option>
                    <option data-code="KM" value="Comoros">Comoros</option>
                    <option data-code="CG" value="Congo">Congo - Brazzaville</option>
                    <option data-code="CD" value="Congo, The Democratic Republic Of The">Congo - Kinshasa</option>
                    <option data-code="CK" value="Cook Islands">Cook Islands</option>
                    <option data-code="CR" value="Costa Rica">Costa Rica</option>
                    <option data-code="HR" value="Croatia">Croatia</option>
                    <option data-code="CW" value="Curaçao">Curaçao</option>
                    <option data-code="CY" value="Cyprus">Cyprus</option>
                    <option data-code="CZ" value="Czech Republic">Czechia</option>
                    <option data-code="CI" value="Côte d&#39;Ivoire">Côte d’Ivoire</option>
                    <option data-code="DK" value="Denmark">Denmark</option>
                    <option data-code="DJ" value="Djibouti">Djibouti</option>
                    <option data-code="DM" value="Dominica">Dominica</option>
                    <option data-code="DO" value="Dominican Republic">Dominican Republic</option>
                    <option data-code="EC" value="Ecuador">Ecuador</option>
                    <option data-code="EG" value="Egypt">Egypt</option>
                    <option data-code="SV" value="El Salvador">El Salvador</option>
                    <option data-code="GQ" value="Equatorial Guinea">Equatorial Guinea</option>
                    <option data-code="ER" value="Eritrea">Eritrea</option>
                    <option data-code="EE" value="Estonia">Estonia</option>
                    <option data-code="SZ" value="Eswatini">Eswatini</option>
                    <option data-code="ET" value="Ethiopia">Ethiopia</option>
                    <option data-code="FK" value="Falkland Islands (Malvinas)">Falkland Islands</option>
                    <option data-code="FO" value="Faroe Islands">Faroe Islands</option>
                    <option data-code="FJ" value="Fiji">Fiji</option>
                    <option data-code="FI" value="Finland">Finland</option>
                    <option data-code="FR" selected="selected" value="France">France</option>
                    <option data-code="GF" value="French Guiana">French Guiana</option>
                    <option data-code="PF" value="French Polynesia">French Polynesia</option>
                    <option data-code="TF" value="French Southern Territories">French Southern Territories</option>
                    <option data-code="GA" value="Gabon">Gabon</option>
                    <option data-code="GM" value="Gambia">Gambia</option>
                    <option data-code="GE" value="Georgia">Georgia</option>
                    <option data-code="DE" value="Germany">Germany</option>
                    <option data-code="GH" value="Ghana">Ghana</option>
                    <option data-code="GI" value="Gibraltar">Gibraltar</option>
                    <option data-code="GR" value="Greece">Greece</option>
                    <option data-code="GL" value="Greenland">Greenland</option>
                    <option data-code="GD" value="Grenada">Grenada</option>
                    <option data-code="GP" value="Guadeloupe">Guadeloupe</option>
                    <option data-code="GT" value="Guatemala">Guatemala</option>
                    <option data-code="GG" value="Guernsey">Guernsey</option>
                    <option data-code="GN" value="Guinea">Guinea</option>
                    <option data-code="GW" value="Guinea Bissau">Guinea-Bissau</option>
                    <option data-code="GY" value="Guyana">Guyana</option>
                    <option data-code="HT" value="Haiti">Haiti</option>
                    <option data-code="HN" value="Honduras">Honduras</option>
                    <option data-code="HK" value="Hong Kong">Hong Kong SAR</option>
                    <option data-code="HU" value="Hungary">Hungary</option>
                    <option data-code="IS" value="Iceland">Iceland</option>
                    <option data-code="IN" value="India">India</option>
                    <option data-code="ID" value="Indonesia">Indonesia</option>
                    <option data-code="IQ" value="Iraq">Iraq</option>
                    <option data-code="IE" value="Ireland">Ireland</option>
                    <option data-code="IM" value="Isle Of Man">Isle of Man</option>
                    <option data-code="IL" value="Israel">Israel</option>
                    <option data-code="IT" value="Italy">Italy</option>
                    <option data-code="JM" value="Jamaica">Jamaica</option>
                    <option data-code="JP" value="Japan">Japan</option>
                    <option data-code="JE" value="Jersey">Jersey</option>
                    <option data-code="JO" value="Jordan">Jordan</option>
                    <option data-code="KZ" value="Kazakhstan">Kazakhstan</option>
                    <option data-code="KE" value="Kenya">Kenya</option>
                    <option data-code="KI" value="Kiribati">Kiribati</option>
                    <option data-code="XK" value="Kosovo">Kosovo</option>
                    <option data-code="KW" value="Kuwait">Kuwait</option>
                    <option data-code="KG" value="Kyrgyzstan">Kyrgyzstan</option>
                    <option data-code="LA" value="Lao People&#39;s Democratic Republic">Laos</option>
                    <option data-code="LV" value="Latvia">Latvia</option>
                    <option data-code="LB" value="Lebanon">Lebanon</option>
                    <option data-code="LS" value="Lesotho">Lesotho</option>
                    <option data-code="LR" value="Liberia">Liberia</option>
                    <option data-code="LY" value="Libyan Arab Jamahiriya">Libya</option>
                    <option data-code="LI" value="Liechtenstein">Liechtenstein</option>
                    <option data-code="LT" value="Lithuania">Lithuania</option>
                    <option data-code="LU" value="Luxembourg">Luxembourg</option>
                    <option data-code="MO" value="Macao">Macao SAR</option>
                    <option data-code="MG" value="Madagascar">Madagascar</option>
                    <option data-code="MW" value="Malawi">Malawi</option>
                    <option data-code="MY" value="Malaysia">Malaysia</option>
                    <option data-code="MV" value="Maldives">Maldives</option>
                    <option data-code="ML" value="Mali">Mali</option>
                    <option data-code="MT" value="Malta">Malta</option>
                    <option data-code="MQ" value="Martinique">Martinique</option>
                    <option data-code="MR" value="Mauritania">Mauritania</option>
                    <option data-code="MU" value="Mauritius">Mauritius</option>
                    <option data-code="YT" value="Mayotte">Mayotte</option>
                    <option data-code="MX" value="Mexico">Mexico</option>
                    <option data-code="MD" value="Moldova, Republic of">Moldova</option>
                    <option data-code="MC" value="Monaco">Monaco</option>
                    <option data-code="MN" value="Mongolia">Mongolia</option>
                    <option data-code="ME" value="Montenegro">Montenegro</option>
                    <option data-code="MS" value="Montserrat">Montserrat</option>
                    <option data-code="MA" value="Morocco">Morocco</option>
                    <option data-code="MZ" value="Mozambique">Mozambique</option>
                    <option data-code="MM" value="Myanmar">Myanmar (Burma)</option>
                    <option data-code="NA" value="Namibia">Namibia</option>
                    <option data-code="NR" value="Nauru">Nauru</option>
                    <option data-code="NP" value="Nepal">Nepal</option>
                    <option data-code="NL" value="Netherlands">Netherlands</option>
                    <option data-code="NC" value="New Caledonia">New Caledonia</option>
                    <option data-code="NZ" value="New Zealand">New Zealand</option>
                    <option data-code="NI" value="Nicaragua">Nicaragua</option>
                    <option data-code="NE" value="Niger">Niger</option>
                    <option data-code="NG" value="Nigeria">Nigeria</option>
                    <option data-code="NU" value="Niue">Niue</option>
                    <option data-code="NF" value="Norfolk Island">Norfolk Island</option>
                    <option data-code="MK" value="North Macedonia">North Macedonia</option>
                    <option data-code="NO" value="Norway">Norway</option>
                    <option data-code="OM" value="Oman">Oman</option>
                    <option data-code="PK" value="Pakistan">Pakistan</option>
                    <option data-code="PS" value="Palestinian Territory, Occupied">Palestinian Territories</option>
                    <option data-code="PA" value="Panama">Panama</option>
                    <option data-code="PG" value="Papua New Guinea">Papua New Guinea</option>
                    <option data-code="PY" value="Paraguay">Paraguay</option>
                    <option data-code="PE" value="Peru">Peru</option>
                    <option data-code="PH" value="Philippines">Philippines</option>
                    <option data-code="PN" value="Pitcairn">Pitcairn Islands</option>
                    <option data-code="PL" value="Poland">Poland</option>
                    <option data-code="PT" value="Portugal">Portugal</option>
                    <option data-code="QA" value="Qatar">Qatar</option>
                    <option data-code="RE" value="Reunion">Réunion</option>
                    <option data-code="RO" value="Romania">Romania</option>
                    <option data-code="RU" value="Russia">Russia</option>
                    <option data-code="RW" value="Rwanda">Rwanda</option>
                    <option data-code="WS" value="Samoa">Samoa</option>
                    <option data-code="SM" value="San Marino">San Marino</option>
                    <option data-code="ST" value="Sao Tome And Principe">São Tomé &amp; Príncipe</option>
                    <option data-code="SA" value="Saudi Arabia">Saudi Arabia</option>
                    <option data-code="SN" value="Senegal">Senegal</option>
                    <option data-code="RS" value="Serbia">Serbia</option>
                    <option data-code="SC" value="Seychelles">Seychelles</option>
                    <option data-code="SL" value="Sierra Leone">Sierra Leone</option>
                    <option data-code="SG" value="Singapore">Singapore</option>
                    <option data-code="SX" value="Sint Maarten">Sint Maarten</option>
                    <option data-code="SK" value="Slovakia">Slovakia</option>
                    <option data-code="SI" value="Slovenia">Slovenia</option>
                    <option data-code="SB" value="Solomon Islands">Solomon Islands</option>
                    <option data-code="SO" value="Somalia">Somalia</option>
                    <option data-code="ZA" value="South Africa">South Africa</option>
                    <option data-code="GS" value="South Georgia And The South Sandwich Islands">South Georgia &amp; South Sandwich Islands</option>
                    <option data-code="KR" value="South Korea">South Korea</option>
                    <option data-code="SS" value="South Sudan">South Sudan</option>
                    <option data-code="ES" value="Spain">Spain</option>
                    <option data-code="LK" value="Sri Lanka">Sri Lanka</option>
                    <option data-code="BL" value="Saint Barthélemy">St. Barthélemy</option>
                    <option data-code="SH" value="Saint Helena">St. Helena</option>
                    <option data-code="KN" value="Saint Kitts And Nevis">St. Kitts &amp; Nevis</option>
                    <option data-code="LC" value="Saint Lucia">St. Lucia</option>
                    <option data-code="MF" value="Saint Martin">St. Martin</option>
                    <option data-code="PM" value="Saint Pierre And Miquelon">St. Pierre &amp; Miquelon</option>
                    <option data-code="VC" value="St. Vincent">St. Vincent &amp; Grenadines</option>
                    <option data-code="SD" value="Sudan">Sudan</option>
                    <option data-code="SR" value="Suriname">Suriname</option>
                    <option data-code="SJ" value="Svalbard And Jan Mayen">Svalbard &amp; Jan Mayen</option>
                    <option data-code="SE" value="Sweden">Sweden</option>
                    <option data-code="CH" value="Switzerland">Switzerland</option>
                    <option data-code="TW" value="Taiwan">Taiwan</option>
                    <option data-code="TJ" value="Tajikistan">Tajikistan</option>
                    <option data-code="TZ" value="Tanzania, United Republic Of">Tanzania</option>
                    <option data-code="TH" value="Thailand">Thailand</option>
                    <option data-code="TL" value="Timor Leste">Timor-Leste</option>
                    <option data-code="TG" value="Togo">Togo</option>
                    <option data-code="TK" value="Tokelau">Tokelau</option>
                    <option data-code="TO" value="Tonga">Tonga</option>
                    <option data-code="TT" value="Trinidad and Tobago">Trinidad &amp; Tobago</option>
                    <option data-code="TA" value="Tristan da Cunha">Tristan da Cunha</option>
                    <option data-code="TN" value="Tunisia">Tunisia</option>
                    <option data-code="TR" value="Turkey">Turkey</option>
                    <option data-code="TM" value="Turkmenistan">Turkmenistan</option>
                    <option data-code="TC" value="Turks and Caicos Islands">Turks &amp; Caicos Islands</option>
                    <option data-code="TV" value="Tuvalu">Tuvalu</option>
                    <option data-code="UM" value="United States Minor Outlying Islands">U.S. Outlying Islands</option>
                    <option data-code="UG" value="Uganda">Uganda</option>
                    <option data-code="UA" value="Ukraine">Ukraine</option>
                    <option data-code="AE" value="United Arab Emirates">United Arab Emirates</option>
                    <option data-code="GB" value="United Kingdom">United Kingdom</option>
                    <option data-code="US" value="United States">United States</option>
                    <option data-code="UY" value="Uruguay">Uruguay</option>
                    <option data-code="UZ" value="Uzbekistan">Uzbekistan</option>
                    <option data-code="VU" value="Vanuatu">Vanuatu</option>
                    <option data-code="VA" value="Holy See (Vatican City State)">Vatican City</option>
                    <option data-code="VE" value="Venezuela">Venezuela</option>
                    <option data-code="VN" value="Vietnam">Vietnam</option>
                    <option data-code="WF" value="Wallis And Futuna">Wallis &amp; Futuna</option>
                    <option data-code="EH" value="Western Sahara">Western Sahara</option>
                    <option data-code="YE" value="Yemen">Yemen</option>
                    <option data-code="ZM" value="Zambia">Zambia</option>
                    <option data-code="ZW" value="Zimbabwe">Zimbabwe</option></select>
                <input type="tel" id="tel" placeholder="Téléphone">
            </div>
            <br>
            <h2>Informations de payment</h2>
            <div class="grille grille2">
                <input type="text" id="num" placeholder="Numéro de Carte">
                <input type="text" id="nom" placeholder="Nom sur la carte">
                <input type="text" id="date" placeholder="Date d'expiration">
                <input type="text" id="secu" placeholder="Code Sécurité">
            </div>
            <br>
            <input type="submit" class="button" value="Acheter">
        </form>
    </div>

    <footer>
        <nav>
            <a href="panier.php">Acheter</a>
            <a href="http://mmid20b02.mmi-troyes.fr/jeu/">Jeu en ligne</a>
            <a href="http://149.91.90.177/mascav/">Contact</a>
            <a href="#">Revenir au sommet</a>
        </nav>
        <div class="grille">
            <ul>
                <li><a href="http://149.91.90.177/mascav/">Service consommateurs</a></li>
                <li><a href="legal.php#confidentialite">Politique de confidentialité</a></li>
                <li><a href="legal.php#utilisation">Conditions générales d'utilisation</a></li>
                <li><a href="">Cookies</a></li>
                <li><a href="legal.php#divulgation">Politique de divulgation responsable</a></li>
            </ul>
            <div class="reseaux">
                <p>Réseaux sociaux : </p>
                <a href="https://www.facebook.com/profile.php?id=100074103799212"><img src="assets/img/facebook2.png" alt="Facebook"></a>
                <a href="http://twitter.com"><img src="assets/img/twitter.png" alt="Twitter"></a>
                <a href="http://intagram.com"><img src="assets/img/insta.png" alt="Instagram"></a>
            </div>
            <div class="langue">
                <p>Langue : </p>
                <a href="?lang=fr"><img src="assets/img/france.png" alt="Français"></a>
                <a href="?lang=en"><img src="assets/img/united-kingdom.png" alt="English"></a>
            </div>
        </div>
        <p class="info">
            © 2021 Mascav. Tous droits réservés. Tout le contenu audio, visuel et textuel de ce site (y compris tous les noms, personnages, images et logo) est protégé par les droits d'auteur et autres droits de propriété intellectuelle détenus par Mascav.
        </p>
        <img src="assets/img/logo_v7.png" alt="SupremaSea" class="logo">
    </footer>
</body>