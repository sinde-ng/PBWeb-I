<?php 

function cardDosen($link_img,$link_home){
    return "
    
    <div class='card' style='width: 20rem;'>
      <img src='$link_img' class='card-img-top' alt='...'>
      <div class='card-body'>
        <h5 class='card-title'>Dosen</h5>
        <p class='card-text'>
          <input name='NIP' class='form-control mb-2' type='text' placeholder='No Induk Pegawai' aria-label='default input example'>
          <input name='NAMA' class='form-control mb-2' type='text' placeholder='Nama Pegawai' aria-label='default input example'>
          <input name='NOTELP' class='form-control mb-2' type='text' placeholder='No Telp' aria-label='default input example'>
          <input name='ALAMAT' class='form-control' type='text' placeholder='Alamat' aria-label='default input example'>
        </p>
        <a href='$link_home' class='btn'>Batal</a>
        <input name='btn-submit' type='submit' value='Simpan' class='btn btn-primary'>
      </div>
    </div>
    
    ";
}

function cardMHS($link_img,$link_home){
    return "
    
    <div class='card' style='width: 20rem;'>
      <img src='$link_img' class='card-img-top' alt='...'>
      <div class='card-body'>
        <h5 class='card-title'>Mahasiswa</h5>
        <p class='card-text'>
          <input name='NIM' class='form-control mb-2' type='text' placeholder='No Induk Mahasiswa' aria-label='default input example'>
          <input name='NAMA' class='form-control mb-2' type='text' placeholder='Nama Mahasiswa' aria-label='default input example'>
          <input name='KELAS' class='form-control mb-2' type='text' placeholder='Kelas Mahasiswa' aria-label='default input example'>
          <input name='NOTELP' class='form-control mb-2' type='text' placeholder='No Telp' aria-label='default input example'>
          <input name='ALAMAT' class='form-control' type='text' placeholder='Alamat' aria-label='default input example'>
        </p>
        <a href='$link_home' class='btn'>Batal</a>
        <input name='btn-submit' type='submit' value='Simpan' class='btn btn-primary'>
      </div>
    </div>
    
    ";
}

?>