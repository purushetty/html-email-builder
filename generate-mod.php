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
<title>HTML Email Builder Tool</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

<?php
if(isset($_POST['hidd']) && !empty($_POST['hidd']))
{	
unset($_POST['Submit']);
unset($_POST['hidd']);

/* echo '<pre>';
print_r($_POST);
echo '</pre>'; */

include_once('simplehtmldom_1_5/simple_html_dom.php');

$code = file_get_html('parent_template.html', $use_include_path = false, $context=null, $offset = -1, $maxLen=-1, $lowercase = true, $forceTagsClosed=true, $target_charset = DEFAULT_TARGET_CHARSET, $stripRN=false, $defaultBRText=DEFAULT_BR_TEXT);

$temp = $code;

foreach($_POST as $key => $val)
{
	switch($key) {
		
		case 'banner':
			$temp = $filefunc->modify_img($code->find('img[id=banner-header-main]'), $_FILES['banner-img'], $_POST['logo-image-alt'], $_POST['logo-image-tl'], $temp, 'banner'); 		 
		
		 case 'intro':
			$temp = $filefunc->block_replace($code->find('span[id=1_col_intro_sal_text]'), trim($_POST['intro-sal']), $temp, 'in'); 		 
			$temp = $filefunc->block_replace($code->find('span[id=1_col_intro_desc]'), trim($_POST['content']), $temp, 'in'); 
			$temp = $filefunc->modify_url($code->find('a[id=1_col_intro_btn]'), $_POST['intro-url'], $temp);				
			$temp = $filefunc->speaker_text($code->find('a[id=1_col_intro_btn]'), '1_col_intro_btn', $_POST['intro-text'], $temp);					
			break;	
							
		case 'speakers':
			if($val == 4)
			{
				$temp = $filefunc->div_delete($code->find('div[id=3_speaker], div[id=2_speaker], div[id=seperator_a3s], div[id=seperator_a2s]'), $temp);

				$temp = $filefunc->modify_img($code->find('img[id=spk_4_1]'), $_FILES['spk4-4-img'], $_POST['alt-text-4-1'], $_POST['tl-text-4-1'], $temp, 'speakers'); 				
				$temp = $filefunc->modify_img($code->find('img[id=spk_4_2]'), $_FILES['spk4-3-img'], $_POST['alt-text-4-2'], $_POST['tl-text-4-2'], $temp, 'speakers'); 				
				$temp = $filefunc->modify_img($code->find('img[id=spk_4_3]'), $_FILES['spk4-2-img'], $_POST['alt-text-4-3'], $_POST['tl-text-4-3'], $temp, 'speakers'); 												
				$temp = $filefunc->modify_img($code->find('img[id=spk_4_4]'), $_FILES['spk4-1-img'], $_POST['alt-text-4-4'], $_POST['tl-text-4-4'], $temp, 'speakers'); 				
								
				$temp = $filefunc->speaker_text($code->find('span[id=4_4_col_speaker_name]'), '4_4_col_speaker_name',  $_POST['s4n1'], $temp);
				$temp = $filefunc->speaker_text($code->find('span[id=4_4_col_speaker_title]'), '4_4_col_speaker_title', $_POST['s4d1'], $temp);				
				$temp = $filefunc->speaker_text($code->find('span[id=4_3_col_speaker_name]'), '4_3_col_speaker_name',  $_POST['s4n2'], $temp);
				$temp = $filefunc->speaker_text($code->find('span[id=4_3_col_speaker_title]'), '4_3_col_speaker_title', $_POST['s4d2'], $temp);								
				$temp = $filefunc->speaker_text($code->find('span[id=4_2_col_speaker_name]'), '4_2_col_speaker_name',  $_POST['s4n3'], $temp);
				$temp = $filefunc->speaker_text($code->find('span[id=4_2_col_speaker_title]'), '4_2_col_speaker_title', $_POST['s4d3'], $temp);								
				$temp = $filefunc->speaker_text($code->find('span[id=4_1_col_speaker_name]'), '4_1_col_speaker_name',  $_POST['s4n4'], $temp);				
				$temp = $filefunc->speaker_text($code->find('span[id=4_1_col_speaker_title]'), '4_1_col_speaker_title', $_POST['s4d4'], $temp);
			}
			else if($val == 3)
			{
				$temp = $filefunc->div_delete($code->find('div[id=4_speaker], div[id=2_speaker], div[id=seperator_a4s], div[id=seperator_a2s]'), $temp);
				
				$temp = $filefunc->modify_img($code->find('img[id=spk_3_1]'), $_FILES['spk3-3-img'], $_POST['alt-text-3-1'], $_POST['tl-text-3-1'], $temp, 'speakers'); 				
				$temp = $filefunc->modify_img($code->find('img[id=spk_3_2]'), $_FILES['spk3-2-img'], $_POST['alt-text-3-2'], $_POST['tl-text-3-2'], $temp, 'speakers'); 				
				$temp = $filefunc->modify_img($code->find('img[id=spk_3_3]'), $_FILES['spk3-1-img'], $_POST['alt-text-3-3'], $_POST['tl-text-3-3'], $temp, 'speakers'); 												
				
			}
			else if($val == 2)
			{
				$temp = $filefunc->div_delete($code->find('div[id=4_speaker], div[id=3_speaker], div[id=seperator_a4s], div[id=seperator_a3s]'), $temp);
				
				$temp = $filefunc->modify_img($code->find('img[id=spk_2_1]'), $_FILES['spk3-2-img'], $_POST['alt-text-2-1'], $_POST['tl-text-2-1'], $temp, 'speakers'); 				
				$temp = $filefunc->modify_img($code->find('img[id=spk_2_2]'), $_FILES['spk3-1-img'], $_POST['alt-text-2-2'], $_POST['tl-text-2-2'], $temp, 'speakers'); 				
				
			}
			break;

		case 'event-d':
			if($val == 'ed-bullets')
			{
				$temp = $filefunc->modify_img($code->find('img[id=one_third_column_bullets_img]'), $_FILES['event-1-img'], $_POST['event-1-image-alt'], $_POST['event-1-image-tl'], $temp, 'event');
				$temp = $filefunc->div_delete($code->find('div[id=one_third_column_right], div[id=seperator_acr]'), $temp);				
				$temp = $filefunc->speaker_text($code->find('td[event-title-details]'), 'event-title-details', $_POST['evnt-1'], $temp);											
				$temp = $filefunc->speaker_text($code->find('td[id=1_3_bullets_1]'), '1_3_bullets_1', $_POST['evnt-bull-1'], $temp);							
				$temp = $filefunc->speaker_text($code->find('td[id=1_3_bullets_2]'), '1_3_bullets_2', $_POST['evnt-bull-2'], $temp);			
				$temp = $filefunc->speaker_text($code->find('td[id=1_3_bullets_3]'), '1_3_bullets_3', $_POST['evnt-bull-3'], $temp, 'in');							
				$temp = $filefunc->speaker_text($code->find('td[id=1_3_bullets_4]'), '1_3_bullets_4', $_POST['evnt-bull-4'], $temp, 'in');							
			}
			else
			{
			    $temp = $filefunc->modify_img($code->find('img[id=one_third_column_right_img]'), $_FILES['event-2-img'], $_POST['event-2-image-alt'], $_POST['event-2-image-tl'], $temp, 'event');
				$temp = $filefunc->div_delete($code->find('div[id=one_third_column_bullets], div[id=seperator_aedb]'), $temp);	
				$temp = $filefunc->block_replace($code->find('td[id=event-2-details]'), $_POST['evnt-2-dtl'], $temp, 'in');
				$temp = $filefunc->block_replace($code->find('td[id=event-2-desc]'), $_POST['evnt-2-desc'], $temp, 'in'); 
			}		
			break;
			
		case 'venues':		
			// Venue 1 Details
			$temp = $filefunc->modify_img($code->find('img[id=2_col_venue_1]'), $_FILES['venue-1-img'], $_POST['venue-1-image-alt'], $_POST['venue-1-image-tl'], $temp, 'venue'); 		 			
			$temp = $filefunc->speaker_text($code->find('td[st-title=2coltitle1]'), '2coltitle1',  $_POST['city1'], $temp);			
			$temp = $filefunc->speaker_text($code->find('span[id=venue-1-date]'), 'venue-1-date',  $filefunc->date_adapter($_POST['date1']), $temp);			
			$temp = $filefunc->speaker_text($code->find('span[id=venue-1-time]'), 'venue-1-time',  $filefunc->time_adapter($_POST['time-s1'], $_POST['am-pm-1'], $_POST['time-e1'], $_POST['am-pm-2']), $temp);			
			$temp = $filefunc->speaker_text($code->find('span[id=venue-1-loc]'), 'venue-1-loc',  trim($_POST['address1']), $temp);			
				
			// Venue 2 Details
			$temp = $filefunc->modify_img($code->find('img[id=2_col_venue_2]'), $_FILES['venue-2-img'], $_POST['venue-2-image-alt'], $_POST['venue-2-image-tl'], $temp, 'venue');
			$temp = $filefunc->speaker_text($code->find('td[st-title=2coltitle2]'), '2coltitle2',  $_POST['city2'], $temp);			
			$temp = $filefunc->speaker_text($code->find('span[id=venue-2-date]'), 'venue-2-date',  $filefunc->date_adapter($_POST['date2']), $temp);			
			$temp = $filefunc->speaker_text($code->find('span[id=venue-2-time]'), 'venue-2-time',  $filefunc->time_adapter($_POST['time-s2'], $_POST['am-pm-3'], $_POST['time-e2'], $_POST['am-pm-4']), $temp);			
			$temp = $filefunc->speaker_text($code->find('span[id=venue-2-loc]'), 'venue-2-loc',  $_POST['address2'], $temp);												
			break;
							
		case 'cta':
			$temp = $filefunc->speaker_text($code->find('td[st-title=fulltext-title]'), 'fulltext-title', $_POST['cta-head'], $temp);
			$temp = $filefunc->block_replace($code->find('td[id=cta-para]'), $_POST['cta-desc'], $temp, 'in');
			$temp = $filefunc->modify_url($code->find('a[id=cta-dl]'), $_POST['cta-url'], $temp);				
			$temp = $filefunc->speaker_text($code->find('a[id=cta-dl]'), 'cta-dl', $_POST['cta-text'], $temp);														
			break;			

		case 'signoff':
			 $temp = $filefunc->block_replace($code->find('table[id=signoff-blk]'), $_POST['signoff-text'], $temp, 'blk'); 
			break;	
	}
}

/* if(empty($_POST['ed-bullets']))
{
	$temp = $filefunc->div_delete($code->find('div[id=one_third_column_bullets], div[id=one_third_column_right], div[id=seperator_aedb], div[id=seperator_acr]'), $temp);
} */

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

echo '<form action="main-mod.php" method="post"><input type="submit" name="gbk" id="gbk" value="Back To Main"></form>';
echo '</fieldset></div></div>';
echo '</body></html>'; 
ob_end_flush();
?>
</body>
</html>
<?php
}
else
{
	header("Location:main-mod.php");
	ob_end_clean();
}

?>