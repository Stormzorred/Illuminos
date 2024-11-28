<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fundamentals.css">
    <title>Retflix</title>
</head>
<body>
<div class="wrapper">
    <?php include 'inc/header.php';?>
    <main class="main__block">
        <h1>Sinister</h1>
        <h2>4.8, 2012, Horror</h2>
        <a href="sinister.php" id="main__button">Watch online</a>
    </main>
    <section class="search">
        <input type="text" id="search__box" name="search__box" placeholder="Search">
        <div class="filters">
            <h1>Filters:</h1>
            <button>Category</button>
            <button>Rating</button>
            <button>Year</button>
            <button>Age Limit</button>
        </div>
    </section>
    <section class="popular__movies">
        <h1>Popular movies</h1>
        <div class="popular__movies_items">
            <div class="popular__movies_item">
                <a href="saw.php"><img src="assets/img/Homepage/popular1.png" alt=""></a>
                <h2>Saw</h2>
                <h3>2004 18+</h3>
            </div>
            <div class="recommendations__item">
                <img src="assets/img/Homepage/popular2.png" alt="">
                <h2>[Rec]</h2>
                <h3>2007 18+</h3>
            </div>
            <div class="recommendations__item">
                <a href="stranger_things.php"><img src="assets/img/Homepage/popular3.png" alt=""></a>
                <h2>Stranger Things</h2>
                <h3>2016 16+</h3>
            </div>
            <div class="recommendations__item">
                <a href="ahs.php"><img src="assets/img/Homepage/popular4.png" alt=""></a>
                <h2>American Horror Story</h2>
                <h3>2011 18+</h3>
            </div>
        </div>
    </section>
    <section class="advantages">
        <h1>Our advantages</h1>
        <div class="advantages__items">
            <div class="advantages__item">
                <img src="assets/img/Homepage/advantages1.png" alt="">
                <h2>High quality</h2>
                <h3>We support HD, 4K and even 8K resolution for better viewing quality</h3>
            </div>
            <div class="advantages__item">
                <img src="assets/img/Homepage/advantages2.png" alt="">
                <h2>Multi-language</h2>
                <h3>Possibility to choose the language of voice acting and subtitles</h3>
            </div>
            <div class="advantages__item">
                <img src="assets/img/Homepage/advantages3.png" alt="">
                <h2>Access to exclisives</h2>
                <h3>We offer original movies and TV series that are not available elsewhere</h3>
            </div>
            <div class="advantages__item">
                <img src="assets/img/Homepage/advantages4.png" alt="">
                <h2>Large selection of content</h2>
                <h3>A wide library of films, TV series and documentaries for every taste</h3>
            </div>
        </div>
    </section>
    <section class="popular">
        <h1>Popular categories</h1>
        <div class="popular__items">
            <div class="popular__item">
                <img src="assets/img/Homepage/categories1.png" alt="">
                <h2>Horror</h2>
            </div>
            <div class="popular__item">
                <img src="assets/img/Homepage/categories2.png" alt="">
                <h2>Slasher</h2>
            </div>
            <div class="popular__item">
                <img src="assets/img/Homepage/categories3.png" alt="">
                <h2>Found Footage</h2>
            </div>
            <div class="popular__item">
                <img src="assets/img/Homepage/categories4.png" alt="">
                <h2>Body Horror</h2>
            </div>
        </div>
    </section>
    <section class="recommendations">
        <h1>Recommendations</h1>
        <div class="recommendations__items">
            <div class="recommendations__item">
                <img src="assets/img/Homepage/recommendation1.png" alt="">
                <h2>Alien</h2>
            </div>
            <div class="recommendations__item">
                <img src="assets/img/Homepage/recommendation2.png" alt="">
                <h2>When Evil Lurks</h2>
            </div>
            <div class="recommendations__item">
                <img src="assets/img/Homepage/recommendation3.png" alt="">
                <h2>Oddity</h2>
            </div>
            <div class="recommendations__item">
                <img src="assets/img/Homepage/recommendation4.png" alt="">
                <h2>The Innocents</h2>
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