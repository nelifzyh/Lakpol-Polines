<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ</title>
    <link rel="stylesheet" href="css/faq.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #146C94;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-family: Arial, 'Helvetica', sans-serif;">
                <img src="image/logo-polines.png" alt="Logo" width="50" height="50"
                    class="d-inline-block align-text-middle">
                <img src="image/LAKPOL.png" alt="" width="200">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 mx-auto d-flex gap-4">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="homeprofile.php" style="color: #ffffff">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" style="color: #ffffff">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: #ffffff">
                            Pelayanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="izin.php">Surat Keterangan Sakit</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="periksa.php">Periksa Kesehatan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php" style="color: #ffffff">FAQ</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary text-white" type="submit">Search</button>
                </form>
                <div class="navbar-nav mb-2 mb-lg-0 mx-auto d-flex gap-4">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="image/logo-polines.png" alt="User Photo" width="50" height="50"
                                class="user-photo">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="user_page.php">Dashboard</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="..."></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="..."></script>

    <div class=" wrapper">
        <h1><b>FAQ<b></h1>

        <div class="faq">
            <button class="accordion">
                Apa itu poliklinik?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                    Poliklinik Politeknik Negeri Semarang adalah pusat layanan kesehatan yang memberikan
                    pelayanan secara professional kepada dosen, tenaga pendidik, dan mahasiswa Polines
                    dengan
                    pelayanan
                    sepenuh hati.
                </p>
            </div>
        </div>

        <div class="faq">
            <button class="accordion">
                Bagaimana prosedur untuk mengajukan izin sakit?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                    Anda bisa pergi kebagian pelayanan lalu pilih surat keterangan sakit
                    setelah itu isi semua form yang disediakan tanpa ada satupun yang terlewat
                    Pastikan juga ada surat dokter yang memastikan keaslian data
                </p>
            </div>
        </div>

        <div class=" faq">
            <button class="accordion">
                Berapa lama waktu yang dibutuhkan untuk memproses izin sakit?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                    Proses izin akan baru diproses dalam waktu 1x24jam dari jam pengiriman
                    Jika belum mendapatkan feed back anda bisa menghubungi customer service
                </p>
            </div>
        </div>

        <div class="faq">
            <button class="accordion">
                Apa yang harus jika mengalami masalah teknis saat menggunakan website?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                    Anda bisa menghubungi kami melalui whatsapp dengan nomor +62-822-444-888-111
                    atau anda bisa mengkontak kami lewat email ataupun media sosial
                </p>
            </div>
        </div>

        <div class="faq">
            <button class="accordion">
                Bagaimana cara melihat jadwal konsultasi dokter di Poliklinik ini?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                    Pada halaman home pilih konsultasi lalu liat jadwal dokter yang tersedia.
                    pastikan anda membuat janji sebelum melakukan konsultasi
                    detail booking akan dikirim lewat email
                </p>
            </div>
        </div>

        <div class="faq">
            <button class="accordion">
                Bagaimana keamanan informasi pribadi saya yang disimpan di website ini?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                    Kami dengan sepenuh hati akan menjaga keamanan data anda
                    hanya pihak pihak serta staff kami yang akan tau
                    data terkait kesehatan pasien tidak akan dipublish
                </p>
            </div>
        </div>
    </div>

    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            this.parentElement.classList.toggle("active");

            var pannel = this.nextElementSibling;

            if (pannel.style.display === "block") {
                pannel.style.display = "none";
            } else {
                pannel.style.display = "block";
            }
        });
    }
    </script>
</body>

</html>