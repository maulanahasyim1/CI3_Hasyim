<!DOCTYPE html>
<html lang="en">
<head>
	<meta charshet="UTF-8">
	<meta http-equiv="x-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1,0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>tambah guru</title>
</head>
<body>
    <h1>FORM TAMBAH GURU</h1>
    <div class="container">
       <div class="card card-body rounded position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
        <form action="<?php echo base_url('index.php/guru/action_tambah')?>" method="post">
    <div class="mb-3">
        <label for="" class="form-label">NAMA</label>
        <input class="form-control" type="text" name="name" required><br>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">EMAIL</label><br>
        <input class="form-control"type="text" name='email'  required><br>
    </div>
    <div class="mb-3">
        <label class="form-label"for="">PASSWORD</label><br>
        <input class="form-control" type="password" id="pass" name='password' required><br>
        </div>
        <div class="d-grid gap-2">
        <button class="btn btn-danger" type='submit'>SIMPAN</button><br>
        </div>   
    </form>
    <a href=" <?php echo base_url('index.php/guru') ?> ">
    <div class="d-grid gap-2">
    <button class="btn btn-info">DATA GURU</button>
    </div>
    </a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
