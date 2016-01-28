<!doctype html>
<html lang="de">
<head>

<link rel="stylesheet" href="https://arset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<title>FIRST TEST APP</title>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="Steuerung.php">Steuerung</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" style="margin-top:50px;">

      <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>

<?php
echo "<pre>";
echo "Hallo IP: ".$_SERVER['REMOTE_ADDR']."\n" ;
echo "IP Proxy: ".$_SERVER['HTTP_X_FORWARDED_FOR']."\n";
echo "Browser Info:".$_SERVER['HTTP_USER_AGENT'];
echo "</pre>";

echo "Mein name ist: ".$_GET['variable'].'<br />';
echo "Mein Formular Name ist: ". $_POST['name']."<br />";
echo "Lebenslauf: <br /><pre>".$_POST['lebenslauf']."</pre><br />";

function D($a,$b,$c){
        return pow($b,2)-4*$a*$c;
}

function x1x2($a,$b,$c){
        return array(
                round((-$b+pow(D($a,$b,$c),1/2))/(2*$a),2),
                round((-$b-pow(D($a,$b,$c),1/2))/(2*$a),2)
        );
}


 ?>
<hr />
<form action="" method="POST" >
<br />
<select><option>test1</option><option>test2</option></select><br />
<input type="checkbox" name="agb" /> check2 <br />
<br />
<strong>Passwort:</strong><br />
<input type="password" name="pwd" /> <br />
<hr />
<input type="submit" /> <br />
</form>


      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>

