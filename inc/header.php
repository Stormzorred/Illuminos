<?php
    session_start();
?>
<?php
    $data = '';
    if(isset($_SESSION['role'])){
        if($_SESSION['role'] == 'admin'){
            $data .= "<li class=\"menu__item\"><a href='controllers/admin/index.php' class=\"menu__link\">Admin panel</a></li>";
        }
        $data .= "<li class=\"menu__item\"><a href='offers_page.php' class=\"menu__link\">Offers</a></li>
        <li class=\"menu__item\"><a href='community_page.php' class=\"menu__link\">Community</a></li>
        <li class=\"menu__item\"><a href='account_page.php' class=\"menu__link\">Account</a></li>
        <li class=\"menu__item\"><a href='controllers/logout.php' class=\"menu__link\">Logout</a></li>";
    }else{
        $data .= "<li class=\"menu__item\"><a href='offers_page.php' class=\"menu__link\">Offers</a></li>
        <li class=\"menu__item\"><a href='community_page.php' class=\"menu__link\">Community</a></li>
        <li class=\"menu__item\"><a href='reg_page.php' class=\"menu__link\">Sign in</a></li>
        <li class=\"menu__item\"><a href='auth_page.php' class=\"menu__link\">Log in</a></li>";
    }
?>
<header class="header__block">
    <a href="index.php"><img src="assets/img/logo.png" alt="" class="logo"></a>
    <nav class="nav">
        <?=$data;?>
    </nav>
    <div class="burger">
        <span></span>
    </div>
</header>