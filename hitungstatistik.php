<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- form input -->
<div class="input">
<form action="hitungstatistik.php" method="get">
	<ul>
		<li>
			<label>Data 1</label>
			<input type="text" name="data1"><br><br>
		</li>
		<li>
			<label>Data 2</label>
			<input type="text" name="data2"><br><br>
		</li>
		<li>
			<label>Data 3</label>
			<input type="text" name="data3"><br><br>
		</li>
		<li>
			<label>Data 4</label>
			<input type="text" name="data4"><br><br>
		</li>
		<li>
			<label>Data 5</label>
			<input type="text" name="data5"><br><br>
		</li>
		<li>
			<label>Data 6</label>
			<input type="text" name="data6"><br><br>
		</li>
		<li>
			<label>Data 7</label>
			<input type="text" name="data7"><br><br>
		</li>
		<li>
			<label>Data 8</label>
			<input type="text" name="data8"><br><br>
		</li>
		<li>
			<label>Data 9</label>
			<input type="text" name="data9"><br><br>
		</li>
		<li>
			<label>Data 10</label>
			<input type="text" name="data10"><br><br><br>
		</li>
	</ul>
			<input type="submit" name="submit" value="submit">
</div>
</form><br><br>
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

<label>MIN</label>
<input type="text" name="min" value="<?php echo $min; ?>" />
<label>MAX</label>
<input type="text" name="max" value="<?php echo $max; ?>" />
<label>AVERAGE</label>
<input type="text" name="avg" value="<?php echo $average; ?>" />
<label>MODUS</label>
<input type="text" name="mode" value="<?php echo $modus; ?>" />
<label>MEDIAN</label>
<input type="text" name="mode" value="<?php echo $median; ?>" />



</body>
</html>

