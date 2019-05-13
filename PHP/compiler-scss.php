<?php
error_reporting(0);
ini_set('display_errors',0);
session_start();
require_once('./config.php');
$_SESSION['error_input']    = 0;
$_SESSION['form_customize'] = $_POST;


//################################### check post #############################
if(in_array('',$_POST))
{
	$_SESSION['error_input'] = 1;
	header("Location: {$base_url}/customize");
	exit();
}
$dev_min           = filter_input(INPUT_POST,'dev_min',FILTER_SANITIZE_STRING);
$c_box             = filter_input(INPUT_POST,'box',FILTER_SANITIZE_STRING);
$mq_medium         = filter_input(INPUT_POST,'media-query-md',FILTER_SANITIZE_STRING);
$mq_large          = filter_input(INPUT_POST,'media-query-lg',FILTER_SANITIZE_STRING);
$mq_super          = filter_input(INPUT_POST,'media-query-sp',FILTER_SANITIZE_STRING);
$mq_mega           = filter_input(INPUT_POST,'media-query-mg',FILTER_SANITIZE_STRING);
$mq_ultra          = filter_input(INPUT_POST,'media-query-ut',FILTER_SANITIZE_STRING);
$padding_box       = filter_input(INPUT_POST,'padding-box',FILTER_SANITIZE_STRING);
$padding_box_in    = filter_input(INPUT_POST,'padding-box-in',FILTER_SANITIZE_STRING);
$transition        = filter_input(INPUT_POST,'transition',FILTER_SANITIZE_STRING);
$transition_time   = filter_input(INPUT_POST,'transition-time',FILTER_SANITIZE_STRING);
$transition_easing = filter_input(INPUT_POST,'transition-easing',FILTER_SANITIZE_STRING);
$overflow          = filter_input(INPUT_POST,'overflow-x',FILTER_SANITIZE_STRING);
$c_Z_index         = filter_input(INPUT_POST,'level-z-index',FILTER_SANITIZE_STRING);

if($dev_min == 'dev'){$wireframe_status = 1;};
if($dev_min == 'min'){$wireframe_status = 0;};

// #############################################################################



//################################### write file #############################
$config_custom = 
'$box:'.$c_box.';
$bp:sm,md,lg,sp,mg,ut;
$mediaQuery:'.$mq_medium.','.$mq_large.','.$mq_super.','.$mq_mega.','.$mq_ultra.';
$mediaQueryMAX:5000px;
$flBoxPadding:'.$padding_box.';
$flBoxPaddingIn:'.$padding_box_in.';
$startFlexWidth:8.333333333;
$transition:1;
$transitionTime:'.$transition_time.';
$transitionEasing:'.$transition_easing.';
$containerOverflowX_hidden:'.$overflow.';
$Z_index:0,'.$c_Z_index.';
$wireframeColor: #333333,indigo,#BBB6FF,#5114E5,#3A8EFF,#C129E9,#2942E9,#FFCC00,#00FFF6;
$wireframeColorLegend: #333333;
$wireframeFlex:  #CCDD22;
$wireframeStatus:'.$wireframe_status.'';
$fpc = fopen('../dev/scss/_config-custom.scss', 'w');
fwrite($fpc, $config_custom);
fclose($fpc);
// #############################################################################


header('Content-type: text/css');
$path    = './lib';
$is_min  = 1;
$dn_file = 0;
$nameFile = "flexo_".uniqid().".css";
require "./lib/scssphp/scss.inc.php";
require_once $path . '/minify/src/Minify.php';
require_once $path . '/minify/src/CSS.php';
require_once $path . '/minify/src/JS.php';
require_once $path . '/minify/src/Exception.php';
require_once $path . '/minify/src/Exceptions/BasicException.php';
require_once $path . '/minify/src/Exceptions/FileImportException.php';
require_once $path . '/minify/src/Exceptions/IOException.php';
require_once $path . '/path-converter/src/ConverterInterface.php';
require_once $path . '/path-converter/src/Converter.php';
use MatthiasMullie\Minify;
$scss = new scssc();
$scss->setImportPaths("../dev/scss/");
$scss_content        = file_get_contents("../dev/scss/flexo.scss");
$scss_content_custom = str_replace('@import "_config.scss";','@import "_config-custom.scss";',$scss_content);




//############################################### scss ###############################################
try 
{
   	$wireframe   = '@include wireframe();';
   	$scss_output = $scss->compile($scss_content_custom);
} 
catch(Exception $e) 
{
   	$_SESSION['error_input'] = 1;
	header("Location: {$base_url}/customize");
	exit();
}

//############################################### scss ###############################################





$CSS = str_replace('/* CSS Document */','/* FLEXO CUSTOM:: Author Davide Martucci */',$scss_output);
if($is_min == 1)
{
	$minifier   = new Minify\CSS();
	$minifier->add($CSS);
	$CSS        = $minifier->minify();
}
$fp = fopen($nameFile, 'w');
fwrite($fp, $CSS);
fclose($fp);
if($fp)
{
	$_SESSION['name_file']   = $nameFile;
	header("Location: {$base_url}/customize");
	
}
