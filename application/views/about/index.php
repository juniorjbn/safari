<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>ABOUT US - SAFARI - Digital Media Production - Display Ads, Mobile Apps, Facebook Apps and Social Media.  </title>
  <meta property="og:title" content="SAFARI - Digital Media Production"/>
  <meta property="og:image" content="http://safari.to/facebook.jpg"/>
  <meta property="og:site_name" content="SAFARI - Digital Media Production"/>
  <meta property="og:description" content="Safari is a digital media solution provider which takes a step further to ensure the quality of its work through a specialized production process."/>
  <meta name="description" content="Online media production - at its best">
  <meta name="author" content="safari.to">
  <meta name="keywords" content="safari, Online media production, porto alegre, produtora de mídia, publicidade online, produção de mídia digital, digital advertising, media display, banners, richmedia, mídia, aplicativos Facebook, Facebook applications, apps Facebook, fanpage, social content, social media, design, mobile applications, mobile apps, aplicativos para celular, iOS, iPhone apps, aplicativos para iphone, social games, mobile games, poa, são paulo, internet">

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="<?php echo assets_url(); ?>css/style.css">
  <!-- end CSS-->

  <script src="<?php echo assets_url(); ?>js/libs/modernizr-2.0.6.min.js"></script>
  <script src="<?php echo assets_url(); ?>js/libs/jquery-1.6.2.js"></script>
  <script src="<?php echo assets_url(); ?>js/libs/jquery-1.6.2.min.js"></script>
  <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20974305-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<?php $this->load->view('includes/header'); ?>
    <section id="main" class="about" role="main">
		<div class="content-wrapper">
			<h2 class="title">About Safari:</h2>
			
			<div class="grid-4 border" id="history">
				<!-- <img src="<?php echo assets_url() ?>img/about-safari.jpg" alt="Safari" title="Safari" /> -->
				<h3>Online media production, at its best</h3>
				<p>Safari was formed in 2009, with ambitions to meet a growing need for production in the realm of
				online media advertising.<br />
				The company specializes in the innovative production and swift delivery of social and mobile applications, technology systems, creative strategies, and more. Our current network of professional departments – including Creation, Design, Motion Design, Content and Technology – is distributed among our commercial and production divisions in Porto Alegre, Pelotas, Sao Paulo, Los Angeles, London and Sydney.</p>
			</div>
			
			<?php /*<h2 class="title">Our teammates:</h2>
			
			<div class="grid-4 border" id="teammates">
				<!--ul>					
					<?php foreach($teammates->result() as $teammate): ?>
					<li><img src="<?php echo assets_url() ?>img/uploads/teammates/<?php echo $teammate->picture ?>" alt="<?php echo $teammate->name ?>" title="<?php echo $teammate->name ?>" /><p><?php echo $teammate->name ?> <small><?php echo $teammate->profession ?></small> <span><?php echo $teammate->email ?></span></p></li					
					<?php endforeach ?>									
				</ul-->
			</div> */ ?>
			
			<h2 class="title">Structure:</h2>
			
			<div class="grid-4 border" id="structure">
				<h3>Welcome to our house</h3>
				
				<div class="grid-4">
					<img src="<?php echo assets_url() ?>img/uploads/structure/<?php echo rand(1, $structure) ?>.jpg" alt="Safari" title="Safari" id="main-image" />
					<p>Safari's headquarters are located on a 7.000m2 / 1.7-acre green estate in Porto Alegre. A truly unique and inspiring backdrop, it serves as both our home and the heart of our professional operations. See the photos.</p>
					<ul>
						<?php for($x = 1; $x <= $structure; $x++): ?>
						<li<?php echo $x % 4 === 0 ? ' class="last"' : '' ?>><img src="<?php echo assets_url() ?>img/uploads/structure/thumb/<?php echo $x; ?>.jpg" alt="Safari" title="Safari" /></li>
						<?php endfor ?>
					</ul>
					<ul class="hidden">
						<?php for($x = 1; $x <= $structure; $x++): ?>
						<li<?php echo $x % 4 === 0 ? ' class="last"' : '' ?>><img src="<?php echo assets_url() ?>img/uploads/structure/<?php echo $x; ?>.jpg" alt="Safari" title="Safari" /></li>
						<?php endfor ?>
					</ul>
				</div>
			</div>
			
			<h2 class="title">Careers:</h2>

			<div class="grid-4" id="carrers">						
				<div class="top">
					<h3><big>Join our team</big></h3>
					<p>Safari is always seeking skilled professionals to expand our team of talents. Employees are hired under local labor laws and enjoy a range of benefits including health insurance and English classes. Is your resume up-to-date? Portfolio up and running? So, what are you waiting for?</p>
					<a href="mailto:work@safari.to" title="Join our team" target="_blank">work@safari.to</a>
				</div>
			</div>
		</div>
	</section>
<?php $this->load->view('includes/footer'); ?>