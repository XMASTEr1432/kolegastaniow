<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_polskadata_korniak</title>
</head>
<body>
    <h1>Data</h1>
    <h3>Napisać skrypty, zmieniające nazwy dni tygodia w dacie z angielskich na polskie, wykorzystując: różne instrukcje warunkowe oraz tablice. Data bieżąca: nazwa dnia tygodnia, nr dnia, nazwa miesiąca i pełny rok</h3>
    <?php 
    $data = [
        date('l'),
        date('d'),
        date('M'),
        date('Y')
    ];
    echo("<b>Dzisiejsza data to:</b> ");
    echo('<br>');
    if ($data[0] == 'Monday') {
        echo("Poniedziałek ");
    }
    if ($data[0] == 'Tuesday') {
        echo("Wtorek ");
    }
    if ($data[0] == 'Wednesday') {
        echo("Środa ");
    }
    if ($data[0] == 'Thursday') {
        echo("Czwartek ");
    }
    if ($data[0] == 'Friday') {
        echo("Piątek ");
    }
    if ($data[0] == 'Saturday') {
        echo("Sobota ");
    }
    if ($data[0] == 'Sunday') {
        echo("Niedziela ");
    }
    echo($data[1]);
    if($data[2] == "Jan"){echo ' Styczeń ';}
    if($data[2] == "Feb"){echo ' Luty ';}
    if($data[2] == "Mar"){echo ' Marzec ';}
    if($data[2] == "Apr"){echo ' Kwiecień ';}
    if($data[2] == "May"){echo ' Maj ';}
    if($data[2] == "Jun"){echo ' Czerwiec ';}
    if($data[2] == "Jul"){echo ' Lipiec ';}
    if($data[2] == "Aug"){echo ' Sierpień ';}
    if($data[2] == "Sep"){echo ' Wrzesień ';}
    if($data[2] == "Oct"){echo ' Październik ';}
    if($data[2] == "Nov"){echo ' Listopad ';}
    if($data[2] == "Dec"){echo ' Grudzień ';}
    echo($data[3]); 

    
    ?>
    <br>
    <?php 
    // $dzien =[
    //     'Monday' => 'Poniedziałek'
    // ];

    // $miesiac = [
    //     'Jan' => 'Styczeń',
    //     'Feb' => 'Luty',
    //     'Mar' => 'Marzec'
    // ];
    // echo($miesiac[$data[2]]);
    ?>
</body>
</html>