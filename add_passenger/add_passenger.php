<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
        <link rel="stylesheet" href="add_passenger_styles.css">
        <script type="text/javascript" src="add_passenger_scripts.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <title>Νέος Επιβάτης - Stathis Airlines</title>
        <link rel="icon" type="image/x-icon" href="../img/icons/stathis_airlines_logo_white.ico">

        <!-- Allows Media Queries-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>

        <!-- Website's Banner -->

        <div id="navigation_menu" class="website_banner hero_banner">
            <a href="../index.php">
                <img class="website_logo" src="../img/icons/stathis_airlines_logo_white.png" alt="stathis_airlines_logo_sm"/>
            </a>

            <div class="my_top_bar">
                <a class="top_bar_link" href="../index.php">Αρχική</a>
                <a class="top_bar_link active_destination" href="add_passenger.php">Νέος Επιβάτης</a>
                <a class="top_bar_link" href="../search_passenger/search_passenger.php">Αναζήτηση</a>
                <a class="top_bar_link" href="../contact.php">Επικοινωνία</a>
            </div>

            <div>
                <p class="website_banner_title">Νέος Επιβάτης</p>
                <p class="website_banner_desc">Παρακάτω θα βρείτε την φόρμα για να εγγραφείτε στα μέλη της Stathis Airlines</p>
                <p class="website_banner_btn"><a class="btn_link" href="#register">Εγγραφή</a></p>
            </div>
        </div>

        <!-- Start of website's content -->

        <div id="register" class="container">
                <form action="passenger_added.php" method="post" id="add_passenger_form">
                    
                    <!-- Left section of the Form -->
                    <div class="contact_form_inner form_inner_left">
                        <p class="header">Προσωπικές Πληροφορίες</p>
                        <hr class="divider">
                        <label>Ονοματεπώνυμο Επιβάτη</label><br>
                        <input id="fullname" name="fullname" type="text" oninput="containsOnlyLatinChars('fullname')" placeholder="Εισάγετε το ονοματεπώνυμο σας"><br>

                        <label>E-mail</label><br>
                        <input id="email" name="email" type="email" placeholder="Εισάγετε το e-mail σας.."><br>

                        <label>Κωδικός Πρόσβασης</label><br>
                        <input id="password" name="password" type="password" placeholder="Εισάγετε τον κωδικό ασφαλείας σας.."><br>

                        <label>Διεύθυνση</label><br>
                        <input id="address" name="address" type="text" oninput="containsOnlyLatinChars('address')" placeholder="Εισάγετε τη διέθυνση σας"><br>
    
                        <label>Χώρα</label><br>
                        <select name="country" id="country">
                            <option value="Ελλάδα" name="country">Ελλάδα</option>
                            <option value="Αγγλία" name="country">Αγγλία</option>
                            <option value="Ισπανία" name="country">Ισπανία</option>
                            <option value="Ολλανδία" name="country">Ολλανδία</option>
                            <option value="Γερμανία" name="country">Γερμανία</option>
                            <option value="Γαλλία" name="country">Γαλλία</option>
                        </select>

                        <br>

                        <label>Ταχυδρομικός Κώδικας</label><br>
                        <input id="postalcode" name="postalcode" type="text" maxlength="5" oninput="containsOnlyNumbers('postalcode')" placeholder="Εισάγετε τον ταχυδρομικό κώδικα σας"><br>
    
                        <label>Τηλέφωνο Επικοινωνίας</label><br>
                        <input id="telephone" name="telephone" type="tel" maxlength="13" placeholder="Πληκτρολογήστε το τηλέφωνο σας..."><br>
                    </div>

                    <!-- Right section of the Form -->
                    <div class="contact_form_inner form_inner_right">
                        <p class="header">Στοιχεία Πληρωμής</p>
                        <hr class="divider">

                        <br>

                        <label>Επιλογή Τύπου Κάρτας</label><br>
                        <div style="margin-top: 8px; margin-bottom: 30px; ">
                            <input id="payment_type_visa" type="radio" id="visa" name="cardType" value="Visa">
                            <label for="visa">Visa</label>
                            <input id="payment_type_mastercard" style="margin-left: 50px;" type="radio" id="mastercard" name="cardType" value="MasterCard">
                            <label for="mastercard">MasterCard</label>
                            <input id="payment_type_other" style="margin-left: 50px;" type="radio" id="other" name="cardType" value="Άλλο">
                            <label for="other">Άλλο</label><br>
                            <p id="payment_type_error"></p>
                        </div>

                        <label>Αριθμός Κάρτας</label><br>
                        <input id="cardNo" name="cardNo" type="text" maxlength="16" oninput="containsOnlyNumbers('cardNo')" placeholder="Εισάγετε τον αριθμό της κάρτας σας"><br>
                    

                        <label>Ημερομηνία Λήξης</label><br>
                        <input id="expirationDate" name="expirationDate" type="date" maxlength="8" placeholder="Εισάγετε την ημερομηνία λήξης της κάρτας σας"><br>

                        <label>CVV</label><br>
                        <input id="cardSecurityCode" name="cardSecurityCode" type="text" maxlength="3" oninput="containsOnlyNumbers('cardSecurityCode')" placeholder="Εισάγετε τον κωδικό ασφαλείας της κάρτας σας"><br>

                        <label>Όνομα Δικαιούχου</label><br>
                        <input id="cardHolderName" name="cardHolderName" type="text" maxlength="30"placeholder="Εισάγετε το όνομα του Δικαιούχου"><br>

                        <input id="submit_btn" type="button" class="form_btn_save" onclick="validateUserInput()" value="Αποθήκευση">
                        <input type="button" class="form_btn_clean" onclick="clearFields()" value="Καθαρισμός">
                        <input type="button" class="form_btn_print" onclick="openPrintDialog()" value="Εκτύπωση">
                    </div>
                </form>
        </div>

        <!-- End of website's content -->

        <!--Footer-->

        <div class="footer">
            <p class="footer_text">Έχεις κάποια απορία; <strong>Θα χαρούμε να σε ακούσουμε!</strong></p>
            <p class="footer_btn"><a class="btn_link"href="../contact.php">Επικοινωνία</a></p>

            <!-- Sitemap -->
            <div class="footer_sitemap">
                <p class="footer_sitemap_header">Sitemap</p>
                <a href="../index.php"><p class="footer_sitemap_item">Αρχική</p></a>
                <a href="../flights.php"><p class="footer_sitemap_item">Πρόγραμμα Πτήσεων</p></a>
                <a href="../destinations.php"><p class="footer_sitemap_item">Προορισμοί</p></a>
                <a href="../useful_info.php"><p class="footer_sitemap_item">Χρήσιμες Πληροφορίες</p></a>
                <a href="add_passenger.php"><p class="footer_sitemap_item">Εισαγωγή Νέου Επιβάτη</p></a>
                <a href="../search_passenger/search_passenger.php"><p class="footer_sitemap_item">Αναζήτηση Επιβάτη</p></a>
                <a href="../contact.php"><p class="footer_sitemap_item">Επικοινωνία</p></a>
            </div>

            <a href="#navigation_menu"><img class="footer_go_up_btn" src="../img/icons/ic_go_to_top.png" alt="go_to_top_btn"></a>

            <p class="developed_by">Developed by Stathis Karadimitriou as a semester capstone project in the Web Development Course at University of Piraeus, 2022</p>
        </div>
    </body>
</html>