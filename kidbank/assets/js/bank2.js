function confirmAction(action) {
    const amount = document.getElementById('amount').value;
    if (!amount || isNaN(amount) || amount <= 0) {
        alert("Please enter a valid amount.");
        return;
    }
    // Fetch savings account balance
fetch('bank2.php')
.then(response => response.json())
.then(data => {
    document.getElementById('current-balance').innerText = data.balance.toFixed(2);
})
.catch(error => {
    console.error('Error fetching savings account balance:', error);
});
    const confirmation = confirm(`Are you sure you want to ${action} $${amount}?`);
    if (confirmation) {
        const formData = new FormData();
        formData.append('action', action);
        formData.append('amount', amount);
        fetch('bank2.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            alert(data); // Display success message from server
            // You can update the balance display or perform any other action after successful transaction
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
    }
}
