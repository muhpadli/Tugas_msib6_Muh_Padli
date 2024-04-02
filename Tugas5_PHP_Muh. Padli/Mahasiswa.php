<?php
class Mahasiswa
{
    //variabel
    public $nim;
    public $nama;
    public $kuliah;
    public $matkul;
    public $nilai;

    //constructor
    public function __construct($nim, $nama, $kuliah, $matkul, $nilai)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    //function
    public function getStatus()
    {
        $status = $this->nilai >= 65 ? 'Lulus' : 'Tidak Lulus';
        return $status;
    }

    public function getGrade()
    {
        if ($this->nilai >= 85 && $this->nilai <= 100) {
            $grade = 'A';
        } elseif ($this->nilai >= 75 && $this->nilai < 85) {
            $grade = 'B';
        } elseif ($this->nilai >= 60 && $this->nilai < 75) {
            $grade = 'C';
        } elseif ($this->nilai >= 40 && $this->nilai < 60) {
            $grade = 'D';
        } elseif ($this->nilai >= 0 && $this->nilai < 40) {
            $grade = 'E';
        } else {
            $grade = '';
        }
        return $grade;
    }

    public function getPredikat()
    {
        switch ($this->getGrade()) {
            case 'A':
                $predikat = 'Sangat Memuaskan';
                break;
            case 'B':
                $predikat = 'Memuaskan';
                break;
            case 'C':
                $predikat = 'Cukup';
                break;
            case 'D':
                $predikat = 'Kurang';
                break;
            case 'E':
                $predikat = 'Sangat Kurang';
                break;
            default:
                $predikat = '';
                break;
        }
        return $predikat;
    }
}
?>
