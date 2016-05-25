<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Apache & Mysql</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="./css/bootstrap.css" media="screen">
  <link rel="stylesheet" href="./css/custom.min.css">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
  <script src="../bower_components/respond/dest/respond.min.js"></script>
  <![endif]-->
  <script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-23019901-1']);
    _gaq.push(['_setDomainName', "bootswatch.com"]);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</head>
<body>
  <div class="container">
    <h1>Apache & Mysql</h1>
    <?php
    try {
      $db = new PDO('mysql:host=db;dbname=web_db', 'root', '');
      //Connection OK
      echo '
      <div class="alert alert-dismissible alert-success">
      <strong>Connected to Database ! :]</strong></a>
      </div>
      ';
    } catch (Exception $e) {

      //Connection failed
      echo '
      <div class="alert alert-dismissible alert-danger">
      <strong>Connection failed</strong></a>.
      </div>
      ';
    }
    ?>

    <footer></footer>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./css/bootstrap.min.js"></script>
    <script src="./css/custom.js"></script>
    </html>
  </body>
