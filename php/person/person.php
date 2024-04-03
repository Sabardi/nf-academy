<?php

class person{
    protected $nama;
    protected $gender;
    public function __construct($nama, $gender){
        $this->nama = $nama;
        $this->gender = $gender;
    }

    public function cetak(){
        echo "<br>Nama: ".$this->nama;
        echo "<br>Gender: ".$this->gender;
    }
}

?>