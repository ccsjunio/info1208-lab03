<?php
// define a constant with the title 
define("TITLE", "OUTPUT");
// set a boolean variable to indicate the state of GD library,
// if loaded or not
$GDLOADED = false;

// check whether GD library is  loaded or not
// and update the GDLOADED state
if (extension_loaded('gd')) {
    $GDLOADED = false;
}

// dump the parameters sent through the form in the
// caller page
var_dump($_POST);

// attribute the parameters to its specific variables
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$birthDay = $_POST['birthDay'];

// create a variable $today, to contain todays date
// to be used in the calculation of the user's age
$today = new Datetime(date('m.d.y'));

// create arrays from the first and last name
// allowing to use only the first name it they
// have multuple names
// eg: CARLOS CESAR turns to an array ['CARLOS', 'CESAR']
$firstNames = explode(" ", $firstName);
$lastNames = explode(" ", $lastName);

//calculate age
$birthDate = new DateTime($birthDay);
$age = $today->diff($birthDate);

// set the string to be displayed including the age and
// the suffix "years" or "year"
$ageString = $age->y > 1 ? $age->y . " years" : $age->y . " year";

// verify if gd libray (graphics library for PHP) is loaded
// if the library is loaded implement a slide carrousel with
// the first name, last name and age as images
// with captions beneath
if ($GDLOADED) {
    // load the class to produce an image from text
    // sources refered on the file
    // code allowed to use for personal and non commercial purpose
    // termos here: https://www.codexworld.com/terms-conditions/
    require_once './utils/TextToImage.php';

    //create the images from the text
    $img = new TextToImage;

    //create image for first name
    $img->createImage($firstNames[0]);
    $img->saveAsPng('firstName', './img/');
    //create image for last name
    $img->createImage($lastNames[0]);
    $img->saveAsPng('lastName', './img/');
    //create image for age
    $img->createImage($ageString);
    $img->saveAsPng('ageString', './img/');
}

?>

<!doctype html>
<html lang="en-US">
<?php require('./templates/head.php'); ?>

<body>
    <?php require_once('./templates/mainNav.php'); ?>
    <div class="jumbotron jumbotron-fluid jumbotron-special">
        <!-- jumbotron used to introduce the page of results from the form -->
        <div class="container">
            <h1 class="display-4">Done!</h1>
            <p class="lead">You can see now how fantastic is to automatically calculate the complex algorith to obtain your age.</p>
        </div>
    </div><!-- end of jumbotron -->

    <!-- this section will be rendered if the graphics library gd is loaded in the php installation -->
    <?php
    if ($GDLOADED) {
    ?>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <!-- carrousel item with the first name -->
                <div class="carousel-item active" data-interval="">
                    <img src="./img/firstName.png" class="d-block w-100" alt="<?php echo $firstNames[0]; ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Your first name</h5>
                        <p><?php echo $firstNames[0]; ?></p>
                    </div>
                </div>
                <!-- carrousel item with the last name -->
                <div class="carousel-item" data-interval="">
                    <img src="./img/lastName.png" class="d-block w-100" alt="<?php echo $lastNames[0]; ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Your last name</h5>
                        <p><?php echo $lastNames[0]; ?></p>
                    </div>
                </div>
                <!-- carrousel item with the age string -->
                <div class="carousel-item" data-interval="">
                    <img src="./img/ageString.png" class="d-block w-100" alt="<?php echo $ageString; ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Your age!</h5>
                        <p><?php echo $ageString; ?></p>
                    </div>
                </div>
            </div><!-- end of carousel-inner -->
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- carouselExampleCaptions -->
    <?php //end of the conditional rendering for the carrousel
    } else {
    ?>
        <!-- beginning of render in the case there is no gd library installed -->
        <div class="accordion" id="accordionExample">
            <!-- first item of the accordion -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Click here to see your first name
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php echo $firstNames[0]; ?>
                    </div>
                </div>
            </div>
            <!-- second item of the accordion -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Click here to see your last name
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php echo $lastNames[0]; ?>
                    </div>
                </div>
            </div>
            <!-- third item of the accordion -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Click here to finally see your age!
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <?php echo $ageString; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    // loads the html code for the foot area, with calls to js code
    // from bootstrap and specific for the web page
    // used to facilitate maintenance of code that
    // appears as the same in multiple pages
    ?> <?php require_once('./templates/foot.php'); ?>
</body>

</html>