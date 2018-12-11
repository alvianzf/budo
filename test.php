<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ul, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    
    $a = @$_GET['a'];
    $b = @$_GET['b'];

    function hapus ($table, $ID)
    {   
        $SQL = mysql_query("DELETE FROM $table WHERE ID = $ID");
    }

    hapus('pegawai', $i);

    ?>
</body>
</html>