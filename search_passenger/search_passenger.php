<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
        <link rel="stylesheet" href="search_passenger_styles.css">
        <script type="text/javascript" src="search_passenger_scripts.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <title>Αναζήτηση Επιβάτη - Stathis Airlines</title>
        <link rel="icon" type="image/x-icon" href="img/icons/stathis_airlines_logo_white.ico">

        <!-- Allows Media Queries-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <!-- Website's Banner -->

        <div id="navigation_menu" class="website_banner home_banner">
            <a href="../index.php">
                <img class="website_logo" src="../img/icons/stathis_airlines_logo_white.png" alt="stathis_airlines_logo_sm"/>
            </a>

            <div class="my_top_bar">
                <a class="top_bar_link" href="../index.php">Αρχική</a>
                <a class="top_bar_link" href="../add_passenger/add_passenger.php">Νέος Επιβάτης</a>
                <a class="top_bar_link active_destination" href="../search_passenger/search_passenger.php">Αναζήτηση</a>
                <a class="top_bar_link" href="../contact.php">Επικοινωνία</a>
            </div>

            <div>
                <p class="website_banner_title">#myAccount</p>
                <p class="website_banner_desc">Πραγματοποιείστε είσοδο με τα στοιχεία σας για να δείτε το προφίλ σας</p>
            </div>

            <!-- Search User data by user email -->
            <div id="search_by_mail">
                    <form method="get" action="../details_page/passenger_details.php">
                        <input id="username" name="username" type="email" placeholder="E-mail / Username Χρήστη"><br>
                        <input id="password" name="password" type="password" placeholder="Κωδικός Πρόσβασης Χρήστη"><br>

                        <input class="promo_banner_btn btn_link" type="submit" value="Αναζήτηση">
                        <input class="promo_banner_btn_clean" type="button"  onclick="clearSearchBox()" value="Καθαρισμός">
                    </form>
            </div>
        </div>

        <!-- Start of website's content -->

        

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
                <a href="../add_passenger/add_passenger.php"><p class="footer_sitemap_item">Εισαγωγή Νέου Επιβάτη</p></a>
                <a href="../search_passenger/search_passenger.php"><p class="footer_sitemap_item">Αναζήτηση Επιβάτη</p></a>
                <a href="../contact.php"><p class="footer_sitemap_item">Επικοινωνία</p></a>
            </div>
            
            <a href="#navigation_menu"><img class="footer_go_up_btn" src="../img/icons/ic_go_to_top.png" alt="go_to_top_btn"></a>

            <p class="developed_by">Developed by Stathis Karadimitriou as a semester capstone project in the Web Development Course at University of Piraeus, 2022</p>
        </div>
    </body>
</html>
