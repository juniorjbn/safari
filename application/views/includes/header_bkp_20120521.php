
    <header>
    	<nav class="language">
				<ul>
					<li><a href="#" title="Portuguese">PT</a></li>
					<li><a class="active" href="#" title="English">EN</a></li>
				</ul>
		</nav>
    	<div class="content-wrapper">
			<h1><a href="<?php echo base_url() ?>" class="ir">SAFARI.to <small>It's a wicked wild web</small></a></h1>			
			<nav class="site">
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
					<li class="contact">
						<a class="<?php echo $this->active[4] ?>" href="<?php echo base_url('contact-us') ?>" title="Contact us">Contact us</a>
					</li>
				</ul>
			</nav>
			
			<?php if (TRUE === $this->show_banner): ?>
			<section id="banners">
				<div class="active banner type-01" id="banner-01">
					<h2>Quality and efficiency, in every delivery.</h2>
				</div>
				<div class="banner type-02" id="banner-02">
					<h2>Helping clients with the latest trends and technologies. </h2>
				</div>
				<div class="banner type-03" id="banner-03">
					<h2>Savvy and innovative media production techniques. </h2>
				</div>
				<div class="banner type-04" id="banner-04">
					<h2>We’re always thinking outside the box. </h2>
				</div>
				<div class="banner type-05" id="banner-05">
					<h2>We were born to be global.</h2>
				</div>
				<div class="banner type-06" id="banner-06">
					<h2>Meeting a growing demand for online media production. </h2>
				</div>
				<div class="banner type-07" id="banner-07">
					<h2>Close and communicative client partnerships.</h2>
				</div>
				<div class="banner type-08" id="banner-08">
					<h2>Helping from project briefing to campaign launch. </h2>
				</div>
				<div class="banner type-09" id="banner-09">
					<h2>Delivery on time, error-free, and within budget. Every time. </h2>
				</div>
				<div class="banner type-010" id="banner-10">
					<h2>Global presence – wherever you are, whenever you need us. </h2>
				</div>
			</section>

		<?php endif; ?>
		</div>
	</header>
