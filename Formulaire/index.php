<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formulaire</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>


    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <form  method="post" action="insertion.php" id="booking-form" class="booking-form" name="form1" >
            <div align="center"><img class="logo" src="img/example_logo.png" title="Example Logo" alt="Example Logo"></div>
            <div class="h1">Planifiez votre évenement</div>
            <div id="form-message" class="message hide">
                Thank you for your enquiry!
            </div>
            <div id="form-content">

                <div class="group">
                    <label for="name">Nom </label>
                    <div><input id="name" name="name" class="form-control" type="text" placeholder="MARVIN"></div>
                </div>
                <div class="group">
                    <label for="name">Prénom</label>
                    <div><input id="name" name="surname" class="form-control" type="text" placeholder="Martin"></div>
                </div>

                <div class="group">
                    <label for="date-from">Date de votre événement</label>
                    <div class="addon-right">
                        <input id="date-from" name="date-from" class="form-control" type="text">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>

                 <div class="group">
                    <label for="email">Email</label>
                    <div><input id="email" name="email" class="form-control" type="email" placeholder="....@...."></div>
                </div>
                <div class="group">
                    <label for="phone">Numéro de téléphone</label>
                    <div><input id="phone" name="phone" class="form-control" type="text" placeholder="Téléphone"></div>
                </div>

                <div class="group">
                    <label for="date-from">Début de l'événement</label>
                    <div class="addon-right">
                        <input id="date-from" name="date-from" class="form-control" type="text">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
                <div class="group">
                    <label for="date-to">Fin</label>
                    <div class="addon-right">
                        <input id="date-to" name="date-to" class="form-control" type="text">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
                 <div class="group">
                    <label for="invite">Nombre d'invités</label>
                    <div><input id="invite" name="invite" class="form-control" type="number" placeholder="Nombre d'invités"></div>
                </div>
                <div class="group">
                    <label for="special-requirements">Demande spéciale</label>
                    <div><textarea id="special-requirements" name="special-requirements" class="form-control" cols="" rows="5" placeholder="Ajoutez vos suggestions"></textarea></div>
                </div>
                <div class="group submit">
                    <label class="empty"></label>
                    <div><input name="submit" type="submit" value="Envoyer"/></div>
                </div>
            </div>
            <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
        </form>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>     
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
