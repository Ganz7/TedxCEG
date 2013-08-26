<header>
	<div class="inner">
		<img src="<?php echo base_url(); ?>assets/images/tedx-logo-black.png" width="205" height="50">
		<nav>
			<ul>
				<li <?php if($nav1) { ?>class="active"<?php } ?>><a href="<? echo base_url(); ?>">HOME</a></li>
				<li <?php if($nav2) { ?>class="active"<?php } ?>><a href="<? echo base_url(); ?>about">ABOUT</a></li>
				<li <?php if($nav3) { ?>class="active"<?php } ?>><a href="<? echo base_url(); ?>events">EVENTS & SPONSORS</a></li>
				<li <?php if($nav4) { ?>class="active"<?php } ?>><a href="<? echo base_url(); ?>speakers">SPEAKERS</a></li>
				<li <?php if($nav5) { ?>class="active"<?php } ?>><a href="<? echo base_url(); ?>tickets">TICKETS</a></li>
				<li <?php if($nav6) { ?>class="active"<?php } ?>><a href="<? echo base_url(); ?>contact">CONTACT</a></li>
			</ul>
		</nav>
	</div>
</header>