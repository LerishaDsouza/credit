<html>
<head>
<style>
body, html {
  height: 100%;
}
form {
  text-align: center;
}

body {
  background-image: url("https://media-cdn.tripadvisor.com/media/photo-s/06/1a/f6/51/tallac-historic-site.jpg");
  background-repeat: no-repeat;
  background-size:100% 100%;
   width:100%;
}
@media only screen and (max-width: 768px) {
    background-image: url("https://media-cdn.tripadvisor.com/media/photo-s/06/1a/f6/51/tallac-historic-site.jpg");
}

</style>
</head>
<body>
<h1 align="center">Credit card management system</h1>
<br>
<br>
<form action="index.php" method="POST">
<div style="text-align:center">  
<input type="submit" value="View ALL USERS" name="submit">
</div>
</form>
</body>
</html>
<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'id8840491_root');
   define('DB_PASSWORD', '123456');
   define('DB_DATABASE', 'id8840491_new');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['submit']))
{
$result = mysqli_query($db,"select id,username,credit from plate");
echo "<form action='my.php' method='post'>";
  while ($rows=mysqli_fetch_array($result))
{
?>
<tr>
<td align="center"><input name="radiod" type="radio" id="radiod" value="<?php echo $rows['id']; ?>"></td>
<td><?php echo $rows['id']; ?></td>&nbsp;&nbsp;
<td><?php echo $rows['username']; ?></td>&nbsp;&nbsp;
<td><?php echo $rows['credit']; ?></td><br>&nbsp;&nbsp;
</tr>
<br>
<?php
}
echo "<input type='submit' value='transfer'>";
echo "</form>";
mysqli_close($db);
}
?>

</html>