document.addEventListener('DOMContentLoaded', function() {
    const registerBtn = document.getElementById('register');
    const loginBtn = document.getElementById('login');

    registerBtn.addEventListener('click', () => {
        document.querySelector('.container').classList.add('active');
    });

    loginBtn.addEventListener('click', () => {
        document.querySelector('.container').classList.remove('active');
    });

    const signUpForm = document.querySelector('.sign-up form');
    const signInForm = document.querySelector('.sign-in form');

    signUpForm.addEventListener('submit', function(event) {
        const password = signUpForm.querySelector('input[name="password"]').value;
        const confirmPassword = signUpForm.querySelector('input[name="confirm_password"]').value;

        if (password !== confirmPassword) {
            event.preventDefault();
            alert('Passwords do not match');
        }
    });

    signInForm.addEventListener('submit', function(event) {
        const kidName = signInForm.querySelector('input[name="kid_name"]').value;

        if (!kidName) {
            event.preventDefault();
            alert('Please enter kid\'s name');
        }
    });
});