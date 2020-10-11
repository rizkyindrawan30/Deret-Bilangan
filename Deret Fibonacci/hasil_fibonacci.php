<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>
    <table align=center></table>
    <?php
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $deret = $_POST['deret'];
        
        echo "Angka 1 : ".$angka1."<br>";
        echo "Angka 2 : ".$angka2."<br>";
        echo "Banyak Deret : ".$deret."<br><br>";

        echo 
            "Hasil : <table border=1 cellspacing=0 cellpadding=9>
            
            <tr align=center>
                <td>i</td>
                <td>x</td>
            </tr>";
        $fibonacci = 0;
        for ($i=1; $i <= $deret; $i++) {
            if ($i == 1) {
                echo "
                    <tr align=center>
                        <td>$i</td>
                        <td>$angka1</td>
                    </tr>";
            }elseif ($i == 2) {
                echo "
                    <tr align=center>
                        <td>$i</td>
                        <td>$angka2</td>
                    </tr>";
            }else {
                $fibonacci = $angka1 + $angka2;
                $angka1 = $angka2;
                $angka2 = $fibonacci;
                
                echo "
                    <tr align=center>
                        <td>$i</td>
                        <td>$fibonacci</td>
                    </tr>";
            }
        }
        echo "</table>";
    ?>
</body>
</html>