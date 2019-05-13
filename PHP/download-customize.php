<?php 
session_start();
if(isset($_SESSION['name_file']))
{
	header("Content-type: Application/octet-stream");
	header("Content-Disposition: attachment; filename={$_SESSION['name_file']}");
	header("Content-Description: Download css generator");
	readfile($_SESSION['name_file']);
	unset($_SESSION['error_input']);
	unset($_SESSION['form_customize']);
	unlink($_SESSION['name_file']);
	unset($_SESSION['name_file']);
}

?>