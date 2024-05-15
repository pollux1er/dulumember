<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MyDULU WEAR - Dashboard</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css'>
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="css/arbre.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- Check out the dark themed version on my github: https://github.com/emkelley -->


<body>
    <nav class="navbar topNav">
        <div class="container ">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://ericmkelley.com">
                    MyDULU WEAR
                </a>
                <div class="navbar-burger burger" data-target="">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a class="" href="#">
                                <i class="fa fa-user-circle"></i>
                            </a>
                            <span>Megan Smith</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <?php 
    include '_includes/menu.php';
    ?>
    <div class="container">
        <div class="tree">
            <ul>
                <li>
                    <a href="#">Parent</a>
                    <ul>
                        <li>
                            <a href="#">Child</a>
                            <ul>
                                <li>
                                    <a href="#">Grand Child</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Child</a>
                            <ul>
                                <li><a href="#">Grand Child</a></li>
                                <li>
                                    <a href="#">Grand Child</a>
                                    <ul>
                                        <li>
                                            <a href="#">Great Grand Child</a>
                                        </li>
                                        <li>
                                            <a href="#">Great Grand Child</a>
                                        </li>
                                        <li>
                                            <a href="#">Great Grand Child</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Grand Child</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
