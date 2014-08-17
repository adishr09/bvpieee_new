<html style="overflow-x:hidden;">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1""> 
		<title>BVPIEEE | Passion To Perfection</title>
		<link rel="stylesheet" href="css/body.css" type="text/css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="js/jquery.fittext.js"></script>
		<script>
			jQuery("#responsive_headline").fitText();
		</script>
	</head>
<?php include ("Header/header.php"); ?>
  <script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};	

			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}

			// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
			}
		</script>
<?php include ("Nav_Bar/nav_bar.php"); ?>
<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
		</script>

<div id="wrapper" >
	<div id="container">
		<div id="left">
		<p>  Drishti, a SIG of BVPIEEE conducted a workshop on "Adobe Photoshop" on 13th November, 2013. </p>

<p>The event was hosted by Mr. Mohnish Rajput and Mr. Aryaman Nath. More then 25 students from first, second and third year participated in the workshop. All students were given a brief introduction about the basic precautions and necessary steps while taking a photograph and also how to edit the photos and enhance them using Photoshop. </p>

<p>An overview of basic tools and functions available in photoshop was given and their use was described and practically shown. </p>

<p>The "when, where and how" to use the tools was a cherry on the cake as the step by step way of teaching the photoshop was easy to learn for any amateur.
The workshop ended with query session and participants were enthusiastic for the next workshop to be held. </p>
		</div>
		<div id="right">
			<h3>Recent Events</h3>
			<ul>
			<li>Fervour- Annual Technical and Managerial fest</li>
			<li>GRE/GMAT WORKSHOPS BY PRINCETON REVIEW AND JAMBOOREE </li>
			<li>Lecture on Green IT by Mr.Daman Dev Sood </li>
			<li>GAMMA Orientation</li>
			</ul>
		</div>
		<div id="right">
			<h3>Upcoming Events</h3></br>
			<ul>
			<li>Fresh On Campus</li>
			<li>Equity Research Initiative</li>
			</ul>
		</div>
		<div id="right">
			<h3>Latest Branch News</h3></br>
			<ul>
			<li><a href="http://goo.gl/DR1s1T" style="color:#8a8c7e;">New Member Registrations Open</a></li>
			<li><a href="https://docs.google.com/forms/d/1MMbpG5zG0eWvvex9_Zl3qOoJ4ZBU97pGnBfZYK4YFhI/viewform?c=0&w=1&usp=mail_form_link" style="color:#8a8c7e;">Join BVPIEEE design team</a></li>
			</ul>
		</div>
	</div>
	<?php include ("Footer/footer.php"); ?>
</div>
<script>
$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);
</script>
</html>