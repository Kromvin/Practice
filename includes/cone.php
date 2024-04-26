<?php
$conn = mysqli_connect("localhost", "Krom", "");
if ($conn === false) {
  die("Ошибка: " . mysqli_connect_error());
} 
echo "Подключение успешно установлено";
mysqli_close($conn);
?>