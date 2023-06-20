
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Website Saya</title>
    <link rel="stylesheet" type="text/css" href="tmpHome.css"/>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>   
</head>

<body>
    <section>
        <!--- navigation --->
        <nav>
            <!--- logo --->
            <a href="#" class="logo">PixAgyz!!</a>
            <!--- menu --->
            <ul>
                <li><a href="#home" class="active">Home page</a></li>
                <li><a href="#about">About</a></li>
                <li class="dropdown">
                    <a href="#store">Store</a>
                    <ul class="dropdown-menu">
                        <li><a href="#games">Games</a</li>
                        <li><a href="#aksesoris">Aksesoris</a></li>
                    </ul>
                </li>
                <li><a href="#sosial">Contact</a></li>
            </ul>
        </nav>
 
        <!--- text --->
        <div class="text-container" id="home">
            <p>PixAgyz...</p>
            <p>PixAgyz Games Store</p>
            <p>Toko Game untuk PlayStation 4 dengan harga terjangkau</p>
            <p>silahkan cari game yang kamu sukai dan miliki sekarang juga</p>
        </div>
        <!-- model -->
        <!-- <img alt="model" class="model" src="image.jpg">   -->
    </section>

    <div class="gabung" id="about">
    <div class="container2">
    <div class="wrapper">
      <img src="./games/ps8.jpeg" style="width: 100%; height: 100%">
      <img src="./games/ps1.jpeg" style="width: 100%; height: 100%">
      <img src="./games/ps6.jpeg" style="width: 100%; height: 100%">
      <img src="./games/ps2.jpeg" style="width: 100%; height: 100%">
    </div>
    </div>


    <div class="text-container2">
    <h1><b>PixAgyz Game Store</b></h1>
    <p>
        Toko kami menjual beberapa game yang hanya bisa di mainkan di<br> PlayStation 4,
        toko kami juga menjual game dengan harga yang lebih<br>terjangkau dari pada harga
        toko lainnya.<br><br>Selain game toko kami juga menjual beberapa aksesoris gaming<br>
        diantaranya; Headset Gaming, Stik PS, Stik Xbox dan masih banyak lagi.
    </p>
    </div>
    </div>


        <div class="services" id="games">
            <!--text-->
            <div class="services-text ">
                <p style="font-size: 40px;">GameZzz Kuyy!!!</p>
            </div>
            <div class="box-container">
                
    <div class="box-1">
        <span>1</span>
        <p>Dusk Diver</p>
        <p class="heading">80.000</p>
            <img src="./games/ps8.jpeg" style="width: 230px; height: 280px; border-radius: 10px;"><br>
        <button type="submit" name="buy_now" onclick="openModal('Dusk Diver')">Beli</button>
    </div>
    
    <div class="box-1">
        <span>2</span>
        <p>Mary Skelter Finale</p>
        <p class="heading">80.000</p>
        <img src="./games/ps1.jpeg" style="width: 230px; height: 280px; border-radius: 10px;"><br>
        <button type="submit" name="buy_now" onclick="openModal('Mary Skelter Finale')">Beli</button>
    </div>
    
    <div class="box-1">
        <span>3</span>
        <p>Battlefield 1</p>
        <p class="heading">80.000</p>
        <img src="./games/ps4.jpeg" style="width: 230px; height: 280px; border-radius: 10px;"><br>
        <button type="submit" name="buy_now" onclick="openModal('Battlefield 1')">Beli</button>
    </div>
    
    <div class="box-1">
        <span>4</span>
        <p>Little Big Planet 3</p>
        <p class="heading">80.000</p>
        <img src="./games/ps6.jpeg" style="width: 230px; height: 280px; border-radius: 10px;"><br>
        <button type="submit" name="buy_now" onclick="openModal('Little Big Planet 3')">Beli</button>
    </div>

    <div class="box-1">
        <span>5</span>
        <p>Spider-Man</p>
        <p class="heading">80.000</p>
        <img src="./games/ps2.jpeg" style="width: 230px; height: 280px; border-radius: 10px;"><br>
        <button type="submit" name="buy_now" onclick="openModal('Spider-Man')">Beli</button>
    </div>
    
    <div class="box-1">
        <span>6</span>
        <p>A Way Out</p>
        <p class="heading">80.000</p>
        <img src="./games/ps5.jpeg" style="width: 230px; height: 280px; border-radius: 10px;"><br>
        <button type="submit" name="buy_now" onclick="openModal('A Way Out')">Beli</button>
    </div>
    
    <div class="box-1">
        <span>7</span>
        <p>Watch Dog</p>
        <p class="heading">80.000</p>
        <img src="./games/ps7.jpeg" style="width: 230px; height: 280px; border-radius: 10px;"><br>
        <button type="submit" name="buy_now" onclick="openModal('Watch Dog')">Beli</button>
    </div>

    <div class="box-1">
        <span>8</span>
        <p>God of War</p>
        <p class="heading">80.000</p>
        <img src="./games/ps3.jpeg" style="width: 230px; height: 280px; border-radius: 10px;"><br>
        <button type="submit" name="buy_now" onclick="openModal('God of War')">Beli</button>
    </div>
    
    <div class="box-1">
        <span>9</span>
        <p>Minecraft</p>
        <p class="heading">80.000</p>
        <img src="./games/ps9.png" style="width: 230px; height: 280px; border-radius: 10px;"><br>
        <button type="submit" name="buy_now" onclick="openModal('Minecraft')">Beli</button>
    </div>

    <div class="box-1">
        <span>10</span>
        <p>Nier: Automata</p>
        <p class="heading">80.000</p>
        <img src="./games/ps10.jpeg" style="width: 230px; height: 280px; border-radius: 10px;"><br>
        <button type="submit" name="buy_now" onclick="openModal('Nier: Automata')">Beli</button>
    </div>

    <div class="box-1">
        <span>11</span>
        <p>The Last Of Us 2</p>
        <p class="heading">80.000</p>
        <img src="./games/ps11.jpeg" style="width: 230px; height: 280px; border-radius: 10px;"><br>
        <button type="submit" name="buy_now" onclick="openModal('The Last Of Us 2')">Beli</button>
    </div>

    <div class="box-1">
        <span>12</span>
        <p>Sherlock Holmes</p>
        <p class="heading">80.000</p>
        <img src="./games/ps12.jpeg" style="width: 230px; height: 280px; border-radius: 10px;"><br>
        <button type="submit" name="buy_now" onclick="openModal('Sherlock Holmes')">Beli</button>
    </div>
    
