<?php
    include '../Model/basemodel.php';
    include '../Model/usersmodel.php';
    include '../Controller/viewuser.php';
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
	<a href="index">Back</a></div>
<br> 
<?php
    $users = new ViewUser();
    $users->showAllUsers();
?>

</body>
</html>