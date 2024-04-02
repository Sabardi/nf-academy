<?php
class Mahasiswa {
    public $nim;
    public $nama;
    public $universitas;
    public $matakuliah;
    public $nilai;

    public function __construct($nim, $nama, $universitas, $matakuliah, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->universitas = $universitas;
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
    }

    public function grade(){
        if($this->nilai>=85  && $this->nilai<=100 ){
            return "A";
        }else if($this->nilai>=75  && $this->nilai<=84 ){
            return "B";
        }else if($this->nilai>=60  && $this->nilai<=74 ){
            return "C";
        }else if($this->nilai>=40  && $this->nilai<=59 ){
            return "D";
        }else{
            return "E";
        }
    }

    public function predikat($grade){
        switch($grade){
            case "A":
                return "sanagar memuaskan";
                break;
            case "B":
                return "Memuaskan";
                break;
            case "C":
                return "Cukup";
                break;
            case "D":
                return "Kurang";
                break;
            case "E":
                return "Sangat Kurang";
                break;
            default:
                return "";
                break;
        }
    }

    public function status(){
        return ($this->nilai>=65) ? 'Lulus' : 'Tidak Lulus';
    }
}
?>
