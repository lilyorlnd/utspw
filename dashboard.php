<?php
include "function.php";
session_start();
if($_SESSION['login'] == false){
    header('Location:login.php');
}

    $query = query("SELECT * FROM tbadmin");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 bg-dark">
            <h3 class="text-light p-3"><b>Sistem Informasi Akademik</b></h3>
        </div>

        <div class="col-3" style="background-color:#DBDFEA; padding-bottom:38%;">
            <ul class="list-group">
                <li class="list-group-item text-dark mt-2 mb-2"><a href="dashboard.php" style="text-decoration:none;color:black;">Dashboard</a></li>
                <li class="list-group-item text-dark mb-2"><a href="mahasiswa.php" style="text-decoration:none;color:black;">Mahasiswa</a></li>
                <li class="list-group-item text-dark"><a href="logout.php" style="text-decoration:none;color:black;">Logout</a></li>
            </ul>
        </div>
            
        <div class="col-9">
            <div class="row">
                <div class="col-12 p-3 border-bottom border-3">
                    <h1>Dashboard</h1>
                </div>

                <div class="col-4 mt-3">
                    <div class="bg-light text-center border rounded text-light">
                        <h1><a href="mahasiswa.php"style="text-decoration:none;color:black;"> Data Mahasiswa<br>
                        </a></h1>  
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<?php $id = 1; ?>
<?php foreach ($query as $row) : ?>

<table border="1px solid black">
<tr>
<td>No</td>
<td><?= $id; ?></td>
<td></td>
<td></td>
</tr>


<tr>
<td>Nama</td>
<td><?= $row['nama'] ?></td>
<td></td>
<td></td>
</tr>

<tr>
<td>Email</td>
<td><?= $row['email'] ?></td>
<td></td>
<td></td>
</tr>

<tr>
<td>Username</td>
<td><?= $row['username'] ?></td>
<td></td>
<td></td>
</tr>

<tr>
<td>Edit</td>
<td><a href="delete.php?id=<?=$row['id'];?>">Delete</a></td>
<td><a href="update.php?id=<?=$row['id'];?>">Update</a></td>
<td><a href="tambah.php">Tambah</a></td>
</tr>

<tr>
<td><a href="logout.php">Logout</a>
</tr>

<?php $id++; ?>
<?php endforeach; ?>

</table>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>