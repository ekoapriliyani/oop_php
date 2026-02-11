<?php 

// jualan produk
// komik
// game


class Produk {
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
   
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Eko";
$produk1->harga = 8000;
var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Uncharted";
var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masasi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

var_dump($produk3);

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->getLabel();

echo "<hr>";
$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";


echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

?>