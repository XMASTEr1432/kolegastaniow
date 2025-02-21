<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - data i czas</title>
</head>
<body>
    <h1>PHP - data i czas</h1>
    <?php 
    echo("data (Y-m-d) = ".date("Y-m-d")."<br>");
    echo("data (d-m-y) = ".date("d-m-y")."<br>");
    echo("data (Y-F-l) = ".date("Y-F-l")."<br>");
    echo("data (Y-F-l H:i:s) = ".date("Y-F-l H:i:s")."<br>");
    echo("data (Y-F-l H:i:s z) = ".date("Y-F-l H:i:s z")."<br>");

    var_dump(date("Y-F-l H:i:s z"))
    ?>
    <hr>
    <?php 
        $data = getdate();
        $dzien = $data["mday"];
        $miesiac = $data["mon"];
        $rok = $data["year"];

        echo("$dzien-$miesiac-$rok"."<br>");
        var_dump("$dzien-$miesiac-$rok");
    ?>
    <hr>
    <?php 
        var_dump(checkdate(12,31,-400));
        echo("<br>");   
        var_dump(checkdate(2,29,2003));
        echo("<br>");
        var_dump(checkdate(2,29,2004));
    ?>
    <hr>
    <?php 
        echo("<b>data</b>"."<br>");
        echo(strtotime("now")."<br>");
        echo(strtotime("3 October 2005")."<br>");
        echo(strtotime("+5 hours")."<br>");
        echo(strtotime("+1 week")."<br>");
        echo(strtotime("+1 week 3 days 7 hours 5 seconds")."<br>");
        echo(strtotime("next Monday")."<br>");
    ?>
    <hr>
    <?php 
        echo("<b>data2</b><br>");
        echo(date("M-d-y",strtotime("last Sunday"))."<br>");
        echo(date("H:i:s M-d-Y", strtotime("now"))."<br>");
        echo(date("H:i:s M-d-Y", strtotime("3 October 2035"))."<br>");
        echo(date("H:i:s M-d-Y", strtotime("3 October 1005"))."<br>");
        var_dump(date("H:i:s M-d-Y", strtotime("now"))."<br>");
    ?>
    <hr>
    <h3>Znacznik czasu</h3>
    <?php 
        // znacznik czasu 
        // mktime() ustawia czas unixowy 
        // date zamienia czas unixowy na ludzki 
        echo date("M-d-Y", mktime(0,0,0,12,12,1001))."<br>";
        echo date("M-d-Y", mktime(/* 0,0,0, */11,11,2011))."<br>";
    ?>
</body>
</html>