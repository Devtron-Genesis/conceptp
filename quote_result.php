<?php
	
	$base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?');

	if(!empty($_POST)){
		/*header(""Location: ".$base_url."/thank-you");*/
		header("Location: ".$base_url."/quote-request");
	}else{
		header("Location: ".$base_url."/quote-request");
	}
	
	exit;
?>