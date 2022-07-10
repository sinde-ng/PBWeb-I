<?php 
    include './database/connectDB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Nilai</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <style>
        .container {
            padding-top: 1rem;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: 100vh;
        }

        th {
            text-align: center;
        }
    </style>
</head>
<body>

    <form action="" method="post" class="container">
        <h1>Daftar Semua Mahasiswa</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>
                        <a href="./inputnilai.php" class="btn btn-primary">Tambah Data</a>
                    </td>
                </tr>
                <tr class="table-dark">
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Makul</th>
                    <th>N Teori</th>
                    <th>N Praktek</th>
                    <th>N Total</th>
                    <th>Grade</th>
                </tr>
            </thead>

            <tbody>

                <?php 
                    $no = 1;
                    $query = mysqli_query($conn,"SELECT * FROM nilaimakul");
                    
                    while ($data = mysqli_fetch_array($query)){
                        echo "
                        <tr>
                            <td>$no</td>
                            <td>$data[nim]</td>
                            <td>$data[nama]</td>
                            <td>$data[makul]</td>
                            <td>$data[nilai_t]</td>
                            <td>$data[nilai_p]</td>
                            <td>$data[t_nilai]</td>
                            <td>$data[grade]</td>
                        </tr>
                        ";
                        $no++;
                    }
                ?>

            </tbody>
        </table>
    </form>

</body>
</html>