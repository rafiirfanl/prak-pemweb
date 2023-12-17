<!---Muhammad Rafi Irfan Lubis - 120140219 - TUGAS PRAKTIKUM PEMWEB 7 -->

<?php
class DataDiri {
    public $nama;

    public $nim;
    public $prodi;
    public $angkatan;

    public function __construct($nama, $nim, $prodi, $angkatan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->angkatan = $angkatan;
        echo "Objek Data Diri telah dibuat. Halo, " .$nama . "<br>";
    }
    
    public function infoDataDiri() {
        $text = "Nama saya ". $this->nama. " dengan NIM ". $this->nim. " dari Program Studi ".$this->prodi." Angkatan ".$this->angkatan."<br>";

        $coloredText = $this->tambahkanWarna($text);

        echo $coloredText;
    }

    public function tambahkanWarna($text) {
        $regex = '/\b(Nama|NIM|Program Studi|Angkatan)\b/';
        $newColor = 'red';
        $coloredText = preg_replace($regex, '<span style="color: ' . $newColor . ';">$1</span>', $text);
        
        
        return $coloredText;
    }

    public function __destruct() {
        echo "Objek Data Diri telah dihancurkan.";
    }
}
?>
