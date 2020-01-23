<?php
    define("_TITLE","INDEX");
?>

<!doctype html>
<html lang="en-US">
    <?php require('./templates/head.php');?>
    <body>
    <form class="needs-validation" action="http://<?php echo $_SERVER['SERVER_NAME'];?>/carlos_ferraz_output" method="post" novalidate>
        <div class="form-row">
            <div class="col-md-4 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="validationTooltip01" name="firstName" placeholder="your first name" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
            </div>
            <div class="col-md-4 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="validationTooltip02" name="lastName" placeholder="your last name" required>
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
                <input type="text" class="form-control" id="validationTooltipUsername" name="userName" aria-describedby="validationTooltipUsernamePrepend" required>
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