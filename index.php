<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <h1>Jake mas nastroje </h1>
            <form action="submit.php" method="post" >
            <label for="check"> Krumpac </label> <input type="checkbox" id="check" name="items[]" value="Krumpac" /> <br/>
            <label for="check"> Pytel na mrtvolu</label> <input type="checkbox" id="check" name="items[]" value="Pytel" /> <br/>
            <label for="check"> Dodávka </label> <input type="checkbox" id="check" name="items[]" value="Dodavka" /> <br/>
            <label for="check"> Mrtvola </label> <input type="checkbox" id="check" name="items[]" value="Mrtvola" /> <br/>
        </fieldset>
        <input type="submit" value="Odeslat!" />
    </form>
</body>
</html>