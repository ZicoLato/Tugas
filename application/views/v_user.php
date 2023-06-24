<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 20px;
		}

		h1 {
			text-align: center;
			color: #333;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			background-color: #fff;
			margin-top: 20px;
		}

		table th,
		table td {
			padding: 10px;
			text-align: left;
		}

		table th {
			background-color: #35A9DB;
			color: #fff;
		}

		table tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		table tr:hover {
			background-color: wheat;
		}
	</style>
</head>
<body>
	<?php $this->load->view('navhome/navbar'); ?>

	<h1>Biodata Teman</h1>
	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No.Hp</th>
				<th>Hobi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($biodata_1 as $u){ ?>
			<tr>
				<td><?php echo $u->nama ?></td>
				<td><?php echo $u->alamat?></td>
				<td><?php echo $u->nohp ?></td>
				<td><?php echo $u->hobby ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>