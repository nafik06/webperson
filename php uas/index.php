<?php
include 'koneksi.php';

// Ambil data dari database
$query = "SELECT * FROM portofolio";
$result = mysqli_query($koneksi, $query);

$no = 1;
?>

<!DOCTYPE html>
<html>

<head>
    <title>portofolioku</title>
    <link rel="stylesheet" href="css/style1.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .btn {
            padding: 5px 10px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-danger {
            background-color: #f44336;
            color: white;
            border: none;
        }

        .btn-danger:hover {
            background-color: #d32f2f;
        }

        .btn-primary {
            background-color: #4CAF50;
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>

<header>
        <nav>
            <ul>
                <li>Beranda</li>
                <li><a href="#tentangsaya">Tentang saya</a></li>
                <li><a href="#portofolio">Portofolio</a></li>
                <li>lainnya
                    <ul class="submenu">
                        <li><a href="https://www.instagram.com/nafikudinzuhri?igsh=dTFvc2xrZDVrZjdn">Instagram</a></li>
                        <li><a href="https://www.facebook.com/nafik.nafik.528316">Facebook</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <br>
        <div class="perataan">
            <img class="profil" src="foto/WhatsApp Image 2025-04-26 at 00.45.58_b32f43ab.jpg" alt="nafik">
            <h3 class="perkenalan">Hallo, saya M.Nafiuddin Zuhri seorang Software Developer </h3>
        </div>
    </header>
    <section>
        <br>
        <br>
        <h2 id="tentangsaya" class="tentangsaya">Tentang saya</h2>
        <hr><br>

        <div class="wrapper">
            <p class="isitentangsaya">Hallo, Nama saya M. Nafi'uddin Zuhri, Biasa di panggil Nafik. Saya seorang
                Mahasiswa UNUGIRI. Saya tertarik di dunia teknologi da ingin menjadi Software Developer dan menjadi
                Guru. Bagi saya Menjalani hidup itu harus dinikmati prosesnya </p>
            <img class="p" src="foto/fotoTMII.jpg" alt="nafik" width="200px">


        </div>

    </section>
    <hr>
    <section>
        <!-- portofolio-->
    <h2>Data portofolio</h2>
    <!-- Form Tambah Data -->
    <h3>Tambah Data portofolio</h3>
    <form action="tambah.php" method="POST">
        <div class="form-group">
            <label>Id kegiatan:</label>
            <input type="text" name="id_kegiatan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama kegiatan:</label>
            <input type="text" name="nama_kegiatan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>waktu kegiatan</label>
            <textarea name="waktu_kegiatan" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <table>
        <tr>
            <th>No</th>
            <th>nama kegiatan</th>
            <th>waktu kegiatan</th>
            <th>hapus</th>

        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $no++; ?></td>

                <td><?php echo $row['nama_kegiatan']; ?></td>
                <td><?php echo $row['waktu_kegiatan']; ?></td>
                <td>
                    <a href="hapus.php?id_kegiatan=<?php echo $row['id_kegiatan']; ?>"
                        class="delete-btn"
                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                        <div class="btn-danger">Hapus</div>
                    </a>
                </td>

            </tr>
        <?php endwhile; ?>
    </table>
<!--portofolio-->
        
    <section>
        <h2 class="tentangsaya">Opini</h2>
        <hr>
        <div class="opini">
            <div class="container">
                <div class="opini-box">
                    <div class="box">
                        <img src="foto/arkeolog.jpg" alt="arkeolog">
                        <div class="desc">
                            <h2>arkeolog temukan mumi wanita elite di peru usianya 5000 tahun</h2>

                            <a
                                href="https://www.cnnindonesia.com/teknologi/20250425234502-199-1222805/arkeolog-temukan-mumi-wanita-elite-di-peru-usianya-5000-tahun">lihat
                                berita</a>
                        </div>

                    </div>
                    <div class="box">
                        <img src="foto/astronot.jpeg" alt="astrono">
                        <div class="desc">
                            <h2>china kirim 3 astronaut ke stasiun antariksa tiangong</h2>
                            <a
                                href="https://www.cnnindonesia.com/teknologi/20250425113843-201-1222530/foto-china-kirim-3-astronaut-ke-stasiun-antariksa-tiangong">lihat
                                berita</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="foto/hp mati.jpeg" alt="hpmati">
                        <div class="desc">
                            <h2>penyebab hp sering mati sendiri dan cara mengatasinya</h2>
                            <a
                                href="https://www.cnnindonesia.com/teknologi/20250427075932-185-1223091/penyebab-hp-sering-mati-sendiri-dan-cara-mengatasinya">lihat
                                berita</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="foto/indosat.jpeg" alt="indosat">
                        <div class="desc">
                            <h2>pelanggan indosat diklaim naik 50 persen sejak peluncuran im3 platinum</h2>
                            <a
                                href="https://www.cnnindonesia.com/teknologi/20250425171711-206-1222708/pelanggan-indosat-diklaim-naik-50-persen-sejak-peluncuran-im3-platinum">lihat
                                berita</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="foto/nitendo.jpeg" alt="nitendo">
                        <div class="desc">
                            <h2>harga nintendo switch 2 di indonesia.....
                            </h2>
                            <a
                                href="https://www.cnnindonesia.com/teknologi/20250425093723-206-1222456/harga-nintendo-switch-2-di-indonesia">lihat
                                berita</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="foto/samsung.jpeg" alt="samsung">
                        <div class="desc">
                            <h2>beda nasib samsung dan apple di tengah perang dagang as china</h2>
                            <a
                                href="https://www.cnnindonesia.com/teknologi/20250423132712-206-1221686/beda-nasib-samsung-dan-apple-di-tengah-perang-dagang-as-china">lihat
                                berita</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    sumber : CNN INDONESIA
    <section>
        <h2 class="tentangsaya">Hubungi saya</h2>
        <hr>
        <div class="maps">
            <form action="action">
                <label for="Email">Email</label>
                <input type="email" name="" id="email">

                <label for="nama">Nama</label>
                <input type="text" name="" id="nama">

                <label for="subject">Subject</label>
                <input type="text" name="" id="subject">

                <label for="isi">Isi</label>
                <input type="text" name="" id="isi">

                <button type="submit">Kirim</button>
            </form>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d457.8155893752575!2d111.91196741620485!3d-7.338204511243745!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMjAnMTguMyJTIDExMcKwNTQnNDMuNiJF!5e0!3m2!1sid!2sid!4v1745782075506!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <FOOter>
        <P>&COPY;Copyright by m.nafiudin zuhri</P>
    </FOOter>
</body>

</html>