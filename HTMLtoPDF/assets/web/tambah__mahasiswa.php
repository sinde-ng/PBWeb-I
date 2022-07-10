<?php 

    include './../php/component.php';
?>

<?= 
    starting(
        "STIMIK WP Pekalongan",
        "./../bootstrap/css/bootstrap.css",
        "",
        "./../image/logo.png"
    );
?>

<!-- START Body -->
<form class="container" action="" method="post">
    <h1>Data Mahasiswa</h1>
    <a href=""></a>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</td>
                <th>Nama</td>
                <th>NIM</td>
                <th>Kelas</td>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</form>
<!-- END Body -->

<?= 
    ending(
        "../bootstrap/js/bootstrap.js"
    );
?>