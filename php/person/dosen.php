<?php
require_once 'person.php';

class Dosen extends person {
    protected $nidn;
    protected $gelar;
    
    public function __construct($nama, $gender, $nidn, $gelar) {
        parent::__construct($nama, $gender);
        $this->nidn = $nidn;
        $this->gelar = $gelar;
    }

    public function cetak(){
        parent::cetak();
        echo "<br>nidn:".$this->nidn;
        echo "<br>gelar:".$this->gelar;
        echo "<hr> ";
    }
}

?>