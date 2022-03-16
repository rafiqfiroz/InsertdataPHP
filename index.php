<?php
include_once("config.php");
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$gender=$_POST['gender'];
$education=$_POST['education'];
$adress=$_POST['addrss'];
$query=mysqli_query($con,"insert into data(name,email,contactno,gender,education,address)
values('$name','$email','$contactno','$gender','$education','$adress')");
if($query)
{
echo "<script>alert('Data inserted successfully');</script>";
}
else
{
echo "<script>alert('Data not inserted');</script>";
}
}
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>How to Insert Data into MySql Using PHP</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
</head>
<body>
<form name="insert" action="" method="post">
<table width="100%"  border="0">
<tr>
<th height="62" scope="row">Name </th>
<td width="71%"><input type="text" name="name" id="name" value=""  class="form-control" required />
</td>
</tr>
<tr>
<th height="62" scope="row">Email id </th>
<td width="71%"><input type="email" name="email" id="email" value=""  class="form-control" required />
</td>
</tr>
<tr>
<th height="62" scope="row">Contact no</th>
<td width="71%">
<input type="text" name="contactno" id="contactno" value=""  class="form-control" maxlength="10" required /></td>
</tr>
<tr>
<th height="62" scope="row">Gender</th>
<td width="71%"><input type="radio" name="gender" value="Male" checked >Male
<input type="radio" name="gender" value="Female" >female</td>
</tr>
<tr>
<th height="62" scope="row">Education</th>
<td width="71%"><select name="education" id="email" class="form-control" required >
<option value="">Select your Education</option>
<option value="Post Graduate">Post Graduate</option>
<option value="Graduate">Graduate</option>
<option value="Intermediate">Intermediate</option>
<option value="High School">High School</option>
<option value="Other">Other</option>
</select></td>
</tr>
<tr>
<th height="62" scope="row">Address</th>
<td width="71%"><textarea name="addrss" class="form-control"  required></textarea> </td>
</tr>
<tr>
<th height="62" scope="row"></th>
<td width="71%"><input type="submit" name="submit" value="Submit" class="btn-group-sm" /> </td>
</tr>
</table>
</form>
</body>
</html>