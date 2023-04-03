<!DOCTYPE html>
<?php

if(($_SESSION['role'] !="Faculty"))
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

	<script>
	  function coordinator_report()
	  {
		alert ("Please upload the Coordinator's Report under Uploads->Coordinator's Report. Then only you will be able to submit your Appraisal");
	  }
	</script>
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
		$sql1 = "SELECT * FROM faculty_tab WHERE fac_id = '$uid'";
		$result = mysqli_query($conn, $sql1);
		echo '<h1>Personal Info</h1>';
		while($row = $result->fetch_assoc())
            {
				echo '<table align=center bgcolor="#FFFFFF" width=1000px>';
				echo '<tr><td><a> Faculty Id:</a></td>';
                echo '<td>'.$row['Fac_id'].'</td></tr>';
				echo '<tr><td><a> Faculty Name:</a></td>';
				echo '<td>'.$row['Fac_name'].'</td></tr>';
				echo '<tr><td><a> Date of Employement:</a></td>';
				echo '<td>'.$row['Fac_DOJ'].'</td></tr>';
				echo '<tr><td><a> Qualification:</a></td>';
				echo '<td>'.$row['qualification'].'</td></tr>';
				echo '<tr><td><a> Department:</a></td>';
				echo '<td>'.$row['department'].'</td></tr>';
				echo '</table>';

            }
		echo '<br>';
		echo '<h1>Courses Assigned</h1>';
		$sql2 = "SELECT * FROM courses_tab WHERE fac_id = '$uid'";
        $result = mysqli_query($conn, $sql2);
		while($row = $result->fetch_assoc())
            {
				echo '<table align=center bgcolor="#FFFFFF" width=1000px>';
				echo '<tr><td><a> Course name:</a></td>';
                echo '<td>'.$row['Course_name'].'</td></tr>';;
				echo '<tr><td><a> Credit Hours:</a></td>';
				echo '<td>'.$row['credits'].'</td></tr>';;
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