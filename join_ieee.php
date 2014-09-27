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
			<p><h1>Why Join IEEE?</h1></p>
			<p>IEEE is 125 years old the world’s largest technical society and it’s Student Branches contribute a lot in developing an engineering students personality and technical skills. IEEE offers many exclusive benefits to their members. For a nominal annual membership fee, the benefits are many and varied!</p>
			<ul>
			<li>Technology updates</li>
			<li>Many Technical activities</li>
			<li>Delhi section Quaterly Meets</li>
			<li>All India congress Meets</li>
			<li>IEEE Potential Magazine</li>
			<li>IEEE Spectrum Magazine</li>
			<li>IEEE Email Alias</li>
			<li>Career Alert – newsletter</li>
			</ul>
			<p>IEEE has:</p>
			<ul>
			<li>more than 425,000 members in more than 160 countries, more than 50 percent of whom are from outside the United States</li>
			<li>more than 116,000 Student members</li>
			<li>333 Sections in 10 geographic regions worldwide</li>
			<li>2,195 Chapters that unite local members with similar technical interests</li>
			<li>2,354 student branches at colleges and universities</li>
			<li>800 student branch chapters of IEEE technical societies</li>
			<li>428 affinity groups – IEEE Affinity Groups are non-technical sub-units of one or more Sections or a Council. The Affinity Group patent entities are the IEEE-USA Consultants’ Network, Graduates of the Last Decade (GOLD), Women in Engineering (WIE), and Life Members (LM).</li>
			</ul>
			<p>IEEE:</p>
			<ul>
			<li>has 38 Societies and 7 technical Councils representing the wide range of IEEE technical interests</li>
			<li>has more than 3 million documents in the IEEE Xplore Digital Library, with more than 8 million downloads each month</li>
			<li>has more than 1,400 standards and projects under development</li>
			<li>publishes more than 148 transactions, journals, and magazines</li>
			<li>sponsors more than 1,300 conferences in 80 countries while</li>
			<li>partnering with more than 1,000 non-IEEE entities globally</li>
			<li>attracting more than 400,000 conference attendees</li>
			<li>publishing more than 1,200 conference proceedings via IEEE Xplore.</li>
			</ul>
		</div>
		<?php include("right.php");?>
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