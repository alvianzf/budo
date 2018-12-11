<?php

ob_start();

?>

<html>
<body>
<?php

include '../config/config.php';
?>

<barcode value="<?php echo $i;?>" ec="H"></barcode>

<h3 style="text-align:center">MASTER DATA SISWA</h3>
<br>

<br/>

<table>
	<tr>
		<td></td>
		<td></td>
		<td style="width:100px">No</td>
		<td style="width:400px">Nomor Registrasi</td>
		<td style="width:400px">Nama Siswa</td>
		<td style="width:100px">Program</td>
        <td>Terdaftar</td>
	</tr>

	<?php
	$no=1;
    $qry = mysql_query("SELECT * FROM kelas");
	while ($data = mysql_fetch_assoc($qry)) {
		# code...

		?>
	<tr>
		<td></td>
		<td></td>
		<td><?php echo $no;?></td>
		<td><?php echo $data['reg'];?></td>
		<td><?php echo $data['nama'];?></td>
		<td><?php echo $data['program'];?></td>
		<td><?php echo $data['terdaftar'];?></td>
	</tr>
	<?php
	$no++;
		}
	?>

	
</table>


</body>
</html>
<?php
ob_end_clean();
$html = ob_get_contents();

require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output( 'MasterDataSiswa.pdf','D');
?>
