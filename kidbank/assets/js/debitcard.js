
// Retrieve form data from sessionStorage
var cardNumber = sessionStorage.getItem('cardNumber');
var expiryDate = sessionStorage.getItem('expiryDate');
var cvv = sessionStorage.getItem('cvv');
var cardholderName = sessionStorage.getItem('cardholderName');

// Update debit card details
document.getElementById('card-number').innerText = cardNumber;
document.getElementById('expiry-date').innerText = 'Exp: ' + expiryDate;
document.getElementById('cvv').innerText = 'CVV: ' + cvv;
document.getElementById('cardholder-name').innerText = cardholderName;
