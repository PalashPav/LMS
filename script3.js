function validateform() {
    let name = document.Myform.username.value.trim();
    let password = document.Myform.password.value.trim();
    let conPassword = document.Myform.confirm_password.value.trim();
    let number = document.Myform.number.value.trim();
    
    let isValid = true;

    clearErrors();

    if (name === "") {
        showError("username-error", "Username can't be empty");
        isValid = false;
    }

    if (password.length <= 6) {
        showError("password-error", "Password must be greater than 6 characters");
        isValid = false;
    } else if (password.length > 15) {
        showError("password-error", "Password must be less than 15 characters");
        isValid = false;
    } else if (password !== conPassword) {
        showError("confirm-password-error", "Passwords do not match");
        isValid = false;
    }

    if (number.length !== 10 || isNaN(number)) {
        showError("number-error", "Phone number must be exactly 10 digits");
        isValid = false;
    }

    return isValid;
}

function showError(id, message) {
    document.getElementById(id).textContent = message;
}

function clearErrors() {
    let errors = document.querySelectorAll(".error");
    errors.forEach(error => error.textContent = "");
}
