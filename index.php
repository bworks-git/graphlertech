<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Graphler is an engineering consulting firm providing perfectly structured CAE solutions for Industries">
    <meta name="keywords" content="Graphler Technology Solutions,engineering consulting,CAE,CAD,CAM,Coimbatore">      
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>Graphler Technology Solutions</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/media_style.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="script/wow.js"></script>
	<script type="text/javascript" src="script/jssor.slider.min.js"></script>
        <script>
        jssor_slider1_starter = function (containerId) {		
		var _SlideshowTransitions = [
             {$Duration:800,y:1,$Delay:10,$Cols:30,$Clip:2,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:{$Top:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2,$Assembly:2049}            
            ];
            var options = { $FillMode: 2, $AutoPlay: true, $AutoPlayInterval:6000,  $PauseOnHover: 0, $SlideEasing: $JssorEasing$.$EaseOutQuint, $SlideDuration: 800, $MinDragOffsetToSlide: 20,  $SlideSpacing: 0, 
                $DisplayPieces: 1, $ParkingPosition: 0, $UISearchMode: 1, $PlayOrientation: 1,   $DragOrientation: 1,  $CaptionSliderOptions: {      $Class: $JssorCaptionSlider$,  $PlayInMode: 1,  $PlayOutMode: 3 },
				 $SlideshowOptions: {  $Class: $JssorSlideshowRunner$, $Transitions: _SlideshowTransitions, $TransitionsOrder: 1, $ShowLink: true }
               /* $BulletNavigatorOptions: { $Class: $JssorBulletNavigator$,   $ChanceToShow: 2,   $AutoCenter: 1,   $Steps: 1,  $Lanes: 1, $SpacingX: 8, $SpacingY: 8,  $Orientation: 1  	*/			
            };
            var jssor_slider1 = new $JssorSlider$(containerId, options);
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    $Jssor$.$Delay(ScaleSlider, 30);
            }
           ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        };
    </script>
</head>
<body>
	<?php require_once('home-header.php'); ?>	
	<section>
		<!-- div class="hban_out">
			<div class="hslide1"></div>
		</div -->
		<!-- Slider start -->
		<div id="slider1_container" class="hban_out" style="position: relative; margin: 0 auto;top: 0px; left: 0px; width: 1300px; height: 550px; overflow: hidden;">
			 <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;height: 550px; overflow: hidden;">
				<div>
					<div u="image" class="hslide5">
						<div class="ban_info"><h3 class="ban_title">Providing turnkey solutions through CFD/FEA/CAD </h3></div>
					</div>
				</div>
				<div>
					<div u="image" class="hslide1">
						<div class="ban_info"><h3 class="ban_title">With us, you can <i>create</i>, <i>innovate</i>, <i>integrate</i>, <i>optimise</i> for better products, process and systems </h3></div>
					</div>
				</div>
				<div>
					<div u="image" class="hslide2">
						<div class="ban_info"><h3 class="ban_title">Facilitating <i>cost – effective</i> process and delivering simulation services <i>on time</i></h3></div>
					</div>
				</div>				
				<div>
					<div u="image" class="hslide3">
						<div class="ban_info"><h3 class="ban_title">Better insight through Engineering Simulation <i>Services for Design</i><b> & </b> <i>Manufacture</i></h3></div>
					</div>
				</div>
				<div>
					<div u="image" class="hslide4">
						<div class="ban_info"><h3 class="ban_title">Better your design through <i>virtual prototyping</i> </h3></div>
					</div>
				</div>							
			</div>			
			<!-- /* <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
             <div u="prototype"></div>
			</div>	 */ -->
			<a class="scrl_dwnarw" onclick="$('html,body').animate({ scrollTop: $('#btmnavid').offset().top},'slow');" href="javascript:;" title="Scroll Down"><i class="fa fa-angle-double-down"></i></a>
		</div>
		<script>
			jssor_slider1_starter('slider1_container');
		</script>
		<!-- Slider end -->
		<!-- Main category -->
		<div id="btmnavid" class="clearfix prdmain_catg_blk">
			<!-- div class="center">
				<h3 class="title1">Our Products</h3 -->
				<ul class="prdmain_catg wow fadeInUp delay-06s animated" style="visibility: visible; animation-name: fadeInUp;">
					<li><a href="cfd.php" title="CFD">
						<span>CFD</span>
						<img src="images/cfd-icon.png" alt="CFD"/>
						<div class="prd_desc">
							<p>Computational Fluid <br/> Dynamics &nbsp;<i class="fa fa-arrow-right">&nbsp;</i></p>
						</div>
					</a></li>								
					<li><a href="fea.php" title="FEA">
						<span>FEA</span>
						<img src="images/fea-icon.png" alt="FEA"/>
						<div class="prd_desc">
							<p>Finite Element <br/>Analysis &nbsp;<i class="fa fa-arrow-right">&nbsp;</i></p>
						</div>
					</a></li>
					<li><a href="cad.php" title="CAD">
						<span class="whte_fnt">CAD</span>
						<img src="images/cad-icon.png" alt="CAD"/>
						<div class="prd_desc">
							<p>Computer Aided <br/>Design &nbsp;<i class="fa fa-arrow-right">&nbsp;</i></p>
						</div>
					</a></li>	
					<li><a href="pdd.php" title="PD&D">
						<span>PD&D</span>
						<img src="images/pdd-icon.png" alt="PD&D"/>
						<div class="prd_desc">
							<p>Product Design & <br/> Development &nbsp;<i class="fa fa-arrow-right">&nbsp;</i></p>
						</div>
					</a></li>
				</ul>
			<!-- /div -->
		</div>		
	</section>	
	<?php require_once('footer.php'); ?>	
	<script>
	/* Repeat transitions */
	function rmvtran(){  $('.wow').removeClass('animated');  /* setTimeout(function () { rmvtran(); }, 2500); */ }
	
	 $(window).scroll(function(){ 
			var scrid = $('#btmnavid').offset().top - $(window).height();		
			if ( ( $(this).scrollTop() < scrid) | ( $(this).scrollTop() <= 40 ) ){  $('.scrl_dwnarw').show(); wow.init(); rmvtran(); }
			else { $('.scrl_dwnarw').hide(); } 	
	 });	
	$(document).ready(function() {		
		wow = new WOW({ animateClass: 'animated', offset: -100 });
	   wow.init();
	});		
	</script> 
</body>
</html>
