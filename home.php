<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>RSM</title>
    <link rel="stylesheet" href="home/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="home/css/home.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
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
                                <a class="nav-link active" href="home.php">Beranda</a>
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
                                <a class="nav-link" href="hubkami.php">Hubungi Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1 class="text-left d-xl-flex justify-content-xl-center" id="judul" style="font-size: 42px;margin-top: 26px;margin-bottom: -24px;color: rgb(203,44,77);">Sulawesi Selatan</h1>
            <h4 class="text-center" id="judul1" style="color: rgb(58,58,58);font-size: 14px;margin-top: 13px;"><br>Membahas mengenai kebudayaan dan hal-hal<br>menarik tentang Sulawesi Selatan</h4>
        </div>
        <!--END Navigation Bar-->

        <!--Landing Page-->
        <div class="d-flex flex-column justify-content-between" id="konten-bottom">
            <div class="container d-flex flex-column" style="margin-top: 321px;">
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center align-content-center">
                        <div class="boxsearch">
                            <table class="element">
                                <form id="pencarian" action="pencarian.php"  method="post">
                                    <td>
                                        <input type="text" placeholder="Pencarian" class="search" name="pencarian">
                                    </td>
                                    <td>
                                        <button class="btn btn-white" type="submit"><span class="material-icons" >search</span></button>
                                    </td>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="d-flex justify-content-center" style="color: rgb(116,117,119);">
                            Rekayasa Sistem Multimedia
                        </p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <a href="#">Instagram</a>
                    </div>
                    <div class="col">
                        <a href="#">Skype</a>
                    </div>
                    <div class="col">
                        <a href="#">Facebook</a>
                    </div>
                </div>
            </div>
        </div>
        <!--END Landing Page-->
    </section>
    <script src="home/js/jquery.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
</body>

</html>