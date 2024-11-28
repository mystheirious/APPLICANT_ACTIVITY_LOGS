<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<a href="index.php">Back</a>
	<h1>Activity logs:</h1>
	<div class="tableClass">
		<table style="width:100%; margin-top: 30px; text-align: center; background-color: #F1EBDA;">
		<tr>
			<th style="background-color: #FAD5D5;">Activity Log ID</th>
			<th style="background-color: #FAD5D5;">Operation</th>
			<th style="background-color: #FAD5D5;">Applicant ID</th>				
			<th style="background-color: #FAD5D5;">First Name</th>
			<th style="background-color: #FAD5D5;">Last Name</th>
			<th style="background-color: #FAD5D5;">License Number</th>
			<th style="background-color: #FAD5D5;">Gender</th>
			<th style="background-color: #FAD5D5;">Age</th>
			<th style="background-color: #FAD5D5;">Email</th>
			<th style="background-color: #FAD5D5;">Contact Number</th>
			<th style="background-color: #FAD5D5;">Address</th>
			<th style="background-color: #FAD5D5;">Username</th>			
			<th style="background-color: #FAD5D5;">Date Added</th>
		</tr>
			<?php $getAllActivityLogs = getAllActivityLogs($pdo); ?>
			<?php foreach ($getAllActivityLogs as $row) { ?>
			<tr>
				<td><?php echo $row['activity_log_id']; ?></td>
				<td><?php echo $row['operation']; ?></td>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['first_name']; ?></td>
				<td><?php echo $row['last_name']; ?></td>
				<td><?php echo $row['license_number']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><?php echo $row['age']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['contact_number']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['date_added']; ?></td>
			</tr>
			<?php } ?>
		</table>
</body>
</html>