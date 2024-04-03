<?php

class Bank{
    // membuat variable
    protected $norek;
    public $nama;
    private $saldo;

    // menambahkan variable statik dan konstanta 
    public static $jumlah = 0; 
    public const  NamaBank = "BRIAN";
    
    // membuat constructor
    public function __construct($no, $nama, $saldo) {
        $this->norek = $no;
        $this->nama = $nama;
        $this->saldo = $saldo;
    }

    // membuat method
    // fngsi menabung 
    public function menabung($uang) {
        $this->saldo +=$uang;
    }
    
    // fungsi menarik
    public function menarik($uang) {
        $this->saldo -=$uang;
    }

    // fungsi cetak 
    public function cetak(){
        echo "<b>".self::NamaBank."</b>";
        echo "<br> no rekening". $this->norek;
        echo "<br> Nama Nasabah". $this->nama;
        echo "<br> saldo". $this->saldo;
        echo "<hr>";

    }
        


}
?>