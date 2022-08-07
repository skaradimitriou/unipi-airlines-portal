<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
        <link rel="stylesheet" href="passenger_details_styles.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <title>Στοιχεία Επιβάτη - Stathis Airlines</title>
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
                <p class="website_banner_title">Αναζήτηση Στοιχείων Χρήστη</p>
                <p class="website_banner_desc">Τα αποτελέσματα της αναζήτησης σας παρουσιάζονται παρακάτω</p>
                <a href="#profile_details"><img class="go_to_categories" src="../img/icons/ic_go_to_top.png" alt="go_to_top_btn"></a>
            </div>
        </div>

        <!-- Start of website's content -->

        <?php

        //reads the connection data from the my_db_credentials.php file in the same directory.
        require_once '../database/my_db_credentials.php';

        $searchingForEmail = "";        

        //Attempt to connect to the database.
        $connection="host=".DB_SERVER." port=5432 dbname=".DB_BASE."
        user=".DB_USER." password=".DB_PASS." options='--client_encoding=UTF8'";
        $dbconn = pg_connect($connection);

        //check if db connection is successful. If it isn't, then the program closes the connection by throwing a connection error.
        if (!$dbconn) {
            die("Connection to the database has failed: " . pg_connect_error());
        }

        if($_SERVER["REQUEST_METHOD"] == "GET"){
            //sql query to get all users that have the email that matches the search input field
            $sql = "SELECT * FROM passengers WHERE username='".$_GET['username']."' AND password='".$_GET['password']."';";
            $searchingForEmail = $_GET['username'];
        }

        // this line prints the sql query in the browser tab.
        // it is commented out because it is used for debugging purposes.
        //echo $sql;

        //execute query to the database
        $result = pg_query($dbconn, $sql) ;

        //pg_num_rows returns how many rows are there from an sql query
        $countResults = pg_num_rows($result);
        if($countResults > 0){
            while($row = pg_fetch_array($result)){
                echo '<div id="profile_details" class ="container">
                <!-- User photo -->
                <!-- Right section of the Form -->
                <div class="contact_form_inner_img form_inner_left">
                    <img class="info_user_img" src="https://p.kindpng.com/picc/s/285-2855863_a-festival-celebrating-tractors-round-profile-picture-placeholder.png" alt="user_img_placeholder"/>
                </div>
    
                <!-- User Data -->
                <!-- Right section of the Form -->
                <div class="contact_form_inner form_inner_right">
                        <p class="header">Στοιχεία Επιβάτη</p>
                        <hr class="divider">';

                        //masking cards and letting visible only the last 4 digits
                        $maskedCardNo = '**** **** **** ' . substr($row['cardno'], - 4);

                        // Creating timestamp from given date
                        $timestamp = strtotime($row['expirationdate']);

                        // Creating new date format from that timestamp
                        $new_date = date("d/m/Y", $timestamp);

                        echo("
                            <!-- User data will be in label/value format -->
                            <p class='info_label'>Ονοματεπώνυμο Επιβάτη</p>
                            <p class='info_value'>".$row['fullname']."</p>
                            <p class='info_label'>E-mail Επικοινωνίας</p>
                            <p class='info_value'>".$row['email']."</p>
                            <p class='info_label'>Διεύθυνση</p>
                            <p class='info_value'>".$row['address'].", ".$row['postalcode'].", ".$row['country']."</p>
                            <p class='info_label'>Τηλέφωνο</p>
                            <p class='info_value'>".$row['telephone']."</p>

                            <p class='header'>Στοιχεία Πληρωμής</p>
                            <hr class='divider'>

                            <!-- User payment data will be in label/value format -->
                            <p  class='info_label'>Τύπος Κάρτας</p>
                            <p  class='info_value'>".$row['cardtype']."</p>
                            <p  class='info_label'>Αρ. Κάρτας</p>
                            <p  class='info_value'>".$maskedCardNo."</p>
                            <p  class='info_label'>Ημερομηνία Λήξης</p>
                            <p  class='info_value'>".$new_date."</p>
                            <p  class='info_label'>Όνομα Δικαιούχου</p>
                            <p  class='info_value'>".$row['cardholdername']."</p>
                        ");

                        
                        
            //echo json_encode($row);
                echo '</div> </div>';
            }
        } else {
        echo '<div class="container" padding-left:50px; padding-right:50px;<br>';
        echo '<p class="description" style="text-align: center;">';
        echo "<strong>Δεν βρέθηκε</strong> εγγεγραμμένος χρήστης με e-mail ".$searchingForEmail.". <strong>Δοκιμάστε ξανά!</strong></p>";
        echo('</div>');
        }

        //close database connection to avoid leaks
        pg_close($dbconn);
        ?>

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