<?php
include "koneksi.php";
  $Nama  = $_REQUEST['nama'];
  $Email  = $_REQUEST['email'];
  $Subjek  = $_REQUEST['subjek'];
  $Pesan  = $_REQUEST['pesan'];
  $mysqli  = "INSERT INTO tabel_hubkami (nama, email, subjek, pesan) VALUES ('$Nama', '$Email','$Subjek','$Pesan')";
  $result  = mysqli_query($koneksi, $mysqli);

  if ($result) {
    echo "<script>alert('Input Berhasil'); window.location.href='hubkami.php'</script>";
  } else {
    echo "<script>alert('Input Gagal');</script>";
  }
?>
