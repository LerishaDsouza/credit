<html>
<head>
<style>
body, html {
  height: 100%;
}
body {
  background-image: url("https://media-cdn.tripadvisor.com/media/photo-s/06/1a/f6/51/tallac-historic-site.jpg");
  background-repeat: no-repeat;
   background-size:100% 100%;
   background-repeat:no-repeat;
   width:100%;
}

            table#table tr:not(:first-child){
                cursor: pointer;transition: all .25s ease-in-out;
            }
            table#table tr:not(:first-child):hover{background-color: #ddd;}
            table#table1 {
    width:70%; 
    margin-left:15%; 
    margin-right:15%;
  }
           input
            {
            padding:10px;
            }
           
@media screen and (max-width: 960px) {
   body
{
background-image:
    url("https://media-cdn.tripadvisor.com/media/photo-s/06/1a/f6/51/tallac-historic-site.jpg");
}
input[type="submit"]{
display:inline-block;
width:33.33%;
}
    
}
        </style>
</head>
<body>
<h1>Credit Card Management System</h1>
<br>
<form action="u.php" method="POST">
<h2>Tranfer Details</h2>
<p>
<label>SENDER:</label>
&nbsp;&nbsp;&nbsp;
<input type="text" name="send" id="send" value=<?php echo $_POST["radiod"] ?>>
</p>
<p>
<label>
RECIEVER:
</label>
<input type="text" name="recieve" id="recieve" required>
</p>
<p>
<label>
AMOUNT:
</label>
&nbsp;
<td><input type="text" name="amount" id="amount" required>
</p>
<input type='submit' name="submit" value="Submit">
</form>
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
   
   $result = mysqli_query($db,"select id,username,credit from plate");

echo "<body>";
echo "<table id='table' border='1'>
<tr>
<th>userid</th>
<th>usernamename</th>
<th>credit</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['credit'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo "</body>";
mysqli_close($db);
echo "<script>
     var table = document.getElementById('table');         
              for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         rIndex = this.rowIndex;
                         document.getElementById('recieve').value= this.cells[0].innerHTML;
                    };
                   
                
                }

             
 </script>";
?>

</body>
</html>