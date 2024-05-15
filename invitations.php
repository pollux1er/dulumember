<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MyDULU WEAR - Invitations</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css'>
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="css/invitations.css">

</head>
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
    <!-- partial:index.partial.html -->
<div class="container2">
        <div class="container-top">
            <div class="left">
                <h2>Suivie des invitations</h2>
                <p>Vous pouvez envoyer des invitations aussi</p>
            </div>
            <div class="right">
                <button id="createNew">Envoyer</button>
            </div>
        </div>
        <div class="container-body">
            <table id="table">
                <tr>
                  <th>Membre</th>
                  <th>Date</th>
                  <th>Status</th>
                </tr>
                <tr>
                  <td>Frank Demcha</td>
                  <td>20/01/2024</td>
                  <td>En attente de validation admin</td>
                </tr>
                <tr>
                  <td>Vladimir akeben</td>
                  <td>20/04/2024</td>
                  <td>Accepté</td>
                </tr>
                <tr>
                  <td>Hélène Madiba</td>
                  <td>22/04/2024</td>
                  <td>En attente</td>
                </tr>
              </table>
        </div>
    </div>
    <div class="modal" id="modal">
        <div class="modal-container">
            <form id="form" class="form">
                <h2>Envoyer une invitation</h2>
                <div class="form-control">
                    <label for="name">Votre lien</label>
                    <input type="text" id="name" value="http://localhost/dulu/?ref=2365" required disabled>
                </div>
                <!--<div class="form-control">
                    <label for="domain">Domain</label>
                    <input type="number" id="domain" placeholder="Please enter a domain number..." autocomplete="off" required>
                </div>
                <div class="form-control">
                    <label for="status">Status</label>
                    <input type="text" id="status" placeholder="Please enter the status..." autocomplete="off" required>
                </div>-->
                <button type="submit">Copiez le lien</button>
            </form>
        </div>
    </div>
</body>

</html>
<!-- partial -->
  <script  src="./script.js"></script>
  <script  src="js/invitations.js"></script>

</body>
</html>
