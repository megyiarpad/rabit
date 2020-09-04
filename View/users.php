<?php
    include '../Model/basemodel.php';
    include '../Model/usersmodel.php';
    include '../Controller/user.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="button">
	<a href="index">Back</a></div>
<br> 
<div class="result">
<?php
    $users = new ShowUser();
    $users->showAllUsers();
?>
</div>
</body>
</html>