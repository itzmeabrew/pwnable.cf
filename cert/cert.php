<?php 

$u = $_POST['name'];

if ($u != '') {
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Pwnable</title>
  <link rel="stylesheet" type="text/css" href="hacker.css">
</head>
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://pwnable.cf/">&nbsp&nbspPwnable.cf</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">How to save<span class="caret"></span> </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>* Click on print page in the options menu or press 
                            Ctrl+P.</li>
                            <br>
                            <li>* Click on 'more settings' and disble 'header and footer'. Change layout to landscape if you wish.</li><br>
                            <li>* Click on save as PDF.</li><br>
                            <li>* Any changes done to this certificate or its misuse will not be the responsibility of the site owner.</li>
                        </ul>
                    </li>
                    
                    
                </ul>
            </div>
        </div>
    </nav>
<body ><br><br><br><br>
  <div class="container">
    <br>
    <div class="well" style="top:0;right:0;left:0;bottom:0;margin:auto;width: 90%;">
                    <form class="form-horizontal" action="processs.php" method="POST">
                        <fieldset>
                            <legend style="text-align: center;">Certificate of Completion</legend><br><br>
                            <span class="help-block" style="text-align: center;font-size: 30;">This is to certify that Pwnable user</span>


                            <span class="help-block" style="text-align: center;font-size: 2.2em;"><u><?php echo $u;  ?></u></span>

                             <span class="help-block" style="text-align: center;font-size: 30;">has sucessfully completed all sections and levels of Pwnable.cf on 	</span><span class="help-block" style="text-align: center;font-size: 10pt;"  id="ndate"></span>
                            <br><br><br><br><br><br>
                           
                            <br>
                            <span class="help-block">Signed*</span>
                            <span class="help-block">Admin, Pwnable.cf</span>
                             <span class="help-block" style="text-align: center;font-size: 0.5em;">*Any changes made to this certificate or its misuse will not be the responsibility of the site owner.</span> </fieldset>
                    </form>
                </div>
            </div>
  </div><br><br><br>
  <script>
var d = new Date();
document.getElementById("ndate").innerHTML = d.toDateString();
</script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>





<?php
}
else {
	header('location:/cert.html');
	# code...
}
 ?>