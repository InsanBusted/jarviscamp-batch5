<?php

// Definisi class Kendaraan
class Kendaraan
{
    public $jenis;
    public $warna;

    // Konstruktor
    public function __construct($jenis, $warna)
    {
        $this->jenis = $jenis;
        $this->warna = $warna;
    }

    // Method untuk menampilkan informasi kendaraan
    public function infoKendaraan()
    {
        return "Detail Kendaraan: $this->jenis, Warna: $this->warna";
    }
}

// Definisi class Mobil yang mewarisi class Kendaraan
class Mobil extends Kendaraan
{
    public $merk;

    // Konstruktor
    public function __construct($jenis, $warna, $merk)
    {
        // Memanggil konstruktor parent class
        parent::__construct($jenis, $warna);
        $this->merk = $merk;
    }

    // Method untuk menampilkan informasi mobil
    public function infoMobil()
    {
        return $this->infoKendaraan() . ", Merk: $this->merk";
    }
}

// Membuat objek berdasarkan class Mobil
$mobilBaru = new Mobil("Mobil", "Merah", "Toyota");

// Menampilkan informasi mobil
echo $mobilBaru->infoMobil();
