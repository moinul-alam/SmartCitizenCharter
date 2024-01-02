function togglePassword() {
    var passwordInput = document.getElementById("password");
    var showPasswordButton = document.getElementById("showPassword");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        showPasswordButton.textContent = "পাসওয়ার্ড লুকান";
    } else {
        passwordInput.type = "password";
        showPasswordButton.textContent = "পাসওয়ার্ড দেখুন";
    }
}