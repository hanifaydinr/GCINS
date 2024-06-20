<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>
    <?php
    echo "<h3>Soal No 1 Greetings</h3>";

    // Fungsi untuk menyapa pengguna
    function greetings($nama)
    {
        echo "Halo " . ucfirst($nama) . ", Selamat Datang di Garuda Cyber Institute!";
        echo "<br>";
    }

    // Pengujian fungsi greetings
    greetings("Abduh");
    greetings("Bagas");
    greetings("Wahyu");
    greetings("Hanif Aydin Rizky");

    echo "<h3>Soal No 2 Reverse String</h3>";

    // Fungsi untuk membalikkan string
    function reverseString($input)
    {
        $length = strlen($input);
        $result = '';
        for ($i = $length - 1; $i >= 0; $i--) {
            $result .= $input[$i];
        }
        return $result;
    }

    // Pengujian fungsi reverseString
    echo reverseString("nama peserta") . "<br>";
    echo reverseString("Garuda Cyber Institute") . "<br>";
    echo reverseString("We Are GC-Ins Developer") . "<br>";

    echo "<h3>Soal No 3 Palindrome</h3>";

    // Fungsi untuk mengecek apakah sebuah string merupakan palindrome
    function palindrome($str)
    {
        $reversedStr = reverseString($str);
        if ($str == $reversedStr) {
            return "true<br>";
        } else {
            return "false<br>";
        }
    }

    // Pengujian fungsi palindrome
    echo palindrome("civic"); // true
    echo palindrome("nababan"); // true
    echo palindrome("jambaban"); // false
    echo palindrome("racecar"); // true

    echo "<h3>Soal No 4 Tentukan Nilai</h3>";

    // Fungsi untuk menentukan nilai
    function tentukan_nilai($nilai)
    {
        if ($nilai >= 85 && $nilai <= 100) {
            return "Sangat Baik<br>";
        } elseif ($nilai >= 70 && $nilai < 85) {
            return "Baik<br>";
        } elseif ($nilai >= 60 && $nilai < 70) {
            return "Cukup<br>";
        } else {
            return "Kurang<br>";
        }
    }

    // Pengujian fungsi tentukan_nilai
    echo tentukan_nilai(98); // Sangat Baik
    echo tentukan_nilai(76); // Baik
    echo tentukan_nilai(67); // Cukup
    echo tentukan_nilai(43); // Kurang
    ?>
</body>

</html>