<?php

class mahasiswa {
    public $nama;
    public $nim;
    public $semester;
}

$siti = new mahasiswa();
$siti -> nama = 'Siti Munaroh';

$tono = new mahasiswa();
$tono -> nama = 'Tono Sumartono';

echo $siti -> nama '<br>'