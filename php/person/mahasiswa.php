<?php
require_once 'person.php';

class Mahasiswa extends person {
    public $semester;
    public $jurusan;
    
    public function __construct($Nama, $gender, $semester, $jurusan) {
        parent::__construct($Nama, $gender);
        $this->semester = $semester;
        $this->jurusan = $jurusan;
    }

    public function cetak(){
        parent::cetak();
        echo "<br>Semester:".$this->semester;
        echo "<br>Jurusan:".$this->jurusan;
        echo "<hr> ";
    }
}

?>