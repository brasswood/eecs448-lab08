
function validate() {
    return validateQuantities()
    && validateShipping()
    && validateCredentials();
}

function validateQuantities() {
    if ([document.forms.theform.elements.numChairs, document.forms.theform.elements.numNapkins, document.forms.theform.elements.numYeezys]
        .every((e) => (e.value !== '' && !isNaN(e.value) && e.value >= 0 && Number.isInteger(Number(e.value)))))
    {
        return true;
    }
    else {
        alert("You must input a nonnegative integer quantity for each item.");
        return false;
    }
}

function validateShipping() {
    if (document.forms.theform.elements.shipping.value !== '') {
        return true;
    }
    else {
        alert("Please choose a shipping option.");
        return false;
    }
}

function validateCredentials() {
    // Regular expression taken from: 
    // https://developer.mozilla.org/en-US/docs/Learn/Forms/Form_validation#validating_forms_without_a_built-in_api
    const emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (!(document.forms.theform.elements.username.value !== '' && emailRegExp.test(document.forms.theform.elements.username.value))) {
        alert("Please enter a valid email.");
        return false;
    }
    else if (document.forms.theform.elements.password.value === '') {
        alert("Password cannot be blank.");
        return false;
    }
    return true;
}