<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="assets/css/payment.css">
    <link rel="stylesheet" href="assets/css/fundamentals.css">
    <title>Payment</title>
</head>
<body>
<div class="wrapper">
    <?php include 'inc/header.php';?>
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
                <button>Subscribe</button>
            </div>
            <div class="subscription__item">
                <h2>6 months</h2>
                <ul>
                    <li>Maximum quality</li>
                    <li>Watch offline</li>
                    <li>No ads</li>
                </ul>
                <h2>15S/month</h2>
                <button>Subscribe</button>
            </div>
            <div class="subscription__item">
                <h2>12 months</h2>
                <ul>
                    <li>Maximum quality</li>
                    <li>Watch offline</li>
                    <li>No ads</li>
                </ul>
                <h2>10S/month</h2>
                <button>Subscribe</button>
            </div>
        </div>
    </section>
    <section class="description">
        <h1>What subscription does</h1>
        <div class="description__items">
            <div class="description__item">
                <h2>Ad-Free Streaming:</h2>
                <h3>Enjoy movies and shows without interruptions from advertisements.</h3>
            </div>
            <div class="description__item">
                <h2>Exclusive Content:</h2>
                <h3>Access to exclusive films, documentaries, behind-the-scenes footage, and original series that aren't available to non-subscribers.</h3>
            </div>
            <div class="description__item">
                <h2>Offline Viewing:</h2>
                <h3>The option to download movies and shows to watch offline on mobile devices.</h3>
            </div>
            <div class="description__item">
                <h2>Multiple Viewing Profiles:</h2>
                <h3>Create and manage separate profiles for different family members, allowing personalized recommendations and watchlists for each user.</h3>
            </div>
            <div class="description__item">
                <h2>Bonus Features:</h2>
                <h3>Access to special features like director's commentary, deleted scenes, and interactive content.</h3>
            </div>
        </div>
    </section>
    <section class="payment">
        <h1>Buy subscription</h1>
        <div class="payment__items">
            <div class="payment__item">
                <label for="fio">FIO</label>
                <input type="text" id="fio" name="fio">
            </div>
            <div class="payment__item">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="payment__item">
                <label for="phone">Mobile phone</label>
                <input type="number" id="phone" name="phone">
            </div>
            <div class="payment__item">
                <label for="card_number">Card number</label>
                <input type="number" id="card_number" name="card_number">
            </div>
            <div class="payment__item">
                <label for="date">Date</label>
                <input type="text" id="date" name="date">
            </div>
            <div class="payment__item">
                <label for="fi">Last name and name</label>
                <input type="text" id="fi" name="fi">
            </div>
            <div class="payment__item">
                <label for="cvc">CVC</label>
                <input type="password" id="cvc" name="cvc">
            </div>
        </div>
        <button>Subscribe</button>
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