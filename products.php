<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Aarneel technocraft Pvt Ltd. </title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Aarneel technocraft Pvt Ltd." />
	<meta name="description" content="Aarneel technocraft Pvt Ltd." />

	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<style type="text/css">a#vlb{display:none}</style>
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<script type="text/javascript" src="engine1/slider.js"></script>
	 
	 
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!-- End W  HEAD section -->
	<script type="text/jscript">
	
	  $("document").ready(function(){
	$("#submit").click(function(){
	var v=$("input:text[name=name]").val();
	var v1=$("input:text[name=email]").val();
	var v2=$("input:text[name=contact]").val();
	 	if(v=='')
		{
		alert("Please enter your Name ");
		return false;
		}
		if(v1=='')
		{
		alert("Please enter your Email ID");
		return false;
		}
		if(v2=='')
		{
		alert("Please enter your Contact Number");
		return false;
		}
		});
	
	});
	</script>
	<style type="text/css">
	p{ font-size:30px;
	text-align:center;}
	</style>
</head>
<body style="background-color:#CAEBF4; width:99%">
<?php include 'header.php';?>
<!-- Start   BODY section -->
<div class="services" style="min-height:600px;">

<div style="margin:30px 30px; border-bottom:3px solid"><h2>Our Products : </h2></div>
<div style="padding:10px; min-height:100px;">
<div style="width:20%; height:80px; border:1px solid #666666; text-shadow:0px 3px 3px #666666; float:left; border-radius:5px;margin-left:10px;">
<p>Street Light</p>
</div>
<div style="width:40%; height:80px; border:1px solid #666666; text-shadow:0px 3px 3px #666666; float:left; border-radius:5px; margin-left:10px;">
<p>Guards rails and Reflector</p>
</div>
<div style="width:35%; height:80px; border:1px solid #666666; text-shadow:0px 3px 3px #666666; float:left; border-radius:5px; margin-left: 10px;">
<p>Shuttering Material</p> 
</div>
</div>


<!-- End  content section -->
</div>
<?php include 'footer.php';?>
    <!-- End  BODY section -->
</body>
</html>