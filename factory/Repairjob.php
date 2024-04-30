<?php
class RepairJob {
    protected $nama;
    protected $jenis;
    protected $biaya;

    public function __construct($nama, $jenis, $biaya) {
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->biaya = $biaya;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function getBiaya() {
        return $this->biaya;
    }
}
