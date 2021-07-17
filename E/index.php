<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part E</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="val1">

        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">:</option>
            <option value="*">x</option>
        </select>

        <input type="text" name="val2">

        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
        if (isset($_POST['calculate'])) {
            $val1 = $_POST['val1'];
            $val2 = $_POST['val2'];
            $opreator = $_POST['operator'];
            
            if ($opreator == '+') {
                $result = $val1 + $val2;
            } 
            elseif ($opreator == '-') {
                $result = $val1 - $val2;
            }
            elseif ($opreator == '/') {
                $result = $val1 / $val2;
            }
            elseif ($opreator == '*') {
                $result = $val1 * $val2;
            }

            echo "The result is: $result";
        }
    ?>
</body>
</html>