
<?php
echo"<center>";
 echo"<form method='POST' action='' name='reg' onSubmit='return validate()'>";
echo"<table border='5' color='black'> <h1 ><font color='blue'><b>STUDENT INFORMATION SYSTEM</b></font></h1><br> <a href='index.php' style=\"margin:10px \">HOME</a><a href='update.php' style=\"margin:10px;\">UPDATE</a><a href='delete.php' style=\"margin:10px;\">DELETE</a><a href='search.php'>SEARCH</a><br><br></center>";
echo"<tr><td>
<center><table style=\"background-color:yellow;\">
<tr><td width='250'><b>Select Any One:<select name='sel'><option>Select Categary</option>";

  echo"<option value='fname'>FIRST NAME</option>";
  echo"<option value='rn'>ROLL NO</option>";
  echo"<option value='branch'>BRANCH</option>";
  echo"<option value='semester'>SEMESTER</option>";
  echo"<option value='address'>ADDRESS</option>
<td><input type='text' name='ty'><input type='submit' name='se' value='search'>/<input type='submit' name='se1' value='AllSearch'>";
echo"</tr></td></table>";
echo"</td></tr></table></center></form>
</body></html>";

 require'db_conn.php';

 $sel=isset($_POST['sel'])?$_POST['sel']:"";
   $ty=isset($_POST['ty'])?$_POST['ty']:"";

if(isset($_POST['se']))
 {

  if($sel=="fname")
  {
    $sql="select* from student where fname='$ty'";
$q1=mysqli_query($conn,$sql);
echo"<center><table border='1'>";
  echo"<tr style=\"background-color:pink;\"><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysqli_fetch_array($q1,MYSQLI_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

 echo"<tr style=\"background-color:yellow;\"><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}
 if($sel=="rn")
  {
$q2=mysqli_query($conn,"select* from student where rn='$ty'");
echo"<center><table border='1'>";
  echo"<tr style=\"background-color:pink;\"><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysqli_fetch_array($q2,MYSQLI_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

 echo"<tr style=\"background-color:yellow;\"><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}
if($sel=="branch")
  {
$q3=mysqli_query($conn,"select* from student where branch='$ty'");
echo"<center><table border='1'>";
 echo"<tr style=\"background-color:pink;\"><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysqli_fetch_array($q3,MYSQLI_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

echo"<tr style=\"background-color:yellow;\"><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}
if($sel=="semester")
  {
$q4=mysqli_query($conn,"select* from student where semester='$ty'");
echo"<center><table border='1'>";
 echo"<tr style=\"background-color:pink;\"><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysqli_fetch_array($q4,MYSQLI_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

echo"<tr style=\"background-color:yellow;\"><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}
if($sel=="address")
  {
$q5=mysqli_query($conn,"select* from student where address='$ty'");
echo"<center><table border='1'>";
  echo"<tr style=\"background-color:pink;\"><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysqli_fetch_array($q5,MYSQLI_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

echo"<tr style=\"background-color:yellow;\"><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}

}
if(isset($_POST['se1']))
 {
$q8=mysqli_query($conn,"select* from student");
echo"<center><table border='1'>";
  echo"<tr style=\"background-color:pink;\"><td><center>SESSION</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysqli_fetch_array($q8,MYSQLI_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

 echo"<tr style=\"background-color:yellow;\"><td><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$add</center></td></tr>";

}
 echo"</center>";
}


?>

