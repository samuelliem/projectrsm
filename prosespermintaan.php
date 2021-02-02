<?php
include "koneksi.php";
  $Nama  = $_REQUEST['nama'];
  $Email  = $_REQUEST['email'];
  $Subjek  = $_REQUEST['subjek'];
  $Pesan  = $_REQUEST['pesan'];

  $Temp = $_FILES['lampiran']['tmp_name'];
  $Lampiran  = rand(0,9999).$_FILES['lampiran']['name'];
  $Ukuran = $_FILES['lampiran']['size'];
  $ext = strtolower(pathinfo($Lampiran,PATHINFO_EXTENSION));
  $folder = "lampiran/";

  if ($Ukuran == 0) {
    $mysqli  = "INSERT INTO tabel_permintaan (nama, email, subjek, pesan) VALUES ('$Nama', '$Email','$Subjek','$Pesan')";
    $result  = mysqli_query($koneksi, $mysqli);

    if ($result) {
      echo "<script>alert('Input Berhasil'); window.location.href='hubkami.php'</script>";
    } else {
      echo "<script>alert('Input Gagal');</script>";
    }
  }
  else
  {
    if($Ukuran > 2048000){	
      echo "<script>alert('File Terlalu Besar '); window.location.href='hubkami.php'</script>";
    }else{	
      if ($ext == "txt" or $ext == "doc" or $ext == "docx" or $ext == "pdf") {
          move_uploaded_file($Temp, $folder . $Lampiran);
          mysqli_query($koneksi, "insert into tabel_permintaan (nama,email,subjek,pesan,lampiran,ukuran_file) values ('$Nama','$Email','$Subjek','$Pesan','$Lampiran','$Ukuran')");
          echo "<script>alert('Input Berhasil'); window.location.href='hubkami.php'</script>";
      }
      else {
        echo "<script>alert('File bukan tipe txt, doc, docx, pdf'); window.location.href='hubkami.php'</script>";
      }
    }
  }
?>




