<? php
/*Template Name: Boooyaaaaaaaaaa*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 

"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="language" content="en" />



	<title>Layout with Accordion</title>



	<link rel="stylesheet" type="text/css" href="http://layout.jquery-dev.net/lib/css/layout-default-latest.css" />

	<link rel="stylesheet" type="text/css" href="http://layout.jquery-dev.net/lib/css/themes/base/jquery.ui.all.css" />

	<!-- CUSTOMIZE/OVERRIDE THE DEFAULT CSS -->

	<style type="text/css">



	/* remove padding and scrolling from elements that contain an Accordion OR a content-div */

	.ui-layout-center ,	/* has content-div */

	.ui-layout-west ,	/* has Accordion */

	.ui-layout-east ,	/* has content-div ... */

	.ui-layout-east .ui-layout-content { /* content-div has Accordion */

		padding: 0;

		overflow: hidden;

	}

	.ui-layout-center P.ui-layout-content {

		line-height:	1.4em;

		margin:			0; /* remove top/bottom margins from <P> used as content-div */

	}

	h3, h4 { /* Headers & Footer in Center & East panes */

		font-size:		1.1em;

		background:		#EEF;

		border:			1px solid #BBB;

		border-width:	0 0 1px;

		padding:		7px 10px;

		margin:			0;

	}

	.ui-layout-east h4 { /* Footer in East-pane */

		font-size:		0.9em;

		font-weight:	normal;

		border-width:	1px 0 0;

	}

	</style>



	<!-- REQUIRED scripts for layout widget -->

	<script type="text/javascript" src="http://layout.jquery-dev.net/lib/js/jquery-latest.js"></script>

	<script type="text/javascript" src="http://layout.jquery-dev.net/lib/js/jquery-ui-latest.js"></script>

	<script type="text/javascript" src="http://layout.jquery-dev.net/lib/js/jquery.layout-latest.js"></script>

	<script type="text/javascript" src="http://layout.jquery-dev.net/lib/js/jquery.layout.resizePaneAccordions-latest.js"></script>

	<!-- compressed: /lib/js/jquery.layout.resizePaneAccordions-latest.min.js -->



    <script type="text/javascript" src="http://layout.jquery-dev.net/lib/js/themeswitchertool.js"></script> 

	<script type="text/javascript" src="http://layout.jquery-dev.net/lib/js/debug.js"></script>



	<script type="text/javascript">

	$(document).ready( function() {



		myLayout = $('body').layout({

			west__size:			300

		,	east__size:			300

			// RESIZE Accordion widget when panes resize

		,	west__onresize:		$.layout.callbacks.resizePaneAccordions

		,	east__onresize:		$.layout.callbacks.resizePaneAccordions

		});



		// ACCORDION - in the West pane

		$("#accordion1").accordion({

			heightStyle:	"fill"

		});

		

		// ACCORDION - in the East pane - in a 'content-div'

		$("#accordion2").accordion({

			heightStyle:	"fill"

		,	active:			1

		});





		// THEME SWITCHER

		addThemeSwitcher('.ui-layout-north',{ top: '12px', right: '5px' });

		// if a new theme is applied, it could change the height of some content,

		// so call resizeAll to 'correct' any header/footer heights affected

		// NOTE: this is only necessary because we are changing CSS *AFTER LOADING* using themeSwitcher

		setTimeout( myLayout.resizeAll, 1000 ); /* allow time for browser to re-render with new theme */



	});

	</script>



</head>

<body>



<div class="ui-layout-north ui-widget-content" style="display: none;">

	<div style="float: right; margin-right: 160px;">

		<button onClick="resizeWidgets()">Resize</button> &nbsp;

		<button onClick="removeUITheme(); myLayout.resizeAll()">Remove Theme</button>

	</div>

	North Pane

</div>



<div class="ui-layout-south ui-widget-content ui-state-error" style="display: none;"> South Pane </div>



