<!DOCTYPE html>
<html>
<head>
 <title>Ví dụ 2</title>
</head>
<body>
  <?php
  if($data==NULL){
  echo "<h2>Dada Empty</h2>";
}
else{
echo "<table>
  <tr>
    <td>id</td>
    <td>Title</td>
    <td>Des</td>
  </tr>";
  foreach($data as $item){
  echo "<tr>";
    echo "<td>".$item['id']."</td>";
    echo "<td><a href='' >".$item['title']."</a></td>";
    echo "<td>".$item['description']."</td>";echo "</tr>";
  }
}
?>
</body>
</html>