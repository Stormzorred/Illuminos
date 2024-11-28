<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/auth_page.css">
    <link rel="stylesheet" href="assets/css/fundamentals.css">
    <title>Authorization</title>
</head>
<body>
<div class="wrapper">
    <?php include 'inc/header.php';?>
    <main class="main__block">
        <form action="controllers/auth.php" method="post">
            <h1>Authorization</h1>
            <fieldset>
                <legend>Login</legend>
                <input type="text" name="login" id="login" required>
            </fieldset>
            <fieldset>
                <legend>Password</legend>
                <input type="password" name="password" id="password" required>
            </fieldset>
            <div class="checkbox">
                <input type="checkbox" name="blank" id="blank">
                <label for="blank">Remember me</label>
            </div>
            <button type="submit">Log in</button>
            <div class="auth__text">
                Don't have an account? <a href="reg_page.php">Register</a>
            </div>
        </form>
    </main>
</div>
</body>
</html>