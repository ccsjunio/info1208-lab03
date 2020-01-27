<!-- code for the navigation bar -->
<!-- it is in a separate file in order -->
<!-- to be reusable in multiple pages and -->
<!-- facilitate maintenance -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- the definition of this button will appear only on small width media -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- position of the brand attached to the nav bar -->
    <a class="navbar-brand" href="#"><img src="http://<?php echo _URLBASE; ?>/img/logoCF.png" width="60" alt="CF"></a>

    <!-- navbar that will colapse when the media width become narrow -->
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://fanshawec.ca" target="_blank">Fanshawe College</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">News (soon)</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
        </form>
    </div>
</nav>