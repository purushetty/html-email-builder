<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email Template Selector</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<!-- <script src="js/custom.js" type="text/javascript"></script> -->
</head>

<body>
<form name="EBT" method="post" action="generate.php">
<div id="wrapper">

<div class="aligncenter">
<div class="blue">
<h3>HTML Email  Template Selector Tool</h3>
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

<!-- <div id="speaker-group-4" style="display:none;">
<fieldset>
<legend>Speaker Info</legend>
<div class="one-full">
<h6>From Left to Right</h6>
</div>
<div class="one-third">
<label>Speaker 1</label>
</div>

<div class="two-third">
<label for="s4n1">
Name&nbsp;&nbsp;<input type="text" name="s4n1" id="s4n1" placeholder="Name"></label>
<label for="s4d1">
Designation&nbsp;&nbsp;<input type="text" name="s4d1" id="s4d1" placeholder="Designation"></label>
</div>

<div class="one-third">
<label>Speaker 2</label>
</div>

<div class="two-third">
<label for="s4n2">
Name&nbsp;&nbsp;<input type="text" name="s4n2" id="s4n2" placeholder="Name"></label>
<label for="s4d2">
Designation&nbsp;&nbsp;<input type="text" name="s4d2" id="s4d2" placeholder="Designation"></label>
</div>

<div class="one-third">
<label>Speaker 3</label>
</div>

<div class="two-third">
<label for="s4n3">
Name&nbsp;&nbsp;<input type="text" name="s4n3" id="s4n3" placeholder="Name"></label>
<label for="s4d3">
Designation&nbsp;&nbsp;<input type="text" name="s4d3" id="s4d3" placeholder="Designation"></label>
</div>

<div class="one-third">
<label>Speaker 4</label>
</div>

<div class="two-third">
<label for="s4n4">
Name&nbsp;&nbsp;<input type="text" name="s4n4" id="s4n4" placeholder="Name"></label>
<label for="s4d4">
Designation&nbsp;&nbsp;<input type="text" name="s4d4" id="s4d4" placeholder="Designation"></label>
</div>

<div class="one-third">
<input type="button" name="btn-spk4" id="btn-spk4" value="Submit">&nbsp;
<input type="reset" name="res-spk4" id="res-spk4" value="Cancel">
<input type="hidden" name="spk4-h" value="spk4-h">
</div>

</fieldset>
</div> -->

<div class="one-third">
<label>
<input type="radio" name="speakers" id="spk3" value="3">&nbsp;3 Speakers</label>
</div>
<div class="two-third">
<img src="images/3-speakers.JPG" width="462" height="200" alt="3 speakers">
</div>

<div id="speaker-group-3" style="display:none;">
<fieldset>
<legend>Speaker Info</legend>
<div class="one-full">
<h6>From Left to Right</h6>
</div>

<div class="one-third">
<label>Speaker 1</label>
</div>

<div class="two-third">
<label for="s3n1">
Name&nbsp;&nbsp;<input type="text" name="s3n1" id="s3n1" placeholder="Name"></label>
<label for="s3d1">
Designation&nbsp;&nbsp;<input type="text" name="s3d1" id="s3d1" placeholder="Designation"></label>
</div>

<div class="one-third">
<label>Speaker 2</label>
</div>

<div class="two-third">
<label for="s3n2">
Name&nbsp;&nbsp;<input type="text" name="s3n2" id="s3n2" placeholder="Name"></label>
<label for="s3d2">
Designation&nbsp;&nbsp;<input type="text" name="s3d2" id="s3d2" placeholder="Designation"></label>
</div>

<div class="one-third">
<label>Speaker 3</label>
</div>

<div class="two-third">
<label for="s3n3">
Name&nbsp;&nbsp;<input type="text" name="s3n3" id="s3n3" placeholder="Name"></label>
<label for="s3d3">
Designation&nbsp;&nbsp;<input type="text" name="s3d3" id="s3d3" placeholder="Designation"></label>
</div>

<div class="one-third">
<input type="button" name="btn-spk3" id="btn-spk3" value="Submit">&nbsp;
<input type="reset" name="res-spk3" id="res-spk3" value="Cancel">
<input type="hidden" name="spk3-h" value="spk3-h">
</div>

</fieldset>
</div>

<div class="one-third">
<label>
<input type="radio" name="speakers" id="spk2" value="2">&nbsp;2 Speakers</label>
</div>
<div class="two-third">
<img src="images/2-speakers.JPG" width="423" height="200" alt="2 speakers">
</div>

<div id="speaker-group-2" style="display:none;">
<fieldset>
<legend>Speaker Info</legend>
<div class="one-full">
<h6>From Left to Right</h6>
</div>
<div class="one-third">
<label>Speaker 1</label>
</div>

<div class="two-third">
<label for="s2n1">
Name&nbsp;&nbsp;<input type="text" name="s2n1" id="s2n1" placeholder="Name"></label>
<label for="s2d1">
Designation&nbsp;&nbsp;<input type="text" name="s2d1" id="s2d1" placeholder="Designation"></label>
</div>

<div class="one-third">
<label>Speaker 2</label>
</div>

<div class="two-third">
<label for="s2n2">
Name&nbsp;&nbsp;<input type="text" name="s2n2" id="s2n2" placeholder="Name"></label>
<label for="s2d2">
Designation&nbsp;&nbsp;<input type="text" name="s2d2" id="s2d2" placeholder="Designation"></label>
</div>

<div class="one-third">
<input type="button" name="btn-spk2" id="btn-spk2" value="Submit">&nbsp;
<input type="reset" name="res-spk2" id="res-spk2" value="Cancel">
<input type="hidden" name="spk2-h" value="spk2-h">
</div>

</fieldset>
</div>

<div class="one-third">
<label>
<input type="radio" name="speakers" value="">&nbsp;Skip This Section</label>
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
</fieldset>

<fieldset>
<div class="one-full">
<label for="venues"><h4>Event Details - Choose one of the following</h4></label>
</div>

<div class="one-third">
<input type="radio" name="event-d" value="ed-bullets">
</div>

<div class="two-third">
<img src="images/event-with-bullets.JPG" width="450" height="165" alt="Event Details">
</div>

<div class="one-third">
<input type="radio" name="event-d" value="ed-right">
</div>

<div class="two-third">
<img src="images/event-details.JPG" width="450" height="153" alt="Event Details">
</div>

<div class="one-third">
<lable>
<input type="radio" name="event-d" value="ed-none">
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