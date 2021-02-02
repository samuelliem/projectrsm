<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>RSM</title>
    <link rel="stylesheet" href="hubkami/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="hubkami/css/hubkami.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>

<body>
    
<section id="homepage">
        <!--Navigation Bar-->
        <div id="konten-top">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home.php"></a>
                    <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="color: rgb(255,255,255);">
                        <span class="sr-only">
                            Toggle navigation
                        </span>
                        <span class="navbar-toggler-icon"> 
                        </span>
                    </button>
                    <div class="collapse navbar-collapse d-xl-flex justify-content-xl-center" id="navcol-1" style="margin-left: 220px;">
                        <ul class="nav navbar-nav mx-auto">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="home.php">Beranda</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="kebudayaan.php">Kebudayaan</a></li>
                            <li class="nav-item dropdown" role="presentation">
                                <a class="nav-link  dropdown-toggle" href="makanan.php" data-toggle="dropdown" role="presentation">Kuliner</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="makanan.php">Camilan</a>
                                    <a class="dropdown-item" href="makanan/momofuku.com/utama/index.php">Utama</a>
                                    <a class="dropdown-item" href="makanan/momofuku.com/penutup/index.php">Penutup</a>
                                </div>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="wisata.php">Wisata</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="hubkami.php">Hubungi Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--END Navigation Bar-->
    </section>

    <!--HUBUNGI KAMI SECTION-->
    <section id="hubkami">
        <div class="container">
            <section class="mb-4">
                <h2 class="h1-responsive font-weight-bold text-center my-5">Hubungi Kami</h2>
                <p class="text-center w-responsive mx-auto mb-5">Apakah Anda punya pertanyaan? Harap jangan ragu untuk menghubungi kami secara langsung. Kami siap dan berusaha untuk membantu Anda. Semoga hari Anda menyenangkan</p>

                <div class="row">
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form id="formhubkami" action="proseshubkami.php"  method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="subjek">Subjek</label>
                                    <input type="text" name="subjek" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <label for="pesan">Pesan</label>
                                        <textarea type="text" name="pesan" rows="3" class="form-control md-textarea" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="text-center text-md-left">
                                <button class="btn btn-danger" type="submit">Kirim</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-3 text-center text-primary">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <i class="fas fa-map-marker-alt fa-2x" style="color: red;"></i>
                                <p class="text-dark">Jl. Tanjung Alang No.23 Maccini Sombala</p>
                            </li>
                            <li>
                                <i class="fas fa-phone mt-4 fa-2x" style="color: red;"></i>
                                <p class="text-dark">+62 8510 0200 300</p>
                            </li>
                            <li>
                                <i class="fas fa-envelope mt-4 fa-2x" style="color: red;"></i>
                                <p class="text-dark">sulsel@rsm.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!--END HUBUNGKI KAMI SECTION-->
    <br><br>
    <section id="permintaan">
        <div class="container">
            <section class="mb-4">
                <h2 class="h1-responsive font-weight-bold text-center my-5">Permintaan</h2>
                <p class="text-center w-responsive mx-auto mb-5">Bantu kami untuk melengkapi setiap konten mengenai kebudayaan Sulawesi Selatan. Terima Kasih</p>

                <div class="row">
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form id="formhubkami" action="prosespermintaan.php"  method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="Subjek">Subjek</label>
                                    <div class="col-md-10">
                                        <div class="form-group col-md-4">
                                            <select name="subjek" class="custom-select" required>
                                                <option value="">--- Pilih Subjek ---</option>
                                                <option value="Kebudayaan - Bahasa">Kebudayaan - Bahasa</option>
                                                <option value="Kebudayaan - Rumah Adat">Kebudayaan - Rumah Adat</option>
                                                <option value="Kebudayaan - Baju Adat">Kebudayaan - Baju Adat</option>
                                                <option value="Kebudayaan - Senjata Tradisional">Kebudayaan - Senjata Tradisional</option>
                                                <option value="Kebudayaan - Lagu Daerah">Kebudayaan - Lagu Daerah</option>
                                                <option value="Kebudayaan - Tarian">Kebudayaan - Tarian</option>
                                                <option value="Makanan - Camilan">Makanan - Camilan</option>
                                                <option value="Makanan - Utama">Makanan - Utama</option>
                                                <option value="Makanan - Penutup">Makanan - Penutup</option>
                                                <option value="Wisata">Wisata</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <label for="pesan">Pesan</label>
                                        <textarea type="text" name="pesan" rows="3" class="form-control md-textarea" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="Lampiran">Lampiran</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="custom-file-input" id="customFile" name="lampiran">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <p style="color: red">Bila ingin melampirkan. <br>Ekstensi yang diperbolehkan .txt | .doc | .docx | .pdf <br> Dengan Ukuran file 2048 mb</p>
                                    </div>
                                </div>
                            </div>
                            <script>
                                // Add the following code if you want the name of the file appear on select
                                $(".custom-file-input").on("change", function() {
                                    var fileName = $(this).val().split("\\").pop();
                                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                });
                            </script>
                            <br>
                            <div class="text-center text-md-left">
                                <button class="btn btn-danger" type="submit">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!--END HUBUNGKI KAMI SECTION-->

                            
    
    <script src="hubkami/js/jquery.min.js"></script>
    <script src="hubkami/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
</body>

</html>