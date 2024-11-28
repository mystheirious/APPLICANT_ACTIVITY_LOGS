<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
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
	<h1>Search History:</h1>
    <div class="tableClass">
        <table style="width:100%; margin-top: 30px; text-align: center; background-color: #F1EBDA;">
            <tr>
                <th style="background-color: #FAD5D5;">Search History ID</th>
                <th style="background-color: #FAD5D5;">Search Query</th>
                <th style="background-color: #FAD5D5;">Username</th>
                <th style="background-color: #FAD5D5;">Date Searched</th>
            </tr>
            <?php 
            $getSearchHistory = getSearchHistory($pdo); 
            foreach ($getSearchHistory as $row) { ?>
            <tr>
                <td><?php echo $row['search_id']; ?></td>
                <td><?php echo $row['keyword']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['date_searched']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
