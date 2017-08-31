<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������һ������������</title>

<link href="../stylesheet/style.css" rel="stylesheet" type="text/css" />
<link href="../stylesheet/easy.css" rel="stylesheet" type="text/css" />
<link href="../stylesheet/easyprint.css" rel="stylesheet" type="text/css" />

<?php
  $ack = "" ;
  if (isset($_REQUEST['email']) )
  {
	  $cname = $_REQUEST['cName'] ;
	  $ename = $_REQUEST['eName'] ;
	  $prefix = $_REQUEST['prefix'] ;
	  $phone = $_REQUEST['phone'] ;
	  $email = $_REQUEST['email'] ;
	  $street = $_REQUEST['street'] ;
	  $city = $_REQUEST['city'] ;
	  $state = $_REQUEST['state'] ;
	  $zip = $_REQUEST['zipcode'] ;
	  $comments = $_REQUEST['comments'] ;
	  $country = $_REQUEST['country'] ;

	  $subject = "join SINO-USA nextGen" ;
	  $message = " Chinese Name: ".$cname." \n English Name: ".$ename." \n Prefix: ".$prefix.
			" \n Phone: ".$phone." \n Email: ".$email." \n Street: ".$street.
			" \n City: ".$city." \n State: ".$state." \n Zip Code: ".$zip.
			" \n Country: ".$country." \n Comment: ".$comments;
	//   mail( "contact@fornextgen.org", "Subject: $subject",
	 mail( "mjylove005@gmail.com", "Subject: $subject",
	  $message, "From: $email " );
	  $ack = "лл�����ں����ǵĹ�ע�����ǽ��ܿ�������ϵ" ;
  }
?>
</head>

<body id="body">
<div id="container" >
<div id="main-content"><img src="../images/slogan.jpg" width="942" height="134"   />
  
  
  <div id="content">
    <p>
    <p><a href="../index.html"><img src="../images/thankyou.jpg" width="792" height="578" /></a>        
    <h1><br>
  
</h1>
  </div>
</div>
</div>
</body>
</html>
<script language="javascript">
	function clearIt()
	{
		document.getElementById("comments").value = "";
	}
</script>
