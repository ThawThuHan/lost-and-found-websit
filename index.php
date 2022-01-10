<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost & Found in Myanmar</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
    <div class="container h-100 d-flex flex-column justify-content-center align-items-center">
        <div class="row row-cols-md-2 row-cols-1 g-0">
            <div class="col bg-primary">
                <div class="container d-flex flex-column justify-content-center align-items-center">
                    <div class="img-container">
                        <img src="_assets/photos/undraw_treasure_of-9-i.svg" alt="">
                    </div>
                    <div class="m-4 text-white text-center">
                        <h3>Lost & Found In Myanmar</h3>
                        <p class="lh-lg">
                            ဤ Website ၏ ရည်ရွယ်ချက်မှာ မြန်မာနိုင်ငံအနှံပျောက်ဆုံးသောပစ္စည်းများကို ရှာဖွေတွေရှိသူများနဲ့ ပစ္စည်းပျောက်ဆုံးသွားသူတို့ကြား
                            အလွယ်တကူချိတ်ဆက်နိုင်ရန်နှင့် အလွယ်တကူရှာဖွေနိုင်ရန် ရည်ရွယ်၍ တည်ဆောက်ထားခြင်းဖြစ်ပါသည်။
                        </p>
                    </div>
                </div>
            </div>
            <div class="col bg-white">
                <div id="login" class="d-flex flex-column justify-content-center align-items-center py-5 px-2 h-100">
                    <h3>Login</h3>
                    <?php if (isset($_GET["error"])) : ?>
                        <div class="alert alert-danger">Something Wrong! Try Again.</div>
                    <?php endif ?>
                    <?php if (isset($_GET["registered"])) : ?>
                        <div class="alert alert-success">Account Created Successful! Please Login.</div>
                    <?php endif ?>
                    <?php if (isset($_GET["incorrect"])) : ?>
                        <div class="alert alert-warning">Email or Password Wrong!.</div>
                    <?php endif ?>
                    <div class="w-75 px-0 px-lg-5">
                        <form id="login-form" action="_actions/login.php" class="text-center" method="POST">
                            <input id="l-email" type="email" name="email" placeholder="Email Address" class="form-control rounded-pill mb-4" required>
                            <div class="input-group mb-4 d-flex justify-content-center align-items-center">
                                <input id="l-password" type="password" name="password" placeholder="Password" class="form-control rounded-pill  me-2" required>
                                <span><i id="view" class="fas fa-eye-slash"></i></span>
                            </div>
                            <div class="mb-4">
                                <button class="btn btn-primary rounded-pill">Login</button>
                                <button type="button" class="btn btn-outline-primary rounded-pill" id="sign-up">Create Account</button>
                            </div>
                            <a href="" class="d-block mb-4">forget password</a>
                        </form>
                    </div>
                </div>
                <div id="register" class="d-none flex-column justify-content-center align-items-center py-5 px-2 h-100">
                    <h3>Register</h3>
                    <div class="w-75 px-0 px-lg-5">
                        <form id="register-form" action="_actions/register.php" class="text-center" method="POST">
                            <span class="error form-text text-danger" id="form_error"></span>
                            <input id="r-name" type="text" name="name" placeholder="Your Name" class="form-control mb-2" required>
                            <input id="r-email" type="email" name="email" placeholder="Email Address" class="form-control mb-2" required>
                            <div class="input-group mb-2 rounded-pill">
                                <input id="register-password" type="password" name="password" placeholder="Password" class="form-control" required>
                                <span class="input-group-text"><i id="r-view" class="fas fa-eye-slash"></i></span>
                            </div>
                            <div class="mb-2">
                                <input id="c-register-password" type="password" name="re-password" placeholder="Re-type Password" class="form-control" required>
                                <span class="error form-text text-danger" id="c_password_error"></span>
                            </div>
                            <div class="mb-4">
                                <button class="btn btn-primary rounded-pill">Sign Up</button>
                                <!-- <button type="button" class="btn btn-outline-primary rounded-pill" id="sign-up">Create Account</button> -->
                            </div>
                            <a id="already" href="" class="d-block mb-4">Already have an account? Login here.</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-1 text-muted">&copy;copyright @2021 Developed by Thaw Thu Han</div>
    </div>

    <script src="js/index.js"></script>
</body>

</html>