<?php
class Mahasiswa(){
    public $nim;
    public $nama;
    public $prodi;
    public $fakultas;
    public $asal;
    public function getDataMhs(){
        return $this->nim." ".$this->nama." ".$this->prodi." ".$this->fakultas." ".$this->asal;
    }
}
?>