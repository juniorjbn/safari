	<footer>
		<div class="content-wrapper">
			<nav class="grid-3">
				<ul>
					<li>
						<a class="<?php echo $this->active[0] ?>" href="<?php echo base_url('services') ?>" title="Services">Services</a>
					</li>
					<li>
						<a class="<?php echo $this->active[1] ?>" href="<?php echo base_url('about') ?>" title="About">About</a>
					</li>
					<li>
						<a class="<?php echo $this->active[2] ?>" href="<?php echo base_url('clients') ?>" title="Clients">Clients</a>
					</li>
					<li>
						<a class="<?php echo $this->active[3] ?>" href="<?php echo base_url('about') ?>#carrers" title="Carrers">Careers</a>
					</li>
					<li>
						<a class="<?php echo $this->active[4] ?>" href="<?php echo base_url('contact-us') ?>" title="Contact us">Contact us</a>
					</li>
				</ul>
			</nav>
		
			<aside class="grid-1">
				<nav>
					<ul>
						<li><a href="//www.linkedin.com/company/safari.to" title="Linkedin" class="linkedin ir" target="_blank" onclick="_gaq.push(['_trackEvent', 'linkedin', 'click', 'Linkedin']);">Linkedin</a></li>
						<li><a href="//www.flickr.com/photos/68170600@N08/" title="Flickr" class="flickr ir" target="_blank" onclick="_gaq.push(['_trackEvent', 'flickr', 'click', 'Flickr']);">Flickr</a></li>
						<li><a href="//twitter.com/safarito" title="Twitter" class="twitter ir" target="_blank" onclick="_gaq.push(['_trackEvent', 'twitter', 'click', 'Twitter]);">Twitter</a></li>
						<li><a href="//facebook.com/safari.media" title="Facebook" class="facebook ir" target="_blank" onclick="_gaq.push(['_trackEvent', 'social', 'click', 'Facebook']);">Facebook</a></li>
						<li><a href="//plus.google.com/u/2/100900199531180179251/" title="Google Plus" class="google ir" target="_blank" onclick="_gaq.push(['_trackEvent', 'gplus', 'click', 'g+']);">Google Plus</a></li>
					</ul>
				</nav>
			</aside>
			
			<address class="grid-4">
				<ul>
					<li class="first">
						<h1>Latin & South America</h1>
<?php /* 				<span class="phone">+55 (11) 5908 8090</span>
						<span class="phone">Rua França Pinto, 926<br>Vila Mariana - São Paulo - 04016-004</span>
*/ ?>
						<a class="mail" href="mailto:saopaulo@safari.to">saopaulo@safari.to</a>
					</li>
					
					<li>
						<h1>North America</h1>
<?php /* 				<span class="phone">+1 310 966 7677</span> 
*/ ?>
						<a class="mail" href="mailto:losangeles@safari.to">losangeles@safari.to</a>
					</li>
					
					<li>
						<h1>Europe, Africa, Middle East</h1>
<?php /*  				<span class="phone">+44 (0) 20 8144 2339</span> 
*/ ?>
						<a class="mail" href="mailto:london@safari.to">london@safari.to</a>
					</li>
					
					<li>
						<h1>Asia Pacific</h1>
<?php /* 				<span class="phone">+61 478 701 834</span>
 */ ?>
						<a class="mail" href="mailto:sydney@safari.to">sydney@safari.to</a>
					</li>
					
				<p class="copyright">Copyright © 2012 Safari.to. All rights reserved.</p>
				<p class="mail">Press and media relations:  <a href="mailto:press@safari.to">press@safari.to </a></p>
				</ul>
				
				<div style="position:relative;bottom:50px;left:0;">
					<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fsafari.media&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=dark&amp;font=lucida+grande&amp;height=21&amp;appId=240125582706850" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
				</div>

			</address>
		</div>
	</footer>

  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="<?php echo assets_url(); ?>js/plugins.js"></script>
  <script defer src="<?php echo assets_url(); ?>js/script.js"></script>
  <!-- end scripts-->

  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
