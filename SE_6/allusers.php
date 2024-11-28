<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 

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
	<h1>All Users of PH Hospital's System:</h1>
	<div class="tableClass">
		<table style="width:100%; margin-top: 30px; text-align: center; background-color: #F1EBDA;">
		<tr>
			<th style="background-color: #FAD5D5;">Username</th>
			<th style="background-color: #FAD5D5;">User ID</th>
		</tr>
			<?php $getAllUsers = getAllUsers($pdo); ?>
			<?php foreach ($getAllUsers as $row) { ?>
			<tr>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['user_id']; ?></td>
			</tr>
			<?php } ?>
		</table>
</body>
</html>