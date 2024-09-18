    <!-- JOBSHEET 2 (INTRUKSI KERJA) -->

<?php
    // 1. Membuat class mahasiswa yang memiliki atribut nama, nim, dan jurusan.
class Mahasiswa {
    // Menambahkan atribut.
    private $nama; // visibility private, hanya dapat diakses dalam class mahasiswa saja.
    private $nim; // visibility private, hanya dapat diakses dalam class mahasiswa saja.
    private $jurusan; // visibility private, hanya dapat diakses dalam class mahasiswa saja.

     // Implementasi method atau function yang otomatis akan berjalan ketika object dibuat dan akan ditampilkan.
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Membuat method tampildata() dalam class mahasiswa
    public function tampildata()
    { 
        return "Mahasiswa bernama $this->nama dengan $this->nim dari $this->jurusan.";
    }
    // 2. ENCAPSULATION dengan membuat method SETTER dan GETTER untuk atribut nama, nim, jurusan.
    // Mengambil nilai dari atribut jurusan menggunakan GETTER.
    public function getjurusan()
    {
        return $this->jurusan;
    }
    // Mengubah nilai dari atribut jurusan menggunakan SETTER.
    public function setjurusan($jurusan)
    {
        return $this->jurusan = $jurusan;
    }
    // Mengambil nilai dari atribut nama menggunakan GETTER.
    public function getnama()
    {
        return $this->nama;
    }
    // Mengubah nilai dari atribut nama menggunakan SETTER.
    public function setnama($nama)
    {
        return $this->nama = $nama;
    }
    // Mengambil nilai dari atribut nim menggunakan GETTER.
    public function getnim()
    {
        return $this->nim;
    }
    // Mengubah nilai dari atribut nim menggunakan SETTER.
    public function setnim($nim)
    {
        return $this->nim = $nim;
    }
}
    echo "<b>ENCAPSULATION, Class, dan Object</b><br>";

    // instasiasi objek dari kelas Mahasiswa.
    $mahasiswa1 = new Mahasiswa("Clarisya Prameswari", "220302077", "Teknik Telekomunikasi");
    echo $mahasiswa1->tampildata(); // untuk menampilkan format dari data kelas Mahasiswa.
    echo "<br>";
    echo $mahasiswa1->getnama();
    echo "<br>";
    echo $mahasiswa1->getnim();
    echo "<br>";
    echo $mahasiswa1->getjurusan();
    echo "<br>";
    echo "<br><hr>";

    echo "<b>INHERITANCE</b><br>";
    // 3. INHERITANCE dengan membuat kelas Pengguna yang berisi atribut nama.
class Pengguna 
{
    protected $nama; // INHERITANCE atribut harus bersifat visibility protected yang nantinya akan diwariskan kepada kelas lainnya.
     // Implementasi method atau function yang otomatis akan berjalan ketika object dibuat dan akan ditampilkan.
     public function __construct($nama) 
     {
        $this->nama = $nama;
     }
     // Membuat method getnama() dengan GETTER.
     public function getnama()
     {
        return $this->nama;
     }
     // Membuat method aksesfitur() pada kelas Pengguna.
     public function aksesfitur()
     {
        return "bisa kses fitur";
     }
}
    
    // Membuat kelas Dosen yang mewarisi dari dari kelas Pengguna.
class Dosen extends Pengguna {
    private $matakuliah; // Menambahkan atribut matakuliah yang bersifat visibility private dan hanya dapat diakses di kelas tersebut.
    // Implementasi method atau function yang otomatis akan berjalan ketika object dibuat dan akan ditampilkan.
    public function __construct($nama, $matakuliah)
    {
        parent::__construct($nama); // Parent Construct untuk menjalankan secara otomatis dari atribut nama yang diwariskan dari kelas Pengguna.
        $this->matakuliah = $matakuliah;
    }
    // Membuat methop tampildatadosen() untuk menampilkan format data dosen.
    public function tampildatadosen() 
    {
        return "Dosen bernama $this->nama mengampu mata kuliah praktikum $this->matakuliah.";
    }
    // Membuat method getmatakuliah dengan GETTER untuk mengambil nilai matakuliah pada kelas Dosen.
    public function getmatakuliah()
    {
        return $this->matakuliah;
    }
}
    // Instansiasi objek dari kelas Dosen.
    $dosen1 = new Dosen("Ibu Dwi Novi", "Algoritma Pemrograman");
    echo $dosen1->tampildatadosen(); // Menampilkan isi format pada kelas Dosen.
    echo "<br>";
    echo $dosen1->getnama(); // Mengambil nama dengan method getnama().
    echo "<br>";
    echo $dosen1->getmatakuliah(); // Mengambil nama dengan method getmatakuliah().
    echo "<br>";
    echo "<br><hr>";

    echo "<b>POLYMORPHISM</b><br>";
    // Membuat kelas Dosen yang mewarisi dari kelas Pengguna pada INHERITANCE.
