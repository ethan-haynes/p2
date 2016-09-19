<DOCTYPE html>
<html>
<head></head>
    <body>
        <?= $password; ?>
        <form action="index.php" method="POST">
            Word Count:
                <input type="text" name="wordcount"><br>
            Numbers:
                <input type="checkbox" name="numbers" value="y"><br>
            Upper Case:
                <input type="checkbox" name="uppercase" value="y"><br>
            Special Characters:
                <input type="checkbox" name="specialcharacters" value="y">
            <input type="submit">
        </form>
    </body>
</html>
