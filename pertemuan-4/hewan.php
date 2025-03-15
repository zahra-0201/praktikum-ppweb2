<?php

class hewan {
    public $nama;
    public $spesies;
    public $habitat;
    public $jumlahkaki;
    public $makanan;
}

class mamalia extends hewan {
    public $melahirkan;
    public $berbulu;

}

class reptil extends hewan {
    public $bertelur;
    public $berdarahdingin;
}

$kucing = new mamalia();
$kucing -> nama = 'kucing';
echo $kucing -> nama 