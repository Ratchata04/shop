<?php
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $sql = "DELETE FROM users WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "ลบข้อมูลเรียบร้อย";
    } else {
        echo "เกิดข้อผิดพลาดในการลบข้อมูล: " . $conn->error;
    }
    $conn->close();
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="id">ID ที่ต้องการลบ:</label><br>
    <input type="text" id="id" name="id"><br><br>
    <input type="submit" value="ลบ">
</form>