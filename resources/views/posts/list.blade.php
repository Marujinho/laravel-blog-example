<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app/libs/materialize/icon.css">
    <link rel="stylesheet" href="app/libs/materialize/materialize.min.css">
    <link rel="stylesheet" href="app/libs/materialize/fonts.css">
    <link rel="stylesheet" href="app/partilheMKT.css">

    <script src="app/libs/materialize/materialize.min.js"></script>
    <script src="app/libs/jquery/jquery-3.3.1.min.js"></script>
    <script src="app/libs/angular/angular.min.js"></script>
    <script src="app/libs/angular/angular-ui-router.min.js"></script>
    <script src="app/app.js"></script>
    <script src="app/partilheMKT.js"></script>



    <title>Partilhe MKT</title>
</head>

<body ng-app="partilheMKT">

    <ul id="dropdown1" class="dropdown-content">
        <li>
            <a href="#!">one</a>
        </li>
        <li>
            <a href="#!">two</a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#!">three</a>
        </li>
    </ul>
    <nav class="nav navbar-fixed ">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">
                <img src="app/imagens/logo.png" width="150px;">
            </a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a href="#">Sass</a>
                </li>
                <li>
                    <a href="#">Components</a>
                </li>
                <!-- Dropdown Trigger -->
                <li>
                    <a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h3>TITLE HEADING</h3>
                <h5>Title description, Dec 7, 2017</h5>
               <!--  <div class="fakeimg" style="height:200px;"><img class="responsive-img" src="app/imagens/spiderman.jpg"></div> -->
                <!-- <p>Some text..</p> -->
            </div>
            <div class="card">
                <h3>TITLE HEADING</h3>
                <h5>Title description, Sep 2, 2017</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Some text..</p>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h3>About Me</h3>
                <div class="fakeimg" style="height:100px;">Image</div>
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
            </div>
            <div class="card">
                <h3>Popular Post</h3>
                <div class="fakeimg">Image</div>
                <br>
                <div class="fakeimg">Image</div>
                <br>
                <div class="fakeimg">Image</div>
            </div>
            <div class="card">
                <h3>Siga-me</h3>
                <p>Some text..</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <h3>Footer</h3>
    </div>
</body>

</html>