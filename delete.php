        <html>
<head>

<style type="text/css">
  
  td
  {
 padding: 5px;
 margin: 10px;
 background-color: yellow;
 width:25%;
  font-size: 20px;
  }
  a:link {
    color: red;
    margin: 10px;
    font-size: 20px;
}

a:visited {
    color: green;
    margin: 10px;
     font-size: 20px;
}

a:hover {
    color: hotpink;
    margin: 10px;
     font-size: 20px;
}

a:active {
    color: blue;
    margin: 10px;
     font-size: 20px;
</style>
</head>

<body>


<center>
<form method="POST" action="">
<table border="5" color="light green"> <h1 ><font color="blue"><b>STUDENT INFORMATION SYSTEM</b></font></h1><br><a href="index.php" >HOME</a><a href="update.php" >UPDATE</a><a href="delete.php" >DELETE</a><a href="search.php" >SEARCH</a><br><br></center>

<tr>
		<td>ENTER ROLL NO:</td>
		<td><input type="text" name="rn" /></td>
	</tr>

		<td></td>
		<td><input type="submit" name="submit" value="DELETE" /></td>
	</tr>
 </table>
</form>
</body>
</html>
<?php
require'db_conn.php';

$rn=isset($_POST['rn'])?$_POST['rn']:"";




if(isset($_POST['submit']))
 {

 $del=mysqli_query($conn,"DELETE FROM student where rn='$rn'");


if($del)
{
 echo"Record Successfully Deleted";
}
else
{

echo"Not Delete Your Record" ;
}
 }
?>