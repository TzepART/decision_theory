<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задача 2</title>
</head>
<body>
<a href="/">Главная</a>

<div>
    <form action="controller.php" method="post">
        <table>
            <tbody>
            <tr>
                <td></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr>
                <td>X</td>
                <td><input name="x[0]" size="5"></td>
                <td><input name="x[1]" size="5"></td>
                <td><input name="x[2]" size="5"></td>
                <td><input name="x[3]" size="5"></td>
                <td><input name="x[4]" size="5"></td>
            </tr>
            <tr>
                <td>P(X)</td>
                <td><input name="p[0]" size="5"></td>
                <td><input name="p[1]" size="5"></td>
                <td><input name="p[2]" size="5"></td>
                <td><input name="p[3]" size="5"></td>
                <td><input name="p[4]" size="5"></td>
            </tr>
            </tbody>
        </table>

        <input type="text" value="" name="cost" placeholder="Расходы">
        <input type="text" value="" name="good_price" placeholder="Цена в начале года">
        <input type="text" value="" name="bad_price" placeholder="Цена в конце года">
        <input type="submit" value="send">
    </form>
</div>

</body>
</html>