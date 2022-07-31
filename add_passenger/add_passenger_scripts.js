/*
 * This method clears all input fields from the Personal Details & Payment Method Forms.
 */

function clearFields(){
    document.getElementById("fullname").value = "";
    document.getElementById("email").value = "";
    document.getElementById("password").value = "";
    document.getElementById("address").value = "";
    document.getElementById("country").value = "Ελλάδα";
    document.getElementById("postalcode").value = "";
    document.getElementById("telephone").value = "";

    document.getElementById("payment_type_visa").checked = false;
    document.getElementById("payment_type_mastercard").checked = false;
    document.getElementById("payment_type_other").checked = false;

    document.getElementById("cardNo").value = "";
    document.getElementById("expirationDate").value = "";
    document.getElementById("cardSecurityCode").value = "";
    document.getElementById("cardHolderName").value = "";
}

/* 
 * Opens the print dialog in the default browser
 */

function openPrintDialog(){
    console.log("user is prompted to print dialog");
    window.print();
}

/**
 * Function that contains only latin characters on text change
 */

 function containsOnlyLatinChars(fieldName){
    let field =  document.getElementById(fieldName).value;

    const reg = new RegExp('^[a-zA-Z ]+$');
    if(field != ""){
        if(!(reg.test(field))){
            alert("Το πεδίο αυτό θα πρέπει να περιέχει μόνο Λατινικούς χαρακτήρες.");
            document.getElementById(fieldName).value = "";
            document.getElementById(fieldName).placeholder = "Το πεδίο θα πρέπει να περιέχει μόνο Λατινικούς χαρακτήρες.";
            document.getElementById(fieldName).style = "border:1px solid red;";
        } else {
            document.getElementById(fieldName).style = "border:none";
        }
    }
}

/**
 * Function that contains only number characters on text change
 */

 function containsOnlyNumbers(fieldName){
    let field =  document.getElementById(fieldName).value;

    const reg = new RegExp('^[0-9]+$');
    if(field != ""){
        if(!(reg.test(field))){
            alert("Το πεδίο αυτό θα πρέπει να περιέχει μόνο αριθμούς.");
            document.getElementById(fieldName).value = "";
            document.getElementById(fieldName).placeholder = "Το πεδίο αυτό θα πρέπει να περιέχει μόνο αριθμούς.";
            document.getElementById(fieldName).style = "border:1px solid red;";
        } else {
            document.getElementById(fieldName).style = "border:none";
        }
    }
}

/**
 * Function that checks if given string contains number
 */

function containsNumber(text){
    var hasNumber = /\d/;
    if(hasNumber.test(text)){
        return true;
    } else {
        return false;
    }
}

/**
 * Function that checks if given string contains number
 */

 function containsNumber(text){
    var hasNumber = /\d/;
    if(hasNumber.test(text)){
        return true;
    } else {
        return false;
    }
}

/**
 * Function that checks if given string contains at least one capital char
 */

function containsUppercaseChar(str){
    for (var i=0; i<str.length; i++){
      if (str.charAt(i) == str.charAt(i).toUpperCase() && str.charAt(i).match(/[a-z]/i)){
        return true;
      }
    }
    return false;
};

/**
 * Function that checks if the password is valid
 */

function validatePassword(password){
    if(containsNumber(password) && containsUppercaseChar(password) && password.length > 8){
        document.getElementById("password").style = "border:1px solid green;";
        return true;
    } else {
        alert("Ο κωδικός θα πρέπει να είναι τουλάχιστον 8 χαρακτήρες, εναν αριθμό και ένα κεφαλαίο χαρακτήρα");
        document.getElementById("password").value = "";
        document.getElementById("password").placeholder = "Ο κωδικός θα πρέπει να είναι τουλάχιστον 8 χαρακτήρες, εναν αριθμό και ένα κεφαλαίο χαρακτήρα";
        document.getElementById("password").style = "border:1px solid red;";
        return false;
    }
}


