<?php 
    $data = array(
        $_POST['NIM'],
        $_POST['NAMA'],
        $_POST['MATKUL'],
        (int)$_POST['NT'],
        (int)$_POST['NP']
    );

    $data[] = (int)($data[3] + $data[4]) / 2;

    if ($data[5] >= 90){
        $data[] = "A";
    } else if ($data[5] >= 80){
        $data[] = "B";
    } else if ($data[5] >= 70){
        $data[] = "C";
    } else if ($data[5] >= 60){
        $data[] = "D";
    } else {
        $data[] = "E";
    }

    $upload = mysqli_query($conn,"INSERT INTO nilaimakul SET
        nim='$data[0]',
        nama='$data[1]',
        makul='$data[2]',
        nilai_t=$data[3],
        nilai_p=$data[4],
        t_nilai=$data[5],
        grade='$data[6]'");

    if ($upload){
        echo "<script>alert('Berhasil Disimpan')</script>";
    }
?>