<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DWWRDH</title>
    <!--Ion Icons-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<!--Nav markup goes here-->
<header>
    <div class="container">
        <nav>
            <div class="menu-icons">
                <i class="icons ion-ios-menu"></i>
                <i class="icons ion-ios-close"></i>
            </div>
            <a href="index.html" class="logo">
                <i class="icons ion-md-laptop"></i>
            </a>
            <ul class="nav-list">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="https://dwwrdh.github.io/opkwardah/Project%202/index.html">Portofolio</a>
                </li>
                <li>
                    <a href="https://dwwrdh.github.io/opkwardah/Project%203/index.html">CSS</a>
                </li>
                <li>
                    <a href="https://dwwrdh.github.io/opkwardah/Project%204/index.html">Javacript</a>
                </li>
                <li>
                    <a href="#">PHP
                        <i class="icon ion-md-arrow-dropdown"></i></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#multiple">Kode PHP Multi Blok</a>
                        </li>
                        <li>
                            <a href="#Variabel">Variabel</a>
                        </li>
                        <li>
                            <a href="#konstanta">Konstanta</a>
                        </li>
                        <li>
                            <a href="#integer">Data Integer</a>
                        </li>
                        <li>
                            <a href="#">Data Array</a>
                        </li>
                        <li>
                            <a href="#">Fungsi var dump</a>
                        </li>
                        <li>
                            <a href="#">Aritmatika</a>
                        </li>
                        <li>
                            <a href="#">String</a>
                        </li>
                        <li>
                            <a href="#">Logika</a>
                        </li>
                        <li>
                            <a href="#">Perbandingan</a>
                        </li>
                    </ul>
                </li>
                <li class="move-right btn">
                    <a href="https://dwwrdh.github.io/opkwardah/#">Bootstrap</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!--End nav-->

<!--Hero-->
<section class="hero">
    <div class="text">
        <h2>Tugas Web Programming</h2>
        <h1>PHP</h1>
        <p>ini adalah website interaktif by Dewi Wardah </p>
        <a href="#" class="btn">Learn more</a>
    </div>
</section>
<!--Hero ends-->
<section class="php-post" id="multiple">
    <div class="php-post">
        <div class="php-post_php">
            <img src="images/aksi.png" alt="">
        </div>
        <h1 class="php-post_title">PHP Multiple Blok</h1>
        <p class="php-post_isi"> Berikut ini adalah hasil dari PHP Multiple Blok</p>
        <p class="php-post_coding">
            <?php echo "Today date is " .  date("Y/m/d"). "<br>"
            ?>
        </p>
    </div>
</section>
<!--multiple ends-->
<section class="php-post" id="Variabel">
    <div class="php-post">
        <div class="php-post_php">
            <img src="images/aksi.png" alt="">
        </div>
        <h1 class="php-post_title">PHP Variabel</h1>
        <p class="php-post_isi"> Berikut ini adalah hasil dari PHP Variabel</p>
        <p class="php-post_coding">
            <?php $aksi = "Akademi Komunitas Semen Indonesia";$nama = "Dewi Wardah";
        echo "Saya Adalah Mahasiswa di $aksi , Nama Saya $nama";?>
        </p>
    </div>
</section>
<!--Variable ends-->
<section class="php-post" id="konstanta">
    <div class="php-post">
        <div class="php-post_php">
            <img src="images/aksi.png" alt="">
        </div>
        <h1 class="php-post_title">PHP Konstanta</h1>
        <p class="php-post_isi"> Berikut ini adalah hasil dari PHP Konstanta</p>
        <p class="php-post_coding"><?php define('VERSION', '1.0.0');const SITE_NAME  = "Pendidikan Vokasi PT. Semen Indonesia (Persero) Tbk";const BASE_URL    = "https://www.aksi.ac.id"; echo "Site name: " . SITE_NAME . "<br/>";echo "URL: " . BASE_URL . "<br/>";echo "Version: " . VERSION . "<br/>";?>
        </p>
    </div>
</section>
<!--Konstanta ends-->
<section class="php-post" id="integer">
    <div class="php-post">
        <div class="php-post_php">
            <img src="images/aksi.png" alt="">
        </div>
        <h1 class="php-post_title">PHP tipe Data Integer</h1>
        <p class="php-post_isi"> Berikut ini adalah hasil dari PHP Integer</p>
        <p class="php-post_coding">
            <?php $jenis_kelamin = 'L';
            $nama_lengkap = "Dewi Wardah";
            $umur = 23;
            $berat = 46;
            $tinggi = 157;
            $menikah = false;
            echo "Nama: $nama_lengkap<br>";echo "Jenis Kelamin: $jenis_kelamin<br>";echo "Umur: $umur tahun<br>";echo "berat badan: $berat kg<br>";echo "tinggi badan: $tinggi cm<br>";echo "menikah: $menikah";?>
        </p>
    </div>
