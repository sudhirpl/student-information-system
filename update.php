       <html>
<head>
<script language="javascript">
     function validate()
{
  var fname=document.reg.fn.value;
  var lname=document.reg.ln.value;
   var session=document.reg.session.value;
    var rn=document.reg.rn.value;
    var branch=document.reg.branch.value;
     var year=document.reg.year.value;
      var semester=document.reg.semester.value;
        var date=document.reg.date.value;
          var address=document.reg.address.value;

if(fname=='')
  {
    window.alert("Please Enter fname!");
    document.reg.fn.focus();
    return false;

 }

 if(lname=='')
  {
    window.alert("Please Enter lname!");
    document.reg.ln.focus();
    return false;

 }
 if(session=='')
  {
    window.alert("Please Select Session!");
    document.reg.session.focus();
    return false;

 }
 if(rn=='')
  {
    window.alert("Enter Roll No!");
    document.reg.rn.focus();
    return false;

 }
 if(branch=='')
  {
    window.alert("Please Select Branch!");
    document.reg.branch.focus();
    return false;

 }
 if(year=='')
  {
    window.alert("Please Select Year!");
    document.reg.year.focus();
    return false;

 }
 if(semester=='')
  {
    window.alert("Please Select Semester!");
    document.reg.semester.focus();
    return false;

 }
 if(date=='')
  {
    window.alert("Please Select Date!");
    document.reg.dd.focus();
    return false;

 }

 }
 if(address=='')
  {
    window.alert("Please Select Address!");
    document.reg.address.focus();
    return false;

 }


}


</script>
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
  }
</style>

</head>

<body>


<center>
<form method="POST" action="" name="reg" onSubmit="return validate()">
<table border="5" background-color="pink"> <h1 ><font color="blue"><b>STUDENT INFORMATION SYSTEM</b></font></h1><br><a href="index.php">HOME</a><a href="update.php">UPDATE</a><a href="delete.php">DELETE</a><a href="search.php">SEARCH</a><br><br></center>

        <tr>
		<td>FIRST NAME:</td>
		<td><input type="text" name="fn" /></td>
	</tr>
	<tr>
		<td>LAST NAME:</td>
		<td><input type="text" name="ln" /></td>
	</tr>
<tr>
		<td>SESSION:</td>
 <td>
<select name="session">
<option >Select Session</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
</select>

</tr>
	<tr>
		<td>ROLL NO:</td>
		<td><input type="text" name="rn" >Primary Key</td>
	</tr>
	<tr>
		<td>BRANCH</td>
<td>
<select name="branch">
<option >Select Branch</option>
<option value="CSE">CSE</option>
<option value="ET&T">ET&T</option>
<option value="CIVIL">CIVIL</option>
<option value="MECHNICAL">MECHNICAL</option>
<option value="EEE">EEE</option>
</select>
</td>
</tr>

<tr>
		<td>YEAR:</td>
<td>
<select name="year">
<option >Select Year</option>
<option value="FIRST">FIRST</option>
<option value="SECOND">SECOND</option>
<option value="THIRD">THIRD </option>
<option value="FOURTH">FOURTH</option>
</select>
</td></tr>

<tr>
		<td>SEMESTER:</td>
<td>
<select name="semester">
<option >Select Semester</option>
<option value="FIRST">FIRST</option>
<option value="SECOND">SECOND</option>
<option value="THIRD">THIRD</option>
<option value="FOURTH">FOURTH</option>
<option value="FIFTH">FIFTH</option>
<option value="SIX">SIX</option>
<option value="SEVENTH">SEVENTH</option>
<option value="EIGHT">EIGHT</option>
</select>
</td>
</tr>

<tr>
<td>Date Of Birth</td>
<td><input type="Date" name="date">

</td>
</tr>
<tr>
		<td>ADDRESS:</td>
		<td><input type="text" name="address" /></td>
	</tr>

		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="UPDATE" /></td>
	</tr>
 </table>
</form>
</body>
</html>
<?php
require'db_conn.php';
$fn=isset($_POST['fn'])?$_POST['fn']:"";
$ln=isset($_POST['ln'])?$_POST['ln']:"";
$session=isset($_POST['session'])?$_POST['session']:"";
$rn=isset($_POST['rn'])?$_POST['rn']:"";
$branch=isset($_POST['branch'])?$_POST['branch']:"";
$year=isset($_POST['year'])?$_POST['year']:"";
$semester=isset($_POST['semester'])?$_POST['semester']:"";
$date=isset($_POST['date'])?$_POST['date']:"";
$address=isset($_POST['address'])?$_POST['address']:"";
$cap1=strtoupper($fn);
$cap2=strtoupper($ln);
$cap3=strtoupper($address);



if(isset($_POST['submit']))
 {

 $q1=mysqli_query($conn,"UPDATE student SET fname='$cap1',lname='$cap2',session='$session',rn='$rn',branch='$branch',year='$year',semester='$semester',dob='$date',address='$cap3' where rn =$rn");
if($q1)
{
 echo"Record Successfully Updated";
}
else
{

echo"Not Update Your Record" ;
}
 }
?>