const loginForm = document.querySelector('form');
const emailInput = loginForm.querySelector('[name="email"]');
const passwordInput = loginForm.querySelector('[name="password"]');


// Create error message elements
const emailError = document.createElement('div');
emailError.className = 'bg-red-500 text-white text-sm p-3 rounded mt-2';
emailInput.insertAdjacentElement('afterend', emailError);

const passwordError = document.createElement('div');
passwordError.className = 'bg-red-500 text-white text-sm p-3 rounded mt-2';
passwordInput.insertAdjacentElement('afterend', passwordError);

loginForm.addEventListener('submit', (event) => {
    let valid = true;

    // Reset error messages
    emailError.textContent = '';
    passwordError.textContent = '';

    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailInput.value)) {
        emailError.textContent = 'Invalid email';
        valid = false;
    }

    // Password validation
    if (passwordInput.value.length < 8) {
        passwordError.textContent = 'Password must be at least 8 characters long';
        valid = false;
    }

    // Prevent form submission if validation fails
    if (!valid) {
        event.preventDefault();
    }
});
