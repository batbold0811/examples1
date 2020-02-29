<?php 
// Check if the form is submitted 
if ( isset( $_POST['submit'] ) ) { // retrieve the form data by using the element's name attributes value as key 
	$mytext = $_POST['mytext'];
	$num = $_POST['num'];

	foreach ($mytext as $key => $value) {
		print($value.":".$num[$key]."<br/>");
	}
  	
} 


?>