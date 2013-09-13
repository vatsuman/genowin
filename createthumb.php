<?php 
if(isset($_REQUEST['width']) && $_REQUEST['width'] != ''){
	        $width = $_REQUEST['width'];
	    }else {
	        $width = '170';
	    }
	 
	    if(isset($_REQUEST['height']) && $_REQUEST['height'] != ''){
	        $height = $_REQUEST['height'];
	    }else {
	        $height = '';
	    }
	 
	    if($height == ''){
	        if(isset($_REQUEST['path']) && $_REQUEST['path'] != ''){
	            header('Content-Type: image/jpeg');
	            include('resizeimageclass.php');
	            $image = new ResizeImage ();
	            $image->load($_REQUEST['path']);
	            $image->resizeToWidth($width);
	            $image->output();
	        }
	    }else if($height != ''){
	        if(isset($_REQUEST['path']) && $_REQUEST['path'] != ''){
	            header('Content-Type: image/jpeg');
	            include('resizeimageclass.php');
	            $image = new ResizeImage ();
	            $image->load($_REQUEST['path']);
	            $image->resize($width, $height);
	            $image->output();
	        }
	    }
		?>