/**
 * This file is responsible for the three button click events.
 * 
 * First Btn alerts the data that his data has been saved successfully.
 * Second Btn clears all input fields from the Personal Details & Payment Method Forms
 * Third Btn prompts the user to print his data.
 */

 function validateUserInput(){
    let fullName = document.getElementById("fullname").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    let address = document.getElementById("address").value;
    let country = document.getElementById("country").value;
    let postalCode = document.getElementById("postalcode").value;
    let telephone = document.getElementById("telephone").value;
    
    var paymentCardType = "";
    if(document.getElementById("payment_type_visa").checked == true){
        paymentCardType = "Visa";
    } else if (document.getElementById("payment_type_mastercard").checked == true){
        paymentCardType = "Mastercard";
    } else {
        paymentCardType = "Άλλο";
    }

    let cardNo = document.getElementById("cardNo").value;
    let cardExpireDate = document.getElementById("expirationDate").value;
    let cardSecurityCode = document.getElementById("cardSecurityCode").value;
    let cardHolderName = document.getElementById("cardHolderName").value;

    let fullNameVerified = validateField(fullName,"fullname");
    let passwordVerified = validatePassword(password, "password");
    let addressVerified = validateField(address,"address");
    let countryVerified = validateField(country, "country");
    let postalCodeVerified = validatePostalCode(postalCode);
    let emailValidated = validateEmail(email);
    let phoneValidated = validateTelephone(telephone);

    let paymentTypeVerified = validatePaymentType(paymentCardType);
    let cardNoVerified = validateField(cardNo, "cardNo");
    let cardExpireDateVerified = validateField(cardExpireDate, "expirationDate");
    let cardSecurityCodeVerified = validateField(cardSecurityCode, "cardSecurityCode");
    let cardHolderNameVerified = validateField(cardHolderName, "cardHolderName");

    let allFieldsFilled = checkIfAllFieldsAreFilled();
    
    if(fullNameVerified && passwordVerified && addressVerified && countryVerified && postalCodeVerified && emailValidated && phoneValidated && 
        paymentTypeVerified && cardNoVerified && cardExpireDateVerified && cardSecurityCodeVerified && cardHolderNameVerified && allFieldsFilled){
        saveUserData();
    } else {
        console.log("Error while saving data");   
    }
}

function saveUserData() {
    let fullName = document.getElementById("fullname").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let address = document.getElementById("address").value;
    let country = document.getElementById("country").value;
    let postalCode = document.getElementById("postalcode").value;
    
    let telephone = document.getElementById("telephone").value;

    var paymentCardType = "";
    if(document.getElementById("payment_type_visa").checked == true){
        paymentCardType = "Visa";
    } else if (document.getElementById("payment_type_mastercard").checked == true){
        paymentCardType = "Mastercard";
    } else if(document.getElementById("payment_type_other").checked == true){
        paymentCardType = "Άλλο";
    } else {
        paymentCardType = "Unknown";
    }

    let cardNo = document.getElementById("cardNo").value;
    let cardExpireDate = document.getElementById("expirationDate").value;
    let cardSecurityCode = document.getElementById("cardSecurityCode").value;
    let cardHolderName = document.getElementById("cardHolderName").value;

    alert("Τα στοιχεία σας αποθηκεύθηκαν επιτυχώς στο σύστημα.");
    logPersonalDetails(fullName, password, address, country, postalCode, email, telephone, paymentCardType, cardNo, cardExpireDate, cardSecurityCode, cardHolderName);
    clearFields();
}

function logPersonalDetails(fullname, password, address, country, postalCode, email, telephone, paymentCardType, cardNo, cardExpireDate, cardSecurityCode, cardHolderName){
    console.log("Personal Details:");
    console.log("Full Name:" + " " + fullname);
    console.log("Password:" + " " + password);
    console.log("Address:" + " " + address);
    console.log("Country:" + " " + country);
    console.log("Postal Code:" + " " + postalCode);
    console.log("Email:" + " " + email);
    console.log("Telephone:" + " " + telephone);
    
    console.log("Payment Details:")
    console.log("Card Type:" + " " + paymentCardType);
    console.log("Card Number:" + " " + cardNo);
    console.log("Card Expire Date:" + " " + cardExpireDate);
    console.log("Card Security Code:" + " " + cardSecurityCode);
    console.log("Card Holder Name:" + " " + cardHolderName);

    document.getElementById("add_passenger_form").submit();
}

