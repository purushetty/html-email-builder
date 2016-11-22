<?php
ob_start();

// Autoload method for including library routines
function __autoload($class_name) {
    include_once('include/'.$class_name.".php");
}

// Instantiate object for code processing
$filefunc = new functions;

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email Template Selector</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

<?php
if(isset($_POST['hidd']) && !empty($_POST['hidd']))
{	
unset($_POST['Submit']);
unset($_POST['hidd']);

include_once('simplehtmldom_1_5/simple_html_dom.php');

$code = file_get_html('parent_template.html', $use_include_path = false, $context=null, $offset = -1, $maxLen=-1, $lowercase = true, $forceTagsClosed=true, $target_charset = DEFAULT_TARGET_CHARSET, $stripRN=false, $defaultBRText=DEFAULT_BR_TEXT);

$temp = $code;

foreach($_POST as $key => $val)
{
	switch($key) {
					
		case 'speakers':
			if($val == 4)
			{
				$temp = $filefunc->div_delete($code->find('div[id=3_speaker], div[id=2_speaker], div[id=seperator_a3s], div[id=seperator_a2s]'), $temp);
			}
			else if($val == 3)
			{
				$temp = $filefunc->div_delete($code->find('div[id=4_speaker], div[id=2_speaker], div[id=seperator_a4s], div[id=seperator_a2s]'), $temp);
			}
			else if($val == 2)
			{
				$temp = $filefunc->div_delete($code->find('div[id=4_speaker], div[id=3_speaker], div[id=seperator_a4s], div[id=seperator_a3s]'), $temp);
			}
			break;

		case 'event-d':
			if($val == 'ed-bullets')
			{
				$temp = $filefunc->div_delete($code->find('div[id=one_third_column_right], div[id=seperator_acr]'), $temp);				
			}
			else
			{
				$temp = $filefunc->div_delete($code->find('div[id=one_third_column_bullets], div[id=seperator_aedb]'), $temp);	
			}		
			break;

	}
}

if(empty($_POST['ed-bullets']))
{
	$temp = $filefunc->div_delete($code->find('div[id=one_third_column_bullets], div[id=one_third_column_right], div[id=seperator_aedb], div[id=seperator_acr]'), $temp);
}

if(empty($_POST['speakers']))
{
	$temp = $filefunc->div_delete($code->find('div[id=4_speaker], div[id=3_speaker], div[id=2_speaker], div[id=seperator_a4s], div[id=seperator_a3s], div[id=seperator_a2s]'), $temp);
}

if(!isset($_POST['event-d']) && empty($_POST['event-d']))
{
	$temp = $filefunc->div_delete($code->find('div[id=one_third_column_bullets], div[id=one_third_column_right], div[id=seperator_acr],div[id=seperator_aedb]'), $temp);
}

if(!isset($_POST['logo']) && empty($_POST['logo']))
{
	$temp = $filefunc->div_delete($code->find('div[id=Header_logo], div[id=spacer_ah]'), $temp);		
}

if(!isset($_POST['banner']) && empty($_POST['banner']))
{
	$temp = $filefunc->div_delete($code->find('div[id=Header_banner]'), $temp);		
}

if(!isset($_POST['intro']) && empty($_POST['intro']))
{
	$temp = $filefunc->div_delete($code->find('div[id=1_col], div[id=seperator_ai]'), $temp);		
}

if(!isset($_POST['venues']) && empty($_POST['venues']))
{
	$temp = $filefunc->div_delete($code->find('div[id=2_col_venue], div[id=seperator_a2v]'), $temp);		
}

if(!isset($_POST['two-column']) && empty($_POST['two-column']))
{
	$temp = $filefunc->div_delete($code->find('div[id=2_column_webinar]'), $temp);		
}

if(!isset($_POST['cta']) && empty($_POST['cta']))
{
	$temp = $filefunc->div_delete($code->find('div[id=1_column_callOut]'), $temp);		
}

if(!isset($_POST['footer']) && empty($_POST['footer']))
{
	$temp = $filefunc->div_delete($code->find('div[id=footer]'), $temp);		
}

//echo $temp;

$filefunc->filename = 'output/'.'output_'.date('Y-m-d').' '.date('H:i:s', time()).'.html';
$filefunc->mess = $filefunc->file_html($temp);

echo '<div id="wrapper"><div class="aligncenter"><fieldset>';	

switch($filefunc->mess)
{
		case 'fof':
			echo '<span class="rednbold">File open fail!</span>';
			break;	
		
		case 'fwf':
			echo '<span class="rednbold">File write fail!</span>';
			break;	
	
		case 'nw':
			echo '<span class="rednbold">File not writeable!</span>';
			break;	

		case 'fws':
			echo '<h4><p>Your template file has been created and ready for download.</p>
			<p>You can <a href="'.$filefunc->filename.'" target="_blank">view</a> it on a browser or right click <a href="'.$filefunc->filename.'" target="_blank">here</a> to download the html template.</p></h4>'
			;     			
			break;
		
		default:
			echo '<span class="rednbold">Something went wrong! Please try again later.</span>';
			break;
}

echo '<form action="main.php"><input type="submit" name="gbk" id="gbk" value="Back To Main"></form>';
echo '</fieldset></div></div>';
echo '</body></html>';
ob_end_flush();
?>

<?php
}
else
{
	header("Location:main.php");
	ob_end_clean();
}

?>