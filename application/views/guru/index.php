<!DOCTYPE html>
<html lang="en">
<head>
	<meta charshet="UTF-8">
	<meta http-equiv="x-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1,0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>data guru</title>
</head>
<body>
	<h1>DATA GURU SMK N 1 BANGSRI</h1>
	<a href="<?php echo base_url('index.php/guru/tambah') ?>"><button type="submit" class="btn btn-primary">TAMBAH GURU</button></a>
	<form action="" method="get">
		<input type="text" name="name" placeholder="pencarian guru"><button type="submit" class="btn btn-danger">CARI</button>
	<?php if(!empty($data)):?>
		<table class="table table-dark table-striped">
			<thead>
				<th>NO</th>
				<th>NAMA</th>
				<th>EMAIL</th>
				<th>
					ACTION
				</th>
			</thead>
			<tbody>
				<?php $i = 1; ?>
				<?php foreach($data AS $key => $value):?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $value['name'] ?></td>
						<td><?php echo $value['email'] ?></td>
						<td>
							<a href="<?php echo base_url('index.php/guru/edit/'.$value['id']) ?>" button class="btn btn-info">edit</button></a>
							<a href="<?php echo base_url('index.php/guru/delete/'.$value['id']) ?>"button class="btn btn-danger">delete</button></a>
						</td>
					</tr>
				<?php endforeach?>
			</tbody>
		</table>
	<?php endif?>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
