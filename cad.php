<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Computer Aided Design & Development Company in coimbatore, Tamilnadu">
    <meta name="keywords" content="CAD design in india,Product design and development">        
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>Computer Aided Design & Development</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/media_style.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" />	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	</head>
<body>
	<?php require_once('home-header.php'); ?>		
	<section>	
	<!-- side fixed Navigation start -->
	<div class="fix_sidebar">
		<a class="sidemenu" href="javascript:;"><b>x</b><i class="fa fa-navicon"></i></a>
		<div class="prodside_nav_sec">
			<ul class="prodside_lst">
				<li><a href="cfd.php" title="CFD">Computational Fluid Dynamics</a></li>
				<li><a href="fea.php" title="FEA">Finite Element Analysis</a></li>
				<li><a href="cad.php" title="CAD">Computer Aided Design </a></li>
				<li><a href="pdd.php" title="PD&D">Product Design & Development</a></li>
			</ul>
		</div>
	</div>
	<!-- side fixed Navigation end -->
	<div class="cad_prod_sec clearfix">
	<!-- First navigation tab start -->
		<div class="prd_out clearfix">
			<div class="bg1 scr_anim scr_anim fadeInLeft hinge delay-06s">
				<div class="center">
					<div class="prd_in">
						<div class="prod_img"> <img src="images/cad.png" alt="CAD"/></div>
						<div class="prod_info">
							<div class="prod_title">Computer Aided Design (CAD)</div>
							<div class="prod_desc">Outsourcing CAD can help Industries save time, unnecessary investment in office space, equipment, software and man power to supplement this need. At Graphler we offer an end-to-end CAD conversion services with high precision, quality and without compromising on the security of the Design. </div>
							<div class="prod_desc">We have the finest CAD designers who has expertise in working with various Industries across India. Our work has been truly appreciated in Industries like Architectural/Civil, Manufacturing, Tooling and Medical equipment manufacturers.</div>
							<br/>
							<p class="title2">Our Services include </p>
							<ul class="cms_lst">
								<li>Prototype to 2D/3D conversion</li>
								<li>Hand drawn sketch to 2D/3D conversion</li>
								<li>Paper to 2D/3D conversion</li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
			
			<div class="bg2 scr_anim fadeInRight hinge delay-06s">
				<div class="center">
					<div class="prd_in">
						<div class="prod_info">
							<div class="prod_title">Geometric Dimensioning & Tolerance </div>
							<div class="prod_desc">Every design is an idealization representation of the part design. However, the design model by itself does not fully define the design. Thus GD&T is incorporated in every Engineering drawings and models to define the allowable deviation and tolerances of the actual geometry.</div>
							<div class="prod_desc">Our GD&T consulting services help you apply Dimensioning and Tolerance to your drawings, making their parts easier to manufacture, inspect and assemble and ensure their parts and assemblies will function as intended.</div>							
						</div>
						<div class="prod_img"> <img src="images/gdt.png" alt="Geometric Dimensioning & Tolerance "/></div>
					</div>
				</div>
			</div>	
			
			<div class="bg1 scr_anim scr_anim fadeInLeft hinge delay-06s">
				<div class="center">
					<div class="prd_in">
						<div class="prod_img"> <img src="images/dfma.png" alt="Design For Manufacturing & Assembly"/></div>
						<div class="prod_info">
							<div class="prod_title">Design For Manufacturing & Assembly</div>
							<div class="prod_desc">DFMA has been used by many Industries across India to develop innovative product designs that uses optimal manufacturing and assembly processes. DFMA will improve Product development processes by eliminating unnecessary parts and processes resulting in significant cost savings.</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>	
</section>	
<?php require_once('footer.php'); ?>		
<script>			
/* Scrolling animation */
$(function(){
  var $elems = $('.scr_anim');
  var winheight = $(window).height();
  var fullheight = $(document).height();
  
  $(window).scroll(function(){
    animate_elems();	
  });
  
  function animate_elems() {
    wintop = $(window).scrollTop();
    $elems.each(function(){
      $elm = $(this);
      if($elm.hasClass('animated')) { return true; } 
      topcoords = $elm.offset().top;
      if(wintop > (topcoords - (winheight*.75))) {
        $elm.addClass('animated');
      }
    });
  } 
});
// end animate_elems()			
</script>	
</body>
</html>
