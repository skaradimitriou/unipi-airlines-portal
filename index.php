<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
        <link rel="stylesheet" href="index_styles.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <title>Αρχική - Stathis Airlines</title>
        <link rel="icon" type="image/x-icon" href="img/icons/stathis_airlines_logo_white.ico">

        <!-- Allows Media Queries-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>

        <!-- Website's Banner -->

        <div id="navigation_menu" class="website_banner home_banner">
            <a href="index.php">
                <img class="website_logo" src="img/icons/stathis_airlines_logo_white.png" alt="stathis_airlines_logo_sm"/>
            </a>

            <div class="my_top_bar">
                <a class="top_bar_link active_destination" href="index.php">Αρχική</a>
                <a class="top_bar_link" href="add_passenger/add_passenger.php">Νέος Επιβάτης</a>
                <a class="top_bar_link" href="search_passenger/search_passenger.php">Αναζήτηση</a>
                <a class="top_bar_link" href="contact.php">Επικοινωνία</a>
            </div>

            <div>
                <p class="website_banner_title">Stathis Airlines</p>
                <p class="website_banner_desc">Ζήσε την εμπειρία να ανακαλύψεις τον επόμενο σου προορισμό</p>
                <a href="#categories"><img class="go_to_categories" src="img/icons/ic_go_to_top.png" alt="go_to_top_btn"></a>
            </div>
        </div>

        <!-- Start of website's content -->

        <div id ="categories" class="container">
            
            <!-- Takes up all div space-->
            <p class="container_title">Όλες οι κατηγορίες</p>

            <div class="inner" style="float:left; background-color: #ffffff;">
                <img class="inner_img" src="img/home/airport_board.jpg" alt="my_img"/>
                <p class="bold_promo_text center_text">Πρόγραμμα Πτήσεων</p>
                <a href="flights.php"><p class="center_url">Δείτε το πρόγραμμα των πτήσεων ></p></a>
            </div>

            <!-- Top item -->
            <div class="inner inner_right" style="background-color: #293462;">
                <img style="width: 50%; height:100%; float:right; border-radius: 5px; margin-left:16px;" src="img/home/airplane.jpg" alt="my_img"/>
                <p class="inner_title_left" style="color: white;">Προορισμοί</p>
                <a href="destinations.php"><p class="left_url_white">Επίλεξε τον επόμενο σου προορισμό ></p></a>
            </div>
            
            <!-- Bottom item -->
            <div class="inner inner_right" style="margin-top:20px;">
                <img style="width: 50%; height:100%; float:right; border-radius: 5px; margin-left:16px;" src="img/home/general_info_traveller.jpg" alt="my_img"/>
                <p class="inner_title_left">Χρήσιμες Πληροφορίες πριν το ταξίδι</p>
                <a href="useful_info.php"><p class="left_url">Μάθετε Περισσότερα ></p></a>
            </div>
        </div>

        <!-- End of website's content -->

        <!--Footer-->

        <div class="footer">
            <p class="footer_text">Έχεις κάποια απορία; <strong>Θα χαρούμε να σε ακούσουμε!</strong></p>
            <p class="footer_btn"><a class="btn_link"href="contact.php">Επικοινωνία</a></p>

            <!-- Sitemap -->
            <div class="footer_sitemap">
                <p class="footer_sitemap_header">Sitemap</p>
                <a href="index.php"><p class="footer_sitemap_item">Αρχική</p></a>
                <a href="flights.php"><p class="footer_sitemap_item">Πρόγραμμα Πτήσεων</p></a>
                <a href="destinations.php"><p class="footer_sitemap_item">Προορισμοί</p></a>
                <a href="useful_info.php"><p class="footer_sitemap_item">Χρήσιμες Πληροφορίες</p></a>
                <a href="add_passenger/add_passenger.php"><p class="footer_sitemap_item">Εισαγωγή Νέου Επιβάτη</p></a>
                <a href="search_passenger/search_passenger.php"><p class="footer_sitemap_item">Αναζήτηση Επιβάτη</p></a>
                <a href="contact.php"><p class="footer_sitemap_item">Επικοινωνία</p></a>
            </div>
            
            <a href="#navigation_menu"><img class="footer_go_up_btn" src="img/icons/ic_go_to_top.png" alt="go_to_top_btn"></a>

            <p class="developed_by">Developed by Stathis Karadimitriou as a semester capstone project in the Web Development Course at University of Piraeus, 2022</p>
        </div>
    </body>
</html>