</section>
<!--integer ends-->
<section class="php-post" id="array">
    <div class="php-post">
        <div class="php-post_php">
            <img src="images/aksi.png" alt="">
        </div>
        <h1 class="php-post_title">PHP Tipe Data Array</h1>
        <p class="php-post_isi"> Berikut ini adalah hasil dari PHP Tipe Data Array</p>
        <p class="php-post_coding">
            <?php
            $nama = array(
            1=>"Dewi",
            2=>"Wardah",
            3=>"Dona",
            4=>"Bima",
            5=>"Ridak");

            echo $nama[1];
            echo "<br />" ;
            echo $nama[2];
            echo "<br />" ;
            echo $nama[3];
            echo "<br />" ;
            echo $nama[4];
            echo"<br />" ;
            echo $nama[5];
            ?>
        </p>
    </div>
</section>
<!--array ends-->
<section class="php-post" id="var-dump">
    <div class="php-post">
        <div class="php-post_php">
            <img src="images/aksi.png" alt="">
        </div>
        <h1 class="php-post_title">PHP Var-dump</h1>
        <p class="php-post_isi"> Berikut ini adalah hasil dari PHP Var-dump</p>
        <p class="php-post_coding">
            <?php $a= 5; $b= 8; $c= 4.5;

            $hasil1 = $a+$b;
            $hasil2 = $a+$c;
            $hasil3 = $a.$b;

            echo "$hasil1:"; var_dump($hasil1);
            echo "<br \>";
            echo "$hasil2:"; var_dump($hasil2);
            echo "<br \>";
            echo "$hasil3:"; var_dump($hasil3);
            ?>
        </p>
    </div>
</section>
<!--var_dump ends-->
<section class="php-post" id="aritmatika">
    <div class="php-post">
        <div class="php-post_php">
            <img src="images/aksi.png" alt="">
        </div>
        <h1 class="php-post_title">PHP Aritmatika</h1>
        <p class="php-post_isi"> Berikut ini adalah hasil dari PHP Aritmatika</p>
        <p class="php-post_coding"><?php echo "2 kotak kelereng berisi 15 butir kelereng, sama dengan 2 dikali 15." ;
        echo "<br \>"; echo " 2 x 15 = ";
            $x = 2;
            $y = 15;
            echo $x * $y;
            ?>
        </p>
    </div>
</section>
<!--Aritmatika ends-->
<section class="php-post" id="string">
    <div class="php-post">
        <div class="php-post_php">
            <img src="images/aksi.png" alt="">
        </div>
        <h1 class="php-post_title">PHP String</h1>
        <p class="php-post_isi"> Berikut ini adalah hasil dari PHP String</p>
        <p class="php-post_coding">
            <?php
            $a = "Hello ";
            $hasil = "{$a} World!";
            echo $hasil;
            echo "<br />";

            $a = "belajar ";
            $b = "PHP ";
            $c = "di Akademi Komunitas Semen Indonesia";
            $hasil= "Saya sedang {$a}{$b}{$c}";
            echo $hasil;
            ?>
        </p>
    </div>
</section>
<!--string ends-->
<section class="php-post" id="logika">
    <div class="php-post">
        <div class="php-post_php">
            <img src="images/aksi.png" alt="">
        </div>
        <h1 class="php-post_title">PHP Logika</h1>
        <p class="php-post_isi"> Berikut ini adalah hasil dari PHP Logika</p>
        <p class="php-post_coding">
            <?php
        $hasil1 = true and false;
        echo '$hasil1 = ';
        echo var_dump($hasil1)."<br/>";

            $hasil2 = (true and false);
            echo '$hasil2 = ';
            echo var_dump($hasil2)."<br/>";

            $hasil3 = (true xor false);
            echo '$hasil3 = ';
            echo var_dump($hasil3)."<br/>";

            $hasil4 = (false or true && false);
            echo '$hasil4 = ';
            echo var_dump($hasil4)."<br/>";

            $a=true;
            $b=false;
            $hasil5 = ($a and $b || $a or b);
            echo '$hasil5 = ';echo var_dump($hasil5);?>
        </p>
    </div>
</section>
<!--logika ends-->
<section class="php-post" id="perbandingan">
    <div class="php-post">
        <div class="php-post_php">
            <img src="images/aksi.png" alt="">
        </div>
        <h1 class="php-post_title">PHP Operator Perbandingan</h1>
        <p class="php-post_isi"> Berikut ini adalah hasil dari PHP Operator Perbandingan</p>
        <p class="php-post_coding">
            <?php
            echo "1. 12 < 14 = "; var_dump(12<14);
            echo "<br />";

            echo "2. 14 < 14 = "; var_dump(14<14);
            echo "<br />";

            echo "3. 14 <= 14 = "; var_dump(14<=14);
            echo "<br />";

            echo "4. 10 <> '10' = "; var_dump(10<>'10');
            echo "<br />";

            echo "5. 10 == '10' = "; var_dump(10=='10');
            echo "<br />";

            echo "6. 10 === '10' = "; var_dump(10==='10');
            echo "<br />";

            echo "7. '150' == '1.5e2' = "; var_dump('150'=='1.5e2');
            echo "<br />";

            echo "8. 'Akademi Komunitas Semen Indonesia' == 0 = ";
            var_dump('Akademi Komunitas Semen Indonesia'==0);
            echo "<br />";?>
        </p>
    </div>
</section>
<!--string ends-->
<footer class="copyright">
    <h1> Akademi Komunitas Semen Indonesia Gresik 2020 </h1>
</footer>
<script src="scripts.js"></script>
</body>
</html>
