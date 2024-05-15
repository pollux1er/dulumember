<?php 
//cho basename($_SERVER['PHP_SELF']);

?>

<nav class="navbar shadow">
        <div class="container">
            <div class="navbar-menu">
                <div class="navbar-start bottomNav ">
                    <a class="navbar-item <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo "is-active"; ?>" href="index.php">
                        <i class="fa fa-tachometer-alt"></i>&nbsp; Tableau de Bord</a>
                    <a class="navbar-item <?php if(basename($_SERVER['PHP_SELF']) == 'invitations.php') echo "is-active"; ?>" href="invitations.php">
                        <i class="fa fa-list"></i>&nbsp; Invitations</a>
                    <a class="navbar-item" href="#">
                        <i class="fa fa-shopping-cart"></i>
                        </i>&nbsp; Commander</a>
                    <a class="navbar-item <?php if(basename($_SERVER['PHP_SELF']) == 'arbre.php') echo "is-active"; ?>" href="arbre.php">
                        <i class="fa fa-shopping-cart"></i>
                        </i>&nbsp; Mon Arbre</a>
                    <!--<a class="navbar-item" href="#">
                        <i class="fa fa-star"></i>&nbsp; Upgrade</a>-->
                    <a class="navbar-item" href="#">
                        <i class="fa fa-list"></i>&nbsp; Mes commandes</a>
                    <a class="navbar-item <?php if(basename($_SERVER['PHP_SELF']) == 'parametres.php') echo "is-active"; ?>" href="parametres.php">
                        <i class="fa fa-cog"></i>&nbsp; Paramètres</a>
                </div>
                <div class="navbar-end">
                    <a class="navbar-item" href="#">
                        <i class="fa fa-sign-out"></i>&nbsp; Logout</a>
                </div>
            </div>
        </div>
    </nav>