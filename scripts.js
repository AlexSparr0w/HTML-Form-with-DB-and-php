//Script that allows us to have only one capture letter in the begining, all the other are small
function UpperCaseF(a) {
    setTimeout(function() {
        a.value = a.value[0].toUpperCase() + a.value.slice(1).toLowerCase();
    }, 1);
}

//Scipt that makes all letters small
function lowerCaseF(a) {
    setTimeout(function() {
        a.value = a.value.toLowerCase();
    }, 1);
}

//Script that limits ammount of text or numbers in field
function limitText(limitField, limitNum) {
    if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
    }
}