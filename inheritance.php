<?php 


class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "Tipe")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->tipe} : | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if($this->tipe == "Game") {
            $str .= " - {$this->waktuMain} Jam.";
        }
        return $str;
    }
}

Class CetakInfoProduk{
    // tambahkan Produk sebagai object type nya
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi Kisomoto", "Shonen Jump", 250000, 300, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 500000, 0, 50, "Game");
$produk3 = new Produk("DragonBall");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

?>