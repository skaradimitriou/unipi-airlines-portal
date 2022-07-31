<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
        <link rel="stylesheet" href="contact_styles.css">
        <script type="text/javascript" src="contact_scripts.js"></script>

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
                <a class="top_bar_link active_destination" href="contact.php">Επικοινωνία</a>
            </div>

            <div>
                <p class="website_banner_title">Επικοινωνία</p>
                <p class="website_banner_desc">Θα χαρούμε να απαντήσουμε οποιαδήποτε ερώτηση</p>
            </div>
        </div>

        <!-- Start of website's content -->

        <div class="container">
            <!-- Left Part of the main content-->
            <div class="inner" style="float:left; background-color: white;">
                        <p class="form_header">Φόρμα Επικοινωνίας</p>
                        <hr class="divider">
    
                        <form id="contact_form" method="post" action="contact_received/contact_received.php#message">
                            <label>Ονοματεπώνυμο</label><br>
                            <input id="fullname" type="text" placeholder="Εισάγετε το ονοματεπώνυμο σας"><br>
        
                            <label>E-mail Επικοινωνίας</label><br>
                            <input id="email" type="text" placeholder="Εισάγετε το e-mail σας.."><br>
        
                            <label>Θέμα</label><br>
                            <input id="subject" type="text" placeholder="Πληκτρολογήστε το θέμα..."><br>
        
                            <label>Μήνυμα</label><br>
                            <input id="description" type="text" placeholder="Πληκτρολογήστε το μήνυμα σας..."><br>
        
                            <input id="contact_send_message" class="form_btn" type="button" onclick="validateMessage()" value="Αποστολή">
                        </form>
            </div>

            <!-- Right Part of the main content-->
            <div class="inner" style="float:right; background-color: white;">
                        <p class="form_header">Στοιχεία Επικοινωνίας</p>
                        <hr class="divider">
                        

                        <div>
                            <img style="padding-right: 10px; padding-top: 10px; width: 30px; height:30px;" src="img/icons/ic_telephone.png" alt="telephone_icon"> <p class="company_details">210-6648175</p>
                            
                            <img style="padding-right: 10px; padding-top: 10px; width: 30px; height:30px;" src="img/icons/ic_mail.png" alt="mail_icon"> <p class="company_details"><a class="company_details" href="mailto:stathis_airlines_company@fakeairlines.gr">stathis_airlines_company@fakeairlines.gr</a></p>

                        </div>
                        
                        <!-- Map of Stathis airlines offices (iFrame from Google maps)-->
                        <div>
                            <iframe class="airlines_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7698.916038136049!2d23.721776163511336!3d37.98075825703352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a19e6bb8da42e1%3A0xc0609dde4db88bed!2zzp3Osc-Mz4Igz4TOv8-FIM6Xz4bOsc6vz4PPhM6_z4U!5e0!3m2!1sel!2sgr!4v1653816410136!5m2!1sel!2sgr" width="450" height="270" style="border:none;" loading="lazy"></iframe>
                        </div>
            </div>
        </div>

        <!-- End of website's content -->

        <!--Footer-->

        <div class="footer">
            <p class="footer_text">Ευχόμαστε να σας δούμε σε ένα απο τα επόμενα ταξίδια μας!</p>

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