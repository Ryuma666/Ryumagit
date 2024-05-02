<?php
class Bilangan {
    private $angka;

    public function __construct($angka) {
        $this->angka = $angka;
    }

    public function apakahGanjil() {
        return $this->angka % 2 != 0;
    }

    public function apakahGenap() {
        return $this->angka % 2 == 0;
    }
}

// Contoh penggunaan
$bilangan_satu = new Bilangan(5);
$bilangan_dua = new Bilangan(10);

if ($bilangan_satu->apakahGanjil()) {
    echo $bilangan_satu->angka . " adalah bilangan ganjil\n";
} else {
    echo $bilangan_satu->angka . " adalah bilangan genap\n";
}

if ($bilangan_dua->apakahGenap()) {
    echo $bilangan_dua->angka . " adalah bilangan genap\n";
} else {
    echo $bilangan_dua->angka . " adalah bilangan ganjil\n";
}
?>
