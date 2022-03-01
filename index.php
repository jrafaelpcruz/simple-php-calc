<?php
    $math = "sum";
    $operation = "";
    $dotheMath = 0;
?>

<!DOCTYPE html>
<head>
    <title>Form, Switch and the PHP</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<!--
    form action="index.php" -> where the user info is held;
    attibute checked -> auto select a radio button;
-->

<header>
<h1>Do The Math!!!</h1>
<h2>A very nice && simple php calculator!</h2>
</header>

<main>
<div class="containme">
    <form action="index.php" method="POST">
        <div class="number_box">

            <input type="number" name="number_1"/>
            <input type="number" name="number_2"/>
            <label for="number_1">Number One</label>
            <label for="number_2">Number Two</label>

        </div>
        <div class="op_box">
            <div>
                <input type="radio" name="math" value="sum" checked
                <?php echo ($math == "sum") ? "checked" : null; ?>/>
                <label for="sum">Sum &#x2795</label>
            </div>
            <div>
                <input type="radio" name="math" value="subt" 
                <?php echo ($math == "subt") ? "checked" : null; ?>/>
                <label for="subt">Minus&#x2796</label>
            </div>
            <div>
                <input type="radio" name="math" value="mult" 
                <?php echo ($math == "mult") ? "checked" : null; ?>/>
                <label for="mult">Multiplicate &#x2716</label>
            </div>
            <div>
                <input type="radio" name="math" value="divi" 
                <?php echo ($math == "divi") ? "checked" : null; ?>/>
                <label for="divi">Divide &#x2797</label>
            </div>
        </div>
            <div class="big_button"><input type="submit" /></div>
</form>
<div class="result_box">
<?php
    $number1 = $_POST["number_1"];
    $number2 = $_POST["number_2"];
    $operation = $_POST['math'] = (isset($_POST['math']) ) ? $_POST['math'] : null;

    switch ($operation) {
        case "sum":
            $dotheMath = $number1 + $number2;
            echo "<div>The value of $number1 + $number2 is $dotheMath.</div>";
            echo "<div><img src='img/confusion_nazare.jpg' /></div>";
            break;
        case "subt":
            $dotheMath = $number1 - $number2;
            echo "<div>The value of $number1 - $number2 is $dotheMath.</div>";
            echo "<div><img src='img/confusion_nazare.jpg' /></div>";
            break;
        case "mult":
            $dotheMath = $number1 * $number2;
            echo "<div>The value of $number1 * $number2 is $dotheMath.</div>";
            echo "<div><img src='img/confusion_nazare.jpg' /></div>";
            break;
        case "divi":
            $dotheMath = $number1 / $number2;
            echo "<div>The value of $number1 / $number2 is $dotheMath.</div>";
            echo "<div><img src='img/confusion_nazare.jpg' /></div>";
            break;
        default:
            echo "<div>...</div>";
            break;
        }
?>
<div>
</div>
</main>

<footer>
    <p>Code@João Rafael Pereira Cruz</p>
</footer>
</body>
</html>