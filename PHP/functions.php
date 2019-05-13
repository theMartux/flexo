<?php 

function csz_sess($input)
{
	if(isset($_SESSION['form_customize'][$input]))
	{
		$value_input = $_SESSION['form_customize'][$input];
		echo 'value="'.$value_input.'"';
	}
	else
	{
		return false;
	}
}