let signup = document.querySelector("#sign-up");
let login = document.querySelector("#login");
let register = document.querySelector("#register");
let registerForm = document.querySelector("#register-form");
let loginForm = document.querySelector("#login-form");
let view = document.querySelector("#view");
let rview = document.querySelector("#r-view");
let password = document.querySelector("#l-password");
let rname = document.querySelector("#r-name");
let remail = document.querySelector("#r-email");
let rpassword = document.querySelector("#register-password");
let rcpassword = document.querySelector("#c-register-password");

signup.addEventListener("click", function (e) {
    // e.defaultPrevented();
    if (login.classList.contains("d-flex")) {
        login.classList.replace("d-flex", "d-none");
        register.classList.replace("d-none", "d-flex");
    }
});
document.querySelector("#already").addEventListener("click", function (e) {
    e.preventDefault();
    if (register.classList.contains("d-flex")) {
        register.classList.replace("d-flex", "d-none");
        login.classList.replace("d-none", "d-flex");
    }
});

view.addEventListener("click", function () {
    if (view.classList.contains("fa-eye-slash")) {
        view.classList.replace("fa-eye-slash", "fa-eye");
        password.setAttribute("type", "text");
    } else {
        view.classList.add("fa-eye-slash");
        password.setAttribute("type", "password");
    }
});

rview.addEventListener("click", function () {
    if (rview.classList.contains("fa-eye-slash")) {
        rview.classList.remove("fa-eye-slash");
        rview.classList.add("fa-eye");
        rpassword.setAttribute("type", "text");
        rcpassword.setAttribute("type", "text");
    } else {
        rview.classList.add("fa-eye-slash");
        rpassword.setAttribute("type", "password");
        rcpassword.setAttribute("type", "password");
    }
})

registerForm.addEventListener("submit", function (e) {
    e.preventDefault();
    let pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/;
    // console.log(pattern.test(rcpassword.value));
    rname.value = "gg";
    console.log(rname.value);
    if(!rname.value || !remail.value || !rpassword.value){
        document.querySelector("#form_error").textContent = "need to fill all information";
    }

    if (rpassword.value.trim() !== rcpassword.value.trim()) {
        document.querySelector("#c_password_error").textContent = "Password do not match!";
    } else if (!pattern.test(rcpassword.value.trim())) {
        document.querySelector("#c_password_error").textContent = "Password require at least one digit, Uppercase, lowercase and 8 charater!"
    } else {
        document.querySelector("#c_password_error").textContent = "";
        this.submit();
        // console.log(typeof rcpassword.value.length);
        // console.log(rcpassword.value);
    }
})