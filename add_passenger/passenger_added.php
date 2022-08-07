<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
        <link rel="stylesheet" href="passenger_added_styles.css">

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
                <a class="top_bar_link" href="../add_passenger/add_passenger.php">Νέος Επιβάτης</a>
                <a class="top_bar_link" href="../search_passenger/search_passenger.php">Αναζήτηση</a>
                <a class="top_bar_link" href="../contact.php">Επικοινωνία</a>
            </div>

            <div>
                <p class="website_banner_title">Νέος Επιβάτης</p>
                <p class="website_banner_desc">Επιτυχής Εγγραφή</p>
            </div>
        </div>

        <!-- Start of website's content -->

        <?php

        //reads the connection data from the my_db_credentials.php file in the same directory.
        require_once '../database/my_db_credentials.php';

        //Attempt to connect to the database.
        $connection="host=".DB_SERVER." port=5432 dbname=".DB_BASE."
        user=".DB_USER." password=".DB_PASS." options='--client_encoding=UTF8'";
        $dbconn = pg_connect($connection);

        //check if db connection is successful. If it isn't, then the program closes the connection by throwing a connection error.
        if (!$dbconn) {
            die("Connection to the database has failed: " . pg_connect_error());
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //sql query that inserts a new user to the db schema
            $sql = "INSERT INTO passengers(fullname, email, username, password, address, country, postalcode, telephone, cardtype, cardno, expirationdate, cardsecuritycode, cardholdername) VALUES
            ('".$_POST['fullname']."','".$_POST['email']."','".$_POST['email']."','".$_POST['password']."','".$_POST['address']."','".$_POST['country']."','".$_POST['postalcode']."','".$_POST['telephone']."','".$_POST['cardType']."','".$_POST['cardNo']."','".$_POST['expirationDate']."','".$_POST['cardSecurityCode']."','".$_POST['cardHolderName']."') ";
        }

        // this line prints the sql query in the browser tab.
        // it is commented out because it is used for debugging purposes.
        //echo $sql;

        //execute query to the database
        $result = pg_query($dbconn, $sql) ;

        //notifies if the insert sql query has been successful
        if ($result) {
            echo '<div class="container"';
            echo '</p>';
            echo '<p class="description" style="text-align: center;">';
            echo 'Ο χρήστης έχει αποθηκευτεί επιτυχώς στη βάση δεδομένων.';
            echo '</p>';
            echo('</div>');
        } else {
            echo '<div class="container"';
            echo '</p>';
            echo '<p class="description" style="text-align: center;">';
            echo 'Υπήρξε κάποιο σφάλμα κατα την αποθήκευση των στοιχείων στη βάση δεδομένων. Δοκιμάστε ξανά';
            echo '</p>';
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
                <a href="add_passenger.php"><p class="footer_sitemap_item">Εισαγωγή Νέου Επιβάτη</p></a>
                <a href="../search_passenger/search_passenger.php"><p class="footer_sitemap_item">Αναζήτηση Επιβάτη</p></a>
                <a href="../contact.php"><p class="footer_sitemap_item">Επικοινωνία</p></a>
            </div>

            <a href="#navigation_menu"><img class="footer_go_up_btn" src="../img/icons/ic_go_to_top.png" alt="go_to_top_btn"></a>

            <p class="developed_by">Developed by Stathis Karadimitriou as a semester capstone project in the Web Development Course at University of Piraeus, 2022</p>
        </div>
    </body>
</html>