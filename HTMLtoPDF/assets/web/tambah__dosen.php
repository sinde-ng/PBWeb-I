<?php 
    // short direc 
    $BASE_URL = './../';
    $BASE_URL_component = $BASE_URL.'php/components/';
    
    // database 
    include $BASE_URL.'database/connectDB.php';

    // component
    include $BASE_URL_component.'HTML.php';
    include $BASE_URL_component.'card.php';

    echo starting(
        "Tambah Data Dosen",
        $BASE_URL."bootstrap/css/bootstrap.css",
        $BASE_URL."design/addCard.css",
        $BASE_URL."image/logo.png",
    );
?>

<!-- START body -->
<form action="" method="post" class="container-fluid d-flex justify-content-center align-items-center">
    <?php 
      echo cardDosen($BASE_URL.'image/dosen.jpg','./../../');
      
      if (isset($_POST['btn-submit'])){
        $dataDosen = array(
          $_POST['NIP'],
          $_POST['NAMA'],
          $_POST['NOTELP'],
          $_POST['ALAMAT']
        );
      }
    ?>
</form>
<!-- END body -->

<?=ending($BASE_URL.'bootstrap/js/bootstrap.js')?>