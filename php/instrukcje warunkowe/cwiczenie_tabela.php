<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{border: 1px solid black;}
        tr{border: 1px solid black;}
    </style>
</head>
<body>
    <h1>Tabela</h1>
    <form action="" method="get">
        <label for="pole1">Podaj liczbę pól i wierszy</label>
        <input type="text" name="pole1" id="">
        <input type="text" name="pole2" id="">
        <input type="submit" value="Wyślij">
    </form>
    <?php
        $pola = @$_GET['pole1'];
        $wiersze = @$_GET['pole2'];
        
        $i = 0;
        
        echo("<table>");
        while ($i < $wiersze) {
            $j = 0;
            echo("<tr>");
            while ($j < $pola) {
                echo("<td>&nbsp;</td>");
                $j++;
            }
            $i++;
            echo("</tr>");
        };
        echo("</table>");
    ?>
</body>
</html>