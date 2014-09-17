<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Restfull CRM</title>
        <link href="../common/css/bootstrap.css" rel="stylesheet">
        <link href="../common/css/bootstrap-theme.min.css" rel="stylesheet">
          
    </head>

    <body ng-app="CRM">



        <div class="container" ng-view>

        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="../common/js/jquery.js"></script>
        <script src="../common/js/bootstrap.min.js"></script>
		 <script src="../common/js/angular/angular.min.js"></script>
		 <script src="../common/js/angular/angular-route.min.js"></script>
        <script src="app.js"></script>
		<script src="client/js/controller/WelcomeCtrl.js"></script>
    </body>
</html>