<div class="ui-layout-center" style="display: none;"> 

	<h3 class="ui-widget-header">Center Pane</h3>

	<div class="ui-layout-content ui-widget-content">

		<h2>Accordion Resizing Callbacks</h2>

		<ul>

			<li><a href="http://layout.jquery-dev.net/lib/js/jquery.layout.resizePaneAccordions-latest.js">Accordion Resizing Callback</a></li>

			<li><a href="http://layout.jquery-dev.net/lib/js/jquery.layout.resizePaneAccordions-latest.min.js">Accordion Resizing Callback &ndash; Minified</a></li>

		</ul>

		<h5>Javascript used to create this page</h5>

		<pre><code

>$('body').layout({

    west__size:      300

,   east__size:      300

    <i>// RESIZE Accordion widget when panes resize</i>

,   west__onresize:  $.layout.callbacks.resizePaneAccordions

,   east__onresize:  $.layout.callbacks.resizePaneAccordions

});



<i>// ACCORDION - in the West pane</i>

$("#accordion1").accordion({ heightStyle: "fill" });



<i>// ACCORDION - in the East pane - in a 'content-div'</i>

$("#accordion2").accordion({

    heightStyle: "fill"

,   active:      1 <i>// set active accordion-panel</i>

});

		</code></pre>

	</div>

</div>



<div class="ui-layout-west" style="display: none;">

	<div id="accordion1" class="basic">



			<h3><a href="#">Section 1</a></h3>

			<div>

				<h5>West Pane</h5>

				<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. 

					Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc.</p>

				<p>Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 

					Vestibulum a velit eu ante scelerisque vulputate.</p>

			</div>



			<h3><a href="#">Section 2</a></h3>

			<div>

				<h5>Sed Non Urna</h5>

				<p>Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus.

					Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit,

					faucibus interdum tellus libero ac justo.</p>

				<p>Vivamus non quam. In suscipit faucibus urna.</p>

			</div>



			<h3><a href="#">Section 3</a></h3>

			<div>

				<p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.

					Phasellus pellentesque purus in massa. Aenean in pede.</p>

				<p>Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, 

					magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</p>

				<ul>

					<li>List item one</li>

					<li>List item two</li>

					<li>List item three</li>

				</ul>

			</div>



			<h3><a href="#">Section 4</a></h3>

			<div>

				<p>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames 

					ac turpis egestas.</p>

				<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;

					Aenean lacinia mauris vel est.</p>

				<p>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.

					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

			</div>



	</div>

</div>



<div class="ui-layout-east" style="display: none;">

	<h3 class="ui-widget-header">East Pane</h3>



	<div class="ui-layout-content">

		<div id="accordion2" class="basic">



			<h3><a href="#">Section 1</a></h3>

			<div>

				<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. 

					Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc.</p>

				<p>Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 

					Vestibulum a velit eu ante scelerisque vulputate.</p>

			</div>



			<h3><a href="#">Section 2</a></h3>

			<div>

				<h5>Sed Non Urna</h5>

				<p>Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus.

					Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit,

					faucibus interdum tellus libero ac justo.</p>

				<p>Vivamus non quam. In suscipit faucibus urna.</p>

			</div>



			<h3><a href="#">Section 3</a></h3>

			<div>

				<p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.

					Phasellus pellentesque purus in massa. Aenean in pede.</p>

				<p>Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, 

					magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</p>

				<ul>

					<li>List item one</li>

					<li>List item two</li>

					<li>List item three</li>

				</ul>

			</div>



			<h3><a href="#">Section 4</a></h3>

			<div>

				<p>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames 

					ac turpis egestas.</p>

				<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;

					Aenean lacinia mauris vel est.</p>

				<p>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.

					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

			</div>



		</div>

	</div>



	<h4 class="ui-widget-content ui-state-hover">Accordion inside DIV.ui-layout-content</h4>

</div>



</body>

</html> 