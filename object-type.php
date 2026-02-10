<?php 


class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

Class CetakInfoProduk{
    // tambahkan Produk sebagai object type nya
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi Kisomoto", "Shonen Jump", 250000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 500000);
$produk3 = new Produk("DragonBall");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);





?>