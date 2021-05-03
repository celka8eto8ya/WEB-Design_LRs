<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
    <link href="cssStyles.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>new_htmlFile</title>
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
        <button><b>MAIN</b></button>
        <button><b>Aditional</b></button>
        <button><b>Option</b></button>
        <button><b>Help</b></button>
    </div>

    <h2>Example of php app</h2>
    <hr>
    <div style="border-radius: 10px;background-color:yellowgreen; font-size: 20px; font-weight: 300px;">
        <p>
            <?php


            function funA($a1, $a2)
            {

                echo "($a1) and ($a2) <br>";
            };
            function funB($a1, $a2, $a3)
            {
                $a4 = 0;
                if ($a3 == "+") {
                    $a4 = $a1 + $a2;
                }
                if ($a3 == "-") {
                    $a4 = $a1 - $a2;
                }
                if ($a3 == "*") {
                    $a4 = $a1 * $a2;
                }
                if ($a3 == "/") {
                    $a4 = $a1 / $a2;
                }
                echo "result ($a1) $a3 ($a2) = $a4 <br>";
            };

            $a1 = 15;
            $a2 = 16;
            funA($a1, $a2);

            $a1 = 12;
            $a2 = 16;
            $a3 = "+";
            funB($a1, $a2, $a3);
            $a1 = 12;
            $a2 = 16;
            $a3 = "-";
            funB($a1, $a2, $a3);
            $a1 = 12;
            $a2 = 16;
            $a3 = "*";
            funB($a1, $a2, $a3);
            $a1 = 12;
            $a2 = 16;
            $a3 = "/";
            funB($a1, $a2, $a3);

            echo "------------------------------------------------------- <br>";
            $str = "Strokawd qw q";
            $var = 23;
            echo  $str;
            echo  "<br>";
            echo  $var * 2;
            echo  "<br>";
            //   echo  phpinfo();

            ?>
        </p>
    </div>

    <hr>



    <div align="justify">
        <h3>THIS IS A SUBHEADING TITLE</h3>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
        dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
        suscipit lobortis nisl ut aliquip
        ex ea commodo consequat.Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
        vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
        praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
        Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer
        possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
        Investigationes demonstraverunt
        lectores legere me lius quod ii legunt saepius.
    </div>
    <p></p>
    <div id="div1"></div>
</body>

</html>