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
        "Kelola Data Mahasiswa",
        $BASE_URL."bootstrap/css/bootstrap.css",
        $BASE_URL."design/addCard.css",
        $BASE_URL."image/logo.png",
    );
?>

<!-- START body -->
<form action="" method="post" class="container-fluid d-flex justify-content-center align-items-center">
    <?php 
      echo cardMHS($BASE_URL.'image/student.jpg','./../../');
      
      if (isset($_POST['btn-submit'])){
        $dataMahasiswa = array(
          $_POST['NIM'],
          $_POST['NAMA'],
          $_POST['KELAS'],
          $_POST['NOTELP'],
          $_POST['ALAMAT']
        );
      }
    ?>
</form>
<!-- END body -->

<?=ending($BASE_URL.'bootstrap/js/bootstrap.js')?>