<?php

session_start();
include '../config/config.php';

$reg = @$_POST['reg'];

$bulan = date('F');
$tahun = date('Y');
$tanggal = date('Y-m-d');

$s = mysql_num_rows(mysql_query("SELECT * FROM iuran WHERE reg = '$reg'"));
$dnd = mysql_fetch_assoc(mysql_query("SELECT * FROM iuran WHERE reg= '$reg'"));
$dd = date('F', strtotime($dnd['tanggal_transaksi']));

$t = mysql_fetch_assoc(mysql_query("SELECT * FROM iuran WHERE reg='$reg' ORDER BY ID DESC"));
    $abc = mysql_fetch_assoc(mysql_query("SELECT * FROM kelas WHERE reg = '$reg'"));
    $program = $abc['program'];

    $harga = @$_POST['harga'];

    $ta = date('n', strtotime($t['tanggal_transaksi']));
    $to = date('n');

    $interval = $to-$ta;


        if ($s > 0)
        { 
            
            if ($interval == 1)
            {
                $iuran = $harga;
                $r = mysql_query("INSERT INTO iuran VALUES (null, '$reg', '$bulan', '$tahun', '$tanggal','$iuran')");
                echo $iuran;

                if($r)
                {
                    header('location:../site.php?hal=iuran&ref=success');
                    echo $iuran;
                }
            
            }else if ($interval > 1){
                $iuran = $harga * $interval + ($interval*10000);
                $r = mysql_query("INSERT INTO iuran VALUES (null, '$reg', '$bulan', '$tahun', '$tanggal','$iuran')");
                
                 header('location:../site.php?hal=iuran&ref=success');
            }else{
                
            $iuran = $harga;
            $r = mysql_query("INSERT INTO iuran VALUES (null, '$reg', '$bulan', '$tahun', '$tanggal','$iuran')");
            
            }
            
        }else
        {   
            $iuran = $harga;
            $r = mysql_query("INSERT INTO iuran VALUES (null, '$reg', '$bulan', '$tahun', '$tanggal','$iuran')");
        
                header('location:../site.php?hal=iuran&ref=success2');
            
        }
    
// $tanggal = date('Y-m-d');

// $r = mysql_query("INSERT INTO iuran VALUES (null, '$reg', '$bulan', '$tahun', '$tanggal','$iuran')");

// if ($r)
// {
//     echo $iuran;

    
// }else{
//     header('location:../site.php?hal=iuran&ref=failed');
//     echo $iuran;
// }
