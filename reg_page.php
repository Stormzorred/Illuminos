<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reg_page.css">
    <link rel="stylesheet" href="assets/css/fundamentals.css">
    <title>Registration</title>
</head>
<body>
<div class="wrapper">
    <?php include 'inc/header.php';?>
    <main class="main__block">
        <form action="controllers/reg.php" method="post">
            <h1>Registration</h1>
            <fieldset>
                <legend>Name</legend>
                <input type="text" name="name" id="name" required>
            </fieldset>
            <fieldset>
                <legend>Surname</legend>
                <input type="text" name="surname" id="surname" required>
            </fieldset>
            <fieldset>
                <legend>Patronymic</legend>
                <input type="text" name="patronymic" id="patronymic" required>
            </fieldset>
            <fieldset>
                <legend>Login</legend>
                <input type="text" name="login" id="login" required>
            </fieldset>
            <fieldset>
                <legend>E-mail</legend>
                <input type="email" name="email" id="email" required>
            </fieldset>
            <fieldset>
                <legend>Password</legend>
                <input type="password" name="password" id="password" required>
            </fieldset>
            <fieldset>
                <legend>Re-enter password</legend>
                <input type="password" name="password-repeat" id="password-repeat" required>
            </fieldset>
            <div class="checkbox">
                <input type="checkbox" name="blank" id="blank" required>
                <label for="blank">Я согласен с Условиями и Политикой Конфиденциальности</label>
            </div>
            <button type="submit">Create account</button>
            <div class="auth__text">
                <p>Have an account?</p><a href="auth_page.php">Log in</a>
            </div>
        </form>
    </main>
</div>
</body>
</html>