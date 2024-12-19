<?php 
$ip = $_SERVER['REMOTE_ADDR']; // 取得指定伺服器變數
print'IP address'.''.$IP.'';
?>

<table border="1">
   <tr>
      <td>1</td>
      <td>2</td>
   </tr>
<?php
// 顯示所有$_SERVER變數
foreach ($_SERVER as $key=>$value) {
   echo "<tr><td>" . $key . "</td>";
   echo "<td>" . $value . "</td></tr>";
}
?>
</table>
</body>
</html>