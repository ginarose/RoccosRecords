<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="jquerymobile_theme/themes/roccos_records.min.css" />
<link rel="stylesheet" href="jquerymobile_theme/themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile.structure-1.4.3.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>
<link rel="stylesheet" href="assets/css/styling.css" />

<script src="swipebox/lib/jquery-2.0.3.js"></script>
<script src="swipebox/src/js/jquery.swipebox.js"></script>
<link rel="stylesheet" href="swipebox/src/css/swipebox.css">
 
	<meta charset="UTF-8">
	<title>Rocco's Records</title>
</head>

<!-- HOMEPAGE -->
<div data-role="page" data-theme="a" id="home">

	<div data-role="header" role="banner">
		<img src="assets/logo.png" alt="Rocco's Records logo" class="header-image">
		<h1>Rocco's Records</h1>
	</div><!-- /header -->

	<div data-role="navbar">
	<ul>
		<li><a href="#home" class="ui-btn-active">Home</a></li>
		<li><a href="#about">About</a></li>
		<li><a href="#gallery">Gallery</a></li>
		<li><a href="#events">Events</a></li>
		<li><a href="#contact">Contact</a></li>
	</ul>
	</div><!-- /navbar -->

	<div data-role="content">	
		<h2>Welcome to Rocco's Records!</h2>
		<p>Here at Rocco's we spin nothing but the latest and greatest (and okay, maybe some old jams too) and have the lowest prices in town. We pride ourself on customer service and fair prices. Since our records fly off the shelves, we don't have an online catalog, but feel free to contact us to ask about your favorite album and check if it's in stock.</p>

		<p><a href="#about">Learn More...</a></p>	
	</div><!-- /content -->

	<div data-role="footer">
		<h4>&copy; 2004 - 2014, Rocco Romaine. All Rights Reserved.</h4>
	</div><!-- /footer -->
</div><!-- /page -->


<!-- About page -->
<div data-role="page" id="about">

	<div data-role="header">
		<img src="assets/logo.png" alt="Rocco's Records logo" class="header-image">
		<h1>About Rocco's</h1>
	</div><!-- /header -->

	<div data-role="navbar">
	<ul>
		<li><a href="#home">Home</a></li>
		<li><a href="#about" class="ui-btn-active">About</a></li>
		<li><a href="#gallery">Gallery</a></li>
		<li><a href="#events">Events</a></li>
		<li><a href="#contact">Contact</a></li>
	</ul>
	</div><!-- /navbar -->

	<div data-role="content">	
		<h2>More about Rocco's</h2>
		<p>Rocco's was started in 2004 by our very own Rocco Romaine. A Florida native with a passion for music, Rocco wanted to keep the local scene alive and opened up Rocco's Records as a place for bands to play for the musically appreciative residents of Winter Park, FL.</p>	
		<p>Today, Rocco not only manages the "Live Jive Corner," a section of Rocco's Records where bands still come to play their melodies, but he has successfully offered a consignment system for records.</p>
		<p></p>

		<p><a href="#home">Back Home</a></p>	
	</div><!-- /content -->

	<div data-role="footer">
		<h4>&copy; 2004 - 2014, Rocco Romaine. All Rights Reserved.</h4>
	</div><!-- /footer -->
</div><!-- /page -->

<!-- Gallery page -->
<div data-role="page" id="gallery">

	<div data-role="header">
		<img src="assets/logo.png" alt="Rocco's Records logo" class="header-image">
		<h1>Take a peek</h1>
	</div><!-- /header -->

	<div data-role="navbar">
	<ul>
		<li><a href="#home">Home</a></li>
		<li><a href="#about">About</a></li>
		<li><a href="#gallery" class="ui-btn-active">Gallery</a></li>
		<li><a href="#events">Events</a></li>
		<li><a href="#contact">Contact</a></li>
	</ul>
	</div><!-- /navbar -->

	<div data-role="content">	
		<h2>Ever wonder what we look like?</h2>
		<p>
			<a href="assets/gallery/1.jpg" class="swipebox" title="My Caption"><img src="assets/gallery/thumbs/1.jpg" alt="image"></a>
			<a href="assets/gallery/2.jpg" class="swipebox" title="My Caption"><img src="assets/gallery/thumbs/2.jpg" alt="image"></a>
			<a href="assets/gallery/3.jpg" class="swipebox" title="My Caption"><img src="assets/gallery/thumbs/3.jpg" alt="image"></a>
			<a href="assets/gallery/4.jpg" class="swipebox" title="My Caption"><img src="assets/gallery/thumbs/4.jpg" alt="image"></a>
			<a href="assets/gallery/5.jpg" class="swipebox" title="My Caption"><img src="assets/gallery/thumbs/5.jpg" alt="image"></a>
			<a href="assets/gallery/6.jpg" class="swipebox" title="My Caption"><img src="assets/gallery/thumbs/6.jpg" alt="image"></a>
			<a href="assets/gallery/7.jpg" class="swipebox" title="My Caption"><img src="assets/gallery/thumbs/7.jpg" alt="image"></a>
		</p>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>&copy; 2004 - 2014, Rocco Romaine. All Rights Reserved.</h4>
	</div><!-- /footer -->
</div><!-- /page -->


<script type="text/javascript">
;( function( $ ) {

	$( '.swipebox' ).swipebox();

} )( jQuery );
</script>

</body>
</html>
