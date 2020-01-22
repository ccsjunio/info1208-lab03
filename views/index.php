<?php
    define("_TITLE","INDEX");
?>

<!doctype html>
<html lang="en-US">
    <?php require('./templates/head.php');?>
    <body>
    <form class="needs-validation" novalidate>
        <div class="form-row">
            <div class="col-md-4 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="validationTooltip01" name="inputFirstName" placeholder="your first name" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
            </div>
            <div class="col-md-4 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="validationTooltip02" name="inputLastName" placeholder="your last name" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
            </div>
            <div class="col-md-4 mb-3">
            <label for="userName">Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                </div>
                <input type="text" class="form-control" id="validationTooltipUsername" name="inputUserName" aria-describedby="validationTooltipUsernamePrepend" required>
                <div class="invalid-tooltip">
                Please choose a unique and valid username.
                </div>
            </div>
            </div>
        </div>
        
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
        <?php require_once('./templates/foot.php');?>
    </body>
</html>