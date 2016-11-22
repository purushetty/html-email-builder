<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HTML Email Builder Tool</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script> 
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<script type="text/javascript">
tinymce.init({
    selector: "textarea",
	menubar: false,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
</head>

<body>
<form name="EBT" method="post" action="generate-mod.php" enctype="multipart/form-data">
<div id="wrapper">

<div class="aligncenter">
<div class="blue">
<h3>HTML Email Builder Tool</h3>
</div>
</div>

<div class="whitespace"></div>

<fieldset>
<div class="one-full">
<label for="logo"><h4>Logo</h4></label>
</div>
<div class="one-third">
<input type="checkbox" name="logo" id="logo" value="logo">
</div>
<div class="two-third">
<img src="images/logo.JPG" width="153" height="43" alt="Intel Security Logo">
</div>

<div class="clear"></div>

<div id="logo-input" style="display:none;">
<div class="one-third">
<label for="log-img"><input type="radio" name="logo-slct" id="logo-slct-1">&nbsp;Upload Logo</label>
</div>
<div class="two-third">
<label class="upload-text"><input type="file" name="logo-img" id="logo-img" placeholder="Logo Image Upload" value="logo-file">109(W) x 30(H), .jpg / .png format</label>
</div>

<div class="clear"></div>

<div class="one-third">&nbsp;</div>
<div class="two-third">
<input type="text" name="logo-image-alt" id="logo-image-alt" placeholder="Image Alt Text">
<input type="text" name="logo-image-tl" id="logo-image-tl" placeholder="Image Title Text">
</div>

<div class="clear"></div>

<div class="one-third">
<label><input type="radio" name="logo-slct" id="logo-slct-2" value="logo-current">&nbsp;Use Intel Security Logo</label>
</div>
</div>
</fieldset>

<fieldset>
<div class="one-full">
<label for="sal>"><h4>Banner</h4></label>
</div>

<div class="one-third">
<label for="banner"></label>
<input type="checkbox" name="banner" id="banner" value="banner">
</div>

<div class="two-third">
<img src="images/banner.JPG" width="450" height="35">
</div>

<div class="clear"></div>

<div id="banner-input" style="display:none;">

<div class="one-third">
<label class="upload-text"><input type="file" name="banner-img" id="banner-img" placeholder="Banner Image Upload">600(W) x 150(H), .jpg / .png format</label>
</div>

<div class="two-third aligncenter">
<input type="text" name="logo-image-alt" id="logo-image-alt" placeholder="Image Alt Text">
<input type="text" name="logo-image-tl" id="logo-image-tl" placeholder="Image Title Text">
</div>

</div>

</fieldset>

<fieldset>
<div class="one-full">
<label for="sal>"><h4>Intro Section</h4></label>
</div>

<div class="one-third">
<label for="banner"></label>
<input type="checkbox" name="intro" id="intro" value="intro">
</div>

<div class="two-third">
<img src="images/Intro.JPG" width="450" height="130">
</div>

<div class="clear"></div>

<div id="intro-text" style="display:none;">
<fieldset>
<legend class="speaker-head">Intro Section</legend>
<div class="one-third">
Intro Text
</div>
<div class="two-third">
<input type="text" name="intro-sal" id="intro-sal" placeholder="Dear FirstName">
</div>

<div class="clear">&nbsp;</div>
<div class="one-third">&nbsp;</div>
<div class="two-third">
<textarea name="content" style="width:100%">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
</textarea>
</div>

<div class="clear"></div>

<div class="one-third">
Button
</div>

<div class="two-third">
<input type="text" name="intro-url" id="intro-url" placeholder="Enter URL">
<input type="text" name="intro-text" id="intro-text" placeholder="Button Text">
</div>

</fieldset>
</div>
</fieldset>

<fieldset>
<div class="one-full">
<label for="speakers"><h4>Number of Speakers - Choose One Of The Options From Below</h4></label>
</div>
<div class="one-third">
<label>
<input type="radio" name="speakers" id="spk4" value="4">&nbsp;4 Speakers</label>
</div>
<div class="two-third">
<img src="images/4-speakers.JPG" width="446" height="200" alt="4 speakers">
</div>

<div class="clearfix"></div>

<div id="speaker-group-4" style="display:none;">
<fieldset>
<legend class="speaker-head">Speaker Info - From Left to Right</legend>
<div class="one-third">
<label class="upload-text"><input type="file" name="spk4-4-img" id="spk4-4-img" placeholder="Speaker 4 Image">70(W) x 78(H) pixels, .jpg / .png format</label>
</div>
<div class="two-third aligncenter">
<input type="text" name="alt-text-4-1" id="alt-text-4-1" placeholder="Image Alt Text">
<input type="text" name="tl-text-4-1" id="tl-text-4-1" placeholder="Image Title Text">
</div>

<div class="clear"></div>

<div class="one-third">&nbsp;</div>

<div class="two-third aligncenter">
<input type="text" name="s4n1" id="s4n1" placeholder="Speaker 1 Name">
<input type="text" name="s4d1" id="s4d1" placeholder="Speaker 1 Designation">
</div>

<div class="clear"></div>

<div class="one-third">
<label class="upload-text"><input type="file" name="spk4-3-img" id="spk4-3-img" placeholder="Speaker 2 Image"> 70(W) x 78(H) pixels, .jpg / .png format</label>
</div>
<div class="two-third aligncenter">
<input type="text" name="alt-text-4-2" id="alt-text-4-2" placeholder="Image Alt Text">
<input type="text" name="tl-text-4-2" id="tl-text-4-2" placeholder="Image Title Text">
</div>

<div class="clear"></div>

<div class="one-third">&nbsp;</div>
<div class="two-third aligncenter">
<input type="text" name="s4n2" id="s4n2" placeholder="Speaker 2 Name">
<input type="text" name="s4d2" id="s4d2" placeholder="Speaker 2 Designation">
</div>

<div class="clear"></div>

<div class="one-third">
<label class="upload-text"><input type="file" name="spk4-2-img" id="spk4-2-img" placeholder="Speaker 3 Image"> 70(W) x 78(H) pixels, .jpg / .png format</label>
</div>

<div class="two-third aligncenter">
<input type="text" name="alt-text-4-3" id="alt-text-4-3" placeholder="Image Alt Text">
<input type="text" name="tl-text-4-3" id="tl-text-4-3" placeholder="Image Title Text">
</div>

<div class="clear"></div>

<div class="one-third">&nbsp;</div>
<div class="two-third aligncenter">
<input type="text" name="s4n3" id="s4n3" placeholder="Speaker 3 Name">
<input type="text" name="s4d3" id="s4d3" placeholder="Speaker 3 Designation">
</div>

<div class="clear"></div>

<div class="one-third">
<label class="upload-text"><input type="file" name="spk4-1-img" id="spk4-1-img" placeholder="Speaker 4 Image"> 70(W) x 78(H) pixels, .jpg / .png format</label>
</div>

<div class="two-third aligncenter">
<input type="text" name="alt-text-4-4" id="alt-text-4-4" placeholder="Image Alt Text">
<input type="text" name="tl-text-4-4" id="tl-text-4-4" placeholder="Image Title Text">
</div>

<div class="clear"></div>

<div class="one-third">&nbsp;</div>

<div class="two-third aligncenter">
<input type="text" name="s4n4" id="s4n4" placeholder="Speaker 4 Name">
<input type="text" name="s4d4" id="s4d4" placeholder="Speaker 4 Designation">
</div>

</fieldset>
</div>

<div class="clear"></div>

<div class="one-third">
<label>
<input type="radio" name="speakers" id="spk3" value="3">&nbsp;3 Speakers</label>
</div>
<div class="two-third">
<img src="images/3-speakers.JPG" width="462" height="200" alt="3 speakers">
</div>

<div class="clear"></div>

<div id="speaker-group-3" style="display:none;">
<fieldset>
<legend class="speaker-head">Speaker Info - Left To Right</legend>

<div class="one-third">
<label class="upload-text"><input type="file" name="spk3-3-img" id="spk3-3-img" placeholder="Speaker 3 Image"> 70(W) x 78(H) pixels, .jpg / .png format</label>
</div>

<div class="two-third aligncenter">
<input type="text" name="alt-text-3-1" id="alt-text-3-1" placeholder="Image Alt Text">
<input type="text" name="tl-text-3-1" id="tl-text-3-1" placeholder="Image Title Text">
</div>

<div class="clear"></div>

<div class="one-third">&nbsp;</div>

<div class="two-third aligncenter">
<input type="text" name="s3n1" id="s3n1" placeholder="Speaker 1 Name">
<input type="text" name="s3d1" id="s3d1" placeholder="Speaker 1 Designation">
</div>

<div class="clear"></div>

<div class="one-third">
<label class="upload-text"><input type="file" name="spk3-2-img" id="spk3-2-img" placeholder="Speaker 2 Image"> 70(W) x 78(H) pixels, .jpg / .png format</label>
</div>

<div class="two-third aligncenter">
<input type="text" name="alt-text-3-2" id="alt-text-3-2" placeholder="Image Alt Text">
<input type="text" name="tl-text-3-2" id="tl-text-3-2" placeholder="Image Title Text">
</div>

<div class="clear"></div>

<div class="one-third">&nbsp;</div>
<div class="two-third aligncenter">
<input type="text" name="s3n2" id="s3n2" placeholder="Speaker 2 Name">
<input type="text" name="s3d2" id="s3d2" placeholder="Speaker 2 Designation">
</div>

<div class="clear"></div>

<div class="one-third">
<label class="upload-text"><input type="file" name="spk3-1-img" id="spk3-1-img" placeholder="Speaker 1 Image"> 70(W) x 78(H) pixels, .jpg / .png format</label>
</div>

<div class="two-third aligncenter">
<input type="text" name="alt-text-3-3" id="alt-text-3-3" placeholder="Image Alt Text">
<input type="text" name="tl-text-3-3" id="tl-text-3-3" placeholder="Image Title Text">
</div>

<div class="clear"></div>

<div class="one-third">&nbsp;</div>
<div class="two-third aligncenter">
<input type="text" name="s3n3" id="s3n3" placeholder="Speaker 1 Name">
<input type="text" name="s3d3" id="s3d3" placeholder="Speaker 1 Designation">
</div>

</fieldset>
</div>

<div class="clear"></div>

<div class="one-third">
<label>
<input type="radio" name="speakers" id="spk2" value="2">&nbsp;2 Speakers</label>
</div>
<div class="two-third">
<img src="images/2-speakers.JPG" width="423" height="200" alt="2 speakers">
</div>

<div class="clear"></div>

<div id="speaker-group-2" style="display:none;">
<fieldset>
<legend class="speaker-head">Speaker Info - From Left to Right</legend>

<div class="one-third">
<label class="upload-text"><input type="file" name="spk2-2-img" id="spk-2-img" placeholder="Speaker 1 Image"> 70(W) x 78(H) pixels, .jpg / .png format</label>
</div>

<div class="two-third aligncenter">
<input type="text" name="alt-text-2-1" id="alt-text-2-1" placeholder="Image Alt Text">
<input type="text" name="tl-text-2-1" id="tl-text-2-1" placeholder="Image Title Text">
</div>

<div class="clear"></div>

<div class="one-third">&nbsp;</div>
<div class="two-third aligncenter">
<input type="text" name="s2n1" id="s2n1" placeholder="Speaker 1 Name">
<input type="text" name="s2d1" id="s2d1" placeholder="Speaker 1 Designation">
</div>

<div class="clear"></div>

<div class="one-third">
<label class="upload-text"><input type="file" name="spk2-1-img" id="spk2-1-img" placeholder="Speaker 2 Image"> 70(W) x 78(H) pixels, .jpg / .png format</label>
</div>

<div class="two-third aligncenter">
<input type="text" name="alt-text-2-2" id="alt-text-2-2" placeholder="Image Alt Text">
<input type="text" name="tl-text-2-2" id="tl-text-2-2" placeholder="Image Title Text">
</div>

<div class="clear"></div>

<div class="one-third">&nbsp;</div>
<div class="two-third aligncenter">
<input type="text" name="s2n2" id="s2n2" placeholder="Speaker 2 Name">
<input type="text" name="s2d2" id="s2d2" placeholder="Speaker 2 Designation">
</div>

<div class="clear"></div>

</fieldset>
</div>

<div class="one-third">
<label>
<input type="radio" name="speakers" id="skip-speakers" value="">&nbsp;Skip This Section</label>
</div>

</fieldset>

<fieldset>
<div class="one-full">
<label for="venues"><h4>Venues</h4></label>
</div>

<div class="one-third">
<input type="checkbox" name="venues" id="venues">
</div>

<div class="two-third">
<img src="images/venue.JPG" width="400" height="187" alt="Venue">
</div>

<div class="clear"></div>

<div id="venue-1" style="display:none;">
<fieldset>
<legend class="speaker-head">Venue 1 Details</legend>

<div class="one-third">
<label><input type="file" name="venue-1-img" id="venue-1-img" placeholder="Venue 1 Image"></label>
</div>

<div class="two-third aligncenter">
<input type="text" name="venue-1-image-alt" id="venue-1-image-alt" placeholder="Image Alt Text">
<input type="text" name="venue-1-image-tl" id="venue-1-image-tl" placeholder="Image Title Text">
</div>

<div class="clear"></div>

<div class="one-full">
<div class="one-half">
<label for="city1">
<input type="text" name="city1" id="city1" placeholder="City"></label>
</div>

<div class="one-half">
<label for="date1">
<input type="text" name="date1" id="date1" class="datepicker" placeholder="Date"></label>
</div>
</div>

<div class="clear"></div>

<div class="one-full">
<div class="one-half">
<label for="time-s1">
<input type="text" name="time-s1" id="time-s1" placeholder="Start Time">&nbsp;&nbsp;
<select name="am-pm-1">
<option value="am">AM</option>
<option value="pm">PM</option>
</select>
</label>
</div>

<div class="one-half">
<label for="time-e2">
<input type="text" name="time-e1" id="time-e1" placeholder="End Time">&nbsp;&nbsp;
<select name="am-pm-2">
<option value="am">AM</option>
<option value="pm">PM</option>
</select>
</label>
</div>
</div>

<div class="clear"></div>

<div class="one-full">
<label for="address1">
Address&nbsp;<textarea name="address1" id="address1" rows="4" cols="10">
<span id="venue-1-loc">Crown Melbourne<br>
8 Whiteman St, <br>
Southbank VIC 3006</span>
</textarea>
</label>
</div>

<div class="clear"></div>
</fieldset>

<fieldset>
<legend class="speaker-head">Venue 2 Details</legend>

<div class="one-third">
<label><input type="file" name="venue-2-img" id="venue-2-img" placeholder="Venue 2 Image"></label>
</div>

<div class="two-third aligncenter">
<input type="text" name="venue-2-image-alt" id="venue-2-image-alt" placeholder="Image Alt Text">
<input type="text" name="venue-2-image-tl" id="venue-2-image-tl" placeholder="Image Title Text">
</div>

<div class="clear"></div>

<div class="one-full">
<div class="one-half">
<label for="city2">
<input type="text" name="city2" id="city2" placeholder="City"></label>
</div>

<div class="one-half">
<label for="date2">
<input type="text" name="date2" id="date2" class="datepicker" placeholder="Date"></label>
</div>
</div>

<div class="clear"></div>

<div class="one-full">
<div class="one-half">
<label for="time-s2">
<input type="text" name="time-s2" id="time-s2" placeholder="Start Time">
<select name="am-pm-3">
<option value="am">AM</option>
<option value="pm">PM</option>
</select>
</label>
</div>
<div class="one-half">
<label for="time-e2">
<input type="text" name="time-e2" id="time-e2" placeholder="End Time">
<select name="am-pm-4">
<option value="am">AM</option>
<option value="pm">PM</option>
</select>
</label>
</div>
</div>

<div class="clear"></div>

<div class="one-full">
<label for="address1">
<textarea name="address2" id="address2" rows="4" cols="10">
<span id="venue-2-loc">The Establishment Hotel<br>
252 George Street, <br>
Sydney NSW 2000</span></textarea>
</label>
</div>

</fieldset>
</div>
</fieldset>

<fieldset>
<div class="one-full">
<label for="venues"><h4>Event Details - Choose one of the following</h4></label>
</div>

<div class="one-third">
<input type="radio" name="event-d" id="event-d-1" value="ed-bullets">
</div>

<div class="two-third">
<img src="images/event-with-bullets.JPG" width="450" height="165" alt="Event Details">
</div>

<div class="clear"></div>

<div id="event-input-1" style="display:none;">
<fieldset>
<legend class="speaker-head">Event Data - Bullet List</legend>
<div class="one-third">
<label><input type="file" name="event-1-img" id="event-1-img" placeholder="Event Image"></label>
</div>

<div class="two-third aligncenter">
<input type="text" name="event-1-image-alt" id="event-1-image-alt" placeholder="Image Alt Text">
<input type="text" name="event-1-image-tl" id="event-1-image-tl" placeholder="Image Title Text">
</div>

<div class="clear"></div>

<div class="one-full">
<label for="evnt-1">
<input type="text" name="evnt-1" id="evnt-1" placeholder="Event Title" size="80"></label>
</div>

<div class="clear"></div>

<div class="one-full">
<div class="one-half">
<label for="evnt-bull-1">
<input type="text" name="evnt-bull-1" id="evnt-bull-1" placeholder="Bullet #1"></label>
</div>

<div class="one-half">
<label for="evnt-bull-2">
<input type="text" name="evnt-bull-2" id="evnt-bull-2" placeholder="Bullet #2"></label>
</div>
</div>

<div class="clear"></div>

<div class="one-full">
<div class="one-half">
<label for="evnt-bull-3">
<input type="text" name="evnt-bull-3" id="evnt-bull-3" placeholder="Bullet #3"></label>
</div>

<div class="one-half">
<label for="evnt-bull-4">
<input type="text" name="evnt-bull-4" id="evnt-bull-4" placeholder="Bullet #4"></label>
</div>
</div>

<div class="clear"></div>
</fieldset>
</div>

<div class="one-third">
<input type="radio" name="event-d" id="event-d-2" value="ed-right">
</div>

<div class="two-third">
<img src="images/event-details.JPG" width="450" height="153" alt="Event Details">
</div>

<div class="clear"></div>

<div id="event-input-2" style="display:none;">
<fieldset>
<legend class="speaker-head">Event Data - Image Right Aligned</legend>
<div class="one-third">
<label><input type="file" name="event-2-img" id="event-2-img" placeholder="Event Image"></label>
</div>

<div class="two-third aligncenter">
<input type="text" name="event-2-image-alt" id="event-2-image-alt" placeholder="Image Alt Text">
<input type="text" name="event-2-image-tl" id="event-2-image-tl" placeholder="Image Title Text">
</div>

<div class="clear"></div>

<div class="two-third">
<label for="evnt-2-tl">
<input type="text" name="evnt-2-tl" id="evnt-2-tl" placeholder="Event Title" size="50"></label>
</div>

<div class="one-third">
<label for="evnt-2-date">
<input type="text" name="event-2-date" id="evnt-2-date" placeholder="Pick The Date" class="datepicker"></label>
</div>

<div class="clear"></div>

<div class="one-full">
<label for="evnt-2-time">
Details&nbsp;<textarea name="evnt-2-dtl" id="evnt-2-dtl" style="width:50%">
<span style="color:#bf1c36;"><strong>Date:</strong></span> Tuesday, 18 November 2014<br />
                                      <span style="color:#bf1c36;"><strong> Time: </strong></span>5:45pm arrival for 6:00pm start. Roundtable dinner will be followed by networking drinks, from 8:00pm onwards. <br />
                                      <span style="color:#bf1c36;"><strong> Venue: </strong></span>Papa Goose, 91 Flinders Lane, Melbourne
                                    </textarea></label>
</div>

<div class="clear"></div>

<div class="one-full">
<label for="evnt-2-venue">
Description&nbsp;<textarea name="evnt-2-desc" id="evnt-2-venue" style="width:50%">at gravida. Integer euismod id elit non scelerisque. Sed maximus pretium leo, quis mollis ligula. Nullam bibendum leo ut dui.</textarea></label>
</div>

</fieldset>
</div>

<div class="clear"></div>

<div class="one-third">
<lable>
<input type="radio" name="event-d" id="event-d-skip" value="ed-none">
Skip This Section
</div>

</fieldset>

<fieldset>
<div class="one-full">
<label for="two-column"><h4>Template Selection</h4></label>
</div>
<div class="one-third">
<input type="checkbox" name="two-column" id="two-column" value="2-column">&nbsp;2 Column Template
</div>

<div class="two-third">
<img src="images/two-column-template.JPG" width="450" height="535" alt="Two Column Template">
</div>
</fieldset>

<fieldset>
<div class="one-full">
<label for="two-column"><h4>Call To Action</h4></label>
</div>

<div class="one-third">
<input type="checkbox" name="cta" id="cta" value="cta">
</div>

<div class="two-third">
<img src="images/call-to-action.JPG" width="450" height="150" alt="Call To Action">

</div>

<div id="cta-input" style="display:none;">
<div class="one-third">Heading</div>

<div class="two-third">
<input type="text" name="cta-head" id="cta-head" placeholder="Heading or Call To Action - all titles must be red" size="60">
</div>

<div class="one-third">Description</div>

<div class="two-third" id="cta-desc">
<textarea name="cta-desc" style="width:100%">Lorem ipsum dolor sit amet</textarea>
</div>

<div class="clear"></div>

<div class="one-third">Button</div>
<div class="two-third">
<input type="text" name="cta-url" id="cta-url" placeholder="Button Url">
<input type="text" name="cta-text" id="cta-text" placeholder="Download">
</div>


</div>

</fieldset>

<fieldset>
<div class="one-full">
<label for="signoff"><h4>Single Column Signoff</h4></label>
</div>
<div class="one-third">
<input type="checkbox" name="signoff" id="signoff" value="signoff">
</div>

<div class="two-third">
<img src="images/closing-text.JPG" width="450" height="122" alt="Single Column Signoff">
</div>

<div id="signoff-input" style="display:none;">
<div class="one-third">Signoff Text</div>

<div class="two-third">
<textarea name="signoff-text" style="width:100%">

<table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidthinner" id="signoff-blk">
                        <tbody>
                          <!-- Spacing -->
                          <!-- content -->
                          <tr>
                            <td style="font-family: Verdana, Arial; font-size: 13px; color: #666666; text-align:left;line-height: 18px;" st-content="rightimage-paragraph">
                              We look forward to seeing you on 18 November to celebrate the 25th anniversary of the firewall.<br /><br />
                              Yours sincerely,<br /><br />
                            </td>
                          </tr>
                          
                          <tr>
                            <td style="font-family: Verdana, Arial; font-size: 13px; color: #666666; text-align:left;line-height: 18px;" st-content="rightimage-paragraph">
                              <strong>Keith Buckley </strong>  <br />
                              Managing Director Australia and New Zealand     <br />
                              McAfee. Part of Intel Security  <br />
                            </td>
                          </tr>
                          <!-- end of content -->
                          <!-- Spacing -->
                          <tr>
                            <td width="100%" height="10"></td>
                          </tr>
                          <!-- button -->
                          <!-- Spacing -->
                          <tr>
                            <td width="100%" height="20"></td>
                          </tr>
                          <!-- Spacing -->
                        </tbody>
                      </table>

</textarea>
</div>
</div>

</fieldset>

<fieldset>
<div class="one-full">
<label for="footer"><h4>Footer</h4></label>
</div>

<div class="one-third">
<input type="checkbox" name="footer" id="footer" value="footer">
</div>

<div class="two-third">
<img src="images/footer.JPG" width="450" height="29" alt="Footer">
</div>
</fieldset>

<fieldset>
<div class="one-full alignleft">
<input type="submit" name="Submit" id="Submit" value="Submit">
<input type="reset" name="reset">
<input type="hidden" name="hidd" id="hidd" value="hidd">
</div>
</fieldset>

</div>

</form>
</body>
</html>