<?php
include 'connect.php';
$keyword = $_GET['keyword'];
$sql = "SELEC * FROM users WHERE name LIKE '%$keyword%'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "ไม่พบข้อมูลที่พบกับคำค้นหา";
}
$conn->close();
?>

<form action="search.php" method="GET">
    <input type="text" name="keyword" placeholder="ค้นหาข้อมูล">
    <button type="submit">ค้นหา</button>
</form>