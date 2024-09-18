<!-- JOBSHEET 3 (INTRUKSI KERJA) -->

<?php
    // 1.  INHERITANCE
    // buat kelas person dengan atribut nama
    echo "<b>INHERITANCE</b>";
class Person
 {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }
    // buat method getnama()
    public function getnama() {
        return "Nama Mahasiswa : $this->nama";
    }
}

    // buat kelas student yang mewarisi dari person
class Student extends Person 
{
    private $studentID; // menambahkan atribut studentID.

    public function __construct($nama, $studentID) 
    {
        parent:: __construct($nama);
        $this->studentID = $studentID;
    }
    // menambahkan method getstudentID()
    public function getstudentID() 
    {
        return "ID mahasiswa : " . $this->studentID;
    }
    // untuk mengubah nilai studentID menggunakan SETTER.
    public function setstudentID($studentID) 
    {
        $this->studentID = $studentID;
    }

    // untuk mengubah nilai nama menggunakan SETTER.
    public function setnama($nama) 
    {
        $this->nama = $nama;
    }
}

    // Instansiasi objek pada kelas student.
    $student1 = new Student("Ratna Nur Hidayah", "230202088");
    echo "<br>";
    echo $student1->getnama();
    echo "<br>";
    echo $student1->getstudentID();
    echo "<br><hr>";

    echo "<b>POLYMORPHISM</b>";
    // 2. POLYMORPHISM
    // membuat kelas Teacher yang mewarisi dari kelas Person.
class Teacher extends Person 
{
    private $teacherID; // menambahkan atribut teacherID

    public function __construct($nama, $teacherID) 
    {
        parent:: __construct($nama);
        $this->teacherID = $teacherID;
    }
    // membuat override method getname() untuk teacher agar menampilkan format.
    public function getnama() 
    {
        return "Nama Dosen : " . $this->nama;
    }
    // untuk mengubah nilai nama menggunakan SETTER.
    public function setnama($nama) 
    {
        $this->nama = $nama;
    }
    // untuk mengambil nilai teacherID menggunakan GETTER.
    public function getTeacherID() 
    {
        return "ID Dosen : $this->teacherID";
    }
    // untuk mengubah nilai teacherID menggunakan SETTER.
    public function setTeacherID($teacherID) 
    {
        $this->teacherID = $teacherID;
    }
}

    // instansiasi objek pada kelas teacher.
    $teacher1 = new Teacher("Ibu Dwi Novia Prasetyanti", "232323");
    echo "<br>";
    echo $teacher1->getnama();
    echo "<br>";
    echo $teacher1->getteacherID();
    echo "<br><hr>";

    echo "<b>ABSTRACTION</b>";
    // 4. ABSTRACTION
    // membuat kelas abstrak course
abstract class Course {

    // membuat method dengan GETTER yaitu getcoursedetails()
    abstract public function getCourseDetails();
}

    // membuat kelas onlinecourse yang mengimplementasikan getcoursedetails() untuk memberikan detail format yang beda.
class OnlineCourse extends Course 
{
    // membuat method dengan GETTER yaitu getcoursedetails()
    public function getCourseDetails() 
    {
        return "ini adalah kelas online";
    }
}

    // membuat kelas onlinecourse yang mengimplementasikan getcoursedetails() untuk memberikan detail format yang beda.
class OfflineCourse extends Course 
{
    public function getCourseDetails() 
    {
        return "ini adalah kelas offline";
    }
}
        // instasiasi objek dari kelas onlinecourse.
        echo "<br>";
        $online = new OnlineCourse();
        echo $online->getCourseDetails() . "\n"; // menampilkan informasi dari method getCourseDetails
        echo "Online Course." ."<br>";
        // instasiasi objek dari kelas offlinecourse.
        $offline = new OfflineCourse();
        echo $offline->getCourseDetails() . "\n"; // menampilkan informasi dari method getCourseDetails
        echo "Offline Course." ."<br>";
?>