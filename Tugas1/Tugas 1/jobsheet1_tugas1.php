    <!-- JOBSHEET 1 (TUGAS) -->

<?php
// 1. Membuat CLASS dengan nama DOSEN.
class dosen {
    // 1. Memberikan atribut nama, nip, dan matakuliah pada class dosen.
    public $nama; // dapat diakses darimana saja karena public.
    public $nip; // dapat diakses darimana saja karena public.
    public $matakuliah;// dapat diakses darimana saja karena public.
    // method atau function yang otomatis akan berjalan ketika object dibuat dan akan ditampilkan.
    public function __construct ($nama, $nip, $matakuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }
    // 2. Method atau function untuk menampilkan informasi dosen.
    public function tampildosen() {
        return "Dosen PNC yang bernama $this->nama dengan nomor $this->nip mengampu matakuliah $this->matakuliah.";
    }
}
// 3. Membuat objek dari class dosen
$dosen1 = new dosen ("Sumarsono", "21002", "Pengantar Komunikasi");
echo $dosen1->tampildosen(); // menampilkan informasi dari $dosen1 dengan function tampildosen()

?>