<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создание Билета</title>
</head>
<body>
    <h1>Создание Билета на Самолет</h1>
    <form action="save_ticket.php" method="post">
        <label for="passenger_name">Имя пассажира:</label>
        <input type="text" name="passenger_name" required>
        <br>
        <label for="flight_number">Номер рейса:</label>
        <input type="text" name="flight_number" required>
        <br>
        <label for="departure">Пункт отправления:</label>
        <input type="text" name="departure" required>
        <br>
        <label for="arrival">Пункт назначения:</label>
        <input type="text" name="arrival" required>
        <br>
        <label for="date">Дата:</label>
        <input type="date" name="date" required>
        <br>
        <input type="submit" value="Создать Билет">
    </form>
</body>
</html>