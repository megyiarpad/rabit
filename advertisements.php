<?php
    include 'Controller/controller.php';
    include 'Model/advertisementsmodel.php';
    include 'View/viewadvertisement.php';
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
    $users = new ViewAdvertisement();
    $users->showAllAdvertisement();
?>
</body>
</html>