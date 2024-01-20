<?php
$dsSinhVien = array(
    array("SV001", "Nguyen Van A", 8.5, 7.5),
    array("SV002", "Tran Thi B", 9.0, 8.0),
    array("SV003", "Le Van C", 7.5, 6.5),
    array("SV004", "Pham Thi D", 6.0, 7.0),
    array("SV005", "Hoang Van E", 8.0, 8.5)
);

echo "<h2>Thông tin sinh viên:</h2>";
echo "<table border='1'>
    <tr>
        <th>Mã SV</th>
        <th>Tên SV</th>
        <th>Điểm TB</th>
    </tr>";

foreach ($dsSinhVien as $sinhVien) {
    echo "<tr>
            <td>{$sinhVien[0]}</td>
            <td>{$sinhVien[1]}</td>
            <td>{$sinhVien[2]}</td>
          </tr>";
}

echo "</table>";

echo "<h2>Sinh viên có điểm trung bình lớn hơn 8:</h2>";
echo "<table border='1'>
    <tr>
        <th>Mã SV</th>
        <th>Tên SV</th>
        <th>Điểm TB</th>
    </tr>";

foreach ($dsSinhVien as $sinhVien) {
    if ($sinhVien[2] > 8) {
        echo "<tr>
                <td>{$sinhVien[0]}</td>
                <td>{$sinhVien[1]}</td>
                <td>{$sinhVien[2]}</td>
              </tr>";
    }
}

echo "</table>";
?>