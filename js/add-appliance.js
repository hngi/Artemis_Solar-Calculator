
var addBtn = document.getElementById('addButton');
var quantity_accessibilty = document.getElementById('quantity');
var watts_accessibilty = document.getElementById('watts');
var hours_on_accessibilty = document.getElementById('hours_on');

var applianceError = document.getElementById('appliance_error');

var quantityValue;
var wattsValue;
var hoursOnValue;
var applianceValue;


var cleanApplianceName = false;
var cleanQuantity = false;
var cleanWatts = false;
var cleanHoursOn = false;


function appliance_name_func () {
        applianceValue = document.getElementById('appliance_name').value;
    if (applianceValue.length < 1){
        applianceError.textContent = 'Your Appliance cannot be empty';
        applianceError.style.visibility = 'visible';

        cleanApplianceName = false;
    }else {
        applianceError.style.visibility = 'hidden';
        quantity_accessibilty.removeAttribute('disabled');
        cleanApplianceName = true;
    }
    validate()
}

function appliance_quantity_func () {
        quantityValue = document.getElementById('quantity').value;
    if (quantityValue.length < 1){
        applianceError.textContent = 'Quantity cannot be less than 1';
        applianceError.style.visibility = 'visible';

        cleanQuantity = false;
    }else {
        applianceError.style.visibility = 'hidden';
        watts_accessibilty.removeAttribute('disabled');
        cleanQuantity = true;
    }
    validate()
}

function appliance_watts_func () {
        wattsValue = document.getElementById('watts').value;
    if (wattsValue.length < 1){
        applianceError.textContent = 'Watts cannot be less than 1';
        applianceError.style.visibility = 'visible';

        cleanWatts = false;
    }else {
        applianceError.style.visibility = 'hidden';
        hours_on_accessibilty.removeAttribute('disabled');
        cleanWatts = true;
    }
    validate()
}

function appliance_hours_on_func () {
        hoursOnValue = document.getElementById('hours_on').value;
    if (hoursOnValue.length < 1){
        applianceError.textContent = 'Hours cannot be empty';
        applianceError.style.visibility = 'visible';

        cleanHoursOn = false;
    }else {
        applianceError.style.visibility = 'hidden';
        cleanHoursOn = true;
        if (cleanApplianceName === true && cleanQuantity === true && cleanWatts === true && cleanHoursOn === true){
            document.getElementById('hours').value = quantityValue*wattsValue*hoursOnValue;
        }else {
            document.getElementById('hours').value = "";
        }
    }

    validate();
}



function validate() {
    if (cleanApplianceName === true && cleanQuantity === true && cleanWatts === true && cleanHoursOn === true) {
        addBtn.removeAttribute('disabled');
    } else {
        addBtn.setAttribute('disabled', 'disabled');
    }
}




