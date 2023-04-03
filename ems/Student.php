<!DOCTYPE html>
<?php

if(($_SESSION['role'] !="Student"))
{
echo $_SESSION['role'];
session_destroy();

}
else{

	
?>
<html>
<head>
	<title>University System</title>

	<!-- Including Bootstrap Necessary Files -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<LINK REL="stylesheet" HREF="css/styles.css" TYPE="text/css">
<script type="text/javascript" src="chat/js/jquery.js"></script>
<script type="text/javascript" src="chat/js/chat.js"></script>	
<link type="text/css" rel="stylesheet" media="all" href="chat/css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="chat/css/screen.css" />

</head>
<body>
<?php 
	$uid=($_SESSION['id']);
	include ("header.php"); 
	?>

<div id="wrapper">


<?php
if(isset($_SESSION['id']))

{
?>

<?php 
		include ("db_connection.php");
		$uid=($_SESSION['id']);
		$sql1 = "SELECT * FROM student_tab WHERE Stu_id = '$uid'";
		$result = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_assoc($result);
        $_SESSION['department'] = $row['department'];
		echo '<h1>Personal Info</h1>';
				echo '<table align=center bgcolor="#FFFFFF" width=1000px>';
				echo '<tr><td><a> Student Id:</a></td>';
                echo '<td>'.$row['Stu_id'].'</td></tr>';
				echo '<tr><td><a> Student Name:</a></td>';
				echo '<td>'.$row['Stu_name'].'</td></tr>';
				echo '<tr><td><a> Date of Enrolment:</a></td>';
				echo '<td>'.$row['Stu_year_of_enrolment'].'</td></tr>';
				echo '<tr><td><a> Major:</a></td>';
				echo '<td>'.$row['Stu_major'].'</td></tr>';
				echo '<tr><td><a> GPA:</a></td>';
				echo '<td>'.$row['CGPA'].'</td></tr>';
                echo '<tr><td><a> Year of Graduation:</a></td>';
				echo '<td>'.$row['year_of_graduation'].'</td></tr>';
				echo '</table>';
        echo '<br>';
		echo '<h1>Faculty in your Department</h1>';
        $dep = ($_SESSION['department']);
		$sql2 = "SELECT * FROM faculty_tab WHERE department = '$dep'";
        $result = mysqli_query($conn, $sql2);
        while($row = $result->fetch_assoc())
            {
				echo '<table align=center bgcolor="#FFFFFF" width=1000px>';
				echo '<tr><td><a> Faculty Name:</a></td>';
                echo '<td>'.$row['Fac_name'].'</td></tr>';;
				echo '<tr><td><a> Qualification:</a></td>';
				echo '<td>'.$row['qualification'].'</td></tr>';
				echo '</table>';
            }
		echo '<br>';
		echo '<h1>Courses Registered</h1>';
		$sql2 = "SELECT * FROM registration_tab WHERE Stu_id = '$uid'";
        $result = mysqli_query($conn, $sql2);
		while($row = $result->fetch_assoc())
            {
				echo '<table align=center bgcolor="#FFFFFF" width=1000px>';
				echo '<tr><td><a> Course:</a></td>';
                echo '<td>'.$row['Course_id'].'</td></tr>';;
				echo '<tr><td><a> Assigned Faculty:</a></td>';
				echo '<td>'.$row['Fac_id'].'</td></tr>';
                echo '<tr><td><a> Semester:</a></td>';
				echo '<td>'.$row['Semester'].'</td></tr>';
				echo '</table>';
            }
?>
<?php

}
else
{
   echo "session expired";

}
?> 
<?php }?>  
</form>

</td></tr></table>

<?php include ("footer.php"); ?>
</div>


      </body>
</html>