class Dosen1 extends Pengguna
{
    private $matakuliah; // Menambahkan atribut matakuliah yang bersifat private.
    // Implementasi method atau function yang otomatis akan berjalan ketika object dibuat dan akan ditampilkan.
    public function __construct($nama, $matakuliah)
    {
        parent:: __construct($nama);
        $this->matakuliah = $matakuliah;
    }
    // Menampilkan data dosen dengan method tampildatadosen()
    public function tampildatadosen()
    {
        echo "Nama Dosen : $this->nama" . "<br>";
        echo "Mata Kuliah : $this->matakuliah" . "<br>";
    }
    // Membuat method aksesfitur() pada kelas Dosen yang mewarisi dari kelas Pengguna.
    public function aksesfitur()
    {
        return "Dosen bisa akses mata kuliah";
    }
}
    // Membuat kelas Mahasiswa yang mewarisi dari kelas Pengguna.
class mahasiswaa1 extends Pengguna
{
    // Implementasi method atau function yang otomatis akan berjalan ketika object dibuat dan akan ditampilkan.
    public function __construct($nama)
    {
        parent:: __construct($nama);
        $this->nama = $nama;
    } 
    // Menambahkan method aksesfitur()
    public function aksesfitur()
    {
        return "Mahasiswa bisa akses fitur nim";
    }
}

    // Instansiasi objek dari kelas mahasiswa1.
    $mhs = new mahasiswaa1 ("Nana");
    echo $mhs->aksesfitur()."<br>";
    $pengguna = new Pengguna ("Jaya");

    // Instansiasi objek dari kelas Dosen1.
    $dosen1 = new Dosen1("Jaya", "IPA");
    echo $dosen1->tampildatadosen();
    echo $dosen1->aksesfitur();
    echo "<br><hr>";

    echo "<b>ABSTRACTION</b>";
    // 5. ABSTRACTION dengan membuat kelas abstrakpengguna
abstract class abstrakpengguna 
{
    protected $nama; // Menambah atribut nama yang bersifat visibility protected yang hanya diakses oleh antar kelas yang telah diwarisi oleh kelas sebelumnya.
     // Implementasi method atau function yang otomatis akan berjalan ketika object dibuat dan akan ditampilkan.
     public function __construct($nama) 
     {
        $this->nama = $nama;
     }
     // Membuat method getnama() dengan GETTER. 
     public function getnama()
     {
        return $this->nama;
     }
}
    // Implementasi kelas abstrakmhs yang mengimplementasikan metode abstrak.
class abstrakmhs extends abstrakpengguna
{
    // Menambahkan method aksesfitur()
    public function aksesfitur()
    {
       return "$this->nama bisa akses fitur";
    }
}
    // Implementasi kelas abstrakdosen yang mengimplementasikan metode abstrak.
class abstrakdosen extends abstrakpengguna
{
    // Menambahkan method aksesfitur()
    public function aksesfitur()
    {
       return "$this->nama bisa akses fitur";
    }
}
    // Instansiasi objek dari kelas abstractmhs.
    echo "<br>";
    $abstractmhs = new abstrakmhs("Ratna Nur Hidayah");
    echo $abstractmhs->aksesfitur();
    echo "<br>";
    // Instansiasi objek dari kelas abstrakdosen. 
    $abstrakdsn = new abstrakdosen("Ibu Dwi Novia Prasetyanti");
    echo $abstrakdsn->aksesfitur();
?>
