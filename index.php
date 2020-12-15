<?php get_header(); ?>

<!-- HEADER -->
<div class="header-page">
	<header>
		<div class="bloc-rotation1"></div>
		<div class="bloc-rotation2"></div>
		<div class="profile-bloc">
			<?php 
			$arg = array(
				'post_type' => 'presentation',
				'order' => 'DESC'
			);
			$query = new WP_Query($arg);

			if($query->have_posts()) :
			while ($query->have_posts()) : $query->the_post(); 
			if(get_the_title() === "Lydie BALLIOT") :
			if (has_post_thumbnail()) :
			?>
			<img src="<?php the_post_thumbnail_url(); ?>" alt="image profile" />
			<?php endif; ?>
			<h1><?php the_title(); ?></h1>
			<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>

			<div class="separator"></div>
			<p><?php the_field('metier'); ?></p>
		</div>
	</header>
	<!-- PROFILE PRESENTATION -->
	<section id="profile-presentation">
		<div class="title">
			<h2>Présentation</h2>
			<h3>À propos</h3>
		</div>
		<?php 
			$query = new WP_Query($arg);
		
			if($query->have_posts()) :
			while ($query->have_posts()) : $query->the_post(); 
			if(get_the_title() === "Lydie BALLIOT") :
		?>
		<p>
			<?php echo get_the_content(); ?>
		</p>
		<p class="profile-presentation-stage">
			<?php echo get_the_excerpt( ); ?>
		</p>
		<a href="<?php the_field('cv'); ?>" target="_blank">
			<button>Visualiser le CV pdf</button>
		</a>
		<?php endif ?>
		<?php endwhile; ?>
		<?php endif; ?>
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