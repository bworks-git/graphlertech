<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta name="description" content="Graphler is an engineering consulting firm providing perfectly structured CAE solutions for Industries">
    <meta name="keywords" content="Graphler Technology Solutions,engineering consulting,CAE,CAD,CAM,Coimbatore">     
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>Contact us - Graphler Technology Solutions</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/media_style.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->		
</head>
<body>
	<?php require_once('header.php'); ?>	
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
		<div class="clearfix cntct_sec">
		<!-- Google Map start -->
			<div id="map-canvas" class="google_map"></div>
		<!-- Google Map end-->		
			<div class="center">
				<div class="cntct_blk">
					<div class="clearfix form_blk">
						<h2 class="title1">Send Enquiry</h2>
						<?php	
						date_default_timezone_set('Etc/UTC');
						require_once 'PHPMailerAutoload.php';	
						$mail = new PHPMailer;	
						$mail->isSMTP();
						$mail->SMTPDebug = 2;
						$mail->Debugoutput = 'html';
						$mail->Host = "mail.graphlertech.com";
						$mail->Port = 25;
						$mail->SMTPAuth = true;
						$mail->Username = "test@graphlertech.com";
						$mail->Password = "winlinux";
						$mail->setFrom('test@graphlertech.com');
											
						$name = $email = $phone = $company = $message = "";
						if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["company"]) && !empty($_POST["message"]) ){
								// to send mail through phpmailler
								echo "<div style='display:none;'>";
								if ($_SERVER["REQUEST_METHOD"] == "POST") {
								  $name = test_input($_POST["name"]);
								  $email = test_input($_POST["email"]);
								  $phone = test_input($_POST["phone"]);
								  $company = test_input($_POST["company"]);
								  $message = test_input($_POST["message"]);
								  
									/* $to = "gnanamoorthi@bworks.in";
									$mail->Subject = "Enquiry from Graphlertech"; 
									$htmlbody = "Name :" . $name . "\r\n\r\n " . "Email :" . $email ." \r\n\r\n " . "Phone :" . $phone ." \r\n\r\n " . " Company :" .  $company  ." \r\n\r\n "  . " Message :" .  $message  ." \r\n\r\n "   ;
									$headers = "MIME-Version: 1.0" . "\r\n";
									$headers .= 'From: '.$email.''; */
									$mail->addAddress('info@graphlertech.com');
									$mail->addReplyTo($email);
									$mail->Subject = 'Enquiry from Graphlertech - contact us';
									$htmlbody = "Name :" . $name . "\r\n\r\n <br/> " . "Email :" . $email ." \r\n\r\n  <br/> " . "Phone :" . $phone ." \r\n\r\n  <br/> " . " Company :" .  $company  ." \r\n\r\n  <br/> "  . " Message :" .  $message  ." \r\n\r\n  <br/> "   ;
									
									/* More about project start */ 
										if(!empty($_POST["projtitle"])) {
											$prj_tit = test_input($_POST["name"]);										
											$htmlbody = $htmlbody . "Project Title :" . $prj_tit . " \r\n\r\n <br/>  "; 
										}	
										if(!empty($_POST["timeframe"])) {
											$time_frme = test_input($_POST["timeframe"]);										
											$htmlbody = $htmlbody . "Time Frame :" . $time_frme . " \r\n\r\n  <br/> "; 
										}	
										if(!empty($_POST["prj_message"])) {
											$prj_message = test_input($_POST["prj_message"]);										
											$htmlbody = $htmlbody . "Project Details :" . $prj_message . " \r\n\r\n  <br/> "; 
										}	
											// echo "<br/> ************************ File" . $_FILES["fileToUpload"]["error"] ;
										if ( $_FILES["fileToUpload"]["error"] > 0 )
										{  
											$fileName = $_FILES['fileToUpload']['name'];											
											$tmpName  = $_FILES['fileToUpload']['tmp_name'];
											$fileSize = $_FILES['fileToUpload']['size'][0];
											$fileType = $_FILES['fileToUpload']['type'][0];
											$fileexten=explode(".",$fileName);
											 $namef=$name.".". $fileType;
											// echo "* * * file name : " . $fileName . " <br/> Temp name : " . $tmpName . " <br/> * * * " ;
											 foreach($fileexten as $gm)
											 {
												$fileext=$gm;
											 }
											$img_ex  = explode(".",strrev($_FILES['fileToUpload']['name']));
											$img_ext = strrev($img_ex[0]);
											$image_name =  $name.".".$img_ext;
											$image_type = $_FILES['fileToUpload']['tmp_name'];
											$path	    = $_SERVER["DOCUMENT_ROOT"] . "/upload/"; 												
											$upld_img 	= $path.$fileName;
											$mail->addAttachment($image_type);											
											move_uploaded_file($image_type,$upld_img);
											 // echo "<br/> \n ========== PATH :" . $upld_img . " =================== \n <br/>" ;
										}
										 else{
											$fileName = $_FILES['fileToUpload']['name'];											
											$tmpName  = $_FILES['fileToUpload']['tmp_name'];
											$fileSize = $_FILES['fileToUpload']['size'][0];
											$fileType = $_FILES['fileToUpload']['type'][0];
											$fileexten=explode(".",$fileName);
											 $namef=$name.".". $fileType;
											 echo "* * * file name : " . $fileName . " <br/> Temp name : " . $tmpName . " <br/> * * * " ;
											 foreach($fileexten as $gm)
											 {
												$fileext=$gm;
											 }
											$img_ex  = explode(".",strrev($_FILES['fileToUpload']['name']));
											$img_ext = strrev($img_ex[0]);
											$image_name =  $name.".".$img_ext;
											$image_type = $_FILES['fileToUpload']['tmp_name'];
											$path	    = $_SERVER["DOCUMENT_ROOT"] . "/upload/"; 												
											$upld_img 	= $path.$fileName;
											move_uploaded_file($image_type,$upld_img);
											// echo "<br/> \n ========== PATH :" . $upld_img . " =================== \n <br/>" ;											
											$mail->addAttachment($upld_img);											
										} 
										$mail->msgHTML($htmlbody); 
										$mail_response = $mail->send(); 
										// echo "<br/> === </br/>" . $htmlbody . "<br/> === </br/>";
								}
								 echo "</div>";
								if($mail_response){  									
									echo " <div class='mail_sec'> <h2 class='mail_msg'>Your mail submitted to our Help desk. We will get you soon.</h2> </div> ";
								} 
								else {
									echo " <div class='mail_sec'> <h2 class='mail_msg'>Issue found in mail send. Please try again.</h2> </div> ";
								}	 				  																  
							}
							
						// else { echo "<h2 class='title1'>No style set</h2>\r\n"; }
						function test_input($data) {
						  $data = trim($data);
						  $data = stripslashes($data);
						  $data = htmlspecialchars($data);
						  return $data;
						}
						?>		
						
						
						<form id="cntct_form" name="conatct_us" method="post" enctype="multipart/form-data" >
							<ul class="lst_blk">
								<li><input type="text" name="name" placeholder="Name" required/></li>
								<li><input type="email" name="email" placeholder="Email" required/></li>
								<li><input type="text" name="phone" placeholder="Phone" required/></li>
								<li><input type="text" name="company" placeholder="Company" required/></li>
								<li><textarea name="message" placeholder="Message" required></textarea></li>
								<!-- li class="empty_lst"></li-->
								<li class="abt_cmpny"><input type="text" name="projtitle" placeholder="Project Title"/></li>
								<li class="abt_cmpny">
									<!-- input type="list" name="timeframe" placeholder="Time frame"/ -->
									<select name="timeframe">
										<option value="Less than 15 days">Less than 15 Days</option>
										<option value="1 Month">1 Month</option>
										<option value="2 Months">2 Months</option>
										<option value="3 Months">3 Months</option>
										<option value="Considerable">Considerable</option>										
									</select>
								</li>
								<li class="abt_cmpny"><textarea name="prj_message" placeholder="Project Details"></textarea></li>
								<li class="abt_cmpny file_uplad"><!--input type="text" name="company" placeholder="Attachments "/><em id="company_error"></em-->
									<input type="file" name="fileToUpload" id="fileToUpload" onchange="fileSelected();"/>    
									<label for="fileToUpload">Select a File to Upload</label>
								</li>
								<li class="moreabt_prj"><input id="more_abt" type="checkbox" name="chkbox" /><label>Tell us more about your project</label></li>
								<li>
									<div class="submt_blk">
										<input class="sbt_btn" type="submit" name="submit" value="submit" />
										<!-- input class="rst_btn" type="submit" name="submit" value="cancel" / -->
									</div>
								</li>
							</ul>
							<div class="adrs_blk">
								<h3 class="title2">Reach Us</h3>
								<address>
									<p>11/44, P.M.R. Layout,</p>
									<p>B-Block,</p>
									<p>Civil Aerodrome (PO), Goldwins,</p>
									<p>Coimbatore – 641 014</p>
									<p>Tamil Nadu, India</p>
									<p class="mob_cnt"><i class="fa fa-phone-square">&nbsp;</i>+91 – 96295 14005</p>
									<p class="mob_cnt"><i class="fa fa-phone-square">&nbsp;</i>+91 – 90037 50266</p>
									<p><a href="mailto:info@graphlertech.com" title="info@graphlertech.com"><i class="fa fa-envelope">&nbsp;</i>info@graphlertech.com</a></p>
								</address>
								<div class="social_cnt">
									<h3 class="title2">Connect Us</h3>
									<a href="https://www.facebook.com/graphlertechnologysolutions" target="_blank" title="Facebook"><i class="fa fa-facebook-square"></i></a>
									<a href="https://www.youtube.com/channel/UCV39g-FxTjuIDSZ9pHFvTmQ" target="_blank" title="Youtube"><i class="fa fa-youtube-square"></i></a>
									<a href="https://www.linkedin.com/company/graphler-technology-solutions" target="_blank" title="Linkedin"><i class="fa fa-linkedin-square"></i></a>
								</div>
							</div>
						</form>
					</div>					
				</div>
			</div>
		</div>
	</section>
	<?php require_once('footer.php'); ?>
	<!-- Google Map script -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
		var map;
		function initialize() {
		  var mapOptions = {
			zoom: 10,
			center: new google.maps.LatLng(11.0242778,77.04936111111111)			
		  };
		  map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);
			  
		  var marker = new google.maps.Marker({
			map: map,
			position: map.getCenter()
		  });
		  var infowindow = new google.maps.InfoWindow();
		  infowindow.setContent('<b><img width="80" src="images/logo.png" alt="Graphlertech"/></b>');
		  google.maps.event.addListener(marker, 'click', function() {
			  infowindow.open(map, marker);
		  });
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		
		$('documnent').ready(function(){		
			document.getElementById("cntct_form").reset();			
			$('.mail_sec').delay(4000).fadeOut('slow');
			$('.mail_sec').delay(5000).hide(0);
			$('#more_abt').click(function(){ $('.abt_cmpny').slideToggle('medium');});
			if( $('#more_abt').prop('checked') ){ 
				$('.abt_cmpny').show();
			}
			else{ $('.abt_cmpny').hide(); }
		});
		
    </script>
</body>
</html>