</div>

<div class="services" id="aksesoris">
            <!--text-->
        <div class="services-text ">
            <p style="font-size: 40px;">Aksesoris Kuyy!!!</p>
        </div>
        <div class="box-container">
                
    <div class="box-1">
        <span>1</span>
        <p>Custom Controller Xbox</p>
        <p class="heading">80.000</p>
        <img src="./aksesoris/a1.jpeg" style="width: 280px; height: 280px; border-radius: 10px;"><br>
        <button type="submit" name="buy_now" onclick="openModal('Custom Controller Xbox')">Beli</button>
    </div>
    
    <div class="box-1">
        <span>2</span>
        <p>Logitech G733 LS</p>
        <p class="heading">Rp 1.800.000</p>
        <img src="./aksesoris/a3.jpeg" style="width: 280px; height: 280px; border-radius: 10px;"><br>
        <button type="submit" name="buy_now" onclick="openModal('Logitech G733')">Beli</button>
    </div>
    
    <div class="box-1">
        <span>3</span>
        <p>Custom Controller PS 4</p>
        <p class="heading">80.000</p>
        <img src="./aksesoris/a2.jpeg" style="width: 280px; height: 280px; border-radius: 10px;"><br>
        <button type="submit" name="buy_now" onclick="openModal('Custom Controller PS 4')">Beli</button>
    </div>
    
    <div class="box-1">
        <span>4</span>
        <p>Cat Ears Headphone</p>
        <p class="heading">80.000</p>
        <img src="./aksesoris/a4.jpeg" style="width: 280px; height: 280px; border-radius: 10px;"><br>
        <button type="submit" name="buy_now" onclick="openModal('Cat Ears Headphone')">Beli</button>
    </div>

</div>

<div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2 id="gameTitle"></h2>
                <p>Silakan isi formulir berikut untuk melakukan pembelian:</p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" id="selectedGame" name="produk" value="">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required><br><br>
                    <label for="alamat">Alamat:</label>
                    <input type="text" id="alamat" name="alamat" required><br><br>
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" id="jumlah" name="jumlah" min="1" required><br><br>
                    <label for="pembayaran">Metode Pembayaran:</label>
                    <select id="pembayaran" name="pembayaran" required>
                        <option value="Transfer Bank">Transfer Bank</option>
                        <option value="Kartu Kredit">Kartu Kredit</option>
                        <option value="COD">COD (Cash On Delivery)</option>
                    </select><br><br>
                    <input type="submit" value="Submit" style="width: 200px;">
                </form>
            </div>
        </div>

        
<script>
    function openModal(gameTitle) {
                var modal = document.getElementById("myModal");
                var gameTitleElement = document.getElementById("gameTitle");
                var selectedGameElement = document.getElementById("selectedGame");

                gameTitleElement.innerText = gameTitle;
                selectedGameElement.value = gameTitle;
                modal.style.display = "block";
            }

            function closeModal() {
                var modal = document.getElementById("myModal");
                modal.style.display = "none";
            }
        
</script>

</div>



</body>

<footer>
    <div class="footer-container">
        <div class="footer-column">
            <h3>Tentang Kami</h3>
            <p>PixAgyz Game Store adalah toko game terpercaya dan memiliki harga yang lebih murah dibanding toko game yang lain.</p>
        </div>
        <div class="footer-column">
            <h3>Kontak</h3>
            <p>Email: PixAgyz@gmail.com</p>
            <p>Telepon: 0857-1740-4164</p>
            <p>Alamat: Kec cigombong, Kab Bogor, Indonesia</p>
        </div>
        <div class="footer-column">
            <h3>Ikuti Kami</h3>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/2208agysta/?hl=id"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Hak Cipta &copy; 2023 PixAgyz. All rights reserved.</p>
    </div>
</footer>
</html>

<?php
// Koneksi ke database
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_jual";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $nama = isset($_POST['nama']) ? $_POST['nama'] : "";
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : "";
    $produk = isset($_POST['produk']) ? $_POST['produk'] : "";
    $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : "";
    $metodePembayaran = isset($_POST['pembayaran']) ? $_POST['pembayaran'] : "";

    // Query untuk menyimpan data ke dalam tabel database
    $sql = "INSERT INTO tabel_data (nama, alamat, jumlah, metode_pembayaran, produk) VALUES ('$nama', '$alamat', '$jumlah', '$metodePembayaran', '$produk')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Terimakasih Sudah Berbelanja Di Toko Kami")</script>';
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }
}

// Menutup koneksi database
$conn->close();
?>

