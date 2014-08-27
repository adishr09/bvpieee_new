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
		<div id="left" style="overflow:scroll;">
			<p>
				<table class="tab">
				<center><h1>EXECUTIVE COMMITTEE<h1></center>
				<tr><td><img class="team" src="img/team/yamini_jain.png"></td><td>Yamini Jain<br>Chairperson</td></tr>
				<tr><td><img class="team" src="img/team/sanchit_guglani.png"></td><td>Sanchit Guglani<br>Vice-Chairperson</td></tr>
				<tr><td><img class="team" src="img/team/tapan_khattar.png"></td><td>Tapan Khattar<br>Vice-Chairperson</td></tr>
				<tr><td><img class="team" src="img/team/niharika_singh.png"></td><td>Niharika Singh<br>General Secretary</td></tr>
				<tr><td><img class="team" src="img/team/aryaman_nath.png"></td><td>Aryaman Nath<br>Treasurer</td></tr>
				<tr><td><img class="team" src="img/team/prerna_soni.png"></td><td>Prerna Soni<br>Join Secretary</td></tr>
				<tr><td><img class="team" src="img/team/prateek_arora.png"></td><td>Prateek Arora<br>Join Secretary</td></tr>
				</table>
				<table class="tab">
				<center><h1>AUXILIARY TEAM</h1></center>
				<tr><td><img class="team" src="img/team/aditya_sharma.png"></td><td>Aditya Dev Sharma<br>Web Administrator</td></tr>
				<tr><td><img class="team" src="img/team/kunal_sachdeva.png"></td><td>Kunal Sachdeva<br>Web Administrator</td></tr>
				<tr><td><img class="team" src="img/team/priyansh_singh.png"></td><td>Priyansh Singh<br>Head - Technical Affairs</td></tr>
				<tr><td><img class="team" src="img/team/shubham_chugh.png"></td><td>Shubham Chugh<br>Executive - Technical Affairs</td></tr>
				<tr><td><img class="team" src="img/team/udit_khanna.png"></td><td>Udit Khanna<br>Head - Human Resource</td></tr>
				<tr><td><img class="team" src="img/team/aishwarya_kaul.png"></td><td>Aishwarya Kaul<br>Head - Public Relations</td></tr>
				<tr><td><img class="team" src="img/team/dharvi_verma.png"></td><td>Dharvi Verma<br>Head - Event Management</td></tr>
				<tr><td><img class="team" src="img/team/shrey_bagga.png"></td><td>Shrey Bagga<br>Head - Publicity</td></tr>
				<tr><td><img class="team" src="img/team/shivam_bhardwaj.png"></td><td>Shivam Bhardwaj<br>Head - Infrastructure & Logistics</td></tr>
				<tr><td><img class="team" src="img/team/sumedha_arya.png"></td><td>Sumedha Arya<br>Head - Publications & Documentations</td></tr>
				<tr><td><img class="team" src="img/team/arjun_kumar.png"></td><td>Arjun Kumar<br>Head - Creativity</td></tr>
				</table>
				<table class="tab">
				<center><h1>HEAD SUPERVISORS - SIGs</h1></center>
				<tr><td><img class="team" src="img/team/aryaman_nath.png"></td><td>Aryaman Nath<br>Drishti (Photography, Design and Creativity Group)</td></tr>
				<tr><td><img class="team" src="img/team/priyansh_singh.png"></td><td>Priyansh Singh<br>Code-X (Programming Group)</td></tr>
				<tr><td><img class="team" src="img/team/tapan_khattar.png"></td><td>Tapan Khattar<br>Robotix-United (Robotics Group)</td></tr>
				<tr><td><img class="team" src="img/team/sanchit_guglani.png"></td><td>Sanchit Guglani<br>GAMMA (Gaming, Multimedia and Animation Group)</td></tr>
				<tr><td><img class="team" src="img/team/rushil_bhutani.png"></td><td>Rushil Bhutani<br>E-Cell (Entrepreneurship Development Group)</td></tr>
				</table>
				<table class="tab">
				<center><h1>STUDENT REPRESENTATIVES</h1></center>
				<tr><td><img class="team" src="img/team/payal_mangla.png"></td><td>Payal Mangla</td></tr>
				<tr><td><img class="team" src="img/team/shreshtha_jain.png"></td><td>Shreshtha Jain</td></tr>
				<tr><td><img class="team" src="img/team/subhav_duggal.png"></td><td>Subhav Duggal</td></tr>
				<tr><td><img class="team" src="img/team/shikhar_mittal.png"></td><td>Shikhar Mittal</td></tr>
				</table>
				<table class="tab">
				<center><h1>RAS</h1></center>
				<tr><td><img class="team" src="img/team/tapan_khattar.png"></td><td>Tapan Khattar<br>Chairperson</td></tr>
				<tr><td><img class="team" src="img/team/naman_sharma.png"></td><td>Naman Sharma<br>Vice-Chairperson</td></tr>
				<tr><td><img class="team" src="img/team/pranshu_jhamb.png"></td><td>Pranshu Jhamb<br>Head - Research & Development</td></tr>
				<tr><td><img class="team" src="img/team/sidhant_gulhar.png"></td><td>Sidhant Gulhar<br>Head - Publication & Documentation</td></tr>
				<tr><td><img class="team" src="img/team/deepak_verma.png"></td><td>Deepak Verma<br>Head - EM</td></tr>
				<tr><td><img class="team" src="img/team/rishabh_goyal.png"></td><td>Rishabh Goyal<br>Chapter Representative</td></tr>
				</table>
				<table class="tab">
				<center><h1>WIE</h1></center>
				<tr><td><img class="team" src="img/team/akansha_srivastava.png"></td><td>Akansha Srivastava<br>Chairperson</td></tr>
				<tr><td><img class="team" src="img/team/prachi_choudhary.png"></td><td>Prachi Choudhary<br>Vice-Chairperson</td></tr>
				<tr><td><img class="team" src="img/team/himshika_suhag.png"></td><td>Himshika Suhag<br>Vice-Chairperson</td></tr>
				<tr><td><img class="team" src="img/team/akshita_gupta.png"></td><td>Akshita Gupta<br>Secretary</td></tr>
				<tr><td><img class="team" src="img/team/shefali_garg.png"></td><td>Shefali Garg<br>Representative</td></tr>
				</table>
			</p>
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