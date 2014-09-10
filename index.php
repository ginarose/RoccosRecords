<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="jquerymobile_theme/themes/roccos_records.min.css" />
<link rel="stylesheet" href="jquerymobile_theme/themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile.structure-1.4.3.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>
<script src="assets/script.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script src="swipebox/src/js/jquery.swipebox.js"></script>
<link rel="stylesheet" href="swipebox/src/css/swipebox.css">
<link rel="stylesheet" href="assets/css/styling.css" />

 
	<meta charset="UTF-8">
	<title>Rocco's Records</title>
</head>

<!-- HOMEPAGE -->
<div data-role="page" data-theme="a" id="home">

	<div data-role="header" role="banner">
		<img src="assets/logo.png" alt="Rocco's Records logo" class="header-image">
	</div><!-- /header -->

		<div data-role="navbar" data-iconpos="top">
		<ul>
			<li><a href="#home" data-icon="home" class="ui-btn-active">Home</a></li>
			<li><a href="#gallery" data-icon="grid">Gallery</a></li>
			<li><a href="#events" data-icon="calendar">Events</a></li>
		</ul>
		</div><!-- /navbar -->

	<div data-role="content">	
		<div data-role="collapsible" data-collapsed="false">
		    <h4>Welcome to Rocco's Records!</h4>
		    	<p>Here at Rocco's we spin nothing but the latest and greatest (and okay, maybe some old jams too) and have the lowest prices in town. We pride ourself on customer service and fair prices. Since our records fly off the shelves, we don't have an online catalog, but feel free to contact us to ask about your favorite album and check if it's in stock.</p>
		</div>	

		<div data-role="collapsible">
		    <h4>The History of Rocco's</h4>
		    	<p>Rocco's was started in 2004 by our very own Rocco Romaine. A Florida native with a passion for music, Rocco wanted to keep the local scene alive and opened up Rocco's Records as a place for bands to play for the musically appreciative residents of Winter Park, FL.</p>	
				<p>Today, Rocco not only manages the "Live Jive Corner," a section of Rocco's Records where bands still come to play their melodies, but he has successfully offered a consignment system for records.</p>
		</div>

		<div data-role="collapsible" data-collapsed="false">
		    <h4>Contact Us</h4>
		    	<p><a href="tel:555 555 5555" class="ui-btn ui-icon-delete ui-btn-icon-left ui-icon-phone">Call Us! 555-5555</a></p>	
				<p>Today, Rocco not only manages the "Live Jive Corner," a section of Rocco's Records where bands still come to play their melodies, but he has successfully offered a consignment system for records.</p>
		</div>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>&copy; 2004 - 2014, Rocco Romaine. All Rights Reserved.</h4>
	</div><!-- /footer -->
</div><!-- /page -->


<!-- Gallery page -->
<div data-role="page" id="gallery">

	<div data-role="header">
		<img src="assets/logo.png" alt="Rocco's Records logo" class="header-image subpage-header-image">
		<h1 class="subpage-header">Take a peek</h1>
	</div><!-- /header -->

	<div data-role="navbar" data-iconpos="top">
	<ul>
		<li><a href="#home" data-icon="home" >Home</a></li>
		<li><a href="#gallery" data-icon="grid" class="ui-btn-active">Gallery</a></li>
		<li><a href="#events" data-icon="calendar">Events</a></li>
	</ul>
	</div><!-- /navbar -->

	<div data-role="content">	
		<h2>Ever wonder what we look like?</h2>
		<p style="text-align: center;">
			<a href="assets/gallery/1.jpg" class="swipebox" title="My Caption"><img src="assets/gallery/thumbs/1.jpg" class="swipebox-image" alt="image"></a>
			<a href="assets/gallery/2.jpg" class="swipebox" title="My Caption"><img src="assets/gallery/thumbs/2.jpg" class="swipebox-image" alt="image"></a>
			<a href="assets/gallery/3.jpg" class="swipebox" title="My Caption"><img src="assets/gallery/thumbs/3.jpg" class="swipebox-image" alt="image"></a>
			<a href="assets/gallery/4.jpg" class="swipebox" title="My Caption"><img src="assets/gallery/thumbs/4.jpg" class="swipebox-image" alt="image"></a>
			<a href="assets/gallery/5.jpg" class="swipebox" title="My Caption"><img src="assets/gallery/thumbs/5.jpg" class="swipebox-image" alt="image"></a>
			<a href="assets/gallery/6.jpg" class="swipebox" title="My Caption"><img src="assets/gallery/thumbs/6.jpg" class="swipebox-image" alt="image"></a>
			<a href="assets/gallery/7.jpg" class="swipebox" title="My Caption"><img src="assets/gallery/thumbs/7.jpg" class="swipebox-image" alt="image"></a>
		</p>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>&copy; 2004 - 2014, Rocco Romaine. All Rights Reserved.</h4>
	</div><!-- /footer -->
</div><!-- /page -->



<!-- Calendar page -->
<div data-role="page" id="events">

	<div data-role="header">
		<img src="assets/logo.png" alt="Rocco's Records logo" class="header-image subpage-header-image">
		<h1 class="subpage-header">What's on the agenda?</h1>
	</div><!-- /header -->

	<div data-role="navbar" data-iconpos="top">
	<ul>
		<li><a href="#home" data-icon="home" >Home</a></li>
		<li><a href="#gallery" data-icon="grid" >Gallery</a></li>
		<li><a href="#events" data-icon="calendar" class="ui-btn-active">Events</a></li>
	</ul>
	</div><!-- /navbar -->

	<div data-role="content">	
		<h2>Weekly specials include...</h2>
		<form>
		<div class="ui-field-contain">
		    <label for="select-weekly-special" style="display:none;">Select a day of the week</label>
		    <select name="select-weekly-special" data-native-menu="false" id="select-weekly-special">
		        <option value="monday">Monday</option>
		        <option value="tuesday">Tuesday</option>
		        <option value="wednesday">Wednesday</option>
		        <option value="thursday">Thursday</option>
		        <option value="friday">Friday</option>
		        <option value="saturday">Saturday</option>
		        <option value="sunday">Sunday</option>
		    </select>
		    <br/>
		    <p id="weekly-special-text">This is where specials will display</p>
		</div>
		</form>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>&copy; 2004 - 2014, Rocco Romaine. All Rights Reserved.</h4>
	</div><!-- /footer -->
</div><!-- /page -->




<script type="text/javascript">
//swipebox functionality
;( function( $ ) {

	$( '.swipebox' ).swipebox();

} )( jQuery );

</script>

</body>
</html>
