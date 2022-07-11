<?php 

function fieldDOS($no,$nip,$nama,$makul,$hp,$tmpt){
    return "
    
    <tr>
        <td>$no</td>
        <td>$nip</td>
        <td>$nama</td>
        <td>$makul</td>
        <td>$hp</td>
        <td>$tmpt</td>
        <td class='gap-2'>
            <a href='' class='btn btn-danger'>
                Delete
            </a>
            <a href='' class='btn btn-warning'>
                Edit
            </a>
        </td>
    </tr>
    
    ";
}

function theadDOS($base_URL){  
    return "
    
    <thead>
        <tr>
            <th colspan='7'>
                <span class='d-flex align-items-center justify-content-center ireng cardT'>
                    <img src='$base_URL"."person-lines-fill.svg' class='me-2' width='30px'>
                    <h3>Data Dosen</h3>
                </span>
            </th>
        </tr>
        <tr>
            <th colspan='7'>
                <span class='d-flex gap-2'>
                    <a href='./assets/web/manage__dosen.php' class='btn btn-primary d-flex align-items-center'>
                        <img src='$base_URL"."plus.svg' class='me-2'>
                        Tambah
                    </a>
                    <a href='' class='btn d-flex align-items-center ireng'>
                        <img src='$base_URL"."filetype-pdf.svg' class='me-2'>
                        toPDF
                    </a>
                </span>
            </th>
        </tr>
        <tr class='table-dark'>
            <th>
                <span class='d-flex align-items-center justify-content-center'>
                    <img src='$base_URL"."arrow-down-up.svg' class='me-2'>
                    No
                </span>
            </th>
            <th>
                <span class='d-flex align-items-center justify-content-center'>
                    <img src='$base_URL"."key.svg' class='me-2'>
                    No Induk Pegawai
                </span>
            </th>
            <th>
                <span class='d-flex align-items-center justify-content-center'>
                    <img src='$base_URL"."person.svg' class='me-2'>
                    Nama Dosen
                </span>
            </th>
            <th>
                <span class='d-flex align-items-center justify-content-center'>
                    <img src='$base_URL"."book.svg' class='me-2'>
                    Mengampu Makul
                </span>
            </th>
            <th>
                <span class='d-flex align-items-center justify-content-center'>
                    <img src='$base_URL"."telephone.svg' class='me-2'>
                    No. Telp
                </span>
            </th>
            <th>
                <span class='d-flex align-items-center justify-content-center'>
                    <img src='$base_URL"."house-door.svg' class='me-2'>
                    Tempat Tinggal
                </span>
            </th>
            <th>
                <span class='d-flex align-items-center justify-content-center'>
                    <img src='$base_URL"."tools.svg' class='me-2'>
                    Aksi
                </span>
            </th>
        </tr>
    </thead>
    
    ";
}

?>