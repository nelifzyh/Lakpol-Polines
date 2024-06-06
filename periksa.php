<?php
session_start();
include("db.php");

if (isset($_POST['save_periksa'])) {
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $prodi = $_POST['prodi'];
    $kelas = $_POST['kelas'];
    $umur = $_POST['umur'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO periksa (email, nama, nim, jurusan, prodi, kelas, umur, jenis_kelamin, alamat, tanggal) VALUES ('$email','$nama','$nim','$jurusan','$prodi','$kelas','$umur','$jenis_kelamin','$alamat','$tanggal')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        // Pindahkan data ke tabel log setelah berhasil dimasukkan ke tabel periksa
        $insert_query_log = mysqli_query($conn, "INSERT INTO log (email, nama, nim, jurusan, prodi, kelas, umur, jenis_kelamin, alamat, tanggal)
            SELECT email, nama, nim, jurusan, prodi, kelas, umur, jenis_kelamin, alamat, '$tanggal' FROM periksa");

        if ($insert_query_log) {
            $_SESSION['status'] = "Form Periksa Telah Disubmit";
            header("Location: log.php");
        } else {
            $_SESSION['status'] = "Data tidak tersalin ke log";
            header("Location: periksa.php");
        }
    } else {
        $_SESSION['status'] = "Form Periksa Gagal Disubmit";
        header("Location: periksa.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Periksa</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/footers/footer-3/assets/css/footer-3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
</head>

<body>
    <div class="isi">
        <!-- Bootstrap JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="..."></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="...">
        </script>
    </div>
    <div id="content-wrap" class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <?php
                    if(isset($_SESSION['status']))
                    {
                        echo "<h4>".$_SESSION['status']."</h4>";
                        unset($_SESSION['status']);
                    }
                    ?>
                <div class="card mt-5">
                    <div class="card-header">
                        <h1>Isi Form Di Bawah Ini</h1>
                        <p>Silahkan masukan data dengan benar</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="email">
                                <label for="exampleInputEmail1" class="form-label">Email :</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" required> <br>
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="nama">
                                <label for="floatingTextarea">Nama :</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" required> <br>
                            </div>
                            <div class="nim">
                                <label for="floatingTextarea">NIM :</label>
                                <input type="text" name="nim" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" required> <br>
                            </div>
                            <div class="jurusan">
                                <label for="floatingTextarea">Jurusan :</label>
                                <select name="jurusan" class="form-select" aria-label="Default select example" required>
                                    <option selected>Pilih Jurusan</option>
                                    <option value="1">Teknik Elektro</option>
                                    <option value="2">Teknik Mesin</option>
                                    <option value="3">Teknik Sipil</option>
                                    <option value="4">Administrasi Bisnis</option>
                                    <option value="5">Akuntansi</option>
                                </select> <br>
                            </div>
                            <div class="prodi">
                                <label for="floatingTextarea">Program Studi :</label>
                                <input type="text" name="prodi" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" required> <br>
                            </div>
                            <div class="kelas">
                                <label for="floatingTextarea">Kelas :</label>
                                <input type="text" name="kelas" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" required> <br>
                            </div>
                            <div class="umur">
                                <label for="floatingTextarea">Umur :</label>
                                <input type="text" name="umur" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" required> <br>
                            </div>
                            <div class="jeniskelamin">
                                <label for="floatingTextarea">Jenis Kelamin :</label>
                                <select name="jenis_kelamin" class="form-select" aria-label="Default select example"
                                    required>
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                </select> <br>
                            </div>
                            <div class="alamat">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat :</label>
                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="tanggal">
                                    <label for="tanggal">Tanggal Periksa :</label>
                                    <input type="datetime-local" class="form-control" name="tanggal" required><br>
                                </div>
                            </div>
                            <div class="btn">
                                <button type="submit" name="save_periksa" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>