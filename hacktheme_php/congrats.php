<?php
session_start();
$tf=$_SESSION['tf'];
//echo $tf;

?>
<html>
<head>

	 <link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
</head>
<body style="background-image: url(../images/hack_bg.jpg);background-size:cover;">
 <h3 class="col-md-4 col-md-offset-4"style="color:white;font-family:OCR A Std;margin-top:220px;">Congratulation, You have selected <span style=" color:red"><?php echo $tf;?></span> as your theme.
  <script>var delay = 10000;
   setTimeout(function(){ window.location = "../indexfinal.html"; }, delay);</script>
</body>
</html>
