<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
        <link rel="stylesheet" href="contact_received_styles.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <title>Επικοινωνία - Stathis Airlines</title>
        <link rel="icon" type="image/x-icon" href="img/icons/stathis_airlines_logo_white.ico">

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
                <a class="top_bar_link" href="../add_passenger/add_passenger.php">Νέος Επιβάτης</a>
                <a class="top_bar_link" href="../search_passenger/search_passenger.php">Αναζήτηση</a>
                <a class="top_bar_link" href="../contact.php">Επικοινωνία</a>
            </div>

            <div>
                <p class="website_banner_title">Επικοινωνία</p>
                <p class="website_banner_desc">Θα χαρούμε να απαντήσουμε οποιαδήποτε ερώτηση</p>
            </div>
        </div>

        <!-- Start of website's content -->

        <div id="message" class="container">
                <p class="form_header">Παραλάβαμε το μήνυμα σας</p>
                <hr class="divider">
                <p class="description" style="text-align: center; margin-top:40px;">Θα απαντήσουμε στο ερώτημα σας <strong>το συντομότερο δυνατόν.</strong> Μέχρι τότε, μπορείτε να περιηγηθείτε στον ιστότοπο μας.</p>
        </div>

        <!-- End of website's content -->

        <!--Footer-->

        <div class="footer">
            <p class="footer_text">Ευχόμαστε να σας δούμε σε ένα απο τα επόμενα ταξίδια μας!</p>

            <!-- Sitemap -->
            <div class="footer_sitemap">
                <p class="footer_sitemap_header">Sitemap</p>
                <a href="../index.php"><p class="footer_sitemap_item">Αρχική</p></a>
                <a href="../flights.php"><p class="footer_sitemap_item">Πρόγραμμα Πτήσεων</p></a>
                <a href="../destinations.php"><p class="footer_sitemap_item">Προορισμοί</p></a>
                <a href="../useful_info.php"><p class="footer_sitemap_item">Χρήσιμες Πληροφορίες</p></a>
                <a href="../add_passenger/add_passenger.php"><p class="footer_sitemap_item">Εισαγωγή Νέου Επιβάτη</p></a>
                <a href="../search_passenger/search_passenger.php"><p class="footer_sitemap_item">Αναζήτηση Επιβάτη</p></a>
                <a href="../contact.php"><p class="footer_sitemap_item">Επικοινωνία</p></a>
            </div>

            <a href="#navigation_menu"><img class="footer_go_up_btn" src="../img/icons/ic_go_to_top.png" alt="go_to_top_btn"></a>

            <p class="developed_by">Developed by Stathis Karadimitriou as a semester capstone project in the Web Development Course at University of Piraeus, 2022</p>
        </div>
    </body>
</html>