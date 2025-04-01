<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php 
        $katalog = "./";
        $nazwa1 = "image1.jpg";
        $nazwa2 = "rysunek1.jpg";

        $fd = fopen($katalog.$nazwa1, "r");
        $size = filesize($katalog.$nazwa1);
        $contents = fread($fd, $size);

        fclose($fd);

        header("Content-Type: application/octet-stream");
        header("Content-Lenght: $size;");
        header("Content-Disposition: attachment; filename=$nazwa2");
        echo $contents;
    ?>
</body>
</html>