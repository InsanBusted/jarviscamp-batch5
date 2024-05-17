<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertemuan 3</title>
</head>

<body>


    <?php
    function ganjil($a, $b)
    {
        $hasil = [];

        for ($i = $a; $i <= $b; $i++) {
            if ($i % 2 != 0)
                $hasil[] = $i;
        }
        return $hasil;
    }
    function genap($a, $b)
    {
        $hasil = [];

        for ($i = $a; $i <= $b; $i++) {
            if ($i % 2 == 0)
                $hasil[] = $i;
        }
        return $hasil;
    }

    function aritmatika($a, $b, $hitung)
    {
        switch ($hitung) {
            case 'tambah':
                return $a + $b;
            case 'kurang':
                return $a - $b;
            case 'bagi':
                if ($b != 0) {
                    return $a / $b;
                } else {
                    return "tidak bisa dibagi nol cuy";
                }
            case 'kali':
                return $a * $b;
            default:
                return "masukin yang bener";
        }
    }


    $genap = genap(1, 10);
    $ganjil = ganjil(1, 10);
    $tambah = aritmatika(1, 5, 'tambah');
    $kali = aritmatika(1, 5, 'kali');
    $kurang = aritmatika(1, 5, 'kurang');
    $bagi = aritmatika(1, 5, 'bagi');

    ?>

    <h1>genap</h1>
    <ul>
        <?php foreach ($genap as $genapKey => $genapvalue) { ?>
            <li value='<?= $genapKey ?>'><?= $genapvalue ?></li>
        <?php } ?>
    </ul>
    <h1>ganjil</h1>
    <ul>
        <?php foreach ($ganjil as $ganjilKey => $ganjilvalue) { ?>
            <li value='<?= $ganjilKey ?>'><?= $ganjilvalue ?></li>
        <?php } ?>
    </ul>
    <h1>operasi aritmatika</h1>
    <ul>
        <li>Hasil Penjumlahan = <?= $tambah ?></li>
        <li>Hasil Perkalian = <?= $kali ?></li>
        <li>Hasil Pengurangan = <?= $kurang ?></li>
        <li>Hasil Pembagian = <?= $bagi ?></li>
    </ul>

</body>

</html>