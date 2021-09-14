<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="tabuada.php">
            <label for="numero">Número: </label>
            <input type="number" id="numero" name="numero" autofocus>
            <select id="ordem" name="ordem">
                <option value="1">Crescente</option>
                <option value="2">Decrescente</option>
            </select>
            <input type="submit" id="tabuada" name="tabuada" value="Mostrar Tabuada">
            <input type="reset" id="limpar" name="limpar" value="Limpar">
        </form>
    </body>
</html>
