<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
        <link rel="stylesheet" href="useful_info_styles.css">

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
            <p class="website_banner_title">Χρήσιμες Πληροφορίες πριν το ταξίδι</p>
                <p class="website_banner_desc">Ετοιμάσαμε για εσάς μια πλήρη λίστα ταξιδιού για να μην αφήσετε τίποτα πίσω</p>
                <p class="website_banner_btn"><a class="btn_link" href="https://hotelkourosdrama.gr/wp-content/uploads/2019/08/%CE%9F%CE%B4%CE%B7%CE%B3%CF%8C%CF%82-%CF%84%CE%B1%CE%BE%CE%B9%CE%B4%CE%AF%CE%BF%CF%85-Hotelkourosdrama.gr_.pdf" target="_blank">Δείτε την λίστα</a></p>
            </div>
        </div>

        <!-- Start of website's content -->

        <div class="container_header">
            <p class="attention_header">Λίστα Ταξιδιού</p>
            <hr class="divider">
            <p class="description" style="text-align: center; margin-top:40px;">Είτε πρόκειται για το πρώτο σας ταξίδι είτε για ένα ακόμα. Είναι πάντα χρήσιμο να έχετε μία λίστα με τα πράγματα που χρειάζεται να έχετε μαζί σας.
                    Κρατήστε αυτή τη λίστα ταξιδιών, επειδή θα θέλετε να την ανατρέξετε καθώς το ταξίδι σας πλησιάζει. Θα χρησιμεύσει ως εργαλείο για να σας πει τι να συσκευάσετε, αλλά επίσης θα σας βοηθήσει να βεβαιωθείτε ότι έχετε σκεφτεί τα πάντα που μπορεί να θέλετε.</p>
            </div>
        </div>

        <div class="container">
            <div class="inner_left_text">
                <p class="attention_header">Ταξιδιωτικά Έγγραφα</p>
                <hr class="divider">
                <p class="description">Ξεκινήστε συγκεντρώνοντας όλα τα σημαντικά σας έγγραφα σε έναν διοργανωτή ταξιδιωτικών εγγράφων. (Αυτός ο διοργανωτής ταξιδιών έχει μέσα διαβατήριο, ταυτότητα, πιστωτικές κάρτες, έγγραφα, κάρτας επιβίβασης και στυλό!) Μετά τη συγκέντρωση όλων των σημαντικών σας πληροφοριών, αυτό θα σας βοηθήσει να διασφαλίσετε ότι έχετε όλα όσα χρειάζεστε για να φτάσετε από ένα μέρος στο επόμενο. Δεν είστε σίγουροι τι χρειάζεστε; Εδώ είναι η λίστα ελέγχου των εγγράφων σας για τα ταξίδια:</p>
                
                <ol style="font-family: 'Roboto', sans-serif;">
                    <li>Διαβατήριο / θεώρηση (visa)</li>
                    <li>Προσωπική ταυτότητα / ταυτότητα σπουδαστή</li>
                    <li>Μετρητά και πιστωτικές κάρτες</li>
                    <li>Κάρτες / έγγραφα ασφάλισης υγείας</li>
                    <li>Πληροφορίες ασφάλισης ταξιδιού</li>
                    <li>Κρατήσεις και δρομολόγια</li>
                    <li>Πληροφορίες επικοινωνίας ξενοδοχείου</li>
                    <li>Μεταφορικά εισιτήρια</li>
                    <li>Επαφές έκτακτης ανάγκης και σημαντικές διευθύνσεις</li>
                    <li>Αντίγραφα των εγγράφων σε περίπτωση που χάσετε το πορτοφόλι σας</li>
                    <li>Οδηγός πόλης και χαρτών</li>
                </ol> 
            </div>

            <div class="inner_right_img">
                <img style="height:300px; width: 400px; padding:16px; margin-top:20px;" src="img/useful_info/documents.jpg" alt="">
            </div>
        </div>

        <div class="container container_alt">
            <div class="inner_left_img">
                <img style="height:300px; width: 400px; float:left; padding:16px; margin-top:20px;" src="img/useful_info/leaving_home.jpg" alt="">
            </div>

            <div class="inner_right_text">
            <p class="attention_header">Πρίν φύγετε απο το σπίτι</p>
                <hr class="divider">
                <p class="description">Εάν πηγαίνετε ένα εκτεταμένο ταξίδι, είναι σημαντικό να πάρετε το σπίτι σας σε τάξη πριν φύγετε. Ακολουθούν μερικά απλά καθήκοντα για να σκεφτείτε πριν πάτε στο αεροδρόμιο. (Και ναι, αυτός ο κατάλογος ταξιδιών περιλαμβάνει επίσης τη σκέψη της φροντίδας του σπιτιού.)</p>
            
                <ol style="font-family: 'Roboto', sans-serif;">
                    <li>Ρυθμίστε έναν αυτόματο ανταποκριτή ηλεκτρονικού ταχυδρομείου</li>
                    <li>Φροντίστε για τη φροντίδα κατοικίδιων ζώων, γκαζόν και φυτών</li>
                    <li>Προπληρώστε τους λογαριασμούς σας</li>
                    <li>Αδειάστε από το ψυγείο αυτά που θα λήξουν</li>
                    <li>Αποσυνδέσετε τις συσκευές</li>
                    <li>Απενεργοποιήστε τη θερμάστρα / κλιματιστικό</li>
                    <li>Σβήστε τον θερμοσίφωνα</li>
                    <li>Απενεργοποιήστε τις βρύσες του πλυντηρίου</li>
                    <li>Κλείστε όλες τις πόρτες και τα παράθυρα</li>
                    <li>Αποθηκεύστε τα τιμαλφή σε ασφαλές μέρος</li>
                    <li>Επαναβεβαιώστε / check-in online με την αεροπορική εταιρεία πριν μεταβείτε σε αυτό</li>
                </ol>
            </div>
        </div>


        <div class="container_footer">
            <div>
                <p class="description" style="text-align: center; color: white;">Είστε έτοιμοι! <strong>Καλό σας ταξίδι!</strong></p>
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