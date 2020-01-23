<?php
    define("_TITLE","OUTPUT");
    var_dump($_POST);

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];

    $firstNames = explode(" ",$firstName);

?>

<!doctype html>
<html lang="en-US">
    <?php require('./templates/head.php');?>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Thank you for posting your information <?php echo $firstNames[0];?></h1>
                <p class="lead">You said that your first name is <span class="badge badge-primary"><?php echo $firstName;?></span> and your last name is <span class="badge badge-primary"><?php echo $lastName;?></span>.</p>
                <p>Your username for this system will be <span class="badge badge-primary"><?php echo $userName;?></span> from now one. Remember it with your heart.</p>
            </div>
        </div>
    </body>
</html>