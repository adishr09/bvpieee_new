<html style="overflow-x:hidden;">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1""> 
		<title>BVPIEEE | Passion To Perfection</title>
		<link rel="stylesheet" href="http://www.bvpieee.com/css/body.css" type="text/css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://www.bvpieee.com/js/jquery.fittext.js"></script>
		<script>
			jQuery("#responsive_headline").fitText();
		</script>
	</head>
<?php include ("header/header.php"); ?>
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
			<h1>Fervour- Annual Technical and Managerial fest 
			</h1>
		<div style="width:40%;float:left"><img src="img/f.jpg" height="400" style="text-align:center"/>
		</div>
		<div style="width:59%;float:left">Amid much fanfare, BVPIEEE, the IEEE Student Branch of Bharati Vidyapeeth’s College of Engineering, conducted the 7th Edition of its annual technical and managerial festival, FERVOUR, on 16th April. The festival, taking on the unique theme of ‘Live Your Reality In The 
'Virtual World’ this year, was attended by students from colleges all over Delhi besides the students of BVCOE.  <br/><br/>
The event opened with a grand ceremony that was presided by distinguished faculty- Principal Dr. Dharmender Saini, Vice Principal Dr. Sunil K. Singh, Dr. Vanita Jain, H.O.D., IT Department and Branch Counselor of BVP-ISTE, and Prof. Rahul Bahl, IT Department and Branch Counselor of BVPIEEE. After the fest was declared open, 18 events were conducted at Fervour ’14, encompassing a plethora of domains- technical, managerial and literary to name a few. The flagship event, titled ‘National Student Symposium’, was a huge success with students from all over Delhi presenting their technical papers. All the events presented ultimate challenges to the students, be it the coding event ‘Run For Your Code’ or the war of bots , ‘Sumobotics’ or the gaming challenge, ‘Full Throttle’! The tradition of quizzing in BVPIEEE continued in Fervour, with two quizzing events being held besides the brainstorming events like ‘I’m Feeling Lucky’ and the extempore-speaking ‘JAM.COMM’. We even had something for the football enthusiasts- Futsal! </div>

<p>
<br/><br/>The event opened with a grand ceremony that was presided by distinguished faculty- Principal Dr. Dharmender Saini, Vice Principal Dr. Sunil K. Singh, Dr. Vanita Jain, H.O.D., IT Department and Branch Counselor of BVP-ISTE, and Prof. Rahul Bahl, IT Department and Branch Counselor of BVPIEEE. After the fest was declared open, 18 events were conducted at Fervour ’14, encompassing a plethora of domains- technical, managerial and literary to name a few. The flagship event, titled ‘National Student Symposium’, was a huge success with students from all over Delhi presenting their technical papers. All the events presented ultimate challenges to the students, be it the coding event ‘Run For Your Code’ or the war of bots , ‘Sumobotics’ or the gaming challenge, ‘Full Throttle’! The tradition of quizzing in BVPIEEE continued in Fervour, with two quizzing events being held besides the brainstorming events like ‘I’m Feeling Lucky’ and the extempore-speaking ‘JAM.COMM’. We even had something for the football enthusiasts- Futsal!  <br/><br/>
Coding, Robotics, Extempore, Brainstorming, Gaming, Mock Stock, Quizzes, Football- Fervour ’14 combined them all! Prizes worth 7 Lakhs were won. The eventful day ended with a closing ceremony fitting of the grand festival where the long going tradition of cake cutting was observed. The whole event was a huge success where innovation met fun and the combination of those two proved to be a truly enriching learning experience for all those involved in the festival. 
</p>
		</div>
		<?php include("right.php");?>
	</div>
	<div id="left_f" style="border-radius:50px 50px 0 0;background:rgba(236, 236, 236, 1);">
		<p style="float:left;">BVPIEEE | Passion To Perfection</p>
		<p style="float:right; display:inline;">Keep In Touch
		</p>
	</div>
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