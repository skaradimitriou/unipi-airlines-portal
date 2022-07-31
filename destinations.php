<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
        <link rel="stylesheet" href="destination_styles.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <title>HTML Semester Project - S.Karadimitriou</title>
        <link rel="icon" type="image/x-icon" href="img/icons/stathis_airlines_logo.png">

        <!-- Allows Media Queries-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>

        <!-- Website's Banner -->

        <div id="navigation_menu" class="website_banner hero_banner">
            <a href="index.php">
                <img class="website_logo" src="img/icons/stathis_airlines_logo_white.png" alt="stathis_airlines_logo_sm"/>
            </a>

            <div class="my_top_bar">
                <a class="top_bar_link" href="index.php">Αρχική</a>
                <a class="top_bar_link" href="add_passenger/add_passenger.php">Νέος Επιβάτης</a>
                <a class="top_bar_link" href="search_passenger/search_passenger.php">Αναζήτηση</a>
                <a class="top_bar_link" href="contact.php">Επικοινωνία</a>
            </div>

            <div>
                <p class="website_banner_title">Προορισμοί</p>
                <p class="website_banner_desc">Επίλεξε τον επόμενο σου προορισμό μέσα απο μια πληθώρα επιλογών</p>
                <p class="website_banner_btn"><a class="btn_link" href="#interactive_map">Διαδραστικός Χάρτης</a></p>
            </div>
        </div>

        <!-- Start of website's content -->

        <div class="container">
            
        <p class="attention_header">Διαδραστική Πλοήγηση</p>
            <hr class="divider">
            <p class="description" style="text-align: center; margin-top:40px;">Πάτηστε στις τοποθεσίες με <strong>κόκκινο pin</strong> για να ανακαλύψετε τους προορισμούς.</p>


            <div id="interactive_map">
                    <img class="interactive_map_center" src="img/destinations/greece_map.png" alt="interactive_greece_map" usemap="#my_interactive_map">

                    <map name="my_interactive_map">
                        <area target="_blank" alt="Αθήνα" title="Αθήνα" href="https://www.visitgreece.gr/mainland/attica/athens/" coords="202,235,24" shape="circle">
                        <area target="_blank" alt="Κρήτη" title="Κρήτη" href="https://www.visitgreece.gr/islands/crete/" coords="261,404,62" shape="circle">
                        <area target="_blank" alt="Εύβοια" title="Εύβοια" href="https://www.visitgreece.gr/islands/evia/" coords="195,190,31" shape="circle">
                        <area target="_blank" alt="Πελοπόννησος" title="Πελοπόννησος" href="https://www.visitgreece.gr/el/mainland/peloponnese/" coords="124,274,53" shape="circle">
                        <area target="_blank" alt="Θεσσαλονίκη" title="Θεσσαλονίκη" href="https://thessaloniki.gr/" coords="179,70,30" shape="circle">
                        <area target="_blank" alt="Ρόδος" title="Ρόδος" href="https://www.visitgreece.gr/islands/dodecanese/rhodes/" coords="408,344,20" shape="circle">
                    </map>
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