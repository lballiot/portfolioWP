<?php get_header(); ?>

<!-- HEADER -->
<div class="header-page">
	<header>
		<div class="bloc-rotation1"></div>
		<div class="bloc-rotation2"></div>
		<div class="profile-bloc">
			<?php 
				if(has_custom_logo()) :
				$logo = wp_get_attachment_image_src( get_theme_mod('custom_logo') );
			?>
			<img src="<?php echo $logo[0] ?>" alt="image profile" />
			<?php endif;?>
			<h1>Lydie BALLIOT</h1>
			<div class="separator"></div>
			<p>Développeur web junior</p>
		</div>
	</header>
	<!-- PROFILE PRESENTATION -->
	<section id="profile-presentation">
		<div class="nav-toggle">
			<div class="nav-toggle-bar"></div>
		</div>

		<nav class="menu">
			<?php wp_nav_menu( 'header-menu' ) ?>
		</nav>
		<div class="title">
			<h2>Présentation</h2>
			<h3>À propos</h3>
		</div>
		<p>
			Je m’appelle <strong>Lydie</strong>, je suis stagiaire de la
			formation “Développeur web et web mobile” à Numerica.
			<br />J’ai effectué un court parcours à l’école
			42. Passionnée par la conception graphique des interfaces et
			le développement web, je suis venu dans cette formation pour
			me spécialiser dans le
			<strong>développement front-end</strong>, avec l’intégration
			du <strong>design</strong>.
		</p>
		<p class="profile-presentation-stage">
			Je suis à la recherche d’un
			<strong class="profile-presentation-stage">stage</strong> en
			tant que développeur web et web mobile pour mars 2021.
		</p>
		<a href="<?php bloginfo('wpurl'); ?>/dist/cv/cv-Lydie-BALLIOT.pdf" target="_blank">
			<button>Visualiser le CV pdf</button>
		</a>
	</section>
</div>
<!-- PARTI REALISATIONS -->
<section id="realisations">
	<?php get_template_part( 'loop-project') ?>
</section>
<!-- PARTI COMPETENCES -->
<section id="competences">
	<?php get_template_part( 'loop-competence')?>
</section>
<!-- PARTI CONTACT -->
<section id="contact">
	<?php get_template_part( 'contact') ?>
</section>



<?php get_footer(); ?>