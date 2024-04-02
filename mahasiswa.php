<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $kuliah;
    public $nilai;

    // Constructor
    public function __construct($nim, $nama, $kuliah, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->nilai = $nilai;
    }

    // Method untuk menentukan grade
    public function hitungGrade() {
        if ($this->nilai >= 85) {
            return 'A';
        } elseif ($this->nilai >= 70) {
            return 'B';
        } elseif ($this->nilai >= 69) {
            return 'C';
        } elseif ($this->nilai >= 60) {
            return 'D';
        } else {
            return 'E';
        }
    }

    // Method untuk menentukan predikat
    public function hitungPredikat() {
        if ($this->nilai >= 85) {
            return 'Sangat Memuaskan';
        } elseif ($this->nilai >= 70) {
            return 'Memuaskan';
        } elseif ($this->nilai >= 69) {
            return 'Cukup';
        } elseif ($this->nilai >= 60) {
            return 'Kurang';
        } else {
            return 'Sangat Kurang';
        }
    }

    // Method untuk menentukan status
    public function cekStatus() {
        if ($this->nilai >= 65) {
            return 'Lulus';
        } else {
            return 'Tidak Lulus';
        }
    }
}
?>
