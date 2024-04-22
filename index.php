<?php
session_start();
if ($_SESSION['status'] !='login') {
    echo "<script>
    alert('Anda belum Login!');
    location.href='../index.php';
    </script>";
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="index.php">Website Galeri Foto</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse mt-2" id="navbarNav">
            <div class="navbar-nav me-auto">
              <a href="album.php" class="nav-link">Album</a>
            </div>

            <a href="../config/aksilogout.php" class="btn btn-success m-1">Keluar</a>  
          </div>
        </div>
      </nav> 

      <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
  <p>&copy; Ujikom PPL 2024 </p>



<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>