<!doctype html>
<html lang="de">
<head>

	<link rel="stylesheet" href="https://arset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
    <!-- Bootstrap -->
    <script src="/js/jquery-1.12.0.min.js"></script>

    <script src="/js/bootstrap.min.js"></script>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet">


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
         		 <a class="navbar-brand" href="index.php">Raspi-Kraftwerk</a>
       	</div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"> <a href="Steuerung.php">Steuerung</a></li>
            <li><a href="#contact">Kontakt</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" style="margin-top:50px;">


      <div class="starter-template">
        <h1>Steuerung</h1>
        <p class="lead">Dies ist die Steuerung des Raspi-Kraftwerks.<br> Falls du nicht weißt, was du hier zu suchen hast dann verschwinde.</p>

	<button id="button1" type="button" name="button" value="1" class="btn btn-primary"><span class="glyphicon glyphicon-off"></span> Schalter 1</button>
        <button id="button2" type="button" name="button" value="2"  class="btn btn-primary"><span class="glyphicon glyphicon-off"></span> Schalter 2</button>
	<button id="button3" type="button" name="button" value="3"  class="btn btn-primary"><span class="glyphicon glyphicon-off"></span> Schalter 3</button>
	<button id="button4" type="button" name="button" value="4"  class="btn btn-primary"><span class="glyphicon glyphicon-off"></span> Schalter 4</button>
	
	<button type="button"  name="button" Value="5"  class="btn btn-success"><span class="glyphicon glyphicon-bitcoin" aria-hidden="true"></span> Donate </button>
	<br />
	<br />
	<span id="switch4" class="glyphicon glyphicon-off"></span>
	<span id="switch3" class="glyphicon glyphicon-asterisk"></span>
	<span id="switch2" class="glyphicon glyphicon-off"></span>
	<span id="switch17" class="glyphicon glyphicon-asterisk"></span>
	
      </div>

    </div><!-- /.container -->
	
<script>
function jsdata(){
   $.getJSON("monitor.php", function(data){
                $.each(data, function(key, val) {
                        var cl="glyphicon "+(val==1 ? "glyphicon-off" : "glyphicon-asterisk");
                        $('#'+key).attr("class",cl);
                });
        })
   }

$(document).ready(function(){

   jsdata();

   setInterval(function(){
       jsdata();
   }, 10000);

   $('#button1').click(function(){
       $.ajax({
            url: "controller.php",
            method: "POST",
            data: {button: 1}
       }).done(function(){
            jsdata();
       });
   });
   $('#button2').click(function(){
       $.ajax({
            url: "controller.php",
            method: "POST",
            data: {button: 2}
       }).done(function(){
            jsdata();
       });
   });
   $('#button3').click(function(){
       $.ajax({
            url: "controller.php",
            method: "POST",
            data: {button: 3}
       }).done(function(){
            jsdata();
       });
   });
   $('#button4').click(function(){
       $.ajax({
            url: "controller.php",
            method: "POST",
            data: {button: 4}
       }).done(function(){
            jsdata();
       });
   });

});
 </script>
</body>
</html>


