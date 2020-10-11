<?php
    $suku1 = $_POST['suku1'];
    $suku2 = $_POST['suku2'];
    $suku_n = $_POST['Un'];

    echo "Suku 1 adalah ".$suku1."<br>";
    echo "Suku 2 adalah ".$suku2."<br>";
    echo "Suku Ke N : ".$suku_n."<br><br>";

    echo "Hasil <table border=1 cellspacing=0 cellpadding=5>
            <tr align=center >
                <td>i</td>
                <td>x</td>
            </tr>";
    $beda = 0;
    $total = 0;
    $rata2 = 0;
    for ($i=1; $i <= $suku_n; $i++){
        if ($i == 1){
            echo "
                <tr align=center>
                    <td>$i</td>
                    <td>$suku1</td>
                </tr>";
        }elseif ($i == 2){
            echo "
            <tr align=center>
                <td>$i</td>
                <td>$suku2</td>
            </tr>";
        }else {
            $beda=$suku2 - $suku1;
            $baris =  $suku2 + $beda;
            $suku1 = $suku2;
            $suku2 = $baris;

            echo "
                <tr align=center>
                    <td>$i</td>
                    <td>$baris</td>
                </tr>";
            $total=$total+$baris;
            $rata2=$total/$suku_n;
        }
    }
    echo "
        <tr align=center>
            <td>Rata-Rata</td>
            <td>".ceil($rata2)."</td>
        </tr>";
            
    echo "</table>";
    echo "Jumlah nilai ".$total."<br>";
    
?>