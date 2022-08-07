<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
        <link rel="stylesheet" href="flights_styles.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <title>Πρόγραμμα Πτήσεων - Stathis Airlines</title>
        <link rel="icon" type="image/x-icon" href="img/icons/stathis_airlines_logo_white.ico">

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
                <p class="website_banner_title">Πρόγραμμα Πτήσεων</p>
                <p class="website_banner_desc">Παρακάτω μπορείτε να δείτε το πρόγραμμα των πτήσεων για το επόμενο διάστημα απο το αεροδρόμιο της Αθήνας</p>
                <p class="website_banner_btn"><a class="btn_link" href="#flights_table">Μάθε Περισσότερα</a></p>
            </div>
        </div>

        <!-- Start of website's content -->

        <div class="descriptive_text">
            <p class="attention_header">Ισχύς Προγράμματος Πτήσεων</p>
            <hr class="divider">
            <p class="description" style="text-align: center; margin-top:40px;">Το πρόγραμμα αφορά τις πτήσεις <strong>από σήμερα Κυριακή 24 Ιουλίου έως και τις 29 Οκτωβρίου</strong>, με την επισήμανση οτι <strong>ενδέχεται να υπάρξουν κάποιες αλλαγές</strong> σε ορισμένες πτήσεις, για τις οποίες θα <strong>υπάρξει νεότερη ενημέρωση.</strong> </p>
        </div>

        <div class="container">
            <div id="flights_table" class="responsive_table">
                <table  style="width:100%; padding-top:32px; text-align: center;">
                    <tr>
                        <th>Αεροπορική Εταιρία</td>
                        <th>Κωδικός Πτήσης</th>
                        <th>Αεροδρόμιο Αναχώρησης</td>
                        <th>Προορισμός</th></td>
                        <th>Ώρα Αναχώρησης</th>
                        
                    </tr>
                    <tr>
                        <td>Aegean Airlines</td>
                        <td>ABC123</td>
                        <td>ATH (Αθήνα)</td>
                        <td>HER (Ηράκλειο)</td>
                        <td>10:15</td>
                    </tr>
                    <tr>
                        <td>Aegean Airlines</td>
                        <td>SGT876</td>
                        <td>ATH (Αθήνα)</td>
                        <td>SKG (Θεσσαλονίκη)</td>
                        <td>13:15</td>
                    </tr>
                    <tr>
                        <td>Sky Express</td>
                        <td>SGT876</td>
                        <td>ATH (Αθήνα)</td>
                        <td>SKG (Θεσσαλονίκη)</td>
                        <td>12:35</td>
                    </tr>
                    <tr>
                        <td>Ryanair</td>
                        <td>RAD982</td>
                        <td>ATH (Αθήνα)</td>
                        <td>JTR (Σαντορίνη)</td>
                        <td>18:10</td>
                    </tr>
                    <tr>
                        <td>Aegean Airlines</td>
                        <td>GHF548</td>
                        <td>ATH (Αθήνα)</td>
                        <td>SMI (Σάμος)</td>
                        <td>17:20</td>
                    </tr>
                    <tr>
                        <td>Ryanair</td>
                        <td>RAD548</td>
                        <td>ATH (Αθήνα)</td>
                        <td>RHO (Ρόδος)</td>
                        <td>11:50</td>
                    </tr>
                    <tr>
                        <td>Ryanair</td>
                        <td>AMH548</td>
                        <td>ATH (Αθήνα)</td>
                        <td>CHQ (Χανιά)</td>
                        <td>19:10</td>
                    </tr>
                    <tr>
                        <td>Sky Express</td>
                        <td>POJ982</td>
                        <td>ATH (Αθήνα)</td>
                        <td>JHU (Χίος)</td>
                        <td>10:25</td>
                    </tr>
                    <tr>
                        <td>Sky Express</td>
                        <td>LAM900</td>
                        <td>ATH (Αθήνα)</td>
                        <td>HBE (Αλεξανδρούπολη)</td>
                        <td>14:20</td>
                    </tr>
                    <tr>
                        <td>Ryanair</td>
                        <td>RAD548</td>
                        <td>ATH (Αθήνα)</td>
                        <td>RHO (Ρόδος)</td>
                        <td>11:50</td>
                    </tr>
                    <tr>
                        <td>Aegean Airlines</td>
                        <td>ABC123</td>
                        <td>ATH (Αθήνα)</td>
                        <td>HER (Ηράκλειο)</td>
                        <td>10:15</td>
                    </tr>
                    <tr>
                        <td>Aegean Airlines</td>
                        <td>ACP345</td>
                        <td>ATH (Αθήνα)</td>
                        <td>CHQ (Χανιά)</td>
                        <td>22:10</td>
                    </tr>
                    <tr>
                        <td>Ryanair</td>
                        <td>RAD548</td>
                        <td>ATH (Αθήνα)</td>
                        <td>RHO (Ρόδος)</td>
                        <td>11:50</td>
                    </tr>
                    <tr>
                        <td>Ryanair</td>
                        <td>RAD548</td>
                        <td>ATH (Αθήνα)</td>
                        <td>RHO (Ρόδος)</td>
                        <td>16:50</td>
                    </tr>
                    <tr>
                        <td>Sky Express</td>
                        <td>SGT876</td>
                        <td>ATH (Αθήνα)</td>
                        <td>SKG (Θεσσαλονίκη)</td>
                        <td>12:35</td>
                    </tr>
                    <tr>
                        <td>Ryanair</td>
                        <td>RAD548</td>
                        <td>ATH (Αθήνα)</td>
                        <td>RHO (Ρόδος)</td>
                        <td>11:50</td>
                    </tr>
                    <tr>
                        <td>Sky Express</td>
                        <td>POJ982</td>
                        <td>ATH (Αθήνα)</td>
                        <td>JHU (Χίος)</td>
                        <td>10:25</td>
                    </tr>
                    <tr>
                        <td>Aegean Airlines</td>
                        <td>GHF548</td>
                        <td>ATH (Αθήνα)</td>
                        <td>SMI (Σάμος)</td>
                        <td>17:20</td>
                    </tr>
                    <tr>
                        <td>Aegean Airlines</td>
                        <td>GHF548</td>
                        <td>ATH (Αθήνα)</td>
                        <td>SMI (Σάμος)</td>
                        <td>17:20</td>
                    </tr>
                    <tr>
                        <td>Aegean Airlines</td>
                        <td>ABC123</td>
                        <td>ATH (Αθήνα)</td>
                        <td>HER (Ηράκλειο)</td>
                        <td>10:15</td>
                    </tr>
                </table>
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