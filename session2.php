<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="StyleSheet.css">
    <title>Document</title>
</head>
<body>
<?php include 'header.php' ?>
<?php include 'menu.php' ?>

<main>
    <div class="container" style="margin: 50px; display: flex">
        <!-- Left side -->
        <div class="container">
            <h4>First Name:</h4>
            <p><?php echo isset($_GET['fName']) ? htmlspecialchars($_GET['fName']) : 'Not provided'; ?></p>

            <h4>Last Name:</h4>
            <p><?php echo isset($_GET['lName']) ? htmlspecialchars($_GET['lName']) : 'Not provided'; ?></p>

            <h4>Phone Number:</h4>
            <p><?php echo isset($_GET['pNumber']) ? htmlspecialchars($_GET['pNumber']) : 'Not provided'; ?></p>

            <h4>Type:</h4>
            <p><?php echo isset($_GET['rad']) ? htmlspecialchars($_GET['rad']) : 'Not provided'; ?></p>

            <h4>Game:</h4>
            <p><?php echo isset($_GET['game']) ? htmlspecialchars($_GET['game']) : 'Not provided'; ?></p>
        </div>
    </div>
</main>


<?php include 'footer.php' ?>
</body>
</html>