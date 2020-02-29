<?php 
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
	echo mysqli_error($connection);
}
$select_db = mysqli_select_db($connection, 'easy');
if (!$select_db){
	die("Database Selection Failed" . mysqli_error($connection));
}
mysqli_query($connection,"SET NAMES 'utf8'");
mysqli_query($connection,"SET CHARACTER SET utf8");
mysqli_query($connection,"SET SESSION collation_connection = 'utf8_unicode_ci'");
function redirect($url)
{
    if (!headers_sent())
    {    
        header('Location: '.$url);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}
?>