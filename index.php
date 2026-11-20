<?php

//paggil file PropertyConstant
require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

$produk = new Produk();

$produk->setKode("P001")->setNama("Kemeja Polos")->setHarga(100000)->setStok(10);

echo "Produk: " . $produk->getNama();
echo "<br/>";  
echo "Harga: Rp." . $produk->getHarga();
echo "<br/>";
echo "Stok: " . $produk->getStok();
echo "<br/>";
echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp." . $produk->total();