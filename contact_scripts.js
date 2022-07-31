/**
 * This file handles the scripts for the contact screen of the website
 */

function validateMessage(){
    let fullName = document.getElementById("fullname").value;
    let email = document.getElementById("email").value;
    let subject = document.getElementById("subject").value;
    let description = document.getElementById("description").value;

    let fullNameValidated = validateField(fullName,"fullname");
    let emailValidated = validateField(email,"email");
    let subjectValidated = validateField(subject,"subject");
    let descriptionValidated = validateField(description,"description");

    let allFieldsFilled = checkIfAllFieldsAreFilled();

    if(fullNameValidated && emailValidated && subjectValidated && descriptionValidated && allFieldsFilled){
        document.getElementById("contact_form").submit();
    } else {
        alert("Όλα τα πεδία της φόρμας είναι υποχρεωτικά για την επικοινωνία σας με την Stathis Airlines");
    }
}

/**
 * Returns whether a field is filled or not
 */

function isFilled(field){
    return field.length != 0;
}

function checkIfAllFieldsAreFilled(){
    let fullName = document.getElementById("fullname");
    let email = document.getElementById("email");
    let subject = document.getElementById("subject");
    let description = document.getElementById("description");

    if(isFilled(fullName) && isFilled(email) && isFilled(subject) && isFilled(description)){
        return true;
    } else {
        return true;
    }
}

/**
 * Validates field if its okay or should throw error
 */

function validateField(inputTxt, fieldName){
    if(inputTxt.length != 0){
        document.getElementById(fieldName).style = "border:1px solid green;";
        return true;
    } else {
        document.getElementById(fieldName).style = "border:1px solid red;";
        document.getElementById(fieldName).placeholder = "Το πεδίο δεν πρέπει να είναι άδειο";
        return false;
    }
}