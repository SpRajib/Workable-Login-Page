function validateRegister() {
    let pass = document.getElementById("reg_pass").value;
    let cpass = document.getElementById("reg_cpass").value;
    if (pass !== cpass) {
        alert("Passwords do not match!");
        return false;
    }
    return true;
}