<?php
// defines the title of the page
define("TITLE", "INDEX");
?>

<!doctype html>
<html lang="en-US">
<!-- loads the script with the code for the head -->
<!-- separated to be reused through the pages -->
<?php require('./templates/head.php'); ?>

<body>
    <!-- Just an image -->
    <div class="container">
        <?php require_once('./templates/mainNav.php'); ?>
        <form class="needs-validation" action="http://<?php echo _URLBASE; ?>/carlos_ferraz_output" method="post" novalidate>
            <div class="form-row">
                <!-- jumbotron to introduce the page -->
                <div class="jumbotron">
                    <h1 class="display-4">Try the awesome age calculator!</h1>
                    <p class="lead">You will be amazed to this awesome and exclusive feature to free you from the burden of the complex calculation of your age.</p>
                    <p>Instead of spent a lot of time learning the cumbersome subtraction operation, just fill in the form below and get your age almost instantly.</p>

                    <div class="row">
                        <div class="col">
                            <!-- beginning of the card -->
                            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                <div class="card-header">First Name</div>
                                <div class="card-body">
                                    <h5 class="card-title">Tell your first name</h5>
                                    <p class="card-text">Fill this form with your first name.</p>

                                    <div class="row">
                                        <div class="col">
                                            <label for="firstName">Write it here</label>
                                            <input type="text" class="form-control" id="validationTooltip01" name="firstName" placeholder="your first name" required>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                        </div><!-- end of class col -->
                                    </div><!-- end of class row -->
                                </div><!-- end of card-body -->
                            </div><!-- end of card -->
                        </div><!-- end of column for card -->
                        <div class="col">
                            <!-- beginning of the card -->
                            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                <div class="card-header">Last Name</div>
                                <div class="card-body">
                                    <h5 class="card-title">Tell your last name</h5>
                                    <p class="card-text">Fill this form with your last name.</p>

                                    <div class="row">
                                        <div class="col">
                                            <label for="lastName">Write it here</label>
                                            <input type="text" class="form-control" id="validationTooltip01" name="lastName" placeholder="your last name" required>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                        </div><!-- end of class col -->
                                    </div><!-- end of class row -->
                                </div><!-- end of card-body -->
                            </div><!-- end of card -->
                        </div><!-- end of column for card -->
                        <div class="col">
                            <!-- beginning of the card -->
                            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                <div class="card-header">Birth day</div>
                                <div class="card-body">
                                    <h5 class="card-title">When did you born?</h5>
                                    <p class="card-text">Tell us the day you borned.</p>

                                    <div class="row">
                                        <div class="col">
                                            <label for="firstName">Write it here</label>
                                            <input type="date" class="form-control" id="validationTooltip01" name="birthDay" required>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                        </div><!-- end of class col -->
                                    </div><!-- end of class row -->
                                </div><!-- end of card-body -->
                            </div><!-- end of card -->
                        </div><!-- end of column for card -->
                    </div><!-- end of row of cards -->

                    <button class="btn btn-primary" type="submit">Send!</button>

                </div><!-- end of jumbotron -->

            </div><!-- end of form row-->

        </form>
    </div><!-- end of container -->

    <!-- loads the foot of the page, with calls to javascript code -->
    <?php require_once('./templates/foot.php'); ?>
</body>

</html>