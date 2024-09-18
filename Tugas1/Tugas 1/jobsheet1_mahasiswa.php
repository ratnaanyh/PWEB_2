    <!-- JOBSHEET 1 (INTRUKSI KERJA) -->

<?php
// 1. Membuat class mahasiswa dengan 3 atribut.
class mahasiswa {
    // Membuat atribut nama, nim, jurusan dalam class mahasiswa
    public $nama; // dapat diakses darimana saja
    public $nim; // dapat diakses darimana saja
    public $jurusan; // dapat diakses darimana saja
    
    // 2. Method atau function CONSTRUCT yang otomatis akan berjalan ketika object dibuat dan akan ditampilkan.
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    // Membuat function untuk menampilkan informasi mahasiswa
    public function tampildata() {
        return "Mahasiswa bernama $this->nama dengan $this->nim dari $this->jurusan";
    }
    // 3. Membuat function untuk mengubah value jurusan
    public function updatejurusan() {
        $this->jurusan = "FISIP";
        return "Mahasiswa bernama $this->nama dengan $this->nim dari $this->jurusan";
    }
    // 4.  Membuat function untuk mengubah value NIM dengan setter
    public function setnim() {
        $this->nim = "230102055";
        return "Mahasiswa bernama $this->nama dengan $this->nim dari $this->jurusan";
    }

}
// Membuat objek dari class mahasiswa
$mahasiswa1 = new mahasiswa("Ratna NH", "230202088", "JKB");
echo $mahasiswa1->tampildata(); // Menampilkan informasi mahasiswa
echo "<br>";
echo $mahasiswa1->updatejurusan(); // Menampilkan informasi mahasiswa yang sudah diubah value jurusannya.
echo "<br>";
echo $mahasiswa1->setnim(); // Menampilkan informasi mahasiswa yang sudah diubah NIM nya.

?>
