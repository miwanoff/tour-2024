<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Тест</title>
</head>

<body>
    <form method="post" action="countries.php" name="myform">
        <label for='formCountry'> Виберіть країну: </label>
        <select name="formCountry">
            <option value="US">США</option>
            <option value="UK">Великобританія</option>
            <option value="France">Франція</option>
            <option value="Mexico">Мексика</option>
            <option value="Japan">Японія</option>
        </select><br>
        <label for='transport'> Виберіть транспорт: </label>
        <select name="transport">
            <option value="bus">Автобус</option>
            <option value="airplane">Літак</option>
            <option value="train">Потяг</option>
        </select><br>
        <button name="formSubmit">ОК</button>
    </form>
</body>

</html>