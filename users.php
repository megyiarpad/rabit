<?php
    include 'Controller/controller.php';
    include 'Model/usersmodel.php';
    include 'View/viewuser.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="button">
	<a href="index.php">Back</a></div>
<br> 
<?php
    $users = new ViewUser();
    $users->showAllUsers();
?>

</body>
</html>