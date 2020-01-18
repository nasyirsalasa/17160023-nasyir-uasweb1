<html>
<head>
<title>Output</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
</head>
<body>

<?php
$nama   = $_GET['nama'];
$kelas  = $_GET['kelas'];
$usia   = $_GET['usia'];
$date   = $_GET['date'];
$smester= $_GET['smester'];
?>
<table class="table table-strip table-bordered" style="width:100%">
<thead>
<tr>
	<th>nama</th>
	<th>kelas</th>
	<th>usia</th>
	<th>date</th>
	<th>smester</th>
</tr>
</thead>
<tbody>
	<td><? echo '$nama' ?></td>
	<td><? echo '$kelas' ?></td>
	<td><? echo '$usia'  ?></td>
	<td><? echo '$date' ?></td>
	<td><? echo '$smester'?></td>
</tbody>
<button class="btn btn-outline-danger" href='input_form.php'>Back</button>
</table>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
</body>
</html>