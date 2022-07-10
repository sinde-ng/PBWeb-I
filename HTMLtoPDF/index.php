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
<form action="" method="post" class="container-fluid">

    <!-- DOSEN -->
    <table class="table table-striped mb-5">
        <?=theadDOS($BASE_URL.'bootstrap-icons/')?>

        <tbody>
            <?=fieldDOS(1,'21.240.0057','Muhammad Naufal Yafi','08975765','Pluto')?>
        </tbody>
    </table>

    <!-- MAHASISWA -->
    <table class="table table-striped">
        <?=theadMHS($BASE_URL.'bootstrap-icons/')?>

        <tbody>
            <?=fieldMHS(1,'21.240,0057','Muhammad Naufal Yafi','2P41','08976674731','Neptunus')?>
        </tbody>
    </table>
</form>
<!-- END body -->

<?= 
    ending(
        $BASE_URL."bootstrap/js/bootstrap.js"
    );
?>

