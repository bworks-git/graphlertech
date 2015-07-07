<a id="scroltop_id" class="scrl_top" href="javascript:;" onClick="$('html,body').animate({ scrollTop: 0 }, 1000);" title="Back To Top">&nbsp;</a>
<footer>
		<div class="center">
			<div class="foot_out clearfix">
				<p class="cpy_rht">Copyright 2015.All rights reserved.</p>
				<ul class="foot_lst">
					<li><a href="terms-conditioins.php" title="Terms & conditions">Terms & conditions</a></li>
					<li><a href="privacy-policy.php" title="Privacy Policy">Privacy Policy</a></li>					
					<li><a href="sitemap.php" title="Privacy Policy">Sitemap</a></li>					
				</ul>
			</div>
		</div>
	</footer>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>	
	$(window).scroll(function(){
		if ($(this).scrollTop() > 450){ $('#scroltop_id').show(); } 
		else { $('#scroltop_id').hide(); }
	  });
	  function sidbrclse(){
			if ( $('.fix_sidebar').css('marginLeft') == '-5px' ){
				$('.fix_sidebar').css("margin-left", "-320px");
				$('.fix_sidebar').removeClass('active');
			}				
		}		
		$(document).ready(function(){	
			$('a').removeAttr('title');	
			var href = window.location.href;
			var url = href.substr(href.lastIndexOf('/') + 1);
			// alert(url);
			$('.hdmenu li a[href="'+url+'"]').addClass('active');
			$('.prodside_lst li a[href="'+url+'"]').addClass('active');
			$(".sidemenu").click(function(){
				if ( $('.fix_sidebar').css('marginLeft') == '-5px' ){
					$('.fix_sidebar').css("margin-left", "-320px");
					$('.fix_sidebar').removeClass('active');
				} else {
					$(".fix_sidebar").css("margin-left", "-5px");
					$('.fix_sidebar').addClass('active');
				}
			});		
			$('#nav_src li').click(function(){
				$(this).addClass('active').siblings().removeClass('active');				
			});
			$('html').click(function() {
				sidbrclse();			
			 });
			 $(document).keydown(function(e) {				
				if (e.keyCode == 27) {
					sidbrclse();
					// $('.hdmenu').hide();
				}
			 });
		});	
</script>	