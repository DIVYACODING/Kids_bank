const registrationForm = document.getElementById('registrationForm');

registrationForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get the entered username and password
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Save the username to localStorage (you might want to remove this if it's not necessary)
    localStorage.setItem('username', username);

    // Redirect the user to the login page after form submission
    window.location.href = "alogin.html"; // Redirect to the login page
});
/*CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    fullName VARCHAR(100) NOT NULL,
    dob DATE NOT NULL,
    parentName VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address TEXT NOT NULL
);*/
