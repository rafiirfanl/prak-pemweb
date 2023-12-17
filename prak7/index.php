<!---Muhammad Rafi Irfan Lubis - 120140219 - TUGAS PRAKTIKUM PEMWEB 7 -->

<?php
    require 'datadiri.php';

    $dataDiri = new DataDiri("Rafi", 120140219, "Teknik Informatika", 2020);

    echo $dataDiri->infoDataDiri() . "\n";
?>