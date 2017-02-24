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
</head>
<body style="background-color:#CAEBF4; width:99%">
<?php include 'header.php';?>
<!-- Start   BODY section -->
<div class="contactus">
<div style="margin:50px 0 0 30px"><img src="images/contact-us-button.png" /></div>
<hr />

<div class="contactus-content">
<div class="aarneel">Aarneel Technocraft Pvt Ltd.</div>
<div class="reachus">Reach Us : </div>

<div class="contact1">
<div style="margin:20px; text-shadow:3px 3px 3px  #CCCCCC;"> <u>Address : </u><br /><br />Plot No-16 Sector-2,<br />
Industrial Area,<br /> Pithampur - 452012
(M.P.) <br /><br />
Email : info@aarneel.com <br /><br />
Visit : http://www.aarneel.com </div>
</div>
<div class="contact2">
<form action="#" method="post">
<div style="margin:20px; text-shadow:3px 3px 3px  #CCCCCC;" > <u>Query : </u></div>
<div style="margin:10px 50px; text-shadow:3px 3px 3px  #CCCCCC;" align="right"> Name : <input type="text" name="name" placeholder="Enter Your Name" id="inp" /></div>
<div style="margin:10px 50px; text-shadow:3px 3px 3px  #CCCCCC;" align="right"> Email ID : <input type="text" name="email" placeholder="Enter Your Email" id="inp" /></div>
<div style="margin:10px 50px; text-shadow:3px 3px 3px  #CCCCCC;" align="right"> Contact No : <input type="text" name="contact" placeholder="Enter Your Contact No" id="inp" /></div>
<div style="margin:10px 50px; text-shadow:3px 3px 3px  #CCCCCC;" align="right"> Message : <textarea name="textarea" style="width:150px;"></textarea> </div>
<div style="margin:10px 50px; text-shadow:3px 3px 3px  #CCCCCC;" align="right"> <input type="submit" id="submit"  name="submit" value="Submit" style="height:30px; width:100px;"/> </div>
</form>
</div>
</div>
</div>
<?php if($_POST)
{
$name= $_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$msg=$_POST['textarea'];

$myemail="samit_holkar@yahoo.com";
$to=$myemail;
$email_subject= "Enquiry from : $name";
$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email \n contact number : \n $contact \n Message \n $msg"; 
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
?>
<script type="text/javascript">
alert(" Thank you. we will get back you soon..! ");
</script>
<?php
}
?>



<?php include 'footer.php';?>
    <!-- End  BODY section -->
</body>
</html>