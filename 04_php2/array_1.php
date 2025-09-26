<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
        $Listdosen=["Ellok Nur Hamdana","Unggul Pemenang","Bagas Nugraha"];
        
        echo $Listdosen[2] . "<br>";
        echo $Listdosen[0] . "<br>";
        echo $Listdosen[1] . "<br>";

        // sudah menggunakna lopping
        $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

        foreach ($Listdosen as $dosen){
        echo $dosen . "<br>";
        }
    ?>
</body>
</html>