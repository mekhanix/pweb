<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Hitung Statistik</title>
</head>
<body>
<h2>Hitung Statistik</h2>
<!-- form input -->
<div id="kiri">
<form action="hitungstatistik.php" method="get">
<div label="lf"><label for="d1">Data ke 1</label><input type="text" name="data1"></div>
<div label="lf"><label for="d2">Data ke 2</label><input type="text" name="data2"></div>
<div label="lf"><label for="d3">Data ke 3</label><input type="text" name="data3"></div>
<div label="lf"><label for="d1">Data ke 4</label><input type="text" name="data4"></div>
<div label="lf"><label for="d2">Data ke 5</label><input type="text" name="data5"></div>
<div label="lf"><label for="d3">Data ke 6</label><input type="text" name="data6"></div>
<div label="lf"><label for="d1">Data ke 7</label><input type="text" name="data7"></div>
<div label="lf"><label for="d2">Data ke 8</label><input type="text" name="data8"></div>
<div label="lf"><label for="d3">Data ke 9</label><input type="text" name="data9"></div>
<div label="lf"><label for="d3">Data ke 10</label><input type="text" name="data10"></div>
<div label="lf" align="right" style="width=100px"><input type="submit" name="submit"></div>
<div label="lf" align="right" style="width=100px"><button type="reset" value="Reset">Clear</button></div>

</form>
</div>
<?php
$min = 0;
$max = 0;
$average = 0;
$modus = 0;
$median = 0;
session_start();


if (isset($_GET['submit'])) {
	$data1 = $_GET['data1'];
	$data2 = $_GET['data2'];
	$data3 = $_GET['data3'];
	$data4 = $_GET['data4'];
	$data5 = $_GET['data5'];
	$data6 = $_GET['data6'];
	$data7 = $_GET['data7'];
	$data8 = $_GET['data8'];
	$data9 = $_GET['data9'];
	$data10 = $_GET['data10'];
	$myVar = [$data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9,$data10];




	$max = max($myVar);
	$min = min($myVar);
	$average = array_sum($myVar)/count($myVar);

	// mencari modus
	$values = array_count_values($myVar);
	$modus = array_search(max($values), $values);


	//mencarimedian
	$urut = sort($myVar);
	$median = ($myVar[4] + $myVar[5])/2;

}


?>
<div id="kanan">
<form>
<div label="rf"><label for="min">MIN</label><input type="text" name="min" value="<?php echo $min; ?>"></div>
<div label="rf"><label for="max">MAX</label><input type="text" name="max" value="<?php echo $max; ?>"></div>
<div label="rf"><label for="average">AVERAGE</label><input type="text" name="avg" value="<?php echo $average; ?>"></div>
<div label="rf"><label for="median">MEDIAN</label><input type="text" name="med" value="<?php echo $median; ?>"></div>
<div label="rf"><label for="modus">MODUS</label><input type="text" name="mod" value="<?php echo $modus; ?>"></div>

</form>
</div>
</body>
</html>

