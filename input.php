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
<!--        right side-->
        <div class="container">
            <form method="POST" action="">
                <div class="form-group row">
                    <label for="fName" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="" name="fName" id="fName" style="width: 300px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lName" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="" name="lName" id="lName" style="width: 300px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pNumber" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="" name="pNumber" id="pNumber" style="width: 300px;">
                    </div>
                </div>
                <!--            inline check boxes-->
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="rad"  id="rad-staff" value="Staff">
                    <label class="form-check-label" for="rad-staff">Staff</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="rad" id="rad-student" value="Student">
                    <label class="form-check-label" for="rad-student">Student</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="rad" id="rad-faculty" value="Faculty">
                    <label class="form-check-label" for="rad-faculty">Faculty</label>
                </div>

                <div class="form-group col-md-4">
                    <label for="inputState">Game</label>
                    <select id="inputState" name="game" class="form-control">
                        <option selected>Choose...</option>
                        <option value="Hockey"  id="game-hockey">Hockey</option>
                        <option value="Basketbold"  id="game-basketbold">Basketbold</option>
                        <option value="Soccer" id="game-soccer">Soccer</option>
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>


<!--        left side-->
        <div class="container">

            <h4>First Name: &nbsp;<span><?=  $_POST['fName'] ?> </span></h4>
            <h4>Last Name: &nbsp;<span><?=  $_POST['lName'] ?> </span></h4>
            <h4>Phone Number: &nbsp;<span><?=  $_POST['pNumber'] ?> </span></h4>
            <h4>Type: &nbsp;<span><?=  $_POST['rad'] ?> </span></h4>
            <h4>Game: &nbsp;<span><?=  $_POST['game'] ?> </span></h4>

        </div>

    </div>
</main>
<?php include 'footer.php' ?>
</body>
</html>