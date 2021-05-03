<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
    <link href="cssStyles.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>PHP-LR3</title>
</head>

<body id="body">


    <ul align="center" id="menu">
        <li><img id="id11" src="https://st2.depositphotos.com/8717810/11524/i/950/depositphotos_115248052-stock-photo-color-wheel-natural-color-paper.jpg">
        </li>
        <li> Sharingan </li>
        <li> me </li>
        <li>at </li>
        <li>the </li>
        <li>eye </li>
        <li><img id="id11" src="https://yt3.ggpht.com/a/AATXAJwAOzpfL1W7T998Z0FGgW-nB-C-3giSBMVfiA=s900-c-k-c0xffffffff-no-rj-mo">

    </ul>

    <div id="div">
        PHP_Result:
    </div>

    <div style="border-radius: 10px;background-color:yellowgreen; font-size: 20px; font-weight: 300px;">
        <p>
            <?php

            //$massProduct = ["Name" => "Iphone X", "Price" => 2000, "Descriprion" => "So cute phone model."];
            $mass = [4, 2, 6, 8, 9, 15];
            print_r($mass);

            echo "<hr>";
            sort($mass);
            print_r($mass);
            echo "<hr>";
            $mass[] = count($mass);
            print_r($mass);
            echo "<hr><br>";
            echo "<hr>";

            $mass1 = ["Kostiuchik", "Andrei", "Mikhailovich"];
            print_r($mass1);
            echo "<hr>";
            sort($mass1);
            print_r($mass1);
            echo "<hr>";
            var_dump(implode($mass1));



            ?>
        </p>
    </div>





    <p></p>
    <div id="div1"></div>
</body>

</html>