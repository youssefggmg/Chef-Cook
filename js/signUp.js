const signup = document.querySelector("#signup-form");
const emailerror = document.querySelector("#emailerror");
const nameerror = document.querySelector("#nameerror");
const pasworderror = document.querySelector("#pasworderror");


signup.addEventListener("submit", () => {
    let username = document.querySelector("#name").value;
    let email = document.querySelector("#email").value;
    let password = document.querySelector("#password").value;
    let emailregix = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
    if (!emailregix.test(email)) {
        emailerror.textContent = "Invalid email";
        return false;
    }
    if (username.value.length < 4) {
        nameerror.innerHTML = "invalid name";
        return false;
    }
    if (password.value.length < 8) {
        pasworderror.textContent = "Password must be at least 8 characters long";
        return false;
    }
    return true;
})