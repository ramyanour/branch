<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login in</title>
    <link rel="stylesheet" href="/assets/css/font.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/login.css">

</head>

<body>
    <main>
        <section class="frm-wrapper">

            <form id="frm-login" method="post" action="/login">
                <fieldset class="fst-lbls">
                    
                    <img class="logo" src="/assets/images/Logo.png" alt="">
                    <div>
                        <h2 style="margin-bottom:0.2rem;">Login</h2>
                        <label id="login-msg" class="lbl-msg">Sign in with your credentials</label>
                    </div>
                </fieldset>
                <fieldset class="txt-credintial">
                    <label for="uid">Username</label>
                    <input type="text" id="uid" name="uid">

                    <label for="pwd">Password</label>
                    <input type="password" id="pwd" name="pwd">
                </fieldset>

                <div class="rem-box">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me next login</label>
                </div>
                <fieldset class="btn-fst">
                    <input type="submit" id="submitbtn" value="Login">
                    <a href="#" class="lbl-frget">Forget password?</a>
                </fieldset>
            </form>
            
            <div class="s-nav">
                <a href="/home" class="lbl-frget">Homepage</a>
                <span>|</span>
                <a href="/sginup" class="lbl-frget">New Account</a>
            </div>

        </section>
    </main>

</body>

</html>