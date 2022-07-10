<?php 
    include './database/connectDB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>

    <form action="" method="post" class="container">
        <div class="card" style="width: 50%;">
            <img src="./images/bg.jpg" class="card-img-top" width="100%">
            <div class="card-body">
                <h5 class="card-title mb-4">Mahasiswa STMIK WP Pekalongan</h5>
                <p class="card-text">
                    <input type="text" class="form-control mb-2" id="formGroupExampleInput" name="NIM" placeholder="Nomor Induk Mahasiswa" maxlength="11">
                    <input type="text" class="form-control mb-2" id="formGroupExampleInput" name="NAMA" placeholder="Nama Mahasiswa" maxlength="50">
                    <input type="text" class="form-control mb-2" id="formGroupExampleInput" name="MATKUL" placeholder="Mata Kuliah" maxlength="20">
                    <input type="text" class="form-control mb-2" id="formGroupExampleInput" name="NT" placeholder="Nilai Teori" maxlength="3">
                    <input type="text" class="form-control mb-2" id="formGroupExampleInput" name="NP" placeholder="Nilai Praktek" maxlength="3">
                </p>
                <a href="./viewnilai.php" class="btn btn-success">Lihat</a>
                <button name="btn-add" class="btn btn-primary">Simpan</button>
                    <?php 

                        if (isset($_POST['btn-add'])){
                            include './insertnilai.php';
                        }
            
                    ?>
            </div>
        </div>
    </form>

</body>
</html>