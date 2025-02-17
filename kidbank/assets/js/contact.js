document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission behavior
    
    var formData = new FormData(this); // Create a new FormData object containing the form data
    
    var xhr = new XMLHttpRequest(); // Create a new XMLHttpRequest object
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = document.getElementById('response');
                response.style.display = 'block';
                
                if (xhr.responseText === 'success') {
                    response.className = 'success';
                    response.textContent = 'Your message has been sent successfully!';
                } else {
                    response.className = 'error';
                    response.textContent = 'Error: ' + xhr.responseText;
                }
                setTimeout(function() {
                    response.style.display = 'none';
                }, 5000); // Hide the response message after 5 seconds
            } else {
                console.error('Error occurred while sending the form data.');
            }
        }
    };
    
    xhr.open('POST', 'contact_process.php', true); // Open a POST request to contact_process.php
    xhr.send(formData); // Send the form data
});
