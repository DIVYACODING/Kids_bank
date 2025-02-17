
// Function to format card number with spaces after every 4 digits
function formatCardNumber() {
    var cardNumberInput = document.getElementById('input-card-number');
    var cardNumberValue = cardNumberInput.value.replace(/[^\d]/g, ''); // Remove non-digit characters
    var formattedCardNumber = '';

    for (var i = 0; i < cardNumberValue.length; i++) {
        if (i > 0 && i % 4 === 0) {
            formattedCardNumber += ' ';
        }
        formattedCardNumber += cardNumberValue.charAt(i);
    }

    cardNumberInput.value = formattedCardNumber;
}

// Attach event listener to input for formatting card number
document.getElementById('input-card-number').addEventListener('input', formatCardNumber);

document.getElementById('debit-card-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Get form values
    var cardNumber = document.getElementById('input-card-number').value;
    var expiryDate = document.getElementById('input-expiry-date').value;
    var cvv = document.getElementById('input-cvv').value;
    var cardholderName = document.getElementById('input-cardholder-name').value;

    // Store form data in sessionStorage
    sessionStorage.setItem('cardNumber', cardNumber);
    sessionStorage.setItem('expiryDate', expiryDate);
    sessionStorage.setItem('cvv', cvv);
    sessionStorage.setItem('cardholderName', cardholderName);

    // Redirect to debit card page
    window.location.href = 'debitCard.html';
});
