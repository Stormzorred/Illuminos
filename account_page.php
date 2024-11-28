<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="assets/css/account_page.css">
    <link rel="stylesheet" href="assets/css/fundamentals.css">
    <title>Account</title>
</head>
<body>
<div class="wrapper">
    <?php include 'inc/header.php';?>
    <h1 id="firsth">Your account</h1>
    <main class="main__block">
        <img src="assets/img/Account_Page/user.png" alt="">
        <div class="account__details">
            <h2>Jericho Swain</h2>
            <h3>E-mail: jerichoswain@gmail.com</h3>
            <h3>Date of creation: 25/02/2016</h3>
            <h4>Edit my account</h4>
        </div>
    </main>
    <section class="history">
        <h1>Your history of watching</h1>
        <div class="history__items">
            <div class="history__item">
                <img src="assets/img/Account_Page/history1.png" alt="">
                <h2>A Quiet Place (2008)</h2>
                <h2>Last date watching: 25/02/24</h2>
            </div>
            <div class="history__item">
                <img src="assets/img/Account_Page/history2.png" alt="">
                <h2>The Babadook (2014)</h2>
                <h2>Last date watching: 25/02/24</h2>
            </div>
            <div class="history__item">
                <img src="assets/img/Account_Page/history3.png" alt="">
                <h2>Talk To Me (2023)</h2>
                <h2>Last date watching: 25/02/24</h2>
            </div>
            <div class="history__item">
                <img src="assets/img/Account_Page/history4.png" alt="">
                <h2>Prey (2022)</h2>
                <h2>Last date watching: 25/02/24</h2>
            </div>
            <div class="history__item">
                <img src="assets/img/Account_Page/history5.png" alt="">
                <h2>Border (2022)</h2>
                <h2>Last date watching: 25/02/24</h2>
            </div>
            <div class="history__item">
                <img src="assets/img/Account_Page/history6.png" alt="">
                <h2>Zombieland (2009)</h2>
                <h2>Last date watching: 25/02/24</h2>
            </div>
            <div class="history__item">
                <img src="assets/img/Account_Page/history7.png" alt="">
                <h2>It Follows (2014)</h2>
                <h2>Last date watching: 25/02/24</h2>
            </div>
            <div class="history__item">
                <img src="assets/img/Account_Page/history8.png" alt="">
                <h2>The Host (2006)</h2>
                <h2>Last date watching: 25/02/24</h2>
            </div>
        </div>
    </section>
    <section class="favorites">
        <h1>Your favorites</h1>
        <div class="favorites__items">
            <div class="favorites__item">
                <img src="assets/img/Account_Page/favorites1.png" alt="">
                <h2>Stranger Things</h2>
                <h3>Delete from favorites</h3>
            </div>
            <div class="favorites__item">
                <img src="assets/img/Account_Page/favorites2.png" alt="">
                <h2>Eraserhead</h2>
                <h3>Delete from favorites</h3>
            </div>
            <div class="favorites__item">
                <img src="assets/img/Account_Page/favorites1.png" alt="">
                <h2>Stranger Things</h2>
                <h3>Delete from favorites</h3>
            </div>
            <div class="favorites__item">
                <img src="assets/img/Account_Page/favorites2.png" alt="">
                <h2>Eraserhead</h2>
                <h3>Delete from favorites</h3>
            </div>
        </div>
    </section>
    <section class="subscription">
        <h1>Choose your subscription</h1>
        <div class="subscription__items">
            <div class="subscription__item">
                <h2>1 month</h2>
                <ul>
                    <li>Maximum quality</li>
                    <li>Watch offline</li>
                    <li>No ads</li>
                </ul>
                <h2>20S/month</h2>
                <button onclick="location.href='payment.php'">Subscribe</button>
            </div>
            <div class="subscription__item">
                <h2>6 months</h2>
                <ul>
                    <li>Maximum quality</li>
                    <li>Watch offline</li>
                    <li>No ads</li>
                </ul>
                <h2>15S/month</h2>
                <button onclick="location.href='payment.php'">Subscribe</button>
            </div>
            <div class="subscription__item">
                <h2>12 months</h2>
                <ul>
                    <li>Maximum quality</li>
                    <li>Watch offline</li>
                    <li>No ads</li>
                </ul>
                <h2>10S/month</h2>
                <button onclick="location.href='payment.php'">Subscribe</button>
            </div>
        </div>
    </section>
    <footer class="footer__block">
        <a href="#"><img src="assets/img/logo.png" class="logo" alt=""></a>
        <div class="footer__items">
            <div class="footer__item">
                <a href="faq_page.php">FAQ</a>
                <a href="about_us.php">About Us</a>
            </div>
            <div class="footer__item">
                <a href="blog.php">Blog</a>
                <a href="#">Support</a>
            </div>
        </div>
    </footer>
</div>

<script src="assets/js/script.js"></script>
</body>
</html>