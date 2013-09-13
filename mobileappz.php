<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Welcome To Richment Services</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="Copyright" content="Genowin">
<meta name="author" content="Genowin">
<meta name="Publisher" content="genowin">
<meta name="language" content="English">
<meta name="city" content="New Delhi">
<meta name="country" content="India">
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<link rel="stylesheet" href="styles/sidemenu.css" type="text/css" />

</head>
<body id="top">
<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear">    
    <div id="homepage" class="clear">
		<?php include('includes/mobilemenu.php'); ?>
	  
      <!-- ######################################################### -->
      <div class="fl_right">      
        <div id="hpage_latestnews">
			<?php
				$page = $_GET['page'];	/* gets the variable $page */
				switch($page)
				{
					case "iphone": @include('mobileapps/iphone.php');
					break;
					case "ipad": @include('mobileapps/ipad.php');
					break;
					case "android": @include('mobileapps/android.php');
					break;
					case "blackberry": @include('mobileapps/blackberry.php');
					break;
					case "windows": @include('mobileapps/windows.php');
					break;
					case "html5": @include('mobileapps/html5.php');
					break;										
					default:@include('mobileapps/iphone.php');
					break;
				}
				
				/* otherwise, include the default page */
			?>
        </div>
        
      </div>
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<?php include('includes/footer.php'); ?>
</body>
</html>