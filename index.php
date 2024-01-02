<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta lang="en">
    <link rel="icon" href="images/govlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="resources/css/main.css">
    <link rel="stylesheet" href="resources/css/fonts.css">
    <script src="resources/js/togglepassword.js"></script>
    <title>স্মার্ট সিটিজেন চার্টার - অভ্যন্তরীণ সম্পদ বিভাগ, অর্থ মন্ত্রণালয়</title>
</head>

<body>

    <div class="container">
        <header>
            <div class="office-logo">
                <img src="images/govlogo.png" alt="Office Logo">
            </div>
            <div class="office-name">
                <p>গণপ্রজাতন্ত্রী বাংলাদেশ সরকার<br>
                    অভ্যন্তরীণ সম্পদ বিভাগ<br>
                    অর্থ মন্ত্রণালয়</p>
            </div>
        </header>

        <main>
            <div class="login-box">
                <h2>লগিন</h2>
                <form class="login-form" action="/contents/home.html" method="post">
                    <div class="login-form__field">
                        <label for="userName">ইউজারনেম</label>
                        <input type="text" id="userName" name="userName" required>
                    </div>

                    <div class="login-form__field">
                        <label for="password">পাসওয়ার্ড</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <button type="button" class="show-password" id="showPassword" onclick="togglePassword()" title="পাসওয়ার্ড দেখুন">পাসওয়ার্ড দেখুন</button>

                    <button type="submit" class="submit-button">লগইন করুন</button>
                </form>
            </div>
        </main>

        <footer>
            <p>কারিগরি সহায়তায়: আইসিটি সেল, অভ্যন্তরীণ সম্পদ বিভাগ</p>
        </footer>
    </div>

</body>

</html>


<!-- <label for="remember-login">
            <input type="checkbox" id="remember-login" name="remember-login">
            লগিন মনে রাখুন
        </label> -->
