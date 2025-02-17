<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Kids Banking</title>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/contact.css">
        
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <p>Have questions or feedback? We'd love to hear from you! Please fill out the form below and we'll get back to you as soon as possible.</p>
        <form id="contactForm" action="contact1.php" method="post">

         <form id="contactForm">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Your Message:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit">Send Message</button>
        </form>
        <div id="response"></div>
    </div>

    
    
    <script src="./assets/js/contact.js"></script>
    
</body>
</html>
