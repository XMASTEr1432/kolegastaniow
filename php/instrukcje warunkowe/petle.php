<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{background-color: #ff0;}
        tr:first-of-type{background-color: #f0f;}
        tr:nth-of-type(4){background-color: #0ff;}

        ol{background-color: #0f0;}
        li:nth-of-type(4){background-color: #ff0; list-style-type:lower-roman; width: 333px;}
        table{border: 1px solid black; border-collapse: collapse;}
        td{border: 1px solid black;}

    </style>
</head>
<body>
    <h1>PHP - pętle</h1>

    <h3>Pętla <tt>while</tt></h3>
    <?php
        $zmienna1 = 0;
        while($zmienna1 < 10)
        // while($zmienna1 < 0) # nie wykona
        {
            echo("Pętdla while dla \$zmienna1 = $zmienna1".'<br>');
            $zmienna1++;
        }
        echo('<hr>');
        $zmienna2 = 0;
        while($zmienna2++ < 10)
        {
            echo("Pętla while dla \$zmienna2 = $zmienna2".'<br>');
            $zmienna2a = 100;
            while($zmienna2a++ < 110)
            {
                echo("Pętla while dla \$zmienna2a = $zmienna2a".'<br>');
            }
        }
    ?>
    <hr>
    <h3>Tabele</h3>
    <table>
        <?php
            // echo('<table>');
            $zmienna3 = 0;
            while($zmienna3++ < 5)
            {
                echo('<tr>');
                $zmienna3a = 100;
                while($zmienna3a++ < 105)
                {
                    echo('<td>&nbsp;</td>');
                }
                echo('</tr>');
            }
        ?>
    </table>
    <hr>
    <h3>Lista</h3>
    <?php
        echo("<ol>");
        $zmienna4 = 0;
        while ($zmienna4++ < 5) {
            echo("<li>");

            if ($zmienna3 == 3) {
                echo("ala ma kota");
            }
            echo("</li>");
        }
        echo("</ol>");
    ?>
    <hr>
    <h3>Pętla <tt>do</tt>...<tt>while</tt>...</h3>
    <?php
        $zmienna5 = 1;
        do {
            echo("$zmienna5: Pętla do...while dla \$zmienna5 = $zmienna5");
            echo('<br>');
        } while ($zmienna5 < 0);
    ?>
    <hr>
    <h3>Pętla <tt>for...</tt></h3>
    <?php
        for ($zmienna6=0; $zmienna6 < 10; $zmienna6++) { 
            if ($zmienna6 == 5) {
                continue;
                // break;
            }
            echo("Pętla typu <tt>for</tt> dla \$zmienna6 = $zmienna6".'<br>');
        }
    ?>
    <h3>Gwiazdki wow ale fajne</h3>
    <?php
        $wysokosc = 13;
        for ($zmienna7=1; $zmienna7 <= $wysokosc; $zmienna7++) { 
            for ($zmienna7a=1; $zmienna7a <= $wysokosc; $zmienna7a++) { 
                echo("*");
            }
            echo("<br>");
        }
    ?>
    <h3>Pętla <tt>foreach</tt></h3>
    <?php
        $tab = array 
        (
            1 => 'jeden',
            2 => 'dwa',
            'trzy' => 3,
            'cztrery' => 4
        );
        foreach ($tab as $val) {
            {
                echo ("$val <br>");
            }
        };

        foreach ($tab as $key => $val) {
            {
                echo ("$key -----> $val <br>");
            }
        };
    ?>
    <h3>Instrukcja <tt>break</tt></h3>
    <?php
        $i = 0;
        while (true) {
            echo("Wartość zmiennej [\$i = $i] <br>");
            if ($i >= 9) {
                break;
            }
            $i++;
        }
    ?>
    <h3>Instrukcja <tt>if...else...</tt> zapis alternatywny</h3>
    <?php
        $a = 42;
        $b = 24;
        if($a<$b):
            echo("\$a jest mniejsze od \$b");
        else:
            echo("\$a jest większe od \$b");
        endif;

    ?>
</body>
</html>