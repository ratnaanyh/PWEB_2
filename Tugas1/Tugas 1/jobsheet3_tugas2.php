    <!-- JOBSHEET 3 (TUGAS) -->

<?php
    // implementasi kelas person sebagai induk dari kelas dosen dan mahasiswa
class Person 
{
    protected $NAMA; // Menambahkan atribut nama yang bersifat propetected agar dapat diakses antar kelas yang telah diwarisi kelas sebelumnya.
    // Implementasi method atau function yang otomatis akan berjalan ketika object dibuat dan akan ditampilkan.
    public function __construct($NAMA)
    {
        $this->NAMA = $NAMA;
    }
    // Menambahkan method getnama() dengan GETTER untuk mengambil nilai nama.
    public function gatnama()
    {
        return "Nama : $this->NAMA";
    }
    // Menambahkan metthod getrole() dengan GETTER pada kelas Person untuk menampilkan peran yang berbeda.
    public function getrole()
    {

    }
}

// 2. Membuat kelas Dosen yang mewarisi dari kelas Person.
class Dosen extends Person {
    private $NIDN; // Menambahkan atribut NIP pada kelas Dosen berifat private agar hanya dapat diakses di kelas tersebut.
    // Implementasi method atau function yang otomatis akan berjalan ketika object dibuat dan akan ditampilkan.
    public function __construct($NAMA, $NIDN) // Menambahkan parameter NAMA dan NIP.
    {
        parent:: __construct($NAMA); // Parent construct untuk menjalankan atribut secara otomatis dari kelas yang mewarisi.
        $this->NIDN = $NIDN;
    }
    // Membuat method tampildata() untuk menampilkan format data dosen.
    public function Menampilkandata()
    {
        echo "Nama Dosen : $this->NAMA" . "<br>";
        echo "NIDN Dosen : $this->NIDN";
    }
    // 3. Menambahkan metthod getrole() dengan GETTER pada kelas Dosen untuk menampilkan peran yang berbeda.
    public function getrole()
    {
        return "<b> </b>";
    }
}

    // Membuat kelas Mahasiswa yang mewarisi dari kelas Person.
class Mahasiswa extends Person {
    private $NIM; // Menambahkan atribut NIP pada kelas Mahasiswa berifat private agar hanya dapat diakses di kelas tersebut.
    // Implementasi method atau function yang otomatis akan berjalan ketika object dibuat dan akan ditampilkan.
    public function __construct($NAMA, $NIM)
    {
        parent:: __construct($NAMA);
        $this->NIM = $NIM;
    }
    // Membuat method tampildata() untuk menampilkan format data Mahasiswa.
    public function menampilkandata()
    {
        echo "Nama Mahasiswa : $this->NAMA";
        echo "<br>";
        echo "NIM Mahasiswa : $this->NIM";
    }
}
 // 5. Membuat kelas abstrak Jurnal dengan diimplementasikan dengan konsep ABSTRACTION.
abstract class Jurnal {
    protected $judul; // Menambahkan atribut judul yang bersifat propetected agar dapat diakses antar kelas yang telah diwarisi kelas sebelumnya.
    // Implementasi method atau function yang otomatis akan berjalan ketika object dibuat dan akan ditampilkan.
    public function __construct($judul)
    {
        $this->judul = $judul;
    }
    // Membuat method tampildata() untuk menampilkan format data Jurnal Penelitian.
    public function menampilkandatajudul()
    {
        return "Judul Jurnal Penelitian : $this->judul";
    }
    // Membuat method  abstract kelolajurnal()
    abstract public function mengelolajurnal();
}

    // Membuat kelas JurnalDosen yang mewarisi dari kelas JurnalDosen.
class JurnalDosen extends Jurnal {
    // Membuat method  abstract kelolajurnal()
    public function mengelolajurnal()
    {
        echo "Judul Jurnal Penelitian : $this->judul" ."<br>";
        echo "<b>Mengelola Pengajuan Jurnal Penelitian Dosen PNC.</b>";
    }
}

    // Membuat kelas JurnalMahasiswa yang mewarisi dari kelas JurnalMahasiswa.
class JurnalMahasiswa extends Jurnal {
    // Membuat method  abstract kelolajurnal()
    public function mengelolajurnal()
    {
        echo "Judul Jurnal Mahasiswa : $this->judul" ."<br>";
        echo "<b>Mengelola Pengajuan Jurnal Penelitian Mahasiswa PNC.</b>";
    }
}

// Instansiasi objek pada kelas Dosen.
$dosen = new Dosen ("Harijayanrdi S.Psi", "2456839302");
echo $dosen->menampilkandata() ."<br><hr>";
echo $dosen->getrole() ."<br>";

// Instansiasi objek pada kelas Mahasiswa.
$mahasiswa1 = new Mahasiswa ("Ratna NH", "230202088");
echo $mahasiswa1->menampilkandata() ."<br><hr>";
echo $mahasiswa1->getrole() ."<br>";

// Instansiasi pada kelas JurnalDosen.
$jurnaldosen1 = new JurnalDosen (" Jurnal Proyek Sosial Kategori Sociopreneur.");
echo $jurnaldosen1->mengelolajurnal();
echo "<br>";
echo "<br><hr>";

// Instansiasi objek pada kelas JurnalMahasiswa.
$jurnalmahasiswa1 = new JurnalMahasiswa ("Jurnal Proyek Sosial Kategori Ideation.");
echo $jurnalmahasiswa1->mengelolajurnal() ."<br>";

?>