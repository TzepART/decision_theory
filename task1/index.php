<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задача 1</title>
</head>
<body>
<a href="/">Главная</a>

<div>
    rowCount: <input id='rowCount' type='text' value='4' /><br />
    colCount: <input id='colCount' type='text' value='5' /><br />
    <button onclick="generate()">generate</button>

    <form action="controller.php" method="post">
        <div id="matrix-form"></div>

        <select name="strategy" id="">
            <option value="minimax">Минимакс</option>
            <option value="savidg">Сэвидж</option>
        </select>
        <input type="submit" value="send">
    </form>
</div>


<script>
    function generate()
    {
        var rowCount = document.getElementById('rowCount').value;
        var colCount = document.getElementById('colCount').value;
        var tbl = document.createElement('table');
        tbl.insertRow(-1);
        for (var j=0; j<=colCount; j++)	tbl.tBodies[0].rows[0].insertCell(-1).innerHTML = j||' ';
        for (var i=1; i<=rowCount; i++)
        {
            tbl.insertRow(-1).insertCell(-1).innerHTML = i;
            for (var j=1; j<=colCount; j++)
            {
                var input = document.createElement('input');
                input.id=input.name='matrix['+(i-1)+']['+(j-1)+']';
                input.size = "5";
                tbl.tBodies[0].rows[i].insertCell(-1).appendChild(input);
            }
        }
        document.getElementById('matrix-form').appendChild(tbl);
    }
</script>
</body>
</html>