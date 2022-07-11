<?php 
    // short direc 
    $BASE_URL = './assets/';
    $BASE_URL_component = $BASE_URL.'php/components/';
    
    // database
    include $BASE_URL.'database/connectDB.php';
    
    // component
    include $BASE_URL_component.'HTML.php';
    include $BASE_URL_component.'tableDosen.php';
    include $BASE_URL_component.'tableMahasiswa.php';
    
    echo starting(
        "Pendataan Mahasiswa dan Dosen",
        $BASE_URL."bootstrap/css/bootstrap.css",
        $BASE_URL."design/index.css",
        $BASE_URL."image/logo.png"
    );
?>

<!-- START body -->
<?=navbar($BASE_URL.'image/logo.png')?>

<form action="" method="post" class="container-fluid">
    <!-- DOSEN -->
    <table class="table table-striped mb-5">
        <?=theadDOS($BASE_URL.'bootstrap-icons/')?>

        <tbody>
        <?php
                $query = "SELECT * FROM dosen";
                $sql = mysqli_query($conn,$query);
                $row = mysqli_num_rows($sql);
                $no = 1;

                if ($row > 0){
                    while($data = mysqli_fetch_array($sql)){
                        echo fieldDOS($no,$data['nip'],$data['nama'],$data['makul'],$data['telp'],$data['tempt']);
                        $no++;
                    }
                } else {
                    echo "
                    <tr>
                        <th colspan='7' align='center'>Data Kosong !!!</th>
                    </tr>
                    ";
                }
            ?>
        </tbody>
    </table>

    <!-- MAHASISWA -->
    <table class="table table-striped">
        <?=theadMHS($BASE_URL.'bootstrap-icons/')?>

        <tbody>
            <?php
                $query = "SELECT * FROM mahasiswa";
                $sql = mysqli_query($conn,$query);
                $row = mysqli_num_rows($sql);
                $no = 1;

                if ($row > 0){
                    while($data = mysqli_fetch_array($sql)){
                        echo fieldMHS($no,$data['nim'],$data['nama'],$data['kelas'],$data['telp'],$data['tempt']);
                        $no++;
                    }
                } else {
                    echo "
                    <tr>
                        <th colspan='7' align='center'>Data Kosong !!!</th>
                    </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</form>
<!-- END body -->

<?=ending($BASE_URL."bootstrap/js/bootstrap.js");?>

