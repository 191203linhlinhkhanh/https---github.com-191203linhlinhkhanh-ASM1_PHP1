<?php
function tinhTongSoChan($n) {
    $tong = 0;
    for ($i = 2; $i <= $n; $i += 2) {
    $tong += $i;
    }
    return $tong;
}
$soN = 10; 
$tongSoChan = tinhTongSoChan($soN);
echo "Tổng các số chẵn từ 1 đến $soN là: $tongSoChan";
?>