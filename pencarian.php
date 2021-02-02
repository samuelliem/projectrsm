<?php
include "koneksi.php";
  $Pencarian  = $_REQUEST['pencarian'];
  $mysqli  = "SELECT lokasi FROM tabel_pencarian WHERE kunci LIKE '%$Pencarian%'";
  $result  = mysqli_query($koneksi, $mysqli);

  while ($row = $result->fetch_assoc()) {
    $lokasi = $row['lokasi'];
    strval($lokasi);
  }

  if (isset($lokasi)) {
    echo "<script>alert('Pencarian $Pencarian berhasil ditemukan.'); window.location.href='$lokasi'</script>";
  } else {
    echo "<script>alert('Pencarian $Pencarian gagal ditemukan. Bantu kami untuk melengkapi konten pada menu hubungi kami'); window.location.href='hubkami.php#permintaan'</script>";
  }
?>