function checkIfAllFieldsAreFilled(){
    let fullName = document.getElementById("fullname").value;
    let password = document.getElementById("password").value;
    let email = document.getElementById("email").value;
    let address = document.getElementById("address").value;
    let country = document.getElementById("country").value;
    let postalCode = document.getElementById("postalcode").value;
    let telephone = document.getElementById("telephone").value;

    var paymentCardType = "";
    if(document.getElementById("payment_type_visa").checked == true){
        paymentCardType = "Visa";
    } else if (document.getElementById("payment_type_mastercard").checked == true){
        paymentCardType = "Mastercard";
    } else if (document.getElementById("payment_type_other").checked == true){
        paymentCardType = "Άλλο";
    } else {
        paymentCardType = "Unknown";
    }

    let card_no = document.getElementById("cardNo").value;
    let card_expire_date = document.getElementById("expirationDate").value;
    let card_security_code = document.getElementById("cardSecurityCode").value;
    let card_holder_name = document.getElementById("cardHolderName").value;

    if(isFilled(fullName) && isFilled(password) && isFilled(address) && isFilled(country) && isFilled(postalCode) && isFilled(email) && isFilled(telephone) &&
    isFilled(paymentCardType) && isFilled(card_no) && isFilled(card_expire_date) && isFilled(card_security_code) && isFilled(card_holder_name)){
         return true;
    } else {
        return false;
    }
}

function isFilled(field){
    return field.length != 0;
}

function validateField(inputTxt, fieldName){
    if(inputTxt.length != 0){
        document.getElementById(fieldName).style = "border:1px solid green;";
        return true;
    } else {
        alert("Το πεδίο" + " " + fieldName + " " + "είναι κενό");
        document.getElementById(fieldName).style = "border:1px solid red;";
        document.getElementById(fieldName).placeholder = "Το πεδίο δεν πρέπει να είναι άδειο";
        return false;
    }
}

function validatePaymentType(paymentCardType){
    if(paymentCardType == ""){
        alert("Επίλεξτε μια απο τις 3 επιλογές για τον τύπο της κάρτας σας");
        document.getElementById("payment_type_error").innerHTML = "Επίλεξτε μια απο τις 3 επιλογές για τον τύπο της κάρτας σας";
        document.getElementById("payment_type_error").style = "color: red; font-family: 'Roboto', sans-serif; font-size:12px;";
        return false;
    } else {
        document.getElementById("payment_type_error").innerHTML = "";
        return true;
    }
}

function validatePostalCode(postalCode){
    if(postalCode.length == 5){
        document.getElementById("postalcode").style = "border:1px solid green;";
        return true;
    } else {
        alert("Το πεδίο του ΤΚ δεν μπορεί να είναι κενό.");
        document.getElementById("postalcode").value = "";
        document.getElementById("postalcode").placeholder = "Ο ταχυδρομικός κώδικας πρεπει να αποτελειται απο 5 ψηφία";
        document.getElementById("postalcode").style = "border:1px solid red;";
        return false;
    }
}

function validateEmail(email){
    if(email != "" || email != undefined){
        if(email.includes('@')){
            document.getElementById("email").style = "border:1px solid green;";
            return true;
        } else {
            alert("Το email θα πρεπει να ειναι της μορφής name@domain.gr");
            document.getElementById("email").placeholder = "Το e-mail δεν πρέπει να είναι άδειο και θα πρέπει να περιέχει το '@'.";
            document.getElementById("email").style = "border:1px solid red;";
            return false;
        }
    }
}

function validateTelephone(telephone){
    let prefix = "+30210"
    if(telephone != "" || telephone != undefined){
        if(telephone.startsWith(prefix)){
            document.getElementById("telephone").style = "border:1px solid green;";
            return true;
        } else {
            alert("Το τηλέφωνο θα πρέπει να ξεκινάει με +30210 και να ακολουθούν τα ψηφία του σταθερού σας τηλεφώνου.");
            document.getElementById("telephone").style = "border:1px solid red;";
            document.getElementById("telephone").placeholder = "Το τηλέφωνο δεν πρέπει να είναι άδειο και θα πρέπει να ξεκινάει με '+30210'.";
            return false;
        }
    }
}