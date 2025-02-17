document.getElementById('loginButton').addEventListener('click', function() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Create FormData object to send data to server
    const formData = new FormData();
    formData.append('username', username);
    formData.append('password', password);

    // Send form data to the server using fetch API
    fetch('alogin.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        // Handle response from server
        if (data.success) {
            // Redirect to bank2.html upon successful login
            window.location.href = "bank2.html";
        } else {
            // Display error message if login failed
            document.getElementById('error-message').innerText = data.message;
            document.getElementById('error-message').style.display = "block";
        }
    })
    .catch(error => {
        // Handle errors (if any)
        console.error('There was a problem with the fetch operation:', error);
    });
});
