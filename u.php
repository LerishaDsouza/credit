<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
     <title>Transfer message </title>
    <link rel="stylesheet" href="credit.css">
    <style>
body, html {
  height: 100%;
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
	
<body >
			
<?php
define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'id8840491_root');
   define('DB_PASSWORD', '123456');
   define('DB_DATABASE', 'id8840491_new');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("error in connection");
 if(!empty($_POST))  
 { 
   $send = mysqli_real_escape_string($db,$_POST["send"]);
   $rec = mysqli_real_escape_string($db,$_POST["recieve"]);
   $bal=mysqli_real_escape_string($db,$_POST["amount"]);
   if($send==$rec)
   {
	   die("<br><br><br><br><br><br><h3 align=center>cannot transfer credit to yourself</h3>
	         <div align='center'><a href=skid.php><b>Click Here To Continue</b></a></div>");
   }
   if(isset($_POST["send"],$_POST["recieve"]))
   {	   
		$query = "SELECT * FROM plate WHERE id=$send";
		$result = mysqli_query($db,$query);
		if(mysqli_num_rows($result) > 0)
		{
				$query = "SELECT * FROM plate WHERE id=$rec";
				$result = mysqli_query($db,$query);
				if(mysqli_num_rows($result) > 0)
				{
						$query = "SELECT credit FROM plate WHERE id=$send";
						$result =mysqli_query($db,$query);
					                  $row = mysqli_fetch_row($result);
						$sbal=$row[0];
						if($sbal < $bal)
						{
							echo "<h3 align=center><br><br><br><br><br><br>insufficeint balance</h3>";							
						}
						else
						{
							
							$newbal=$sbal-$bal;
							
							$sql = "UPDATE plate SET credit=$newbal WHERE id=$send";
							if (mysqli_query($db, $sql)) 
							{
								$querys = "SELECT credit FROM plate WHERE id=$rec";
							$results =mysqli_query($db,$querys);
							$rows = mysqli_fetch_row($results);
						
							$rbal=$rows[0];
							$r=$rbal+$bal;
								$stm = "UPDATE plate SET credit=$r WHERE id=$rec";
								if(mysqli_query($db, $stm))
								{	
										echo "<h2 align=center><br><br><br><br><br><br>Transfered successfully</h2>";
										echo "<h3 align='center'>sender's(Id:$send) new balance is:$newbal</h3>";
										echo "<h3 align='center'>Receiver's(Id:$rec) new balance is:$r</h3>";
									 
									
								}
								else
								{
									die("error while updating");
								}
								

							} 
							else 
							{
								echo "Error updating record: " . mysqli_error($db);
							}

							
						}
				}
				else
				{
					echo "<br><br><br><br><br><br><h3 align=center>receiver doesn't exist</h3>";
				}
		}
		else
		{
			echo "<br><br><br><br><br><br><h3 align=center>sender doesn't exist</h3>";
			
		}

   }
 }
   else
   {
	   $msg="enter proper user ids";
	   echo "<br><br><br><br><br><br><h3 align=center>$msg</h3>";
   }
	echo "<div align='center'><a href=index.php><b>Click Here To Continue</b></a></div>"
  ?>
  </body>
 </html>